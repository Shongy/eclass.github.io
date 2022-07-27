<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    session_start();
    ob_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //require 'references.php';

    //Load composer's autoloader
    //require 'php-mailer/vendor/autoload.php';
    include("../php-mailer/vendor/autoload.php");

    $action = $_GET["action"];
    $emailAddress = $_GET["emailAddress"];

    $mail = new PHPMailer(true);   

    try {
        //Server settings
        //$mail->SMTPDebug = 1;  
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

        //Recipients
        $mail->setFrom('rhonethjohnfabre@gmail.com', 'Mailer');
        $mail->addAddress($emailAddress, 'Recipient');     
        //$mail->addAddress('ellen@example.com');                       
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');       
        //$mail->addAttachment('img/thumbs.db', 'new.jpg');    

        //Content
        $mail->isHTML(true);  
        if($action == "confirmaccount") {
            $usertype = $_GET["usertype"];
            $username = $_GET["username"];
            $confirmationCode = $_GET["confirmationCode"];
            $mail->Subject = "Here is the subject";
            $mail->Body    = "http://localhost:8080/cmue-class/main/confirm-registration.php?usertype=$usertype&username=$username&confirmationCode=$confirmationCode";
            $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
            $mail->send();
            header("Location: registration-notification.php");
            ob_end_flush();
        }                             
        elseif($action == "recoveraccount") {
            $usertype = $_GET["usertype"];
            $username = $_GET['username'];
            $password = $_GET['password'];
            $mail->Subject = "Here is the subject";
            $mail->Body    = "http://localhost:8080/cmue-class/main/confirm-account-recovery.php?usertype=$usertype&username=$username&password=$password";
            $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
            $mail->send();
            header("Location: recovery-notification.php?notiftype=1");
            ob_end_flush();
        }
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        exit;
    }
?>