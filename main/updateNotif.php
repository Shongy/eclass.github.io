  <?php  
session_start();
    $id=$_POST["pass1"];

$student_account_no=$_SESSION["user"];
    include("../redundant/_connection.php");
     $query="Delete from post_details where post_no='$id' and student_account_no='$student_account_no'";
     mysqli_query($connection, $query) or die (mysqli_error($connection));


    ?>