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
          <link rel="stylesheet" href="../assets/css/jquery.gritter.min.css" />

		
	</head>


	<body class="no-skin">
		<?php $Main -> navbar(); ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
            <?php $Main -> slider("timeline",""); ?>
		
			<div class="main-content">
				<div class="main-content-inner">
				

					<div class="page-content">
						
						<div class="page-header container-fluid">
                            
                        <nav class="action-buttons" >
                                     <?php if ($_SESSION["usertype"]!=111) {?>
                                        
                                    <ul class="nav navbar-nav pull-right">
                                       
                                        <li>
                                           
                                             <a  href="#"  data-toggle="modal" data-target="#myModalCreateExamTimeline"><i class="ace-icon fa fa-plus-circle"></i> Create Exam</a>
                                              
                                        </li>

                                        <li>
                                               
                                                 <a  href="#"  data-toggle="modal" data-target="#myModalCreate" ><i class="ace-icon fa fa-plus-circle"></i> Create Class</a>
                                                
                                        </li>
                                    
                                    
                                    </ul>
                                <?php }?>
                           
                                       
                        </nav>
                    
                            
						
						</div><!-- /.page-header -->
                        
						<div class="row">
							<div class="well"> 
								<!-- PAGE CONTENT BEGINS -->
								<div class="" id="main-widget-container">
									<div class="row">
										
										
                                        <?php if($_SESSION["usertype"]==111) {?>
<div class="col-xs-12" id="widget-container">
                                <div class="widget-box widget-color-gray" id="widget-box-1">
                                <div class="widget-header">
                                    <h3 class="widget-title bigger dark">
                                        <center><i class="ace-icon fa fa-pencil-square-o"></i>
                                        All Exams</center>
                                    </h3>


                                </div>

                                <div class="widget-body">
                                    <div class="widget-main no-padding">
                                        <table class="table table-striped table-bordered table-hover">
                                        <thead class="thin-border-bottom">
                                            <tr>
                                                <th>
                                                    <i class="ace-icon fa fa-folder-open-o"></i>
                                                    Exam Title
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa fa-folder-open-o"></i>
                                                    Subject
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa fa-edit"></i>
                                                    Action
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa  fa-bookmark-o"></i>
                                                    Examination Date
                                                </th>
                                                <th class="hidden-480">Status</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                                            
                                        <tbody>
                                            <?php
                        include("../redundant/_connection.php");
    
                        $sql1 = "SELECT * FROM enrolled_students WHERE student_account_no ='".$_SESSION["user"]."'";
    
                        $result = mysqli_query($connection, $sql1);
                        
                        if (mysqli_num_rows($result)>0)
                        {
                           $now = new DateTime();
                            while($row = mysqli_fetch_assoc($result))
                            {  
                            
                                $sql2 = "SELECT * FROM `exams` WHERE `class_code` ='".$row["class_code"]."'";
                                                  
                              $result2 = mysqli_query ($connection, $sql2) or die (mysqli_error($connection));

                                if (mysqli_num_rows($result2)>0)
                                {
                                    while($row2 = mysqli_fetch_assoc($result2))
                                    {
            
                                        $date = new DateTime($row2['exam_date_expired']);
                                        echo"<tr>";
                                        echo"<td>".$row2["exam_name"]."</td>";

                                        echo"<td><a href='mycourse.php?classcode=".$row2["class_code"]."'>".$row2["class_code"]."</a></td>";
                                         echo"<td>";
                                        $query ="SELECT * FROM `exam_results` WHERE `exam_no` = '".$row2["exam_no"]."' AND `student_account_no` = ".$_SESSION["user"];
                                         $result1 = mysqli_query($connection, $query);
                                    
                                        if( $record2 = mysqli_fetch_assoc($result1)) {   
                                            echo "Your score: <strong>".$record2["score"]."</strong> out of <strong>".$record2["perfect_scores"]."</strong>";  
                                        }
                                        else
                                        {
                                            if($date < $now) {
                                            echo "You did not make it! Exam is over";

                                            }
                                            else
                                            {
                                                echo "<div class='action-buttons'><a href='mycourse.php?classcode=".$row2["class_code"]."'><i class='ace-icon fa  fa-external-link blue'></i> YOU HAVE EXAM! CLICK HERE</a></div>";
                                            }
                                            
                                        }
                                        
                                        
                                        
                                        
                                        echo"</td>";
                                        
                                        echo"<td>";
                                        echo $row2["exam_date"];
                                        echo"</td>";
                                          echo"<td>";
                                        if($date < $now) {
                                            echo "<span class='label label-danger arrowed-in arrowed-in-right'>EXPIRED</span>";

                                        }
                                        else
                                        {
                                            echo $row2["exam_date_expired"];
                                        }
                                        echo"</td>";
                                        
                                        echo"</tr>";
                                    }
                                }
                           
                              
                            }
                            
                        }
                                            ?>


                                        </tbody>

                                    </table>
                                </div>
                                    
                            </div>
                                                
                                                
											</div>
										</div>   <?php   }?>                                   
                                        
                               <?php if($_SESSION["usertype"]!=111){  ?>        
                            <div class="col-xs-12" id="widget-container">
                                <div class="widget-box widget-color-gray" id="widget-box-1">
                                <div class="widget-header">
                                    <h3 class="widget-title bigger dark">
                                        <center><i class="ace-icon fa fa-pencil-square-o"></i>
                                        My Exam Created</center>
                                    </h3>


                                </div>

                                <div class="widget-body"  id="tbody">
                                    <div class="widget-main no-padding">
                                        <table class="table table-striped table-bordered table-hover" id="dynamic-table">
                                            
                                        <?php 
                                        include("../redundant/_connection.php"); 
                                        $sql4 = "SELECT * FROM `exams` WHERE `teacher_account_no` =".$_SESSION["user"];
                                        $result4 = mysqli_query ($connection, $sql4) or die (mysqli_error($connection));
                                        if (mysqli_num_rows($result4)>0)
                                        { 
                                            
                                        ?>
                                        <thead class="thin-border-bottom">
                                            <tr>
                                                <th>
                                                    <i class="ace-icon fa fa-folder-open-o"></i>
                                                    Exam Title
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa fa-folder-open-o"></i>
                                                    Class Code
                                                </th>

                                                <th>
                                                    <i class="ace-icon fa  fa-bookmark-o"></i>
                                                    Date Created
                                                </th>
                                                <th class="hidden-480">Status</th>
                                                <th>
                                                    <i class="ace-icon fa  fa-calendar"></i>
                                                    Date Published
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa  fa-calendar"></i>
                                                    Expiration Date
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa  fa-calendar"></i>
                                                    Edit and Republish
                                                </th>
                                                <th>
                                                    <i class="ace-icon fa  fa-trash"></i>
                                                    Delete
                                                </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <thead class="thin-border-bottom">
                                                    <br>
                                                   <center><h2>NO EXAMS YET</h2> 
                                                    <a  href="#"  data-toggle="modal" data-target="#myModalCreateExamTimeline" class="btn btn-round btn-info"><i class="ace-icon fa fa-plus-circle"></i> Create Exam Now</a> </center> <br>
                                                
                                            </thead>
                                            <?php
                                        }
                                            
                                        ?>
                                            
                                        <tbody>
                                            <?php
                        include("../redundant/_connection.php");
                        $sql1 = "SELECT * FROM `exams` WHERE `teacher_account_no` = ".$_SESSION["user"]." ORDER BY `exam_no` DESC";
                        $result = mysqli_query ($connection, $sql1);
                        if (mysqli_num_rows($result)>0)
                        {
                            $now = new DateTime();
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $date = new DateTime($row['exam_date_expired']);
                                
                                
                                    echo"<tr>";
                                
                                
                                echo"<td><a href='createexam.php?classcode=".$row["class_code"]."&refid=".$row["exam_no"]."'>".$row["exam_name"]."</a></td>";
                                
                                echo"<td>";
                                
                                $query ="SELECT * FROM `courses` WHERE `class_code` = '".$row["class_code"]."'";
                                 $result1 = mysqli_query($connection, $query);
                                if( $record2 = mysqli_fetch_assoc($result1)) {   
                                    echo "<a href='mycourse.php?classcode=".$row["class_code"]."'>".$record2["course_code"]."</a></td>";  
                                }
                              
                                echo"<td>";
                                echo $row["date_created"];
                                echo"</td>";
                                  echo"<td>";
                                if($row["availability"] == "Available")
                                {
                                    echo "Published";
                                }
                                else
                                {
                                    echo "Unpublished";
                                }
                                echo"</td>";
                                echo"<td>";
                                echo $row["date_publish"];
                                echo"</td>";
                                
                                
                                
                               
                                echo"<td>";
                                if($date < $now) {
                                    echo "<center><span class='label label-danger arrowed-in arrowed-in-right'>EXPIRED</span></center>";
                                    
                                }
                                else
                                {
                                    echo $row["exam_date_expired"];
                                }
                                echo"</td>";
                                
                                echo "<td>";
                                
                                echo "<center>
                                <div class='action-buttons'>
                                    <a href='createexam.php?classcode=".$row["class_code"]."&refid=".$row["exam_no"]."'>
                                    EDIT/REPUBLISH
                                    </a>
                                </div></center>";
                                echo"</td>";
                              
                                echo "<td>";
                                
                                echo "<center>
                                <div class='action-buttons'>
                                    <a href='#' class='red edelete' id='".$row["exam_no"]."'><span class='label label-danger fa fa-trash'>
                                    DELETE </span>
                                    </a>
                                </div></center>";
                                echo"</td>";
                              
                                echo"</tr>";
                            }
                            
                        }
                                            ?>


                                        </tbody>

                                    </table>
                                </div>
                                    
                            </div>
                                                
                                                
											</div>
										</div> <?php } ?>
                                        <div class="space"></div>
                                        
                                        <div class="col-xs-12 col-sm-12" id="widget-container-col-2">
											<div class="widget-box widget-color-gray" id="widget-box-2">
												<div class="widget-header">
													<h3 class="widget-title bigger dark">
														<center><i class="ace-icon fa fa-table"></i>
														My Subjects</center>
													</h3>

													
												</div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<table class="table table-striped table-bordered table-hover">
															<thead class="thin-border-bottom">
																<tr>
																	<th>
																		<i class="ace-icon fa fa-folder-open-o"></i>
																		Class Code
																	</th>
                                                                    <th>
																		<i class="ace-icon fa fa-folder-open-o"></i>
																		Descriptive Title
																	</th>

																	<th>
																		<i class="ace-icon fa  fa-bookmark-o"></i>
																		Subject Code
																	</th>
                                                                    <th>
																		<i class="ace-icon fa  fa-calendar"></i>
																		Date Created
																	</th>
																	<th class="hidden-480">Status</th>
																</tr>
															</thead>

															<tbody>
																
                                                        <?php
                                                                 include("../redundant/_connection.php");
                                        if ($_SESSION["usertype"]!=111) {
                                       
                                        $sql = "SELECT * FROM `courses` WHERE `teacher_account_no` = '".$_SESSION["user"]."' ORDER BY datecreated DESC";
                                        }
                                        elseif ($_SESSION["usertype"]==111)
                                        { $sql = "SELECT DISTINCT `class_code` FROM `enrolled_students` WHERE `student_account_no` = '".$_SESSION["user"]."'"; }
                                        $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                         if (mysqli_num_rows($result)>0)
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                
                                                
                                                if($_SESSION["usertype"]==111){
                                                    $classcode = $row["class_code"];
                                                    $sql2 = "SELECT * FROM `courses` WHERE `class_code` ='".$classcode."'";
                                                    
                                                    $result2 = mysqli_query ($connection, $sql2) or die (mysqli_error($connection));
                                                        
                                                     if (mysqli_num_rows($result2)>0)
                                                    {
                                                        while($row2 = mysqli_fetch_assoc($result2))
                                                        {
                                                            $clscode = $row2["class_code"];
                                                            $title = $row2["course_title"];
                                                            $code = $row2["course_code"];
                                                            $stat = $row2["status"];
                                                            $datecreated = $row2["datecreated"];
                                                            $cls ="info";
                                                            if ($stat == "Inactive")
                                                            {
                                                                $cls = "danger";
                                                            }
                                                            
                                                            echo "<tr>";
                                                            echo "<td class='$cls'><a href='../main/mycourse.php?classcode=$clscode'><strong>$clscode</strong</td>";

                                                            echo "<td class='$cls'>";
                                                            echo "<a href='../main/mycourse.php?classcode=$clscode'><strong>$title</strong></a>";
                                                            echo "</td>";

                                                            echo "<td class='$cls'>";
                                                            echo "<a href='../main/mycourse.php?classcode=$clscode'><strong>$code</strong></a>";
                                                            echo "</td>";

                                                             echo "<td class='$cls'>";
                                                            echo  "<span>$datecreated</span>";
                                                            echo "</td>";
                                                
                                                            if ($stat == "Active")
                                                            {
                                                                echo  "<td class='$cls'>";
                                                            echo "<div class=' action-buttons'><a href='#' ><span class='label label-info arrowed-in arrowed-in-right'>Active</span></a>";

                                                            echo "</td>";
                                                            echo "</tr></div";

                                                            }
                                                            else
                                                            {
                                                                echo  "<td class='$cls'>";
                                                            echo "<div class=' action-buttons'><span class='label label-danger arrowed '>Inactive</span>";

                                                                echo "<a class='red' href='#' data-toggle='modal' data-target='#modal$clscode'><span class='ace-icon fa fa-external-link bigger-100'>Leave</span></a></div";

                                                            echo "</td>";
                                                            echo "</tr>";
                                                            }
                                                        }
                                                     }
                                                }else{
                                                $clscode = $row["class_code"];
                                                $title = $row["course_title"];
                                                $code = $row["course_code"];
                                                $stat = $row["status"];
                                                $datecreated = $row["datecreated"];
                                                $cls ="info";
                                                if ($stat == "Inactive")
                                                {
                                                    $cls = "danger";
                                                }
                                                
                                                
                                                echo "<tr>";
								                echo "<td class='$cls'><a href='../main/mycourse.php?classcode=$clscode'><strong>$clscode</strong</td>";

												echo "<td class='$cls'>";
												echo "<a href='../main/mycourse.php?classcode=$clscode'><strong>$title</strong></a>";
												echo "</td>";
                                                
                                                echo "<td class='$cls'>";
												echo "<a href='../main/mycourse.php?classcode=$clscode'><strong>$code</strong></a>";
												echo "</td>";

                                                 echo "<td class='$cls'>";
												echo  "<span>$datecreated</span>";
												echo "</td>";
                                                
                                                if ($stat == "Active")
                                                {
                                                    echo  "<td class='$cls'>";
												echo "<div class=' action-buttons'><a href='#' data-toggle='modal' data-target='#modal$clscode'><span class='label label-info arrowed-in arrowed-in-right'>Active</span></a>";
                                                     
								                echo "</td>";
								                echo "</tr></div";
                                                    
                                                   
             
                                                }
                                                else
                                                {
                                                    echo  "<td class='$cls'>";
												echo "<div class=' action-buttons'><a href='classinfo.php?status=activate&classcode=$clscode'><span class='label label-danger arrowed '>Inactive</span></a>";
                                                    
                                                    echo "<a class='red' href='#' data-toggle='modal' data-target='#modal$clscode'><span class='ace-icon fa fa-trash-o bigger-180'></span></a></div";
                                                    
								                echo "</td>";
								                echo "</tr>";
                                                }
                                                }
                                               
                                            }
                                         }
                                      ?>       

																

                                                            
															</tbody>
                                                            
														</table>
													</div>
                                                    <br>
                                                   
												</div>
                                                
                                                
											</div>
										</div><!-- /.span -->
                                        
									</div><!-- /.row -->

				
									
									<hr />
									
								</div><!-- PAGE CONTENT ENDS -->
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
		<script src="../assets/js/jquery-ui.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
        
		<script src="../assets/js/bootstrap-multiselect.min.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="../assets/js/jquery-typeahead.js"></script>
         <script src="../assets/js/jquery.gritter.min.js"></script>
        
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
          $(document).on('click', '.edelete', function(){
        
        var exam_id = $(this).attr("id");
        if (confirm("Are you sure you want to delete this exam?")) {
        
        
          $.ajax({  
                    url:"examinfo.php?del="+ exam_id +"&type=exam",
                    method:"POST",
                    beforeSend:function(){  
                      
                     },  
                     success:function(data){  
                      
                    $.gritter.add({
                    title: '<h2><center>Exam Successfully Deleted!</center></h2>',
                    time: 'fast',
                    class_name: 'gritter-success gritter-dark' 
                    });
                    
                        $('#tbody').html(data); 
                     }  
                });
            }  
        
        
        });
            
            jQuery(function($) {
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
                
            });

        
        
        </script>
		<!-- inline scripts related to this page -->
		
        <?php
         $sql = "SELECT * FROM `courses`";
                                    
                                        $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                         if (mysqli_num_rows($result)>0)
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $clscode = $row["class_code"];
                                                $stat = $row["status"];
                                                $desctitle =$row["course_title"];
                                                $coursecode =$row["course_code"];
                                                $datecreated =$row["datecreated"];
                                                
                                                
                                                if ($stat == "Active")
                                                {
                                                    
                                                     echo "<div id=modal$clscode class='modal fade' role='dialog'>";
        echo "<div class='modal-dialog'>";

          
            echo"<div class='modal-content'><form action='classinfo.php?status=deactivatefromtable&classcode=$clscode' method='post'>";
              echo"<div class='modal-header'>";
               echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
              echo  "<h4 class='modal-title'><center><h2 class='blue'>Class Information</h2></center></h4>";
              echo"</div>";
             echo "<div class='modal-body'>";
                                                    
                                                    
                echo"<dl class='dl-horizontal'>
                    <h4>
					<dt>Descriptive Title</dt>
						<dd>$desctitle</dd>
					<dt>Subject Code</dt>
					   <dd>$coursecode</dd>
                    <dt>Class code</dt>
						<dd>  $clscode</dd>
					<dt>Date Created</dt>
					   <dd> $datecreated</dd>
                    <dt>Status</dt>
                        <dd> <span class='label label-info arrowed-in arrowed-in-right'>Active</span></dd></h4></dl>";
                                                    
                                                    
                                                    
              echo"</div>";
              echo"<div class='modal-footer'>";
               echo "<button ' type='submit' class='btn btn-danger'>Deactivate</button>";
               echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>";
              echo"</div></form>";
            echo"</div>";
          echo"</div>";
    echo"</div>";

                                                }
                                                else
                                                {
                                                    echo "<div id=modal$clscode class='modal fade' role='dialog'>";
        echo "<div class='modal-dialog'>";

          
            echo"<div class='modal-content'><form action='classinfo.php?status=delete&classcode=$clscode' method='post'>";
              echo"<div class='modal-header'>";
               echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
              echo  "<h4 class='modal-title'><center><h2 class='blue'>Class Information</h2></center></h4>";
              echo"</div>";
             echo "<div class='modal-body'>";
                                                    
                                                    
                echo"<dl class='dl-horizontal'>
                    <h4>
					<dt>Descriptive Title</dt>
						<dd>$desctitle</dd>
					<dt>Subject Code</dt>
					   <dd>$coursecode</dd>
                    <dt>Class code</dt>
						<dd>  $clscode</dd>
					<dt>Date Created</dt>
					   <dd>$datecreated</dd>
                    <dt>Status</dt>
                        <dd> <span class='label label-danger arrowed'>Inactive</span></dd></h4></dl>";
                               if ($_SESSION["usertype"]!=111){                     
                             echo "<center><div class='action-buttons'><a href='mycourse.php?classcode=$clscode'><p class='text-info'> Visit this class and Activate this instead</p></a></div>   </center>";  }                      
                                                    
              echo"</div>";
              echo"<div class='modal-footer'>";
                                                    if($_SESSION["usertype"]!=111){
               echo "<h6 class='red'>Are You Sure You Want to Delete?</h6><button type='submit' class='btn btn-danger'>Delete</button>"; } else { echo "<h6 class='red'>Are You Sure You Want to Leave?</h6><a href='classinfo.php?status=leave&classcode=$clscode' class='btn btn-danger'>Leave</a>"; }
               echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>";
              echo"</div></form>";
            echo"</div>";
          echo"</div>";
    echo"</div>";
                                               
                                                }
                                               
                                            }
                                         }
                                      ?>    
        
        
        
        
        
          <div id="myModalCreateExamTimeline" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content"><form action="examinfo.php?createexam=ontimeline" method="post">
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
							<label for="form-field">About this exam</label>

							<div>
								<textarea name="exam_desc" placeholder="About this exam" class="form-field width-90" style="height:200px;"></textarea> </div>
				            
				        </div>
                                
                        <div class="form-group">
							
                            <label for="form-field"> ---Save Exam To Class:--- </label>

								<div style="width:100%;">
								<select required name="classesFromTimeline" class="select2 width-100"  data-placeholder="Click to Choose..." style="width:100px;">
                                    <?php 
                                        include("../redundant/_connection.php");
                                        $sql = "SELECT * FROM courses WHERE teacher_account_no =".$_SESSION["user"];
                                    
                                        $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                         if (mysqli_num_rows($result)>0)
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $val = $row["class_code"];
                                                $name1 = $row["course_code"];
                                                $name2 = $row["course_title"];
                                                
                                                
                                                echo "<option value='$val' title='$name1'>$name2 - $name1</option>";
                                            }
                                         }
                                      ?>
												
								</select>

								</div>
				            
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

	</body>
</html>
