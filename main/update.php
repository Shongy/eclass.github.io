<?php //update
            
                session_start();
                include("../redundant/_connection.php");
                
                $firstname= addslashes($_POST["fname"]);
                $lastname= addslashes($_POST["lname"]); 
                $middleinitial= addslashes($_POST["mname"]);
                $email= addslashes($_POST["email"]);
                $username= $_POST["username"]; 
                $street= addslashes($_POST["street"]);
                $province= addslashes($_POST["prov"]);
                $gender= addslashes($_POST["gender"]);
                $fb= addslashes($_POST["fb"]);
                $phone= addslashes($_POST["phone"]);
                $bdate= addslashes($_POST["bdate"]);
                $gplus= addslashes($_POST["gplus"]); 
                $about= addslashes($_POST["about"]);
                $twitter= addslashes($_POST["twitter"]); 
                $site= addslashes($_POST["site"]);
                
                
                if ($_SESSION["usertype"]==1)
                {
                    $qry = "UPDATE `accounts_admin` SET `admin_firstname`='$firstname',`admin_lastname`='$lastname',`admin_middleinitial`='$middleinitial',`admin_username`='$username',`admin_email`='$email',`admin_province`='$province',`admin_street`='$street',`admin_bdate`='$bdate',`admin_gender`='$gender',`admin_about`='$about',`admin_phone`='$phone',`admin_fb`='$fb',`admin_twitter`='$twitter',`admin_gplus`='$gplus',`admin_site`='$site' WHERE `admin_account_no` =".$_SESSION["user"];
                    
                    
                   if (($_POST["pass1"]) != "" and ($_POST["pass2"]) != "")
                    {
                        $pass1 = $_POST["pass1"];
                        $pass2 = $_POST["pass2"];

                        if ($pass1 == $pass2)
                        {
                             $qry2 = "UPDATE `accounts_admin` SET `admin_password`='".hash('sha256', $pass1)."' WHERE admin_account_no =".$_SESSION["user"];
                            mysqli_query ($connection,$qry2) or die (mysqli_error ($connection));
                        }
                      
                    }
                    
                    if (isset($_FILES))
                    {
                      $tempname	= $_FILES["profpic-name"]["tmp_name"];
                        $type		= $_FILES["profpic-name"]["type"];
                        $filename	= $_FILES["profpic-name"]["name"];
                        $filesize	= $_FILES["profpic-name"]["size"];

                        if (!file_exists("../assets/images/admin/")) mkdir("../assets/images/admin/",0755);
                        $filepath = "../assets/images/admin/$username.jpg";

                        $fileextension = strtolower(substr($filename, -3));

                        if ($fileextension == "jpg" or $fileextension == "png" or $fileextension == "gif" )
                        {
                          move_uploaded_file($tempname,$filepath);
                        }
                    }
                    mysqli_query ($connection,$qry) or die (mysqli_error ($connection));              
                }
                
                if ($_SESSION["usertype"]==11)
                {
                    $college = addslashes($_POST["prog"]);
                    $department = addslashes($_POST["major"]);
                    $position = addslashes($_POST["yl"]);
                    
                    $qry = "UPDATE `accounts_teacher` SET `teacher_firstname`='$firstname',`teacher_lastname`='$lastname',`teacher_middleinitial`='$middleinitial',`teacher_username`='$username',`teacher_email`='$email',`teacher_province`='$province',`teacher_street`='$street',`teacher_bdate`='$bdate',`teacher_gender`='$gender',`teacher_about`='$about',`teacher_phone`='$phone',`teacher_fb`='$fb',`teacher_twitter`='$twitter',`teacher_gplus`='$gplus',`teacher_site`='$site', `teacher_college` = '$college', `teacher_dept` = '$department', `teacher_position` = '$position' WHERE `teacher_account_no` =".$_SESSION["user"];

                   if (($_POST["pass1"]) != "" and ($_POST["pass2"]) != "")
                    {
                        $pass1 = $_POST["pass1"];
                        $pass2 = $_POST["pass2"];

                        if ($pass1 == $pass2)
                        {
                            $qry2 = "UPDATE `accounts_teacher` SET `teacher_password`='".hash('sha256', $pass1)."' WHERE teacher_account_no=".$_SESSION["user"];
                            mysqli_query ($connection,$qry2) or die (mysqli_error ($connection));
                        }
                       
                    }
                    
                     if (isset($_FILES))
                    {
                        $tempname	= $_FILES["profpic-name"]["tmp_name"];
                        $type		= $_FILES["profpic-name"]["type"];
                        $filename	= $_FILES["profpic-name"]["name"];
                        $filesize	= $_FILES["profpic-name"]["size"];

                        if($filename) {
                            if (!file_exists("../assets/images/user-teachers/$username")) mkdir("../assets/images/user-teachers/$username",0755);
                            $sql = "UPDATE `accounts_teacher` SET `teacher_imgno` = '$filename' WHERE `teacher_account_no` = ".$_SESSION["user"];
                            mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

                            $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'uploaded new photo as profile picture. <a href=\"viewprofile.php?refid=".$_SESSION["user"]."&usertype=11\">Take a look.</a>', 11, ".$_SESSION["user"].")";
                            mysqli_query($connection, $sql) or die(mysqli_error($connection));
                            
                            $filepath = "../assets/images/user-teachers/$username/$filename";

                            $fileextension = strtolower(substr($filename, -3));

                            if ($fileextension == "jpg" or $fileextension == "png" or $fileextension == "gif" )
                            {
                              move_uploaded_file($tempname,$filepath);
                            }
                        }
                    }
                    mysqli_query ($connection,$qry) or die (mysqli_error ($connection));

                    $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'updated personal information. <a href=\"viewprofile.php?refid=".$_SESSION["user"]."&usertype=11\">Take a look.</a>', 11, ".$_SESSION["user"].")";
                    mysqli_query($connection, $sql) or die(mysqli_error($connection));
                }

                if ($_SESSION["usertype"]==111)
                {
                    $college = addslashes($_POST["prog"]);
                    $department = addslashes($_POST["major"]);
                    $position = addslashes($_POST["yl"]);
                    
                    $qry = "UPDATE `accounts_student` SET `student_firstname`='$firstname',`student_lastname`='$lastname',`student_middleinitial`='$middleinitial',`student_username`='$username',`student_email`='$email',`student_province`='$province',`student_street`='$street',`student_bdate`='$bdate',`student_gender`='$gender',`student_about`='$about',`student_phone`='$phone',`student_fb`='$fb',`student_twitter`='$twitter',`student_gplus`='$gplus',`student_site`='$site', `student_program` = '$college', `student_major` = '$department', `student_yl` = '$position' WHERE `student_account_no` =".$_SESSION["user"];

                    
                    if (($_POST["pass1"]) != "" and ($_POST["pass2"]) != "")
                    {
                        $pass1 = $_POST["pass1"];
                        $pass2 = $_POST["pass2"];   

                        if ($pass1 == $pass2)
                        {
                            $qry2 = "UPDATE `accounts_student` SET `student_password`='".hash('sha256', $pass1)."' WHERE student_account_no=".$_SESSION["user"];
                            mysqli_query ($connection,$qry2) or die (mysqli_error ($connection));
                        }
                       
                    }
                    
                    if (isset($_FILES))
                    {
                        $tempname	= $_FILES["profpic-name"]["tmp_name"];
                        $type		= $_FILES["profpic-name"]["type"];
                        $filename	= $_FILES["profpic-name"]["name"];
                        $filesize	= $_FILES["profpic-name"]["size"];

                        if($filename) {
                            if (!file_exists("../assets/images/user-students/$username")) mkdir("../assets/images/user-students/$username", 0755);
                            
                            $filepath = "../assets/images/user-students/$username/$filename";

                            $fileextension = strtolower(substr($filename, -3));

                            if ($fileextension == "jpg" or $fileextension == "png" or $fileextension == "gif" )
                            {
                              move_uploaded_file($tempname,$filepath);

                                $sql = "UPDATE `accounts_student` SET `student_imgno` = '$filename' WHERE `student_account_no` = ".$_SESSION["user"];
                                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
                               
                                $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'uploaded new photo as profile picture. <a href=\"viewprofile.php?refid=".$_SESSION["user"]."&usertype=111\">Take a look.</a>', 111, ".$_SESSION["user"].")";
                                mysqli_query($connection, $sql) or die(mysqli_error($connection));

                            }
                        }
                    }
                    mysqli_query ($connection,$qry) or die (mysqli_error ($connection));

                    $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'updated personal information. <a href=\"viewprofile.php?refid=".$_SESSION["user"]."&usertype=111\">Take a look.</a>', 111, ".$_SESSION["user"].")";
                    mysqli_query($connection, $sql) or die(mysqli_error($connection));
                }
            echo "<script> location.href='../main/profile.php'; </script>";            
        ?>


