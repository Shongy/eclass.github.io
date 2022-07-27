<?php
	if($_POST["message-checkEmailAddressOfRecovery"] == "Exists") {
		session_start();
		include('../redundant/_connection.php');
		$emailAddress = $_POST['emailAddressOfRecovery'];
		$query = "SELECT `teacher_username`, `teacher_password` FROM `accounts_teacher` ";
		$query .= "WHERE `teacher_email` = '$emailAddress'";
		$result = mysqli_query($connection ,$query) or die(mysqli_error($conn));
		if(mysqli_num_rows($result) > 0){
			$record = mysqli_fetch_assoc($result);
			$usertype = 11;
			$username = $record["teacher_username"];
			$password = $record['teacher_password'];
		} else{
			$query = "SELECT `student_username`, `student_password` FROM `accounts_student` ";
			$query .= "WHERE `student_email` = '$emailAddress'";
			$result = mysqli_query($connection ,$query) or die(mysqli_error($conn));
			if(mysqli_num_rows($result) > 0){
				$record = mysqli_fetch_assoc($result);
				$usertype = 111;
				$username = $record["student_username"];
				$password = $record['student_password'];
			} else{
				header("Location: login.php");
			}
		}
		header("Location: php-mailer.php?action=recoveraccount&usertype=$usertype&emailAddress=$emailAddress&username=$username&password=$password");
	} elseif($_POST["message-checkEmailAddressOfRecovery"] == "Available") {
		header("location: login.php?error=emaildoesntexists");
	}
?>