<?php
session_start();
include("../redundant/_connection.php");
$classcode = $_SESSION["classcode"];
$posttitle = $_POST["posttitle"];
$postdesc = $_POST["postdesc"];
$datenow = date("Y-m-d H:i:s");
array_filter($_FILES["uploads"]["name"]);
$nooffiles = count(array_filter($_FILES["uploads"]["name"]));

$sql = "SELECT `course_title` FROM `courses` WHERE `class_code` = '$classcode'";
$result = mysqli_query($connection,$sql) or die(mysqli_error($connection));
$record = mysqli_fetch_assoc($result);
$course_title = $record["course_title"];

    if ($nooffiles !=0)
    {
        $sql = "INSERT INTO `posts` (`class_code`,`posted_date`,`post_title`,`post_desc`,`post_type`,viewed) VALUES('$classcode','$datenow','$posttitle','$postdesc','files',". 0 .")";
        mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has uploaded new file(s) to <a href=\"mycourse.php?class_code=".$_SESSION["classcode"]."\">".$course_title."</a> course.', 11, ".$_SESSION["user"].")";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
        
        $studentNo=array();
        $query="Select * from enrolled_students where class_code='$classcode'";
        $result=mysqli_query($connection,$query) or die (mysqli_error($connection));
        while($record=mysqli_fetch_assoc($result))
        {
            $studentNo[]=$record["student_account_no"];
        }
        $arrlength=count($studentNo);
        
        $query ="Select * from posts where class_code='$classcode' and posted_date='$datenow' and post_title='$posttitle' and post_desc='$postdesc' and post_type='files'";
        $result=mysqli_query($connection, $query)or die(mysqli_error($connection));
        if($record=mysqli_fetch_assoc($result))
        {
            $postNo=$record["post_no"];
        }
        
        for($x=0;$x<$arrlength;$x++)
        {
             $query="Insert Into post_details (post_no, student_account_no) Values('$postNo','$studentNo[$x]')";
            mysqli_query($connection,$query)or die(mysqli_error($connection));
            
                
        }
       
    }
    else
    {
        $sql = "INSERT INTO `posts` (`class_code`,`posted_date`,`post_title`,`post_desc`,`post_type`,viewed) VALUES('$classcode','$datenow','$posttitle','$postdesc','link',". 0 . ")";
        mysqli_query($connection,$sql) or die(mysqli_error($connection));
        $sql = "INSERT INTO `activities`(`activity_time`, `activity_name`, `usertype`, `user`) VALUES(NOW(), 'has added a new link to <a href=\"mycourse.php?class_code=".$_SESSION["classcode"]."\">".$course_title."</a> course.', 11, ".$_SESSION["user"].")";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
        
        $studentNo2=array();
        $query="Select * from enrolled_students where class_code='$classcode'";
        $result=mysqli_query($connection,$query) or die (mysqli_error($connection));
        while($record=mysqli_fetch_assoc($result))
        {
            $studentNo2[]=$record["student_account_no"];
        }
        $arrlength=count($studentNo2);
        
        $query ="Select * from posts where class_code='$classcode' and posted_date='$datenow' and post_title='$posttitle' and post_desc='$postdesc' and post_type='link'";
        $result=mysqli_query($connection, $query)or die(mysqli_error($connection));
        if($record=mysqli_fetch_assoc($result))
        {
            $postNo=$record["post_no"];
        }
        
         for($x=0;$x<$arrlength;$x++)
        {
             $query="Insert Into post_details (post_no, student_account_no) Values('$postNo','$studentNo2[$x]')";
            mysqli_query($connection,$query)or die(mysqli_error($connection));
            
                
        }
    }
    
    
    $sql2 = "SELECT * FROM `posts` ORDER BY `post_no` DESC";
    $result = mysqli_query ($connection, $sql2);
    if ($record = mysqli_fetch_assoc($result))
    {
        $postno = $record["post_no"];
    }
    
    
    
    if ($nooffiles != 0)
    {
    for ($i=0; $i<$nooffiles; $i++)
    {
        $tempfilepath = $_FILES["uploads"]["tmp_name"][$i];

        if ($tempfilepath != "")
        {
            $path="classfiles/".$_SESSION["classcode"]."/";
            if (!is_dir($path))
            {
                //echo $UserDirectory;
                mkdir($path, 0777, true);
            }
            $newFilePath = $path.$_FILES["uploads"]["name"][$i];
            if(move_uploaded_file($tempfilepath, $newFilePath))
            {
                $filename = $_FILES["uploads"]["name"][$i];
                $sql3 = "INSERT INTO file_details(`post_no`,`file_name`,`file_link_or_path`)VALUES('$postno','$filename','$newFilePath')";
                mysqli_query($connection,$sql3) or die(mysqli_error($connection));
                
                echo "<script> location.href='../main/mycourse.php'; </script>";
            }
        }
    }
    }
    else
    {
        $url = $_POST["youtubelink"];
        $view = "<iframe width='420' height='345' src='$url'></iframe>";
        
        
        
        $sql3 = "INSERT INTO file_details(`post_no`,`file_name`,`file_link_or_path`)VALUES('$postno','$url','$url')";
        mysqli_query($connection,$sql3) or die(mysqli_error($connection));
                
        echo "<script> location.href='../main/mycourse.php'; </script>";
    }
        

?>