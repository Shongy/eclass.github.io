<?php
    session_start();
    include("../redundant/_connection.php");

if(isset($_GET["password1"]))
{
    $pass = $_GET["password1"];
    {
        $sql1 = "SELECT * FROM `exams` WHERE `exam_no`=".$_GET["ref"];
        $result = mysqli_query ($connection, $sql1);
        if ($record = mysqli_fetch_assoc($result))
        {
           if ($pass == $recordp[""])
           {
               echo "<button onclick='f2()' id='enter' type='button' data-dismiss='modal' class='btn btn-primary btn-block'>START!!!</button'>";
           }
            else
            {
                 echo "<button onclick='f2()' id='enter' type='button' data-dismiss='modal' class='btn btn-danger btn-block' disabled>Wrong password</button'>";
            }
        }
    }
}


    if (isset($_POST["exam_title"]))
    {
        if(isset($_GET["createexam"]))
        {
            $userID = $_SESSION["user"];
            $code = $_POST["classesFromTimeline"];
            $exam_title = $_POST["exam_title"];
            $exam_desc = $_POST["exam_desc"];
            $datenow = date("Y-m-d H:i:s");
            $sql ="INSERT INTO `exams`(`exam_name`, `exam_description`, `class_code`,`availability`,`date_created`,teacher_account_no) VALUES ('$exam_title','$exam_desc','$code','Not Available','$datenow','$userID')";
            mysqli_query($connection,$sql) or die(mysqli_error($connection));

            $sql1 = "SELECT * FROM `exams` ORDER BY `exam_no` DESC";
            $result = mysqli_query ($connection, $sql1);
            if ($record = mysqli_fetch_assoc($result))
            {
                $_SESSION["exam_no"] = $record["exam_no"];
            }


            echo "<script> location.href='../main/createexam.php?classcode=$code'; </script>";
        }
        else
        {
            $userID = $_SESSION["user"];
            $code = $_SESSION["classcode"];
            $exam_title = $_POST["exam_title"];
            $exam_desc = $_POST["exam_desc"];
            $datenow = date("Y-m-d H:i:s");
            $sql ="INSERT INTO `exams`(`exam_name`, `exam_description`, `class_code`,`availability`,`date_created`,teacher_account_no) VALUES ('$exam_title','$exam_desc','$code','Not Available','$datenow','$userID')";
            mysqli_query($connection,$sql) or die(mysqli_error($connection));

            $sql1 = "SELECT * FROM `exams` ORDER BY `exam_no` DESC";
            $result = mysqli_query ($connection, $sql1);
            if ($record = mysqli_fetch_assoc($result))
            {
                $_SESSION["exam_no"] = $record["exam_no"];
            }


            echo "<script> location.href='../main/createexam.php'; </script>";
        }
            
        
    }
    if(isset($_GET["typeexam"]))
    {
        if (($_GET["typeexam"])=="multi")
        {

            $sql1 = "SELECT * FROM `exam_details` WHERE `exam_no` = '".$_SESSION["exam_no"]."' ORDER BY `question_no` DESC";
            $result = mysqli_query ($connection, $sql1);
            if ($record = mysqli_fetch_assoc($result))
            {
                $question_no = $record["question_no"] + 1;
            }
            else
            {
                $question_no=1;
            }

            $exam_no = $_SESSION["exam_no"];
            $question = addslashes(mysqli_real_escape_string($connection,$_POST["question_multiple"]));
            $choice1 =mysqli_real_escape_string($connection, $_POST["choice1"]);
            $choice2 = mysqli_real_escape_string($connection,$_POST["choice2"]);
            
            if($_GET["id"]==0)
            {
                
                $sql = "INSERT INTO `exam_details` (`exam_no`,`question_type`,`question`,`choice1`,`choice2`,`question_no`) VALUES('$exam_no','multiple','$question','$choice1','$choice2','$question_no')";
                 mysqli_query($connection,$sql) or die(mysqli_error($connection));

                 $sql1 = "SELECT * FROM `exam_details` WHERE `exam_no`=".$exam_no." ORDER BY `question_id` DESC";
                $result = mysqli_query ($connection, $sql1);
                if ($record = mysqli_fetch_assoc($result))
                {
                    $qid = $record["question_id"];
                }
            }
            else
            {
                
                $qid = $_GET["id"];
                $sql = "UPDATE `exam_details`
                        SET `question` = '$question',
                        `choice1` = '$choice1',
                        `choice2` = '$choice2'
                        WHERE `question_id` = '$qid'";
                 mysqli_query($connection,$sql) or die(mysqli_error($connection));
            }
            
            
            
            if(isset($_POST["answer1"]))
            {
                
                $sql = "UPDATE `exam_details` SET `answer1`='$choice1' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

            }
            else
            {
                $sql = "UPDATE `exam_details` SET `answer1`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            if(isset($_POST["answer2"]))
            {
                $sql = "UPDATE `exam_details` SET `answer2`='$choice2' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

            }
            else
            {
                $sql = "UPDATE `exam_details` SET `answer2`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            
            
           
            if(!isset($_POST["choice3"]) or  $_POST["choice3"]=="" or $_POST["choice3"]==null )
            {
                 
                $sql = "UPDATE `exam_details` SET `choice3`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));


            }
            else
            {
                $choice3 = mysqli_real_escape_string($connection,$_POST["choice3"]);
                
                $sql = "UPDATE `exam_details` SET `choice3`='$choice3' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));


                if(isset($_POST["answer3"]))
                {
                    $sql2 = "UPDATE `exam_details` SET `answer3`='$choice3' WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
                else
                {
                    $sql2 = "UPDATE `exam_details` SET `answer3`= NULL WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
            }
            if(!isset($_POST["choice4"]) or $_POST["choice4"]=="" or $_POST["choice4"]==null )
            {
                $sql = "UPDATE `exam_details` SET `choice4`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

            }
            else
            {
                $choice4 = mysqli_real_escape_string($connection,$_POST["choice4"]);
                $sql = "UPDATE `exam_details` SET `choice4`='$choice4' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

                 if(isset($_POST["answer4"]))
                {
                    $sql2 = "UPDATE `exam_details` SET `answer4`='$choice4' WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
                else
                {
                    $sql2 = "UPDATE `exam_details` SET `answer4`= NULL WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
            }
            if(!isset($_POST["choice5"]) or $_POST["choice5"]=="" or $_POST["choice5"]==null )
            {
                $sql = "UPDATE `exam_details` SET `choice5`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

            }
            else
            {
                $choice5 = mysqli_real_escape_string($connection,$_POST["choice5"]);
                $sql = "UPDATE `exam_details` SET `choice5`='$choice5' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

                 if(isset($_POST["answer5"]))
                {
                    $sql2 = "UPDATE `exam_details` SET `answer5`='$choice5' WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
                else
                {
                    $sql2 = "UPDATE `exam_details` SET `answer5`= NULL WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
            }
             if(!isset($_POST["choice6"]) or $_POST["choice6"]=="" or $_POST["choice6"]==null )
            {
                $sql = "UPDATE `exam_details` SET `choice6`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

            }
            else
            {
                $choice6 = mysqli_real_escape_string($connection,$_POST["choice6"]);
                $sql = "UPDATE `exam_details` SET `choice6`='$choice6' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

                 if(isset($_POST["answer6"]))
                {
                    $sql2 = "UPDATE `exam_details` SET `answer6`='$choice6' WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
                else
                {
                    $sql2 = "UPDATE `exam_details` SET `answer6`= NULL WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
            }
             if(!isset($_POST["choice7"]) or $_POST["choice7"]=="" or $_POST["choice7"]==null )
            {
                $sql = "UPDATE `exam_details` SET `choice7`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

            }
            else
            {
                $choice7 = mysqli_real_escape_string($connection,$_POST["choice7"]);
                $sql = "UPDATE `exam_details` SET `choice7`='$choice7' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

                 if(isset($_POST["answer7"]))
                {
                    $sql2 = "UPDATE `exam_details` SET `answer7`='$choice7' WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
                else
                {
                    $sql2 = "UPDATE `exam_details` SET `answer7`= NULL WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
            }
             if(!isset($_POST["choice8"]) or $_POST["choice8"]=="" or $_POST["choice8"]==null )
            {
                $sql = "UPDATE `exam_details` SET `choice8`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

            }
            else
            {
                $choice8 = mysqli_real_escape_string($connection,$_POST["choice8"]);
                $sql = "UPDATE `exam_details` SET `choice8`='$choice8' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

                 if(isset($_POST["answer8"]))
                {
                    $sql2 = "UPDATE `exam_details` SET `answer8`='$choice8' WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
                else
                {
                    $sql2 = "UPDATE `exam_details` SET `answer8`= NULL WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
            }
             if(!isset($_POST["choice9"]) or $_POST["choice9"]=="" or $_POST["choice9"]==null )
            {
                $sql = "UPDATE `exam_details` SET `choice9`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

            }
            else
            {
                $choice9 = mysqli_real_escape_string($connection,$_POST["choice9"]);
                $sql = "UPDATE `exam_details` SET `choice9`='$choice9' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

                 if(isset($_POST["answer9"]))
                {
                    $sql2 = "UPDATE `exam_details` SET `answer9`='$choice9' WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
                else
                {
                    $sql2 = "UPDATE `exam_details` SET `answer9`= NULL WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
            }
             if(!isset($_POST["choice10"]) or $_POST["choice10"]=="" or $_POST["choice10"]==null )
            {
                $sql = "UPDATE `exam_details` SET `choice10`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

            }
            else
            {
                $choice10 = mysqli_real_escape_string($connection,$_POST["choice10"]);
                $sql = "UPDATE `exam_details` SET `choice10`='$choice10' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));

                 if(isset($_POST["answer10"]))
                {
                    $sql2 = "UPDATE `exam_details` SET `answer10`='$choice10' WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
                else
                {
                    $sql2 = "UPDATE `exam_details` SET `answer10`= NULL WHERE `question_id`='$qid'";
                    mysqli_query ($connection,$sql2) or die (mysqli_error ($connection));
                }
            }
            
          
         function get_data() {
       
           include('../redundant/_connection.php');
            $sql = "SELECT * FROM `exam_details` WHERE `exam_no` ='".$_SESSION["exam_no"]."' ORDER BY `question_no` DESC";
            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
            while ($record = mysqli_fetch_assoc($result)) {
                $question_type = "";
                
                $output = "<button type='button' class='close deletemc' id='".$record["question_id"]."'><i class='ace-icon fa fa-trash pull-right red'></i></button>";
                
                if($record["question_type"]=="multiple")
                {
                    $output .= "<button class='close edit_data1' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                     $question_type = "Multiple Choice";
                }
                elseif($record["question_type"]=="tof")
                {
                    $output .= "<button class='close edit_data2' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "True or False";
                }
                elseif($record["question_type"]=="identification")
                {
                    $output .= "<button class='close edit_data3' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "Identification";
                }
                elseif($record["question_type"]=="enumeration")
                {
                    $output .= "<button class='close edit_data4' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "Enumeration";
                }
                
                $output .="<div>";
                
                
               if($record["answer1"]!=""){
                   $output .= "A.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer1"];
                   $output .= "</strong><br><br>";
               }
                if($record["answer2"]!=""){
                   $output .= "B.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer2"];
                   $output .="</strong><br><br>";
               }
                if($record["answer3"]!=""){
                   $output .="C.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer3"];
                   $output .="</strong><br><br>";
               }
                if($record["answer4"]!=""){
                   $output .="D.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer4"];
                   $output .="</strong><br><br>";
               }
                if($record["answer5"]!=""){
                   $output .="E.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer5"];
                   $output .= "</strong><br><br>";
               }
                if($record["answer6"]!=""){
                   $output .="F.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer6"];
                   $output .="</strong><br><br>";
               }
                if($record["answer7"]!=""){
                   $output .="G.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer7"];
                   $output .="</strong><br><br>";
               }
                if($record["answer8"]!=""){
                   $output .="H.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer8"];
                   $output .="</strong><br><br>";
               }
                if($record["answer9"]!=""){
                    $output .= "I.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer9"];
                   $output .="</strong><br><br>";
               }
                if($record["answer10"]!=""){
                  $output .="J.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer10"];
                   $output .="</strong><br>";
               }
                $output .= "</div>";
                
                
                $choices = "";
                if($record["choice1"]!=""){
                   $choices .="A.)&nbsp;<strong>";
                   $choices .=$record["choice1"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice2"]!=""){
                   $choices .= "B.)&nbsp;<strong>";
                   $choices .= $record["choice2"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice3"]!=""){
                   $choices .= "C.)&nbsp;<strong>";
                   $choices .= $record["choice3"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice4"]!=""){
                    $choices .= "D.)&nbsp;<strong>";
                   $choices .= $record["choice4"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice5"]!=""){
                   $choices .= "E.)&nbsp;<strong>";
                   $choices .= $record["choice5"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice6"]!=""){
                    $choices .= "F.)&nbsp;<strong>";
                   $choices .= $record["choice6"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice7"]!=""){
                    $choices .= "G.)&nbsp;<strong>";
                   $choices .= $record["choice7"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice8"]!=""){
                   $choices .= "H.)&nbsp;<strong>";
                   $choices .= $record["choice8"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice9"]!=""){
                    $choices .= "I.)&nbsp;<strong>";
                   $choices .= $record["choice9"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice10"]!=""){
                   $choices .= "J.)&nbsp;<strong>";
                   $choices .= $record["choice10"];
                   $choices .= "</strong>";
               }
                
                    

                    $data[] = array(
                        'question_no' => $record["question_no"],
                        'question' => stripslashes($record["question"]),
                        'question_type' => $question_type,
                        'choices' => $choices,
                        'answers' => $output
                    );
                }
                $data = array('data' => $data);
                return json_encode($data,JSON_UNESCAPED_SLASHES);
            }

            $file_name = 'questions_data.json';
            file_put_contents($file_name, get_data());
        
        
        
        
         
        
        }

        if ($_GET["typeexam"]=="tof")
        {
            $sql1 = "SELECT * FROM `exam_details` ORDER BY `question_no` DESC";
            $result = mysqli_query ($connection, $sql1);
            if ($record = mysqli_fetch_assoc($result))
            {
                $question_no = $record["question_no"] + 1;
            } else
            {
                $question_no=1;
            }

            $exam_no = $_SESSION["exam_no"];
            
            $question = mysqli_real_escape_string($connection,$_POST["tof"]);
            if($_POST["torf"]=="true")
            {
                $answer1 = "True";
            }
            else
            {
                $answer1 = "False";
            }


            if($_GET["id"]==0)
            {
                
                $sql = "INSERT INTO exam_details (exam_no,question_type,question,answer1,question_no) VALUES('$exam_no','tof','$question','$answer1','$question_no')";
                
            }
            else
            {
                
                $qid = $_SESSION["question_id"];
                
                $sql="UPDATE `exam_details`
                SET question='$question',
                answer1='$answer1' 
                WHERE question_id='$qid'"; 
            }
            
            
            
            mysqli_query($connection,$sql) or die(mysqli_error($connection));

             function get_data() {
       
           include('../redundant/_connection.php');
            $sql = "SELECT * FROM `exam_details` WHERE `exam_no` ='".$_SESSION["exam_no"]."' ORDER BY `question_no` DESC";
            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
            while ($record = mysqli_fetch_assoc($result)) {
                $question_type = "";
                
                $output = "<button type='button' class='close deletemc' id='".$record["question_id"]."'><i class='ace-icon fa fa-trash pull-right red'></i></button>";
                
                if($record["question_type"]=="multiple")
                {
                    $output .= "<button class='close edit_data1' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                     $question_type = "Multiple Choice";
                }
                elseif($record["question_type"]=="tof")
                {
                    $output .= "<button class='close edit_data2' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "True or False";
                }
                elseif($record["question_type"]=="identification")
                {
                    $output .= "<button class='close edit_data3' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "Identification";
                }
                elseif($record["question_type"]=="enumeration")
                {
                    $output .= "<button class='close edit_data4' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "Enumeration";
                }
                
                $output .="<div>";
                
                
               if($record["answer1"]!=""){
                   $output .= "A.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer1"];
                   $output .= "</strong><br><br>";
               }
                if($record["answer2"]!=""){
                   $output .= "B.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer2"];
                   $output .="</strong><br><br>";
               }
                if($record["answer3"]!=""){
                   $output .="C.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer3"];
                   $output .="</strong><br><br>";
               }
                if($record["answer4"]!=""){
                   $output .="D.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer4"];
                   $output .="</strong><br><br>";
               }
                if($record["answer5"]!=""){
                   $output .="E.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer5"];
                   $output .= "</strong><br><br>";
               }
                if($record["answer6"]!=""){
                   $output .="F.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer6"];
                   $output .="</strong><br><br>";
               }
                if($record["answer7"]!=""){
                   $output .="G.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer7"];
                   $output .="</strong><br><br>";
               }
                if($record["answer8"]!=""){
                   $output .="H.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer8"];
                   $output .="</strong><br><br>";
               }
                if($record["answer9"]!=""){
                    $output .= "I.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer9"];
                   $output .="</strong><br><br>";
               }
                if($record["answer10"]!=""){
                  $output .="J.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer10"];
                   $output .="</strong><br>";
               }
                $output .= "</div>";
                
                
                $choices = "";
                if($record["choice1"]!=""){
                   $choices .="A.)&nbsp;<strong>";
                   $choices .=$record["choice1"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice2"]!=""){
                   $choices .= "B.)&nbsp;<strong>";
                   $choices .= $record["choice2"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice3"]!=""){
                   $choices .= "C.)&nbsp;<strong>";
                   $choices .= $record["choice3"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice4"]!=""){
                    $choices .= "D.)&nbsp;<strong>";
                   $choices .= $record["choice4"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice5"]!=""){
                   $choices .= "E.)&nbsp;<strong>";
                   $choices .= $record["choice5"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice6"]!=""){
                    $choices .= "F.)&nbsp;<strong>";
                   $choices .= $record["choice6"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice7"]!=""){
                    $choices .= "G.)&nbsp;<strong>";
                   $choices .= $record["choice7"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice8"]!=""){
                   $choices .= "H.)&nbsp;<strong>";
                   $choices .= $record["choice8"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice9"]!=""){
                    $choices .= "I.)&nbsp;<strong>";
                   $choices .= $record["choice9"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice10"]!=""){
                   $choices .= "J.)&nbsp;<strong>";
                   $choices .= $record["choice10"];
                   $choices .= "</strong>";
               }
                
                    

                    $data[] = array(
                        'question_no' => $record["question_no"],
                        'question' => stripslashes($record["question"]),
                        'question_type' => $question_type,
                        'choices' => $choices,
                        'answers' => $output
                    );
                }
                $data = array('data' => $data);
                return json_encode($data,JSON_UNESCAPED_SLASHES);
            }

            $file_name = 'questions_data.json';
            file_put_contents($file_name, get_data());
        
        


        }
        if ($_GET["typeexam"]=="iden")
        {
            $sql1 = "SELECT * FROM `exam_details` ORDER BY `question_no` DESC";
            $result = mysqli_query ($connection, $sql1);
            if ($record = mysqli_fetch_assoc($result))
            {
                $question_no = $record["question_no"] + 1;
            } else
            {
                $question_no=1;
            }

            $exam_no = $_SESSION["exam_no"];
            $question = addslashes($_POST["identification"]);
            $answer1 = $_POST["iden_answer1"];
            
            if($_GET["id"]==0)
            {
                $sql = "INSERT INTO `exam_details` (`exam_no`,`question_type`,`question`,`answer1`,`question_no`) VALUES('$exam_no','identification','$question','$answer1','$question_no')";
                mysqli_query($connection,$sql) or die(mysqli_error($connection));
                $sql1 = "SELECT * FROM `exam_details` ORDER BY `question_id` DESC";
                $result = mysqli_query ($connection, $sql1);
                if ($record = mysqli_fetch_assoc($result))
                {
                    $qid = $record["question_id"];
                }
            }
            else
            {
                
                $qid = $_SESSION["question_id"];
                $sql = "UPDATE `exam_details`
                        SET `question` = '$question',
                        `answer1` = '$answer1'
                        WHERE `question_id` = '$qid'";
                  mysqli_query($connection,$sql) or die(mysqli_error($connection));
            }
                        
            if (!isset($_POST["answer2"]) or $_POST["answer2"]=="" or $_POST["answer2"]==null )
            {
                 $sql = "UPDATE `exam_details` SET `answer2`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            else
            {
                $answer2 = $_POST["answer2"];
                $sql = "UPDATE `exam_details` SET `answer2`='$answer2' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            if (!isset($_POST["answer3"]) or $_POST["answer3"]=="" or $_POST["answer3"]==null )
            {
                $sql = "UPDATE `exam_details` SET `answer3`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            else
            {
                $answer3 = $_POST["answer3"];
                $sql = "UPDATE `exam_details` SET `answer3`='$answer3' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            
  function get_data() {
       
           include('../redundant/_connection.php');
            $sql = "SELECT * FROM `exam_details` WHERE `exam_no` ='".$_SESSION["exam_no"]."' ORDER BY `question_no` DESC";
            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
            while ($record = mysqli_fetch_assoc($result)) {
                $question_type = "";
                
                $output = "<button type='button' class='close deletemc' id='".$record["question_id"]."'><i class='ace-icon fa fa-trash pull-right red'></i></button>";
                
                if($record["question_type"]=="multiple")
                {
                    $output .= "<button class='close edit_data1' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                     $question_type = "Multiple Choice";
                }
                elseif($record["question_type"]=="tof")
                {
                    $output .= "<button class='close edit_data2' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "True or False";
                }
                elseif($record["question_type"]=="identification")
                {
                    $output .= "<button class='close edit_data3' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "Identification";
                }
                elseif($record["question_type"]=="enumeration")
                {
                    $output .= "<button class='close edit_data4' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "Enumeration";
                }
                
                $output .="<div>";
                
                
               if($record["answer1"]!=""){
                   $output .= "A.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer1"];
                   $output .= "</strong><br><br>";
               }
                if($record["answer2"]!=""){
                   $output .= "B.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer2"];
                   $output .="</strong><br><br>";
               }
                if($record["answer3"]!=""){
                   $output .="C.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer3"];
                   $output .="</strong><br><br>";
               }
                if($record["answer4"]!=""){
                   $output .="D.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer4"];
                   $output .="</strong><br><br>";
               }
                if($record["answer5"]!=""){
                   $output .="E.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer5"];
                   $output .= "</strong><br><br>";
               }
                if($record["answer6"]!=""){
                   $output .="F.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer6"];
                   $output .="</strong><br><br>";
               }
                if($record["answer7"]!=""){
                   $output .="G.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer7"];
                   $output .="</strong><br><br>";
               }
                if($record["answer8"]!=""){
                   $output .="H.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer8"];
                   $output .="</strong><br><br>";
               }
                if($record["answer9"]!=""){
                    $output .= "I.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer9"];
                   $output .="</strong><br><br>";
               }
                if($record["answer10"]!=""){
                  $output .="J.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer10"];
                   $output .="</strong><br>";
               }
                $output .= "</div>";
                
                
                $choices = "";
                if($record["choice1"]!=""){
                   $choices .="A.)&nbsp;<strong>";
                   $choices .=$record["choice1"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice2"]!=""){
                   $choices .= "B.)&nbsp;<strong>";
                   $choices .= $record["choice2"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice3"]!=""){
                   $choices .= "C.)&nbsp;<strong>";
                   $choices .= $record["choice3"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice4"]!=""){
                    $choices .= "D.)&nbsp;<strong>";
                   $choices .= $record["choice4"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice5"]!=""){
                   $choices .= "E.)&nbsp;<strong>";
                   $choices .= $record["choice5"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice6"]!=""){
                    $choices .= "F.)&nbsp;<strong>";
                   $choices .= $record["choice6"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice7"]!=""){
                    $choices .= "G.)&nbsp;<strong>";
                   $choices .= $record["choice7"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice8"]!=""){
                   $choices .= "H.)&nbsp;<strong>";
                   $choices .= $record["choice8"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice9"]!=""){
                    $choices .= "I.)&nbsp;<strong>";
                   $choices .= $record["choice9"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice10"]!=""){
                   $choices .= "J.)&nbsp;<strong>";
                   $choices .= $record["choice10"];
                   $choices .= "</strong>";
               }
                
                    

                    $data[] = array(
                        'question_no' => $record["question_no"],
                        'question' => stripslashes($record["question"]),
                        'question_type' => $question_type,
                        'choices' => $choices,
                        'answers' => $output
                    );
                }
                $data = array('data' => $data);
                return json_encode($data,JSON_UNESCAPED_SLASHES);
            }

            $file_name = 'questions_data.json';
            file_put_contents($file_name, get_data());
        
        
        }
    
        if ($_GET["typeexam"]=="enum")
        {
           $sql1 = "SELECT * FROM `exam_details` ORDER BY `question_no` DESC";
            $result = mysqli_query ($connection, $sql1);
            if ($record = mysqli_fetch_assoc($result))
            {
                $question_no = $record["question_no"] + 1;
            } else
            {
                $question_no=1;
            }

            $exam_no = $_SESSION["exam_no"];
            $question = addslashes($_POST["enumeration"]);
            $answer1 = $_POST["answer1"];
            $answer2 = $_POST["answer2"];
            if($_GET["id"]==0)
            {   
                $sql = "INSERT INTO `exam_details` (`exam_no`,`question_type`,`question`,`answer1`,`answer2`,`question_no`) VALUES('$exam_no','enumeration','$question','$answer1','$answer2','$question_no')";
                mysqli_query($connection,$sql) or die(mysqli_error($connection));
                
                 $sql1 = "SELECT * FROM `exam_details` ORDER BY `question_id` DESC";
                $result = mysqli_query ($connection, $sql1);
                if ($record = mysqli_fetch_assoc($result))
                {
                    $qid = $record["question_id"];
                }
                
            }
            else
            {
                
                $qid = $_SESSION["question_id"];
                $sql = "UPDATE `exam_details`
                        SET `question` = '$question',
                        `answer1` = '$answer1',
                        `answer2` = '$answer2'
                        WHERE `question_id` = '$qid'";
                mysqli_query($connection,$sql) or die(mysqli_error($connection));
            }
            
           
            if (!isset($_POST["answer3"]) or $_POST["answer3"]=="" or $_POST["answer3"]==null )
            {
                $sql = "UPDATE `exam_details` SET `answer3`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            else
            {
                $answer3 = $_POST["answer3"];
                $sql = "UPDATE `exam_details` SET `answer3`='$answer3' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            
            
            
            if (!isset($_POST["answer4"]) or $_POST["answer4"]=="" or $_POST["answer4"]==null )
            {
                
                $sql = "UPDATE `exam_details` SET `answer4`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
             else
            {
                $answer4 = $_POST["answer4"];
                $sql = "UPDATE `exam_details` SET `answer4`='$answer4' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            
            
            if (!isset($_POST["answer5"]) or $_POST["answer5"]=="" or $_POST["answer5"]==null )
            {
               $sql = "UPDATE `exam_details` SET `answer5`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
             else
            {
                
                  $answer5 = $_POST["answer5"];
                $sql = "UPDATE `exam_details` SET `answer5`='$answer5' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            
            
            
            if (!isset($_POST["answer6"]) or $_POST["answer6"]=="" or $_POST["answer6"]==null)
            {
                $sql = "UPDATE `exam_details` SET `answer6`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
             else
            {
                
                 $answer6 = $_POST["answer6"];
                $sql = "UPDATE `exam_details` SET `answer6`='$answer6' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            
            
            if (!isset($_POST["answer7"]) or $_POST["answer7"]=="" or $_POST["answer7"]==null)
            {
                $sql = "UPDATE `exam_details` SET `answer7`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
             else
            {
                
                 $answer7 = $_POST["answer7"];
                $sql = "UPDATE `exam_details` SET `answer7`='$answer7' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            
            
            if (!isset($_POST["answer8"]) or $_POST["answer8"]=="" or $_POST["answer8"]==null)
            {
                $sql = "UPDATE `exam_details` SET `answer8`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
             else
            {
                
                 $answer8 = $_POST["answer8"];
                $sql = "UPDATE `exam_details` SET `answer8`='$answer8' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            
            
            if (!isset($_POST["answer9"]) or $_POST["answer9"]=="" or $_POST["answer9"]==null)
            {
                $sql = "UPDATE `exam_details` SET `answer9`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
             else
            {
                
                 $answer9 = $_POST["answer9"];
                $sql = "UPDATE `exam_details` SET `answer9`='$answer9' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
            
            
            if (!isset($_POST["answer10"]) or $_POST["answer10"]=="" or $_POST["answer10"]==null)
            {
                $sql = "UPDATE `exam_details` SET `answer10`= NULL WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }
             else
            {
                
                 $answer10 = $_POST["answer10"];
                $sql = "UPDATE `exam_details` SET `answer10`='$answer10' WHERE `question_id`='$qid'";
                mysqli_query ($connection,$sql) or die (mysqli_error ($connection));
            }

             function get_data() {
       
           include('../redundant/_connection.php');
            $sql = "SELECT * FROM `exam_details` WHERE `exam_no` ='".$_SESSION["exam_no"]."' ORDER BY `question_no` DESC";
            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
            while ($record = mysqli_fetch_assoc($result)) {
                $question_type = "";
                
                $output = "<button type='button' class='close deletemc' id='".$record["question_id"]."'><i class='ace-icon fa fa-trash pull-right red'></i></button>";
                
                if($record["question_type"]=="multiple")
                {
                    $output .= "<button class='close edit_data1' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                     $question_type = "Multiple Choice";
                }
                elseif($record["question_type"]=="tof")
                {
                    $output .= "<button class='close edit_data2' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "True or False";
                }
                elseif($record["question_type"]=="identification")
                {
                    $output .= "<button class='close edit_data3' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "Identification";
                }
                elseif($record["question_type"]=="enumeration")
                {
                    $output .= "<button class='close edit_data4' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "Enumeration";
                }
                
                $output .="<div>";
                
                
               if($record["answer1"]!=""){
                   $output .= "A.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer1"];
                   $output .= "</strong><br><br>";
               }
                if($record["answer2"]!=""){
                   $output .= "B.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer2"];
                   $output .="</strong><br><br>";
               }
                if($record["answer3"]!=""){
                   $output .="C.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer3"];
                   $output .="</strong><br><br>";
               }
                if($record["answer4"]!=""){
                   $output .="D.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer4"];
                   $output .="</strong><br><br>";
               }
                if($record["answer5"]!=""){
                   $output .="E.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer5"];
                   $output .= "</strong><br><br>";
               }
                if($record["answer6"]!=""){
                   $output .="F.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer6"];
                   $output .="</strong><br><br>";
               }
                if($record["answer7"]!=""){
                   $output .="G.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer7"];
                   $output .="</strong><br><br>";
               }
                if($record["answer8"]!=""){
                   $output .="H.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer8"];
                   $output .="</strong><br><br>";
               }
                if($record["answer9"]!=""){
                    $output .= "I.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer9"];
                   $output .="</strong><br><br>";
               }
                if($record["answer10"]!=""){
                  $output .="J.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer10"];
                   $output .="</strong><br>";
               }
                $output .= "</div>";
                
                
                $choices = "";
                if($record["choice1"]!=""){
                   $choices .="A.)&nbsp;<strong>";
                   $choices .=$record["choice1"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice2"]!=""){
                   $choices .= "B.)&nbsp;<strong>";
                   $choices .= $record["choice2"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice3"]!=""){
                   $choices .= "C.)&nbsp;<strong>";
                   $choices .= $record["choice3"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice4"]!=""){
                    $choices .= "D.)&nbsp;<strong>";
                   $choices .= $record["choice4"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice5"]!=""){
                   $choices .= "E.)&nbsp;<strong>";
                   $choices .= $record["choice5"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice6"]!=""){
                    $choices .= "F.)&nbsp;<strong>";
                   $choices .= $record["choice6"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice7"]!=""){
                    $choices .= "G.)&nbsp;<strong>";
                   $choices .= $record["choice7"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice8"]!=""){
                   $choices .= "H.)&nbsp;<strong>";
                   $choices .= $record["choice8"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice9"]!=""){
                    $choices .= "I.)&nbsp;<strong>";
                   $choices .= $record["choice9"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice10"]!=""){
                   $choices .= "J.)&nbsp;<strong>";
                   $choices .= $record["choice10"];
                   $choices .= "</strong>";
               }
                
                    

                    $data[] = array(
                        'question_no' => $record["question_no"],
                        'question' => stripslashes($record["question"]),
                        'question_type' => $question_type,
                        'choices' => $choices,
                        'answers' => $output
                    );
                }
                $data = array('data' => $data);
                return json_encode($data,JSON_UNESCAPED_SLASHES);
            }

            $file_name = 'questions_data.json';
            file_put_contents($file_name, get_data());
        
        

        } 
    }
    if(isset($_GET["del"]))
    {
        $qid = $_GET["del"];
        if($_GET["type"]=="exam")
        {
            
         $sql = "DELETE FROM `exam_details` WHERE `exam_no` = '$qid'";
        mysqli_query($connection,$sql) or die(mysqli_error($connection));
            
            $sql = "DELETE FROM `exams` WHERE `exam_no` = '$qid'";
        mysqli_query($connection,$sql) or die(mysqli_error($connection));
        }
        else
        {
            $exam_no = $_SESSION["exam_no"];
         $sql = "DELETE FROM `exam_details` WHERE `question_id` = '$qid'";
        mysqli_query($connection,$sql) or die(mysqli_error($connection));
        }
        
        
        if ($_GET["type"]=="mc")
        {
               function get_data() {
       
           include('../redundant/_connection.php');
            $sql = "SELECT * FROM `exam_details` WHERE `exam_no` ='".$_SESSION["exam_no"]."' ORDER BY `question_no` DESC";
            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
            while ($record = mysqli_fetch_assoc($result)) {
                $question_type = "";
                
                $output = "<button type='button' class='close deletemc' id='".$record["question_id"]."'><i class='ace-icon fa fa-trash pull-right red'></i></button>";
                
                if($record["question_type"]=="multiple")
                {
                    $output .= "<button class='close edit_data1' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                     $question_type = "Multiple Choice";
                }
                elseif($record["question_type"]=="tof")
                {
                    $output .= "<button class='close edit_data2' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "True or False";
                }
                elseif($record["question_type"]=="identification")
                {
                    $output .= "<button class='close edit_data3' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "Identification";
                }
                elseif($record["question_type"]=="enumeration")
                {
                    $output .= "<button class='close edit_data4' id='".$record["question_id"]."'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>";
                    $question_type = "Enumeration";
                }
                
                $output .="<div>";
                
                
               if($record["answer1"]!=""){
                   $output .= "A.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer1"];
                   $output .= "</strong><br><br>";
               }
                if($record["answer2"]!=""){
                   $output .= "B.)&nbsp;<strong class='text-success'>";
                   $output .= $record["answer2"];
                   $output .="</strong><br><br>";
               }
                if($record["answer3"]!=""){
                   $output .="C.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer3"];
                   $output .="</strong><br><br>";
               }
                if($record["answer4"]!=""){
                   $output .="D.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer4"];
                   $output .="</strong><br><br>";
               }
                if($record["answer5"]!=""){
                   $output .="E.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer5"];
                   $output .= "</strong><br><br>";
               }
                if($record["answer6"]!=""){
                   $output .="F.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer6"];
                   $output .="</strong><br><br>";
               }
                if($record["answer7"]!=""){
                   $output .="G.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer7"];
                   $output .="</strong><br><br>";
               }
                if($record["answer8"]!=""){
                   $output .="H.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer8"];
                   $output .="</strong><br><br>";
               }
                if($record["answer9"]!=""){
                    $output .= "I.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer9"];
                   $output .="</strong><br><br>";
               }
                if($record["answer10"]!=""){
                  $output .="J.)&nbsp;<strong class='text-success'>";
                   $output .=$record["answer10"];
                   $output .="</strong><br>";
               }
                $output .= "</div>";
                
                
                $choices = "";
                if($record["choice1"]!=""){
                   $choices .="A.)&nbsp;<strong>";
                   $choices .=$record["choice1"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice2"]!=""){
                   $choices .= "B.)&nbsp;<strong>";
                   $choices .= $record["choice2"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice3"]!=""){
                   $choices .= "C.)&nbsp;<strong>";
                   $choices .= $record["choice3"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice4"]!=""){
                    $choices .= "D.)&nbsp;<strong>";
                   $choices .= $record["choice4"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice5"]!=""){
                   $choices .= "E.)&nbsp;<strong>";
                   $choices .= $record["choice5"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice6"]!=""){
                    $choices .= "F.)&nbsp;<strong>";
                   $choices .= $record["choice6"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice7"]!=""){
                    $choices .= "G.)&nbsp;<strong>";
                   $choices .= $record["choice7"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice8"]!=""){
                   $choices .= "H.)&nbsp;<strong>";
                   $choices .= $record["choice8"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice9"]!=""){
                    $choices .= "I.)&nbsp;<strong>";
                   $choices .= $record["choice9"];
                   $choices .= "</strong><br><br>";
               }
                if($record["choice10"]!=""){
                   $choices .= "J.)&nbsp;<strong>";
                   $choices .= $record["choice10"];
                   $choices .= "</strong>";
               }
                
                    

                    $data[] = array(
                        'question_no' => $record["question_no"],
                        'question' => stripslashes($record["question"]),
                        'question_type' => $question_type,
                        'choices' => $choices,
                        'answers' => $output
                    );
                }
                $data = array('data' => $data);
                return json_encode($data,JSON_UNESCAPED_SLASHES);
            }

            $file_name = 'questions_data.json';
            file_put_contents($file_name, get_data());
        
        
        
        }
        
        elseif($_GET["type"]=="exam")
        {
            ?>
                   <div class="widget-body"  id="tbody">
                                    <div class="widget-main no-padding">
                                        <table class="table table-striped table-bordered table-hover">
                                            <?php 
                                        include("../redundant/_connection.php"); 
                                        $sql4 = "SELECT * FROM `exams` WHERE `teacher_account_no` =".$_SESSION["user"];
                                        $result4 = mysqli_query ($connection, $sql4) or die (mysqli_error($connection));
                                        if (mysqli_num_rows($result4)>0)
                                        { 
                                            
                                        ?>
                                        <thead class="thin-border-bottom">
                                            <tr>
                                                <th>
                                                    <i class="ace-icon fa fa-folder-open-o"></i>
                                                    Exam Title
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa fa-folder-open-o"></i>
                                                    Class Code
                                                </th>

                                                <th>
                                                    <i class="ace-icon fa  fa-bookmark-o"></i>
                                                    Date Created
                                                </th>
                                                <th class="hidden-480">Status</th>
                                                <th>
                                                    <i class="ace-icon fa  fa-calendar"></i>
                                                    Date Published
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa  fa-calendar"></i>
                                                    Expiration Date
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa  fa-calendar"></i>
                                                    Edit and Republish
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa  fa-trash"></i>
                                                    Delete
                                                </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <thead class="thin-border-bottom">
                                                    <br>
                                                   <center><h2>NO EXAMS YET</h2> 
                                                    <a  href="#"  data-toggle="modal" data-target="#myModalCreateExamTimeline" class="btn btn-round btn-info"><i class="ace-icon fa fa-plus-circle"></i> Create Exam Now</a> </center> <br>
                                                
                                            </thead>
                                            <?php
                                        }
                                            
                                        ?>                
                                        <tbody>
                                            <?php
                        include("../redundant/_connection.php");
                        $sql1 = "SELECT * FROM `exams` WHERE `teacher_account_no` = ".$_SESSION["user"]." ORDER BY `exam_no` DESC";
                        $result = mysqli_query ($connection, $sql1);
                        if (mysqli_num_rows($result)>0)
                        {
                            $now = new DateTime();
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $date = new DateTime($row['exam_date_expired']);
                                
                                
                                    echo"<tr>";
                                
                                
                                echo"<td><a href='createexam.php?classcode=".$row["class_code"]."&refid=".$row["exam_no"]."'>".$row["exam_name"]."</a></td>";
                                
                                echo"<td>";
                                
                                $query ="SELECT * FROM `courses` WHERE `class_code` = '".$row["class_code"]."'";
                                 $result1 = mysqli_query($connection, $query);
                                if( $record2 = mysqli_fetch_assoc($result1)) {   
                                    echo "<a href='mycourse.php?classcode=".$row["class_code"]."'>".$record2["course_code"]."</a></td>";  
                                }
                              
                                echo"<td>";
                                echo $row["date_created"];
                                echo"</td>";
                                  echo"<td>";
                                if($row["availability"] == "Available")
                                {
                                    echo "Published";
                                }
                                else
                                {
                                    echo "Unpublished";
                                }
                                echo"</td>";
                                echo"<td>";
                                echo $row["date_publish"];
                                echo"</td>";
                                
                                
                                
                               
                                echo"<td>";
                                if($date < $now) {
                                    echo "<center><span class='label label-danger arrowed-in arrowed-in-right'>EXPIRED</span></center>";
                                    
                                }
                                else
                                {
                                    echo $row["exam_date_expired"];
                                }
                                echo"</td>";
                                
                                echo "<td>";
                                
                                echo "<center>
                                <div class='action-buttons'>
                                    <a href='createexam.php?classcode=".$row["class_code"]."&refid=".$row["exam_no"]."'>
                                    EDIT/REPUBLISH
                                    </a>
                                </div></center>";
                                echo"</td>";
                              
                                echo "<td>";
                                
                                echo "<center>
                                <div class='action-buttons'>
                                    <a href='#' class='red edelete' id='".$row["exam_no"]."'><span class='label label-danger fa fa-trash'>
                                    DELETE </span>
                                    </a>
                                </div></center>";
                                echo"</td>";
                              
                                echo"</tr>";
                            }
                            
                        }
                                            ?>


                                        </tbody>

                                    </table>
                                </div>
                                    
                            </div>
            <?php
        }
    }
    if(isset($_GET["counts"]))
    {
        
                            
                
        $exam_no = $_SESSION["exam_no"];
        include("../redundant/_connection.php");
        $sql1 = "SELECT * FROM `exam_details` WHERE `exam_no`=".$_SESSION["exam_no"];
        $result = mysqli_query ($connection, $sql1) or die (mysqli_error($connection));
        $mcCount = 0;
        $tofCount= 0;
        $idenCount= 0;
        $enumCount= 0;
        if (mysqli_num_rows($result)>0)
        {

            while($row = mysqli_fetch_assoc($result))
            {
               if($row["question_type"]=="multiple")
               {
                   $mcCount = $mcCount + 1;
               }
                elseif($row["question_type"]=="tof")
                {
                    $tofCount= $tofCount +1;
                }
                elseif($row["question_type"]=="identification")
                {
                    $idenCount = $idenCount +1;
                }
                else
                {
                    $enumCount = $enumCount+1;
                }
            }

        }

        ?>
            <dl class="dl-horizontal" id="dl">
                    <h3>Questions Count</h3>
					<dt>Multiple Choice:</dt>
						<dd><?php echo $mcCount; ?></dd>
					<dt>True or False:</dt>
					   <dd><?php echo $tofCount; ?></dd>
                    <dt>Identification:</dt>
						<dd>  <?php echo $idenCount; ?></dd>
					<dt>Enumeration:</dt>
					   <dd> <?php echo $enumCount; ?></dd>
                 <dt>TOTAL QUESTIONS:</dt>
					   <dd id="quescount"> <?php echo $enumCount+$idenCount+$tofCount+$mcCount; ?></dd>
                 
                      
				    </dl>
                          
        <?php
                         
    }
   
    
?>