<?php
	if($_POST["message-checkEmailAddressOfRecovery"] == "Exists") {
		session_start();

		function getUserType() {
			include('../redundant/_connection.php');
			$username = $_POST['emailAddressOfRecovery'];

			$query = "SELECT `teacher_account_no` FROM `accounts_teacher` ";
			$query .= "WHERE `teacher_confirmationcode` = 0 AND `teacher_username` = '$username'";
			$result = mysqli_query($connection ,$query) or die(mysqli_error($connection));
			$record = mysqli_fetch_assoc($result);
			if(mysqli_num_rows($result)) {
				$query = "UPDATE `accounts_teacher` SET `teacher_status` = 'Lost' WHERE `teacher_account_no` = ". $record["teacher_account_no"];
				mysqli_query($connection ,$query) or die(mysqli_error($connection));
				header("Location: recovery-notification.php?notiftype=1");
			} else {
				$query = "SELECT `student_account_no` FROM `accounts_student` ";
				$query .= "WHERE `student_confirmationcode` = 0 AND `student_username` = '$username'";
				$result = mysqli_query($connection ,$query) or die(mysqli_error($connection));
				$record = mysqli_fetch_assoc($result);
				if(mysqli_num_rows($result)) {
					$query = "UPDATE `accounts_student` SET `student_status` = 'Lost' WHERE `student_account_no` = ". $record["student_account_no"];
					mysqli_query($connection ,$query) or die(mysqli_error($connection));
					header("Location: recovery-notification.php?notiftype=1");
				}
			}
		}

		getUserType();

	} elseif($_POST["message-checkEmailAddressOfRecovery"] == "Available") {
		header("location: login.php?error=emaildoesntexists");
	}
?>