<?php
 session_start(); 
	function get_data() {
		include('../redundant/_connection.php');
       $student_account_no=$_SESSION["user"];
        $query="Select * FROM post_details INNER JOIN posts ON post_details.post_no = posts.post_no INNER JOIN file_details ON posts.post_no = file_details.post_no INNER JOIN exams ON file_details.file_link_or_path = exams.exam_no INNER JOIN courses ON courses.class_code=posts.class_code where post_details.student_account_no='$student_account_no' and post_type='exam'";
        
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		while ($record = mysqli_fetch_assoc($result)) {
			$data[] = array(
				'course_code' => $record["course_code"],
				'exam_name' => $record["post_title"],
                'date_created' => $record["posted_date"],
                'view' => "<center><button type='button' id=" .$record['post_no']." value=" .$record['class_code']." onclick='f1(this), f2(this)' class='btn btn-sm btn-info' style='border-radius:2px;'><center><b class='ace-icon fa fa-eye' style='font-size:15px;'></b></center></button></center>"
               
			);
		}
		$data = array('data' => $data);
		return json_encode($data);
	}

	$file_name = 'reloadTableExam.json';
	if(file_put_contents($file_name, get_data())) {

	}
?>