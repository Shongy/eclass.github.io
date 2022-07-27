<?php
	include('../redundant/_connection.php');
	$usertype = $_POST["usertype"]; 
	$admin_account_no = $_POST["admin_account_no"];
	$output = "";
	if($usertype == 11) {
		$teacher_account_no = $_POST["teacher_account_no"];
		$sql = "SELECT `teacher_username` FROM `accounts_teacher` WHERE `teacher_account_no` = $teacher_account_no";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$record = mysqli_fetch_assoc($result);
		$teacher_username = $record["teacher_username"];
		$sql = "UPDATE `accounts_teacher` SET `teacher_status` = 'Active', `teacher_confirmationcode` = 0 WHERE `teacher_account_no` = ".$teacher_account_no;
		mysqli_query($connection, $sql);
		$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'successfully <strong class=\"green\">confirmed account registration</strong>.', 11, ".$teacher_account_no.")";
            	mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$sql = "SELECT * FROM `accounts_teacher` WHERE `teacher_confirmationcode` != 0 AND `teacher_status` = 'Inactive'";		
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
							<center><a href=\"#\" class=\"confirm-status-11\" data-id=".$record["teacher_account_no"]."><span class=\"label label-sm label-success\">Confirm Registration</span></a></center>
						</td>
					</tr>";
		}
	} elseif($usertype = 111) {
		$student_account_no = $_POST["student_account_no"];
		$sql = "SELECT `student_username` FROM `accounts_student` WHERE `student_account_no` = $student_account_no";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$record = mysqli_fetch_assoc($result);
		$student_username = $record["student_username"];
		$sql = "UPDATE `accounts_student` SET `student_status` = 'Active', `student_confirmationcode` = 0 WHERE `student_account_no` = ".$student_account_no;
		mysqli_query($connection, $sql);
		$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'successfully <strong class=\"green\">confirmed account registration.</strong>.', 111, ".$student_account_no.")";
            	mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$sql = "SELECT * FROM `accounts_student` WHERE `student_confirmationcode` != 0 AND `student_status` = 'Inactive'";		
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
							<a href=\"#\" class=\"confirm-status-111\" data-id=".$record["student_account_no"]."><span class=\"label label-sm label-success\">Confirm Registration</span></a>
						</td>
					</tr>";
		}
	}
	/*ob_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    include("../php-mailer/vendor/autoload.php");

    $mail = new PHPMailer(true);   

	    try {

	        $mail->SMTPOptions = array(
	            'ssl' => array(
	            'verify_peer' => false,
	            'verify_peer_name' => false, 
	            'allow_self_signed' => true
	            )
	        );          

	        $mail->isSMTP();                               
	        $mail->Host = 'smtp.gmail.com';                       
	        $mail->SMTPAuth = true;                               
	        $mail->Username = "rhonethjohnfabre@gmail.com";      
	        $mail->Password = 'Backyard77';                         
	        $mail->SMTPSecure = 'tls';                            
	        $mail->Port = 587;                                    

	        $mail->setFrom('rhonethjohnfabre@gmail.com', 'Mailer');
	        $mail->addAddress('rhonethjohnfabre@gmail.com', 'Recipient');     
	   
	        $mail->isHTML(true);  
		    $mail->Subject = "Account Registration Confirmation";
		    $mail->Body    = "Administrator has successfully confirmed your account registration. Please login your account now. Thank you.";
		    $mail->send();
		    ob_end_flush();
	    } catch (Exception $e) {
	        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	        exit;
	    }*/
	echo $output;
?>