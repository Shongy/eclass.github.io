<?php 
    if ($_POST["message-username"] == "Available"){
         //if($_POST["message-email"] == "Available") {
            if($_POST["message-pl"] == 0) {
                  if ($_POST["pass"]==$_POST["pass2"]){

                $fname=$_POST["fname"];
                $lname=$_POST["lname"];
                $mname=$_POST["mname"];
                $uname=$_POST["uname"];
                $pass=$_POST["pass"];
                $email=$_POST["email"];

            if ($_POST["usertype"]=="teacher") {
                include("../redundant/_connection.php");
                $confirmationCode = rand();
                $sql = "INSERT INTO `accounts_teacher`(`teacher_firstname`, `teacher_lastname`, `teacher_middleinitial`, `teacher_username`, `teacher_password`, `teacher_email`, `teacher_confirmationcode`, `teacher_status`, `teacher_imgno`) VALUES ('$fname','$lname','$mname','$uname','".hash('sha256',$_POST["pass"])."','$email', '$confirmationCode', 'Inactive', 'default.png')";
                mysqli_query($connection,$sql) or die(mysqli_error($connection,$sql));
                mkdir("../assets/images/user-teachers/$uname");
                copy("../assets/images/avatars/default.png","../assets/images/user-teachers/$uname/default.png");
                /*$sql2 = "SELECT `teacher_account_no`, `teacher_username`, `teacher_email`, `teacher_confirmationcode` FROM `accounts_teacher` ORDER BY `teacher_account_no` DESC";
                $result = mysqli_query ($connection, $sql2);
                $record = mysqli_fetch_assoc($result);
                session_start();
                $_SESSION["user"]= $record["teacher_account_no"];
                $_SESSION["usertype"]=11;
                $usertype = 11;
                $emailAddress = $record["teacher_email"];
                $username = $record["teacher_username"];
                $confirmationCode = $record["teacher_confirmationcode"];*/
                header("Location: registration-notification.php");
                //header("Location: php-mailer.php?action=confirmaccount&usertype=$usertype&emailAddress=$emailAddress&username=$username&confirmationCode=$confirmationCode");
            } else{
                include("../redundant/_connection.php");
                $confirmationCode = rand();
                $sql = "INSERT INTO `accounts_student`(`student_firstname`, `student_lastname`, `student_middleinitial`, `student_username`, `student_password`, `student_email`, `student_confirmationcode`, `student_status`, `student_imgno`) VALUES ('$fname','$lname','$mname','$uname','".hash('sha256',$_POST["pass"])."','$email', '$confirmationCode', 'Inactive', 'default.png')";
                mysqli_query($connection,$sql) or die(mysqli_error($connection,$sql));
                mkdir("../assets/images/user-students/$uname");
                copy("../assets/images/avatars/default.png","../assets/images/user-students/$uname/default.png");
                /*$sql2 = "SELECT `student_account_no`, `student_username`, `student_email`, `student_confirmationcode` FROM `accounts_student` ORDER BY `student_account_no` DESC";
                $result = mysqli_query ($connection, $sql2);
                $record = mysqli_fetch_assoc($result);
                session_start();
                $_SESSION["user"]= $record["student_account_no"];
                $_SESSION["usertype"]=111;
                $usertype = 111;
                $emailAddress = $record["student_email"];
                $username = $record["student_username"];
                $confirmationCode = $record["student_confirmationcode"];*/
                header("Location: registration-notification.php");
                //header("Location: php-mailer.php?action=confirmaccount&usertype=$usertype&emailAddress=$emailAddress&username=$username&confirmationCode=$confirmationCode");
            }
        } else{
            header("location: login.php?error=passwordnotmatch");
        }
            } else{
                if($_POST["message-pl"] == 1) {
                    header("location: login.php?error=lessthancharacters");
                } elseif(($_POST["message-pl"] == 2)) {
                    header("location: login.php?error=passworddidnotmatch");
                }
                elseif(($_POST["message-pl"] == 3)) {
                    header("location: login.php?error=alphanumeric");
                }
            }
         //} elseif($_POST["message-email"] == "Exists") {
             //header("location: login.php?error=emailexists");
         //}
    } elseif($_POST["message-username"] == "Exists") {
        header("location: login.php?error=usernameexists");
    }
?>