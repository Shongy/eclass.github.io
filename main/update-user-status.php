<?php

	ob_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    include("../php-mailer/vendor/autoload.php");

    function sendMailNotification($emailAddress, $teacher_name, $action) {
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
		        $mail->addAddress($emailAddress, 'Recipient');     

		        $mail->isHTML(true);  

		        $mail->Subject = 'BNSHI-Web Based Examination System Notification | This is a verification generated script! Please do not reply.';
	    		
	    		if($action == "deactivate") {
	    			$mail->Body = "Good Day ".$teacher_name."! Your account has been deactivated. Please contact your administrator to activate. Thank you!";
	    		} elseif($action == "activate") {
	    			$mail->Body = "Good Day ".$teacher_name."! Congratulations! Your account now has been activated.";
	    		} elseif($action == "confirm-reg") {
	    			$mail->Body = "Good Day ".$teacher_name."! Congratulations! Your account registration has been confirmed. Welcome to our website.";
	    		} 

	            $mail->send();

	            ob_end_flush();
	        
	    } catch (Exception $e) {
	        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	        exit;
	    }

	}

	include("../redundant/_connection.php");
	$usertype = $_POST["usertype"];
	$admin_account_no = $_POST["admin_account_no"];			
	if($usertype == 11) {
		$teacher_account_no = $_POST['teacher_account_no'];
		$query = "SELECT `teacher_firstname`, `teacher_middleinitial`, `teacher_lastname`, `teacher_confirmationcode`, `teacher_status`, `teacher_email` FROM `accounts_teacher` ";
		$query .= "WHERE `teacher_account_no` = $teacher_account_no";
		$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
		$record = mysqli_fetch_assoc($result);
		$teacher_name = $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"];
		if($record["teacher_confirmationcode"] == 0) {
			if($record["teacher_status"] == "Active") {
				sendMailNotification($record["teacher_email"], $teacher_name, 'deactivate');
				$query = "UPDATE `accounts_teacher` ";
				$query .= "SET `teacher_confirmationcode` = 0, `teacher_status` = 'Inactive' ";
				$query .= "WHERE `teacher_account_no` = $teacher_account_no"; 
				$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
				$sql = "INSERT INTO `inactive_accounts`(`usertype`, `user`, `admin_account_no`) VALUES(11, $teacher_account_no, $admin_account_no)";
				mysqli_query($connection, $sql) or die(mysqli_error($connection));
				$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'was set account to <strong class=\"red\">inactive</strong>.', 11, ".$teacher_account_no.")";
            	mysqli_query($connection, $sql) or die(mysqli_error($connection));
				echo "<a href=\"#\" data-id=\"$teacher_account_no\" class=\"btn btn-sm btn-block btn-success update-status\">
	                <i class=\"glyphicon glyphicon-ok bigger-120\"></i>
	                <span class=\"bigger-110\">Activate Account</span>
	            </a>";
			} elseif($record["teacher_status"] == "Inactive") {
				sendMailNotification($record["teacher_email"], $teacher_name, 'activate');
				$query = "UPDATE `accounts_teacher` ";
				$query .= "SET `teacher_confirmationcode` = 0, `teacher_status` = 'Active' ";
				$query .= "WHERE `teacher_account_no` = $teacher_account_no"; 
				$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
				$sql = "DELETE FROM `inactive_accounts` WHERE `user` = ".$teacher_account_no;
				mysqli_query($connection, $sql);
				$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'was set account to <strong class=\"green\">active</strong>.', 11, ".$teacher_account_no.")";
            	mysqli_query($connection, $sql) or die(mysqli_error($connection));
				echo "<a href=\"#\" data-id=\"$teacher_account_no\" class=\"btn btn-sm btn-block btn-danger update-status\">
	                <i class=\"ace-icon fa fa-ban bigger-120\"></i>
	                <span class=\"bigger-110\">Deactivate Account</span>
	            </a>";
			}
		} else {
			if($record["teacher_status"] == "Inactive") {
				sendMailNotification($record["teacher_email"], $teacher_name, 'confirm-reg');
				$query = "UPDATE `accounts_teacher` ";
				$query .= "SET `teacher_confirmationcode` = 0, `teacher_status` = 'Active' ";
				$query .= "WHERE `teacher_account_no` = $teacher_account_no"; 
				mysqli_query($connection,$query) or die(mysqli_error($connection));
				$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'successfully <strong class=\"green\">confirmed account registration</strong>.', 11, ".$teacher_account_no.")";
            	mysqli_query($connection, $sql) or die(mysqli_error($connection));
            	echo "<a href=\"#\" data-id=\"$teacher_account_no\" class=\"btn btn-sm btn-block btn-danger confirm-reg\">
	                <i class=\"ace-icon fa fa-ban bigger-120\"></i>
	                <span class=\"bigger-110\">Deactivate Account</span>
	            </a>";
			}
		}
	} elseif($usertype == 111) {
		$student_account_no = $_POST['student_account_no'];
		$query = "SELECT `student_firstname`, `student_middleinitial`, `student_lastname`, `student_status`, `student_email`, `student_confirmationcode` FROM `accounts_student` ";
		$query .= "WHERE `student_account_no` = $student_account_no";
		$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
		$record = mysqli_fetch_assoc($result);
		$student_name = $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"];
		if($record["student_confirmationcode"] == 0) {
			if($record["student_status"] == "Active") {
				sendMailNotification($record["student_email"], $student_name, 'deactivate');
				$query = "UPDATE `accounts_student` ";
				$query .= "SET `student_status` = 'Inactive' ";
				$query .= "WHERE `student_account_no` = '$student_account_no'"; 
				$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
				$sql = "INSERT INTO `inactive_accounts`(`usertype`, `user`, `admin_account_no`) VALUES(111, $student_account_no, $admin_account_no)";
				mysqli_query($connection, $sql) or die(mysqli_error($connection));
				$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'was set account to <strong class=\"red\">inactive</strong>.', 111, ".$student_account_no.")";
            	mysqli_query($connection, $sql) or die(mysqli_error($connection));
            	echo "<a href=\"#\" data-id=\"$student_account_no\" class=\"btn btn-sm btn-block btn-success update-status-111\">
	                <i class=\"glyphicon glyphicon-ok bigger-120\"></i>
	                <span class=\"bigger-110\">Activate Account</span>
	            </a>";
			} else {
				sendMailNotification($record["student_email"], $student_name, 'activate');
				$query = "UPDATE `accounts_student` ";
				$query .= "SET `student_status` = 'Active' ";
				$query .= "WHERE `student_account_no` = '$student_account_no'"; 
				$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
				$sql = "DELETE FROM `inactive_accounts` WHERE `user` = ".$student_account_no;
				mysqli_query($connection, $sql);
				$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'was set account to <strong class=\"green\">active</strong>.', 111, ".$student_account_no.")";
            	mysqli_query($connection, $sql) or die(mysqli_error($connection));
            		echo "<a href=\"#\" data-id=\"$student_account_no\" class=\"btn btn-sm btn-block btn-danger update-status-111\">
	                <i class=\"ace-icon fa fa-ban bigger-120\"></i>
	                <span class=\"bigger-110\">Deactivate Account</span>
	            </a>";
			}
		} else {
			if($record["student_status"] == "Inactive") {
				sendMailNotification($record["student_email"], $student_name, 'confirm-reg');
				$query = "UPDATE `accounts_student` ";
				$query .= "SET `student_confirmationcode` = 0, `student_status` = 'Active' ";
				$query .= "WHERE `student_account_no` = $student_account_no"; 
				mysqli_query($connection,$query) or die(mysqli_error($connection));
				$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'successfully <strong class=\"green\">confirmed account registration</strong>.', 111, ".$student_account_no.")";
            	mysqli_query($connection, $sql) or die(mysqli_error($connection));
            	echo "<a href=\"#\" data-id=\"$student_account_no\" class=\"btn btn-sm btn-block btn-danger confirm-reg-111\">
	                <i class=\"ace-icon fa fa-ban bigger-120\"></i>
	                <span class=\"bigger-110\">Deactivate Account</span>
	            </a>";
			}
		}
	}
?>