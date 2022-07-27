<?php
	function get_data() {
		include('../redundant/_connection.php');
		$exam_no = $_POST["exam_no"];
		$sql = "SELECT `course_code`, `course_title`, `exam_name`, `score`, `student_firstname`, `student_middleinitial`, `student_lastname`, `student_program`, `student_major` FROM `exams` INNER JOIN `exam_results` ON exams.exam_no = exam_results.exam_no INNER JOIN `accounts_student` ON exam_results.student_account_no = accounts_student.student_account_no INNER JOIN `courses` ON exams.class_code = courses.class_code WHERE exams.exam_no = $exam_no ORDER BY `score` DESC";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		while ($record = mysqli_fetch_assoc($result)) {
			$data[] = array(
				'name' => 	$record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"],
				'program' => $record["student_program"],
				'major' => $record["student_major"],
				'score' => $record["score"]
			);
		}
		$data = array('data' => $data);
		return json_encode($data);
	}

	$file_name = 'examination-result_data.json';
	if(file_put_contents($file_name, get_data())) {

	}
?>