<?php
    session_start();
	include('../redundant/_connection.php');
	if($_SESSION["usertype"] == 11) {
	    //$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'logged in.', 11, ".$_SESSION["user"].")";
        //mysqli_query($connection, $sql) or die(mysqli_error($connection));
	} else{
		//$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'logged out.', 111, ".$_SESSION["user"].")";
   		//mysqli_query($connection, $sql) or die(mysqli_error($connection));
	}

    session_destroy();
    header('location: ../main/login.php');
?>