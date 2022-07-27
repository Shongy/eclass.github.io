<!DOCTYPE html>
<html lang="en">    
<?php
    session_start();
    include("../redundant/_connection.php");

    
    
    
    if(!isset($_GET["submit-exam"])){
?>
<head runat="server">      
<meta name="description" content="Drag &amp; drop file upload with image preview" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/ace.min2.css" class="ace-main-stylesheet" id="main-ace-style" />
<style>
    

    
    .sticky {
  position: fixed;
  top: 0;
  
}
    .modal-backdrop{
      opacity:0; transition:opacity .2s;
    }
    .modal-backdrop.in{
      opacity:1;
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
     <script language ="javascript" >
        
    <?php
           $sql = "SELECT * FROM `exams` WHERE `exam_no` =".$_GET["refid"];
            $result = mysqli_query ($connection, $sql);
            if ($record = mysqli_fetch_assoc($result))
            {
                echo "var min =".$record["time_limit"].";";
            }
      ?>
        var tim;
        
        var sec = 0;
        var f = new Date();
        
        function f2() {
            
            
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML = min+"m : " + sec+"s";
                tim = setTimeout("f2()", 1000);
            }
            else {
                if (parseInt(sec) == 0) {
                    min = parseInt(min) - 1;
                    if (parseInt(min) < 0) {
                        clearTimeout(tim);
                       $('#submitForm').trigger('click');
                    }
                    else {
                        sec = 60;
                        document.getElementById("showtime").innerHTML = min + "m : " + sec + "s";
                        tim = setTimeout("f2()", 1000);
                    }
                }
            }
            
             if ((document.fullScreenElement && document.fullScreenElement !== null) ||    // alternative standard method
      (!document.mozFullScreen && !document.webkitIsFullScreen)) {               // current working methods
    if (document.documentElement.requestFullScreen) {
      document.documentElement.requestFullScreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullScreen) {
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } 
            
           
        }
         
         var countnew = 0;
        window.onblur = function(){
           
            if(countnew == 1)
            {
                alert("1ST WARNING!!! LEAVING THIS PAGE IS CHEATING!");
            }
            if(countnew == 2)
            {
                alert("LAST WARNING!!! YOUR ANSWERS WILL BE AUTOMATICALLY SUBMITTED IF YOU DO IT AGAIN!");
            }
            if(countnew == 3)
            {
                 $('#submitForm').trigger('click');
            }
            
   
             countnew = countnew + 1;
    
}
         
     function disableF5(e) { 
         
         
         
         if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 27 ) e.preventDefault(); };

    $(document).ready(function(){
         $(document).on("keydown", disableF5);
   
           $('#fullscreenmodal').modal('show'); 
        $(document).on("keydown",function(ev){
        console.log(ev.keyCode);
        if(ev.keyCode===27||ev.keyCode===122) return false
    })
    });
         
         
         
   
    </script>
       
    
 
    <body class="no-skin" >
       
    
    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
        </script>
        <div class="main-content">
            <div class="main-content-inner">
					<?php  
                        $exam_no = $_GET["refid"];

                        if(isset($_GET["exam_result_no"])) {
                            $sql = "SELECT `score` FROM `exam_results` WHERE `exam_result_no` = ".$_GET["exam_result_no"];
                            $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                            $record = mysqli_fetch_assoc($result);
                            $score = $record["score"];
                        }
                         
                        $sql = "SELECT * FROM `exams` INNER JOIN `exam_details` ON exams.exam_no = exam_details.exam_no INNER JOIN `courses` ON exams.class_code = courses.class_code  WHERE exams.exam_no = ".$exam_no." AND exams.exam_no = ".$exam_no;
                        $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                        if ($record = mysqli_fetch_assoc($result))
                        {
                            $exam_name = $record["exam_name"];
                            $exam_desc = $record["exam_description"];
                            $exam_password = $record["exam_password"];
                            $class_code = $record["class_code"]; 
                            $course_code = $record["course_code"];
                            $course_title = $record["course_title"];
                            $time_limit= $record["time_limit"];
                        }
                    ?>
           
				<div class="page-content">
                    <div class="container-fluid">
                        <div class="well" style="margin-top:20px; ">
                  
                            <div class='header' style="background-color:#6699CC; padding:5px;">
                                <!--<div class="pull-right">
                                <h3><strong>Score : <?php //if(isset($_GET["exam_result_no"])) { echo $score; } ?></strong></h3>
                                </div><br><br>-->
                                <h1 style="color:white; font-size:25px;"><Strong><?php echo $exam_name; ?></Strong></h1>
                                <h3 style="color:white;"><?php echo $exam_desc; ?></h3>
                                <h5 style="color:white;"><strong>Class Code:</strong> <?php echo $class_code." | <strong>Course Code:</strong> ".$course_code." | <strong>Course Title:</strong> ".$course_title; ?></h5>
                            </div>
                            
                            <div class="ace-settings-container" id="ace-settings-container" >
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn" data-rel="popover" data-trigger="hover" data-placement="left" data-content="Your Remaining Time">
								<span class="ace-icon glyphicon glyphicon-time bigger-200"  ></span>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-150">
									
                                    <h2>Time Left:</h2>
									<strong><h3 class='text-danger' id="showtime"></h3></strong>

									
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						      </div>

                        <div>
                            <form action="check-examination.php" method="post" >
                                <div class="profile-feed row" >
                                    <?php
                                        if($_SESSION["usertype"] == 111) {
                                            $count = 0;
                                            $questions = array();
                                            $choices = array();
                                            for ($i = 1; $i <= 10; $i++) {
                                                $choices[] = $i;
                                            }
                                            $sql = "SELECT * FROM `exam_details` WHERE exam_no = $exam_no";
                                            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                            while($record = mysqli_fetch_assoc($result)) {
                                                $questions[] = $record["question_id"];
                                            }
                                            shuffle($questions);
                                            $_SESSION["questions"] = $questions;
                                            foreach ($questions as $key => $value) {
                                            $count++;
                                    ?>
                                        <input type="hidden" name="exam_no" value="<?php echo $exam_no; ?>">
                                        <div class="col-sm-12" >    
                                            <div class="profile-activity clearfix well" style="background-color:#F4F4FF;">
                                                <div>
                                                    <?php
                                                        $answers = 0;
                                                        $sql1 = "SELECT * FROM `exam_details` WHERE `question_id` = ".$value;
                                                        $result1 = mysqli_query($connection, $sql1) or die(mysqli_error($connection));
                                                        $record1 = mysqli_fetch_assoc($result1); 
                                                    ?>
                                          
                                                    <label style="font-size:15px; color:darkblue;"><strong><?php echo $count.". "; ?></strong></label>
                                                        <label> <div class="container"><?php echo stripslashes($record1["question"]); ?></div></label>
                                                        <br />
                                                    <?php
                                                        if($record1["question_type"] == "multiple") {
                                                             for ($i = 1; $i <= 10; $i++) {
                                                                if($record1["answer".$i] != "") {
                                                                    $answers++;
                                                                }
                                                             }
                                                            if($answers > 1) { ?>
                                                                <label><?php echo "Choose ".$answers." answers:"; ?></label><br /  >
                                                            <?php shuffle($choices);

                                                            foreach ($choices as $key => $i) {
                                                                if($record1["choice".$i] != "") {
                                                           ?>       
                                                                <input type="checkbox" id="<?php echo $record1["question_id"]."$i"; ?>" name="<?php echo $record1["question_id"]."[]"; ?>" value="<?php echo $record1["choice".$i];?>" /> 
                                                                <label for="<?php echo $record1["question_id"]."$i"; ?>"><?php echo $record1["choice".$i];?></label><br />
                                                             <?php } ?>
                                                            <?php } ?>
                                                        <?php } else{ 
                                                            shuffle($choices);
                                                            foreach ($choices as $key => $i) {
                                                                if($record1["choice".$i] != "") {
                                                            ?>  
                                                                <input type="radio" id="<?php echo $record1["question_id"]."$i"; ?>" name="<?php echo $record1["question_id"]; ?>" value="<?php echo $record1["choice".$i];?>">
                                                                   <label  for="<?php echo $record1["question_id"]."$i"; ?>"><?php echo $record1["choice".$i];?></label><br />
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php }?>
                                                    
                                                    <?php } elseif($record1["question_type"] == "tof") { ?>
                                                        <input type="radio" id="<?php echo $record1["question_id"]."True"; ?>" name="<?php echo $record1["question_id"]."TOF"; ?>" value="True" /> 
                                                        <label for="<?php echo $record1["question_id"]."True"; ?>"><?php echo "True";?></label><br />
                                                        <input type="radio" id="<?php echo $record1["question_id"]."False"; ?>" name="<?php echo $record1["question_id"]."TOF"; ?>" value="False" /> 
                                                        <label for="<?php echo $record1["question_id"]."False"; ?>"><?php echo "False";?></label>
                                                    
                                                    <?php } elseif($record1["question_type"] == "identification") { ?>
                                                        <label><?php echo "Answer: ";?></label> 
                                                        <input type="text" autocomplete="off" name="<?php echo $record1["question_id"]."identification"; ?>" /> 
                                                    
                                                    <?php } elseif($record1["question_type"] == "enumeration") { 
                                                        for ($i = 1; $i <= 10; $i++) {
                                                                if($record1["answer".$i] != "") {
                                                        ?>  
                                                            <label for="<?php echo $record1["question_id"].$i ;?>"><?php echo $i.". ";?></label> 
                                                            <input type="text" autocomplete="off" id="<?php echo $record1["question_id"].$i ;?>" name="<?php echo $record1["question_id"].$i; ?>" /><br /><br />
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>
                                            </div>  
                                        </div><!-- /.col -->    
                                        <?php } ?>
                                    <?php } ?>
                                    
                                    <div class="pull-right">
                                        <button type="submit" name="submit-exam" class="btn btn-success"  style="border-radius:1px;" id="submitForm">Submit</button>
                                        &nbsp;
                                        
                                        <button type="reset" name="reset-exam" class="btn btn-warning" style="border-radius:1px;"><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                                    </div>
                               
                            </div><!-- /.row -->
                                 </form>
                        </div>
                        </div>
                    </div>
                </div>
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
        
        
        <div id="fullscreenmodal" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <!-- dialog body -->
              <div class="modal-body">
                <?php
                 

                $exam_no = $_GET["refid"];
                include("../redundant/_connection.php");
                $sql1 = "SELECT * FROM `exam_details` WHERE `exam_no`=".$exam_no;
                $result = mysqli_query ($connection, $sql1) or die (mysqli_error($connection));
                $mcCount = 0;
                $tofCount= 0;
                $idenCount= 0;
                $enumCount= 0;
                if (mysqli_num_rows($result)>0)
                {

                    while($row = mysqli_fetch_assoc($result))
                    {
                       if($row["question_type"]=="multiple")
                       {
                           $mcCount = $mcCount + 1;
                       }
                        elseif($row["question_type"]=="tof")
                        {
                            $tofCount= $tofCount +1;
                        }
                        elseif($row["question_type"]=="identification")
                        {
                            $idenCount = $idenCount +1;
                        }
                        else
                        {
                            $enumCount = $enumCount+1;
                        }
                    }

                }

            
                  
                $sql2 = "SELECT * FROM `exams` WHERE `exam_no`=".$exam_no;
                $result2 = mysqli_query ($connection, $sql2) or die (mysqli_error($connection));
                if ($record2 = mysqli_fetch_assoc($result2)) 
                {
                    $timelimit = $record2["time_limit"];
                    $exam_title = $record2["exam_name"];
                    $details = $record2["exam_description"];
                }
              ?>    
                  <h2 class="header clearfix blue"><?php echo $exam_title;?></h2>
                    <h3 class="center">Exam Information</h3>
                  
                    <h5 class="pull=right">
                    <dl class="dl-horizontal" id="dl">
                    <div class="col-xs-12 col-sm-6">
                    <dt>Multiple Choice:</dt>
                        <dd><?php echo $mcCount; ?></dd>
                    <dt>True or False:</dt>
                       <dd><?php echo $tofCount; ?></dd>
                    <dt>Identification:</dt>
                        <dd>  <?php echo $idenCount; ?></dd>
                    <dt>Enumeration:</dt>
                       <dd> <?php echo $enumCount; ?></dd>
                 <dt>TOTAL QUESTIONS:</dt>
                       <dd> <?php echo $enumCount+$idenCount+$tofCount+$mcCount; ?></dd>
                        </div>
                        
                    </dl>
                  </h5>
                  
                  <div class="col-xs-12 col-sm-6">
                        
                      <strong><p ><?php echo $details; ?></p></strong>
                      <div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
								<strong>Note:</strong>
                                For better experience, do not exit on fullscreen. <strong>Check your time</strong> (Click the clock on the right) 
											<br>
				            </div>
                    </div>
                  
                  <div><center><strong><h3 class="text-warning">Time Limit: <?php if ($timelimit > 1){echo $timelimit." Minutes";}else{echo $timelimit." Minute";}?></h3></strong></center></div>
                  <input type="text" name="pass1" id="pass1" class="form-control center" placeholder="ENTER PASSWORD" align="center" oninput="passwordCheck()">

              </div>
              <!-- dialog buttons -->
              <div class="modal-footer">
                  
                  <button id="buttonID" onclick="f2()" type="button"  data-dismiss="modal" class="btn btn-primary btn-block hidden">START!!!</button></div>
            </div>
          </div>
        </div>
        <script>
            $("#fullscreenmodal").on("show", function() {    // wire up the OK button to dismiss the modal when shown
                $("#fullscreenmodal a.btn").on("click", function(e) {
                    console.log("button pressed");   // just as an example...
                    $("#fullscreenmodal").modal('hide');     // dismiss the dialog
                });
            });
            $('#yourModal').on('shown.bs.modal', function (e) {
              $("#pageContent").css({ opacity: 0.5 });
            })
            $("#fullscreenmodal").on("hide", function() {    // remove the event listeners when the dialog is dismissed
                $("#fullscreenmodal a.btn").off("click");
            });

            $("#fullscreenmodal").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
                $("#fullscreenmodal").remove();
            });

            $("#fullscreenmodal").modal({                    // wire up the actual modal functionality and show the dialog
              "backdrop"  : "static",
              "keyboard"  : true,
              "show"      : true                     // ensure the modal is shown immediately
            });
            
            
            window.onscroll = function() {myFunction1()};

            var header = document.getElementById("ace-settings-container");
            var sticky = header.offsetTop;

            function myFunction1() {
              if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
              } else {
                header.classList.remove("sticky");
              }
            }
            
            function myFunction1() {
              if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
              } else {
                header.classList.remove("sticky");
              }
            }

      
            function passwordCheck() {
                var id4 = <?php echo $_GET["refid"]?>;
                var pass1 = $('#pass1').val();
                   $.ajax({  
                url:"checkPassword.php",  
                method:"POST",  
                data:{pass1:pass1,refid:id4},  
               
                success:function(data){
                   
                    if(data == "NOT")
                        {
                            
                            
                            $('#buttonID').addClass("hidden");
                        }
                    else
                        {
                           
                            
                            $('#buttonID').removeClass("hidden");
                        }
                }
                   
                });
                    
            }
    </script>


		<!-- inline scripts related to this page -->
	
</body>
    
    
    <?php }else{
        echo "<script> location.href='../main/mycourse.php' </script>";
    } ?>
</html>