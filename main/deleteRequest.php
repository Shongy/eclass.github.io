
<?php
 session_start();
 include("../redundant/_connection.php");
 if(isset($_POST['requestNo']))
 {
     $request_no=$_POST['requestNo'];

$query="Delete From students_request where request_no='$request_no'";
     mysqli_query($connection,$query) or die (mysqli_error($connection));

 }
else
{
     $class_code=$_POST['classCode'];
  $student_account_no=$_SESSION["user"];
   
                           echo '<center><button class="btn btn-sm btn-success Ssubmit " style="border-radius:2px;"id='.$class_code.' value='.$class_code.'><center><i class="ace-icon fa fa-paper-plane"></i> Send</center> </button></center>';


    $query2="Delete From students_request where class_code='$class_code' and student_account_no='$student_account_no'";
     mysqli_query($connection,$query2) or die (mysqli_error($connection));
    
}


 ?>
