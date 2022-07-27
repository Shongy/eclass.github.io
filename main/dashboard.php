<!DOCTYPE html>
<html lang="en">    
<?php
    session_start();
    include_once("../redundant/Main.php");
    include("../redundant/_connection.php");
    $Main = new Main; 

    $Main -> head1() ?>
    
    <body class="no-skin">
       
    <?php  $Main -> navbar() ?>
        
    
     <div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php $Main -> slider("dashboard",""); ?>

			<div class="main-content">
				<div class="main-content-inner">
					
                    <?php //$Main -> timer(); ?>
					<?php $Main -> page_header("dashboard"); ?>

					<link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.min.css" />
					<link rel="stylesheet" href="../assets/css/bootstrap-timepicker.min.css" />
					<link rel="stylesheet" href="../assets/css/daterangepicker.min.css" />
					<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css" />
					<link rel="stylesheet" href="../assets/css/bootstrap-colorpicker.min.css" />

					<div class="page-content">
				        <?php if($_SESSION["usertype"] == 1) { ?>
	                        <!-- <div class="well">
	                            <h1 class="grey lighter smaller">
									<span class="blue bigger-125">
										
									</span>
												
					            </h1>
					        </div>	 --> 
					
				        	<div class="col-sm-12 widget-container-col well" id="widget-container-col-10">
				        		 	
								<div class="widget-box" id="widget-box-10">

									<div class="widget-header widget-header-small">
										<h5 class="widget-title smaller"></h5>
										<div class="widget-toolbar no-border">
											<ul class="nav nav-tabs" id="myTab">
												<li data-id="teachers" class="active">
													<a data-toggle="tab" href="#teachers">Teachers</a>
												</li>

												<li data-id="students">
													<a data-toggle="tab" href="#students">Students</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="widget-body">
										<div class="widget-main padding-6">
											<div class="tab-content">
												<div class="row">
												    <div class="col-xs-8 col-sm-5 pull-right">
											
													    <div class="input-group">
													    			 
													        <span class="input-group-addon">
													        	   <label class="blue" for="id-date-range-picker">date range of activities: | </label>
													          <i class="fa fa-calendar bigger-110"></i>
													        </span>
													        <input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker" />
													    </div>
												    </div>
													<!-- <div class="col-xs-8 col-sm-5">
												    <input type="text" id="query" class="form-control search-query" placeholder="Type your query" />			
														<button type="button" id="btn-search-query" class="btn btn-purple btn-sm">
															<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
															Search
														</button>
													</div> -->
												</div>
												<div id="teachers" class="tab-pane in active">
												<?php
													$sql = "SELECT DISTINCT `activity_no`, accounts_teacher.teacher_account_no, `teacher_firstname`, `teacher_middleinitial`, `teacher_lastname`, `activity_name`, `teacher_imgno`, `teacher_username`, `activity_time` FROM `activities` INNER JOIN `accounts_teacher` ON accounts_teacher.teacher_account_no = activities.user ORDER BY `activity_time` DESC LIMIT 20";
													$result = mysqli_query($connection, $sql);
													while($record = mysqli_fetch_assoc($result)) {
												?>
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
				        <?php } ?>
                        
                        <?php
                            if($_SESSION["usertype"] == 111)
                                
                            {?>

                                   <div class="col-sm-7  widget-container-col ui-sortable" id="widget-container-col-2" style="min-height: 263px;">
										
										<div class="widget-box widget-color-blue3">
                                            	 <div style="margin-top:30px;"></div>
											<div class="widget-header">
												<h4 class="widget-title lighter smaller">
                                                    	<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up white"></i>
													</a>
												</div>
                                                                 <div class="widget-toolbar">
                                                 <a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh white"></i>
														</a>
                                                    &nbsp;
                                                    <a href="#" data-action="fullscreen" >
															<i class="ace-icon fa fa-expand white"></i>
														</a>
                                                </div>
													<i class="ace-icon fa fa-comment white"></i>
													Activity Log
												</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding scrollable" data-size="250">
										
														<div class="content">
														
														<div class="itemdiv dialogdiv">
                                                            
                                                            <?php
                                                            $user_type=$_SESSION["usertype"];
                                                            $user=$_SESSION["user"];
                                                             $query3="Select * from activities where usertype ='$user_type' and user='$user' order by activity_time DESC";
                                                                $result3 = mysqli_query($connection, $query3) or die(mysqli_error($connection));
															     while($record3 = mysqli_fetch_assoc($result3))
                                                                 {?>
                                                        <div class="user">
																<img alt="My Avatar" src="assets/images/avatars/avatar1.png">
															</div>
                                                                <div class="body">
                                                                    
																<div class="name">
																	<?php echo $record3["activity_time"]; ?>
																</div>
                                                                    
																<div class="text"><?php echo $record3["activity_name"]; ?></div>
                                                                    
															     </div>
                                                        &nbsp;
                                                                   <?php 
                                                                 }
                                                            ?>
                                                                
														</div>

												
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
                                </div><!-- /.widget-box -->
                        <div class="widget-box widget-color-blue ui-sortable-handle" id="widget-box-2" style="opacity: 1;">
                             <div style="margin-top:30px;"></div>
												<div class="widget-header">
													<h5 class="widget-title bigger lighter">
                                                        
												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up white"></i>
													</a>
												</div>
                                                <div class="widget-toolbar">
                                                 <a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh white"></i>
														</a>
                                                    &nbsp;
                                                    <a href="#" data-action="fullscreen" >
															<i class="ace-icon fa fa-expand white"></i>
														</a>
                                                </div>
														<i class="ace-icon fa fa-table"></i>
														Previous Exams
													</h5>
												</div>

												<div class="widget-body expand">
													<div class="widget-main no-padding scrollable" data-size="250">
														<div class="content">
                                                        	<table class="table table-bordered table-striped table-hover">
															<thead class="thin-border-bottom">
																<tr>
                                                                                                                                          
																	<th>
                                                                        <center>Course code</center>
																	</th>
                                                                    
                                                                       
																	<th>
                                                                        <center>Teacher name</center>
																	</th>
                                                                       
																	<th>
                                                                        <center>Exam name</center>
																	</th>
                                                                       
																	<th>
                                                                        <center>Total score</center>
																	</th>
                                                                    
                                                                    <th>
                                                                        <center>Review exam</center>
																	</th>
 
                                                                    
																</tr>
															</thead>

															<tbody>
                                                                
                                                                <?php
                                                                $query="Select * from exam_results INNER JOIN exams ON exam_results.exam_no = exams.exam_no INNER JOIN courses ON exams.class_code = courses.class_code INNER JOIN accounts_teacher ON courses.teacher_account_no = accounts_teacher.teacher_account_no where student_account_no=".$_SESSION['user']." ORDER BY exam_result_no DESC";
                                
                                                                $result1 = mysqli_query($connection, $query) or die(mysqli_error($connection));
															     while($record1 = mysqli_fetch_assoc($result1))
                                                                 {?>
                                                                <tr>
                                                                    <td><i class="ace-icon fa fa-caret-right blue"></i> <?php echo $record1['course_code']; ?></td>
                                                                    <td><center><?php echo $record1['teacher_firstname']." ". $record1['teacher_middleinitial']." ". $record1['teacher_lastname']; ?></center></td>
                                                                    <td><center><?php echo $record1['exam_name']; ?></center></td>
                                                                    <td><center><?php echo $record1['score']; ?></center></td>
                                                                    <td><center><a href="#" class="btn btn-info btn-sm">Review</a></center></td> 
                                                                </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                             
															</tbody>
														</table>
													</div>
                                                    </div>
                            </div>
                            
                                </div>
                                
                                
										<div class="widget-box widget-color-red2" >
                                             <div style="margin-top:30px;"></div>
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-star white"></i>
													Unenrolled Subjects
												</h4>
                                                <div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up white"></i>
													</a>
												</div>
                                                <div class="widget-toolbar">
                                                 <a href="#" data-action="reload">
															<i class="ace-icon fa fa-refresh white"></i>
														</a>
                                                    &nbsp;
                                                    <a href="#" data-action="fullscreen" >
															<i class="ace-icon fa fa-expand white"></i>
														</a>
                                                </div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding scrollable" data-size="250">
														<div class="content">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>
                                                                    <center>Course code</center>
																</th>
                                                                <th>
                                                                    <center>Course title</center>
																</th>
                                                                <th>
                                                                    <center>Teacher name</center>
																</th>
                                                                <th>
                                                                    <center>Status</center>
																</th>
                                                                
                                                                  <th>
                                                                    <center>Send request</center>
																</th>
																
															</tr>
														</thead>

														<tbody>
											
                                                     <?php
                                                        $class_codeArr=array();
                                                        $query="Select * from enrolled_students where student_account_no =".$_SESSION['user']."";

                                                        $result1 = mysqli_query($connection, $query) or die(mysqli_error($connection));
                                                         while($record1 = mysqli_fetch_assoc($result1))
                                                        {
                                                             $class_codeArr[]=$record1["class_code"];
                                                        }
                                                        $arrlength=count($class_codeArr);
                    
                                                       
                                                        $query2="Select * FROM courses INNER JOIN accounts_teacher ON accounts_teacher.teacher_account_no = courses.teacher_account_no";
                                                        
                                                        $result2=mysqli_query($connection,$query2) or die (mysqli_error($connection));
                                                        while($record2=mysqli_fetch_assoc($result2))
                                                        {
                                                             $boolean=false;
                                                              for($x=0;$x<$arrlength;$x++)
                                                              {
                                                                  if($record2["class_code"]==$class_codeArr[$x])
                                                                  {
                                                                      $boolean=true;
                                                                  }
                                                              }
                                                            if($boolean==false)
                                                            {?>
                                                                 <tr>
                                                                     <td><i class="ace-icon fa fa-caret-right blue"></i> <?php echo $record2["course_code"];?></td>
                                                                     <td><center><?php echo $record2["course_title"];?></center></td>
                                                                     <td><center><?php echo $record2["teacher_firstname"]." ".$record2["teacher_middleinitial"]." ". $record2["teacher_lastname"]; ?></center></td>
                                                                     <td><center><?php echo $record2["status"];?></center></td>
                                                                     <td><center><a href="#" class="btn btn-info btn-sm">Send</a></center></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            
                                                           
                                                        }
                                                            ?>
                                                            
														</tbody>
													</table>
												</div><!-- /.widget-main -->
										<!-- /.widget-body -->
										</div><!-- /.widget-box -->
                                            </div>
                                </div>
                                
                        </div>
                                        
                                        <div class="col-sm-5 infobox-container">
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-book"></i>
											</div>
                                            
                                                <script type="text/javascript">

                                                $(document).ready(function(){
                                                  countExam2();
                                                });

                                                function countExam2(){
                                                    $('#countExam2').load('countExam.php', function(){
                                                       setTimeout(countExam2, 2000);
                                                    });
                                                }
                                                </script>
                                            
											<div class="infobox-data">
												<span class="infobox-data-number" id="countExam2"></span>
												<div class="infobox-content">New exams</div>
											</div>

										</div>

										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-bullhorn"></i>
											</div>
                                            
                                                <script type="text/javascript">

                                                $(document).ready(function(){
                                                  countAnnouncement2();
                                                });

                                                function countAnnouncement2(){
                                                    $('#countAnnouncement2').load('countAnnounce.php', function(){
                                                       setTimeout(countAnnouncement2, 2000);
                                                    });
                                                }
                                                </script>
                                            
											<div class="infobox-data">
												<span class="infobox-data-number" id="countAnnouncement2"></span>
												<div class="infobox-content">New Announcement</div>
											</div>

										</div>

										<div class="infobox infobox-pink">
											<div class="infobox-icon">
												<i class="ace-icon glyphicon glyphicon-file"></i>
											</div>
                                            
                                                          
                                                <script type="text/javascript">

                                                $(document).ready(function(){
                                                  countNewClass();
                                                });

                                                function countNewClass(){
                                                    $('#countNewClass').load('countNewClass.php', function(){
                                                       setTimeout(countNewClass, 2000);
                                                    });
                                                }
                                                </script>

											<div class="infobox-data">
												<span class="infobox-data-number" id="countNewClass"></span>
												<div class="infobox-content">New Files</div>
											</div>
										
										</div>

										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-envelope"></i>
											</div>
                                            
                                                        
                                                <script type="text/javascript">

                                                $(document).ready(function(){
                                                  countPending();
                                                });

                                                function countPending(){
                                                    $('#countPending').load('countPending.php', function(){
                                                       setTimeout(countPending, 2000);
                                                    });
                                                }
                                                </script>

											<div class="infobox-data">
												<span class="infobox-data-number" id="countPending"></span>
												<div class="infobox-content">Pending request</div>
											</div>
										</div>
				
                                        </div>
                        
          
                                  <div class=" col-sm-5 scrollable" data-size="295" style="margin-top:30px;">
                                      <?php 
                                $count=0;
                                $query4="Select * from accounts_teacher";
                                  $result4 = mysqli_query($connection, $query4) or die(mysqli_error($connection));
                                while($record4 = mysqli_fetch_assoc($result4))
                                {
                                   ?>
                                        <div class="media search-media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" alt="72x72" src="<?php echo $record4["teacher_imgno"]; ?>" data-holder-rendered="true" style="width: 72px; height: 72px;">
                                    </a>
                                </div>

                                <div class="media-body">
                                    <div>
                                        <h4 class="media-heading">
                                            <a href="#" class="blue"><?php echo $record4["teacher_firstname"]; ?></a>
                                        </h4>
                                    </div>
                                    <p>About Me: <?php echo $record4["teacher_about"]; ?></p>

                                    <div class="search-actions text-center">

                                        <center><i class="ace-icon fa fa-book blue bigger-280" style="margin-top:15px;"></i></center>
                  
                                        <a class="search-btn-action btn btn-sm btn-block btn-info">View Subjects</a>
                                    </div>
                                </div>
                            </div> <?php
                  
                                }?>
                               
                        </div>
                     
                        
                        
                        <?php
                                
                            }
                        ?>
  
          
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<?php $Main -> foot1(); ?>
		</div><!-- /.main-container -->
</body>

    <script src="../assets/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/js/bootstrap-timepicker.min.js"></script>
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/daterangepicker.min.js"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
      var startDate;
      var endDate;
      var name;

      jQuery(function($) {
        $('#btn-search-query').click(function() {
        	$.ajax({
                type: "POST",
                url: "fetch-admin-dashboard-content.php",
                data: {teacher_name:$('#query').val()},
                success: function(data) {
                	$('#teachers').html(data);
	            }
	        });
        });

        $('input[name=date-range-picker]')
        .daterangepicker({
          'applyClass' : 'btn-sm btn-success',
          'cancelClass' : 'btn-sm btn-default',
          locale: {
            applyLabel: 'Apply',
            cancelLabel: 'Cancel',
          }
        }, function(start, end, label) {
        	if($('ul#myTab').find('li.active').data('id') == "teachers") {
        		$.ajax({
	                type: "POST",
	                url: "fetch-admin-dashboard-content.php",
	                data: {startDate:start.format('YYYY-MM-DD'), endDate:end.format('YYYY-MM-DD'), usertype:11},
	                success: function(data) {
	                	$('#teachers').html(data);
		            }
		        });
        	} else if($('ul#myTab').find('li.active').data('id') == "students") {
        		$.ajax({
	                type: "POST",
	                url: "fetch-admin-dashboard-content.php",
	                data: {startDate:start.format('YYYY-MM-DD'), endDate:end.format('YYYY-MM-DD'), usertype:111},
	                success: function(data) {
	                	$('#students').html(data);
		            }
		        });
        	}
        });  
        
        $(document).one('ajaxloadstart.page', function(e) {
          autosize.destroy('textarea[class*=autosize]')
          
          $('.limiterBox,.autosizejs').remove();
          $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });
      });
    </script>
</html>	