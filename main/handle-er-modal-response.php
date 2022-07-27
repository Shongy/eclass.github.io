<!DOCTYPE html>
<html>
<head>
	<title><?php session_start(); ?></title>
</head>
<body>
	<?php
		include('../redundant/_connection.php');
		$exam_no = $_POST["exam_no"];

		$sql = "SELECT `course_code`, `course_title`, `exam_name`, `score`, `student_firstname`, `student_middleinitial`, `student_lastname` FROM `exams` INNER JOIN `exam_results` ON exams.exam_no = exam_results.exam_no INNER JOIN `accounts_student` ON exam_results.student_account_no = accounts_student.student_account_no INNER JOIN `courses` ON exams.class_code = courses.class_code WHERE exams.exam_no = $exam_no ORDER BY `score` DESC";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$record = mysqli_fetch_assoc($result);
		$output = "";
		$output .= "<center><h3 style=\"color:lightblue; font-size:25px;\"><strong>".$record["course_code"]." | ".$record["course_title"]." | ".$record["exam_name"]."</strong></h3></center>
					<table class=\"table table-bordered table-click table-hover\" style=\"font-size:11px;\">
					    <thead>
							<tr>
								<th>Student Name</th>
								<th>Total Score</th>
							</tr>
						</thead>
						<tbody>";
		while($record = mysqli_fetch_assoc($result)) {								
			$output .=	"<tr>
							<td>
								".$record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]."
							</td>
							<td class=\"center\">
								".$record["score"]."
							</td>
						</tr>";
			}
		$output .= "</tbody>";
		$output .= "</table>";
		echo $output;
	?>
</body>
</html>