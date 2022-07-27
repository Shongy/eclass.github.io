<?php
	ob_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    include("../php-mailer/vendor/autoload.php");

    function sendMailNotification($emailAddress, $name, $randomcode) {
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

		        $mail->Subject = "BNSHI-Web Based Examination System Notification | This is a verification generated script! Please do not reply.";
	    		$mail->Body = "Good Day ".$name."! Your account password has been reset to default. Your new password is: ".$randomcode.". You can immediately change your password. Thank you!";
	            $mail->send();

	            ob_end_flush();
	        
	    } catch (Exception $e) {
	        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	        exit;
	    }

	}

	include("../redundant/_connection.php");
	$usertype = $_POST["usertype"];	
	$randomcode = "";
	$length = 8;
    $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789123456789";
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $randomcode .= $characters[rand(0, $charactersLength - 1)];
    }
	if($usertype == 11) {
		$teacher_account_no = $_POST["teacher_account_no"];
		$newpassword = hash('sha256', $randomcode);
		$query = "SELECT * FROM `accounts_teacher` WHERE `teacher_account_no` = $teacher_account_no";
		$result =  mysqli_query($connection ,$query) or die(mysqli_error($connection));
		$record = mysqli_fetch_assoc($result);
		$teacher_name = $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"];
		$emailAddress = $record["teacher_email"];
		sendMailNotification($emailAddress, $teacher_name, $randomcode);
		$query = "UPDATE `accounts_teacher` ";
		$query .= "SET `teacher_status` = 'Active', `teacher_password` = '$newpassword' WHERE `teacher_account_no` = $teacher_account_no";
				echo "<a href=\"#\" data-id=\"$teacher_account_no\" class=\"btn btn-sm btn-block btn-danger update-status\">
	                <i class=\"ace-icon fa fa-ban bigger-120\"></i>
	                <span class=\"bigger-110\">Deactivate Account</span>
	            </a>";
	    mysqli_query($connection ,$query) or die(mysqli_error($connection));
	} elseif($usertype == 111) {
		$student_account_no = $_POST["student_account_no"];
		$newpassword = hash('sha256', $randomcode);
		$query = "SELECT * FROM `accounts_student` WHERE `student_account_no` = $student_account_no";
		$result =  mysqli_query($connection ,$query) or die(mysqli_error($connection));
		$record = mysqli_fetch_assoc($result);
		$student_name = $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"];
		$emailAddress = $record["student_email"];
		sendMailNotification($emailAddress, $student_name, $randomcode);
		$query = "UPDATE `accounts_student` ";
		$query .= "SET `student_status` = 'Active', `student_password` = '$newpassword' WHERE `student_account_no` = $student_account_no";
				echo "<a href=\"#\" data-id=\"$student_account_no\" class=\"btn btn-sm btn-block btn-danger update-status\">
	                <i class=\"ace-icon fa fa-ban bigger-120\"></i>
	                <span class=\"bigger-110\">Deactivate Account</span>
	            </a>";
	    mysqli_query($connection ,$query) or die(mysqli_error($connection));
	}
?>