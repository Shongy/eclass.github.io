<?php
header('Content-Type: text/xml');
echo '<?xml version = "1.0" encoding = "UTF-8" standalone = "yes" ?>';
echo '<response>';
	$exists = 0;
	include("../redundant/_connection.php");
	$emailAddress = $_GET['emailAddress'];
	if($emailAddress != "") {
		$query = "SELECT `admin_email` FROM `accounts_admin` WHERE `admin_email` = '$emailAddress'";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$exists += mysqli_num_rows($result);
		$query = "SELECT `student_email` FROM `accounts_student` WHERE `student_email` = '$emailAddress'";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$exists += mysqli_num_rows($result);
		$query = "SELECT `teacher_email` FROM `accounts_teacher` WHERE `teacher_email` = '$emailAddress'";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$exists += mysqli_num_rows($result);
		if($exists > 0) {
			echo "Exists";
		}
		else{
			echo "Available";
		}
	} else {
		echo "Empty";
	}
echo '</response>';
?>
