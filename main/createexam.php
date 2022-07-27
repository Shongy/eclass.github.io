<!DOCTYPE html>
<html lang="en">
    <?php include_once("../redundant/main.php");
    session_start();
    $Main = new Main();
    $Main -> head1(); 
    
    
    
     if (isset($_GET["refid"]))
   {
       $_SESSION["exam_no"] = $_GET["refid"];
   }
    $exam_no = $_SESSION["exam_no"];
    if (isset($_GET["classcode"]))
   {
       $_SESSION["classcode"] = $_GET["classcode"];
   }
    
    
    ?>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
	
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		
     
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-timepicker.min.css" />
        <link rel="stylesheet" href="../assets/css/daterangepicker.min.css" />
        <link rel="stylesheet" href="../assets/css/jquery.gritter.min.css" />
	<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min1.css" class="ace-main-stylesheet" id="main-ace-style" />
        
        
        
        
          
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.min.js"></script>
      
        <script type="text/javascript" src="js/jquery.min.js"></script>
                <script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
                 <script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
  
   <style>
       .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  background-color: lightcyan;
}
        
        </style>
        <script>
$(document).ready(function() {

    
    var multiClick =$("#clickmulti");
    var tofClick =$("#clicktof");
    var idenClick =$("#clickiden");
    var enumClick =$("#clickenum");
    
    var classMulti =$("#mc");
    var classTOF =$("#tof");
    var classIden =$("#iden");
    var classEnum =$("#enum");
    var resetVal = "";
  
    $('#mc').click(function(e){
        e.preventDefault();
      
    });
    $('#tof').click(function(e){
        e.preventDefault();
       
    });
    $('#iden').click(function(e){
        e.preventDefault();
     
        
    });
    $('#enum').click(function(e){
        e.preventDefault();
      
    });
    
    $(multiClick).click(function(e){ 
        e.preventDefault();
        $('#multi_form')[0].reset();
        $('#multi_add').val("Save This New Question +"); 
       
        $(classTOF).removeClass( 'active' );
        $(classIden).removeClass( 'active' );
        $(classEnum).removeClass( 'active' );
       $(classMulti).addClass( 'active' );
        $('#faq-tab-4').removeClass( 'in active' );
        $('#faq-tab-2').removeClass( 'in active' );
        $('#faq-tab-3').removeClass( 'in active' );
       $('#faq-tab-1').addClass( 'in active' );
        
        $('#choice5').closest("tr").addClass("hidden");
        $('#choice6').closest("tr").addClass("hidden");
        $('#choice7').closest("tr").addClass("hidden");
        $('#choice8').closest("tr").addClass("hidden");
        $('#choice9').closest("tr").addClass("hidden");
        $('#choice10').closest("tr").addClass("hidden");
        $('#btnaddmc4').removeClass("hidden");
        
    });
    $(tofClick).click(function(e){ 
        e.preventDefault();
        $('#tof_form')[0].reset();
        $('#add_tof').val("Save This New Question +");
        
        $(classMulti).removeClass( 'active' );
        $(classIden).removeClass( 'active' );
        $(classEnum).removeClass( 'active' );
       $(classTOF).addClass( 'active' );
        $('#faq-tab-1').removeClass( 'in active' );
        $('#faq-tab-4').removeClass( 'in active' );
        $('#faq-tab-3').removeClass( 'in active' );
       $('#faq-tab-2').addClass( 'in active' );
        
    });
    $(idenClick).click(function(e){ 
        e.preventDefault();
        $('#iden_form')[0].reset();
        $('#add_iden').val("Save This New Question +");
        
        $(classTOF).removeClass( 'active' );
        $(classMulti).removeClass( 'active' );
        $(classEnum).removeClass( 'active' );
       $(classIden).addClass( 'active' );
        
        $('#faq-tab-1').removeClass( 'in active' );
        $('#faq-tab-2').removeClass( 'in active' );
        $('#faq-tab-4').removeClass( 'in active' );
       $('#faq-tab-3').addClass( 'in active' );
        $('#miniden2').closest("tr").addClass("hidden");
        $('#miniden3').closest("tr").addClass("hidden");
        $('#addiden1').removeClass("hidden");
        
    });
    $(enumClick).click(function(e){ 
        e.preventDefault();
      
        $('#enum_form')[0].reset();
        $('#add_enum').val("Save This New Question +");
   
        
        $(classTOF).removeClass( 'active' );
        $(classIden).removeClass( 'active' );
        $(classMulti).removeClass( 'active' );
       $(classEnum).addClass( 'active' );
        $('#faq-tab-1').removeClass( 'in active' );
        $('#faq-tab-2').removeClass( 'in active' );
        $('#faq-tab-3').removeClass( 'in active' );
       $('#faq-tab-4').addClass( 'in active' );
        $('#button3Add').removeClass("hidden");
        $('#enum_answer4').closest("tr").addClass("hidden");
         $('#enum_answer5').closest("tr").addClass("hidden");
         $('#enum_answer6').closest("tr").addClass("hidden");
         $('#enum_answer7').closest("tr").addClass("hidden");
         $('#enum_answer8').closest("tr").addClass("hidden");
         $('#enum_answer9').closest("tr").addClass("hidden");
         $('#enum_answer10').closest("tr").addClass("hidden");
    });
});
        </script>
        <script>
  

    
    var resetModal = function ()
     {
         $('#multi_form')[0].reset();
         $('#enum_form')[0].reset();
         $('#iden_form')[0].reset();
         $('#tof_form')[0].reset();
         
     }
        function counts_update() {
					
            
            $.ajax({  
                     url:"examinfo.php?counts=counts",
                     method:"POST",  
                     beforeSend:function(){  
                        
                     },  
                     success:function(data){  
                        
                          $('#dl').html(data);  
                     }
            })
              
        }
        

        </script>

        
        
	</head>

	<body class="no-skin" >
		<?php $Main -> navbar(); ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php $Main -> slider("course",$_SESSION["classcode"]); ?>
			<div class="main-content">
				<div class="main-content-inner">
					
                       
                
					<div class="page-content">
						<?php
                      
                        
                         include("../redundant/_connection.php");
                        $sql1 = "SELECT * FROM `exams` WHERE `exam_no`=".$_SESSION["exam_no"];
                        $result = mysqli_query ($connection, $sql1);
                        if ($record = mysqli_fetch_assoc($result))
                        {
                            $exam_name = $record["exam_name"];
                            $exam_desc = $record["exam_description"];
                            $exam_date_start = $record["exam_date"];
                            $exam_date_expired = $record["exam_date_expired"];
                            $time_limit = $record["time_limit"];
                            $exam_password = $record["exam_password"];
                            
                        }
                     
                         include("../redundant/_connection.php");
                        $sql2 = "SELECT * FROM `courses` WHERE `class_code` ='".$_SESSION["classcode"]."'";
                        //echo "<script> alert('".$sql2."');</script>";
                        $result2 = mysqli_query ($connection, $sql2);
                        if ($record2 = mysqli_fetch_assoc($result2))
                        {
                            $classname = $record2["course_title"];
                         
                        }

                        
                        ?>
                        <div class="container-fluid" id="myHeader">
						<nav class="action-buttons" >
                                    
                                        <div class="navbar-header pull-left">
                                         <strong class="navbar-brand blue"><?php echo $classname; ?> </strong>
                                        </div>
                            
                            
                                       
                                    <ul class="nav navbar-nav  pull-right">
                                         <div class="navbar-header">
                                         <strong class="navbar-brand blue">Add Questions: </strong>
                            </div>
                                       
                                        <li>
                                               
                                                 <a  href="#"  data-toggle='modal' data-target='#myModalEditExam'  data-backdrop='static' data-keyboard='false'  id="clickmulti"><i class="ace-icon fa fa-plus-circle"></i> Multiple Choice</a>
                                                
                                        </li>
                                    
                                                                     
                                        <li>
                                                 
                                              <a  href="#"  data-toggle='modal' data-target='#myModalEditExam'  data-backdrop='static' data-keyboard='false'  id="clicktof" ><i class="ace-icon fa fa-plus-circle"></i> True or False</a>
                                               
                                        </li>
                                        <li>
                                            
                                                <a  href="#" data-toggle='modal' data-target='#myModalEditExam'  data-backdrop='static' data-keyboard='false'  id="clickiden"><i class="ace-icon fa fa-plus-circle"></i> Identification</a>

                                        </li>
                                         <li>
                                           
                                             <a  href="#" data-toggle='modal' data-target='#myModalEditExam'  data-backdrop='static' data-keyboard='false'  id="clickenum" ><i class="ace-icon fa fa-plus-circle"></i> Enumeration</a>
                                              
                                        </li>
                                     
                                        
                                     
                                    
                                    </ul>
                                        
                                        </nav>
                        </div>
                        
                        
                        <div class="header">
                            <center><div class='action-buttons'><a href="#" data-toggle="modal" data-target="#myModals">
                                
                         <h1><Strong><?php echo $exam_name; ?></Strong></h1>
                                </a>
                                
                                </div></center>
                        <div class="ace-settings-container" id="ace-settings-container" >
							<div class="btn btn-app btn-xs btn-info ace-settings-btn" id="ace-settings-btn" data-rel="popover" data-trigger="hover" data-placement="left" data-content="Your Remaining Time">
								<span class="ace-icon fa fa-file bigger-200"  ></span>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="tableTools-container">
									
                                   
								</div><!-- /.pull-left -->

							</div><!-- /.ace-settings-box -->
						      </div>
                        </div>
                        
						<div class="row">
                            
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                            
                           <table id="viewall" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="detail-col">Question id</th>
                                            <th>Question</th>
                                            <th class="detail-col">Question Type</th>
                                            <th>Choices</th>
                                            <th>Answers</th>
                                            
                                       </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            $sql = "SELECT * from `exam_details` WHERE `exam_no` = '".$_SESSION["exam_no"]."' ORDER BY `question_no` DESC";
                                                $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                                while($record = mysqli_fetch_assoc($result)) {	

                                        ?>
                                            <tr>
                                                <td class="center">
                                                   <?php echo $record["question_no"]; ?><br>
                                                </td>


                                                <td >
                                                    
                                                    <div>
                                                   <?php echo stripslashes($record["question"]); ?>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                        if($record["question_type"]=="multiple")
                                                        {
                                                            echo "Multiple Choice";
                                                        }
                                                        elseif($record["question_type"]=="tof")
                                                        {
                                                            echo "True or False";
                                                        }
                                                        elseif($record["question_type"]=="identification")
                                                        {
                                                            echo "Identification";
                                                        }
                                                        elseif($record["question_type"]=="enumeration")
                                                        {
                                                            echo "Enumeration";
                                                        }
                                                    
                                                    ?>
                                                    
                                                </td>

                                                <td>
                                                    <?php 
                                                   if($record["choice1"]!=""){
                                                       echo "A.)&nbsp;<strong>";
                                                       echo $record["choice1"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["choice2"]!=""){
                                                       echo "B.)&nbsp;<strong>";
                                                       echo $record["choice2"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["choice3"]!=""){
                                                       echo "C.)&nbsp;<strong>";
                                                       echo $record["choice3"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["choice4"]!=""){
                                                        echo "D.)&nbsp;<strong>";
                                                       echo $record["choice4"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["choice5"]!=""){
                                                       echo "E.)&nbsp;<strong>";
                                                       echo $record["choice5"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["choice6"]!=""){
                                                        echo "F.)&nbsp;<strong>";
                                                       echo $record["choice6"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["choice7"]!=""){
                                                        echo "G.)&nbsp;<strong>";
                                                       echo $record["choice7"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["choice8"]!=""){
                                                       echo "H.)&nbsp;<strong>";
                                                       echo $record["choice8"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["choice9"]!=""){
                                                        echo "I.)&nbsp;<strong>";
                                                       echo $record["choice9"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["choice10"]!=""){
                                                       echo "J.)&nbsp;<strong>";
                                                       echo $record["choice10"];
                                                       echo "</strong>";
                                                   }
                                           
                        
                                                    ?>
                                                 
                                                </td>
                                                


                                                <td>  
                                                    
                                                    
                                                    <button type='button' class='close deletemc' id='<?php echo $record["question_id"]; ?>'><i class='ace-icon fa fa-trash pull-right red'></i></button>
                                            
                                                    
                                                    <?php
                                                    
                                                     if($record["question_type"]=="multiple")
                                                        {
                                                           ?>
                                                    
                                                                 <button class='close edit_data1' id=' <?php echo $record["question_id"]; ?>'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>
                                                    
                                                            <?php
                                                        }
                                                        elseif($record["question_type"]=="tof")
                                                        {
                                                            ?>
                                                    
                                                                 <button class='close edit_data2' id=' <?php echo $record["question_id"]; ?>'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>
                                                    
                                                            <?php
                                                        }
                                                        elseif($record["question_type"]=="identification")
                                                        {
                                                           ?>
                                                    
                                                                 <button class='close edit_data3' id=' <?php echo $record["question_id"]; ?>'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>
                                                    
                                                            <?php
                                                        }
                                                        elseif($record["question_type"]=="enumeration")
                                                        {
                                                           ?>
                                                    
                                                                 <button class='close edit_data4' id=' <?php echo $record["question_id"]; ?>'> <i class='ace-icon fa fa-edit pull-right blue'></i></button>
                                                    
                                                            <?php
                                                        }
                                                    
                                                    ?>
                                                    
                                                    
                                                   
                                                    
                                                    
                                                    
                                                    
                                                     <div>
                                                   <?php 
                                                   if($record["answer1"]!=""){
                                                       echo "A.)&nbsp;<strong class='text-success'>";
                                                       echo $record["answer1"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["answer2"]!=""){
                                                       echo "B.)&nbsp;<strong class='text-success'>";
                                                       echo $record["answer2"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["answer3"]!=""){
                                                       echo "C.)&nbsp;<strong class='text-success'>";
                                                       echo $record["answer3"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["answer4"]!=""){
                                                        echo "D.)&nbsp;<strong class='text-success'>";
                                                       echo $record["answer4"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["answer5"]!=""){
                                                       echo "E.)&nbsp;<strong class='text-success'>";
                                                       echo $record["answer5"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["answer6"]!=""){
                                                        echo "F.)&nbsp;<strong class='text-success'>";
                                                       echo $record["answer6"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["answer7"]!=""){
                                                        echo "G.)&nbsp;<strong class='text-success'>";
                                                       echo $record["answer7"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["answer8"]!=""){
                                                       echo "H.)&nbsp;<strong class='text-success'>";
                                                       echo $record["answer8"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["answer9"]!=""){
                                                        echo "I.)&nbsp;<strong class='text-success'>";
                                                       echo $record["answer9"];
                                                       echo "</strong><br><br>";
                                                   }
                                                    if($record["answer10"]!=""){
                                                       echo "J.)&nbsp;<strong class='text-success'>";
                                                       echo $record["answer10"];
                                                       echo "</strong><br>";
                                                   }
                                           
                        
                                                    ?>
                                                         </div>
                                                </td>
                                                
                                                    
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                       
                          
                        <a href="#" class='btn btn-block btn-info btn-round' data-toggle='modal' data-target='#myModalPostExam' class='pull-right qcount' onclick="counts_update()" data-backdrop='static' data-keyboard='false' >PUBLISH EXAM</a>
                            
                            
                            <div class="hr hr-double dotted"></div>
                            </div>
                        </div>
                       

								<!-- PAGE CONTENT ENDS -->
                      
                        
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
                       
					</div><!-- /.page-content -->
				
			     
                
                </div><!-- /.main-content -->


        
        <div id="myModalEditExam" class="modal fade" role="dialog">
            
          <div class="modal-dialog modal-lg" >

            <!-- Modal content-->
            <div class="modal-content">
              
             
              <div class="modal-body">
                
                  <div class="row">
						  
                        
						<div class="tabbable">
									<ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
										<li class='active' id="mc">
											<a data-toggle="tab" href="#faq-tab-1">
												<i class="blue ace-icon fa fa-refresh bigger-120"></i>
												Multiple Choice
											</a>
										</li>

										<li id="tof">
											<a data-toggle="tab" href="#faq-tab-2">
												<i class="green ace-icon fa fa-check-square-o bigger-120"></i>
												True or False
											</a>
										</li>

										<li id="iden">
											<a data-toggle="tab" href="#faq-tab-3">
												<i class="orange ace-icon fa fa-pencil-square-o bigger-120"></i>
												Identification
											</a>
										</li>

										<li id="enum">
											<a data-toggle="tab" href="#faq-tab-4">
												<i class="orange ace-icon glyphicon glyphicon-list bigger-120"></i>
												Enumeration
											</a>
										</li><!-- /.dropdown -->
                                        <button type="button" class="close" style="margin-right:20px;" data-dismiss="modal">&times;</button>
									</ul>

									<div class="tab-content no-border padding-24">
										<div id="faq-tab-1" class="tab-pane fade in active">
											<form id="multi_form">
                                            
                                            <textarea id="question_multiple" style="width: 100%; height: 300px;" name="question_multiple" >
                                               
                                            </textarea>
                                                <div class="cont">
                                        <table class="table table-hover" id="myTable">
                                            
                                            
                                                <th>Choices <br>
                                                Shuffle Choice Upon Exam: <input type="checkbox" checked name="toshuffle" style="width:20px; height:20px;" id="shuffle_mc"></th>
                                                <th class="pull-left">Check The Right Answer</th>
                                                <th>Add/Remove</th>
                                                <tr>
                                                    <td style="width:550px">
                                                        <input  id ="choice1" type="text" required class="form-control" name="choice1" placeholder="Choice A">
                                                    </td>
                                                    <td >
                                                        <input id = "mc_answer1" type="checkbox" name="answer1" value= "answer1" class="form-check-input" style="width:25px;height:25px;">
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="choice2" class="form-control" name="choice2" placeholder="Choice B">
                                                    </td>
                                                    <td>
                                                        <input id = "mc_answer2" type="checkbox" name="answer2" value= "answer2" class="form-check-input" style="width:25px;height:25px;">
                                                    </td>
                                                    <td></td>
                                                
                                                </tr>
                                                <tr>
                                                    <td>
                                                         <input  id ="choice3" type="text"  class="form-control" name="choice3" placeholder="Choice C">
                                                    </td>
                                                    <td>
                                                        <input id = "answer3" type="checkbox" name="answer3" value= "answer3" class="form-check-input" style="width:25px;height:25px;">
                                                    </td><td></td>
                                                    
                                                </tr>
                                            <tr>
                                                    <td>
                                                         <input  id ="choice4" type="text" class="form-control" name="choice4" placeholder="Choice D">
                                                    </td>
                                                    <td>
                                                        <input id = "answer4" type="checkbox" name="answer4" value= "answer4" class="form-check-input" style="width:25px;height:25px;" >
                                                    </td>
                                                <td>
                                                    <a href="#" class="btn btn-info btn-sm" id="btnaddmc4">+</a>
                                                </td>
                                                   
                                            
                                                </tr>
                                            <tr class="hidden">
                                                    <td>
                                                         <input  id ="choice5" type="text" class="form-control" name="choice5" placeholder="Choice E">
                                                    </td>
                                                    <td>
                                                        <input id = "answer5" type="checkbox" name="answer5" value= "answer5" class="form-check-input" style="width:25px;height:25px;" >
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger btn-sm" id="btnminmc5">-</a>
                                                        <a href="#" class="btn btn-info btn-sm" id="btnaddmc5">+</a>
                                                        
                                                        
                                                    </td>
                                                  
                                            
                                            </tr>
                                            <tr class="hidden">
                                                    <td>
                                                         <input  id ="choice6" type="text" class="form-control" name="choice6" placeholder="Choice F">
                                                    </td>
                                                    <td>
                                                        <input id = "answer6" type="checkbox" name="answer6" value= "answer6" class="form-check-input" style="width:25px;height:25px;" >
                                                    </td>
                                                    <td>
                                                        
                                                        <a href="#" class="btn btn-danger btn-sm" id="btnminmc6">-</a>
                                                        <a href="#" class="btn btn-info btn-sm" id="btnaddmc6">+</a>
                                                        
                                                    </td>
                                                  
                                            
                                            </tr>
                                            <tr class="hidden">
                                                    <td>
                                                         <input  id ="choice7" type="text" class="form-control" name="choice7" placeholder="Choice G">
                                                    </td>
                                                    <td>
                                                        <input id = "answer7" type="checkbox" name="answer7" value= "answer7" class="form-check-input" style="width:25px;height:25px;" >
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger btn-sm" id="btnminmc7">-</a>
                                                        <a href="#" class="btn btn-info btn-sm" id="btnaddmc7">+</a>
                                                        
                                                    </td>
                                                  
                                            
                                            </tr>
                                            <tr class="hidden">
                                                    <td>
                                                         <input  id ="choice8" type="text" class="form-control" name="choice8" placeholder="Choice H">
                                                    </td>
                                                    <td>
                                                        <input id = "answer8" type="checkbox" name="answer8" value= "answer8" class="form-check-input" style="width:25px;height:25px;" >
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger btn-sm" id="btnminmc8">-</a>
                                                        <a href="#" class="btn btn-info btn-sm" id="btnaddmc8">+</a>
                                                        
                                                    </td>
                                                  
                                            
                                            </tr>
                                            <tr class="hidden">
                                                    <td>
                                                         <input  id ="choice9" type="text" class="form-control" name="choice9" placeholder="Choice I">
                                                    </td>
                                                    <td>
                                                        <input id = "answer9" type="checkbox" name="answer9" value= "answer9" class="form-check-input" style="width:25px;height:25px;" >
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger btn-sm" id="btnminmc9">-</a>
                                                        <a href="#" class="btn btn-info btn-sm" id="btnaddmc9">+</a>
                                                        
                                                    </td>
                                                  
                                            
                                            </tr>
                                            <tr class="hidden">
                                                    <td>
                                                         <input  id ="choice10" type="text" class="form-control" name="choice10" placeholder="Choice J">
                                                        <strong><p class="text-danger">You have reach the maximum choices!!!</p></strong>
                                                    </td>
                                                    <td>
                                                        <input id = "answer10" type="checkbox" name="answer10" value= "answer10" class="form-check-input" style="width:25px;height:25px;">
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger btn-sm" id="btnminmc10">-</a>
                                                        
                                                        
                                                    </td>
                                                  
                                            
                                            </tr>
                                            
                                            </table>
                                                    </div>
                                                
                                            
                                                <div class="modal-footer">
                                            <button  type="button" class="btn btn-default" data-dismiss="modal" onclick="resetModal();">Cancel</button>
                                            <input type="submit" class="btn btn-info submit1" id="multi_add" value="Save This New Question +" />
                                            
                                          </div>
                                            </form>
										</div>

										<div id="faq-tab-2" class="tab-pane fade">
											
                                            <form id="tof_form">
											 <textarea id="questionTOF" style="width: 100%; height: 300px;" name="tof" >
                                                 
                                            </textarea>
                                            <h4 class="header green clearfix">
                                                    Answer

                                            </h4>
                                                
                                                
                                                <label class="btn btn-success btn-rounded btn-md form-check-label">
                                                    <input class="chb" type="checkbox" autocomplete="off" name = "torf"  value="true" id="checktrue"> True
                                                </label>

                                                <label class="btn btn-success btn-rounded btn-md form-check-label">
                                                    <input class="chb" type="checkbox" autocomplete="off" name = "torf"  value="false" id="checkfalse"> False
                                                </label>
                                                
                                                <div class="hr hr-double dotted"></div>
                                                 <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="resetModal();">Cancel</button>
                                                <input type="submit" class="btn btn-info submit2" id="add_tof" value="Save This New Question +" />
                                            
                                                </div>
                                           </form>
										      
										</div>

										<div id="faq-tab-3" class="tab-pane fade">
											<form id="iden_form">
                                            <textarea id="questionIDEN" style="width: 100%; height: 300px;" name="identification" >
                                               
                                            </textarea>
                                               
                                                <table class="table" id="myTable2">
                                                <th>
                                                    Answer
                                                </th>
                                                <tr>
                                                    <td>
                                                        <input type="text" required class="form-control" name="iden_answer1" id="iden_answer1" placeholder="answer">
                                                    </td><td></td>
                                                   
                                                </tr>
                                                    <tr>
                                                        <td>
                                                        <h5 class="header green clearfix">Similar answer -> <a href="#" class="btn btn-sm btn-info" id="addiden1">+</a></h5>
                                                            </td>
                                                    </tr>
                                                
                                               <tr class="hidden">
                                                    <td>
                                                         <input  id ="iden_answer2" type="text"  class="form-control" name="answer2">
                                                    </td>
                                                 
                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-danger" id="miniden2">-</a>
                                                        <a href="#" class="btn btn-sm btn-info" id="addiden2">+</a>
                                                        
                                                    </td>
                                            
                                                </tr>
                                                <tr class="hidden">
                                                    <td>
                                                         <input  id ="iden_answer3" type="text"  class="form-control" name="answer3">
                                                    </td>
                                                 
                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-danger" id="miniden3">-</a>
                                                    </td>
                                            
                                                </tr>
                                            </table>
                                                
                                                
                                                 <div class="hr hr-double dotted"></div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="resetModal();">Cancel</button>
                                            <input type="submit" class="btn btn-info submit3" value="Save This New Question +" id="add_iden"/>
                                            
                                          </div>
                                            </form>
												
										</div>

										<div id="faq-tab-4" class="tab-pane fade">
								        <form id="enum_form">
                                            
                                            <textarea id="questionENUM" style="width: 100%; height: 300px;" name="enumeration" >
                                              
                                            </textarea>
                                                <h4 class="header green clearfix">
                                                Shuffle Choice Upon Exam: <input type="checkbox" checked name="toshuffle" style="width:20px; height:20px;" id="shuffle_enum">

                                            </h4>
                                                <table class="table table-striped" id="myTable3">
                                    
                                                <tr>
                                                    <td>
                                                        <input type="text" required class="form-control" name="answer1" id="enum_answer1" placeholder="answer 1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" required class="form-control" name="answer2" id="enum_answer2" placeholder="answer 2">
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                         <input  id ="enum_answer3" type="text"  class="form-control" name="answer3"  placeholder="answer 3">
                                                    </td>
                                                     <td>

                                                        <a href="#" id="button3Add" class="btn btn-success"><strong><i>+</i></strong></a>

                                                    </td>
                                                </tr>
                                                <tr class="hidden">
                                                    <td>
                                                         <input  id ="enum_answer4" type="text"  class="form-control " name="answer4"  placeholder="answer 4">
                                                    </td>
                                                    <td>
                                                        
                                                        <a href="#" id="button4Min" class="btn btn-danger "><strong><i>-</i></strong></a>
                                                        <a href="#" id="button4Add" class="btn btn-success"><strong><i>+</i></strong></a>
                                                   </td>
                                            
                                                </tr>
                                                <tr class="hidden">
                                                    <td>
                                                         <input  id ="enum_answer5" type="text"  class="form-control" name="answer5"  placeholder="answer 5">
                                                    </td>
                                                    <td>

                                                        <a href="#" id="button5Min" class="btn btn-danger "><strong><i>-</i></strong></a>
                                                        <a href="#" id="button5Add" class="btn btn-success "><strong><i>+</i></strong></a>
                                                    </td>
                                                </tr>
                                                 <tr class="hidden">
                                                    <td>
                                                         <input  id ="enum_answer6" type="text"  class="form-control " name="answer6"  placeholder="answer 6">
                                                    </td>

                                                    <td>

                                                       <a href="#" id="button6Min" class="btn btn-danger "><strong><i>-</i></strong></a>
                                                        <a href="#" id="button6Add" class="btn btn-success "><strong><i>+</i></strong></a>

                                                    </td>
                                                </tr>
                                                <tr class="hidden">
                                                    <td>
                                                         <input  id ="enum_answer7" type="text"  class="form-control" name="answer7"  placeholder="answer 7">
                                                    </td>

                                                    <td>

                                                       <a href="#" id="button7Min" class="btn btn-danger"><strong><i>-</i></strong></a>
                                                        <a href="#" id="button7Add" class="btn btn-success "><strong><i>+</i></strong></a>

                                                    </td>

                                                </tr>
                                               <tr class="hidden">
                                                    <td>
                                                         <input  id ="enum_answer8" type="text"  class="form-control " name="answer8"  placeholder="answer 8">
                                                    </td>

                                                    <td>

                                                       <a href="#" id="button8Min" class="btn btn-danger"><strong><i>-</i></strong></a>
                                                        <a href="#" id="button8Add" class="btn btn-success"><strong><i>+</i></strong></a>

                                                    </td>
                                                </tr>
                                                <tr class="hidden">
                                                    <td>
                                                         <input  id ="enum_answer9" type="text"  class="form-control" name="answer9"  placeholder="answer 9">
                                                    </td>

                                                    <td >

                                                       <a href="#" id="button9Min" class="btn btn-danger"><strong><i>-</i></strong></a>
                                                        <a href="#" id="button9Add" class="btn btn-success"><strong><i>+</i></strong></a>

                                                    </td>
                                                </tr>
                                                <tr class="hidden">
                                                    <td>
                                                         <input  id ="enum_answer10" type="text"  class="form-control" name="answer10"  placeholder="answer 10">
                                                        <strong><p id="mess" class="text-danger">You reach the maximum answers!!</p></strong>
                                                    </td>


                                                    <td>
                                                       <a href="#" id="button10Min"  class="btn btn-danger hidden"><strong><i>-</i></strong></a>
                                                        
                                                    </td>
                                                    
                                                </tr>
                                                   
                                                    
                                            </table>
                                                
                                                 <div class="hr hr-double dotted"></div>
                                            
                                          
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="resetModal();">Cancel</button>
                                        <input type="submit" class="btn btn-info submit4" value="Save This New Question +" id="add_enum"/>
                                        
                                      </div>
                                        </form>
                                        </div>
										
									</div>
								
						
                             
			
                      </div>
                    </div>
             
               
            </div>
                
          </div>
    </div>
                    </div>
        
        <div id="myModalPostExam" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
              <?php 
              if (isset($_GET["postno"]))
                {
                    $postno = $_GET["postno"];
                    
                    $act = "classinfo.php?status=publish&update=1&postno='$postno'&examno=".$_SESSION["exam_no"];
                }
              
              else
                {
                    $act = "classinfo.php?status=publish";
                }?>
            <div class="modal-content"><form action="<?php echo $act; ?>" method="post">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title blue bigger"><center><strong>Publish Exam</strong></center></h4>
                  <span><center><?php echo $exam_name; ?></center></span>
              </div>
              <div class="modal-body">
                    
                  <div class="row post">
						<div class="col-xs-12 col-sm-6">
						
                       <center><h4>Exam Details</h4></center>
                            <hr />
                           
                            <label for="exam_name">Exam Title</label>
                            <input id="exam_name" name="exam_name" type="text" class="form-control" value="<?php echo $exam_name; ?>"/>
                            
                            <div class="space space-4"></div>
                            <div class="input-group">
                            <label for="exam_desc">Exam Description / Instructions</label>
                            <input type="text" id="exam_desc" name="exam_desc" class="form-control" value="<?php echo $exam_desc; ?>">
                            </div>
                            <?php
                            
                            $exam_no = $_SESSION["exam_no"];
                                include("../redundant/_connection.php");
                                $sql1 = "SELECT * FROM `exam_details` WHERE `exam_no`=".$_SESSION["exam_no"];
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
                            
                            ?>
                            
                            
                            <dl class="dl-horizontal" id="dl">
                    <h3>Questions Count</h3>
					<dt>Multiple Choice:</dt>
						<dd><?php echo $mcCount; ?></dd>
					<dt>True or False:</dt>
					   <dd><?php echo $tofCount; ?></dd>
                    <dt>Identification:</dt>
						<dd>  <?php echo $idenCount; ?></dd>
					<dt>Enumeration:</dt>
					   <dd> <?php echo $enumCount; ?></dd>
                 <dt>TOTAL QUESTIONS:</dt>
					   <dd id="quescount"> <?php $totalquestion= $enumCount+$idenCount+$tofCount+$mcCount; echo $totalquestion; ?></dd>
                 
                      
				    </dl>
                            
                            
                            <hr />
                            
                            
						</div>

						<div class="col-xs-12 col-sm-6">
                            <label for="date-timepicker1">Date &amp; Time of Availability</label>
                          
                            <div class="input-group">
                                <input required id="date-timepicker1" value="<?php echo $exam_date_start; ?>" type="text" class="form-control" name="datetime"/>
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar bigger-110"></i>
                                </span>
                            </div>
                            
                            <label for="date-timepicker2">Date &amp; Time of Expiration</label>

                            <div class="input-group">
                                <input required id="date-timepicker2" type="text" disabled class="form-control" value="<?php echo $exam_date_expired; ?>" name="datetimeexpired"/>
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar bigger-110"></i>
                                </span>
                            </div>
                                    <div class="space space-4"></div>
                           <label for="timepicker1">Exam Time Limit</label>

                            <div class="input-group bootstrap-timepicker">
                                <input required id="timepicker1" type="text" class="form-control" value="<?php echo $time_limit; ?>" name="timelimit"/>
                                <span class="input-group-addon">
                                    <i class="fa fa-clock-o bigger-110"></i>
                                </span>
                            </div>

                            <div class="space space-4"></div>
                           
                            

                            <div class="input-group">
                            <label for="exam_pasword">Exam Password</label>
                            <input id="exam_password" required name="exam_password" value="<?php echo $exam_password; ?>" type="password" autocomplete="off" class="form-control" />
                                
                                    <input type="checkbox" id="showpass" style="width:16px; height:16px; ">
                                    <label for="showpass">Show Password</label>
                             
                            </div>
                            <hr />
                            
                               <div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
								<strong>Note:</strong>
                                Question numbering upon creating questions will not be carry on taking the exam. 
											<br>
				            </div>         
						
						</div>
                      
				</div>
                  
              </div>
              <div class="modal-footer">
           
              <input type='submit' class='btn btn-info pubpub' value='Publish' />
        
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
                
                </form>
            </div>

          </div>
    </div>
                
           
		</div><!-- /.main-container -->
        </div>
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
		<script src="../assets/js/chosen.jquery.min.js"></script>
		
		<script src="../assets/js/bootstrap-datepicker.min.js"></script>
		<script src="../assets/js/bootstrap-timepicker.min.js"></script>
		<script src="../assets/js/moment.min.js"></script>
		<script src="../assets/js/daterangepicker.min.js"></script>
		<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="../assets/js/bootstrap-tag.min.js"></script>
        <script src="../assets/js/jquery.gritter.min.js"></script>
        <script src="../assets/js/spin.js"></script>
        
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
		
        
      
     <script type="text/javascript">

			
			jQuery(function($) {

            var myTable = 
            $('#viewall')
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
            .DataTable( {

                bAutoWidth: false,

                "aoColumns": [
                  { "bSortable": true }, { "bSortable": true },
                  null, {"width": "15%"},{"width": "15%"}
                ],

                "aaSorting": [],

                "columnDefs": [
                    { "width": "3%", "targets": 0 }
                  ],

                "responsive" : false
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
                   
                  }		  
                ]
            } );
            myTable.buttons().container().appendTo($('.tableTools-container'));
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
            $('#viewall > thead > tr > th input[type=checkbox], #viewall_wrapper input[type=checkbox]').eq(0).on('click', function(){
                var th_checked = this.checked;//checkbox inside "TH" table header

                $('#viewall').find('tbody > tr').each(function(){
                    var row = this;
                    if(th_checked) myTable.row(row).select();
                    else  myTable.row(row).deselect();
                });	
            });

            //select/deselect a row when the checkbox is checked/unchecked
            $('#viewall').on('click', 'td input[type=checkbox]' , function(){
                var row = $(this).closest('tr').get(0);
                if(this.checked) myTable.row(row).deselect();
                else myTable.row(row).select();
            });



            $(document).on('click', '#viewall .dropdown-toggle', function(e) {
                e.stopImmediatePropagation();
                e.stopPropagation();
                e.preventDefault();
            });






			});
		</script>
        <!-- inline scripts related to this page    <script type="text/javascript">

			
			jQuery(function($) {

            var myTable = 
            $('#questions_table')
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
            $('#questions_table > thead > tr > th input[type=checkbox], #questions_table_wrapper input[type=checkbox]').eq(0).on('click', function(){
                var th_checked = this.checked;//checkbox inside "TH" table header

                $('#questions_table').find('tbody > tr').each(function(){
                    var row = this;
                    if(th_checked) myTable.row(row).select();
                    else  myTable.row(row).deselect();
                });	
            });

            //select/deselect a row when the checkbox is checked/unchecked
            $('#questions_table').on('click', 'td input[type=checkbox]' , function(){
                var row = $(this).closest('tr').get(0);
                if(this.checked) myTable.row(row).deselect();
                else myTable.row(row).select();
            });



            $(document).on('click', '#questions_table .dropdown-toggle', function(e) {
                e.stopImmediatePropagation();
                e.stopPropagation();
                e.preventDefault();
            });






			});
		</script>
        <script type="text/javascript">

			
			jQuery(function($) {

            var myTable = 
            $('#questions_table')
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
            $('#questions_table > thead > tr > th input[type=checkbox], #questions_table_wrapper input[type=checkbox]').eq(0).on('click', function(){
                var th_checked = this.checked;//checkbox inside "TH" table header

                $('#questions_table').find('tbody > tr').each(function(){
                    var row = this;
                    if(th_checked) myTable.row(row).select();
                    else  myTable.row(row).deselect();
                });	
            });

            //select/deselect a row when the checkbox is checked/unchecked
            $('#questions_table').on('click', 'td input[type=checkbox]' , function(){
                var row = $(this).closest('tr').get(0);
                if(this.checked) myTable.row(row).deselect();
                else myTable.row(row).select();
            });



            $(document).on('click', '#questions_table .dropdown-toggle', function(e) {
                e.stopImmediatePropagation();
                e.stopPropagation();
                e.preventDefault();
            });






			});
		</script> -->
        
        
        
		<script type="text/javascript">
           
            
            
            
     function nono(){ $('#myModalEditExam').modal("hide"); $.gritter.removeAll();
         return false;};
   function yesyes(){  $.gritter.removeAll();
         return false;};
   
            
			jQuery(function($) {
				
                $('.pubclicktot').on('click', function() {
                    <?php echo "var tot = $totalquestion;";?>
                    
                    if (tot == 0)
                        {
                            alert("You cannot publish exam without questions...")
                        }
                });
                
                $(".chb").change(function()
                  {
                      $(".chb").prop('checked',false);
                      $(this).prop('checked',true);
                  });
               
               
               
                
                $('#addiden1').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#addiden2').closest("tr").removeClass("hidden");
                     $('#addiden2').removeClass("hidden");
                    $('#miniden2').removeClass("hidden");
                });
                 $('#addiden2').on('click', function() {
                    $(this).addClass("hidden");
                    $('#miniden2').addClass("hidden");
                    $('#miniden3').closest("tr").removeClass("hidden");
                    $('#miniden3').removeClass("hidden");
                });
                 $('#miniden3').on('click', function() {
                    $(this).closest("tr").addClass("hidden");
                    $('#iden_answer3').val("");
                   $('#addiden2').removeClass("hidden");
                     $('#miniden2').removeClass("hidden");
                });
                $('#miniden2').on('click', function() {
                    $(this).closest("tr").addClass("hidden");
                    $('#iden_answer2').val("");
                    $('#addiden1').removeClass("hidden");
                   
                });
         
                 $('#btnaddmc4').on('click', function() {
                     $(this).addClass("hidden")
                    $('#btnaddmc5').closest("tr").removeClass("hidden");
                });
                 $('#btnaddmc5').on('click', function() {
                     $(this).addClass("hidden")
                     $('#btnminmc5').addClass("hidden")
                    $('#btnaddmc6').closest("tr").removeClass("hidden");
                });
                 $('#btnaddmc6').on('click', function() {
                     $(this).addClass("hidden")
                     $('#btnminmc6').addClass("hidden")
                    $('#btnaddmc7').closest("tr").removeClass("hidden");
                });
                 $('#btnaddmc7').on('click', function() {
                     $(this).addClass("hidden")
                     $('#btnminmc7').addClass("hidden")
                    $('#btnaddmc8').closest("tr").removeClass("hidden");
                });
                 $('#btnaddmc8').on('click', function() {
                     $(this).addClass("hidden")
                     $('#btnminmc8').addClass("hidden")
                    $('#btnaddmc9').closest("tr").removeClass("hidden");
                });
                 $('#btnaddmc9').on('click', function() {
                     $(this).addClass("hidden")
                     $('#btnminmc9').addClass("hidden")
                    $('#btnminmc10').closest("tr").removeClass("hidden");
                });
                 $('#btnminmc10').on('click', function() {
                     $(this).closest("tr").addClass("hidden");
                     $('#answer10').prop("checked",false);
                     $('#choice10').val("");
                     $('#btnminmc9').removeClass("hidden");
                     $('#btnaddmc9').removeClass("hidden");
                });
                 $('#btnminmc9').on('click', function() {
                     $(this).closest("tr").addClass("hidden");
                     $('#answer9').prop("checked",false);
                     $('#choice9').val("");
                     $('#btnminmc8').removeClass("hidden");
                     $('#btnaddmc8').removeClass("hidden");
                });
                 $('#btnminmc8').on('click', function() {
                     $(this).closest("tr").addClass("hidden");
                     $('#answer8').prop("checked",false);
                     $('#choice8').val("");
                     $('#btnminmc7').removeClass("hidden");
                     $('#btnaddmc7').removeClass("hidden");
                });
                 $('#btnminmc7').on('click', function() {
                     $(this).closest("tr").addClass("hidden");
                     $('#answer7').prop("checked",false);
                     $('#choice7').val("");
                     $('#btnminmc6').removeClass("hidden");
                     $('#btnaddmc6').removeClass("hidden");
                });
                 $('#btnminmc6').on('click', function() {
                     $(this).closest("tr").addClass("hidden");
                     $('#answer6').prop("checked",false);
                     $('#choice6').val("");
                     $('#btnminmc5').removeClass("hidden");
                     $('#btnaddmc5').removeClass("hidden");
                });
                 $('#btnminmc5').on('click', function() {
                     $(this).closest("tr").addClass("hidden");
                     $('#answer5').prop("checked",false);
                     $('#choice5').val("");
                     
                     $('#btnaddmc4').removeClass("hidden");
                });
                
                
                
                $('#button3Add').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer4').removeClass("hidden");
                    $('#button4Add').closest("tr").removeClass("hidden");
                     $('#button4Add').removeClass("hidden");
                    $('#button4Min').removeClass("hidden");
                });
                 $('#button4Add').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer5').removeClass("hidden");
                    $('#button5Add').closest("tr").removeClass("hidden");
                     $('#button5Add').removeClass("hidden");
                     $('#button5Min').removeClass("hidden");
                     $('#button4Min').addClass("hidden");
                });
                 $('#button5Add').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer6').removeClass("hidden");
                    $('#button6Add').closest("tr").removeClass("hidden");
                     $('#button6Add').removeClass("hidden");
                     $('#button6Min').removeClass("hidden");
                     $('#button5Min').addClass("hidden");
                });
                 $('#button6Add').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer7').removeClass("hidden");
                    $('#button7Add').closest("tr").removeClass("hidden");
                     $('#button7Add').removeClass("hidden");
                     $('#button7Min').removeClass("hidden");
                     $('#button6Min').addClass("hidden");
                });
                 $('#button7Add').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer8').removeClass("hidden");
                    $('#button8Add').closest("tr").removeClass("hidden");
                     $('#button8Add').removeClass("hidden");
                     $('#button8Min').removeClass("hidden");
                     $('#button7Min').addClass("hidden");
                });
                
                 $('#button8Add').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer9').removeClass("hidden");
                    $('#button9Add').closest("tr").removeClass("hidden");
                     $('#button9Add').removeClass("hidden");
                     $('#button9Min').removeClass("hidden");
                     $('#button8Min').addClass("hidden");
                });
                 $('#button9Add').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer10').removeClass("hidden");
                    $('#button10Min').closest("tr").removeClass("hidden");
                     $('#button10Min').removeClass("hidden");
                     $('#button9Min').addClass("hidden");
                
                    
                    
                });
              
              
                
                $('#button10Min').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer10').addClass("hidden");
                    $('#button9Min').removeClass("hidden");
                    $('#button9Add').removeClass("hidden");
                    $('#button10Min').closest("tr").addClass("hidden");
                     $('#button10Min').addClass("hidden");
                   $('#enum_answer10').val("");
                });
                
                $('#button9Min').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer9').addClass("hidden");
                    $('#button8Min').removeClass("hidden");
                    $('#button8Add').removeClass("hidden");
                    $('#button9Min').closest("tr").addClass("hidden");
                     $('#button9Min').addClass("hidden");
                    $('#enum_answer9').val("");
                });
                
                $('#button8Min').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer8').addClass("hidden");
                    $('#button7Min').removeClass("hidden");
                    $('#button7Add').removeClass("hidden");
                    $('#button8Min').closest("tr").addClass("hidden");
                     $('#button8Min').addClass("hidden");
                    $('#enum_answer8').val("");
                });
                
                $('#button7Min').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer7').addClass("hidden");
                    $('#button6Min').removeClass("hidden");
                    $('#button6Add').removeClass("hidden");
                    $('#button7Min').closest("tr").addClass("hidden");
                     $('#button7Min').addClass("hidden");
                    $('#enum_answer7').val("");
                });
                
                $('#button6Min').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer6').addClass("hidden");
                    $('#button5Min').removeClass("hidden");
                    $('#button5Add').removeClass("hidden");
                    $('#button6Min').closest("tr").addClass("hidden");
                     $('#button6Min').addClass("hidden");
                    $('#enum_answer6').val("");
                });
                 $('#button5Min').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer5').addClass("hidden");
                    $('#button4Min').removeClass("hidden");
                    $('#button4Add').removeClass("hidden");
                    $('#button5Min').closest("tr").addClass("hidden");
                     $('#button5Min').addClass("hidden");
                     $('#enum_answer5').val("");
                });
                
                $('#button4Min').on('click', function() {
                    $(this).addClass("hidden");
                    
                    $('#enum_answer4').addClass("hidden");
                    
                    $('#button3Add').removeClass("hidden");
                    $('#button4Min').closest("tr").addClass("hidden");
                     $('#button4Min').addClass("hidden");
                    $('#enum_answer4').val("");
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
                
                
                
				//datepicker plugin
				//link
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
              
			        
           
				
				if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
                    minDate:new Date(),
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
                $( "date-timepicker1" ).datepicker( "setDate" );
				
                
                var minDateSet;
                $('#date-timepicker1').blur(function(e){
                    e.preventDefault();
                    $('#date-timepicker2').removeAttr("disabled");
                    minDateSet = $('#date-timepicker1').val();
                    //alert(minDateSet);
                    
                     
				if(!ace.vars['old_ie']) $('#date-timepicker2').datetimepicker({
                    minDate:minDateSet,
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
				
                    
                    
                });
               
                
			});
		</script>
        
     
       
               
        
        
<script>  
 $(document).ready(function(){  
    
     
         $("#myModalEditExam").on("hide", function() {    // remove the event listeners when the dialog is dismissed
                $("#myModalEditExam a.btn").off("click");
            });

            $("#myModalEditExam").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
                $("#myModalEditExam").remove();
            });

            $("#myModalEditExam").modal({                    // wire up the actual modal functionality and show the dialog
              "backdrop"  : "static",
              "keyboard"  : true,
              "show"      : false                     // ensure the modal is shown immediately
            });
     
      $("#myModalViewAllExam").on("hide", function() {    // remove the event listeners when the dialog is dismissed
                $("#myModalViewAllExam a.btn").off("click");
            });

            $("#myModalViewAllExam").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
                $("#myModalViewAllExam").remove();
            });

            $("#myModalViewAllExam").modal({                    // wire up the actual modal functionality and show the dialog
              "backdrop"  : "static",
              "keyboard"  : true,
              "show"      : false                     // ensure the modal is shown immediately
            });
     
     
     
     
     
     
    var question_id = 0;
     $(document).on('click', '.edit_data1', function(){  
        question_id = $(this).attr("id");
         $('#myModalViewAllExam').modal("hide");
         $('#multi_add').val("Save"); 
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{question_id:question_id},  
                dataType:"json",  
                success:function(data){  
                    
                    $('#mc').addClass( 'active' );
                        $('#enum').removeClass( 'active' );
                        $('#iden').removeClass( 'active' );
                       $('#tof').removeClass( 'active' );
                        $('#faq-tab-1').addClass( 'in active' );
                        $('#faq-tab-4').removeClass( 'in active' );
                        $('#faq-tab-3').removeClass( 'in active' );
                       $('#faq-tab-2').removeClass( 'in active' );
                    
              
                     // $('#question_multiple');
                         tinyMCE.get('question_multiple').setContent((data.question).replace(/\\/gi, ""));
                    //textarea_multi.content.set(data.question);
                    
                    
                     $('#choice1').val(data.choice1);  
                    $('#choice2').val(data.choice2);
                     $('#choice3').val(data.choice3);  
                    $('#choice4').val(data.choice4);
                    
                   
                    var choice5  = data.choice5;
                    var choice6  = data.choice6;
                    var choice7  = data.choice7;
                    var choice8  = data.choice8;
                    var choice9  = data.choice9;
                    var choice10  = data.choice10;
                    
                    
                    
                    var answer1  = data.answer1;
                    var answer2  = data.answer2;
                    var answer3  = data.answer3;
                    var answer4  = data.answer4;
                    var answer5  = data.answer5;
                    var answer6  = data.answer6;
                    var answer7  = data.answer7;
                    var answer8  = data.answer8;
                    var answer9  = data.answer9;
                    var answer10  = data.answer10;
                 
                  
                     
                    if(answer1==null || answer1=="")
                    {
                        $('mc_answer1').prop('checked', false);
                    }
                    else
                    {
                        $('#mc_answer1').prop('checked', true);
                    }
                   
                    if(answer2==null || answer2=="")
                    {
                        $('#mc_answer2').prop('checked', false);
                    }
                    else
                    {
                        $('#mc_answer2').prop('checked', true);
                    } 
                    if(answer3==null || answer3=="")
                    {
                        $('#answer3').prop('checked', false);
                    }
                    else
                    {
                        $('#answer3').prop('checked', true);
                    }
                    if(answer4==null || answer4=="")
                    {
                        $('#answer4').prop('checked', false);
                    }
                    else
                    {
                        $('#answer4').prop('checked', true);
                    }
                    if(answer5==null || answer5=="")
                    {
                        $('#answer5').prop('checked', false);
                    }
                    else
                    {
                        $('#answer5').prop('checked', true);
                    }
                    if(answer6==null || answer6=="")
                    {
                        $('#answer6').prop('checked', false);
                    }
                    else
                    {
                        $('#answer6').prop('checked', true);
                    }
                    if(answer7==null || answer7=="")
                    {
                        $('#answer7').prop('checked', false);
                       
                    }
                    else
                    {
                        $('#answer7').prop('checked', true);
                       
                    }
                 
                    if(answer8==null || answer8=="")
                    {
                        $('#answer8').prop('checked', false);
                    }
                    else
                    {
                        $('#answer8').prop('checked', true);
                    }
                    if(answer9==null || answer9=="")
                    {
                        $('#answer9').prop('checked', false);
                    }
                    else
                    {
                        $('#answer9').prop('checked', true);
                    }
                    if(answer10==null || answer10=="")
                    {
                        $('#answer10').prop('checked', false);
                    }
                    else
                    {
                        $('#answer10').prop('checked', true);
                    }
                  
                    
                    if(choice5==null || choice5=="")
                   {
                       $('#btnaddmc5').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#choice5').val(choice5);

                           $('#btnaddmc5').closest("tr").removeClass("hidden");
                            $('#btnaddmc5').removeClass("hidden");
                             $('#btnminmc5').removeClass("hidden");
                            $('#btnaddmc4').addClass("hidden");
             
                        }
                       if(choice6==null || choice6=="")
                   {
                       $('#btnaddmc6').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#choice6').val(choice6);

                           $('#btnaddmc6').closest("tr").removeClass("hidden");
                            $('#btnaddmc6').removeClass("hidden");
                             $('#btnminmc6').removeClass("hidden");
                            $('#btnaddmc5').addClass("hidden");
                             $('#btnminmc5').addClass("hidden")
             
                        }
                    if(choice7==null || choice7=="")
                   {
                       $('#btnaddmc7').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#choice7').val(choice7);

                           $('#btnaddmc7').closest("tr").removeClass("hidden");
                            $('#btnaddmc7').removeClass("hidden");
                             $('#btnminmc7').removeClass("hidden");
                            $('#btnaddmc6').addClass("hidden");
                             $('#btnminmc6').addClass("hidden")
             
                        }
                    if(choice8==null || choice8=="")
                   {
                       $('#btnaddmc8').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#choice8').val(choice8);

                           $('#btnaddmc8').closest("tr").removeClass("hidden");
                            $('#btnaddmc8').removeClass("hidden");
                             $('#btnminmc8').removeClass("hidden");
                            $('#btnaddmc7').addClass("hidden");
                             $('#btnminmc7').addClass("hidden")
             
                        }
                    if(choice9==null || choice9=="")
                   {
                       $('#btnaddmc9').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#choice9').val(choice9);

                           $('#btnaddmc9').closest("tr").removeClass("hidden");
                            $('#btnaddmc9').removeClass("hidden");
                             $('#btnminmc9').removeClass("hidden");
                            $('#btnaddmc8').addClass("hidden");
                             $('#btnminmc8').addClass("hidden")
             
                        }
                     if(choice10==null || choice10=="")
                   {
                       $('#btnminmc10').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#choice10').val(choice10);

                           $('#btnminmc10').closest("tr").removeClass("hidden");
                         
                            $('#btnaddmc9').addClass("hidden");
                             $('#btnminmc9').addClass("hidden")
             
                        }
                   
                  
                     $('#multi_add').val("Save");  
                     $('#myModalEditExam').modal('show');  
                }  
           }); 
      });
     $(document).on('click', '.edit_data2', function(){  
        question_id = $(this).attr("id");
         $('#add_tof').val("Save"); 
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{question_id:question_id},  
                dataType:"json",  
                success:function(data){
                    
                    $('#mc').removeClass( 'active' );
                        $('#enum').removeClass( 'active' );
                        $('#iden').removeClass( 'active' );
                       $('#tof').addClass( 'active' );
                        $('#faq-tab-1').removeClass( 'in active' );
                        $('#faq-tab-4').removeClass( 'in active' );
                        $('#faq-tab-3').removeClass( 'in active' );
                       $('#faq-tab-2').addClass( 'in active' );
                    
                    
                 
                   tinyMCE.get('questionTOF').setContent((data.question).replace(/\\/gi, ""));

                   // textarea_tof.content.set(data.question);
                   var answer1  = data.answer1;
                    if(answer1=="True"){
                        $('#checktrue').prop('checked',true);
                       
                    }
                    else
                    {
                        $('#checkfalse').prop('checked',true);
                  
                    }

                     $('#add_tof').val("Save");  
                     $('#myModalEditExam').modal('show');  
                }  
           });  
           });  
     $(document).on('click', '.edit_data3', function(){  
        question_id = $(this).attr("id"); 
       
          $('#add_iden').val("Save"); 
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{question_id:question_id},  
                dataType:"json",  
                success:function(data){  
                    
                    $('#mc').removeClass( 'active' );
                        $('#enum').removeClass( 'active' );
                        $('#iden').addClass( 'active' );
                       $('#tof').removeClass( 'active' );
                        $('#faq-tab-1').removeClass( 'in active' );
                        $('#faq-tab-4').removeClass( 'in active' );
                        $('#faq-tab-3').addClass( 'in active' );
                       $('#faq-tab-2').removeClass( 'in active' );
                 
               
                         tinyMCE.get('questionIDEN').setContent((data.question).replace(/\\/gi, ""));
                    //textarea_iden.content.set(data.question);
             
                     $('#iden_answer1').val(data.answer1);  
                    var answer2= data.answer2;
                    var answer3  = data.answer3; 
              
                  
                    if(answer2==null || answer2=="")
                   {
                       $('#iden_answer2').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#iden_answer2').val(answer2);
                            $('#iden_answer2').closest("tr").removeClass("hidden");
                            $('#miniden2').removeClass("hidden");
                            $('#addiden1').addClass("hidden");
                            $('#addiden2').removeClass("hidden");
                         
             
                        }
                   
                    if(answer3==null || answer3=="")
                   {
                       $('#iden_answer3').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#iden_answer3').val(answer3);
                            $('#iden_answer3').closest("tr").removeClass("hidden");
                            $('#miniden2').addClass("hidden");
                            $('#addiden2').addClass("hidden");
                            $('#miniden3').removeClass("hidden");
                            

                        }
                    

                     $('#myModalEditExam').modal('show');  
                }  
           });  
      });
     $(document).on('click', '.edit_data4', function(){
         
           question_id = $(this).attr("id");
          $('#add_enum').val("Save"); 
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{question_id:question_id},  
                dataType:"json",  
                success:function(data){  
                    
                    $('#mc').removeClass( 'active' );
                        $('#enum').addClass( 'active' );
                        $('#iden').removeClass( 'active' );
                       $('#tof').removeClass( 'active' );
                        $('#faq-tab-1').removeClass( 'in active' );
                        $('#faq-tab-2').removeClass( 'in active' );
                        $('#faq-tab-4').addClass( 'in active' );
                       $('#faq-tab-3').removeClass( 'in active' );
                  
                 
              tinyMCE.get('questionENUM').setContent((data.question).replace(/\\/gi, ""));
                    $('#enum_answer1').val(data.answer1);
                    $('#enum_answer2').val(data.answer2);
                     $('#enum_answer3').val(data.answer3);
                    
                    var answer4  = data.answer4;
                    var answer5  = data.answer5;
                    var answer6  = data.answer6;
                    var answer8  = data.answer8;
                    var answer7  = data.answer7;
                    var answer9  = data.answer9;
                    var answer10  = data.answer10;
                
                  
                       
                        
             
                    if(answer4==null || answer4=="")
                   {
                       $('#button4Add').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#enum_answer4').val(answer5);

                           $('#button4Add').closest("tr").removeClass("hidden");
                            $('#button4Add').removeClass("hidden");
                       
                            $('#button3Add').addClass("hidden");
             
                        }
                   
                    if(answer5==null || answer5=="")
                   {
                       $('#button5Add').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#enum_answer5').val(answer5);

                           $('#button5Add').closest("tr").removeClass("hidden");
                            $('#button5Add').removeClass("hidden");
                             $('#button5Min').removeClass("hidden");
                            $('#button4Add').addClass("hidden");
                            $('#button4Min').addClass("hidden");
             
                        }
                       if(answer6==null || answer6=="")
                   {
                       $('#button6Add').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#enum_answer6').val(answer6);

                           $('#button6Add').closest("tr").removeClass("hidden");
                            $('#button6Add').removeClass("hidden");
                             $('#button6Min').removeClass("hidden");
                            $('#button5Add').addClass("hidden");
                             $('#button5Min').addClass("hidden")
             
                        }
                    if(answer7==null || answer7=="")
                   {
                       $('#btnaddmc7').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#enum_answer7').val(answer7);

                           $('#button7Add').closest("tr").removeClass("hidden");
                            $('#button7Add').removeClass("hidden");
                             $('#button7Min').removeClass("hidden");
                            $('#button6Add').addClass("hidden");
                             $('#button6Min').addClass("hidden")
             
                        }
                    if(answer8==null || answer8=="")
                   {
                       $('#button8Min').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#enum_answer8').val(answer8);

                           $('#button8Add').closest("tr").removeClass("hidden");
                            $('#button8Add').removeClass("hidden");
                             $('#button8Min').removeClass("hidden");
                           $('#button7Add').addClass("hidden");
                             $('#button7Min').addClass("hidden")
             
                        }
                    if(answer9==null || answer9=="")
                   {
                       $('#button9Min').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#enum_answer9').val(answer9);

                           $('#button9Add').closest("tr").removeClass("hidden");
                            $('#button9Add').removeClass("hidden");
                             $('#button9Min').removeClass("hidden");
                            $('#button8Add').addClass("hidden");
                             $('#button8Min').addClass("hidden")
             
                        }
                     if(answer10==null || answer10=="")
                   {
                       $('#button10Min').closest("tr").addClass("hidden");
                        
                    }
                    else
                        {
                            $('#enum_answer10').val(answer10);

                           $('#button10Min').closest("tr").removeClass("hidden");
                         
                            $('#button9Add').addClass("hidden");
                             $('#button9Min').addClass("hidden")
                             $('#button10Min').removeClass("hidden")
             
                        }
                   
                    
                      
                  
                        
                   
                    
                     
                     $('#myModalEditExam').modal('show');  
                }  
           });  
      });
    
     $(document).on('click', '.pubpub', function(){  
         if($('#quescount').text()==0)
             {
                 alert("YOU CANT PUBLISH EXAM WITHOUT QUESTION!");
             }
         
     });
    
     
     $(document).on('click', '.submit1', function(){  
           event.preventDefault(); 
         if($('#multi_add').val()=="Save This New Question +" )
        {
            question_id = 0;
        }
            if($('#choice1').val()!="" && $('#choice2').val()!=""){
            
            $('#question_multiple').val(tinymce.get('question_multiple').getContent());
                $.ajax({  
                     url:"examinfo.php?typeexam=multi&id="+ question_id,
                     method:"POST",  
                     data:$('#multi_form').serialize(),  
                     beforeSend:function(){ 
                         if($('#multi_add').val()=="Save This New Question +" )
                         {
                            $('#multi_add').val("Adding ...");
                         }
                         else
                         {
                            $('#multi_add').val("Saving ...");
                         }
                         
                         
                            
                     },  
                     success:function(data){  
                          $('#multi_form')[0].reset();
                 
                            //reset.content.set(resetVal);
                           


                             if($('#multi_add').val()=="Adding ..." )
                             {
                               $.gritter.add({
                                title: '<h2><center>Question Successfully Added!</center></h2>',
                                sticky: true,
                                text: '<h3 class="center"> Do you want to add another question? </h3><br><br><div  class="pull-right"> <button onclick="yesyes()" class="btn btn-info">Yes</button>'+ " " +'<button onclick="nono()" class="btn btn-default">No</button></div>',
                                class_name: 'gritter-success gritter-center gritter-light' 
                                });
                             }
                             else
                             {
                                 $.gritter.add({
                                title: '<h2><center>Question Successfully Updated!</center></h2>',
                                time: 'fast',
                                class_name: 'gritter-success gritter-center gritter-dark' 
                                });

                             }

                           $('#btnminmc10').closest("tr").addClass("hidden");
                         $('#btnminmc9').closest("tr").addClass("hidden");
                         $('#btnminmc8').closest("tr").addClass("hidden");
                         $('#btnminmc7').closest("tr").addClass("hidden");
                         $('#btnminmc6').closest("tr").addClass("hidden");
                         $('#btnminmc5').closest("tr").addClass("hidden");
                         $('#btnaddmc4').removeClass("hidden");
                         $('#btnminmc5').removeClass("hidden");
                         $('#btnaddmc5').removeClass("hidden");
                         $('#btnminmc6').removeClass("hidden");
                         $('#btnaddmc6').removeClass("hidden");
                         $('#btnminmc7').removeClass("hidden");
                         $('#btnaddmc7').removeClass("hidden");
                         $('#btnminmc8').removeClass("hidden");
                         $('#btnaddmc8').removeClass("hidden");
                         $('#btnminmc9').removeClass("hidden");
                         $('#btnaddmc9').removeClass("hidden");
                         $('#btnminmc10').removeClass("hidden");
                        
                      
                         
                          $('#multi_add').val("Save This New Question +"); 
                          //$('#multidiv').html(data);  
                         
                        
	                    	var myExampleTable = $('#viewall').DataTable({
                
                                "bAutoWidth" : false,

                                "ajax" : "questions_data.json",
                                "order": [[ 0, "desc" ]],

                                "columns" : [
                                    {"data" : "question_no"},
                                    {"data" : "question"},
                                    {"data" : "question_type"},
                                    {"data" : "choices"},
                                    {"data" : "answers"}
                                ],

                                 "bDestroy": true
                            });
                         
                         
                     }  
                });  
            }else
                {
                    alert("Choices must be provided!");
                }
      }); 
     $(document).on('click', '.submit2', function(){  
           event.preventDefault(); 
           if($('#add_tof').val()=="Save This New Question +" )
        {
            question_id = 0;
        }
         
        
           $('#questionTOF').val(tinymce.get('questionTOF').getContent());
          if($('.chb').is(":checked")){
                $.ajax({  
                     url:"examinfo.php?typeexam=tof&id="+ question_id,
                    
                     method:"POST",  
                     data:$('#tof_form').serialize(),  
                     beforeSend:function(){  
                        
                         if($('#add_tof').val()=="Save This New Question +" )
                         {
                            $('#add_tof').val("Adding ...");
                         }
                         else
                         {
                            $('#add_tof').val("Saving ...");
                         }
                     },  
                     success:function(data){  
                   
                         
                             $('#tof_form')[0].reset();
                         if($('#add_tof').val()=="Adding ..." )
                             {
                                $.gritter.add({
                                title: '<h2><center>Question Successfully Added!</center></h2>',
                                sticky: true,
                                text: '<h3 class="center"> Do you want to add another question? </h3><br><br><div  class="pull-right"> <button onclick="yesyes()" class="btn btn-info">Yes</button>'+ " " +'<button onclick="nono()" class="btn btn-default">No</button></div>',
                                class_name: 'gritter-success gritter-center gritter-light' 
                                });
                             }
                             else
                             {
                                 $.gritter.add({
                                title: '<h2><center>Question Successfully Updated!</center></h2>',
                                time: 'fast',
                                class_name: 'gritter-success gritter-center gritter-dark' 
                                });

                             }
                    
                         $('#add_tof').val("Save This New Question +"); 
                          $('.chb').prop('checked',false);
                         
                          var myExampleTable = $('#viewall').DataTable({
                
                                "bAutoWidth" : false,

                                "ajax" : "questions_data.json",
                              "order": [[ 0, "desc" ]],

                                "columns" : [
                                    {"data" : "question_no"},
                                    {"data" : "question"},
                                    {"data" : "question_type"},
                                    {"data" : "choices"},
                                    {"data" : "answers"}
                                ],

                                 "bDestroy": true
                            });
                     }  
                });  
 }
                   else
                   {
                   alert("Select true or false");
                   }
            
      }); 
     $(document).on('click', '.submit3', function(){  
           event.preventDefault(); 
            $('#heads').text("Created Questions");
            if($('#add_iden').val()=="Save This New Question +" )
        {
            question_id = 0;
        }  
        
      if($('#iden_answer1').val()!=""){
        $('#questionIDEN').val(tinymce.get('questionIDEN').getContent());
           
                $.ajax({  
                     url:"examinfo.php?typeexam=iden&id="+ question_id,
                    
                     method:"POST",  
                     data:$('#iden_form').serialize(),  
                     beforeSend:function(){  
                        
                           if($('#add_iden').val()=="Save This New Question +" )
                         {
                            $('#add_iden').val("Adding ...");
                         }
                         else
                         {
                            $('#add_iden').val("Saving ...");
                         }
                     },  
                     success:function(data){  
                          $('#iden_form')[0].reset();
                        
                             $('#iden_form')[0].reset();
                   
                         
                         if($('#add_iden').val()=="Adding ..." )
                             {
                                $.gritter.add({
                                title: '<h2><center>Question Successfully Added!</center></h2>',
                                sticky: true,
                                text: '<h3 class="center"> Do you want to add another question? </h3><br><br><div  class="pull-right"> <button onclick="yesyes()" class="btn btn-info">Yes</button>'+ " " +'<button onclick="nono()" class="btn btn-default">No</button></div>',
                                class_name: 'gritter-success gritter-center gritter-light' 
                                });
                             }
                             else
                             {
                                 $.gritter.add({
                                title: '<h2><center>Question Successfully Updated!</center></h2>',
                                time: 'fast',
                                class_name: 'gritter-success gritter-center gritter-dark' 
                                });

                             }
                         
                          
                         $('#add_iden').val("Save This New Question +"); 
                          var myExampleTable = $('#viewall').DataTable({
                
                                "bAutoWidth" : false,

                                "ajax" : "questions_data.json",
                              "order": [[ 0, "desc" ]],

                                "columns" : [
                                    {"data" : "question_no"},
                                    {"data" : "question"},
                                    {"data" : "question_type"},
                                    {"data" : "choices"},
                                    {"data" : "answers"}
                                ],

                                 "bDestroy": true
                            }); 
                        
                         myExampleTable
                        .order( [ 1, 'desc' ] )
                        .draw();
                     }  
                });  
      }
         else
             {
                 
                 alert("Please provide the answer");
             }
      }); 
     $(document).on('click', '.submit4', function(){  
           event.preventDefault(); 
      if($('#add_enum').val()=="Save This New Question +" )
        {
            question_id = 0;
        }
          
           $('#questionENUM').val(tinymce.get('questionENUM').getContent());
             if($('#enum_answer1').val()!="" && $('#cenum_answer2').val()!=""){
                $.ajax({  
                     url:"examinfo.php?typeexam=enum&id="+ question_id,
                    
                     method:"POST",  
                     data:$('#enum_form').serialize(),  
                     beforeSend:function(){  
                          if($('#add_enum').val()=="Save This New Question +" )
                         {
                            $('#add_enum').val("Adding ...");
                         }
                         else
                         {
                            $('#add_enum').val("Saving ...");
                         }
                     },  
                     success:function(data){  
                            $('#enum_form')[0].reset(); 
                    
                        

                          
                         if($('#add_enum').val()=="Adding ..." )
                             {
                                $.gritter.add({
                                title: '<h2><center>Question Successfully Added!</center></h2>',
                                sticky: true,
                                text: '<h3 class="center"> Do you want to add another question? </h3><br><br><div  class="pull-right"> <button onclick="yesyes()" class="btn btn-info">Yes</button>'+ " " +'<button onclick="nono()" class="btn btn-default">No</button></div>',
                                class_name: 'gritter-success gritter-center gritter-light' 
                                });
                             }
                             else
                             {
                                 $.gritter.add({
                                title: '<h2><center>Question Successfully Updated!</center></h2>',
                                time: 'fast',
                                class_name: 'gritter-success gritter-center gritter-dark' 
                                });

                             }
                         $('#enum_answer4').closest("tr").addClass("hidden");
                         $('#enum_answer5').closest("tr").addClass("hidden");
                         $('#enum_answer6').closest("tr").addClass("hidden");
                         $('#enum_answer7').closest("tr").addClass("hidden");
                         $('#enum_answer8').closest("tr").addClass("hidden");
                         $('#enum_answer9').closest("tr").addClass("hidden");
                         $('#enum_answer10').closest("tr").addClass("hidden");
                          $('#button4Add').addClass("hidden");
                        $('#button4Min').addClass("hidden");
                          $('#button5Add').addClass("hidden");
                        $('#button5Min').addClass("hidden");
                          $('#button6Add').addClass("hidden");
                        $('#button6Min').addClass("hidden");
                          $('#button7Add').addClass("hidden");
                        $('#button7Min').addClass("hidden");
                          $('#button8Add').addClass("hidden");
                        $('#button8Min').addClass("hidden");
                          $('#button9Add').addClass("hidden");
                        $('#button9Min').addClass("hidden");
                       $('#button3Add').removeClass("hidden");
                        $('#button10Min').addClass("hidden");
                         
                         $('#add_enum').val("Save This New Question +"); 
                          
                          var myExampleTable = $('#viewall').DataTable({
                
                                "bAutoWidth" : false,

                                "ajax" : "questions_data.json",
                              "order": [[ 0, "desc" ]],

                                "columns" : [
                                    {"data" : "question_no"},
                                    {"data" : "question"},
                                    {"data" : "question_type"},
                                    {"data" : "choices"},
                                    {"data" : "answers"}
                                ],

                                 "bDestroy": true
                            }); 
                     }  
                });  
             }
         else{
             alert("Answers must be provided")
         }
      });
     
   
     
     
     
    $(document).on('click', '.deletemc', function(){
        
        var question_id = $(this).attr("id");
        if (confirm("Are you sure you want to delete that question?")) {
        
        
          $.ajax({  
                    url:"examinfo.php?del="+ question_id +"&type=mc",
                    method:"POST",
                    beforeSend:function(){  
                      
                     },  
                     success:function(data){  
                      
                    $.gritter.add({
                    title: '<h2><center>Question Successfully Deleted!</center></h2>',
                    time: 'fast',
                    class_name: 'gritter-success gritter-center gritter-dark' 
                    });
                    
                      var myExampleTable = $('#viewall').DataTable({
                
                                "bAutoWidth" : false,

                                "ajax" : "questions_data.json",
                          "order": [[ 0, "desc" ]],

                                "columns" : [
                                    {"data" : "question_no"},
                                    {"data" : "question"},
                                    {"data" : "question_type"},
                                    {"data" : "choices"},
                                    {"data" : "answers"}
                                ],

                                 "bDestroy": true
                            });
                     }  
                });
            }  
        
        
        });
    $(document).on('click', '.deletetof', function(){
        
        var question_id = $(this).attr("id");
        if (confirm("Are you sure you want to delete that question?")) {
          $.ajax({  
                    url:"examinfo.php?del="+ question_id +"&type=tof",
                    method:"POST",
                    beforeSend:function(){  
                      
                     },  
                     success:function(data){  
                      
                    $.gritter.add({
                    title: '<h2><center>Question Successfully Deleted!</center></h2>',
                    time: 'fast',
                    class_name: 'gritter-success gritter-center gritter-dark' 
                    });
                    
                        $('#tofdiv').html(data); 
                     }  
                }); 
        }
        
        
        });
    $(document).on('click', '.deleteiden', function(){
        
        var question_id = $(this).attr("id");
        
        
        if (confirm("Are you sure you want to delete that question?")) {
          $.ajax({  
                    url:"examinfo.php?del="+ question_id +"&type=iden",
                    method:"POST",
                    beforeSend:function(){  
                      
                     },  
                     success:function(data){  
                      
                    $.gritter.add({
                    title: '<h2><center>Question Successfully Deleted!</center></h2>',
                    time: 'fast',
                    class_name: 'gritter-success gritter-center gritter-dark' 
                    });
                    
                        $('#idendiv').html(data); 
                     }  
                });  
        }
        
        });
    $(document).on('click', '.deleteenum', function(){
        
        var question_id = $(this).attr("id");
        if (confirm("Are you sure you want to delete that question?")) {
          $.ajax({  
                    url:"examinfo.php?del="+ question_id +"&type=enum",
                    method:"POST",
                    beforeSend:function(){  
                      
                     },  
                     success:function(data){  
                      
                    $.gritter.add({
                    title: '<h2><center>Question Successfully Deleted!</center></h2>',
                    time: 'fast',
                    class_name: 'gritter-success gritter-center gritter-dark' 
                    });
                    
                     $('#enumdiv').html(data);  
                     }  
                });  
        
        }
        });
    
    
 });  
 </script>
        
         
        
	</body>
</html>
