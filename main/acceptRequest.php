<?php
 session_start();
 include("../redundant/_connection.php");
 
    $class_code=$_POST['classCode'];
    $student_account_no=$_POST['studentAccountNo'];
    $request_no=$_POST['requestNo'];

    $datenow = date('Y-m-d');

    $table="enrolled_students";
    $query2="INSERT INTO $table (request_no,student_account_no,class_code,enroll_date) VALUES('$request_no','$student_account_no','$class_code','$datenow')";
        
    mysqli_query($connection,$query2) or die(mysqli_error($connection,$query2));
    
    $query="Delete from students_request where request_no='$request_no'";
      mysqli_query($connection,$query) or die(mysqli_error($connection,$query));

    $sql = "SELECT `student_firstname`, `student_middleinitial`, `student_lastname` FROM `accounts_student` WHERE `student_account_no` = '$student_account_no'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    $record = mysqli_fetch_assoc($result);
    $student_firstname= $record["student_firstname"];
    $student_middleinitial = $record["student_middleinitial"];
    $student_lastname = $record["student_lastname"];

    $sql = "SELECT `course_title` FROM `courses` WHERE `class_code` = '$class_code'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    $record = mysqli_fetch_assoc($result);
    $course_title = $record["course_title"];

    $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'accepted <a href=\"viewprofile.php?refid=".$student_account_no."&usertype=111\">".$student_firstname." ".$student_middleinitial." ".$student_firstname."</a> to join <a href=\"mycourse.php?classcode=".$class_code."\">".$course_title."</a> class.', 11, ".$_SESSION["user"].")";
    mysqli_query($connection, $sql) or die(mysqli_error($connection));

     $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'was accepted on joining <a href=\"mycourse.php?classcode=".$class_code."\">".$course_title."</a> class.', 111, ".$student_account_no.")";
    mysqli_query($connection, $sql) or die(mysqli_error($connection));

?> 