<?php
    session_start();
        
    $length = 6;
       // function generateRandomString($length = 10) {
    $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
    $charactersLength = strlen($characters);
    $classcode = $_POST["prefix"];
    for ($i = 0; $i < $length; $i++) {
        $classcode .= $characters[rand(0, $charactersLength - 1)];
    }
           
            $title=$_POST["course_title"];
            $code=$_POST["course_code"];
            $desc=$_POST["about"];
            $datenow = date('Y-m-d');
            $active = "Active";
           
            $id = $_SESSION["user"];
       
            include("../redundant/_connection.php");

            $sql = "INSERT INTO `courses`(`class_code`, `teacher_account_no`, `course_title`, `course_code`, `course_description`, `status`, `datecreated`) VALUES ('$classcode','$id','$title','$code','$desc','$active','$datenow')";
            mysqli_query($connection,$sql) or die(mysqli_error($connection));
            $_SESSION["classcode"] = $classcode;
            $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'created a new class of ".$title.".', 11, ".$_SESSION["user"].")";
            mysqli_query($connection,$sql) or die(mysqli_error($connection));
          
        if (isset($_POST["addstudent"]))
            {
                $studentlist = $_POST["addstudent"];
                foreach ($studentlist as $student)
                {
                    $sql2 ="INSERT INTO `enrolled_students`(`student_account_no`, `class_code`, `enroll_date`) VALUES ('$student','$classcode','$datenow')";
                    mysqli_query($connection,$sql2) or die(mysqli_error($connection));
                    $sql = "SELECT `student_firstname`, `student_middleinitial`, `student_lastname` FROM `accounts_student` WHERE student_account_no = $student";
                    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                    $record = mysqli_fetch_assoc($result);
                    $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'added ".$record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]." to the class of ".$title.".', 11, ".$_SESSION["user"].")";
                    mysqli_query($connection, $sql) or die(mysqli_error($connection));
                }
            
            
            }
                if(isset($_POST["upload"]))
                {
                    
                 $extension = end(explode(".", $_FILES["upload"]["name"])); 
                 $allowed_extension = array("xls", "xlsx", "csv"); 
                 if(in_array($extension, $allowed_extension)) 
                 {
                  $file = $_FILES["upload"]["tmp_name"]; 
                  include("../php-excel/PHPExcel.php"); 
                  $objPHPExcel = PHPExcel_IOFactory::load($file);

                
                  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
                  {
                   $highestRow = $worksheet->getHighestRow();
                   for($row=2; $row<=$highestRow; $row++)
                   {
 
                    $student_firstname = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                    $student_middleinitial = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                    $student_lastname = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                    $username = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                    $student_password = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                    
                       
                       
                    $exists = false;
                       
                       
                    $sql = "SELECT * FROM `accounts_admin` WHERE `admin_username` = '$username'";
                    $result = mysqli_query($connection, $sql);
                    if(mysqli_num_rows($result) > 0) {
                        $exists = true;
                    }
                    $sql = "SELECT * FROM `accounts_teacher` WHERE `teacher_username` = '$username'";
                    $result = mysqli_query($connection, $sql);
                    $result = mysqli_query($connection, $sql);
                    if(mysqli_num_rows($result) > 0) {
                        $exists = true;
                    }
                       
                       
                       
                    $sql = "SELECT * FROM `accounts_student` WHERE `student_username` = '$username'";
                    $result = mysqli_query($connection, $sql);
                   
                    if( $record = mysqli_fetch_assoc($result)) {
                        $exists = true;
                        $student_account_no = $record["student_account_no"];
                    }
                    else
                    { $exists = false; 
                    }
                    
                  
                        if($exists == false) {
                            $sql = "INSERT INTO `accounts_student`(`student_firstname`, `student_middleinitial`, `student_lastname`, `student_username`, `student_password`, `student_confirmationcode`, `student_status`) VALUES('$student_firstname', '$student_middleinitial', '$student_lastname', '$username', '".hash('sha256', $student_password)."', 0, 'Active')";
                            mysqli_query($connection, $sql);
                            $student_account_no = $connection -> insert_id;
                            $datenow = date("Y-m-d");     
                            $sql = "INSERT INTO `enrolled_students`(`student_account_no`, `class_code`, `enroll_date`, `request_no`) VALUES($student_account_no, '".$_SESSION["classcode"]."', '$datenow', 0)";
                            mysqli_query($connection, $sql) or die(mysqli_error($connection));
                            
                            /*
                            $filepath = "../assets/images/user-students/$username/";
                            if (file_exists($filename)) {
                                
                            } else {
                                mkdir($filepath);
                            }*/
                          
                        }else
                       {
                            
                           //$student_account_no = $connection -> insert_id;
                            $datenow = date("Y-m-d");     
                            $sql = "INSERT INTO `enrolled_students`(`student_account_no`, `class_code`, `enroll_date`, `request_no`) VALUES('$student_account_no', '".$_SESSION["classcode"]."', '$datenow', 0)";
                            mysqli_query($connection, $sql) or die(mysqli_error($connection));
                        
                       }
                        
                        
                            
                    
                       
                   }
                  } 
                     echo "<script> location.href='../main/mycourse.php'; </script>";
                 }
                 else
                 {
                  echo "<scrpit >alert(Invalid File)</script>";
                 }
                    
                }

                
?>