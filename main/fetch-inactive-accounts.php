<?php
	include('../redundant/_connection.php');
	$usertype = $_POST["usertype"]; 
	$admin_account_no = $_POST["admin_account_no"];
	$output = "";
	if($usertype == 11) {
		$teacher_account_no = $_POST["teacher_account_no"];
		$sql = "DELETE FROM `inactive_accounts` WHERE `user` = ".$teacher_account_no;
		mysqli_query($connection, $sql);
		$sql = "UPDATE `accounts_teacher` SET `teacher_status` = 'Active' WHERE `teacher_account_no` = ".$teacher_account_no;
		mysqli_query($connection, $sql);
		$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'was set account to <strong class=\"green\">active</strong>.', 11, ".$teacher_account_no.")";
            	mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$sql = "SELECT * FROM `inactive_accounts` INNER JOIN `accounts_teacher` ON inactive_accounts.user = accounts_teacher.teacher_account_no WHERE admin_account_no = ".$admin_account_no;		
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
							<center><a href=\"#\" class=\"activate-status-11\" data-id=".$record["teacher_account_no"]."><span class=\"label label-sm label-success\">Activate</span></a>
						</td>
					</tr>";
		}
	} elseif($usertype = 111) {
		$student_account_no = $_POST["student_account_no"];
		$sql = "DELETE FROM `inactive_accounts` WHERE `user` = ".$student_account_no;
		mysqli_query($connection, $sql);
		$sql = "UPDATE `accounts_student` SET `student_status` = 'Active' WHERE `student_account_no` = ".$student_account_no;
		mysqli_query($connection, $sql);
		$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'was set account to <strong class=\"green\">active</strong>.', 111, ".$student_account_no.")";
            	mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$sql = "SELECT * FROM `inactive_accounts` INNER JOIN `accounts_student` ON inactive_accounts.user = accounts_student.student_account_no WHERE admin_account_no = ".$admin_account_no;		
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
							<center><a href=\"#\" class=\"activate-status-111\" data-id=".$record["student_account_no"]."><span class=\"label label-sm label-success\">Activate</span></a></center>
						</td>
					</tr>";
		}
	}
	echo $output;
?>