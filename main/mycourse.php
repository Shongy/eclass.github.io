<!DOCTYPE html>
<html lang="en">    
<?php
    session_start();
    include_once("../redundant/Main.php");
    $Main = new Main; 
     include("../redundant/_connection.php");
                   if(isset($_GET["post_no"]))
                {
                    if (isset($_GET["classcode"]))
                        {
                        $_SESSION["classcode"]=$_GET["classcode"];
                        $_SESSION["post_no"]=$_GET["post_no"];
                        }
                }
                else
                {
                    if (isset($_GET["classcode"]))
                        {
                        $_SESSION["classcode"]=$_GET["classcode"];
                        }
                }

    $Main -> head1() ?>
    <head>
       
        <meta name="description" content="Drag &amp; drop file upload with image preview" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="../assets/css/jquery.gritter.min.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-timepicker.min.css" />
        <link rel="stylesheet" href="../assets/css/daterangepicker.min.css" />
        <link rel="stylesheet" href="../assets/css/dropzone.min.css" />
        
        <script >

// JavaScript Document
var Timer;
var TotalSeconds;

function CreateTimer(TimerID, Time){
    var oop=this;
	this.Timer = document.getElementById(TimerID);
	this.TotalSeconds = Time;
	this.update();
	oop.to=setTimeout(function(){ oop.tick(); }, 1000);
}

CreateTimer.prototype={

 tick:function(){
    var oop=this;
	if (this.TotalSeconds <= 0){
		return;
	}
	this.TotalSeconds -= 1;
	this.update()
	oop.to=setTimeout(function(){ oop.tick(); }, 1000);
 },

 update:function(){
 	var Seconds = this.TotalSeconds,Days = Math.floor(Seconds / 86400);
	Seconds -= Days * 86400;
	var Hours = Math.floor(Seconds / 3600);
	Seconds -= Hours * (3600);
	var Minutes = Math.floor(Seconds / 60);
	Seconds -= Minutes * (60);
     
     
	var TimeStr = ((Days > 0) ? Days + " day(s) " : "") +
	LeadingZero(Hours) + " h : " + LeadingZero(Minutes) + " m : " + LeadingZero(Seconds) + " s";
    
    
	this.Timer.innerHTML = "<strong>" + TimeStr + "</strong>";
     
     
 }

}


function LeadingZero(Time){
	return (Time < 10) ? "0" + Time : + Time;
}

</script>
<style>


   .affix {
      top: 1;
      width: 100%;
      z-index: 9999 !important;
  }

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
    
    
</head>
    <body class="skin-2">
       
    <?php  $Main -> navbar() ?>
    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
        </script>
        <?php  $Main -> slider("course",$_SESSION["classcode"]);?>
       
        
        <div class="main-content">
          
            <div class="main-content-inner">
					<?php
               
                
               
                    
                    $sql = "SELECT * FROM `courses` WHERE `class_code` ='".$_SESSION["classcode"]."'";
                    $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                    if ($record = mysqli_fetch_assoc($qry))
                    {
                       $desctitle = $record["course_title"];
                        $coursecode =$record["course_code"];
                        $classcode =$record["class_code"];
                        $datecreated = $record["datecreated"];
                        $teacher = $record["teacher_account_no"];
                        $stat = $record["status"];
                        $hdr = "class = 'blue'";
                        if ($stat == "Inactive")
                        {
                            $hdr = "class = 'red'";
                        }
                        
                    }
                
                
                
                
                ?>
                 <div >
                    <div class="container-fluid <?php echo $hdr;?>" id="myHeader">
                        <nav class="action-buttons" >
                                     <?php if ($_SESSION["usertype"]!=111) {?>
                                        <div class="navbar-header">
                                      <strong>
                                            <a class="navbar-brand <?php echo $hdr;?>" href="#" data-toggle="modal" data-target="#myModalDesc"><?php echo $desctitle; ?></a></strong>
                                        </div>
                                    <ul class="nav navbar-nav">
                                       
                                        <li>
                                           
                                             <a  href="#"  data-toggle="modal" data-target="#myModalUploadFiles"><i class="ace-icon fa fa-plus-circle"></i> Post Files</a>
                                              
                                        </li>

                                        <li>
                                               
                                                 <a  href="#"  data-toggle="modal" data-target="#myModalCreateExam"><i class="ace-icon fa fa-plus-circle"></i> Create Exam</a>
                                                
                                        </li>
                                    
                                                                     
                                        <li>
                                                 
                                              <a  href="#"  data-toggle="modal" data-target="#myModalPost"><i class="ace-icon fa fa-certificate"></i> Post Announcement</a>
                                               
                                        </li>
                                        <li>
                                            
                                                <a style="margin-bottom:8px;"  href="#" data-toggle="modal" data-target="#myModalAddStudent"><i class="ace-icon fa fa-plus-circle"></i> Add Students</a>

                                        </li>
                                        <li>
                                               
                                             
                                                <a style="margin-bottom:8px;"  href="#" data-toggle="modal" data-target="#myStudentsModal"><i class="ace-icon fa fa-eye"></i> View Student List</a>
                                        </li>
                                         <li>
                                             
                                               <a  href="#"  data-toggle="modal" data-target="#myModalUpload"><i class="ace-icon glyphicon glyphicon-upload"></i> Upload Grades</a>
                                               
                                        </li> 
                                        
                                     
                                    
                                    </ul>
                            <?php }
                                        else
                                        { ?>
                            
                            
                                            <div class="navbar-header">
                                      <strong><h2>
                                            <a class="navbar-brand pull-right <?php echo $hdr;?>" href="#" data-toggle="modal" data-target="#myModalDesc"><?php echo $desctitle; ?>:</a></h2></strong>
                                        </div>
                                    <ul class="nav navbar-nav">
                                       
                                        <li>
                                           <?php
                                            $sql = "SELECT * FROM `accounts_teacher` WHERE `teacher_account_no` ='".$teacher."'";
                                            $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                            if ($record = mysqli_fetch_assoc($qry))
                                            {
                                               $fname = $record["teacher_firstname"];
                                                $mname =$record["teacher_middleinitial"];
                                                $lname =$record["teacher_lastname"];
                                            }
                                           
                                            ?>
                                            
                                             <strong><h5 class="blue center">Your Teacher:</h5></strong>
                                              
                                             <ul class="nav navbar-nav">
                                                <li>
                                           
                                                     <a  href="viewprofile.php?refid=<?php echo $teacher; ?>&usertype=11"><i class="ace-icon fa fa-user"></i>  
                                                         <?php echo $fname." ".$mname." ".$lname; ?></a>

                                                </li>

                                            
                                            </ul>
                                            
                                        </li>
                                        
                                    
                                    </ul>
                                            
                                      <?php  }?>
                                        
                                        </nav>
                        </div>
                </div>
                    
					<div class="page-content">
                        
                        
                        <div class="row">
                            
                     
                            
                              
                        

                      
                          <div class="container">
                              
                              <div class="header"><b><h4 id="post">Posts from the subject</h4></b>
                          
                                </div>
                              
                                <div id="postData">
                                <?php
                                    //$dom = new DOMDocument();
                                    //$dom->loadHTMLfile('http://remoteDomain/thispage.html');
                                    //$_SESSION["all"]="*";
                                    //$all=$_SESSION["all"];
                                    
                                     if(!isset($_GET["post_no"]))
                                    {
                                          $sql = "SELECT * FROM `posts` WHERE class_code = '".$_SESSION["classcode"]."'  ORDER BY post_no DESC";
                                    }
                                    else
                                    {
                                            $post_noF=$_SESSION["post_no"];
                                          $sql = "SELECT * FROM `posts` WHERE class_code = '".$_SESSION["classcode"]."' and post_no='$post_noF'  ORDER BY post_no DESC";
                                    }
                                    
                                    $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                        if (mysqli_num_rows($result)>0)
                                        {
                                            echo "<script> document.getElementById('post').innerHTML ='<b>POSTS FROM SUBJECT</b>'; </script>";
                                            
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $post_title = $row["post_title"];
                                                $post_desc = $row["post_desc"];
                                                $postdate = $row["posted_date"];
                                                $post_no = $row["post_no"];
                                                $post_type = $row["post_type"];
                                               
                                                
                                                echo "<div class='card action-buttons clearfix'> <div class='row' style='width: 100%'>";
                                                if ($_SESSION["usertype"]!=111)
                                                {
                                                    echo "<button type='button' class='close deletemc' id=$post_no><i class='ace-icon fa fa-trash pull-right'></i></button> ";
                                                }
                                                
                                                echo "
                                                  <h2>$post_title</h2>
                                                  <h5>$postdate</h5><p>";
                                                
                                                
                                                  if($post_type == "announcement")
                                                  {
                                                      echo $post_desc;
                                                  }
                                                
                                                
                                                  echo "</p><div class='fakeimg clearfix' style='width:100%;'>
                                                ";
                                                  
                                                  $sql2 = "SELECT * FROM `file_details` WHERE `post_no` =".$post_no;
                                                  
                                                  $result2 = mysqli_query ($connection, $sql2) or die (mysqli_error($connection));
                                                        
                                                    if (mysqli_num_rows($result2)>0)
                                                    {
                                                        $count= 1;
                                                        if ($post_type=="files" )
                                                            {
                                                                echo "<center><strong>Click Files To Download</strong></center>";
                                                            }
                                                        while($row2 = mysqli_fetch_assoc($result2))
                                                        {
                                                            $filename = $row2["file_name"];
                                                            $filelink = $row2["file_link_or_path"];
                                                            
                                                            if ($post_type=="files" )
                                                            {
                                                                echo "<h4><strong>$count.)</strong><a href='$filelink'>$filename</a></h4>";
                                                                $count= $count+1;
                                                            }
                                                            
                                                            
                                                            
                                                            elseif ($post_type=="link")
                                                            {
                                                               
                                                                echo "<center><iframe width='420' height='345' src='../../../$filelink?autoplay=1'></iframe><center>";
                                                            }
                                                            
                                                            
                                                            
                                                            elseif($post_type=="announcement")
                                                            {
                                                                echo "<h4>$filename</h4>";
                                                            }
                                                            
                                                            
                                                            
                                                            
                                                            elseif($post_type=="exam")
                                                            {
                                                                
                                                                $sql3 = "SELECT * FROM `exams` WHERE `exam_no` =".$filelink;
                                                                $result4 = mysqli_query ($connection, $sql3);
                                                                if ($record4 = mysqli_fetch_assoc($result4))
                                                                {
                                                                    $exam_no = $record4["exam_no"];
                                                                    $desc = $record4["exam_description"];
                                                                    $avail = $record4["availability"];
                                                                    $time_limit = $record4["time_limit"];
                                                                    $examdate = $record4["exam_date"];
                                                                    $exam_password = $record4["exam_password"];
                                                                    $examdateend = $record4["exam_date_expired"];
                                                                    if(($_SESSION["usertype"]!=111))
                                                                   {


                                                                        $now = new DateTime();
                                                                        
                                                                        if($examdate < $now)
                                                                        {

                                                                        }
                                                                        else
                                                                        {
                                                                            echo "<strong><p id='editexam' class='pull-right'><a href='createexam.php?refid=$filelink&postno=$post_no' class='pull-right'>Edit Exam</a>";
                                                                        }



                                                                   }
                                    
                                    
                                    
                                        ?>
                                                                    
                                                                    <dl class="dl-horizontal" id="dl">
                                                                    <h4>
                                                                    <dt>Exam Description:</dt>
                                                                        <dd><p><?php echo $desc; ?></p></dd>
                                                                    <dt>Exam Start @:</dt>
                                                                       <dd >
                                                                           <?php
                                                                                $dtz2 = new DateTimeZone("Asia/Manila");
                                                                                $date = new DateTime($examdate,$dtz2);
                                                                                echo $date->format('m/d/Y h:i a') ;
                                                                            ?>
                                                                           </dd>
                                                                        <dt>Exam End @:</dt>
                                                                       <dd >
                                                                           <?php
                                                                    
                                                                                $date1 = new DateTime($examdateend,$dtz2);
                                                                                echo $date1->format('m/d/Y h:i a') ;
                                                                            ?>
                                                                    <dt>Time Limit:</dt>
                                                                        <dd>  <?php echo $time_limit." Minutes"; ?></dd>

                                                                    <dt>Availability:</dt>
                                                                       <dd ><div id='<?php echo $exam_no; ?>' class="timer"></div></dd>
                                                                        
                                                                    </h4>
                                                                    </dl>
                                    
                                                                    <?php  if($_SESSION["usertype"] == 11) { ?>
                                                                        <div class="hidden" id="tobehide">
                                                                             <div class="alert alert-info">
                                                                            <button type="button" class="close" data-dismiss="alert">
                                                                            <i class="ace-icon fa fa-times"></i>
                                                                            </button>
                                                                            <strong>Note:</strong>
                                                                                You can download results to .pdf, .xlxs
                                                                            </div>
                                                                        <h5><a href="#myTableOfSpecificationModal" class="open-tosmodal" data-target="#myTableOfSpecificationModal" data-toggle="modal" data-id="<?php echo $exam_no; ?>"><i class="ace-icon fa fa-list"></i> Item Analysis</a></h5>

                                                                         <h5><a href="#example" class="open-example" data-target="#example" data-toggle="modal" data-id="<?php echo $exam_no; ?>"><i class="ace-icon fa fa-list"></i> Examination Result</a></h5>
                                                                            </div>
                                                                    <?php } 
                                                                  
                                                                  
                                                                       
                                                                   
                                                                
                                                                    
                                                                }
                                                                
                                                            }
                                                            
                                                    

                                                        }
                                                    }
                                                  
                                                
                                                  echo "</div>
                                                 
                                                 
                                                </div></div>";
                                                
                                                
                                            }
                                         }else
                                        {
                                            echo "<script> document.getElementById('post').innerHTML ='NO POST YET'; </script>";
                                          }
                                
                                ?>
                                </div>
                           </div>     
                        
                        
                            
                      
                        </div>
                            

                                    
                         
                        
                              <?php if ($_SESSION["usertype"]!=111)
{ ?>
                            
                        
                                
            <div id="myStudentsModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
               
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title blue"><center><strong><?php echo $coursecode." - ".$desctitle; ?></strong></center></h4>
              </div>
              <div class="modal-body">
                 <div class="ace-settings-container" id="ace-settings-container">
                   <div class="btn btn-app btn-xs btn-info ace-settings-btn" id="ace-settings-btn">
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
                <div>
                 <table id="dynamic-table" class="table table-bordered table-click table-hover" style="font-size:11px;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>College</th>
                            <th>Program</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM `accounts_student` ";
                        $sql .= "INNER JOIN `enrolled_students` ON accounts_student.student_account_no = enrolled_students.student_account_no WHERE `class_code` = '$classcode'";
                        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                        while($record = mysqli_fetch_assoc($result)) {                                                                                      
                        ?>
                             <tr>
                                <td>
                                 <a href="viewprofile.php?refid=<?php echo $record["student_account_no"];?>&usertype=111"><?php echo $record["student_firstname"]." ".$record["student_middleinitial"]." ".$record["student_lastname"]; ?></a>
                                </td>

                                <td>
                                    <?php echo $record["student_program"]; ?>
                                </td>
                                <td><?php echo $record["student_major"]; ?></td>
                                                                                    
                            </tr>   
                <?php }?>
            </tbody>
        </table>
                </div>
                  
              </div>
             
            </div>

          </div>
    </div>
    
    <div class="modal fade" id="myTableOfSpecificationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header" style="background-color:skyblue;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title white bigger"><center><strong>Item Analysis</strong></center></h4> 
                 </div>
                 <div id="myTableOfSpecificationModal-body" style="height: 500px;overflow: scroll;" class="modal-body">
                     
                </div> 
                 
                 <button class="btn btn-block btn-info center" onclick="printDiv()">Print</button>
            </div>
        </div>
    </div> 
    
    <div class="modal fade" id="myTableOfExaminationResultModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header" style="background-color:skyblue;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title white bigger"><center><strong>Item Analysis</strong></center></h4> 
                 </div>
                 <div id="myTableOfExaminationResultModal-body" style="height: 500px;overflow: scroll;" class="modal-body">

                </div>
                 
            </div>
        </div>
    </div> 

    <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header" style="background-color:skyblue;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title white bigger"><center><strong>Examination Result</strong></center></h4>
                        <div class="pull-right tableTools-container1"></div> 
                 </div>

                 <div id="example-body" style="height: 500px;overflow: scroll;" class="modal-body">
                    <table id="example-table" class="table table-bordered">
                        <thead>
                            <th>
                                Student Name
                            </th>
                            <th>
                                Score
                            </th>
                        </thead>
                    </table>
                </div>                                                        
            </div>
        </div>
    </div> <?php } ?>
                    
                
        </div>
    
                        </div>
    
  
            </div></div>
   
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

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>
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
        <script src="../assets/js/jquery.gritter.min.js"></script>
        <script src="../assets/js/bootstrap-datepicker.min.js"></script>
		<script src="../assets/js/bootstrap-timepicker.min.js"></script>
		<script src="../assets/js/moment.min.js"></script>
		<script src="../assets/js/daterangepicker.min.js"></script>
		<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="../assets/js/bootstrap-tag.min.js"></script>
        

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
             window.onscroll = function() {
                
                 
                 
                 myFunction1()};

            var header = document.getElementById("myHeader");
            var sticky = header.offsetTop;

            function myFunction1() {
              if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
              } else {
                header.classList.remove("sticky");
              }
            }
            
            function myFunction(exam_password, filelink, class_code) {
            var input_password = prompt("Please enter the examination password:");
                if(input_password == exam_password) {
                    document.location.href = "examination.php?refid=" + filelink + "&cc=" + class_code;
                } else {
                    alert("Opps! You've entered a wrong password.");
                }
            }
            
			jQuery(function($) {
				
				//datepicker plugin
				//link
                $( document ).ready(function() {
                      
                });

				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false,
					disableFocus: true,
                    defaultTime: '00:30:00',
					icons: {
						up: 'fa fa-chevron-up',
						down: 'fa fa-chevron-down'
					}
				}).on('focus', function() {
					$('#timepicker1').timepicker('showWidget');
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
                
                $('#showpass').on('click', function() {
					var inp = document.getElementById('exam_password');
           
					if(inp.type==="password") {
						inp.type="text";
					}
					else {
                   
                        inp.type="password";
						
					}
				});
				
				
			
				
				if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
				 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
				 icons: {
					time: 'fa fa-clock-o',
					date: 'fa fa-calendar',
					up: 'fa fa-chevron-up',
					down: 'fa fa-chevron-down',
					previous: 'fa fa-chevron-left',
					next: 'fa fa-chevron-right',
					today: 'fa fa-arrows ',
					clear: 'fa fa-trash',
					close: 'fa fa-times'
				 }
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
                
                
				if(!ace.vars['old_ie']) $('#date-timepicker2').datetimepicker({
				 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
				 icons: {
					time: 'fa fa-clock-o',
					date: 'fa fa-calendar',
					up: 'fa fa-chevron-up',
					down: 'fa fa-chevron-down',
					previous: 'fa fa-chevron-left',
					next: 'fa fa-chevron-right',
					today: 'fa fa-arrows ',
					clear: 'fa fa-trash',
					close: 'fa fa-times'
				 }
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
                
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				
				//$('#id-input-file-3')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);

                <?php if($_SESSION["usertype"] == 11) { ?>
				var myTable = 
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable( {
                    bAutoWidth: false,
                    "aoColumns": [
                      { "bSortable": true },
                      null, null
                    ],
                    "aaSorting": [],
                    
                    
                    //"bProcessing": true,
                    //"bServerSide": true,
                    //"sAjaxSource": "http://127.0.0.1/table.php"   ,
            
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
                    //    style: 'multi'
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

                $(document).on('click', '.open-tosmodal', function() {
                    var exam_no = $(this).data('id');
                     $.ajax({
                        type: "POST",
                        url: "handle-tos-modal-response.php",
                        data: {exam_no:exam_no},
                        success: function(data) {
                            $('#myTableOfSpecificationModal-body').html(data);
                            $('#myTableOfSpecificationModal').modal('show');
                        }
                    });

                });

                $(document).on('click', '.open-ermodal', function() {
                    var exam_no = $(this).data('id');
                     $.ajax({
                        type: "POST",
                        url: "handle-er-modal-response.php",
                        data: {exam_no:exam_no},
                        success: function(data) {
                            $('#myTableOfExaminationResultModal-body').html(data);
                            $('#myTableOfExaminationResultModal').modal('show');
                        }
                    });

                }); 
                  $(document).on('click', '.open-example', function() {
                    var exam_no = $(this).data('id');
                    $.ajax({
                        type: "POST",
                        url: "fetch-examination-result.php",
                        data: {exam_no:exam_no},
                        success: function() {
                           var myExampleTable = 
                            $('#example-table')
                            .DataTable({
                                "bAutoWidth" : false,

                                "ajax" : "examination-result_data.json",

                                "columns" : [
                                    {"data" : "name"},
                                    {"data" : "score"}
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
                            } );
                            myExampleTable.buttons().container().appendTo( $('.tableTools-container1') );
                        }
                    });
                }); 
			});
		</script>

        <!-- Modals -->
        <div id="myModalPost" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content"><form id="postForm" method="post">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center>Announcement</center></h4>
              </div>
              <div class="modal-body">
                
                  
                  <div class="form-group">
                       <label class="control-label">Header</label>
                      <input type="text" class="form-control" required placeholder="Add Post title" name="header" id="headerpost">
                    </div>
                   <div class="form-group">
                   <label class="control-label ">Body</label>
                     <textarea style="height:100px;" name="body" class="form-control" placeholder="Post Description" id="bodypost" required></textarea>
                  </div>
                  
                  
                  
              </div>
              <div class="modal-footer">
                <input type='button' class="btn btn-info ipost" value="Post">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div></form>
            </div>

          </div>
    </div>
        <div id="myModalCreateExam" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content"><form action="examinfo.php" method="post">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title blue"><center>Create Exam/Quiz</center></h4>
              </div>
              <div class="modal-body">
                <div class="row">
						

					
						
                            <center>
				        <div class="form-group">
							<label for="form-field">Exam/Quiz Title</label>

							     <input type="text" class="form-field width-90" required placeholder="ex. Midterm Exam" name="exam_title" />
							
						</div>
                                
                        
                        <div class="form-group">
							<label for="form-field">About this exam *optional*</label>

							<div>
								<textarea name="exam_desc" placeholder="About this exam" class="form-field width-90" style="height:200px;"></textarea> </div>
				            
				        </div>
						</center>
						
						</div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-info" >Create</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div></form>
            </div>

          </div>
    </div>
        <div id="myModalUpload" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content"><form action="uploadgrades.php" method="post"  enctype="multipart/form-data">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title blue"><center>Upload Grades</center></h4>
              </div>
              <div class="modal-body">
                <center><div>
                  <h4><center>Upload grades via Microsoft Excel Worksheet</center></h4><br>
                  <input type="file" name="grades" class="input-large" accept=".xlsx" required>
                </div>
                    <br>
                    <div class="form-group">
                            <label class="control-label">Grade Information</label>
                            <input type="text" class="form-control" required style="width:400px;" placeholder="ex. Heres your grade for 1st grading exam" name="gradeinfo">
                        </div>
                  
                        
                    <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                <strong>Note:</strong>
                Your Excel File should be in this format:<br>
                <img src="../assets/files/upload_grades_format.JPG" style="width:250px; height:150px;"/>
                            <br>
            </div>

            <div class="center">
            <span>Or you can download the format <a href="../assets/files/upload_grades_format.xlsx">upload_grades_format.xlsx</a></span>        
            </div></center>
                  
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-info" name="submit">Upload</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div></form>
            </div>

          </div>
    </div>
            <div id="myModalUploadFiles" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content"><form action="upload.php" enctype="multipart/form-data" method="post">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title blue"><center>Upload Files</center></h4>
              </div>
              <div class="modal-body">
                 
                              
                    <div class="action-buttons ">

                        <center>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input multiple="" type="file" id="id-input-file-3" name="uploads[]" required/>
                            </div>
                        </div>
                 
                        <hr/>
                        <div class="form-group">
                            <label class="control-label">Post Description</label>
                            <textarea class="form-control" required style="height:150px; width:400px;" placeholder="Add Post title" name="posttitle"></textarea>
                        </div>
                        <div class="form-group hidden">
                            <label class="control-label">Post Description</label>
                            <textarea name="postdesc" class="form-control width-75" placeholder="Post Description"></textarea>
                        </div><?php if ($stat=="Active") {?>
                      <button class="btn btn-info btn-round width-75" type="submit" >
                                <i class="ace-icon fa fa-arrow-circle-o-down bigger-110"></i>
                                Post
                        </button> <?php } else { ?>

                        <button class="btn btn-danger btn-round width-75" type="button" data-toggle="modal" data-target="#myModalDesc">
                                <i class="ace-icon fa fa-bolt bigger-110"></i>
                                Activate this class to Post
                        </button> <?php } ?>
                            </center>



            </div> <hr/>
                  
              </div>
            </form>
            </div>

          </div>
    </div>
        <div id="myModalDesc" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center><h2 class="blue">Subject Information</h2></center></h4>
              </div>
              <div class="modal-body">
                  

                
				<dl class="dl-horizontal">
                    <h4>
					<dt>Descriptive Title</dt>
						<dd><?php echo $desctitle; ?></dd>
					<dt>Subject Code</dt>
					   <dd><?php echo $coursecode; ?></dd>
                    <dt>Identification code</dt>
						<dd>  <?php echo $classcode; ?></dd>
					<dt>Date Created</dt>
					   <dd id="date"> </dd>
                    <dt>Status</dt>
                        <dd> <?php if ($stat == "Active")
                            {
                                echo "<span class='label label-info arrowed-in arrowed-in-right'>Active</span>";
                            }
                            else
                            {
                               echo "<span class='label label-danger arrowed'>Inactive</span>"; 
                            }
                        ?> </dd>
                        
                    </h4>
                        
                        <?php if ($_SESSION["usertype"]!=111)
{
                        if ($stat == "Active"){
                         echo "<center><div class='action-buttons'><a href='classinfo.php?status=deactivate'><p class='text-danger'> Deactivate this class</p></a></div>   </center>";}
                        else
                        {
                            echo "<center><div class='action-buttons'><a href='classinfo.php?status=activate'><p class='text-info'> Activate this class</p></a></div>   </center>";
                        }} ?>
				</dl>
              </div>
              <div class="modal-footer">
                  <?php if ($stat == "Active"){
                         echo "";
                        }
                        else
                        {
                            if ($_SESSION["usertype"]!=111)
                            {
                                echo "<a href='classinfo.php?status=delete' class='btn btn-danger'>Delete</a>";
                            }
                            else
                            {
                                echo "<a href='classinfo.php?status=leave&classcode=".$_SESSION["classcode"]."' class='btn btn-danger'>Leave</a>";
                            }
                            
                        } ?>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
    </div>
          <div id="myModalAddStudent" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content"><form action="classinfo.php?status=addstudents" method="post" enctype="multipart/form-data">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title blue bigger"><center><strong>Add Students</strong></center></h4>
                
              </div>
              <div class="modal-body">
                                <center>
								<label for="form-field"> ---Select Students From Database to add--- </label>
                                <br>
								<select multiple="" name="addstudent[]" class="select2 width-90" data-placeholder="Click to Choose...">
                                    <?php 
                                    $teacher=$_SESSION["user"];
                                        include("../redundant/_connection.php");
                                        $sql = "SELECT * FROM accounts_student";
                                    
                                        $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                         if (mysqli_num_rows($result)>0)
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $val = $row["student_account_no"];
                                                $name1 = $row["student_firstname"];
                                                $name2 = $row["student_lastname"];
                                                
                                                
                                                echo "<option value=$val>$name1 $name2</option>";
                                            }
                                         }
                                      ?>
												
								</select>
                                      <div class="space"></div>
                                    <div class="form-group">
							<label for="form-field">or Upload Excel file</label>

							     <input type="file" name="upload" accept=".xlsx" />
							
						  </div>
                                    <div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
								<strong>Note:</strong>
                                Your Excel File should be in this format:<br>
                                <img src="../assets/files/class_record_format.JPG" style="width:530px; height:150px;"/>
											<br>
				            </div>
                                    
                            <div class="center">
                            <span>Or you can download the format <a href="../assets/files/class_record_format.xlsx">class_record_format.xlsx</a></span>        
                            </div>
</center>
						
					
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-info" value="Add Selected" name="submit"/>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div></form>
            </div>

          </div>
    </div>
        
        
        
            
            
         
        <?php
        
        $sql = "SELECT * FROM `posts` WHERE class_code = '".$_SESSION["classcode"]."'";
        $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));

        if (mysqli_num_rows($result)>0)
        {
        
            while($row = mysqli_fetch_assoc($result))
            {
                if($row["post_type"]=="exam")
                {
                    $sql2 = "SELECT * FROM `file_details` WHERE `post_no` =".$row["post_no"];
                    $result2 = mysqli_query ($connection, $sql2) or die (mysqli_error($connection));
                    if (mysqli_num_rows($result2)>0)
                    {
                        while($row2 = mysqli_fetch_assoc($result2))
                        {
                            $filelink = $row2["file_link_or_path"];
                            $sql3 = "SELECT * FROM `exams` WHERE `exam_no` =".$filelink;
                            $result4 = mysqli_query ($connection, $sql3);
                            if ($record4 = mysqli_fetch_assoc($result4))
                            {
                                $exam_no = $record4["exam_no"];
                                $examdate = $record4["exam_date"];
                                //$dtz = new DateTimeZone("Asia/Manila"); 
                               
                                //$date1 = new DateTime($examdate,$dtz);
                                //$exam_date = date_create($exam_date, $dtz);
                                $dtz = new DateTimeZone("Asia/Manila");

                                $now = new DateTime(date(''), $dtz);
                                $date1 = date_create($examdate, $dtz);

                                $difference_in_seconds = $now->format('U') - $date1->format('U');
                                
                                if($_SESSION["usertype"]!=111)
                                {
                                    
                                
                                ?>
                                
                                <script type="text/javascript">
                                $(document).ready(function(){  
                                    startTimer();
                                    function startTimer()
                                    {
                                        //var d = new Date();
                                        var cc = '<?php echo $_SESSION["classcode"]; ?>';
                                        $.ajax({  
                                                url:"timer.php",
                                                method: "post",
                                                data: {exam_no:'<?php echo $exam_no; ?>'},
                                                success:function(data) {  
                                                    $('#<?php echo $exam_no; ?>').html(data);
                                                   var timeout1 = data;
                                                    if(timeout1 == "0 h : 0 m : 1 s to be available")
                                                    {
                                                     
                                                        $('#editexam').addClass("hidden");
                                                    }
                                                    if( timeout1 == "<strong class='red'><i class='ace-icon fa  fa-info-circle red'></i>EXAM IS NOW OVER</strong>" )
                                                        {
                                                        
                                                            $('#editexam').addClass("hidden");
                                                            $('#tobehide').removeClass("hidden");
                                                            
                                                        }
                                                    
                                                    else{ 
                                                        
                                                        setTimeout(startTimer(),1000);
                                                        
                                                               
                                                        
                                                    }
                                                    
                                                } 
                                        });
                                    }                                        
                                });
                                </script>
        
        
                                <?php
                                }
                                else{ ?>
                                    
                                    <script type="text/javascript">
                                $(document).ready(function(){  
                                    startTimer();
                                    function startTimer()
                                    {
                                        //var d = new Date();
                                        var cc = '<?php echo $_SESSION["classcode"]; ?>';
                                        var id1 = '<?php echo $exam_no; ?>';
                                        $.ajax({  
                                                url:"timer.php",
                                                method: "post",
                                                data: {exam_no:'<?php echo $exam_no; ?>'},
                                                success:function(data) {  
                                                    
                                                   var timeout1 = data;
                                                    $('#<?php echo $exam_no; ?>').html(data);
                                                    
                                                    
                                                        if( timeout1 == "<a href='examination.php?refid="+ id1 +"&cc="+ cc +"'><i class='ace-icon fa  fa-external-link blue'></i>CLICK HERE TO TAKE THE EXAM</a>" )
                                                        {
                                                            alert("YOUR EXAM IS NOW READY!")
                                                        }
                                                        else
                                                        { 
                                                            if( timeout1 == "takeexam" )
                                                            {
                                                                $('#<?php echo $exam_no; ?>').html("<strong class='red'>EXAM IS NOW OVER!!</strong>");
                                                            }
                                                            else
                                                            { 
                                                                if( timeout1 == "<i class='ace-icon fa  fa-info-circle red'></i>DONE! <a href='check-examination.php?refid="+ id1 +"&cc="+ cc +"' class='red'> CLICK THIS TO REVIEW</a>")
                                                                    {
                                                                        
                                                                    }
                                                                else
                                                                    {
                                                                        setTimeout(startTimer(),1000);
                                                                    }
                                                                

                                                            }
                                                           
                                                        }
                                                    
                                                    
                                                    
                                                } 
                                        });
                                    }
                                    
                                    
                                    
                                });
                                </script>
                                    
        
                                <?php
                                     
                                                     
                                                
                                     
                                }
                                
                                
                                
                                
                               // $now = new DateTime(date('Y-m-d H:i:s'), $dtz);
                           
                               // $start_date=new DateTime(date(''), $dtz);
                               // $newdate = $start_date->format('Y/m/d H:i:s');
                                //$Main->timer($examdate,$exam_no);
                               //$difference_in_seconds = $date1->format('U') - $now->format('U');
                              
                                
                               //echo "<script type='text/javascript'> new CreateTimer('$exam_no', $difference_in_seconds); </script>";
                            }
                            
                        }
                    }   
                }
            }
        }

  
        ?>
        <script>
        
        function printDiv() 
        {

          var divToPrint=document.getElementById('myTableOfSpecificationModal-body');

          var newWin=window.open('','Print-Window');

          newWin.document.open();

          newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

          newWin.document.close();

          setTimeout(function(){newWin.close();},10);

        }
        
        </script>
<script>
$(document).ready(function(){  
 
  
    
    
    
    $(document).on('click', '.deletemc', function(){
        
        var postno = $(this).attr("id");
        if (confirm("Are you sure you want to delete this post?")) {
        
        
          $.ajax({  
                    url:"classinfo.php?delpost=del&postid="+ postno,
                    method:"POST",
                    beforeSend:function(){  
                      
                     },  
                     success:function(data){  
                      
                    $.gritter.add({
                    title: '<h2><center>Post Successfully Deleted!</center></h2>',
                    time: 'fast',
                    class_name: 'gritter-success gritter-dark' 
                    });
                    
                        $('#postData').html(data); 
                     }  
                });
            } else {
            
        }
        
        
        });
    
    $(document).on('click', '.ipost', function(){  
           event.preventDefault(); 
                if(($('#headerpost').val()!="") && ($('#bodypost').val()!="")){
                $.ajax({  
                     url:"classinfo.php?status=announcement",
                    
                     method:"POST",  
                     data:$('#postForm').serialize(),  
                     beforeSend:function(){  
                            
                            $('.ipost').val("Posting ...");
                       
                     },  
                     success:function(data){  
                        
                         $.gritter.add({
                                title: '<h2><center>Announcement successfully posted!</center></h2>',
                                time: 'fast',
                                class_name: 'gritter-success gritter-dark' 
                                });
                         
                         $('.ipost').val("Post"); 
                         $('#myModalPost').modal('hide'); 
                           $('#postForm')[0].reset(); 
                          
                          $('#postData').html(data);  
                     }  
                });  }
                    else
                        {
                            alert("Fill all fields!");
                        }
                    
             
      });
    
    
var d = new Date("<?php echo $datecreated; ?>");
document.getElementById("date").innerHTML =d.toDateString();
    
    
    
    
});
    
   
</script>

</body>
</html>