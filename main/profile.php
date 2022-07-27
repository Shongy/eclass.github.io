<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        include_once("../redundant/Main.php");
        $Main = new Main; 

    ?>
		<!-- page specific plugin styles -->
        <?php $Main -> head1() ?>
        <meta name="description" content="3 styles with inline editable feature" />
		<link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="../assets/css/jquery.gritter.min.css" />
		<link rel="stylesheet" href="../assets/css/select2.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-editable.min.css" />

		<!--xmlHTTPRequestObject-->
		<script type="text/javascript" src="xml-http-request.js"></script>

		<body class="no-skin">
		<?php $Main -> navbar() ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
            
        <?php  $Main -> slider("Profile","myprofile") ?>
                    
			<?php
            
            
            if ($_SESSION['usertype']==1)
            {
                include("../redundant/_connection.php");
                $sql = "SELECT * FROM accounts_admin WHERE admin_account_no=".$_SESSION["user"];
                $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                if ($record = mysqli_fetch_assoc($qry))
                {
                	$fname = $record["admin_firstname"];
                    $lname = $record["admin_lastname"];
                   	$mname = $record["admin_middleinitial"];
                   	$email = $record["admin_email"];
                   	$uname = $record["admin_username"];
                   	$street = $record["admin_street"];
                    $prov = $record["admin_province"];
                   	$gender = $record["admin_gender"];
                 	$fb = $record["admin_fb"];
                 	$bdate = $record["admin_bdate"];
                 	$phone = $record["admin_phone"];
                  	$gplus = $record["admin_gplus"];
                  	$about = $record["admin_about"];
                  	$twitter = $record["admin_twitter"];
                  	$site = $record["admin_site"];
                }
            }

            if ($_SESSION['usertype']==11)
            {
                include("../redundant/_connection.php");
                $sql = "SELECT * FROM accounts_teacher WHERE teacher_account_no=".$_SESSION["user"];
                $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                if ($record = mysqli_fetch_assoc($qry))
                {
                 	$fname = $record["teacher_firstname"];
                    $lname = $record["teacher_lastname"];
                   	$mname = $record["teacher_middleinitial"];
                   	$email = $record["teacher_email"];
                   	$uname = $record["teacher_username"];
                   	$street = $record["teacher_street"];
                    $prov = $record["teacher_province"];
                    $gender = $record["teacher_gender"];
                    $fb = $record["teacher_fb"];
                    $bdate = $record["teacher_bdate"];
                    $phone = $record["teacher_phone"];
                    $gplus = $record["teacher_gplus"];
                    $about = $record["teacher_about"];
                    $twitter = $record["teacher_twitter"];
                    $site = $record["teacher_site"];
                    $college = $record["teacher_college"];
                    $dept= $record["teacher_dept"];
                    $pos= $record["teacher_position"];
                }
			}
                
            if ($_SESSION['usertype']==111)
            {
                include("../redundant/_connection.php");
                $sql = "SELECT * FROM accounts_student WHERE student_account_no=".$_SESSION["user"];
                $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                if ($record = mysqli_fetch_assoc($qry))
                {
                    $fname = $record["student_firstname"];
                    $lname =$record["student_lastname"];
                    $mname =$record["student_middleinitial"];
                    $email = $record["student_email"];
                    $uname = $record["student_username"];
                    $street = $record["student_street"];
                    $prov = $record["student_province"];
                   	$gender = $record["student_gender"];
                    $fb = $record["student_fb"];
                    $bdate = $record["student_bdate"];
                    $phone = $record["student_phone"];
                    $gplus = $record["student_gplus"];
                    $about = $record["student_about"];
                    $twitter = $record["student_twitter"];
                    $site = $record["student_site"];
                    $prog = $record["student_program"];
                    $maj = $record["student_major"];
                    $yl = $record["student_yl"];
                }
            }
                                        
        ?>
			<div class="main-content">
				<div class="main-content-inner">
					<!--bread-->
                    
					<div class="page-content">
                        
						<div class="page-header">
							<h1>
								Profile
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									My Profile
								</small>
									<div class="pull-right">
										<span class="green middle bolder">Setting: &nbsp;</span>

										<div class="btn-toolbar inline middle no-margin">
											<div data-toggle="buttons" class="btn-group no-margin">
												
												<label class="btn btn-sm btn-yellow active">
													<span class="bigger-110">Visit Profile</span>

													<input type="radio" value="2" />
												</label>

												<label class="btn btn-sm btn-yellow">
													<span class="bigger-110">Edit Profile</span>

													<input type="radio" value="3" />
												</label>
											</div>
										</div>
									</div>
								
                                </h1>
						</div><!-- /.page-header -->
                            <?php  
		                        $src= "../assets/images/default.png";
		                       
		                         if ($_SESSION["usertype"]==1)
		                         {
		                           if (is_file("../assets/images/admin/".$uname.".jpg"))
		                           {
		                              $src = "../assets/images/admin/".$uname.".jpg";
		                            }
		                             
		                          }
		                          if ($_SESSION["usertype"]==11)
		                          {

		                          	$sql = "SELECT `teacher_imgno` FROM `accounts_teacher` WHERE `teacher_account_no` = ".$_SESSION["user"];
		                        	$result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
		                            $record = mysqli_fetch_assoc($result); 
		                            	if (is_file("../assets/images/user-teachers/$uname/".$record["teacher_imgno"])) {
		                              		$src = "../assets/images/user-teachers/$uname/".$record["teacher_imgno"];
		                          		}
		                            
		                    
		                              }
		                           
		                           if ($_SESSION["usertype"]==111)
		                           {

		                          	$sql = "SELECT `student_imgno` FROM `accounts_student` WHERE `student_account_no` = ".$_SESSION["user"];
		                        	$result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
		                            $record = mysqli_fetch_assoc($result); 
		                            if (is_file("../assets/images/user-students/$uname/".$record["student_imgno"]))
		                            {
		                                $src = "../assets/images/user-students/$uname/".$record["student_imgno"];
		                            }
		                            
		                           }
                            ?>	
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<div id="user-profile-2" class="user-profile">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">								
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-user bigger-120"></i>
														Profile
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#feed">
														<i class="orange ace-icon fa fa-rss bigger-120"></i>
														Activity Feed
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#friends">
														<?php 
															if($_SESSION["usertype"] == 1) {
																?>
																<i class="blue ace-icon glyphicon glyphicon-list bigger-120"></i>
																<?php
																echo "Classes";
															}
															elseif($_SESSION["usertype"] == 11) {
																?>
																<i class="blue ace-icon fa fa-users bigger-120"></i>
																<?php
																echo "My Students";
															} elseif($_SESSION["usertype"] == 111) {
																?>
																<i class="blue ace-icon fa fa-users bigger-120"></i>
																<?php
																echo "My Teachers";
															}
														?>
													</a>
												</li>

												<?php if($_SESSION["usertype"] == 1) { ?>
													<li>
														<a data-toggle="tab" href="#pictures">
															<i class="fa fa-picture-o bigger-120"></i>
															Teachers
														</a>
													</li>
                                                    <li>
														<a data-toggle="tab" href="#students-111">
															<i class="pink ace-icon fa fa-picture-o bigger-120"></i>
															Students
														</a>
													</li>
												<?php } else { ?>
													<li>
														<a data-toggle="tab" href="#pictures">
															<i class="pink ace-icon fa fa-picture-o bigger-120"></i>
															Pictures
														</a>
													</li>
												<?php } ?>
											</ul>

											<div class="tab-content no-border padding-24">
												<div id="home" class="tab-pane in active">
													<div class="row">
														<div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
                                                                <!--id="avatar2"-->
																<img class="editable img-responsive" src='<?php echo $src; ?>' />
															</span>	


															<div class="space space-4"></div>

															
														</div><!-- /.col -->
 
														<div class="col-xs-12 col-sm-9">
															<h2 class="blue">
																<span class="middle"><?php echo $fname." ".$mname." ".$lname;?></span>
															</h2>

															<div class="profile-user-info">
																<div class="profile-info-row">
                                                                   
																	<div class="profile-info-name"> Username </div>

																	<div class="profile-info-value">
																		<span><?php echo $uname; ?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Location </div>

																	<div class="profile-info-value">
																		<i class="fa fa-map-marker light-orange bigger-110"></i>
																		<span><?php echo $street; ?></span>
																		<span><?php echo $prov; ?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Age </div>

																	<div class="profile-info-value">
                                                                        <?php
                                                                            $differenceFormat = '%y';
                                                                            $datetime1 = date_create($bdate);
                                                                            $datetime2 = date_create(date('Y-m-d'));
                                                                            $interval = date_diff($datetime1, $datetime2);
                                                                        
                                                                            echo "<span>".$interval->format($differenceFormat)."</span>"; ?>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Birth Date </div>

																	<div class="profile-info-value">
																		<span><?php echo $bdate; ?></span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Role </div>

																	<div class="profile-info-value">
																		<span><?php if ($_SESSION["usertype"]==1)
																		{echo "Admininistrator";}elseif ($_SESSION["usertype"]==11){echo "Teacher";}else{echo "Student";}?></span>
																	</div>
																</div>
                                                                <div class="profile-info-row">
																	<div class="profile-info-name"> Phone Number </div>

																	<div class="profile-info-value">
																		<span><?php echo $phone; ?></span>
																	</div>
																</div>
                                                                <div class="profile-info-row">
																	<div class="profile-info-name"> Email </div>

																	<div class="profile-info-value">
																		<span><?php echo $email; ?></span>
																	</div>
																</div>
															</div>
                                                            
                                                            <?php
                                                            if ($_SESSION["usertype"]==111)
                                                            { ?>
                                                            <div class="hr hr-8 dotted"></div>
                                                            <div class="profile-user-info">
                                                                <div class="profile-info-row">
                                                                   
																	<div class="profile-info-name"> Program </div>

																	<div class="profile-info-value">
																		<span><?php echo $prog; ?></span>
																	</div>
																</div>
                                                                <div class="profile-info-row">
                                                                   
																	<div class="profile-info-name"> Major </div>

																	<div class="profile-info-value">
																		<span><?php echo $maj; ?></span>
																	</div>
																</div>
                                                                <div class="profile-info-row">
                                                                   
																	<div class="profile-info-name"> Year Level </div>

																	<div class="profile-info-value">
																		<span><?php echo $yl; ?></span>
																	</div>
																</div>
                                                            </div>
                                                            <?php
                                                            }
                                                            elseif ($_SESSION["usertype"]==11)
                                                            {
                                                                ?>
                                                            <div class="hr hr-8 dotted"></div>
                                                            <div class="profile-user-info">
                                                                <div class="profile-info-row">
                                                                   
																	<div class="profile-info-name"> College </div>

																	<div class="profile-info-value">
																		<span><?php echo $college; ?></span>
																	</div>
																</div>
                                                                <div class="profile-info-row">
                                                                   
																	<div class="profile-info-name"> Department </div>

																	<div class="profile-info-value">
																		<span><?php echo $dept; ?></span>
																	</div>
																</div>
                                                                <div class="profile-info-row">
                                                                   
																	<div class="profile-info-name"> Position </div>

																	<div class="profile-info-value">
																		<span><?php echo $pos; ?></span>
																	</div>
																</div>
                                                            </div>
                                                                <?php
                                                            } ?>
															<div class="hr hr-8 dotted"></div>

															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> Website </div>

																	<div class="profile-info-value">
																		<a href="<?php echo $site; ?>" target="_blank"><?php echo $site; ?></a>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name">
																		<i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
																	</div>

																	<div class="profile-info-value">
																		<a href="<?php echo $fb; ?>">Find me on Facebook</a>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name">
																		<i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
																	</div>

																	<div class="profile-info-value">
																		<a href="<?php echo $twitter; ?>">Follow me on Twitter</a>
																	</div>
																</div>
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->

													<div class="space-20"></div>

													<div class="row">
														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h4 class="widget-title smaller">
																		<i class="ace-icon fa fa-check-square-o bigger-110"></i>
																		Little About Me
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		<p>
																			<?php echo $about; ?>
																		</p>
																	
																	</div>
																</div>
															</div>
														</div>

														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small header-color-blue2">
																	<h4 class="widget-title smaller">
																		<i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
																		My Skills
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main padding-16">
																		<div class="hr hr-16"></div>															
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div><!-- /#home -->

												<div id="feed" class="tab-pane">
													<div class="profile-feed row">
												<?php if($_SESSION["usertype"] == 1) { ?>
														<div class="col-sm-12 widget-container-col" id="widget-container-col-10">
															<div class="widget-box" id="widget-box-10">
																<div class="widget-header widget-header-small">
																	<h5 class="widget-title smaller"></h5>
																	<div class="widget-toolbar no-border">
																		<ul class="nav nav-tabs" id="myTab">
																			<li class="active">
																				<a data-toggle="tab" href="#teachers">Teachers</a>
																			</li>

																			<li>
																				<a data-toggle="tab" href="#students">Students</a>
																			</li>
																		</ul>
																	</div>
																</div>

																<div class="widget-body">
																	<div class="widget-main padding-6">
																		<div class="tab-content">
																			<div id="teachers" class="tab-pane in active">
																			<?php
																				$sql = "SELECT DISTINCT `activity_no`, accounts_teacher.teacher_account_no, `teacher_firstname`, `teacher_middleinitial`, `teacher_lastname`, `activity_name`, `teacher_imgno`, `teacher_username`, `activity_time` FROM `activities` INNER JOIN `accounts_teacher` ON accounts_teacher.teacher_account_no = activities.user ORDER BY `activity_time` DESC LIMIT 20";
																				$result = mysqli_query($connection, $sql);
																				while($record = mysqli_fetch_assoc($result)) {
																			?>
																					<div class="profile-activity clearfix">
																						<div>
																							<img style='width:40px;height:40px;' class='nav-user-photo' src="<?php echo "../assets/images/user-teachers/".$record["teacher_username"]."/".$record["teacher_imgno"]; ?>" alt='$fname' />
																							<a class="user" href="viewprofile.php?refid=<?php echo $record["teacher_account_no"];?>&usertype=11"><?php echo $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"];?></a>
																								<br />
																								<i class="ace-icon fa fa-info-circle"></i>
																							<?php echo $record["activity_name"];?>
																							<div class="time">
																								<i class="ace-icon fa fa-clock-o bigger-110"></i>
																								<?php 
																					  				
																					  				$dtz = new DateTimeZone("Asia/Manila"); 
						                                                    	                    $activity_time = date_create($record["activity_time"], $dtz);
						                   
																									$now = new DateTime(date(''), $dtz);

																								    $interval = date_diff($activity_time, $now);

																								     if($interval->format('%d') > 0) {
															                                          echo $interval->format("%d day(s) & %h hour(s) ago.");
															                                        }
															                                        elseif($interval->format('%h') > 0) {
															                                          echo $interval->format("%h hour(s) & %i minute(s) ago.");
															                                        } else{
															                                          echo $interval->format("%i minute(s) ago.");
															                                        }
																								?>
																							</div>
																						</div>
																					</div>
																				<?php } ?>
																				</div>
																			<div id="students" class="tab-pane">
																				<?php
																						$sql = "SELECT DISTINCT `activity_no`, accounts_student.student_account_no, `student_firstname`, `student_middleinitial`, `student_lastname`, `activity_name`, `student_imgno`, `student_username`, `activity_time` FROM `activities` INNER JOIN `accounts_student` ON accounts_student.student_account_no = activities.user ORDER BY `activity_time` DESC LIMIT 20";
																						$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																						while($record = mysqli_fetch_assoc($result)) {
																				
																			?>
																					<div class="profile-activity clearfix">
																						<div>
																							<img style='width:40px;height:40px;' class='nav-user-photo' src="<?php echo "../assets/images/user-students/".$record["student_username"]."/".$record["student_imgno"]; ?>" alt='$fname' />
																							<a class="user" href="viewprofile.php?refid=<?php echo $record["student_account_no"];?>&usertype=111"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"];?></a>
																								<br />
																								<i class="ace-icon fa fa-info-circle"></i>
															
																									<?php echo $record["activity_name"];?>
																						
																							<div class="time">
																								<i class="ace-icon fa fa-clock-o bigger-110"></i>
																								<?php 
																					  				
																					  				$dtz = new DateTimeZone("Asia/Manila"); 
						                                                    	                    $activity_time = date_create($record["activity_time"], $dtz);
						                   
																									$now = new DateTime(date(''), $dtz);

																								    $interval = date_diff($activity_time, $now);

																								     if($interval->format('%d') > 0) {
																			                          echo $interval->format("%d day(s) & %h hour(s) ago.");
																			                        }
																			                        elseif($interval->format('%h') > 0) {
																			                          echo $interval->format("%h hour(s) & %i minute(s) ago.");
																			                        } else{
																			                          echo $interval->format("%i minute(s) ago.");
																			                        }	
																								?>
																							</div>
																						</div>
																					</div>	
																			<?php } ?>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
												<?php } elseif($_SESSION["usertype"] == 11) {
														$sql = "SELECT DISTINCT `activity_no`, accounts_teacher.teacher_account_no, `teacher_firstname`, `teacher_middleinitial`, `teacher_lastname`, `activity_name`, `teacher_imgno`, `teacher_username`, `activity_time` FROM `activities` INNER JOIN `accounts_teacher` ON accounts_teacher.teacher_account_no = activities.user WHERE accounts_teacher.teacher_account_no = ".$_SESSION["user"]." ORDER BY `activity_time` DESC LIMIT 20";
														$result = mysqli_query($connection, $sql);
														while($record = mysqli_fetch_assoc($result)) {
													?>
															<div class="col-sm-12">
												
															<div class="profile-activity clearfix">
																<div>
																	<img style='width:40px;height:40px;' class='nav-user-photo' src="<?php echo "../assets/images/user-teachers/".$record["teacher_username"]."/".$record["teacher_imgno"]; ?>" alt='$fname' />
																	<a class="user" href="viewprofile.php?refid=<?php echo $record["teacher_account_no"];?>&usertype=11"><?php echo $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"];?></a>
																		<br />
																		<i class="ace-icon fa fa-info-circle"></i>
																	<?php echo $record["activity_name"];?>
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		<?php 
															  				
															  				$dtz = new DateTimeZone("Asia/Manila"); 
                                                    	                    $activity_time = date_create($record["activity_time"], $dtz);
                   
																			$now = new DateTime(date(''), $dtz);

																		    $interval = date_diff($activity_time, $now);

																		     if($interval->format('%d') > 0) {
									                                          echo $interval->format("%d day(s) & %h hour(s) ago.");
									                                        }
									                                        elseif($interval->format('%h') > 0) {
									                                          echo $interval->format("%h hour(s) & %i minute(s) ago.");
									                                        } else{
									                                          echo $interval->format("%i minute(s) ago.");
									                                        }
																		?>
																	</div>
																</div>
															</div>
														</div><!-- /.col -->
														<?php } ?>
													<?php } elseif($_SESSION["usertype"] == 111) {
															$sql = "SELECT DISTINCT `activity_no`, accounts_student.student_account_no, `student_firstname`, `student_middleinitial`, `student_lastname`, `activity_name`, `student_imgno`, `student_username`, `activity_time` FROM `activities` INNER JOIN `accounts_student` ON accounts_student.student_account_no = activities.user WHERE accounts_student.student_account_no = ".$_SESSION["user"]." ORDER BY `activity_time` DESC LIMIT 20";
																$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																while($record = mysqli_fetch_assoc($result)) {
														
													?>
															<div class="col-sm-12">
												
															<div class="profile-activity clearfix">
																<div>
																	<img style='width:40px;height:40px;' class='nav-user-photo' src="<?php echo "../assets/images/user-students/".$record["student_username"]."/".$record["student_imgno"]; ?>" alt='$fname' />
																	<a class="user" href="viewprofile.php?refid=<?php echo $record["student_account_no"];?>&usertype=111"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"];?></a>
																		<br />
																		<i class="ace-icon fa fa-info-circle"></i>
									
																			<?php echo $record["activity_name"];?>
																
																	<div class="time">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		<?php 
															  				
															  				$dtz = new DateTimeZone("Asia/Manila"); 
                                                    	                    $activity_time = date_create($record["activity_time"], $dtz);
                   
																			$now = new DateTime(date(''), $dtz);

																		    $interval = date_diff($activity_time, $now);

																		     if($interval->format('%d') > 0) {
													                          echo $interval->format("%d day(s) & %h hour(s) ago.");
													                        }
													                        elseif($interval->format('%h') > 0) {
													                          echo $interval->format("%h hour(s) & %i minute(s) ago.");
													                        } else{
													                          echo $interval->format("%i minute(s) ago.");
													                        }
																			
																		?>
																	</div>
																</div>
															</div>	
														</div><!-- /.col -->
													<?php } ?>
												<?php } ?>
													</div><!-- /.row -->
												</div><!-- /#feed -->

												<div id="friends" class="tab-pane">
													<div class="profile-users clearfix">
													<?php if($_SESSION["usertype"] == 1) { ?>
														<div class="row">
															<div class="col-xs-12">
																<div class="modal fade" id="myStudentListModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
																	<div class="modal-dialog" role="document">
																         <div class="modal-content">
																             <div class="modal-header" style="background-color:skyblue;">
																	            <button type="button" class="close" data-dismiss="modal">&times;</button>
																	                <h4 class="modal-title white bigger"><center><strong>List of Students</strong></center></h4> 
																	         </div>
																	     	 <div id="myStudentListModal-body" class="modal-body">
																	     	 		
                                                                            <div class="ace-settings-container" id="ace-settings-container">
                                                                                <div class="btn btn-app btn-xs btn-info ace-settings-btn" id="ace-settings-btn">
                                                                                    <i class="ace-icon glyphicon glyphicon-file bigger-130"></i>	
                                                                                </div>

                                                                                <div class="ace-settings-box clearfix" id="ace-settings-box">
                                                                                    <div class="pull-left width-100 height-100">
                                                                                        <div class="ace-settings-item">
                                                                                        <div class="pull-right tableTools-container-1"></div>
                                                                                        </div>
                                                                                        <div class="ace-settings-item">

                                                                                        </div>
                                                                                    </div><!-- /.pull-left -->
                                                                                </div><!-- /.ace-settings-box -->
                                                                            </div><!-- /.ace-settings-container -->
																	<table id="myStudentListModal-table" class="table table-striped table-bordered table-hover">
																		<thead>
																			<tr>
																				<th>Student Name</th>
																				<th>College</th>
																				<th>Major</th>
																				<th>Status</th>
																			</tr>
																		</thead>

																		<tbody>
														
																		</tbody>
																	</table>
																			</div>													       
																	     </div>
																	 </div>
																</div> 
																<div class="row">
																	<div class="col-xs-12">
																		<div class="clearfix">
																	
																		</div>
																		<table id="dynamic-table" class="table table-striped table-bordered table-hover">
																		<thead>
																			<tr>
																				<th class="detail-col">Class Code</th>
																				<th>Course Code</th>
																				<th>Course Title</th>
																				<th>Teacher Name</th>
																			</tr>
																		</thead>

																		<tbody>
																			<?php
																				$sql = "SELECT * FROM `courses` INNER JOIN `accounts_teacher` ON accounts_teacher.teacher_account_no = courses.teacher_account_no";
																				$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																				while($record = mysqli_fetch_assoc($result)) {	
																			?>
																				<tr>
																					
																					<td class="center">
																						<div class="action-buttons">
																							<a href="myStudentListModal" class="open-myStudentListModal" data-target="#myStudentListModal" data-toggle="modal" data-id="<?php echo $record["class_code"]; ?>"><?php echo $record["class_code"]; ?></a>
																						</div>
																					</td>
																					<td>
																						<?php echo $record["course_code"]; ?>
																					</td>
																					<td>
																						<?php echo $record["course_title"]; ?>
																					</td>
																					<td>
																						<a href="viewprofile.php?refid=<?php echo $record["teacher_account_no"];?>&usertype=11"><?php echo $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"]; ?></a>
																					</td>
																				</tr>
																			<?php } ?>
																		</tbody>
																	</table>	
																</div><!-- /.span -->
															</div><!-- /.row -->
														</div><!-- /.col -->
													</div><!-- /.row -->
													<?php } elseif($_SESSION["usertype"] == 11) {?>	
													 	<div class="modal fade" id="myCoursesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
															<div class="modal-dialog" role="document">
														         <div class="modal-content">
														             <div class="modal-header" style="background-color:skyblue;">
															            <button type="button" class="close" data-dismiss="modal">&times;</button>
															                <h4 class="modal-title white bigger"><center><strong>Courses Enrolled</strong></center></h4> 
															         </div>
															     	 <div id="myCoursesModal-body" class="modal-body">
					
																	 </div>													       
															      </div>
															  </div>
															</div> 
														<div class="row">
															<div class="col-xs-12">
																<!-- PAGE CONTENT BEGINS -->
																<div class="row">
																	<div class="col-xs-12">
																		<div class="clearfix">
																	
																		</div>
																		
																		<table id="dynamic-table" class="table table-striped table-bordered table-hover">
																		<thead>
																			<tr>
																				<th class="detail-col">Courses</th>
																				<th>Student Name</th>
																				<th>College</th>
																				<th>Program</th>
																			</tr>
																		</thead>

																		<tbody>
																			<?php
																				$sql = "SELECT DISTINCT enrolled_students.student_account_no, `student_firstname`, `student_middleinitial`, `student_lastname`, `student_program`, `student_major` FROM `enrolled_students` INNER JOIN `accounts_student` ON accounts_student.student_account_no = enrolled_students.student_account_no INNER JOIN `courses` ON courses.class_code = enrolled_students.class_code WHERE courses.teacher_account_no = ".$_SESSION["user"]." ORDER BY `course_title`";
																					$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																					while($record = mysqli_fetch_assoc($result)) {	
																					$student_account_no = $record["student_account_no"];
																			?>
																				<tr>
																					<td class="center">
																						<div class="action-buttons">
																							<a href="#myCoursesModal" class="open-studentmodal" data-target="#myCoursesModal" data-toggle="modal" data-id="<?php echo $student_account_no; ?>"><i class="ace-icon fa fa-list"></i></a>
																				
																						</div>
																					</td>
																					<td>
																						<a href="viewprofile.php?refid=<?php echo $record["student_account_no"];?>&usertype=111"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]; ?></a>
																					</td>
																					<td>
																						<?php echo $record["student_program"]; ?>
																					</td>
																					<td><?php echo $record["student_major"]; ?></td>
																				</tr>
																			<?php } ?>
																		</tbody>
																	</table>	
																</div><!-- /.span -->
															</div><!-- /.row -->
														</div><!-- /.col -->
													</div><!-- /.row -->
													<?php } elseif($_SESSION["usertype"] == 111) {?>
														<div class="row">
															<div class="col-xs-12">
																<!-- PAGE CONTENT BEGINS -->
																<div class="row">
																	<div class="col-xs-12">
																		<div class="clearfix">
																		</div>
																		<table id="simple-table" class="table table-striped table-bordered table-hover">
																			<thead>
																				<tr>
																					<th>Quick Review</th>
																					<th>Teacher Name</th>
																					<th>College</th>
																					<th>Department</th>
																					<th>Position</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php
																					$teachers[] = array();
																					
																					$sql = "SELECT accounts_teacher.teacher_account_no FROM `enrolled_students` INNER JOIN `courses` ON courses.class_code = enrolled_students.class_code INNER JOIN `accounts_teacher` ON accounts_teacher.teacher_account_no = courses.teacher_account_no INNER JOIN `accounts_student` ON accounts_student.student_account_no = enrolled_students.student_account_no WHERE enrolled_students.student_account_no = ".$_SESSION["user"]." ORDER BY `course_title`, `teacher_firstname` ASC";		
																					$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																					while($record = mysqli_fetch_assoc($result)) {		
																						$teachers[] = $record["teacher_account_no"];
																					}

																					array_shift($teachers);	
																					foreach (array_unique($teachers) as $key => $teacher) {
																						$sql = "SELECT * FROM `accounts_teacher` WHERE teacher_account_no = ".$teacher;
																						$result = mysqli_query($connection, $sql);
																						while($record = mysqli_fetch_assoc($result)) {		
																				?>
																				<tr>
																					<td width="10%" class="center">
													                                    <div class="action-buttons">
													                                      <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
													                                        <i class="ace-icon fa fa-angle-double-down"></i>
													                                        <span class="sr-only">Details</span>
													                                      </a>
													                                    </div>
													                                </td>

																					<td width="30%">
																						<a href="viewprofile.php?refid=<?php echo $record["teacher_account_no"];?>&usertype=11"><?php echo $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"]; ?></a>
																					</td>

																					<td width="30%">
																						<?php echo $record["teacher_college"]; ?>
																					</td>

																					<td width="30%">
																						<?php echo $record["teacher_dept"]; ?>
																					</td>

																					<td width="30%">
																						<?php echo $record["teacher_position"]; ?>
																					</td>
																				</tr>
																				<tr class="detail-row">
										                                          <td colspan="8">
										                                            <div class="table-detail">
										                                              <div class="row">
										                                                <div class="col-xs-12 col-sm-2">
										                                                  <div class="text-center">
										                                                    <img height="185" width="190" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src= "
										                                                    <?php 
										                                                      echo "../assets/images/user-teachers/".$record["teacher_username"]."/".$record["teacher_imgno"]; 
										                                                    ?>"
										                                                    />
										                                                  </div>
										                                                </div>

										                                                <div class="col-xs-12 col-sm-10">
										                                                  <div class="space visible-xs"></div>

										                                                  <div class="profile-user-info profile-user-info-striped">
										                                                    <div class="profile-info-row">
										                                                      <div class="profile-info-name"> Email Address </div>

										                                                      <div class="profile-info-value">
										                                                        <span><?php echo $record["teacher_email"];?></span>
										                                                      </div>
										                                                    </div>

										                                                    <div class="profile-info-row">
										                                                      <div class="profile-info-name"> Location </div>

										                                                      <div class="profile-info-value">
										                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
										                                                        <span><?php echo $record["teacher_street"].", ".$record["teacher_province"];?></span>
										                                                      </div>
										                                                    </div>

										                                                    <div class="profile-info-row">
										                                                      <div class="profile-info-name"> Age </div>

										                                                      <div class="profile-info-value">
										                                                        <?php
												                                                    $differenceFormat = '%y';
												                                                    $datetime1 = date_create($record["teacher_bdate"]);
												                                                    $datetime2 = date_create(date('Y-m-d'));
												                                                    $interval = date_diff($datetime1, $datetime2);                                                                            
												                                                    echo "<span>".$interval->format($differenceFormat)."</span>";
										                                                        ?>
										                                                      </div>
										                                                    </div>

										                                                    <div class="profile-info-row">
										                                                      <div class="profile-info-name"> Birthdate </div>

										                                                      <div class="profile-info-value">
										                                                        <span><?php echo $record["teacher_bdate"];?></span>
										                                                      </div>
										                                                    </div>

										                                                    <div class="profile-info-row">
										                                                      <div class="profile-info-name"> Gender </div>

										                                                      <div class="profile-info-value">
										                                                        <span>
										                                                        <?php 
										                                                        if($record["teacher_gender"] == "M"){
										                                                          echo "Male";
										                                                        } else{
										                                                          echo "Female";
										                                                        }?>
										                                                          
										                                                        </span>
										                                                      </div>
										                                                    </div>

										                                                    <div class="profile-info-row">
										                                                      <div class="profile-info-name"> Phone No </div>

										                                                      <div class="profile-info-value">
										                                                        <span><?php echo $record["teacher_phone"];?></span>
										                                                      </div>
										                                                    </div>
										                                                  </div>
										                                                </div>
										                                                <?php } ?>
										                                                <div class="col-xs-12 col-sm-12">
										                                                  <div class="space visible-xs"></div>
										                                                  <h4 class="header blue lighter less-margin">Handled Courses</h4>

										                                                  <div class="space-6"></div>
										                                                
								                                               			<table class="table table-bordered table-click table-hover" style="font-size:11px;">
																						    <thead>
																								<tr>
																									<th>Course Code</th>
																									<th>Course Title</th>
																									<th>Description</th>
																								</tr>
																							</thead>
																						  <?php
										                                                  	$sql = "SELECT `course_code`, `course_title`, `course_description` FROM `enrolled_students` INNER JOIN `courses` ON courses.class_code = enrolled_students.class_code INNER JOIN `accounts_teacher` ON accounts_teacher.teacher_account_no = courses.teacher_account_no INNER JOIN `accounts_student` ON accounts_student.student_account_no = enrolled_students.student_account_no WHERE courses.teacher_account_no = $teacher AND enrolled_students.student_account_no = ".$_SESSION["user"]." ORDER BY `course_title`, `teacher_firstname` ASC";		
																							$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																							while($record = mysqli_fetch_assoc($result)) {	
										                                                  ?>
																							<tbody>
																								<tr>
																									<td>
																										<?php echo $record["course_code"]; ?>
																									</td>
																									<td>
																										<?php echo $record["course_title"]; ?>
																									</td>
																									<td>
																										<?php echo $record["course_description"]; ?>
																									</td>
																								</tr>		
																							</tbody>
																							<?php }?>
																						</table>
										                                                </div>
										                                              </div>
										                                            </div>
										                                          </td>
                                        										</tr>
																				<?php
																				/*<tr>
																					<td>
																						<a href="viewprofile.php?refid=<?php echo $record["teacher_account_no"];?>&usertype=11"><?php echo $record["teacher_firstname"]." ".$record["teache_rmiddleinitial"]." ".$record["teacher_lastname"]; ?></a>
																					</td>
																					<td>
																						
																					</td>
																					<td>
																						<?php echo $record["teacher_college"]; ?>
																					</td>
																					<td><?php echo $record["teacher_position"]; ?></td>
																					<td class="hidden-480"><?php echo $record["course_code"]; ?></td>
																					<td><?php echo $record["course_title"]; ?></td>
																				</tr>*/
																				?>
																				<?php }?>
																			</tbody>
																		</table>
																	</div><!-- /.span -->
																</div><!-- /.row -->
															</div><!-- /.col -->
														</div><!-- /.row -->
													<?php }?>
													</div>
												</div><!-- /#friends -->

												<div id="pictures" class="tab-pane">
													<?php
														if($_SESSION["usertype"] == 1) { ?>
															<div class="profile-users clearfix">
																<div class="row">
																	<div class="col-xs-12">
																		<!-- PAGE CONTENT BEGINS -->
																		<div class="row">
																			<div class="col-xs-12">
																				<div class="clearfix">
																				</div>
																			
																				<div class="col-sm-12">
																					<div class="tabbable tabs-left">
																						<ul class="nav nav-tabs" id="myTab3">
																							<li class="active">
																								<a data-toggle="tab" href="#active">
																									<i class="pink ace-icon fa fa-tachometer bigger-110"></i>
																									Active 
																								</a>
																							</li>

																							<li>
																								<a data-toggle="tab" href="#inactive">
																									<i class="blue ace-icon fa fa-user bigger-110"></i>
																									Inactive
																								</a>
																							</li>
																							<li>
																								<a data-toggle="tab" href="#pending">
																									<i class="blue ace-icon fa fa-user bigger-110"></i>
																									Pending
																								</a>
																							</li>
																							<li>
																								<a data-toggle="tab" href="#lost">
																									<i class="blue ace-icon fa fa-user bigger-110"></i>
																									Lost
																								</a>
																							</li>
																						</ul>

																						<div class="tab-content">
																							<div id="active" class="tab-pane in active">
																								<table id="tbl-active-accounts" class="table table-striped table-bordered table-hover">
																									<thead>
																										<tr>
																											<th>Name</th>
																											<th>College</th>
																											<th>Department</th>
																											<th>Status</th>
																										</tr>
																									</thead>
																									<tbody id="tbl-active-accounts-body">
																										<?php
																											$sql = "SELECT * FROM `accounts_teacher` WHERE `teacher_status` = 'Active'";		
																											$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																											while($record = mysqli_fetch_assoc($result)) {		
																											?>
																											<tr>
																												<td width="30%">
																													<a href="viewprofile.php?refid=<?php echo $record["teacher_account_no"];?>&usertype=11"><?php echo $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"]; ?></a>
																												</td>

																												<td width="30%">
																													<?php echo $record["teacher_college"]; ?>
																												</td>

																												<td width="30%">
																													<?php echo $record["teacher_dept"]; ?>
																												</td>
																												<td width="10%">
																													<?php echo "<center><a href=\"#\" class=\"deactivate-status-11\" data-id=".$record["teacher_account_no"]."><span class=\"label label-sm label-danger\">Deactivate</span></a></center>"; ?>
																												</td>
																											</tr>
																										<?php }?>
																									</tbody>
																								</table>
																							</div>
																							<div id="inactive" class="tab-pane">
																								<table id="tbl-inactive-accounts" class="table table-striped table-bordered table-hover">
																									<thead>
																										<tr>
																											<th>Name</th>
																											<th>College</th>
																											<th>Department</th>
																											<th>Status</th>
																										</tr>
																									</thead>
																									<tbody id="tbl-inactive-accounts-body">
																										<?php
																											$sql = "SELECT * FROM `accounts_teacher` INNER JOIN `inactive_accounts` ON inactive_accounts.user = accounts_teacher.teacher_account_no WHERE admin_account_no = ".$_SESSION["user"];		
																											$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																											while($record = mysqli_fetch_assoc($result)) {		
																											?>
																											<tr>
																												<td width="30%">
																													<a href="viewprofile.php?refid=<?php echo $record["teacher_account_no"];?>&usertype=11"><?php echo $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"]; ?></a>
																												</td >

																												<td>
																													<?php echo $record["teacher_college"]; ?>
																												</td>

																												<td width="30%">
																													<?php echo $record["teacher_dept"]; ?>
																												</td>
																												<td width="10%">
																													<?php echo "<center><a href=\"#\" class=\"activate-status-11\" data-id=".$record["teacher_account_no"]."><span class=\"label label-sm label-success\">Activate</span></a></center>"; ?>
																												</td>
																											</tr>
																										<?php }?>
																									</tbody>
																								</table>
																							</div>
																							<div id="pending" class="tab-pane">
																								<table id="tbl-pending-accounts" class="table table-striped table-bordered table-hover">
																									<thead>
																										<tr>
																											<th>Name</th>
																											<th>College</th>
																											<th>Department</th>
																											<th>Status</th>
																										</tr>
																									</thead>
																									<tbody id="tbl-pending-accounts-body">
																										<?php
																											$sql = "SELECT * FROM `accounts_teacher` WHERE `teacher_confirmationcode` != 0 AND `teacher_status` = 'Inactive'";		
																											$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																											while($record = mysqli_fetch_assoc($result)) {		
																											?>
																											<tr>
																												<td width="30%">
																													<a href="viewprofile.php?refid=<?php echo $record["teacher_account_no"];?>&usertype=11"><?php echo $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"]; ?></a>
																												</td>

																												<td width="30%">
																													<?php echo $record["teacher_college"]; ?>
																												</td>

																												<td width="30%">
																													<?php echo $record["teacher_dept"]; ?>
																												</td>
																												<td width="10%">
																													<?php echo "<center><a href=\"#\" class=\"confirm-status-11\" data-id=".$record["teacher_account_no"]."><span class=\"label label-sm label-success\">Confirm Registration</span></a></center>"; ?>
																												</td>
																											</tr>
																										<?php }?>
																									</tbody>
																								</table>
																							</div>
																							<div id="lost" class="tab-pane">
																								<table id="tbl-lost-accounts" class="table table-striped table-bordered table-hover">
																									<thead>
																										<tr>
																											<th>Name</th>
																											<th>College</th>
																											<th>Department</th>
																											<th>Status</th>
																										</tr>
																									</thead>
																									<tbody id="tbl-lost-accounts-body">
																										<?php
																											$sql = "SELECT * FROM `accounts_teacher` WHERE `teacher_status` = 'Lost'";		
																											$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																											while($record = mysqli_fetch_assoc($result)) {		
																											?>
																											<tr>
																												<td width="30%">
																													<a href="viewprofile.php?refid=<?php echo $record["teacher_account_no"];?>&usertype=11"><?php echo $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"]; ?></a>
																												</td>

																												<td width="30%">
																													<?php echo $record["teacher_college"]; ?>
																												</td>

																												<td width="30%">
																													<?php echo $record["teacher_dept"]; ?>
																												</td>
																												<td width="10%">
																													<?php echo "<center><a href=\"#\" class=\"reset-password-11\" data-id=".$record["teacher_account_no"]."><span class=\"label label-sm label-success\">Reset Password</span></a></center>"; ?>
																												</td>
																											</tr>
																										<?php }?>
																									</tbody>
																								</table>
																							</div>
																						</div>
																					</div>
																				</div><!-- /.col -->
																			</div><!-- /.span -->
																		</div><!-- /.row -->
																	</div><!-- /.col -->
																</div><!-- /.row -->
															</div>
														<?php } else {
															$username = $_SESSION["username"];

															function ext($filename) {
																return substr(strrchr($filename,'.' ),1);
															}

															function scanImages($parent_dir) {
																chdir($parent_dir);
																foreach (glob("*") as $index => $image) {
																	
																	if($image == ".." OR $image == ".") {
																		continue;
																	}

																	if(ext($image) == 'jpg' || ext($image) == 'png' || ext($image) == 'gif' || ext($image) == 'PNG') {
																		previewImages($parent_dir, $image);
																	}
																}
															}

															function previewImages($parent_dir, $image) {
																$upOneLevel = $parent_dir;
																$parent_dir = $parent_dir.DIRECTORY_SEPARATOR.$image;
																$filename = basename($parent_dir);
																$elementId = pathinfo($filename, PATHINFO_FILENAME);
																$extName = pathinfo($filename, PATHINFO_EXTENSION);
																
																echo "<ul class=\"ace-thumbnails clearfix\">";
																	echo "<li>";
																		echo "<a href=\"$parent_dir\" data-rel=\"colorbox\">";
																			echo "<img width=\"150\" height=\"150\" alt=\"150x150\" src=\"$parent_dir\" />";
																				echo "<div class=\"text\">";
																					echo "<div class=\"inner\">".$filename."</div>";
																				echo "<input type=\"hidden\" id=".$elementId." value=".$upOneLevel.">";
																			echo "</div>";
																		echo "</a>";
																		echo "<div class=\"tools tools-bottom\">";
																			/*echo "<a href=\"#\">";
																				echo "<i class=\"ace-icon fa fa-paperclip\"></i>";
																			echo "</a>";*/

																			echo "<a href=\"#\" onClick=\"actionConfirmation('changeAvatar', '$filename', '');\">";
																				echo "<i class=\"ace-icon fa fa-user\"></i>";
																			echo "</a>";

																			echo "<a href=\"#\" onClick=\"changeFilename('rename', '$elementId', '$extName');\">";
																				echo "<i class=\"ace-icon fa fa-pencil-square-o\"></i>";
																			echo "</a>";

																			echo "<a href=\"#\" onClick=\"actionConfirmation('delete', '$upOneLevel', '$filename');\">";
																				echo "<i class=\"ace-icon fa fa-times red\"></i>";
																			echo "</a>";
																		echo "</div>";
																	echo "</li>";
															}
																if($_SESSION["usertype"] == 11){
																	$parent_dir = "../assets/images/user-teachers/$username";
																} elseif($_SESSION["usertype"] == 111) {
																	$parent_dir = "../assets/images/user-students/$username";
																}
																echo scanImages($parent_dir);
															echo "</ul>";
														}
													?>
												</div><!-- /#pictures -->
                                                
                                                <div id="students-111" class="tab-pane">
                                                    <?php if($_SESSION["usertype"] == 1) { ?>
                                                        <div class="profile-users clearfix">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                	<div class="row">
																		<div class="col-xs-12">
																			<div class="clearfix">
																			</div>
																
																			<div class="col-sm-12">
																				<div class="tabbable tabs-left">
																					<ul class="nav nav-tabs" id="myTab4">
																						<li class="active">
																							<a data-toggle="tab" href="#active-111">
																								<i class="pink ace-icon fa fa-tachometer bigger-110"></i>
																								Active 
																							</a>
																						</li>

																						<li>
																							<a data-toggle="tab" href="#inactive-111">
																								<i class="red ace-icon fa fa-ban bigger-110"></i>
																								Inactive
																							</a>
																						</li>
																						<li>
																							<a data-toggle="tab" href="#pending-111">
																								<i class="blue ace-icon fa fa-user bigger-110"></i>
																								Pending
																							</a>
																						</li>
																						<li>
																							<a data-toggle="tab" href="#lost-111">
																								<i class="blue ace-icon fa fa-user bigger-110"></i>
																								Lost
																							</a>
																						</li>
																					</ul>

																					<div class="tab-content">
																						<div id="active-111" class="tab-pane in active">
																							<table id="tbl-active-accounts-111" class="table table-striped table-bordered table-hover">
																								<thead>
																									<tr>
																										<th>Name</th>
																										<th>College</th>
																										<th>Department</th>
																										<th>Status</th>
																									</tr>
																								</thead>
																								<tbody id="tbl-active-accounts-111-body">
																									<?php
																										$sql = "SELECT * FROM `accounts_student` WHERE `student_status` = 'Active'";		
																										$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																										while($record = mysqli_fetch_assoc($result)) {		
																										?>
																										<tr>
																											<td width="30%">
																												<a href="viewprofile.php?refid=<?php echo $record["student_account_no"];?>&usertype=111"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]; ?></a>
																											</td>

																											<td width="30%">
																												<?php echo $record["student_program"]; ?>
																											</td>

																											<td width="30%">
																												<?php echo $record["student_major"]; ?>
																											</td>
																											<td width="10%">
																												<?php echo "<center><a href=\"#\" class=\"deactivate-status-111\" data-id=".$record["student_account_no"]."><span class=\"label label-sm label-danger\">Deactivate</span></a></center>"; 
																												?>
																											</td>
																										</tr>
																									<?php }?>
																								</tbody>
																							</table>
																						</div>
																						<div id="inactive-111" class="tab-pane">
																							<table id="tbl-inactive-accounts-111" class="table table-striped table-bordered table-hover">
																								<thead>
																									<tr>
																										<th>Name</th>
																										<th>College</th>
																										<th>Department</th>
																										<th>Status</th>
																									</tr>
																								</thead>
																								<tbody id="tbl-inactive-accounts-111-body">
																									<?php
																										$sql = "SELECT * FROM `accounts_student` INNER JOIN `inactive_accounts` ON inactive_accounts.user = accounts_student.student_account_no WHERE admin_account_no = ".$_SESSION["user"];		
																										$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																										while($record = mysqli_fetch_assoc($result)) {		
																										?>
																										<tr>
																											<td width="30%">
																												<a href="viewprofile.php?refid=<?php echo $record["student_account_no"];?>&usertype=111"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]; ?></a>
																											</td>

																											<td width="30%">
																												<?php echo $record["student_program"]; ?>
																											</td>

																											<td width="30%">
																												<?php echo $record["student_major"]; ?>
																											</td>
																											<td width="10%">
																												<?php echo "<center><a href=\"#\" class=\"activate-status-111\" data-id=".$record["student_account_no"]."><span class=\"label label-sm label-success\">Activate</span></a></center>"; ?>
																											</td>
																										</tr>
																									<?php }?>
																								</tbody>
																							</table>
																						</div>
																						<div id="pending-111" class="tab-pane">
																							<table id="tbl-pending-accounts-111" class="table table-striped table-bordered table-hover">
																								<thead>
																									<tr>
																										<th>Name</th>
																										<th>College</th>
																										<th>Department</th>
																										<th>Status</th>
																									</tr>
																								</thead>
																								<tbody id="tbl-pending-accounts-111-body">
																									<?php
																										$sql = "SELECT * FROM `accounts_student` WHERE `student_confirmationcode` != 0 AND `student_status` = 'Inactive'";		
																										$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																										while($record = mysqli_fetch_assoc($result)) {		
																										?>
																										<tr>
																											<td width="30%">
																												<a href="viewprofile.php?refid=<?php echo $record["student_account_no"];?>&usertype=111"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]; ?></a>
																											</td>

																											<td width="30%">
																												<?php echo $record["student_program"]; ?>
																											</td>

																											<td width="30%">
																												<?php echo $record["student_major"]; ?>
																											</td>
																											<td width="10%">
																												<?php echo "<center><a href=\"#\" class=\"confirm-status-111\" data-id=".$record["student_account_no"]."><span class=\"label label-sm label-success\">Confirm Registration</span></a></center>"; ?>
																											</td>
																										</tr>
																									<?php }?>
																								</tbody>
																							</table>
																						</div>
																						<div id="lost-111" class="tab-pane">
																							<table id="tbl-lost-accounts-111" class="table table-striped table-bordered table-hover">
																								<thead>
																									<tr>
																										<th>Name</th>
																										<th>College</th>
																										<th>Department</th>
																										<th>Status</th>
																									</tr>
																								</thead>
																								<tbody id="tbl-lost-accounts-111-body">
																									<?php
																										$sql = "SELECT * FROM `accounts_student` WHERE `student_status` = 'Lost'";		
																										$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
																										while($record = mysqli_fetch_assoc($result)) {		
																										?>
																										<tr>
																											<td width="30%">
																												<a href="viewprofile.php?refid=<?php echo $record["student_account_no"];?>&usertype=111"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]; ?></a>
																											</td>

																											<td width="30%">
																												<?php echo $record["student_program"]; ?>
																											</td>

																											<td width="30%">
																												<?php echo $record["student_major"]; ?>
																											</td>
																											<td width="10%">
																												<?php echo "<center><a href=\"#\" class=\"reset-password-111\" data-id=".$record["student_account_no"]."><span class=\"label label-sm label-success\">Reset Password</span></a></center>"; ?>
																											</td>
																										</tr>
																									<?php }?>
																								</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																			</div><!-- /.col -->
																		</div><!-- /.span -->
																	</div><!-- /.row -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
											</div>
										</div>
									</div>
								</div>

								<div class="hide">
									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
											<!-- <div class="well well-sm"> -->
												<!-- -<button type="button" class="close" data-dismiss="alert">&times;</button>&nbsp; -->
												<!-- <div class="inline middle blue bigger-110"> Your profile is 99% complete </div> -->

												<!-- &nbsp; &nbsp; &nbsp;
												<div style="width:200px;" data-percent="99%" class="inline middle no-margin progress progress-striped active pos-rel">
													<div class="progress-bar progress-bar-success" style="width:99%"></div>
												</div> -->
											<!-- </div> --><!-- /.well -->

											<div class="space"></div>

											<form class="form-horizontal" method = "post" enctype = "multipart/form-data" action="update.php">
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
																Basic Info
															</a>
														</li>
                                                        <?php
                                                            if ($_SESSION["usertype"]==111)
                                                            {?>
                                                            <li>

                                                                <a data-toggle="tab" href="#edit-settings">
                                                                    <i class="purple ace-icon fa fa-gavel bigger-125"></i>
                                                                    Student Background
                                                                </a>
                                                            </li>
                                                        <?php } elseif ($_SESSION["usertype"]==11)
                                                            {
                                                                ?>
                                                        <li>

                                                                <a data-toggle="tab" href="#edit-settings">
                                                                    <i class="purple ace-icon fa fa-gavel bigger-125"></i>
                                                                    Teacher Background
                                                                </a>
                                                            </li>
                                                        
                                                                <?php
                                                            } ?>

														<li>
															<a data-toggle="tab" href="#edit-password">
																<i class="blue ace-icon fa fa-key bigger-125"></i>
																Password
															</a>
														</li>
													</ul>

													<div class="tab-content profile-edit-tab-content">
														<div id="edit-basic" class="tab-pane in active">
															<h4 class="header blue bolder smaller">General</h4>

															<div class="row">
																<div class="col-xs-12 col-sm-4">
																	<input type="file" name="profpic-name" />
																</div>

																<div class="vspace-12-sm"></div>

																<div class="col-xs-12 col-sm-8">

																	<div class="space-4"></div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>

																		<div class="col-sm-8">
																			<input type="hidden" name="username" value="<?php echo $uname;?>" />
																			<input class="input-small" type="text" id="form-field-first" name="fname" placeholder="First Name" value="<?php echo $fname; ?>" />
                                                                            <input class="input-small" type="text" id="form-field-middle" name="mname" placeholder="Middle Initial" value="<?php echo $mname; ?>" />
																			<input class="input-small" type="text" id="form-field-last" name="lname" placeholder="Last Name" value="<?php echo $lname; ?>" />
																		</div>
																	</div>
                                                                    
                                                                    <div class="space-4"></div>
                                                                    
                                                                    <div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-username">Location</label>

																		<div class="col-sm-8">
																			<input class="input-small" type="text" id="form-field-street" name="street" placeholder="Street/Barangay" value="<?php echo $street; ?>" />
                                                                            <input class="input-small" type="text" id="form-field-prov" name="prov" placeholder="Province/City" value="<?php echo $prov; ?>" />
																		</div>
																	</div>
                                                                    
																</div>
															</div>

															<hr />
															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>

																<div class="col-sm-9">
																	<div class="input-medium">
																		<div class="input-group">
																			<input class="input-medium date-picker" id="form-field-date" name="bdate" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value = "<?php echo $bdate; ?>"/>
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right">Gender</label>
                                                                    
																<div class="col-sm-9">
																	<label class="inline">
                                                                        <?php 
                                                                        if ($gender == "M")
                                                                        {
																		  echo "<input value='M' name='gender' type='radio' class='ace' required checked='true'/>"; 
                                                                        } 
                                                                            else{ echo "<input value='M' name='gender' required type='radio' class='ace' />";
                                                                            } ?>
																		<span class="lbl middle" > Male</span>
																	</label>

																	&nbsp; &nbsp; &nbsp;
																	<label class="inline">
                                                                        <?php 
                                                                        if ($gender == "F")
                                                                        {
																		  echo "<input name='gender' value='F' type='radio' class='ace' required checked='true'/>";
                                                                        }
                                                                        else
                                                                        {
                                                                            echo "<input name='gender' type='radio' class='ace' value='F' required />";
                                                                        }
                                                                        ?>
																		<span class="lbl middle"> Female</span>
																	</label>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">About Me</label>

																<div class="col-sm-9">
																	<textarea id="form-field-comment" name="about"><?php echo $about; ?></textarea>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Contact</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="email" id="form-field-email" name="email" value="<?php echo $email; ?>" />
																		<i class="ace-icon fa fa-envelope"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="url" name="site" id="form-field-website" value="<?php echo $site; ?>" />
																		<i class="ace-icon fa fa-globe"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone 
                                                                (+63)</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input class="input-medium input-mask-phone" type="text" name="phone" id="form-field-phone" value="<?php echo $phone; ?>" />
																		<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
																	</span>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Social</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" name="fb" value="<?php echo $fb; ?>" id="form-field-facebook" />
																		<i class="ace-icon fa fa-facebook blue"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" name="twitter" value="<?php echo $twitter; ?>" id="form-field-twitter" />
																		<i class="ace-icon fa fa-twitter light-blue"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" name="gplus" value="<?php echo $gplus; ?>" />
																		<i class="ace-icon fa fa-google-plus red"></i>
																	</span>
																</div>
															</div>
														</div>

														<div id="edit-settings" class="tab-pane">
															
                                                            <?php 
                                                            if ($_SESSION["usertype"]==111)
                                                            {
                                                            ?>
															<h4 class="header blue bolder smaller">Course</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Program</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right ">
																		<input  type="text"  id="form-field-prog"  name="prog" placeholder = "ex. BS Information Technology" value="<?php echo $prog; ?>" />
																		<i class="ace-icon fa fa-book"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-website">Major</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="text"  name="major" placeholder="Programming" value="<?php echo $maj; ?>" />
																		<i class="ace-icon fa fa-check-square-o"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Year Level: (Standing)</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input  type="text" name="yl" id="form-field-yl" placeholder="4th Year" value="<?php echo $yl; ?>" />
																		<i class="ace-icon fa fa-eye fa-flip-horizontal"></i>
																	</span>
																</div>
															</div>
                                                            
                                                            <?php 
                                                            }
                                                            elseif ($_SESSION["usertype"]==11)
                                                            {
                                                            ?>
                                                                <h4 class="header blue bolder smaller">Teacher Info</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-email">College</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right ">
																		<input  type="text"  id="form-field-prog"  name="prog" placeholder = "ex. BS Information Technology" value="<?php echo $college; ?>" />
																		<i class="ace-icon glyphicon glyphicon-home"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

																<label class="col-sm-3 control-label no-padding-right" for="form-field-website">Department</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="text"  name="major" placeholder="Programming" value="<?php echo $dept; ?>" />
														
																		<i class="ace-icon glyphicon glyphicon-home"></i>
																	</span>
															
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Position</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input  type="text" name="yl" id="form-field-position" placeholder="4th Year" value="<?php echo $pos; ?>" />
																		<i class="ace-icon glyphicon glyphicon-user fa-flip-horizontal"></i>
																	</span>
																</div>
															</div>
                                                            <?php
                                                            }?>
														</div>

														<div id="edit-password" class="tab-pane">
															<div class="space-10"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>

																<div class="col-sm-9">
																	<input type="password" name="pass1" id="form-field-pass1" onchange="checkUpdatePassword()" />
																</div>
																<div id="updatePasswordLabel">
																	
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

																<div class="col-sm-9">
																	<input type="password" name="pass2" id="form-field-pass2" onchange="checkUpdatePassword()"/>
																</div>
																<div id="updateConfirmPasswordLabel">
																	
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<input class="btn btn-info" type="submit" value="Save">
															<i class="ace-icon fa fa-check bigger-110"></i>
															
														

														&nbsp; &nbsp;
														<button class="btn" type="reset">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															Reset
														</button>
													</div>
												</div>
											</form>
										</div><!-- /.span -->
									</div><!-- /.user-profile -->
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120"><h8>
							<small><span class="blue bolder">CMU electronic Classroom</span>
							 &copy; 2017-2018</small></h8>
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="https://www.twitter.com/tanshongshongy">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="https://www.facebook.com/tanshongisreal">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="../assets/js/jquery-ui.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/jquery.gritter.min.js"></script>
		<script src="../assets/js/bootbox.js"></script>
		<script src="../assets/js/jquery.easypiechart.min.js"></script>
		<script src="../assets/js/bootstrap-datepicker.min.js"></script>
		<script src="../assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="../assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="../assets/js/spinbox.min.js"></script>
		<script src="../assets/js/bootstrap-editable.min.js"></script>
		<script src="../assets/js/ace-editable.min.js"></script>
		<script src="../assets/js/jquery.maskedinput.min.js"></script>

		<!-- plugin scripts for datatables and exporting -->
		<script src="../assets/js/jquery.dataTables.min.js"></script>
		<script src="../assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="../assets/js/dataTables.buttons.min.js"></script>
		<script src="../assets/js/buttons.flash.min.js"></script>
		<script src="../assets/js/buttons.html5.min.js"></script>
		<script src="../assets/js/buttons.print.min.js"></script>
		<script src="../assets/js/buttons.colVis.min.js"></script>
		<script src="../assets/js/dataTables.select.min.js"></script>
		<script src="../assets/js/pdfmake.min.js"></script>
		<script src="../assets/js/vfs_fonts.js"></script>
		<script src="../assets/js/jszip.min.js"></script>	

		<!-- plugin scripts for colorbox -->
		<script src="../assets/js/jquery.colorbox.min.js"></script>
		<script src="../assets/js/chosen.jquery.min.js"></script>

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">

			function actionConfirmation(action, param1, param2) {
				if(action == "delete") {
					var r = confirm("Are you sure you want to delete this picture?");
					if (r == true) {
				        document.location.href = "file-action.php?action=" + action + "&path=" + param1 + "&filename=" + param2;
				    }
					//file-action.php?action=delete&path=$parent_dir
				} else if(action == "changeAvatar") {
					var r = confirm("Make this picture as your avatar?");
					if (r == true) {
				        document.location.href = "file-action.php?action=" + action + "&filename=" + param1;
				    } 
				}
			}

			function changeFilename(action, elementId, extName) {
  			  	var filename = prompt("Please enter new filename:", elementId);
			    if (filename == null || filename == "") {

			    } else {
					document.location.href = "file-action.php?action=" + action + "&upOneLevel=" + document.getElementById(elementId).value + "&elementId=" + elementId + "&extName=" + extName + "&filename=" + filename;
			    }
			}

			function getSelectedCourse() {
				var e = document.getElementById("form-field-select-3");
				var value = e.options[e.selectedIndex].value;
				var text = e.options[e.selectedIndex].text;
			}

			jQuery(function($) {
			
				
				
				// *** editable avatar *** //
				try {//ie8 throws some harmless exceptions, so let's catch'em
			
					//first let's add a fake appendChild method for Image element for browsers that have a problem with this
					//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
					try {
						document.createElement('IMG').appendChild(document.createElement('B'));
					} catch(e) {
						Image.prototype.appendChild = function(el){}
					}
			

				}catch(e) {}
				
				
				//let's display edit mode by default?
				var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
				if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
				
			
				//another option is using modals
				
		
				///////////////////////////////////////////
			
				//right & left position
				//show the user info on right or left depending on its position
				$('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
					var $this = $(this);
					var $parent = $this.closest('.tab-pane');
			
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $this.offset();
					var w2 = $this.width();
			
					var place = 'left';
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
					
					$this.find('.popover').removeClass('right left').addClass(place);
				}).on('click', function(e) {
					e.preventDefault();
				});
			
			
				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Change profile',
					btn_change:null,
                    
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'large',
					droppable:true,
					
					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$('.input-mask-phone').mask('9999999999');
			
				
			
			
				////////////////////
				//change profile
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});
				
				
				
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					try {
						$('.editable').editable('destroy');
					} catch(e) {}
					$('[class*=select2]').remove();
				});

				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});

				<?php if($_SESSION["usertype"] != 111) { ?>
					var myTable = 
					$('#dynamic-table')
					//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
					.DataTable( {

						bAutoWidth: false,

						"aoColumns": [
						  { "bSortable": false }, { "bSortable": true },
						  null, null
						],

						"aaSorting": [],

						"columnDefs": [
						    { "width": "5%", "targets": 0 }
						  ],
						
						"responsive" : true
						//"bProcessing": true,
				        //"bServerSide": true,
				        //"sAjaxSource": "http://127.0.0.1/table.php"	,
				
						//,
						//"sScrollY": "200px",
						//"bPaginate": false,
				
						//"sScrollX": "100%",
						//"sScrollXInner": "120%",
						//"bScrollCollapse": true,
						//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
						//you may want to wrap the table inside a "div.dataTables_borderWrap" element
				
						//"iDisplayLength": 50
				
				
						//select: {
						//	style: 'multi'
						//}
				    } );
				
					
					
					$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
					
					new $.fn.dataTable.Buttons( myTable, {
						buttons: [
						 //  {
							// "extend": "colvis",
							// "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
							// "className": "btn btn-white btn-primary btn-bold",
							// columns: ':not(:first):not(:last)'
						 //  },
						  {
							"extend": "copy",
							"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
							"className": "btn btn-white btn-primary btn-bold"
						  },
						  {
							"extend": "csv",
							"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
							"className": "btn btn-white btn-primary btn-bold"
						  },
						  {
							"extend": "excel",
							"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
							"className": "btn btn-white btn-primary btn-bold"
						  },
						  {
							"extend": "pdf",
							"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
							"className": "btn btn-white btn-primary btn-bold"
						  },
						  {
							"extend": "print",
							"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
							"className": "btn btn-white btn-primary btn-bold",
							autoPrint: false,
							message: 'This print was produced using the Print button for DataTables'
						  }		  
						]
					} );
					myTable.buttons().container().appendTo( $('.tableTools-container') );
						//style the message box
					var defaultCopyAction = myTable.button(1).action();
					myTable.button(1).action(function (e, dt, button, config) {
						defaultCopyAction(e, dt, button, config);
						$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
					});
					
					
					var defaultColvisAction = myTable.button(0).action();
					myTable.button(0).action(function (e, dt, button, config) {
						
						defaultColvisAction(e, dt, button, config);
						
						
						if($('.dt-button-collection > .dropdown-menu').length == 0) {
							$('.dt-button-collection')
							.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
							.find('a').attr('href', '#').wrap("<li />")
						}
						$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
					});
				
					////
				
					setTimeout(function() {
						$($('.tableTools-container')).find('a.dt-button').each(function() {
							var div = $(this).find(' > div').first();
							if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
							else $(this).tooltip({container: 'body', title: $(this).text()});
						});
					}, 500);
					
					
					
					myTable.on( 'select', function ( e, dt, type, index ) {
						if ( type === 'row' ) {
							$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
						}
					} );
					myTable.on( 'deselect', function ( e, dt, type, index ) {
						if ( type === 'row' ) {
							$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
						}
					} );

					/////////////////////////////////
					//table checkboxes
					$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
					
					//select/deselect all rows according to table header checkbox
					$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
						var th_checked = this.checked;//checkbox inside "TH" table header
						
						$('#dynamic-table').find('tbody > tr').each(function(){
							var row = this;
							if(th_checked) myTable.row(row).select();
							else  myTable.row(row).deselect();
						});	
					});
					
					//select/deselect a row when the checkbox is checked/unchecked
					$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
						var row = $(this).closest('tr').get(0);
						if(this.checked) myTable.row(row).deselect();
						else myTable.row(row).select();
					});
				
				
				
					$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
						e.stopImmediatePropagation();
						e.stopPropagation();
						e.preventDefault();
					});
				<?php } ?>
                
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				} 	

				$(document).on('click', '.open-studentmodal', function() {
	                var student_account_no = $(this).data('id');
	                $.ajax({
	                    type: "POST",
	                    url: "handle-course-modal-response.php",
	                    data: {teacher_account_no:"<?php echo $_SESSION["user"]; ?>", student_account_no:student_account_no},
	                    success: function(data) {
	                    	$('#myCoursesModal-body').html(data);
							$('#myCoursesModal').modal('show');
	                    }
	                });
	            });

	            $(document).on('click', '.open-myStudentListModal', function() {
	                var class_code = $(this).data('id');
	                $.ajax({
	                    type: "POST",
	                    url: "fetch-student-list.php",
	                    data: {class_code:class_code},
	                    success: function(data) {
	                    	var myExampleTable = 
                            $('#myStudentListModal-table')
                            .DataTable({
                
                                "bAutoWidth" : false,

                                "ajax" : "student-list_data.json",

                                "columns" : [
                                    {"data" : "name"},
                                    {"data" : "program"},
                                    {"data" : "major"},
                                    {"data" : "status"}
                                ],

                                 "bDestroy": true
                            });
                            $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                
                            new $.fn.dataTable.Buttons( myExampleTable, {
                                buttons: [
                                 //  {
                                    // "extend": "colvis",
                                    // "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                                    // "className": "btn btn-white btn-primary btn-bold",
                                    // columns: ':not(:first):not(:last)'
                                 //  },
                                  {
                                    "extend": "copy",
                                    "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                                    "className": "btn btn-white btn-primary btn-bold"
                                  },
                                  {
                                    "extend": "csv",
                                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                                    "className": "btn btn-white btn-primary btn-bold"
                                  },
                                  {
                                    "extend": "excel",
                                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                                    "className": "btn btn-white btn-primary btn-bold"
                                  },
                                  {
                                    "extend": "pdf",
                                    "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                                    "className": "btn btn-white btn-primary btn-bold"
                                  },
                                  {
                                    "extend": "print",
                                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                                    "className": "btn btn-white btn-primary btn-bold",
                                    autoPrint: false,
                                    message: 'This print was produced using the Print button for DataTables'
                                  }       
                                ]
                            });
                        	myExampleTable.buttons().container().appendTo( $('.tableTools-container-1') );
	                    }
	                });
	            });

	            $(document).on('click', '.update-status', function() {
	            	var student_account_no = $(this).data('id');
	            	$.ajax({
	                    type: "POST",
	                    url: "update-user-status.php",
	                    data: {student_account_no:student_account_no, usertype: 111, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
	                    success: function(data) {
	                    	$('#myStudentListModal').modal('hide');
	                    }
	                });
	            });

	            $(document).on('click', '.deactivate-status-11', function() {
	            	var teacher_account_no = $(this).data('id');
	            	$.ajax({
	                    type: "POST",
	                    url: "fetch-active-accounts.php",
	                    data: {teacher_account_no:teacher_account_no, usertype: 11, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
	                    success: function(data) {
	                    	$('#tbl-active-accounts-body').html(data);
	                    }
	                });
	            });

	             $(document).on('click', '.activate-status-11', function() {
	            	var teacher_account_no = $(this).data('id');
	            	$.ajax({
	                    type: "POST",
	                    url: "fetch-inactive-accounts.php",
	                    data: {teacher_account_no:teacher_account_no, usertype: 11, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
	                    success: function(data) {
	                    	$('#tbl-inactive-accounts-body').html(data);
	                    }
	                });
	            });

	            $(document).on('click', '.confirm-status-11', function() {
	            	var teacher_account_no = $(this).data('id');
	            	$.ajax({
	                    type: "POST",
	                    url: "fetch-pending-accounts.php",
	                    data: {teacher_account_no:teacher_account_no, usertype: 11, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
	                    success: function(data) {
	                    	$('#tbl-pending-accounts-body').html(data);
	                    }
	                });
	            });

	            $(document).on('click', '.reset-password-11', function() {
	            	var teacher_account_no = $(this).data('id');
	            	$.ajax({
	                    type: "POST",
	                    url: "fetch-lost-accounts.php",
	                    data: {teacher_account_no:teacher_account_no, usertype: 11, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
	                    success: function(data) {
	                    	$('#tbl-lost-accounts-body').html(data);
	                    }
	                });
	            });

	             $(document).on('click', '.deactivate-status-111', function() {
	            	var student_account_no = $(this).data('id');
	            	$.ajax({
	                    type: "POST",
	                    url: "fetch-active-accounts.php",
	                    data: {student_account_no:student_account_no, usertype: 111, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
	                    success: function(data) {
	                    	$('#tbl-active-accounts-111-body').html(data);
	                    }
	                });
	            });

	             $(document).on('click', '.activate-status-111', function() {
	            	var student_account_no = $(this).data('id');
	            	$.ajax({
	                    type: "POST",
	                    url: "fetch-inactive-accounts.php",
	                    data: {student_account_no:student_account_no, usertype: 111, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
	                    success: function(data) {
	                    	$('#tbl-inactive-accounts-111-body').html(data);
	                    }
	                });
	            });

	             $(document).on('click', '.confirm-status-111', function() {
	            	var student_account_no = $(this).data('id');
	            	$.ajax({
	                    type: "POST",
	                    url: "fetch-pending-accounts.php",
	                    data: {student_account_no:student_account_no, usertype: 111, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
	                    success: function(data) {
	                    	$('#tbl-pending-accounts-111-body').html(data);
	                    }
	                });
	            });

	            $(document).on('click', '.reset-password-111', function() {
	            	var student_account_no = $(this).data('id');
	            	$.ajax({
	                    type: "POST",
	                    url: "fetch-lost-accounts.php",
	                    data: {student_account_no:student_account_no, usertype: 111, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
	                    success: function(data) {
	                    	$('#tbl-lost-accounts-111-body').html(data);
	                    }
	                });
	            });

				var $overflow = '';
				var colorbox_params = {
				rel: 'colorbox',
				reposition:true,
				scalePhotos:true,	
				scrolling:false,
				previous:'<i class="ace-icon fa fa-arrow-left"></i>',
				next:'<i class="ace-icon fa fa-arrow-right"></i>',
				close:'&times;',
				current:'{current} of {total}',
				maxWidth:'80%',
				maxHeight:'80%',
				onOpen:function(){
					$overflow = document.body.style.overflow;
					document.body.style.overflow = 'hidden';
					$('.nav-tabs li').removeClass('active');
				},
				onClosed:function(){
					document.body.style.overflow = $overflow;
					$("a[href='#pictures']").parent("li").addClass("active");
				},
				onComplete:function(){
					$.colorbox.resize();
				}
			};

			$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
			$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
			
			
			$(document).one('ajaxloadstart.page', function(e) {
				$('#colorbox, #cboxOverlay').remove();
		   });


			if(!ace.vars['touch']) {
				$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
			
				$(window)
				.off('resize.chosen')
				.on('resize.chosen', function() {
					$('.chosen-select').each(function() {
						 var $this = $(this);
						 $this.next().css({'width': $this.parent().width()});
					})
				}).trigger('resize.chosen');
				//resize chosen on sidebar collapse/expand
				$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
					if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});
						
					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				}	

			});
		</script>
	</body>
</html>
