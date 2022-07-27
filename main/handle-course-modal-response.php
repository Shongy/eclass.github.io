<!DOCTYPE html>
<html>
<head>
	<title><?php session_start(); ?></title>
</head>
<body>
	<?php
	include('../redundant/_connection.php');
	$teacher_account_no = $_POST["teacher_account_no"];
	$student_account_no = $_POST["student_account_no"];
	$output = "";
	$sql = "SELECT * FROM `courses` INNER JOIN `enrolled_students` ON courses.class_code = enrolled_students.class_code INNER JOIN `accounts_student` ON accounts_student.student_account_no = enrolled_students.student_account_no WHERE courses.teacher_account_no = $teacher_account_no AND enrolled_students.student_account_no = $student_account_no";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	$output .= "<table class=\"table table-bordered table-click table-hover\" style=\"font-size:11px;\">
				    <thead>
						<tr>
							<th>Course Code</th>
							<th>Course Title</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>";
	while($record = mysqli_fetch_assoc($result)) {																						
		$output .=	"<tr>
						<td>
							".$record["course_code"]."
						</td>
						<td>
							".$record["course_title"]."
						</td>
						<td>
							".$record["course_description"].
						"</td>
					</tr>";
		}
	$output .= "</tbody>";
	$output .= "</table>";
	$sql = "SELECT * FROM `accounts_student` WHERE `student_account_no` = ".$student_account_no;
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	$record = mysqli_fetch_assoc($result);
	$output .= "View Profile <i class=\"fa fa-chevron-right blue\" />"." "."<a href=\"viewprofile.php?refid=".$student_account_no."&usertype=111\">".$record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]."</a>";
	echo $output;
?>
</body>
</html>