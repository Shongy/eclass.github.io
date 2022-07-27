<?php
session_start();
include('../redundant/_connection.php');

if (!isset($_POST['submit']))
    {
        header ("location: login.php");
    }

$loginU = $_POST['loginU'];
$loginP = $_POST['loginP'];
$loginP = hash('sha256', $loginP);

//login if admin
$qry = "SELECT * FROM accounts_admin WHERE admin_username = '$loginU' or admin_email = '$loginU'";
$result = mysqli_query ($connection, $qry);
if ($record = mysqli_fetch_assoc($result))
{   
        if ($record['admin_password'] == $loginP)
        {
            $_SESSION["user"] = $record['admin_account_no'];
            $_SESSION["username"] = $record['admin_username'];
            $_SESSION["usertype"] = 1;
            header("location: ../main/dashboard.php");
        }
        else
        {
            $qry = "SELECT * FROM accounts_teacher WHERE teacher_username = '$loginU' or teacher_email = '$loginU'";
            $result = mysqli_query ($connection, $qry);
            if ($record = mysqli_fetch_assoc($result))
            {
                if ($record['teacher_password'] == $loginP)
                {   
                    $_SESSION["user"] = $record['teacher_account_no'];
                    $_SESSION["usertype"] = 11;
                }
                else
                {
                    $qry = "SELECT * FROM accounts_student WHERE student_username = '$loginU' or student_email = '$loginU'";
                    $result = mysqli_query ($connection, $qry);
                    if ($record = mysqli_fetch_assoc($result))
                    {
                        if ($record['student_password'] == $loginP)
                        {
                            $_SESSION["user"] = $record['student_account_no'];
                            $_SESSION["usertype"] = 111;
                            header("location: ../main/dashboard.php");
                        }
                        else
                        {
                            header("location: login.php?incorrect=2&email=".$_POST['loginU']);
                        }
                    }
                    
                   
                }
            }
            
            
        }
}
else
{
        //login if teacher
    $qry = "SELECT * FROM accounts_teacher WHERE teacher_username = '$loginU' or teacher_email = '$loginU'";
    $result = mysqli_query ($connection, $qry);
    if ($record = mysqli_fetch_assoc($result))
    {
        if ($record['teacher_password'] == $loginP)
        {
            if($record["teacher_status"] == "Active") {
                $_SESSION["user"] = $record['teacher_account_no'];
                $_SESSION["username"] = $record['teacher_username'];
                $_SESSION["usertype"] = 11;
                //$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'logged in.', 11, ".$_SESSION["user"].")";
                //mysqli_query($connection, $sql) or die(mysqli_error($connection));
                header("location: ../main/dashboard.php");
            } else{
                if($record["teacher_confirmationcode"] == 0) {
                    header("Location: recovery-notification.php?notiftype=0");
                } else {
                    header("Location: registration-notification.php");
                }
            }
        }
        else
        {
            $qry = "SELECT * FROM accounts_student WHERE student_username = '$loginU' or student_email = '$loginU'";
            $result = mysqli_query ($connection, $qry);
            if ($record = mysqli_fetch_assoc($result))
            {
                if ($record['student_password'] == $loginP)
                {
                    $_SESSION["user"] = $record['student_account_no'];
                    $_SESSION["usertype"] = 111;
                    header("location: ../main/dashboard.php");
                }
                else
                {
                    //incorrect pass
                    header("location: login.php?incorrect=2&email=".$_POST['loginU']);        
                }
            }
            else
            {
                header("location: login.php?incorrect=2&email=".$_POST['loginU']);
            }
        }
    }
    else
    {
        $qry = "SELECT * FROM accounts_student WHERE student_username = '$loginU' or student_email = '$loginU'";
        $result = mysqli_query ($connection, $qry);
        if ($record = mysqli_fetch_assoc($result))
        {
            if ($record['student_password'] == $loginP)
            {
                if($record["student_status"] == "Active") {
                    $_SESSION["user"] = $record['student_account_no'];
                     $_SESSION["username"] = $record['student_username'];
                    $_SESSION["usertype"] = 111;
                    //$sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'logged in.', 111, ".$_SESSION["user"].")";
                    //mysqli_query($connection, $sql) or die(mysqli_error($connection));
                    header("location: ../main/dashboard.php");
                } else{
                    if($record["student_confirmationcode"] == 0) {
                        header("Location: recovery-notification.php?notiftype=0");
                    } else {
                        header("Location: registration-notification.php");
                    }
                }
            }
            else
            {
                header("location: login.php?incorrect=2&email=".$_POST['loginU']);
            }
        }
        else
        {
            header("location: login.php?incorrect=1");
        }
    }       
}
?>