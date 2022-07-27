<?php
	include("../redundant/_connection.php");
	$usertype = $_GET["usertype"];			
	$username = $_GET['username'];
	$confirmationCode = $_GET["confirmationCode"];
	if($usertype == 11) {
		$query = "SELECT `teacher_confirmationcode` FROM `accounts_teacher` ";
		$query .= "WHERE `teacher_username` = '$username'";
		$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
		$record = mysqli_fetch_assoc($result);
		if($record["teacher_confirmationcode"] == $confirmationCode) {
			mkdir("../assets/images/user-teachers/$username");
			//mkdir("usr-dir/$username/avatars");
			$query = "UPDATE `accounts_teacher` ";
			$query .= "SET `teacher_confirmationcode` = 0, `teacher_status` = 'Active' ";
			$query .= "WHERE `teacher_username` = '$username'"; 
			$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
		}
	} else if($usertype == 111) {
		$query = "SELECT `student_confirmationcode` FROM `accounts_student` ";
		$query .= "WHERE `student_username` = '$username'";
		$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
		$record = mysqli_fetch_assoc($result);
		if($record["student_confirmationcode"] == $confirmationCode) {
			mkdir("../assets/images/user-students/$username");
			//mkdir("usr-dir/$username/avatars");*/
			$query = "UPDATE `accounts_student` ";
			$query .= "SET `student_confirmationcode` = 0, `student_status` = 'Active' ";
			$query .= "WHERE `student_username` = '$username'"; 
			$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
		}
	}
	header("Location: login.php");
?>