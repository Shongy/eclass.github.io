<?php

class Main
    {
       
        
        function head1()
        {
            
            ?>
                <head>
                    <?php if (!isset($_SESSION["user"])) { echo "<script> location.href='../index.php'; </script>";} ?>
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                <meta charset="utf-8" />
                    
                <link rel="icon" type="image/png" href="../assets/images/icons/examlogo.png">
       
                <title>eClass</title>

                <meta name="description" content="overview &amp; stats" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

                <!-- bootstrap & fontawesome -->
                <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
                <link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

                <!-- page specific plugin styles -->
                <link rel="stylesheet" href="../assets/css/dropzone.min.css" />
                <!-- text fonts -->
                <link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

                <!-- ace styles -->
                <link rel="stylesheet" href="../assets/css/ace.min1.css" class="ace-main-stylesheet" id="main-ace-style" />

                <!--[if lte IE 9]>
                    <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
                <![endif]-->
                <link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
                <link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
         

                <!--[if lte IE 9]>
                  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
                <![endif]-->

                <!-- inline styles related to this page -->

                <!-- ace settings handler -->
                <script src="../assets/js/ace-extra.min.js"></script>
                <script src="../assets/js/jquery-2.1.4.min.js"></script>
                <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
                 <script type="text/javascript">

                $(document).ready(function(){
                  countConfirmRegistration();
                });

                function countConfirmRegistration() {
                    $('#countConfirmRegistration').load('countAllAdminNotifications.php?notif=confirmregistration', function(){
                       setTimeout(countConfirmRegistration(), 2000);
                    });
                }

                $(document).ready(function(){
                  countPasswordReset();
                });

                function countPasswordReset() {
                    $('#countPasswordReset').load('countAllAdminNotifications.php?notif=passwordreset', function(){
                       setTimeout(countPasswordReset(), 2000);
                    });
                }

                $(document).ready(function(){
                  countExam();
                });

                function countExam(){
                    $('#countExam').load('countExam.php', function(){
                       setTimeout(countExam, 2000);
                    });
                }
                     

                $(document).ready(function(){
                  countAll();
                });

                function countAll(){
                    $('#countAll').load('countAll.php', function(){
                       setTimeout(countAll, 2000);
                    });
                }
               

                $(document).ready(function(){
                  countNotif();
                });

                function countNotif(){
                    $('#countNotif').load('countAll.php', function(){
                       setTimeout(countNotif, 2000);
                    });
                }
                

                $(document).ready(function(){
                  countNotif2();
                });

                function countNotif2(){
                    $('#countNotif2').load('countRequest.php', function(){
                       setTimeout(countNotif2, 2000);
                    });
                }
                

                $(document).ready(function(){
                  countAnnounce();
                });

                function countAnnounce(){
                    $('#countAnnounce').load('countAnnounce.php', function(){
                       setTimeout(countAnnounce, 2000);
                    });
                }
               

                $(document).ready(function(){
                  countFile();
                });

                function countFile(){
                    $('#countFile').load('countFile.php', function(){
                       setTimeout(countFile, 2000);
                    });
                }
                

                $(document).ready(function(){
                  refreshTable1();
                });

                function refreshTable1(){
                    $('#countRequest1').load('countRequest.php', function(){
                       setTimeout(refreshTable1, 2000);
                    });
                }
               

                $(document).ready(function(){
                  refreshTable();
                });

                function refreshTable(){
                    $('#countRequest').load('countRequest.php', function(){
                       setTimeout(refreshTable, 2000);
                    });
                }
              
                        </script> 
                <!--[if lte IE 8]>
                <script src="assets/js/html5shiv.min.js"></script>
                <script src="assets/js/respond.min.js"></script>
                <![endif]-->

                </head>

            
        <?php
             
            
                include("multiple.php");
            
        }

        function foot1()
        {
            ?>
             <div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120"><h8>
							<small><span class="blue bolder">electronic Classroom</span>
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

            <!-- basic scripts -->

            <!--[if !IE]> -->
         

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

            <!-- ace scripts -->
            <script src="../assets/js/ace-elements.min.js"></script>
            <script src="../assets/js/ace.min.js"></script>

            <!-- inline scripts related to this page -->
            <script type="text/javascript">
                jQuery(function($) {



                    //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
                    //so disable dragging when clicking on label
                    var agent = navigator.userAgent.toLowerCase();
                    if(ace.vars['touch'] && ace.vars['android']) {
                      $('#tasks').on('touchstart', function(e){
                        var li = $(e.target).closest('#tasks li');
                        if(li.length == 0)return;
                        var label = li.find('label.inline').get(0);
                        if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
                      });
                    }



                })
            </script>

    

        
            <?php
            }
            function navbar()
            {
                ?>
                <div id="navbar" class="navbar navbar-default navbar-fixed-top " >
                    <div class="navbar-container ace-save-state " id="navbar-container">
                        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                            <span class="sr-only">Toggle sidebar</span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-header pull-left">
                            <a href="../main/about.php" class="navbar-brand">
                                <small>
                                    <!--<img src="../assets/images/icons/examlogo.png" width='25' height='25' />-->
                                                  <i class="fa fa-book"></i>
               
                                    eCLASS
                                </small>
                            </a>
                        </div>

               
                        
                        <div class="navbar-buttons navbar-header pull-right" role="navigation">
                         
                            
                            <ul class="nav ace-nav">
                                
     
                                <li class="purple dropdown-modal">
                                    
                                     <?php if($_SESSION["usertype"] != 111)
                                        {?>
                                            <a id="dropdownID" data-toggle="dropdown" class="dropdown-toggle" href="">
                                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                                <span class="badge badge-important"><div class="countRequest" id="countRequest1"></div></span>
                                            </a>
  
                                    
                                        <?php
                                        }
                                            else
                                            {?>
                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                                <span class="badge badge-important"><div class="countAll" id="countAll"></div></span>
                                                </a>
                                    <?php
                                            }?>

                                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                        <li class="dropdown-header">
                                            
                                            <div>
                                            <i class="ace-icon fa fa-exclamation-triangle"></i>
                                                <?php if($_SESSION["usertype"] == 111) {?>
                                                 <span id="countNotif2"></span> Notifications    
                                                <?php } elseif($_SESSION["usertype"] == 11) {?>
                                                     <span id="countNotif"></span> Notifications  
                                                <?php } elseif($_SESSION["usertype"] == 1) { ?>
                                                    <span id="countAllAdminNotifications"></span> Notifications  
                                                <?php } ?>
                                              
                                            </div>
                                            
                                        </li>

                                        <li class="dropdown-content">
                                            <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                                
                                            <?php if($_SESSION["usertype"] == 11)
                                            {
                    
                                               echo" <li>";
                                                    
                                                       echo' <a href="#" id="requestID" data-toggle="modal" data-target="#myModal2" data-backdrop="static" data-keyboard="false">';
                                                        echo "<div class='clearfix'>";
                                                            echo "<span class='pull-left'>";
                                                               echo" <i class='btn btn-xs no-hover btn-pink fa fa-comment' ></i>";
                                                               echo" Request";
                                                            echo "</span>";
                                                           echo" <span class='pull-right badge badge-info badge-pink'><div class='countRequest' id='countRequest'></div></span>";
                                                        echo"</div>";
                                                    echo"</a>";
                                                    
                                               echo" </li>";?>
                             
                                                <?php
                                                }
                                                elseif($_SESSION["usertype"] == 1) { ?>
                                                    <li>
                                                        <a id="confirmregisration" href="#" data-toggle="modal" data-target="#" data-backdrop="static" data-keyboard="false">
                                                            <div class="clearfix">
                                                                <span class="pull-left">
                                                                    <i class="btn btn-xs no-hover btn-success fa fa-edit"></i>
                                                                    Confirm Regisration
                                                                </span>
                                                                <span class="pull-right badge badge-success"><div id="countConfirmRegistration"></div></span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a id="passwordreset" href="#" data-toggle="modal" data-target="#" data-backdrop="static" data-keyboard="false">
                                                            <div class="clearfix">
                                                                <span class="pull-left">
                                                                    <i class="btn btn-xs no-hover btn-success fa fa-edit"></i>
                                                                    Reset Password 
                                                                </span>
                                                                <span class="pull-right badge badge-success"><div id="countPasswordReset"></div></span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php } ?>    
                                             
                                                <?php
                                                    if($_SESSION["usertype"] == 111)
                                                {
                                                    ?>
                
        
                                                <li>
                                                    <a id="newExamID" href="#" data-toggle="modal" data-target="#myModal3" data-backdrop="static" data-keyboard="false">
                                                        <div class="clearfix">
                                                            <span class="pull-left">
                                                                <i class="btn btn-xs no-hover btn-success fa fa-edit"></i>
                                                                New Exam
                                                            </span>
                                                            <span class="pull-right badge badge-success"><div id="countExam"></div></span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                     <a id="announcementID" href="#"data-toggle="modal" data-target="#myModal4" data-backdrop="static" data-keyboard="false">
                                                        <div class="clearfix">
                                                            <span class="pull-left">
                                                                <i class="btn btn-xs no-hover btn-info fa fa-bullhorn"></i>
                                                                Announcement
                                                            </span>
                                                            <span class="pull-right badge badge-info"><div id="countAnnounce"></div></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                
                                                <li>
                                                     <a id="fileID" href="#"data-toggle="modal" data-target="#myModal6" data-backdrop="static" data-keyboard="false">
                                                        <div class="clearfix">
                                                            <span class="pull-left">
                                                                <i class="btn btn-xs no-hover btn-pink fa fa-book"></i>
                                                               Other
                                                            </span>
                                                            <span class="pull-right badge badge-pink"><div id="countFile"></div></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                                            
                                                <script type="text/javascript">
                                                $(document).on('click', '#fileID', function() {
                                                var exam_no = $(this).data('id');
                                                $.ajax({
                                                    type: "POST",
                                                    url: "reloadTableFile.php",
                                                    data: {exam_no:exam_no},
                                                    success: function() {
                                                       var myExampleTable = 
                                                        $('#mydata6')
                                                        .DataTable({
                                                            "bAutoWidth" : false,

                                                            "ajax" : "reloadTableFile.json",

                                                            "columns" : [
                                                                {"data" : "course_code"},
                                                                 {"data" : "type"},
                                                                {"data" : "exam_name"},
                                                                {"data" : "date_created"},
                                                                 {"data" : "view"}
                                                            ],

                                                             "bDestroy": true
                                                        });

                                                    }
                                                });
                                            }); 
                                                </script>
                                                
                                                <script type="text/javascript">
                                                $(document).on('click', '#newExamID', function() {
                                                var exam_no = $(this).data('id');
                                                $.ajax({
                                                    type: "POST",
                                                    url: "reloadTableExam.php",
                                                    data: {exam_no:exam_no},
                                                    success: function() {
                                                       var myExampleTable = 
                                                        $('#mydata3')
                                                        .DataTable({
                                                            "bAutoWidth" : false,

                                                            "ajax" : "reloadTableExam.json",

                                                            "columns" : [
                                                                {"data" : "course_code"},
                                                                {"data" : "exam_name"},
                                                                {"data" : "date_created"},
                                                                 {"data" : "view"}
                                                            ],

                                                             "bDestroy": true
                                                        });

                                                    }
                                                });
                                            }); 
                                                </script>
                                                
                                                <script type="text/javascript">
                                                $(document).on('click', '#announcementID', function() {
                                                var exam_no = $(this).data('id');
                                                $.ajax({
                                                    type: "POST",
                                                    url: "reloadTableAnnouncement.php",
                                                    data: {exam_no:exam_no},
                                                    success: function() {
                                                       var myExampleTable = 
                                                        $('#mydata4')
                                                        .DataTable({
                                                            "bAutoWidth" : false,

                                                            "ajax" : "reloadTableAnnouncement.json",

                                                            "columns" : [
                                                                {"data" : "course_code"},
                                                                {"data" : "exam_name"},
                                                                {"data" : "date_created"},
                                                                 {"data" : "view"}
                                                            ],

                                                             "bDestroy": true
                                                        });

                                                    }
                                                });
                                            }); 
                                                </script>
                                                
                                                  <script type="text/javascript">
                                                $(document).on('click', '#notificationID', function() {
                                                var exam_no = $(this).data('id');
                                                $.ajax({
                                                    type: "POST",
                                                    url: "reloadTableNotification.php",
                                                    data: {exam_no:exam_no},
                                                    success: function() {
                                                       var myExampleTable = 
                                                        $('#mydata5')
                                                        .DataTable({
                                                            "bAutoWidth" : false,

                                                            "ajax" : "reloadTableNotification.json",

                                                            "columns" : [
                                                                {"data" : "course_code"},
                                                                {"data" : "exam_name"},
                                                                 {"data" : "post_type"},
                                                                {"data" : "date_created"},
                                                                 {"data" : "view"}
                                                            ],

                                                             "bDestroy": true
                                                        });

                                                    }
                                                });
                                            }); 
                                                </script>
                                                
                                                <?php
                                                    }
                                                ?>
                                            </ul>
                                        </li>
                                   
                                             
                                     <?php
                                              
                                    ?>

                                        <li class="dropdown-footer">
                                            
                                        <?php
                                            if($_SESSION["usertype"]!=111)
                                            {?>
                                                 <a href="#"data-toggle="modal" data-target="#myModal2" data-backdrop="static" data-keyboard="false">
                                                See all notifications
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            <?php
                                             }
                                                else
                                                {?>
                                                <a href="#" id="notificationID" data-toggle="modal" data-target="#myModal5" data-backdrop="static" data-keyboard="false">
                                                See all notifications
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            <?php
                                                }?>
                                    
                                            
                                            
                                        </li>
                                        
                                        
                                    </ul>
    </li>
                            

                                

                                <li class="light-blue dropdown-modal">
                                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                         
                                        <?php
                                            if (isset($_SESSION["usertype"]))
                                            {
                                                
                                            
                                            $ref = $_SESSION["usertype"];
                                            if ($ref ==1)
                                            {   
                                                include("../redundant/_connection.php");
                                                $sql = "SELECT * FROM accounts_admin WHERE admin_account_no=".$_SESSION["user"];
                                               $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                if ($record = mysqli_fetch_assoc($qry))
                                                {
                                                    $fname = $record['admin_firstname'];
                                                    $uname = $record['admin_username'];
                                                    
                                                     $src= "../assets/images/default.png";
                                                    
                                                    if (is_file("../assets/images/admin/".$uname.".jpg"))
                                                    {
                                                        $src = "../assets/images/admin/".$uname.".jpg";
                                                    } 
                                                    
                                                    echo " <img class='nav-user-photo' style='width:40px;height:40px;' src='$src' alt='$fname' />";
                                                    echo "<span class='user-info'>";
                                                    echo "<small>Administrator,</small>";
                                                    echo $fname;
                                                    echo "</span>";
                                                    
                                                }
                                            }
                                         if ($ref ==11)
                                            {   
                                                include("../redundant/_connection.php");
                                                $sql = "SELECT * FROM accounts_teacher WHERE teacher_account_no=".$_SESSION["user"];
                                                $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                if ($record = mysqli_fetch_assoc($qry))
                                                {
                                                    $fname = $record['teacher_firstname'];
                                                    $uname = $record['teacher_username'];
                                                    
                                                    $src= "../assets/images/default.png";
                                                    
                                                    if (is_file("../assets/images/user-teachers/$uname/".$record["teacher_imgno"]))
                                                    {
                                                        $src = "../assets/images/user-teachers/$uname/".$record["teacher_imgno"];
                                                    }
                                                    
                                                    echo " <img style='width:40px;height:40px;' class='nav-user-photo' src='$src' alt='$fname' />";
                                                    echo "<span class='user-info'>";
                                                    echo "<small>Teacher,</small>";
                                                    echo $fname;
                                                    echo "</span>";
                                                    
                                                }
                                            }
                                         if ($ref==111)
                                            {   
                                                include("../redundant/_connection.php");
                                                $sql = "SELECT * FROM accounts_student WHERE student_account_no=".$_SESSION["user"];
                                               $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                if ($record = mysqli_fetch_assoc($qry))
                                                {
                                                    $fname = $record['student_firstname'];
                                                    $uname = $record['student_username'];
                                                    
                                                     $src= "../assets/images/default.png";
                                                    
                                                    if (is_file("../assets/images/user-students/$uname/".$record["student_imgno"]))
                                                    {
                                                        $src = "../assets/images/user-students/$uname/".$record["student_imgno"];
                                                    }
                                                    
                                                    echo "<img style='width:40px;height:40px;' class='nav-user-photo' src='$src' alt='$fname' />";
                                                    echo "<span class='user-info'>";
                                                    echo "<small>Student,</small>";
                                                    echo $fname;
                                                    echo "</span>";
                                                    
                                                }
                                            }
                                         }
                                    
                                        ?>
                                        
                                        

                                        <i class="ace-icon fa fa-caret-down"></i>
                                    </a>

                                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                       

                                        <li>
                                            <a href="../main/profile.php">
                                                <?php if($_SESSION["usertype"] == 1) {?>
                                                    <i class="ace-icon fa fa-desktop"></i>
                                                    General
                                                <?php } else { ?>
                                                    <i class="ace-icon fa fa-user"></i>
                                                    Profile
                                                <?php } ?>
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="../main/logout.php">
                                                <i class="ace-icon fa fa-power-off"></i>
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
    </li>

                            </ul>
                        </div>
                        
                     </div><!-- /.navbar-container -->
                </div>
                <?php
            }
            function slider ($active,$subactive)
            {
                ?>
               
                    <script type="text/javascript">
                        try{ace.settings.loadState('main-container')}catch(e){}
                    </script>

                    <div id="sidebar" class="sidebar responsive sidebar-fixed">
                    
                        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                     <img src="../assets/images/icons/logoEexam.png" style="width:180px;height:100px">

                            </div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        
						<img src="../assets/images/icons/examlogo.png" style="width:30px;height:30px"> 
                         
					</div>
				</div><!-- /.sidebar-shortcuts -->
                        <ul class="nav nav-list">
                            <?php
                                if ($active == "dashboard")
                                {
                                    ?>
                                    <li class="active">
                                    <a href="../main/dashboard.php">
                                        <i class="menu-icon fa fa-tachometer"></i>
                                        <span class="menu-text"> Dashboard </span>
                                    </a>

                                    <b class="arrow"></b>

                                    </li> <?php
                                }
                                else
                                {
                                    ?>
                                    <li class="">
                                    <a href="../main/dashboard.php">
                                        <i class="menu-icon fa fa-tachometer"></i>
                                        <span class="menu-text"> Dashboard </span>
                                    </a>

                                    <b class="arrow"></b>

                                    </li> <?php
                                }
                                if($_SESSION["usertype"] == 1) { 
                                    if ($active =="Profile") { ?>
                                    <li class="active">
                                        <a href="profile.php">
                                            <i class="menu-icon fa fa-desktop"></i>
                                            <span class="menu-text"> General </span>
                                        </a>
                                    </li>
                                    <?php } else { ?>
                                     <li class="">
                                        <a href="profile.php">
                                            <i class="menu-icon fa fa-desktop"></i>
                                            <span class="menu-text"> General </span>
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                    <?php } ?>
                                <?php } else {
                                    if ($active =="Profile") { ?>
                                    <li class="active">
                                        <a href="../main/profile.php">
                                            <i class="menu-icon fa fa-user"></i>
                                            <span class="menu-text"> My Profile </span>

                                            <b class="arrow"></b>
                                        </a>

                                        
                                       
                                    </li> <?php
                                }
                                else
                                {
                                    ?>
                                    <li class="">
                                        <a href="../main/profile.php">
                                            <i class="menu-icon fa fa-user"></i>
                                            <span class="menu-text"> My Profile </span>

                                            <b class="arrow"></b>
                                        </a>

                                        
                                    
                                          
                                          

                                    </li> <?php
                                }
                                }
                                
                                if($_SESSION["usertype"] == 1) { ?>
                                   
                                <?php } else {
                                 
                                if($active == "timeline")
                                {
                                    ?>
                                        <li class="active">
                                                <a href="../main/timeline.php">
                                                    <i class="menu-icon fa fa-bookmark"></i>
                                                    My Exams
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <li class="">
                                                <a href="../main/timeline.php">
                                                    <i class="menu-icon fa fa-bookmark"></i>
                                                    My Exams
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                    <?php
                                }
                            
                                    
                                    
                                    
                                    
                                    
                                if ($active == "course")
                                { ?>
                                
                            
                            <li class="active">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-list"></i>
                                            <span class="menu-text">My Subjects </span>

                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>

                                        <ul class="submenu">

                                        <?php

                                        include("../redundant/_connection.php");
                                        if ($_SESSION["usertype"]!=111)
                                        {
                                        $sql="SELECT * FROM `courses` WHERE `teacher_account_no`=".$_SESSION["user"]." ORDER BY `course_code`";
                                           
                                        
                                        $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $href = $row["class_code"];
                                                $code = $row["course_code"];
                                                $stat = $row["status"];
                                                if ($stat=="Active")
                                                {  
                                                    if($href==$subactive)
                                                    {
                                                        echo "<li class='active'>";
                                                    }
                                                    else
                                                    {
                                                        echo "<li class=''>";
                                                    }
                                                
                                                    
                                                echo "<a href='../main/mycourse.php?classcode=$href'>";
                                                echo "<i class='menu-icon fa fa-asterisk'></i>";
                                                echo  $code;
                                                echo "</a><b class='arrow'></b></li>";
                                                }
                                            }
                                        }


                                        ?>
                                        <li class="">
                                        <a href="#" data-toggle="modal" data-target="#myModalCreate">
                                            <i class="menu-icon glyphicon glyphicon-plus"></i>
                                            Create new Subject
                                        </a>
                                        <b class="arrow"></b>
                                        </li>
                                        <?php }
                                        else
                                        {

                                        $sql="SELECT DISTINCT `class_code` FROM `enrolled_students` WHERE `student_account_no`='".$_SESSION["user"]."'";
                                        $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $href = $row["class_code"];

                                                $sql2="SELECT * FROM `courses` WHERE `class_code`='".$href."'";
                                                $result2 = mysqli_query ($connection, $sql2) or die (mysqli_error($connection));
                                                if (mysqli_num_rows($result2)>0)
                                                {
                                                    while($row2 = mysqli_fetch_assoc($result2))
                                                    {
                                                        $href2 = $row2["class_code"];
                                                        $code = $row2["course_code"];

                                                            $count=0;
                                                            $student_account_no=$_SESSION["user"];
                                                         $query="Select * from posts INNER JOIN file_details ON posts.post_no = file_details.post_no INNER JOIN enrolled_students ON posts.class_code = enrolled_students.class_code where student_account_no='$student_account_no' and posts.class_code='$href2' and viewed=". 0 ."";

                                                        $result3=mysqli_query($connection,$query) or die (mysqli_error($connection));
                                                        while(mysqli_fetch_assoc($result3))
                                                        {
                                                            $count=$count+1;
                                                        }
                                                        $countF=$count;

                                                        if($countF>0)
                                                        {
                                                            if($href==$subactive)
                                                            {
                                                                echo "<li class='active'>";
                                                            }
                                                            else
                                                            {
                                                                echo "<li class=''>";
                                                            }
                                                        
                                                        echo "<a href='../main/mycourse.php?classcode=$href2'id='countExamCode' value='$code'>";
                                                        echo "<i class='menu-icon fa fa-asterisk'></i>";
                                                        echo  "<i>$code<span class='badge badge-danger'><div id='countF'>$countF</div></span></i>";
                                                        echo "</a><b class='arrow'></b></li>";
                                                        }
                                                        else
                                                        {
                                                        echo "<li class=''>";
                                                        echo "<a href='../main/mycourse.php?classcode=$href2'>";
                                                        echo "<i class='menu-icon fa fa-asterisk'></i>";
                                                        echo  "<i>$code</i>";
                                                        echo "</a><b class='arrow'></b></li>";
                                                        }

                                                    }
                                                }



                                            }
                                        } 



                                        ?>
                                            
                                        <li class="">
                                        <a href="../main/joinNewClass.php">
                                            <i class="menu-icon glyphicon glyphicon-plus"></i>
                                            Join new subject
                                        </a>
                                        <b class="arrow"></b>
                                        </li><?php
                                            }
                                        ?>

                                               
                                                   
                                                
                                        </ul>
                                    </li>
                            
                            
                            
                            
                         <?php   }
                                else
                                {
                            ?>
                                <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-list"></i>
                                            <span class="menu-text">My Subjects </span>

                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>

                                        <ul class="submenu">

                                        <?php

                                        include("../redundant/_connection.php");
                                        if ($_SESSION["usertype"]!=111)
                                        {
                                        $sql="SELECT * FROM `courses` WHERE `teacher_account_no`=".$_SESSION["user"]." ORDER BY `course_code`";
                                         
                                        $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $href = $row["class_code"];
                                                $code = $row["course_code"];
                                                $stat = $row["status"];
                                                if ($stat=="Active")
                                                {  
                                                  
                                                        echo "<li class=''>";
                                                    
                                                    
                                                echo "<a href='../main/mycourse.php?classcode=$href'>";
                                                echo "<i class='menu-icon fa fa-asterisk'></i>";
                                                echo  $code;
                                                echo "</a><b class='arrow'></b></li>";
                                                }
                                            }
                                        }


                                        ?>
                                        <li class="">
                                        <a href="#" data-toggle="modal" data-target="#myModalCreate">
                                            <i class="menu-icon glyphicon glyphicon-plus"></i>
                                            Create new Subject
                                        </a>
                                        <b class="arrow"></b>
                                        </li>
                                        <?php }
                                        else
                                        {

                                        $sql="SELECT DISTINCT `class_code` FROM `enrolled_students` WHERE `student_account_no`='".$_SESSION["user"]."'";
                                        $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $href = $row["class_code"];

                                                $sql2="SELECT * FROM `courses` WHERE `class_code`='".$href."'";
                                                $result2 = mysqli_query ($connection, $sql2) or die (mysqli_error($connection));
                                                if (mysqli_num_rows($result2)>0)
                                                {
                                                    while($row2 = mysqli_fetch_assoc($result2))
                                                    {
                                                        $href2 = $row2["class_code"];
                                                        $code = $row2["course_code"];

                                                            $count=0;
                                                            $student_account_no=$_SESSION["user"];
                                                         $query="Select * from posts INNER JOIN file_details ON posts.post_no = file_details.post_no INNER JOIN enrolled_students ON posts.class_code = enrolled_students.class_code where student_account_no='$student_account_no' and posts.class_code='$href2'and viewed=". 0 ."";

                                                        $result3=mysqli_query($connection,$query) or die (mysqli_error($connection));
                                                        while(mysqli_fetch_assoc($result3))
                                                        {
                                                            $count=$count+1;
                                                        }
                                                        $countF=$count;

                                                        if($countF>0)
                                                        {
                                                        echo "<li class=''>";
                                                        echo "<a href='../main/mycourse.php?classcode=$href2' id='countExamCode' value='$code'>";
                                                        echo "<i class='menu-icon fa fa-asterisk'></i>";
                                                        echo  "<i>$code<span class='badge badge-danger'><div id='countF'>$countF</div></span></i>";
                                                        echo "</a><b class='arrow'></b></li>";
                                                        }
                                                        else
                                                        {
                                                        echo "<li class=''>";
                                                        echo "<a href='../main/mycourse.php?classcode=$href2'>";
                                                        echo "<i class='menu-icon fa fa-asterisk'></i>";
                                                        echo  "<i>$code</i>";
                                                        echo "</a><b class='arrow'></b></li>";
                                                        }

                                                    }
                                                }



                                            }
                                        }                                   

                                        ?>
                                            
                                            <script type="text/javascript">
                                          $(document).on('click','#countExamCode',function()
                                         {
                                            var code=$(this).val(); 
                                              $.ajax({
                                                  type:"POST",
                                                  url:"updateAll.php",
                                                  data:{code:code},
                                                   success: function(data) {
                                                    $('#coountF').html(data);          
                                                    }
                                              });
                                                    
                                              
                                        });
 
                                                
                                            </script>
                                            
                                        <li class="">
                                         <a href="../main/joinNewClass.php">
                                            <i class="menu-icon glyphicon glyphicon-plus"></i>
                                            Join new subject
                                        </a>
                                        <b class="arrow"></b>
                                        </li><?php
                                            }
                                        ?>

                                               
                                                   
                                                
                                        </ul>
                                    </li>
                            <?php
                        }
                    }
                            
                               
                                if ($active == "about")
                                {?>
                            
                                 <li class="active">
                                        <a href="about.php">
                                            <i class="menu-icon fa fa-info-circle"></i>
                                            <span class="menu-text"> About </span>
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                            <?php
                            } 
                                else
                                {
                                ?>
                                <li class="">
                                        <a href="about.php">
                                            <i class="menu-icon fa fa-info-circle"></i>
                                            <span class="menu-text"> About </span>
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                <?php
                            } ?>
                        </ul><!-- /.nav-list -->

                        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                        </div>
                    </div>


                <?php
        }
        function timer($dateVal,$id)
        {
            ?>
            <script>
                // Set the date we're counting down to
                    var countDownDate;
                    var x;
                    var now;
                    var distance;
                    var days;
                    var hours;
                    var minutes;
                    var seconds;
                    countDownDate = new Date("<?php echo $dateVal; ?>").getTime();

                x = setInterval(function() {
                    
                   
                    // Get todays date and time
    now = new Date('<?php $dtz = new DateTimeZone("Asia/Manila");$start_date=new DateTime(date(''), $dtz); echo $start_date->format("Y/m/d H:i:s");?> ').getTime(); 

                    // Find the distance between now an the count down date
                    distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Output the result in an element with id="demo"
                    document.getElementById("<?php echo $id; ?>").innerHTML =  days + "d : " +hours + "h : " + minutes + "m : " + seconds +"s to go";

                    // If the count down is over, write some text 
                    if (distance < 0) {
                        clearInterval(x);
                        <?php 
            
                        if($_SESSION["usertype"]==111)
                        { ?>
                            document.getElementById("<?php echo $id; ?>").innerHTML = "<a href='examination.php?refid=<?php echo $id; ?>&cc=<?php echo $_SESSION["classcode"]; ?>'><i class='ace-icon fa  fa-external-link blue'></i>CLICK HERE TO TAKE THE EXAM</a>";
                        <?php 
                        }
                        else
                        { ?>
                        document.getElementById("<?php echo $id; ?>").innerHTML = "<a href='#'><i class='ace-icon fa  fa-info-circle blue'></i>EXAM IS NOW AVAILABLE</a>";
                        $('#tobehide').removeClass("hidden");
                        $('#editexam').addClass("hidden");
                        <?php } ?>
                    }
                }, 1000);
                </script>
            <?php

        }
        
            
        function page_header($active)
        {
            ?>
            <div class="page-header">
            <?php
            if($active =="dashboard")
            {
                ?>
                <h1>
				Dashboard
                    <small>
				        <i class="ace-icon fa fa-angle-double-right"></i>
				        overview 
				    </small>
				</h1>
						
                <?php
            }
            
            if ($active =="class")
            {
                ?>
                <h1>
				Classes
                    <small>
				        <i class="ace-icon fa fa-angle-double-right"></i>
				        My class 
				    </small>
				</h1>
                <?php
            }
          
               // <div class="nav-search" id="nav-search">
				//			<form class="form-search" method="post" action="../main/search.php">
				//				<span class="input-icon">
				//					<input type="TEXT" placeholder="Search ..." class="nav-search-input"  name="searchbar" autocomplete="off" />
				//					<i class="ace-icon fa fa-search nav-search-icon"></i>
                                    
				//				</span>
				//			</form>
					//	</div><!-- /.nav-search -->
               
            echo"</div>";
        }
                
    
    }
    
?>