<?php
$dtz = new DateTimeZone("Asia/Manila"); 
 $activity_time = date_create('2018-04-26 02:11:22', $dtz);
						                   
																									$now = new DateTime(date(''), $dtz);

																								    $interval = date_diff($activity_time, $now);
echo $interval;
?>