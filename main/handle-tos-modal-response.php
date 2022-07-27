<!DOCTYPE html>
<html>
<head>
	<title><?php session_start(); ?></title>
</head>
<body>
	<?php
		include('../redundant/_connection.php');
		$exam_no = $_POST["exam_no"];

		$sql = "SELECT COUNT(exam_results.exam_no) FROM `exam_results` WHERE exam_no = ".$exam_no;
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$record = mysqli_fetch_assoc($result);
		$TotalExaminees = $record["COUNT(exam_results.exam_no)"];

		$sql = "SELECT COUNT(`question_id`), `question_id` FROM `exam_result_details` INNER JOIN `exam_results` ON exam_results.exam_result_no = exam_result_details.exam_result_no WHERE `exam_no` = $exam_no AND `remarks` = 0 GROUP BY `question_id` ORDER BY COUNT(`question_id`) DESC";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		$output = "<h3> Total of Examinees: $TotalExaminees </h3>";
		$output .= "<table class='table table-hover table-bordered' id='itemanalysistable'>
					    <thead>
							<tr>
								<th>Type</th>
								<th>Question</th>
								<th>Mistakes</th>
								
								<th>Difficulty</th>
							</tr>
						</thead>
						<tbody>";
		while($record = mysqli_fetch_assoc($result)) {
            
			$sql1 = "SELECT `question`, `question_type` FROM `exam_details` WHERE `exam_no` = $exam_no AND `question_id` = ".$record["question_id"]; 
			$result1 = mysqli_query($connection, $sql1) or die(mysqli_error($connection));
			$record1 = mysqli_fetch_assoc($result1);
            
            
            
                if($record1["question_type"] == "multiple") {
                    $question_type = "Multiple Choice";
                } elseif($record1["question_type"] == "tof") {
                    $question_type = "True or False";
                } elseif($record1["question_type"] == "identification") {
                    $question_type = "Identification";
                } elseif($record1["question_type"] == "enumeration") {
                    $question_type = "Enumeration";
                }										
			$output .=	"<tr>
							<td>
							".$question_type."
							</td>
							<td>
								".$record1["question"]."
							</td>
							<td class=\"center\">
								".$record["COUNT(`question_id`)"].
							"</td>
							<td class=\"center\" >
								".round(($record["COUNT(`question_id`)"] / $TotalExaminees) * 100, 2)."%
							</td>
						</tr>";
			}
		$output .= "</tbody>";
        $output .="</table>";
		
		echo $output;
	?>
</body>
</html>