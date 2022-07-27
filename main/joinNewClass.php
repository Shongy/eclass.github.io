<!DOCTYPE html>
<html lang="en">
    <?php include_once("../redundant/main.php");
    session_start();
    $Main = new Main;
    $Main -> head1(); ?>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		
		<meta name="description" content="Draggabble Widget Boxes with Persistent Position and State" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css" />

		<link rel="stylesheet" href="../assets/css/bootstrap-multiselect.min.css" />
		<link rel="stylesheet" href="../assets/css/select2.min.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min1.css" class="ace-main-stylesheet" id="main-ace-style" />

		
	</head>
    
       <script type="text/javascript">

             
                 $(document).on('click', '.Dsubmit', function() {
        var classCode = $(this).val();
        var hash="#";
     // var dataID =$(this).data('id');
          $.ajax({
              type: "POST",
              url: "deleteRequest.php",
              data: {classCode:classCode},
              success: function(data) {
              $('#cancel'+classCode).html(data);          
              }
          });
      });
           
           
                 $(document).on('click', '.Ssubmit', function() {
        var classCode = $(this).val(); 
        //var dataID =$(this).data('id');
      var hash="#";
          $.ajax({
              type: "POST",
              url: "sendRequest.php",
              data: {classCode:classCode},
              success: function(data) {
            $('#send'+classCode).html(data);            
              }
          });
      });
           
        </script>

	<body class="no-skin">
		<?php $Main -> navbar(); ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
            <?php $Main -> slider("course",""); ?>
		
			<div class="main-content">
				<div class="main-content-inner">
					

					<div class="page-content">
                        
						
						<div class="page-header container-fluid">
  
						
						</div><!-- /.page-header -->
                        
						<div class="row">
							<div class="well"> 
								<!-- PAGE CONTENT BEGINS -->
                                
            <table class="table table-bordered table-click table-hover" id="mydata">
                <thead>
                    <tr>
                              <tr>
                                  <th><center>Teacher Name</center></th>
                                  <th><center>Class code</center></th>
                                  <th><center>Course Code</center></th>
                                  <th><center>Descriptive Title</center></th>
                                  <th><center>Request</center></th>
                         
                                
                 
                    </tr>
                   
                </thead>
                <tbody>
                     
                     <?php
                      include("../redundant/_connection.php");
                       $student_account_no=$_SESSION["user"];
                   // $tag="#";
                        $class_code=array();
                   // $
                        
                       $query="Select * from students_request where student_account_no='$student_account_no'";
                       $result=mysqli_query($connection,$query) or die (mysqli_error($connection));
                    if(mysqli_num_rows($result) > 0)
                    {
                         while($record=mysqli_fetch_assoc($result))
                        {
                  
                            $class_code[]=$record['class_code'];
                            
                        }
                    
                       echo  $arrlength=count($class_code);
                    
                        $query2="Select * FROM courses INNER JOIN accounts_teacher ON courses.teacher_account_no = accounts_teacher.teacher_account_no";

                        $result2=mysqli_query($connection,$query2) or die (mysqli_error($connection));
                        while($record2=mysqli_fetch_assoc($result2))
                        {
                              $ifEqual="";
                              for($x=0;$x<$arrlength;$x++)
                            {
                                
                              if($class_code[$x]==$record2['class_code'])
                            {
                                $ifEqual="exist";
                            }
                                  
                            }
                           
                    if($ifEqual="exist")
                    {
                    ?>

                            <tr>
                            <td><center><?php echo $record2['teacher_firstname']." " .$record2['teacher_middleinitial']. " ". $record2['teacher_lastname']?></center></td>   
                            <td><center><?php echo $record2['class_code']?></center></td>
                            <td><center><?php echo $record2['course_code']?></center></td>
                            <td><center><?php echo $record2['course_title']?></center></td>                         
                                <td><div id="<?php echo"cancel".$record2['class_code']?>"><center><button class="btn btn-danger btn-sm Dsubmit" onclick="" style="width:50%; height:50%;border-radius:2px;"id='<?php echo $record2["class_code"]?>' value='<?php echo $record2["class_code"]?>'><center><i class="ace-icon glyphicon glyphicon-remove"></i> Cancel</center> </button></center></div></td>   
                            </tr>
                            
                          
                       <?php }
                            else
                            {?>
                     <tr>
                            <td><center><?php echo $record2['teacher_firstname']." " .$record2['teacher_middleinitial']. " ". $record2['teacher_lastname']?></center></td>   
                            <td><center><?php echo $record2['class_code']?></center></td>
                            <td><center><?php echo $record2['course_code']?></center></td>
                            <td><center><?php echo $record2['course_title']?></center></td>                         
                         <td><div id="<?php echo"send".$record2['class_code']?>"><center><button class="btn btn-success btn-sm Ssubmit" onclick="" style="width:50%; height:50%;border-radius:2px;"id='<?php echo $record2["class_code"]?>' value='<?php echo $record2["class_code"]?>'><center><i class="ace-icon fa fa-paper-plane"></i> Send</center> </button></center></div></td>   
                            </tr>
                    <?php
                                
                            }
        
                        
                    }
                        
                    }
                    else
                    {
                       $query3="Select * FROM courses INNER JOIN accounts_teacher ON courses.teacher_account_no = accounts_teacher.teacher_account_no";

                        $result3=mysqli_query($connection,$query3) or die (mysqli_error($connection));
                        while($record3=mysqli_fetch_assoc($result3))
                        {?>
                    
                         <tr>
                            <td><center><?php echo $record3['teacher_firstname']." " .$record3['teacher_middleinitial']. " ". $record3['teacher_lastname']?></center></td>   
                            <td><center><?php echo $record3['class_code']?></center></td>
                            <td><center><?php echo $record3['course_code']?></center></td>
                            <td><center><?php echo $record3['course_title']?></center></td>                         
                         <td><div id="<?php echo $record2['class_code']?>"><center><button class="btn btn-success btn-sm Ssubmit" onclick="" style="width:50%; height:50%;border-radius:2px;"id='<?php echo $record3["class_code"]?>' value='<?php echo $record3["class_code"]?>'><center><i class="ace-icon fa fa-paper-plane"></i> Send</center> </button></center></div></td>   
                            </tr>
                   <?php }}
             
                    
                    ?>
                       
                </tbody>
      
            </table>

              <script type="text/javascript">
   $('#mydata').DataTable();
   
        </script>

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
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
		</div><!-- /.main-container -->

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
		<script src="../assets/js/jquery-ui.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
        
		<script src="../assets/js/bootstrap-multiselect.min.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="../assets/js/jquery-typeahead.js"></script>

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

	</body>
</html>
