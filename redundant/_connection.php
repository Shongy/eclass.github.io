<?php

$host = "localhost";

$user = "root";
$pass = "";
$database = "bnshiexam_db";


$connection = mysqli_connect ($host ,$user,$pass, $database);



if (mysqli_connect_errno($connection))
        {
            echo "<script> alert('database connection error! '); </script>";             
        }

    
?>