<?php
    session_start();
    include("../redundant/_connection.php");
    if (isset($_GET["status"]))
    {
        if(isset($_GET["classcode"])) {
            $sql = "SELECT `course_title` FROM `courses` WHERE `class_code`='".$_GET["classcode"]."'";
            $_SESSION["classcode"] = $_GET["classcode"];
        }
        else {
            $sql = "SELECT `course_title` FROM `courses` WHERE `class_code`='".$_SESSION["classcode"]."'";
        }
        $result = mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
        $record = mysqli_fetch_assoc($result);
        $course_title = $record["course_title"];


        if ($_GET["status"]=="activate")
        {
            $sql = "UPDATE `courses` SET `status`='Active' WHERE `class_code`='".$_SESSION["classcode"]."'";
            mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has updated the status of <a href=\"mycourse.php?classcode=".$_SESSION["classcode"]."\">".$course_title."</a> to active.', 11, ".$_SESSION["user"].")";
            mysqli_query($connection, $sql) or die(mysqli_error($connection));
                echo "<script> location.href='../main/mycourse.php'; </script>";
        }
        elseif ($_GET["status"]=="deactivate")
        {
            $sql = "UPDATE `courses` SET `status`='Inactive' WHERE `class_code`='".$_SESSION["classcode"]."'";
            mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has updated the status of <a href=\"mycourse.php?classcode=".$_SESSION["classcode"]."\">".$course_title."</a> to inactive.', 11, ".$_SESSION["user"].")";
            mysqli_query($connection, $sql) or die(mysqli_error($connection));
            echo "<script> location.href='../main/mycourse.php'; </script>";
        }
        elseif ($_GET["status"]=="deactivatefromtable")
        {
            $sql = "UPDATE `courses` SET `status`='Inactive' WHERE `class_code`='".$_GET["classcode"]."'";
            mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has updated the status of <a href=\"mycourse.php?classcode=".$_GET["classcode"]."\">".$course_title."</a> to inactive.', 11, ".$_SESSION["user"].")";
            mysqli_query($connection, $sql) or die(mysqli_error($connection));
            echo "<script> location.href='../main/timeline.php'; </script>";
        }
        elseif($_GET["status"]=="delete")
        {
             $sql = "DELETE FROM `courses` WHERE `class_code`='".$_GET["classcode"]."'";
            mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has deleted <strong class=\"orange\">".$course_title."</strong> course.', 11, ".$_SESSION["user"].")";
            mysqli_query($connection, $sql) or die(mysqli_error($connection));
            echo "<script> location.href='../main/timeline.php'; </script>";
        }
        elseif($_GET["status"]=="addstudents")
        {
             if (isset($_POST["addstudent"]))
            {
                $studentlist = $_POST["addstudent"];
                 $classcode = $_SESSION["classcode"];
                 $datenow = date("Y-m-d");
                foreach ($studentlist as $student)
                {
                    
                $sql2 ="INSERT INTO `enrolled_students`(`student_account_no`, `class_code`, `enroll_date`, request_no) VALUES ('$student','$classcode','$datenow', '0')";
                mysqli_query($connection,$sql2) or die(mysqli_error($connection));
                $sql3 = "SELECT `student_firstname`, `student_middleinitial`, `student_lastname` FROM `accounts_student` WHERE `student_account_no` = $student";
                $result3 = mysqli_query($connection,$sql3) or die(mysqli_error($connection));
                $record3 = mysqli_fetch_assoc($result3);
                $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has added <a href=\"viewprofile.php?refid=$student&usertype=111\">".$record3["student_firstname"]." ".$record3["student_middleinitial"]." ".$record3["student_lastname"]."</a> to <a href=\"mycourse.php?classcode=".$_SESSION["classcode"]."\">".$course_title."</a> course.', 11, ".$_SESSION["user"].")";
                mysqli_query($connection, $sql) or die(mysqli_error($connection));
                echo "<script> location.href='../main/mycourse.php'; </script>";
                }
            }
            include("../redundant/_connection.php");
                
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
                     echo "<script> location.href='../main/mycourse.php'; </script>";
                  echo "<scrpit> alert(Invalid File); </script>";
                 }
                    echo "<script> location.href='../main/mycourse.php'; </script>";
                }
            
              echo "<script> location.href='../main/mycourse.php'; </script>";
        }
        elseif ($_GET["status"]=="leave")
        {
            $sql = "DELETE FROM `enrolled_students` WHERE `class_code`='".$_GET["classcode"]."'";
            mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            echo "<script> location.href='../main/timeline.php'; </script>";
        }
        elseif($_GET["status"]=="announcement")
        {
            
            
            $datenow = date("Y-m-d H:i:s");
            $header = $_POST["header"];
            
            $classcode = $_SESSION["classcode"];
            $sql = "INSERT INTO `posts` (`class_code`,`posted_date`,`post_title`,`post_desc`,`post_type`,viewed) VALUES('$classcode','$datenow','Announcement','$header','announcement',". 0 . ")";
            mysqli_query($connection,$sql) or die(mysqli_error($connection));
            
                    $studentNo=array();
        $query="Select * from enrolled_students where class_code='$classcode'";
        $result=mysqli_query($connection,$query) or die (mysqli_error($connection));
        while($record=mysqli_fetch_assoc($result))
        {
            $studentNo[]=$record["student_account_no"];
        }
        $arrlength=count($studentNo);
        
        $query ="Select * from posts where class_code='$classcode' and posted_date='$datenow' and post_title='Announcement' and post_desc='$header' and post_type='announcement'";
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
            
            $body = $_POST["body"];
             $sql3 = "INSERT INTO file_details(`post_no`,`file_name`,`file_link_or_path`)VALUES('$postno','$body','$body')";
            mysqli_query($connection,$sql3) or die(mysqli_error($connection));

            $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has added an announcement to <a href=\"mycourse.php?classcode=".$_SESSION["classcode"]."\">".$course_title."</a> course.', 11, ".$_SESSION["user"].")";
            mysqli_query($connection, $sql) or die(mysqli_error($connection));

            ?>

    <div id="postData">
                                <?php
                                    //$dom = new DOMDocument();
                                    //$dom->loadHTMLfile('http://remoteDomain/thispage.html');
                                    //$_SESSION["all"]="*";
                                    //$all=$_SESSION["all"];
                                    
                                     if(!isset($_GET["post_no"]))
                                    {
                                          $sql = "SELECT * FROM `posts` WHERE class_code = '".$_SESSION["classcode"]."'  ORDER BY post_no DESC";
                                    }
                                    else
                                    {
                                            $post_noF=$_SESSION["post_no"];
                                          $sql = "SELECT * FROM `posts` WHERE class_code = '".$_SESSION["classcode"]."' and post_no='$post_noF'  ORDER BY post_no DESC";
                                    }
                                    
                                    $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            echo "<script> document.getElementById('post').innerHTML ='Posts from the Class'; </script>";
                                            
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $post_title = $row["post_title"];
                                                $post_desc = $row["post_desc"];
                                                $postdate = $row["posted_date"];
                                                $post_no = $row["post_no"];
                                                $post_type = $row["post_type"];
                                               
                                                
                                                echo "<div class='card action-buttons clearfix'> <div class='row' style='width: 100%'>";
                                                if ($_SESSION["usertype"]!=111)
                                                {
                                                    echo "<button type='button' class='close deletemc' id=$post_no><i class='ace-icon fa fa-trash pull-right'></i></button> ";
                                                }
                                                
                                                echo "
                                                  <h2>$post_title</h2>
                                                  <h5>$postdate</h5><p>";
                                                
                                                
                                                  if($post_type == "announcement")
                                                  {
                                                      echo $post_desc;
                                                  }
                                                
                                                
                                                  echo "</p><div class='fakeimg clearfix' style='width:100%;'>
                                                ";
                                                  
                                                  $sql2 = "SELECT * FROM `file_details` WHERE `post_no` =".$post_no;
                                                  
                                                  $result2 = mysqli_query ($connection, $sql2) or die (mysqli_error($connection));
                                                        
                                                    if (mysqli_num_rows($result2)>0)
                                                    {
                                                        $count= 1;
                                                        if ($post_type=="files" )
                                                            {
                                                                echo "<center><strong>Click Files To Download</strong></center>";
                                                            }
                                                        while($row2 = mysqli_fetch_assoc($result2))
                                                        {
                                                            $filename = $row2["file_name"];
                                                            $filelink = $row2["file_link_or_path"];
                                                            
                                                            if ($post_type=="files" )
                                                            {
                                                                echo "<h4><strong>$count.)</strong><a href='$filelink'>$filename</a></h4>";
                                                                $count= $count+1;
                                                            }
                                                            
                                                            
                                                            
                                                            elseif ($post_type=="link")
                                                            {
                                                               
                                                                echo "<center><iframe width='420' height='345' src='../../../$filelink?autoplay=1'></iframe><center>";
                                                            }
                                                            
                                                            
                                                            
                                                            elseif($post_type=="announcement")
                                                            {
                                                                echo "<h4>$filename</h4>";
                                                            }
                                                            
                                                            
                                                            
                                                            
                                                            elseif($post_type=="exam")
                                                            {
                                                                if(($_SESSION["usertype"]!=111))
                                                               {
                                                                   echo "<strong><p id='editexam' class='pull-right'><a href='createexam.php?refid=$filelink&postno=$post_no' class='pull-right'>Edit Exam</a>";
                                                                   

                                                               }
                                                                $sql3 = "SELECT * FROM `exams` WHERE `exam_no` =".$filelink;
                                                                $result4 = mysqli_query ($connection, $sql3);
                                                                if ($record4 = mysqli_fetch_assoc($result4))
                                                                {
                                                                    $exam_no = $record4["exam_no"];
                                                                    $desc = $record4["exam_description"];
                                                                    $avail = $record4["availability"];
                                                                    $time_limit = $record4["time_limit"];
                                                                    $examdate = $record4["exam_date"];
                                                                    $exam_password = $record4["exam_password"];
                                                                    $examdateend = $record4["exam_date_expired"];
                                                                    ?>
                                    
                                                                    <dl class="dl-horizontal" id="dl">
                                                                    <h4>
                                                                    <dt>Exam Description:</dt>
                                                                        <dd><p><?php echo $desc; ?></p></dd>
                                                                    <dt>Exam Start @:</dt>
                                                                       <dd >
                                                                           <?php
                                                                                $dtz2 = new DateTimeZone("Asia/Manila");
                                                                                $date = new DateTime($examdate,$dtz2);
                                                                                echo $date->format('m/d/Y h:i a') ;
                                                                            ?>
                                                                           </dd>
                                                                        <dt>Exam End @:</dt>
                                                                       <dd >
                                                                           <?php
                                                                    
                                                                                $date1 = new DateTime($examdateend,$dtz2);
                                                                                echo $date1->format('m/d/Y h:i a') ;
                                                                            ?>
                                                                    <dt>Time Limit:</dt>
                                                                        <dd>  <?php echo $time_limit." Minutes"; ?></dd>

                                                                    <dt>Availability:</dt>
                                                                       <dd ><div id='<?php echo $exam_no; ?>' class="timer"></div></dd>
                                                                        
                                                                    </h4>
                                                                    </dl>
                                    
                                                                    <?php  if($_SESSION["usertype"] == 11) { ?>
                                                                        <div class="hidden" id="tobehide">
                                                                             <div class="alert alert-info">
                                                                            <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                            </button>
                                                                            <strong>Note:</strong>
                                                                                You can download results to .pdf, .xlxs
                                                                            </div>
                                                                        <h5><a href="#myTableOfSpecificationModal" class="open-tosmodal" data-target="#myTableOfSpecificationModal" data-toggle="modal" data-id="<?php echo $exam_no; ?>"><i class="ace-icon fa fa-list"></i> Table of Specification</a></h5>

                                                                         <h5><a href="#example" class="open-example" data-target="#example" data-toggle="modal" data-id="<?php echo $exam_no; ?>"><i class="ace-icon fa fa-list"></i> Examination Result</a></h5>
                                                                            </div>
                                                                    <?php } 
                                                                  
                                                                  
                                                                       
                                                                   
                                                                
                                                                    
                                                                }
                                                                
                                                            }
                                                            
                                                    

                                                        }
                                                    }
                                                  
                                                
                                                  echo "</div>
                                                 
                                                 
                                                </div></div>";
                                                
                                                
                                            }
                                         }else
                                        {
                                            echo "<script> document.getElementById('post').innerHTML ='NO POST YET'; </script>";
                                          }
                                
                                ?>
                                </div>
                                
                                
            <?php
        }
    
    if($_GET["status"]=="publish")
    {
        $dtz = new DateTimeZone("Asia/Manila"); 
        
        
        $exam_name = $_POST["exam_name"];
        $exam_desc = $_POST["exam_desc"];
        $exam_password = $_POST["exam_password"];
        $date= strtotime($_POST["datetime"]);
        $exam_date = date('Y-m-d H:i:s',$date);
        
        
        $date2 = strtotime($_POST["datetimeexpired"]);
       $exam_date_expired = date('Y-m-d H:i:s',$date2);
       
        $yourdatetime = $_POST["timelimit"];
        $timestamp = strtotime($yourdatetime);
        
        
       $datenow = date("Y-m-d H:i:s");
        $timelimit = (date('H', $timestamp) * 60) + (date('i', $timestamp)) + (date('s', $timestamp) / 60);

        if(!isset($_GET["examno"]))
        {
            $exam_no = $_SESSION["exam_no"];
        }
        else
        {
            $exam_no = $_GET["examno"];
        }
        
        
        $query = "UPDATE `exams` 
        SET `exam_name`='$exam_name',
        `exam_description`='$exam_desc',
        `time_limit`='$timelimit',
        `exam_date`='$exam_date',
        `exam_date_expired`='$exam_date_expired',
        `exam_password`='$exam_password',
        `availability`='Available',
        `date_publish`='$datenow'
        WHERE `exam_no` ='$exam_no'";
        mysqli_query($connection,$query) or die(mysqli_error($connection));
       
        
        $datenow = date("Y-m-d H:i:s");
        
        $classcode = $_SESSION["classcode"];
        if(isset($_GET["postno"]))
        {
            $postno = $_GET["postno"];
            $sql = "DELETE FROM `posts` WHERE `post_no` = $postno";
            mysqli_query($connection,$sql) or die(mysqli_error($connection));
            $sql = "DELETE FROM `file_details` WHERE `post_no` = $postno";
            mysqli_query($connection,$sql) or die(mysqli_error($connection));
        }
        $sql = "INSERT INTO `posts` (`class_code`,`posted_date`,`post_title`,`post_desc`,`post_type`,viewed) VALUES('$classcode','$datenow','$exam_name','$exam_desc','exam',". 0 . ")";
        mysqli_query($connection,$sql) or die(mysqli_error($connection));


        $sql2 = "SELECT * FROM `posts` ORDER BY `post_no` DESC";
        $result = mysqli_query ($connection, $sql2);
        if ($record = mysqli_fetch_assoc($result))
        {
            $postno = $record["post_no"];
        }
        
        
         $sql3 = "INSERT INTO file_details(`post_no`,`file_name`,`file_link_or_path`)VALUES('$postno','$exam_name','$exam_no')";
        mysqli_query($connection,$sql3) or die(mysqli_error($connection));
        
        $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has added an examination <strong class=\"orange\">$exam_name</strong> to <a href=\"mycourse.php?classcode=".$_SESSION["classcode"]."\">".$course_title."</a> course.', 11, ".$_SESSION["user"].")";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
            
       
        if(!isset($_GET["mycourse"])){
            echo "<script> location.href='../main/mycourse.php'; </script>";
        }
        else
        {
            ?>
                 <div id="postData">
                                <?php
                                    //$dom = new DOMDocument();
                                    //$dom->loadHTMLfile('http://remoteDomain/thispage.html');
                                    //$_SESSION["all"]="*";
                                    //$all=$_SESSION["all"];
                                    
                                     if(!isset($_GET["post_no"]))
                                    {
                                          $sql = "SELECT * FROM `posts` WHERE class_code = '".$_SESSION["classcode"]."'  ORDER BY post_no DESC";
                                    }
                                    else
                                    {
                                            $post_noF=$_SESSION["post_no"];
                                          $sql = "SELECT * FROM `posts` WHERE class_code = '".$_SESSION["classcode"]."' and post_no='$post_noF'  ORDER BY post_no DESC";
                                    }
                                    
                                    $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            echo "<script> document.getElementById('post').innerHTML ='Posts from the Class'; </script>";
                                            
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $post_title = $row["post_title"];
                                                $post_desc = $row["post_desc"];
                                                $postdate = $row["posted_date"];
                                                $post_no = $row["post_no"];
                                                $post_type = $row["post_type"];
                                               
                                                
                                                echo "<div class='card action-buttons clearfix'> <div class='row' style='width: 100%'>";
                                                if ($_SESSION["usertype"]!=111)
                                                {
                                                    echo "<button type='button' class='close deletemc' id=$post_no><i class='ace-icon fa fa-trash pull-right'></i></button> ";
                                                }
                                                
                                                echo "
                                                  <h2>$post_title</h2>
                                                  <h5>$postdate</h5><p>";
                                                
                                                
                                                  if($post_type == "announcement")
                                                  {
                                                      echo $post_desc;
                                                  }
                                                
                                                
                                                  echo "</p><div class='fakeimg clearfix' style='width:100%;'>
                                                ";
                                                  
                                                  $sql2 = "SELECT * FROM `file_details` WHERE `post_no` =".$post_no;
                                                  
                                                  $result2 = mysqli_query ($connection, $sql2) or die (mysqli_error($connection));
                                                        
                                                    if (mysqli_num_rows($result2)>0)
                                                    {
                                                        $count= 1;
                                                        if ($post_type=="files" )
                                                            {
                                                                echo "<center><strong>Click Files To Download</strong></center>";
                                                            }
                                                        while($row2 = mysqli_fetch_assoc($result2))
                                                        {
                                                            $filename = $row2["file_name"];
                                                            $filelink = $row2["file_link_or_path"];
                                                            
                                                            if ($post_type=="files" )
                                                            {
                                                                echo "<h4><strong>$count.)</strong><a href='$filelink'>$filename</a></h4>";
                                                                $count= $count+1;
                                                            }
                                                            
                                                            
                                                            
                                                            elseif ($post_type=="link")
                                                            {
                                                               
                                                                echo "<center><iframe width='420' height='345' src='../../../$filelink?autoplay=1'></iframe><center>";
                                                            }
                                                            
                                                            
                                                            
                                                            elseif($post_type=="announcement")
                                                            {
                                                                echo "<h4>$filename</h4>";
                                                            }
                                                            
                                                            
                                                            
                                                            
                                                            elseif($post_type=="exam")
                                                            {
                                                                if(($_SESSION["usertype"]!=111))
                                                               {
                                                                   echo "<strong><p id='editexam' class='pull-right'><a href='createexam.php?refid=$filelink&postno=$post_no' class='pull-right'>Edit Exam</a>";
                                                                   

                                                               }
                                                                $sql3 = "SELECT * FROM `exams` WHERE `exam_no` =".$filelink;
                                                                $result4 = mysqli_query ($connection, $sql3);
                                                                if ($record4 = mysqli_fetch_assoc($result4))
                                                                {
                                                                    $exam_no = $record4["exam_no"];
                                                                    $desc = $record4["exam_description"];
                                                                    $avail = $record4["availability"];
                                                                    $time_limit = $record4["time_limit"];
                                                                    $examdate = $record4["exam_date"];
                                                                    $exam_password = $record4["exam_password"];
                                                                    $examdateend = $record4["exam_date_expired"];
                                                                    ?>
                                    
                                                                    <dl class="dl-horizontal" id="dl">
                                                                    <h4>
                                                                    <dt>Exam Description:</dt>
                                                                        <dd><p><?php echo $desc; ?></p></dd>
                                                                    <dt>Exam Start @:</dt>
                                                                       <dd >
                                                                           <?php
                                                                                $dtz2 = new DateTimeZone("Asia/Manila");
                                                                                $date = new DateTime($examdate,$dtz2);
                                                                                echo $date->format('m/d/Y h:i a') ;
                                                                            ?>
                                                                           </dd>
                                                                        <dt>Exam End @:</dt>
                                                                       <dd >
                                                                           <?php
                                                                    
                                                                                $date1 = new DateTime($examdateend,$dtz2);
                                                                                echo $date1->format('m/d/Y h:i a') ;
                                                                            ?>
                                                                    <dt>Time Limit:</dt>
                                                                        <dd>  <?php echo $time_limit." Minutes"; ?></dd>

                                                                    <dt>Availability:</dt>
                                                                       <dd ><div id='<?php echo $exam_no; ?>' class="timer"></div></dd>
                                                                        
                                                                    </h4>
                                                                    </dl>
                                    
                                                                    <?php  if($_SESSION["usertype"] == 11) { ?>
                                                                        <div class="hidden" id="tobehide">
                                                                             <div class="alert alert-info">
                                                                            <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                            </button>
                                                                            <strong>Note:</strong>
                                                                                You can download results to .pdf, .xlxs
                                                                            </div>
                                                                        <h5><a href="#myTableOfSpecificationModal" class="open-tosmodal" data-target="#myTableOfSpecificationModal" data-toggle="modal" data-id="<?php echo $exam_no; ?>"><i class="ace-icon fa fa-list"></i> Table of Specification</a></h5>

                                                                         <h5><a href="#example" class="open-example" data-target="#example" data-toggle="modal" data-id="<?php echo $exam_no; ?>"><i class="ace-icon fa fa-list"></i> Examination Result</a></h5>
                                                                            </div>
                                                                    <?php } 
                                                                  
                                                                  
                                                                       
                                                                   
                                                                
                                                                    
                                                                }
                                                                
                                                            }
                                                            
                                                    

                                                        }
                                                    }
                                                  
                                                
                                                  echo "</div>
                                                 
                                                 
                                                </div></div>";
                                                
                                                
                                            }
                                         }else
                                        {
                                            echo "<script> document.getElementById('post').innerHTML ='NO POST YET'; </script>";
                                          }
                                
                                ?>
                                </div>
                                
                                
            <?php
        }
    }
             
        
    }
if(isset($_GET["delpost"]))
{
    $postid = $_GET["postid"];
    $sql = "SELECT `post_type`, `post_title`, `course_title` FROM `posts` INNER JOIN `courses` ON courses.class_code = posts.class_code WHERE `post_no` = $postid";
    $result =  mysqli_query($connection,$sql) or die(mysqli_error($connection));
    $record = mysqli_fetch_assoc($result);
    $course_title = $record["course_title"];

    $sql = "DELETE FROM `posts` WHERE `post_no` =".$postid;
    mysqli_query($connection,$sql) or die(mysqli_error($connection));
    $sql = "DELETE FROM `file_details` WHERE `post_no` =".$postid;
    mysqli_query($connection,$sql) or die(mysqli_error($connection));
    $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has deleted a(n) ".$record["post_type"]." <strong class=\"orange\">".$record["post_title"]."</strong> to <a href=\"mycourse.php?classcode=".$_SESSION["classcode"]."\">".$course_title."</a> course.', 11, ".$_SESSION["user"].")";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
    ?>
            <div id="postData">
                                <?php
                                    //$dom = new DOMDocument();
                                    //$dom->loadHTMLfile('http://remoteDomain/thispage.html');
                                    //$_SESSION["all"]="*";
                                    //$all=$_SESSION["all"];
                                    
                                     if(!isset($_GET["post_no"]))
                                    {
                                          $sql = "SELECT * FROM `posts` WHERE class_code = '".$_SESSION["classcode"]."'  ORDER BY post_no DESC";
                                    }
                                    else
                                    {
                                            $post_noF=$_SESSION["post_no"];
                                          $sql = "SELECT * FROM `posts` WHERE class_code = '".$_SESSION["classcode"]."' and post_no='$post_noF'  ORDER BY post_no DESC";
                                    }
                                    
                                    $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            echo "<script> document.getElementById('post').innerHTML ='Posts from the Class'; </script>";
                                            
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $post_title = $row["post_title"];
                                                $post_desc = $row["post_desc"];
                                                $postdate = $row["posted_date"];
                                                $post_no = $row["post_no"];
                                                $post_type = $row["post_type"];
                                               
                                                
                                                echo "<div class='card action-buttons clearfix'> <div class='row' style='width: 100%'>";
                                                if ($_SESSION["usertype"]!=111)
                                                {
                                                    echo "<button type='button' class='close deletemc' id=$post_no><i class='ace-icon fa fa-trash pull-right'></i></button> ";
                                                }
                                                
                                                echo "
                                                  <h2>$post_title</h2>
                                                  <h5>$postdate</h5><p>";
                                                
                                                
                                                  if($post_type == "announcement")
                                                  {
                                                      echo $post_desc;
                                                  }
                                                
                                                
                                                  echo "</p><div class='fakeimg clearfix' style='width:100%;'>
                                                ";
                                                  
                                                  $sql2 = "SELECT * FROM `file_details` WHERE `post_no` =".$post_no;
                                                  
                                                  $result2 = mysqli_query ($connection, $sql2) or die (mysqli_error($connection));
                                                        
                                                    if (mysqli_num_rows($result2)>0)
                                                    {
                                                        $count= 1;
                                                        if ($post_type=="files" )
                                                            {
                                                                echo "<center><strong>Click Files To Download</strong></center>";
                                                            }
                                                        while($row2 = mysqli_fetch_assoc($result2))
                                                        {
                                                            $filename = $row2["file_name"];
                                                            $filelink = $row2["file_link_or_path"];
                                                            
                                                            if ($post_type=="files" )
                                                            {
                                                                echo "<h4><strong>$count.)</strong><a href='$filelink'>$filename</a></h4>";
                                                                $count= $count+1;
                                                            }
                                                            
                                                            
                                                            
                                                            elseif ($post_type=="link")
                                                            {
                                                               
                                                                echo "<center><iframe width='420' height='345' src='../../../$filelink?autoplay=1'></iframe><center>";
                                                            }
                                                            
                                                            
                                                            
                                                            elseif($post_type=="announcement")
                                                            {
                                                                echo "<h4>$filename</h4>";
                                                            }
                                                            
                                                            
                                                            
                                                            
                                                            elseif($post_type=="exam")
                                                            {
                                                                if(($_SESSION["usertype"]!=111))
                                                               {
                                                                   echo "<strong><p id='editexam' class='pull-right'><a href='createexam.php?refid=$filelink&postno=$post_no' class='pull-right'>Edit Exam</a>";
                                                                   

                                                               }
                                                                $sql3 = "SELECT * FROM `exams` WHERE `exam_no` =".$filelink;
                                                                $result4 = mysqli_query ($connection, $sql3);
                                                                if ($record4 = mysqli_fetch_assoc($result4))
                                                                {
                                                                    $exam_no = $record4["exam_no"];
                                                                    $desc = $record4["exam_description"];
                                                                    $avail = $record4["availability"];
                                                                    $time_limit = $record4["time_limit"];
                                                                    $examdate = $record4["exam_date"];
                                                                    $exam_password = $record4["exam_password"];
                                                                    $examdateend = $record4["exam_date_expired"];
                                                                    ?>
                                    
                                                                    <dl class="dl-horizontal" id="dl">
                                                                    <h4>
                                                                    <dt>Exam Description:</dt>
                                                                        <dd><p><?php echo $desc; ?></p></dd>
                                                                    <dt>Exam Start @:</dt>
                                                                       <dd >
                                                                           <?php
                                                                                $dtz2 = new DateTimeZone("Asia/Manila");
                                                                                $date = new DateTime($examdate,$dtz2);
                                                                                echo $date->format('m/d/Y h:i a') ;
                                                                            ?>
                                                                           </dd>
                                                                        <dt>Exam End @:</dt>
                                                                       <dd >
                                                                           <?php
                                                                    
                                                                                $date1 = new DateTime($examdateend,$dtz2);
                                                                                echo $date1->format('m/d/Y h:i a') ;
                                                                            ?>
                                                                    <dt>Time Limit:</dt>
                                                                        <dd>  <?php echo $time_limit." Minutes"; ?></dd>

                                                                    <dt>Availability:</dt>
                                                                       <dd ><div id='<?php echo $exam_no; ?>' class="timer"></div></dd>
                                                                        
                                                                    </h4>
                                                                    </dl>
                                    
                                                                    <?php  if($_SESSION["usertype"] == 11) { ?>
                                                                        <div class="hidden" id="tobehide">
                                                                             <div class="alert alert-info">
                                                                            <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                            </button>
                                                                            <strong>Note:</strong>
                                                                                You can download results to .pdf, .xlxs
                                                                            </div>
                                                                        <h5><a href="#myTableOfSpecificationModal" class="open-tosmodal" data-target="#myTableOfSpecificationModal" data-toggle="modal" data-id="<?php echo $exam_no; ?>"><i class="ace-icon fa fa-list"></i> Table of Specification</a></h5>

                                                                         <h5><a href="#example" class="open-example" data-target="#example" data-toggle="modal" data-id="<?php echo $exam_no; ?>"><i class="ace-icon fa fa-list"></i> Examination Result</a></h5>
                                                                            </div>
                                                                    <?php } 
                                                                  
                                                                  
                                                                       
                                                                   
                                                                
                                                                    
                                                                }
                                                                
                                                            }
                                                            
                                                    

                                                        }
                                                    }
                                                  
                                                
                                                  echo "</div>
                                                 
                                                 
                                                </div></div>";
                                                
                                                
                                            }
                                         }else
                                        {
                                            echo "<script> document.getElementById('post').innerHTML ='NO POST YET'; </script>";
                                          }
                                
                                ?>
                                </div>
                                
                                
    <?php
}
?>