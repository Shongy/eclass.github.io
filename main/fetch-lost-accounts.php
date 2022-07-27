<?php
	include('../redundant/_connection.php');
	$usertype = $_POST["usertype"]; 
	$admin_account_no = $_POST["admin_account_no"];
	$newpassword = hash('sha256', '12345678');
	$output = "";
	if($usertype == 11) {
		$teacher_account_no = $_POST["teacher_account_no"];
		$sql = "UPDATE `accounts_teacher` SET `teacher_status` = 'Active', `teacher_password` = '$newpassword' WHERE `teacher_account_no` = ".$teacher_account_no;
		mysqli_query($connection, $sql);
		$sql = "SELECT * FROM `accounts_teacher` WHERE `teacher_status` = 'Lost'";		
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
							<center><a href=\"#\" class=\"reset-password-11\" data-id=".$record["teacher_account_no"]."><span class=\"label label-sm label-success\">Reset Password</span></a></center>
						</td>
					</tr>";
		}
	} elseif($usertype = 111) {
		$student_account_no = $_POST["student_account_no"];
		$sql = "UPDATE `accounts_student` SET `student_status` = 'Active', `student_password` = '$newpassword' WHERE `student_account_no` = ".$student_account_no;
		mysqli_query($connection, $sql);
		$sql = "SELECT * FROM `accounts_student` WHERE `student_status` = 'Lost'";		
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
							<a href=\"#\" class=\"reset-password-111\" data-id=".$record["student_account_no"]."><span class=\"label label-sm label-success\">Reset Password</span></a>
						</td>
					</tr>";
		}
	}
	echo $output;
?>