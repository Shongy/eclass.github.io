<?php
 session_start();
 include("../redundant/_connection.php");
 
    $class_code=$_POST['classCode'];
  $student_account_no=$_SESSION["user"];

  echo '<center><button class="btn btn-sm btn-danger Dsubmit " style="border-radius:2px;"id='.$class_code.' value='.$class_code.'><center><i class="ace-icon glyphicon glyphicon-remove "></i> Cancel</center> </button></center>';

$query="Select * FROM courses where class_code='$class_code'";

     $result=mysqli_query($connection,$query) or die (mysqli_error($connection));
                        if($record=mysqli_fetch_assoc($result))
                        {
                            $teacher_account_no=$record['teacher_account_no'];  
                        }
  
    $datenow = date('Y-m-d');

    $table="students_request";
        $query2="INSERT INTO $table (teacher_account_no,student_account_no,class_code,request_date,status) VALUES('$teacher_account_no','$student_account_no','$class_code','$datenow','Unconfirmed')";
        
        mysqli_query($connection,$query2) or die(mysqli_error($connection,$query2));

         $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has requested to join <a href=\"mycourse.php?classcode=".$class_code."\">".$record["course_title"]."</a>.', 111, ".$_SESSION["user"].")";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));



                         

?> 