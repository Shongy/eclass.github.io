 <?php
    session_start(); 
    include("../redundant/_connection.php");
    
    if($_GET["notif"] == "passwordreset") {
        $sql = "SELECT `teacher_account_no` FROM `accounts_teacher` WHERE `teacher_status` = 'Lost'";
        $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));  
        echo mysqli_num_rows($result);   
    } elseif($_GET["notif"] == "confirmregistration") {
        $sql = "SELECT `teacher_account_no` FROM `accounts_teacher` WHERE `teacher_confirmationcode` != 0 AND `teacher_status` = 'Inactive'";
        $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));  
        echo mysqli_num_rows($result);   
    }
?>