<?php
    session_start();

    include("../redundant/_connection.php");

    $exam_no = $_POST["exam_no"];

    $sql = "SELECT `exam_date`, `exam_date_expired` FROM `exams` WHERE `exam_no` = $exam_no";
    $result = mysqli_query($connection, $sql);
    $record = mysqli_fetch_assoc($result);


    $query ="SELECT * FROM `exam_results` WHERE `exam_no` = '$exam_no' AND `student_account_no` = ".$_SESSION["user"];
     $result1 = mysqli_query($connection, $query);
    $examNOT = "NOT";
    if( $record2 = mysqli_fetch_assoc($result1)) {
        $examNOT = "YES";
        //echo "<a href='examination.php?refid=$exam1&cc=".$_SESSION["classcode"]."' class='red'><i class='ace-icon fa  fa-external-link red'></i>YOU HAVE BEEN SUCCESSFULLY TAKEN THE EXAM. CLICK THIS TO REVIEW</a>";
    }

    $dtz = new DateTimeZone("Asia/Manila");
    $now = new DateTime(date(''), $dtz);
    $exam_date = date_create($record["exam_date"], $dtz);
    $exam_date_expired = date_create($record["exam_date_expired"], $dtz);

    $difference_in_seconds_exam_date = $exam_date->format('U') - $now->format('U');

    if($difference_in_seconds_exam_date > 0) {
        $hours = floor($difference_in_seconds_exam_date / 3600);
        $minutes = floor($difference_in_seconds_exam_date  / 60) % 60;
        $seconds = floor($difference_in_seconds_exam_date % 60);
        echo $hours." h : ".$minutes." m : ".$seconds." s to be available";
    } else {
        $difference_in_seconds_exam_date_expired = $exam_date_expired->format('U') - $now->format('U');
        if($difference_in_seconds_exam_date_expired > 0) {
            $hours = floor($difference_in_seconds_exam_date_expired / 3600);
            $minutes = floor($difference_in_seconds_exam_date_expired  / 60) % 60;
            $seconds = floor($difference_in_seconds_exam_date_expired % 60);
            if($_SESSION["usertype"]==111)
            { 
                if($examNOT == "NOT")
                {
                    echo "<a href='examination.php?refid=$exam_no&cc=".$_SESSION["classcode"]."'><i class='ace-icon fa  fa-external-link blue'></i>CLICK HERE TO TAKE THE EXAM</a>";
                }
                else
                {
                    echo "<i class='ace-icon fa  fa-info-circle green'> EXAM SUCCESSFULLY SUBMITTED.</i>";
                }
            }
            else
            { 
                 echo "<i class='ace-icon fa  fa-info-circle blue'></i>EXAM IS ON GOING <br><strong class='red'> ".$hours." h : ".$minutes." m : ".$seconds." s to end</stong>";
            } 
        } else {
            if($_SESSION["usertype"]==111)
            { 
                if($examNOT == "NOT")
                {
                    echo "takeexam";
                }
                else
                {
                    echo "<i class='ace-icon fa  fa-info-circle red'></i>DONE! <a href='check-examination.php?refid=$exam_no&cc=".$_SESSION["classcode"]."' class='red'> CLICK THIS TO REVIEW</a>";
                }
            }
            else
            { 
                 echo "<strong class='red'><i class='ace-icon fa  fa-info-circle red'></i>EXAM IS NOW OVER</strong>";
            } 
        }
    }
?>
