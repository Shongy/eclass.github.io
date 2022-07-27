<?php
	include('../redundant/_connection.php');
	$startDate = $_POST["startDate"];
	$endDate = $_POST["endDate"];
	$usertype = $_POST["usertype"];

	$output = "";
	if($usertype == 11) {
		$output .= "<div id=\"teachers\" class=\"tab-pane in active\">";

		$sql = "SELECT DISTINCT `activity_no`, accounts_teacher.teacher_account_no, `teacher_firstname`, `teacher_middleinitial`, `teacher_lastname`, `activity_name`, `teacher_imgno`, `teacher_username`, `activity_time` FROM `activities` INNER JOIN `accounts_teacher` ON accounts_teacher.teacher_account_no = activities.user ORDER BY `activity_time` DESC";
		$result = mysqli_query($connection, $sql);
		while($record = mysqli_fetch_assoc($result)) {
			$activity_time = date_create($record["activity_time"]);
			$activity_time = date_format($activity_time, "Y-m-d");
			if($activity_time >= $startDate && $activity_time <= $endDate) {
						$output .= "<div class=\"profile-activity clearfix\">
				<div>
					<img style=\"width:40px;height:40px;\" class=\"nav-user-photo\" src=\"../assets/images/user-teachers/".$record["teacher_username"]."/".$record["teacher_imgno"]."\" />
					<a class=\"user\" href=\"viewprofile.php?refid=".$record["teacher_account_no"]."&usertype=11\">".$record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"]."</a>
						<br />
						<i class=\"ace-icon fa fa-info-circle\"></i>
						".$record["activity_name"]."
					<div class=\"time\">
						<i class=\"ace-icon fa fa-clock-o bigger-110\"></i> ";
			  				
			  				$dtz = new DateTimeZone("Asia/Manila"); 
		                    $activity_time = date_create($record["activity_time"], $dtz);

							$now = new DateTime(date(''), $dtz);

						    $interval = date_diff($activity_time, $now);

						    if($interval->format('%d') > 0) {
						     	$output .= $interval->format("%d day(s) & %h hour(s) ago.");
	                        } elseif($interval->format('%h') > 0) {
	                        	$output .= $interval->format("%h hour(s) & %i minute(s) ago.");
	                        } else{
	                       		$output .= $interval->format("%i minute(s) ago.");
	                        }
						
					$output .= "</div>
				</div>
			</div>";
			}
		}
	} elseif($usertype == 111) {
		$output .= "<div id=\"students\" class=\"tab-pane\">";
		$sql = "SELECT DISTINCT `activity_no`, accounts_student.student_account_no, `student_firstname`, `student_middleinitial`, `student_lastname`, `activity_name`, `student_imgno`, `student_username`, `activity_time` FROM `activities` INNER JOIN `accounts_student` ON accounts_student.student_account_no = activities.user ORDER BY `activity_time` DESC LIMIT 20";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		while($record = mysqli_fetch_assoc($result)) {
			$activity_time = date_create($record["activity_time"]);
			$activity_time = date_format($activity_time, "Y-m-d");
			if($activity_time >= $startDate && $activity_time <= $endDate) {
				$output .= "<div class=\"profile-activity clearfix\">
					<div>
						<img style=\"width:40px;height:40px;\" class=\"nav-user-photo\" src=\"../assets/images/user-students/".$record["student_username"]."/".$record["student_imgno"]."\" />
						<a class=\"user\" href=\"viewprofile.php?refid=".$record["student_account_no"]."&usertype=111\">".$record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]."</a>
							<br />
							<i class=\"ace-icon fa fa-info-circle\"></i>

								".$record["activity_name"]."
					
						<div class=\"time\">
							<i class=\"ace-icon fa fa-clock-o bigger-110\"></i> ";
				  				
				  				$dtz = new DateTimeZone("Asia/Manila"); 
	    	                    $activity_time = date_create($record["activity_time"], $dtz);

								$now = new DateTime(date(''), $dtz);

							    $interval = date_diff($activity_time, $now);

							     if($interval->format('%d') > 0) {
							     	$output .= $interval->format("%d day(s) & %h hour(s) ago.");
		                        }
		                        elseif($interval->format('%h') > 0) {
		                        	$output .= $interval->format("%h hour(s) & %i minute(s) ago.");
		                        } else{
		                          	$output .= $interval->format("%i minute(s) ago.");
		                        }	
						$output .= "</div>
					</div>
				</div>";	
				} 
			}
		}
	echo $output;
?>