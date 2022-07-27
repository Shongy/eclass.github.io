<?php include("../redundant/_connection.php");
                session_start();
                if(isset($_POST["submit"]))
                {
                 $extension = end(explode(".", $_FILES["grades"]["name"])); 
                 $allowed_extension = array("xls", "xlsx", "csv"); 
                 if(in_array($extension, $allowed_extension)) 
                 {
                  $file = $_FILES["grades"]["tmp_name"]; 
                  include("../php-excel/PHPExcel.php"); 
                  $objPHPExcel = PHPExcel_IOFactory::load($file);
                $gradeinfo = $_POST["gradeinfo"];
                    $cc =  $_SESSION["classcode"];
                     $datenow = date("Y-m-d H:i:s");
                 $sql2 = "INSERT INTO grades(`grade_desc`,`date_upload`,`class_code`)VALUES('$gradeinfo','$datenow','$cc')";
                mysqli_query($connection,$sql2) or die(mysqli_error($connection));
                     
                     
                     
                   $query ="SELECT * FROM `grades` ORDER BY `grade_id` DESC";
                 $result1 = mysqli_query($connection, $query);
                     if( $record2 = mysqli_fetch_assoc($result1)) {
                        $gid = $record2["grade_id"];
                    }
               
                     $sql = "INSERT INTO `posts` (`class_code`,`posted_date`,`post_title`,`post_desc`,`post_type`,viewed) VALUES('$cc','$datenow','Grades','$gradeinfo','grades',". 0 . ")";
                mysqli_query($connection,$sql) or die(mysqli_error($connection));
                     
                     
                             $studentNo=array();
        $query="Select * from enrolled_students where class_code='$cc'";
        $result=mysqli_query($connection,$query) or die (mysqli_error($connection));
        while($record=mysqli_fetch_assoc($result))
        {
            $studentNo[]=$record["student_account_no"];
        }
        $arrlength=count($studentNo);
        
        $query ="Select * from posts where class_code='$cc' and posted_date='$datenow' and post_title='Grades' and post_desc='$gradeinfo' and post_type='grades'";
        $result=mysqli_query($connection, $query)or die(mysqli_error($connection));
        if($record=mysqli_fetch_assoc($result))
        {
            $postNo=$record["post_no"];
        }
                     
                      for($x=0;$x<$arrlength;$x++)
        {
             $query="Insert Into post_details (post_no, student_account_no) Values('$postNo','$studentNo[$x]')";
            mysqli_query($connection,$query)or die(mysqli_error($connection));
            
                
        }

                $sql2 = "SELECT * FROM `posts` ORDER BY `post_no` DESC";
                $result = mysqli_query ($connection, $sql2);
                if ($record = mysqli_fetch_assoc($result))
                {
                    $postno = $record["post_no"];
                }

             
                 $sql3 = "INSERT INTO file_details(`post_no`,`file_name`,`file_link_or_path`)VALUES('$postno','$gid','$gid')";
                mysqli_query($connection,$sql3) or die(mysqli_error($connection));

                $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has uploaded grades to <a href=\"mycourse.php?classcode=".$_SESSION["classcode"]."\">".$cc."</a> course.', 11, ".$_SESSION["user"].")";
                mysqli_query($connection, $sql) or die(mysqli_error($connection));
                     
                     
                  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
                  {
                   $highestRow = $worksheet->getHighestRow();
                   for($row=2; $row<=$highestRow; $row++)
                   {
 
                    $student_uname = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                    $grade = mysqli_real_escape_string($connection, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                       
                    $sql3 = "INSERT INTO grade_details(`grade_id`,`student_uname`,`grade`)VALUES('$gid','$student_uname','$grade')";
                    mysqli_query($connection,$sql3) or die(mysqli_error($connection));
                       
                
                            
                    
                       
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