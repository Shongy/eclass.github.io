<?php
	include('../redundant/_connection.php');
	$usertype = $_POST["usertype"]; 
	$admin_account_no = $_POST["admin_account_no"];
	$output = "";
	if($usertype == 11) {
		$teacher_account_no = $_POST["teacher_account_no"];
		$query = "UPDATE `accounts_teacher` ";
		$query .= "SET `teacher_confirmationcode` = 0, `teacher_status` = 'Inactive' ";
		$query .= "WHERE `teacher_account_no` = $teacher_account_no"; 
		$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
		$sql = "INSERT INTO `inactive_accounts`(`usertype`, `user`, `admin_account_no`) VALUES(11, $teacher_account_no, $admin_account_no)";
		mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'was set account to <strong class=\"red\">inactive</strong>.', 11, ".$teacher_account_no.")";
    	mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$sql = "SELECT * FROM `accounts_teacher` WHERE `teacher_status` = 'Active'";		
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		while($record = mysqli_fetch_assoc($result)) {		
			$output .= "<tr>
						<td width=\"30%\">
							<a href=\"viewprofile.php?refid=".$record["teacher_account_no"]."&usertype=11\">".$record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"]."</a>
						</td>

						<td width=\"30%\">
							".$record["teacher_college"]."
						</td>

						<td width=\"30%\">
							".$record["teacher_dept"]."
						</td>

						<td width=\"10%\">
							<center><a href=\"#\" class=\"deactivate-status-11\" data-id=".$record["teacher_account_no"]."><span class=\"label label-sm label-danger\">Deactivate</span></a></center>
						</td>
					</tr>";
		}
	} elseif($usertype = 111) {
		$student_account_no = $_POST["student_account_no"];
		$query = "UPDATE `accounts_student` ";
		$query .= "SET `student_status` = 'Inactive' ";
		$query .= "WHERE `student_account_no` = '$student_account_no'"; 
		$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
		$sql = "INSERT INTO `inactive_accounts`(`usertype`, `user`, `admin_account_no`) VALUES(111, $student_account_no, $admin_account_no)";
		mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'was set account to <strong class=\"red\">inactive</strong>.', 111, ".$student_account_no.")";
    	mysqli_query($connection, $sql) or die(mysqli_error($connection));
    	$sql = "SELECT * FROM `accounts_student` WHERE `student_status` = 'Active'";		
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		while($record = mysqli_fetch_assoc($result)) {		
			$output .= "<tr>
						<td width=\"30%\">
							<a href=\"viewprofile.php?refid=".$record["student_account_no"]."&usertype=111\">".$record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]."</a>
						</td>

						<td width=\"30%\">
							".$record["student_program"]."
						</td>

						<td width=\"30%\">
							".$record["student_major"]."
						</td>

						<td width=\"10%\">
							<center><a href=\"#\" class=\"deactivate-status-111\" data-id=".$record["student_account_no"]."><span class=\"label label-sm label-danger\">Deactivate</span></a></center>
						</td>
					</tr>";
		}
	}
	echo $output;
?>