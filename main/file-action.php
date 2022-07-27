<?php
	session_start();

	if($_GET['action'] == 'copy') {

	} else if($_GET['action'] == "changeAvatar") {
		include("../redundant/_connection.php");
		$filename = $_GET["filename"];
		if($_SESSION["usertype"] == 11) {
			$sql = "UPDATE `accounts_teacher` SET `teacher_imgno` = '$filename' WHERE `teacher_account_no` = ".$_SESSION["user"];
			mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
			$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'changes profile picture. <a href=\"viewprofile.php?refid=".$_SESSION["user"]."&usertype=11\">Take a look.</a>', 111, ".$_SESSION["user"].")";
            mysqli_query($connection, $sql) or die(mysqli_error($connection));
		} elseif($_SESSION["usertype"] == 111) {
			$sql = "UPDATE `accounts_student` SET `student_imgno` = '$filename' WHERE `student_account_no` = ".$_SESSION["user"];
			mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
			$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'changes profile picture. <a href=\"viewprofile.php?refid=".$_SESSION["user"]."&usertype=111\">Take a look.</a>', 111, ".$_SESSION["user"].")";
            mysqli_query($connection, $sql) or die(mysqli_error($connection));
		}
	} else if($_GET['action'] == "rename") {
		include("../redundant/_connection.php");
		rename($_GET['upOneLevel'].DIRECTORY_SEPARATOR.$_GET['elementId'].".".$_GET['extName'], $_GET['upOneLevel'].DIRECTORY_SEPARATOR.$_GET['filename'].".".$_GET['extName']);
		if($_SESSION["usertype"] == 11) {
			$sql = "UPDATE `accounts_teacher` SET `teacher_imgno` = '".$_GET['filename'].".".$_GET['extName']."' WHERE `teacher_account_no` = ".$_SESSION["user"];
			mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
		} elseif($_SESSION["usertype"] == 111) {
			$sql = "UPDATE `accounts_student` SET `student_imgno` = '".$_GET['filename'].".".$_GET['extName']."' WHERE `student_account_no` = ".$_SESSION["user"];
			mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
		}
	} else if($_GET['action'] == "delete") {
		unlink($_GET['path'].DIRECTORY_SEPARATOR.$_GET['filename']);	
	}
	header("Location: profile.php");
?>	