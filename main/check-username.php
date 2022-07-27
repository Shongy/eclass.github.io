<?php
header('Content-Type: text/xml');
echo '<?xml version = "1.0" encoding = "UTF-8" standalone = "yes" ?>';
echo '<response>';
	$exists = 0;
	include("../redundant/_connection.php");
	$username = $_GET['username'];
	if($username != "") {
		$query = "SELECT `admin_username` FROM `accounts_admin` WHERE `admin_username` = '$username'";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$exists += mysqli_num_rows($result);
		$query = "SELECT `student_username` FROM `accounts_student` WHERE `student_username` = '$username'";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$exists += mysqli_num_rows($result);
		$query = "SELECT `teacher_username` FROM `accounts_teacher` WHERE `teacher_username` = '$username'";
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
