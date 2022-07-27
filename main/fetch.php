<?php  
 //fetch.php  
session_start();
$_SESSION["question_id"] = "";
 include("../redundant/_connection.php");
 if(isset($_POST["question_id"]))  
 {    $_SESSION["question_id"] = $_POST["question_id"];
      $query = "SELECT * FROM exam_details WHERE question_id ='".$_SESSION["question_id"]."'";  
      $result = mysqli_query($connection, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row, JSON_UNESCAPED_SLASHES);  
 }  
if(isset($_POST["exam_no"]))  
 {    
      $query = "SELECT * FROM exams WHERE exam_no ='".$_POST["exam_no"]."'";  
      $result = mysqli_query($connection, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>