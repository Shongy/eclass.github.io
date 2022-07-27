<?php
	function get_data() {
		include('../redundant/_connection.php');
		$class_code = $_POST["class_code"];
		$sql = "SELECT accounts_student.student_account_no, `student_firstname`, `student_middleinitial`, `student_lastname`, `student_program`, `student_major`, `student_status` FROM `enrolled_students` INNER JOIN `accounts_student` ON accounts_student.student_account_no = enrolled_students.student_account_no INNER JOIN `courses` ON courses.class_code = enrolled_students.class_code WHERE courses.class_code = '$class_code'";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		while ($record = mysqli_fetch_assoc($result)) {
			if($record["student_status"] == "Active") {
				$status = "<a href=\"#\" class=\"update-status\" data-id=".$record["student_account_no"]."><span class=\"label label-sm label-success\">".$record["student_status"]."</span></a>";
			} else {
				$status = "<a href=\"#\" class=\"update-status\" data-id=".$record["student_account_no"]."><span class=\"label label-sm label-warning\">".$record["student_status"]."</span></a>";	
			}

			$data[] = array(
				'name' => "<a href=\"viewprofile.php?refid=".$record["student_account_no"]."&usertype=111\">".$record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]."</a>",
				'program' => $record["student_program"],
				'major' => $record["student_major"],
				'status' => $status
			);
		}
		$data = array('data' => $data);
		return json_encode($data);
	}

	$file_name = 'student-list_data.json';
	if(file_put_contents($file_name, get_data())) {

	}
?>