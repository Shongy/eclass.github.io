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

	
	<body class="no-skin">
		<?php $Main -> navbar() ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
            
        <?php  $Main -> slider("sEA","VIEWprofile") ?>
            
          
       
			<?php
            
            
            if ($_GET['usertype']==1)
            {
                 if ($_GET["refid"]==$_SESSION["user"] and ($_GET["usertype"]==$_SESSION["usertype"]))
                    {
                        echo "<script> location.href='../main/profile.php'; </script>";
                        exit;
                    }
                else{
                 include("../redundant/_connection.php");
                $sql = "SELECT * FROM accounts_admin WHERE admin_account_no=".$_GET["refid"];
                $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                if ($record = mysqli_fetch_assoc($qry))
                {
                   $fname = $record["admin_firstname"];
                    $lname =$record["admin_lastname"];
                   $mname =$record["admin_middleinitial"];
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
            }
            if ($_GET['usertype']==11)
                {
                    if ($_GET["refid"]==$_SESSION["user"] and ($_GET["usertype"]==$_SESSION["usertype"]))
                    {
                        echo "<script> location.href='../main/profile.php'; </script>";
                        exit;
                    }
                else{
                     include("../redundant/_connection.php");
                    $sql = "SELECT * FROM accounts_teacher WHERE teacher_account_no=".$_GET["refid"];
                    $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                    if ($record = mysqli_fetch_assoc($qry))
                    {
                       $fname = $record["teacher_firstname"];
                        $lname =$record["teacher_lastname"];
                       $mname =$record["teacher_middleinitial"];
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
                }
                if ($_GET['usertype']==111)
                {
                     if ($_GET["refid"]==$_SESSION["user"] and ($_GET["usertype"]==$_SESSION["usertype"]))
                    {
                        echo "<script> location.href='../main/profile.php'; </script>";
                        exit;
                    }
                else{
                    include("../redundant/_connection.php");
                    $sql = "SELECT * FROM accounts_student WHERE student_account_no=".$_GET["refid"];
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
                }
                                        
                 ?>
			<div class="main-content">
				<div class="main-content-inner">
					<!--bread-->

					<div class="page-content">
                        
            <div class="page-header">
              <h1>
                View Profile
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                    <?php echo $fname." ".$mname." ".$lname; ?>
                </small>
                 </h1>
            </div><!-- /.page-header -->
                            

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

                                     <?php  
                                        $src= "../assets/images/avatars/default.png";
                                                                
                                         if ($_GET["usertype"]==1)
                                         {
                                           if (is_file("../assets/images/admin/profilepics/".$fname.".jpg"))
                                           {
                                              $src = "../assets/images/admin/profilepics/".$fname.".jpg";
                                            }
                                          }
                                          if ($_GET["usertype"]==11)
                                          {
                                            if (is_file("../assets/images/user-teachers/$uname/".$record["teacher_imgno"]))
                                           {
                                              $src = "../assets/images/user-teachers/$uname/".$record["teacher_imgno"];
                                           }
                                           }
                                           if ($_GET["usertype"]==111)
                                           {
                                            
                                            $sql = "SELECT `student_imgno` FROM `accounts_student` WHERE `student_account_no` = ".$_GET["refid"];
                                          $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                            $record = mysqli_fetch_assoc($result); 
                                            if (is_file("../assets/images/user-students/$uname/".$record["student_imgno"]))
                                            {
                                                $src = "../assets/images/user-students/$uname/".$record["student_imgno"];
                                            }
                                            
                                           }
                                           
                                        ?>
								<div class="hide">
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="User's Avatar" src="<?php echo $src; ?>" />
												</span>
											</div>
										</div>

									</div>
								</div>

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
														<i class="blue ace-icon fa fa-users bigger-120"></i>
														  <?php 
                                if($_GET["usertype"] == 11) {
                                  echo "My Students";
                                } elseif($_GET["usertype"] == 111) {
                                  echo "My Teachers";
                                }
                            ?>
													</a>
												</li>

                       <li>
                          <a data-toggle="tab" href="#pictures">
                            <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                            Pictures
                          </a>
                        </li>
											</ul>

											<div class="tab-content no-border padding-24">
												<div id="home" class="tab-pane in active">
													<div class="row">
														<div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
                                                                <!--id="avatar2"-->
                                                                 
																<img class="editable img-responsive" alt="<?php echo $fname; ?>'s Avatar"   src="<?php echo $src; ?>" />
															</span>

															<div class="space space-4"></div>
                              
                            <?php if ($_SESSION["usertype"]==1) {   
                                    if($_GET["usertype"] == 11) { 
                                    $sql = "SELECT `teacher_status`, `teacher_confirmationcode` FROM `accounts_teacher` WHERE `teacher_account_no` = ".$_GET["refid"];
                                    $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                    $record = mysqli_fetch_assoc($result);
                                    $teacher_status = $record["teacher_status"];
                                    $teacher_confirmationcode = $record["teacher_confirmationcode"];
                            ?>
                                    <div id="btn-update-status">
                                      <?php if($teacher_status == "Active") { ?>
                                      <a href="#" data-id="<?php echo $_GET["refid"]; ?>" class="btn btn-sm btn-block btn-danger update-status">
                                        <i class="ace-icon fa fa-ban bigger-120"></i>
                                        <span id="deactivating" class="bigger-110">Deactivate Account</span>
                                      </a>
                                    <?php } elseif($teacher_status == "Inactive") { ?>
                                      <?php if($teacher_confirmationcode == 0) {?>
                                        <a href="#" data-id="<?php echo $_GET["refid"]; ?>" class="btn btn-sm btn-block btn-success update-status">
                                          <i class="ace-icon glyphicon glyphicon-check bigger-120"></i>
                                          <span class="bigger-110">Activate Account</span>
                                        </a>
                                      <?php } else { ?>
                                        <a href="#" data-id="<?php echo $_GET["refid"]; ?>" class="btn btn-sm btn-block btn-success confirm-reg">
                                          <i class="ace-icon glyphicon glyphicon-check bigger-120"></i>
                                          <span class="bigger-110">Confirm Registration</span>
                                        </a>
                                      <?php }?>
                                    <?php } elseif($teacher_status == "Lost") { ?>
                                      <a href="#" data-id="<?php echo $_GET["refid"]; ?>" class="btn btn-sm btn-block btn-success reset-password">
                                        <i class="ace-icon glyphicon glyphicon-check bigger-120"></i>
                                        <span class="bigger-110">Reset Password</span>
                                      </a>
                                    <?php } ?>
                                  </div>
                            <?php } elseif($_GET["usertype"] == 111) { 
                                    $sql = "SELECT `student_status`, `student_confirmationcode` FROM `accounts_student` WHERE `student_account_no` = ".$_GET["refid"];
                                      $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                      $record = mysqli_fetch_assoc($result);
                                      $student_status = $record["student_status"];
                                      $student_confirmationcode = $record["student_confirmationcode"];
                            ?>  

                                      <div id="btn-update-status">
                                        <?php if($student_status == "Active") { ?>
                                        <a href="#" data-id="<?php echo $_GET["refid"]; ?>" class="btn btn-sm btn-block btn-danger update-status-111">
                                          <i class="ace-icon fa fa-ban bigger-120"></i>
                                          <span class="bigger-110">Deactivate Account</span>
                                        </a>
                                      <?php } elseif($student_status == "Inactive") { ?>
                                       <?php if($student_confirmationcode == 0) {?>
                                        <a href="#" data-id="<?php echo $_GET["refid"]; ?>" class="btn btn-sm btn-block btn-success update-status-111">
                                          <i class="ace-icon glyphicon glyphicon-check bigger-120"></i>
                                          <span class="bigger-110">Activate Account</span>
                                        </a>
                                      <?php } else { ?>
                                        <a href="#" data-id="<?php echo $_GET["refid"]; ?>" class="btn btn-sm btn-block btn-success confirm-reg-111">
                                          <i class="ace-icon glyphicon glyphicon-check bigger-120"></i>
                                          <span class="bigger-110">Confirm Registration</span>
                                        </a>
                                      <?php }?>
                                      <?php } elseif($student_status == "Lost") { ?>
                                        <a href="#" data-id="<?php echo $_GET["refid"]; ?>" class="btn btn-sm btn-block btn-success reset-password-111">
                                          <i class="ace-icon glyphicon glyphicon-check bigger-120"></i>
                                          <span class="bigger-110">Reset Password</span>
                                        </a>
                                      <?php } ?>
                                    </div>
                              <?php } ?>
                                 <div class="hidden" id="loading">
                                    <p><img src="../assets/images/avatars/loading.gif" style="width:100px;height:80px;"/> Processing...</p>
                                  </div>
                          <?php } ?>

															<!-- <a href="sendmessage.php" class="btn btn-sm btn-block btn-primary">
																<i class="ace-icon fa fa-envelope-o bigger-110"></i>
																<span class="bigger-110">Send a message</span>
															</a> -->
														</div><!-- /.col -->
 
														<div class="col-xs-12 col-sm-9">
															<h4 class="blue">
																<span class="middle"><?php echo $fname." ".$mname." ".$lname;?></span>

																
															</h4>

															<div class="profile-user-info">
																<div class="profile-info-row">
                                                                   
																	<div class="profile-info-name"> username </div>

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
																		<span><?php if ($_GET["usertype"]==1)
{echo "Admininistrator";}elseif ($_GET["usertype"]==11){echo "Teacher";}else{echo "Student";}?></span>
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
                                                            if ($_GET["usertype"]==111)
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
                                                            elseif ($_GET["usertype"]==11)
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
										        <?php
                            if($_GET["usertype"] == 11) {
                              /*$sql = "SELECT DISTINCT `activity_no`, accounts_student.student_account_no, `student_firstname`, `student_middleinitial`, `student_lastname`, `activity_name`, `student_imgno`, `student_username`, `activity_time` FROM `activities` ";
                              $sql .= "INNER JOIN `accounts_student` ON student_account_no = activities.user ";
                              $sql .= "INNER JOIN `enrolled_students` ON accounts_student.student_account_no = enrolled_students.student_account_no INNER JOIN `courses` ON courses.class_code = enrolled_students.class_code WHERE courses.teacher_account_no = ".$_SESSION["user"]." ORDER BY `activity_time` DESC LIMIT 20";
                                $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                while($record = mysqli_fetch_assoc($result)) {*/
                            $sql = "SELECT DISTINCT `activity_no`, accounts_teacher.teacher_account_no, `teacher_firstname`, `teacher_middleinitial`, `teacher_lastname`, `activity_name`, `teacher_imgno`, `teacher_username`, `activity_time` FROM `activities` INNER JOIN `accounts_teacher` ON accounts_teacher.teacher_account_no = activities.user WHERE accounts_teacher.teacher_account_no = ".$_GET["refid"]." ORDER BY `activity_time` DESC LIMIT 20";
                            $result = mysqli_query($connection, $sql);
                            while($record = mysqli_fetch_assoc($result)) {
                          ?>
                              <div class="col-sm-12">
                        
                              <div class="profile-activity clearfix">
                                <div>
                                  <img style='width:40px;height:40px;' class='nav-user-photo' src="<?php echo "../assets/images/user-teachers/".$record["teacher_username"]."/".$record["teacher_imgno"];
                                ?>" />
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
                          <?php } elseif($_GET["usertype"] == 111) {
                              $sql = "SELECT DISTINCT `activity_no`, accounts_student.student_account_no, `student_firstname`, `student_middleinitial`, `student_lastname`, `activity_name`, `student_imgno`, `student_username`, `activity_time` FROM `activities` INNER JOIN `accounts_student` ON accounts_student.student_account_no = activities.user WHERE accounts_student.student_account_no = ".$_GET["refid"]." ORDER BY `activity_time` DESC LIMIT 20";
                                $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                while($record = mysqli_fetch_assoc($result)) {
                            
                          ?>
                              <div class="col-sm-12">
                        
                              <div class="profile-activity clearfix">
                                <div>
                                  <img style='width:40px;height:40px;' class='nav-user-photo' src="
                                 <?php echo "../assets/images/user-students/".$record["student_username"]."/".$record["student_imgno"]; ?>" />
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
													</div>
												</div><!-- /#feed -->

												<div id="friends" class="tab-pane">
													<div class="profile-users clearfix">
                        <?php if($_GET["usertype"] == 11) {?>                       
                            <?php /*<div class="row">
                              <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                  <div class="col-xs-12">
                                    <table id="simple-table" class="table  table-bordered table-hover">
                                      <thead>
                                        <tr>
                                          <th class="detail-col">Quick Review</th>
                                          <th>Student Name</th>
                                          <th>College</th>
                                          <th>Program</th>
                                          <th>Course Code</th>
                                          <th>Course Title</th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                        <?php
                                          $sql = "SELECT * FROM `accounts_student` ";
                                          $sql .= "INNER JOIN `enrolled_students` ON accounts_student.student_account_no = enrolled_students.student_account_no INNER JOIN `courses` ON courses.class_code = enrolled_students.class_code WHERE courses.teacher_account_no = ".$_GET["refid"]." ORDER BY `course_title` ASC";
                                          $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                          while($record = mysqli_fetch_assoc($result)) {                          

                                        ?>
                                        <tr>
                                          <td class="center">
                                            <div class="action-buttons">
                                              <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                <i class="ace-icon fa fa-angle-double-down"></i>
                                                <span class="sr-only">Details</span>
                                              </a>
                                            </div>
                                          </td>

                                          <td>
                                            <a href="viewprofile.php?refid=<?php echo $record["student_account_no"];?>&usertype=111"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]; ?></a>
                                          </td>
                                          <td><?php echo $record["student_program"];?></td>
                                          <td class="hidden-480"><?php echo $record["student_major"];?></td>
                                          <td><?php echo $record["course_code"];?></td>
                                          <td><?php echo $record["course_title"];?></td>
                                        </tr>                               

                                        <tr class="detail-row">
                                          <td colspan="8">
                                            <div class="table-detail">
                                              <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                  <div class="text-center">
                                                    <img height="185" width="190" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src= "
                                                    <?php 
                                                      echo "../assets/images/user-students/".$record["student_username"]."/".$record["student_imgno"]; 
                                                    ?>"
                                                    />
                                                  </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-7">
                                                  <div class="space visible-xs"></div>

                                                  <div class="profile-user-info profile-user-info-striped">
                                                    <div class="profile-info-row">
                                                      <div class="profile-info-name"> Email Address </div>

                                                      <div class="profile-info-value">
                                                        <span><?php echo $record["student_email"];?></span>
                                                      </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                      <div class="profile-info-name"> Location </div>

                                                      <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span><?php echo $record["student_street"].", ".$record["student_province"];?></span>
                                                      </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                      <div class="profile-info-name"> Age </div>

                                                      <div class="profile-info-value">
                                                        <?php
                                                          $differenceFormat = '%y';
                                                          $datetime1 = date_create($record["student_bdate"]);
                                                          $datetime2 = date_create(date('Y-m-d'));
                                                          $interval = date_diff($datetime1, $datetime2);                                                                            
                                                          echo "<span>".$interval->format($differenceFormat)."</span>";
                                                      ?>
                                                      </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                      <div class="profile-info-name"> Birthdate </div>

                                                      <div class="profile-info-value">
                                                        <span><?php echo $record["student_bdate"];?></span>
                                                      </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                      <div class="profile-info-name"> Gender </div>

                                                      <div class="profile-info-value">
                                                        <span>
                                                        <?php 
                                                        if($record["student_gender"] == "M"){
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
                                                        <span><?php echo $record["student_phone"];?></span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                  <div class="space visible-xs"></div>
                                                  <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                  <div class="space-6"></div>

                                                  <form>
                                                    <fieldset>
                                                      <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                    </fieldset>

                                                    <div class="hr hr-dotted"></div>

                                                    <div class="clearfix">
                                                      <label class="pull-left">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"> Email me a copy</span>
                                                      </label>

                                                      <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                      </button>
                                                    </div>
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <?php
                                          } 
                                        ?>
                                      </tbody>
                                    </table>
                                  </div><!-- /.span -->
                                </div><!-- /.row -->
                              </div><!-- /.col -->
                            </div><!-- /.row -->*/?>
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
                                <div class="ace-settings-container" id="ace-settings-container">
                                  <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                                    <i class="ace-icon glyphicon glyphicon-file bigger-130"></i>  
                                  </div>

                                  <div class="ace-settings-box clearfix" id="ace-settings-box">
                                    <div class="pull-left width-100 height-100">
                                      <div class="ace-settings-item">
                                      <div class="pull-right tableTools-container"></div>
                                      </div>
                                      <div class="ace-settings-item">
                                        
                                      </div>
                                    </div><!-- /.pull-left -->
                                  </div><!-- /.ace-settings-box -->
                                </div><!-- /.ace-settings-container -->
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
                                        $sql = "SELECT DISTINCT enrolled_students.student_account_no, `student_firstname`, `student_middleinitial`, `student_lastname`, `student_program`, `student_major` FROM `enrolled_students` INNER JOIN `accounts_student` ON accounts_student.student_account_no = enrolled_students.student_account_no INNER JOIN `courses` ON courses.class_code = enrolled_students.class_code WHERE courses.teacher_account_no = ".$_GET["refid"]." ORDER BY `course_title`";
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
                                            <?php
                                            if($_SESSION["user"] == $record["student_account_no"]) {
                                            ?>
                                              <a href="profile.php"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]; ?></a>
                                            <?php } else {
                                            ?>
                                              <a href="viewprofile.php?refid=<?php echo $record["student_account_no"];?>&usertype=111"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]; ?></a>
                                            <?php } ?>
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
                            <?php } elseif($_GET["usertype"] == 111) {?>
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
                                          
                                          $sql = "SELECT accounts_teacher.teacher_account_no FROM `enrolled_students` INNER JOIN `courses` ON courses.class_code = enrolled_students.class_code INNER JOIN `accounts_teacher` ON accounts_teacher.teacher_account_no = courses.teacher_account_no INNER JOIN `accounts_student` ON accounts_student.student_account_no = enrolled_students.student_account_no WHERE enrolled_students.student_account_no = ".$_GET["refid"]." ORDER BY `course_title`, `teacher_firstname` ASC";   
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
                                          <td class="center" width="10%">
                                                              <div class="action-buttons">
                                                                <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                                  <i class="ace-icon fa fa-angle-double-down"></i>
                                                                  <span class="sr-only">Details</span>
                                                                </a>
                                                              </div>
                                                          </td>
                                          <td width="30%">
                                            <?php
                                            if($_SESSION["user"] == $record["teacher_account_no"]) {
                                            ?>
                                              <a href="profile.php"><?php echo $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"]; ?></a>
                                            <?php } else {
                                            ?>
                                              <a href="viewprofile.php?refid=<?php echo $record["teacher_account_no"];?>&usertype=11"><?php echo $record["teacher_firstname"]." ".$record["teacher_middleinitial"]." ".$record["teacher_lastname"]; ?></a>
                                            <?php } ?>
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
                                                $sql = "SELECT `course_code`, `course_title`, `course_description` FROM `enrolled_students` INNER JOIN `courses` ON courses.class_code = enrolled_students.class_code INNER JOIN `accounts_teacher` ON accounts_teacher.teacher_account_no = courses.teacher_account_no INNER JOIN `accounts_student` ON accounts_student.student_account_no = enrolled_students.student_account_no WHERE courses.teacher_account_no = $teacher AND enrolled_students.student_account_no = ".$_GET["refid"]." ORDER BY `course_title`, `teacher_firstname` ASC";   
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
                                  /*if(is_dir($image)) {
                                    echo "<a href=\"gallery.php?parent_dir=$parent_dir\" class=\"$extName\" onClick=\"fetchDirectoryLocation('$elementId');\">";
                                      echo "<img width=\"150\" height=\"150\" alt=\"150x150\" src=\"assets/images/placeholder/directory.jpg\" />";
                                      echo "<div class=\"text\">";
                                        echo "<div class=\"inner\">".$filename."</div>";
                                      echo "</div>";
                                    echo "</a>";
                                  } else {*/
                                    echo "<a href=\"$parent_dir\" data-rel=\"colorbox\">";
                                      echo "<img width=\"150\" height=\"150\" alt=\"150x150\" src=\"$parent_dir\" />";
                                        echo "<div class=\"text\">";
                                          echo "<div class=\"inner\">".$filename."</div>";
                                          echo "<input type=\"hidden\" id=".$elementId." value=".$upOneLevel.">";
                                        echo "</div>";
                                    echo "</a>";

                                    /*echo "<div class=\"tools tools-bottom\">";
                                      echo "<a href=\"#\">";
                                        echo "<i class=\"ace-icon fa fa-paperclip\"></i>";
                                      echo "</a>";

                                      echo "<a onClick=\"actionConfirmation('changeAvatar', '$filename', '');\">";
                                        echo "<i class=\"ace-icon fa fa-user\"></i>";
                                      echo "</a>";

                                      echo "<a onClick=\"changeFilename('rename', '$elementId', '$extName');\">";
                                        echo "<i class=\"ace-icon fa fa-pencil-square-o\"></i>";
                                      echo "</a>";

                                      echo "<a onClick=\"actionConfirmation('delete', '$upOneLevel', '$filename');\">";
                                        echo "<i class=\"ace-icon fa fa-times red\"></i>";
                                      echo "</a>";
                                    echo "</div>";*/
                                  //}
                                  echo "</li>";
                                }
                                //if(!$_GET['parent_dir']) {
                                if($_GET["usertype"] == 11){
                                  $parent_dir = "../assets/images/user-teachers/$uname";
                                } elseif($_GET["usertype"] == 111) {
                                  $parent_dir = "../assets/images/user-students/$uname";
                                }
                              
                                  //$parent_dir = "../assets/images/user-teachers/".DIRECTORY_SEPARATOR.$_SESSION["username"];
                                //} else {
                                //  if($_GET['parent_dir']) {
                                //    $parent_dir = $_GET['parent_dir'];
                                //  }
                                //}
                                /*echo "<div class=\"page-header\">";
                                  echo "<h1>";
                                    echo "Gallery";
                                    echo "<small>";
                                      echo "<i class=\"ace-icon fa fa-angle-double-right\"></i>";
                                      echo " ".$parent_dir;
                                    echo "</small>";
                                  echo "</h1>";
                                echo "</div>";*/
                              echo scanImages($parent_dir);
                            echo "</ul>";
                          ?>
												</div><!-- /#pictures -->
											</div>
										</div>
									</div>
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

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

    <script src="../assets/js/jquery.colorbox.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
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
				
				/**
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
				*/
			
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
			
				$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
			
			
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

        <?php if($_GET["usertype"] == 11) { ?>
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
          
          
          //"bProcessing": true,
              //"bServerSide": true,
              //"sAjaxSource": "http://127.0.0.1/table.php" ,
      
          //,
          //"sScrollY": "200px",
          //"bPaginate": false,
      
          //"sScrollX": "100%",
          //"sScrollXInner": "120%",
          //"bScrollCollapse": true,
          //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
          //you may want to wrap the table inside a "div.dataTables_borderWrap" element
      
          //"iDisplayLength": 50
      
      
          select: {
            style: 'multi'
          }
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

        $(document).on('click', '.open-studentmodal', function() {
          var student_account_no = $(this).data('id');
          $.ajax({
              type: "POST",
              url: "handle-course-modal-response.php",
              data: {teacher_account_no:'<?php echo $_GET["refid"]; ?>', student_account_no:student_account_no},
              success: function(data) {
                $('#myCoursesModal-body').html(data);
                $('#myCoursesModal').modal('show');
              }
          });
      });

      $(document).on('click', '.update-status', function() {
        var teacher_account_no = $(this).data('id'); 
         
          $.ajax({
              type: "POST",
              url: "update-user-status.php",
              data: {teacher_account_no:teacher_account_no, usertype:11, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
              beforeSend:function(){ 
                $('#loading').removeClass('hidden');
              },
              error: function (request, status, error) {
                  //alert("something went wrong!");
              },
              success: function(data) {
                $('#btn-update-status').html(data);
                 $('#loading').addClass('hidden');          
              }
          });
      });

      $(document).on('click', '.reset-password', function() {
        var teacher_account_no = $(this).data('id'); 
          $.ajax({
              type: "POST",
              url: "reset-password.php",
              data: {teacher_account_no:teacher_account_no, usertype:11, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
              beforeSend:function(){ 
                $('#loading').removeClass('hidden');
              },
              success: function(data) {
              $('#btn-update-status').html(data);  
              $('#loading').addClass('hidden');         
              }
          });
      });

      $(document).on('click', '.confirm-reg', function() {
        var teacher_account_no = $(this).data('id'); 
          $.ajax({
              type: "POST",
              url: "update-user-status.php",
              data: {teacher_account_no:teacher_account_no, usertype:11, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
              beforeSend:function(){ 
                $('#loading').removeClass('hidden');
              },
              success: function(data) {
              $('#btn-update-status').html(data);  
                $('#loading').addClass('hidden');          
              }
          });
      });

      $(document).on('click', '.update-status-111', function() {
          var student_account_no = $(this).data('id'); 
            $.ajax({
                type: "POST",
                url: "update-user-status.php",
                data: {student_account_no:student_account_no, usertype:111, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
                beforeSend:function(){ 
                  $('#loading').removeClass('hidden');
                },
                success: function(data) {
                  $('#btn-update-status').html(data);  
                  $('#loading').addClass('hidden');         
                }
            });
        });

      $(document).on('click', '.reset-password-111', function() {
        var student_account_no = $(this).data('id'); 
          $.ajax({
              type: "POST",
              url: "reset-password.php",
              data: {student_account_no:student_account_no, usertype:111, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
              success: function(data) {
              $('#btn-update-status').html(data);          
              }
          });
      });

      $(document).on('click', '.confirm-reg-111', function() {
        var student_account_no = $(this).data('id'); 
          $.ajax({
              type: "POST",
              url: "update-user-status.php",
              data: {student_account_no:student_account_no, usertype:111, admin_account_no:'<?php echo $_SESSION["user"]; ?>'},
              success: function(data) {
              $('#btn-update-status').html(data);          
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
          $("a[href='#pictures']").parent("li").addClass("active");
          document.body.style.overflow = $overflow;
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