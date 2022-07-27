<?php
 session_start();
 include("../redundant/_connection.php");
    $refid =$_POST["refid"];
    $pass1=$_POST['pass1'];

 $sql = "SELECT * FROM exams WHERE exam_no = '$refid'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    $record = mysqli_fetch_assoc($result);

  if($record["exam_password"] == $pass1)
  {
      echo "EQUAL";
  }
else
{
    echo "NOT";
}

