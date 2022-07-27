<!DOCTYPE html>
<html>
<head>
    <title></title>
<?php
    session_start();
    include_once("../redundant/Main.php");
    //$Main = new Main; 
   // $Main -> head1() 
?>   
<meta name="description" content="Drag &amp; drop file upload with image preview" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
       <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/ace.min2.css" class="ace-main-stylesheet" id="main-ace-style" />
<style>


    /* Header/Blog Title */
    .header {
     
        font-size: 40px;
        text-align: center;
       
    }

    /* Create two unequal columns that floats next to each other */
    /* Left column */
    .leftcolumn {   
        float: left;
        width: 75%;
    }

    /* Right column */
    .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 20px;
    }

    /* Fake image */
    .fakeimg {
        background-color: #afaa;
        width: 100%;
        padding: 20px;
    }

    /* Add a card effect for articles */
    .card {
         background: #E4F4EB;
         padding: 20px;
         margin-top: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
        #id {
            backface-visibility: hidden;
        }


    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media (max-width: 800px) {
        .leftcolumn, .rightcolumn {   
            width: 100%;
            padding: 0;
        }
    }
</style>
<link rel="stylesheet" href="../assets/css/dropzone.min.css" />
</head>
     <body class="no-skin">
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                    try{ace.settings.loadState('main-container')}catch(e){}
            </script>
            <div class="main-content">
                <?php  
                    include("../redundant/_connection.php");
                    
    
                    if(isset($_GET["refid"]))
                    {
                        $exam_no = $_GET["refid"];
                    }
                    else
                    {
                        $exam_no = $_POST["exam_no"];
                    }
                    $sql = "SELECT * FROM `exams` INNER JOIN `exam_details` ON exams.exam_no = exam_details.exam_no INNER JOIN `courses` ON exams.class_code = courses.class_code  WHERE exams.exam_no = '".$exam_no."'";
                    $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                    if ($record = mysqli_fetch_assoc($result))
                    {
                        $exam_name = $record["exam_name"];
                        $exam_desc = $record["exam_description"];
                        $exam_password = $record["exam_password"];
                        $class_code = $record["class_code"]; 
                        $course_code = $record["course_code"];
                        $course_title = $record["course_title"];
                        $time_limit= $record["time_limit"];
                    }
                    ?>
                
                 <?php  
                    include("../redundant/_connection.php");
                    
                    $countAnswers=0;
                    $sql = "SELECT * FROM exam_details Where exam_no='$exam_no' and question_type !='identification'";
                    $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                    while($record = mysqli_fetch_assoc($result))
                    {
                        for( $i = 1; $i<=10; $i++ )
                        {
                             if($record["answer".$i] != null)
                        {
                             $countAnswers =$countAnswers+1;
                        }
                        }
                         
                    }
                
                    $sql = "SELECT * FROM exam_details Where exam_no='$exam_no' and question_type ='identification'";
                    $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                    while($record = mysqli_fetch_assoc($result))
                    {
                        $countAnswers =$countAnswers+1;
                    }
                    ?>
                
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="container-fluid">
                            <div class="well" style="margin-top:20px; ">
                                <div class='header' style="background-color:#6699CC; padding:5px;">
                                    <!--<div class="pull-right">
                                    <h3><strong>Score : <?php //if(isset($_GET["exam_result_no"])) { echo $score; } ?></strong></h3>
                                    </div><br><br>-->
                                    <h1 style="color:white; font-size:25px;"><Strong><?php echo $exam_name; ?></Strong></h1>
                                    <h3 style="color:white;"><?php echo $exam_desc; ?></h3>
                                    <h5 style="color:white;"><strong>Class Code:</strong> <?php echo $class_code." | <strong>Course Code:</strong> ".$course_code." | <strong>Course Title:</strong> ".$course_title; ?></h5>
                                </div>
                            <div>
                                <div class="profile-feed row" >
<?php
    if(isset($_POST['submit-exam'])){
        $count = 0;
        $correct_answers = 0;
        $exam_no = $_POST['exam_no'];

        $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has taken an examination <strong class=\"orange\">".$exam_name."</strong> from <a href=\"mycourse.php?classcode=".$class_code."\">".$course_title."</a> course.', 111, ".$_SESSION["user"].")";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
        
        $sql = "INSERT INTO `exam_results`(`score`,`student_account_no`,`exam_no`) VALUES($correct_answers, ".$_SESSION["user"].", $exam_no)";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
        $last_exam_result = $connection -> insert_id;

        foreach ($_SESSION["questions"] as $key => $value) {
            $sql1 = "SELECT * FROM `exam_details` WHERE `question_id` = ".$value;
            $result1 = mysqli_query($connection, $sql1) or die(mysqli_error($connection));
            $record1 = mysqli_fetch_assoc($result1);
            $count++;
            $answers = 0;
?>
                                    <div class="col-sm-12" >    
                                            <div class="profile-activity clearfix well" style="background-color:#F4F4FF;">
                                                <div>
<?php
            if($record1["question_type"] == "multiple") {
                for ($i = 1; $i <= 10; $i++) {
                    if($record1["answer".$i] != "") {
                        $answers++;
                    }
                 }
                if($answers > 1) {
                    if(!empty($_POST[$record1["question_id"]])){
?>                  
                        <label><b style="font-size:16px;"><?php echo $count.". "; ?></b></label>
                        <label><?php echo stripslashes($record1["question"]); ?></label><br /><b>Answers:</b><br> 
<?php
                        $answers = array();
                        for ($i = 1; $i <= 10; $i++) {
                           if($record1["answer".$i] != "") {
                                $answers[] = $record1["answer".$i];                        
                           }
                        }

                        $count1 = 0;
                        $AllCheck = true;
                        foreach($_POST[$record1["question_id"]] as $selected) { 
                            if(in_array($selected, $answers)) {
                                $count1++;
?>  

<?php
                                echo $selected." <span class='ace-icon glyphicon glyphicon-ok green sm'></span><br />";
                            } else {
                                $AllCheck = false;
                                echo $selected." <span class='ace-icon glyphicon glyphicon-remove red sm'></span><br />";
                            }
                        }
                        if($AllCheck == True) {
                            $sql = "INSERT INTO `exam_result_details`(`question_id`,`remarks`,`exam_result_no`) VALUES(".$record1["question_id"].", 1, $last_exam_result)";
                            mysqli_query($connection, $sql);
                            $correct_answers += $count1;
                        } else {
                            $sql = "INSERT INTO `exam_result_details`(`question_id`,`remarks`,`exam_result_no`) VALUES(".$record1["question_id"].", 0, $last_exam_result)";
                            mysqli_query($connection, $sql);
                        }
                    } 
                } else {
                    for ($i = 1; $i <= 6; $i++) {
                        if($record1["answer".$i] != "") {
                            if(isset($_POST[$record1["question_id"]])) {
                                if($_POST[$record1["question_id"]] == $record1["answer".$i]) {
                                    $correct_answers++;
                                    $sql = "INSERT INTO `exam_result_details`(`question_id`,`remarks`,`exam_result_no`) VALUES(".$record1["question_id"].", 1, $last_exam_result)";
                                    mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>                                  
                                    <label><b style="font-size:16px;"><?php echo $count.". "; ?></b></label>
                                    <label><?php echo stripslashes($record1["question"]);?></label><br /><b>Answer:</b>
                                    <label><?php echo $_POST[$record1["question_id"]]." <span class='ace-icon glyphicon glyphicon-ok green sm'></span>"; ?></label><br />   
<?php
                                } else {
                                    $sql = "INSERT INTO `exam_result_details`(`question_id`,`remarks`,`exam_result_no`) VALUES(".$record1["question_id"].", 0, $last_exam_result)";
                                    mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>                                  
                                    <label><b style="font-size:16px;"><?php echo $count.". "; ?></b></label>
                                    <label><?php echo stripslashes($record1["question"]); ?></label><br /> 
                                    <label><?php echo $_POST[$record1["question_id"]]." <span class='ace-icon glyphicon glyphicon-remove red sm'></span>"; ?></label><br />   
<?php
                                }
                            }
                        }
                    }
                }
            } elseif($record1["question_type"] == "tof") {
                if(isset($_POST[$record1["question_id"]."TOF"])){
                    if($_POST[$record1["question_id"]."TOF"] == $record1["answer1"]) {
                        $correct_answers++;
                        $sql = "INSERT INTO `exam_result_details`(`question_id`,`remarks`,`exam_result_no`) VALUES(".$record1["question_id"].", 1, $last_exam_result)";
                        mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>
                        <label><b style="font-size:16px;"><?php echo $count.". "; ?></b></label>
                        <label><?php echo stripslashes($record1["question"]); ?></label><br /> 
                        <label><?php echo"<b>Answer:</b> ". $_POST[$record1["question_id"]."TOF"]." <span class='ace-icon glyphicon glyphicon-ok green sm'></span>"; ?></label><br /> 
<?php
                    } else {
                        $sql = "INSERT INTO `exam_result_details`(`question_id`,`remarks`,`exam_result_no`) VALUES(".$record1["question_id"].", 0, $last_exam_result)";
                        mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>
                        <label><b style="font-size:16px;"><?php echo $count.". "; ?></b></label>
                        <label><?php echo stripslashes($record1["question"]); ?></label><br /> 
                        <label><?php echo"<b>Answer:</b> " .$_POST[$record1["question_id"]."TOF"]." <span class='ace-icon glyphicon glyphicon-remove red sm'></span>"; ?></label><br /> 
<?php
                    }
                }
            } elseif($record1["question_type"] == "identification") {
                if(isset($_POST[$record1["question_id"]."identification"])) {
                    $answers = array();
                    for ($i = 1; $i <= 6; $i++) {
                        if($record1["answer".$i] != "") { 
                             $answers[] = strtolower($record1["answer".$i]);  
                        }
                    }

                    if(in_array(trim(strtolower($_POST[$record1["question_id"]."identification"])), $answers)) {
                        $correct_answers++;
                        $sql = "INSERT INTO `exam_result_details`(`question_id`,`remarks`,`exam_result_no`) VALUES(".$record1["question_id"].", 1, $last_exam_result)";
                        mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>
                        <label><b style="font-size:16px;"><?php echo $count.". "; ?></b></label>
                        <label><?php echo stripslashes($record1["question"]); ?></label><br /> 
                        <label><?php echo"<b>Answer: </b> " .$_POST[$record1["question_id"]."identification"]." <span class='ace-icon glyphicon glyphicon-ok green sm'></span>"; ?></label><br /> 
<?php

                    } else {
                        $sql = "INSERT INTO `exam_result_details`(`question_id`,`remarks`,`exam_result_no`) VALUES(".$record1["question_id"].", 0, $last_exam_result)";
                        mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>
                         <label><b style="font-size:16px;"><?php echo $count.". "; ?></b></label>
                        <label><?php stripslashes($record1["question"]); ?></label><br /> 
                        <label><?php echo"<b>Answer: </b> ". $_POST[$record1["question_id"]."identification"]." <span class='ace-icon glyphicon glyphicon-remove red sm'></span>"; ?></label><br /> 
<?php
                    }
                }
            } elseif($record1["question_type"] == "enumeration") {
?>
                <label><b style="font-size:16px;"><?php echo $count.". "; ?></b></label>
                <label><?php echo stripslashes($record1["question"]); ?></label><br /><b>Answers:</b><br>
<?php
                $AllCheck = true;
                $answers = array();
                for ($i = 1; $i <= 10; $i++) {
                    if($record1["answer".$i] != "") { 
                         $answers[] = strtolower($record1["answer".$i]);  
                    }
                }

                for ($i = 1; $i <= 10; $i++) { 
                    if(isset($_POST[$record1["question_id"]."$i"])) {
                        if(in_array(trim(strtolower($_POST[$record1["question_id"]."$i"])), $answers)) {
                            $correct_answers++;
                            unset($answers[array_search(trim(strtolower($_POST[$record1["question_id"]."$i"])), $answers)]);
                            echo $_POST[$record1["question_id"]."$i"]." <span class='ace-icon glyphicon glyphicon-ok green sm'></span><br />";

                        } else {
                            $AllCheck = false;
                            echo $_POST[$record1["question_id"]."$i"]." <span class='ace-icon glyphicon glyphicon-remove red sm'></span><br />";
                        }
                    }
                }

                if($AllCheck == true) {
                    $sql = "INSERT INTO `exam_result_details`(`question_id`,`remarks`,`exam_result_no`) VALUES(".$record1["question_id"].", 1, $last_exam_result)";
                    mysqli_query($connection, $sql) or die(mysqli_error($connection));
                } else {
                    $sql = "INSERT INTO `exam_result_details`(`question_id`,`remarks`,`exam_result_no`) VALUES(".$record1["question_id"].", 0, $last_exam_result)";
                    mysqli_query($connection, $sql) or die(mysqli_error($connection));
                }
            }
?>
                                                </div>
                                            </div>
                                        </div>
<?php
        }
       
        $perfectScore=$countAnswers;
         $percentage=($correct_answers/$perfectScore)*100;
        $percentage2=$percentage | 0;
        ?>
        <div class="pull-right" style="font-size:20px;"><b><?php
        if($percentage >= 50)
        {
             echo "<span class='green'>Your Score: ".$correct_answers."/$perfectScore | Percentage: $percentage2%  |</span> <a class='green' href='mycourse.php'>>>Click Here To Exit<<</a>";  
        }
        else
        {
              echo "<span class='red'>Your Score: ".$correct_answers."/$perfectScore | Percentage: $percentage2%  |</span> <a class='red' href='mycourse.php'>>>Click Here To Exit<<</a>";
        }
        
        $sql = "UPDATE `exam_results` SET `score` = '$correct_answers', perfect_scores = '$perfectScore' WHERE `exam_result_no` = $last_exam_result";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
        ?>
            </b></div><?php
        //header("Location: examination.php?refid=$exam_no&exam_result_no=".$connection -> $last_exam_result);
    }                               
?> 
                                </div>                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
