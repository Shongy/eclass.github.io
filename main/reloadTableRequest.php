<?php
 session_start(); 
	function get_data() {
		include('../redundant/_connection.php');
        $teacher_account_no=$_SESSION["user"];
         $query="Select * FROM students_request INNER JOIN accounts_student ON students_request.student_account_no = accounts_student.student_account_no where teacher_account_no='$teacher_account_no' and status='Unconfirmed'";

		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		while ($record = mysqli_fetch_assoc($result)) {
			$data[] = array(
				'class_code' => $record["class_code"],
				'student_name' => $record['student_firstname']." ".$record['student_middleinitial']." ".$record['student_lastname'],
                'date_requested' => $record["request_date"],
                 'status' => $record["status"],  
                'confirm' => "<center><button class='btn btn-sm btn-info submit2' onclick='this.disabled=true;' style='border-radius:2px;'id=".$record['class_code']." value=".$record['class_code']."><center><i class='glyphicon glyphicon-ok '></i></center></button>
                <button class='btn btn-sm btn-danger submit3' onclick='this.disabled=true;' style='border-radius:2px;'id='delete".$record['class_code']."' value=".$record['request_no']."><center><i class='glyphicon glyphicon-trash '></i></center></button> </center>"
              "<input type='text' id='hidden".$record['class_code']."' value=".$record['student_account_no']." >"
             "<input type='text' id='hidden2".$record['class_code']."' value=".$record['request_no']." >"
               
			);
		}
		$data = array('data' => $data);
		return json_encode($data);
	}

	$file_name = 'reloadTableRequest.json';
	if(file_put_contents($file_name, get_data())) {

	}

?>
