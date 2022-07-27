<!DOCTYPE html>
<html lang="en">
    
    <?php
    session_start();
    include_once("../redundant/main.php"); 
    $Main = new Main;
    $Main -> head1();
    
    ?>
    <link rel="stylesheet" href="../assets/css/select2.min.css" />
    <link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css" />
	

	<body class="no-skin">
		<?php $Main -> navbar(); ?>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
            <?php
                $Main -> slider("","");
                $search = $_POST["searchbar"];
            ?>
			

			<div class="main-content">
                
				<div class="main-content-inner">
					

					<div class="page-content">
						
						<div class="page-header">
							<h1>Search Results... </h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								

								<div>
									<div class="row search-page" id="search-page-1">
										<div class="col-xs-12">
											<div class="row">
												

												<div class="col-xs-12 col-sm-12">
													<?php if ($_SESSION["usertype"]==1) {?>
													
                                                    <div class="row">
                                                            <center><h2><span>Admin</span></h2></center>
                                                        
                                                       
                                                        
                                                        
                                                        <?php
                                                                    include("../redundant/_connection.php");
                                                                    $sql ="SELECT `admin_account_no`, `admin_firstname`, `admin_lastname`, `admin_middleinitial`,`admin_about` FROM `accounts_admin` WHERE `admin_firstname` LIKE '%$search%' or `admin_lastname` LIKE '%$search%'";
                                                                     $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                                                    if (mysqli_num_rows($result)>0)
                                                                    {
                                                                        while($row = mysqli_fetch_assoc($result)){
                                                                        $fname = $row["admin_firstname"];
                                                                        $lname = $row["admin_lastname"];
                                                                        $mname = $row["admin_middleinitial"];
                                                                        $about = $row["admin_about"];
                                                                       
                                                                        $accno = $row["admin_account_no"];
                                                                        
                                                                         $src= "../assets/images/default.png";
                                                                
                                                                      
                                                                           if(is_file("../assets/images/admin/profilepics/".$fname.".jpg"))
                                                                           {
                                                                              $src = "../assets/images/admin/profilepics/".$fname.".jpg";
                                                                            }
                                                                          
                                                                    
                                                                        echo"<div class='col-xs-6 col-sm-4 col-md-3'>";
															echo"<div class='thumbnail search-thumbnail'>";
                                                                       echo"<a href='viewprofile.php?refid=$accno&usertype=1'><img class='media-object' img src='$src' style='width:260px;height:300px;'/></a>";
                                                                        
																        echo"<div class='caption'>";
                                                                        
																	   echo"<div class='clearfix'>";

																		echo"<span class='pull-right label label-grey info-label'>Admin</span>";
                                                                        
                                                                        echo"<div class='pull-left bigger-110'>";
                                                                        
																        echo"<i class='ace-icon fa fa-user'><span>Admin</span></i>";

																		echo"</div>";

																		
																	echo"</div>";

																	echo"<h3 class='search-title'>";
                                                                        
																    echo"<a href='viewprofile.php?refid=$accno&usertype=1' class='blue'>$fname $mname. $lname</a>";
                                                                        
																	echo"</h3>";
                                                                        
																	echo"<p>$about</p>";
																echo"</div>";
                                                                        	echo"</div>";
														echo"</div>";

                                                                    }}
                                                                else
                                                                {
                                                                    echo "<center><h5>NO PERSON FOUND</h5></center>";
                                                                }
                                                                ?>
                                                        
                                                    </div>
                                                    <?php }?>
													<div class="row">
                                                        <div class="hr dotted"></div>
                                                            <center><h2><span>Teachers</span></h2></center>
                                                        
                                                        
                                                        
                                                        <?php
                                                                    include("../redundant/_connection.php");
                                                                    $sql ="SELECT `teacher_account_no`, `teacher_firstname`, `teacher_lastname`, `teacher_middleinitial`,`teacher_about`, `teacher_position` FROM `accounts_teacher` WHERE `teacher_firstname` LIKE '%$search%' or `teacher_lastname` LIKE '%$search%'";
                                                                     $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                                                    if (mysqli_num_rows($result)>0)
                                                                    {
                                                                        while($row = mysqli_fetch_assoc($result)){
                                                                        $fname = $row["teacher_firstname"];
                                                                        $lname = $row["teacher_lastname"];
                                                                        $mname = $row["teacher_middleinitial"];
                                                                        $about = $row["teacher_about"];
                                                                        $pos = $row["teacher_position"];
                                                                        $accno = $row["teacher_account_no"];
                                                                        
                                                                         $src= "../assets/images/default.png";
                                                                
                                                                      
                                                                           if(is_file("../assets/images/user-teachers/profilepics/".$fname.".jpg"))
                                                                           {
                                                                              $src = "../assets/images/user-teachers/profilepics/".$fname.".jpg";
                                                                            }
                                                                          
                                                                    
                                                                        echo"<div class='col-xs-6 col-sm-4 col-md-3'>";
															echo"<div class='thumbnail search-thumbnail'>";
                                                                       echo"<a href='viewprofile.php?refid=$accno&usertype=11'><img class='media-object' img src='$src' style='width:260px;height:300px;'/></a>";
                                                                        
																        echo"<div class='caption'>";
                                                                        
																	   echo"<div class='clearfix'>";

																		echo"<span class='pull-right label label-grey info-label'>$pos</span>";
                                                                        
                                                                        echo"<div class='pull-left bigger-110'>";
                                                                        
																        echo"<i class='ace-icon fa fa-user'><span>Teacher</span></i>";

																		echo"</div>";

																		
																	echo"</div>";

																	echo"<h3 class='search-title'>";
                                                                        
																    echo"<a href='viewprofile.php?refid=$accno&usertype=11' class='blue'>$fname $mname. $lname</a>";
                                                                        
																	echo"</h3>";
                                                                        
																	echo"<p>$about</p>";
																echo"</div>";
                                                                        	echo"</div>";
														echo"</div>";

                                                                    }}
                                                                else
                                                                {
                                                                    echo "<center><h5>NO PERSON FOUND</h5></center>";
                                                                }
                                                                ?>
                                                    </div>
                                                    <div class="row">
                                                        <div class="hr dotted"></div>
														          <center><h2><span>Students</span></h2></center>
																
                                                                
                                                                <?php
                                                                    include("../redundant/_connection.php");
                                                                    $sql ="SELECT `student_account_no`, `student_firstname`, `student_lastname`, `student_middleinitial`,`student_about`, `student_program` FROM `accounts_student` WHERE `student_firstname` LIKE '%$search%' or `student_lastname` LIKE '%$search%'";
                                                                     $result = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                                                        
                                                                    if (mysqli_num_rows($result)>0)
                                                                    {
                                                                        while($row = mysqli_fetch_assoc($result)){
                                                                        $fname = $row["student_firstname"];
                                                                        $lname = $row["student_lastname"];
                                                                        $mname = $row["student_middleinitial"];
                                                                        $about = $row["student_about"];
                                                                        $prog = $row["student_program"];
                                                                        $accno = $row["student_account_no"];
                                                                        
                                                                         $src= "../assets/images/default.png";
                                                                
                                                                      
                                                                           if(is_file("../assets/images/user-students/profilepics/".$fname.".jpg"))
                                                                           {
                                                                              $src = "../assets/images/user-students/profilepics/".$fname.".jpg";
                                                                            }
                                                                          
                                                                    
                                                                        echo"<center><div class='col-xs-6 col-sm-4 col-md-3'>";
															echo"<div class='thumbnail search-thumbnail'>";
                                                                       echo"<a href='viewprofile.php?refid=$accno&usertype=111'><img class='media-object' img src='$src' style='width:260px;height:300px;'/></a>";
                                                                        
																        echo"<div class='caption'>";
                                                                        
																	   echo"<div class='clearfix'>";

																		echo"<span class='pull-right label label-grey info-label'>$prog</span>";
                                                                        
                                                                        echo"<div class='pull-left bigger-110'>";
                                                                        
																        echo"<i class='ace-icon fa fa-user'><span>Student</span></i>";

																		echo"</div>";

																		
																	echo"</div>";

																	echo"<h3 class='search-title'>";
                                                                        
																    echo"<a href='viewprofile.php?refid=$accno&usertype=111' class='blue'>$fname $mname. $lname</a>";
                                                                        
																	echo"</h3>";
                                                                        
																	echo"<p>$about</p>";
																echo"</div>";
                                                                        	echo"</div>";
														echo"</div></center>";

                                                                    }}
                                                                else
                                                                {
                                                                    echo "<center><h5>NO PERSON FOUND</h5></center>";
                                                                }
                                                                ?>
																
														
														
													</div>

													<div class="space-12"></div>

													
												</div>
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

			<?php $Main -> foot1(); ?>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="../assets/js/tree.min.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="../assets/js/jquery-ui.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/holder.min.js"></script>

		<!-- ace scripts -->

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
				//data for tree element
				var category = {
					'for-sale' : {text: 'For Sale', type: 'folder'}	,
					'vehicles' : {text: 'Vehicles', type: 'item'}	,
					'rentals' : {text: 'Rentals', type: 'item'}	,
					'real-estate' : {text: 'Real Estate', type: 'item'}	,
					'pets' : {text: 'Pets', type: 'item'}	,
					'tickets' : {text: 'Tickets', type: 'item'}
				}
				category['for-sale']['additionalParameters'] = {
					'children' : {
						'appliances' : {text: 'Appliances', type: 'item'},
						'arts-crafts' : {text: 'Arts & Crafts', type: 'item'},
						'clothing' : {text: 'Clothing', type: 'item'},
						'computers' : {text: 'Computers', type: 'item'},
						'jewelry' : {text: 'Jewelry', type: 'item'},
						'office-business' : {text: 'Office', type: 'item'},
						'sports-fitness' : {text: 'Sports & Fitness', type: 'item'}
					}
				}
				
				var dataSource1 = function(options, callback){
					var $data = null
					if(!("text" in options) && !("type" in options)){
						$data = category;//the root tree
						callback({ data: $data });
						return;
					}
					else if("type" in options && options.type == "folder") {
						if("additionalParameters" in options && "children" in options.additionalParameters)
							$data = options.additionalParameters.children || {};
						else $data = {}//no data
					}
					
					callback({ data: $data })
				}
				
				$('#cat-tree').ace_tree({
					dataSource: dataSource1,
					multiSelect: true,
					cacheItems: true,
					'open-icon' : 'ace-icon tree-minus',
					'close-icon' : 'ace-icon tree-plus',
					'itemSelect' : true,
					'folderSelect': false,
					'selected-icon' : 'ace-icon fa fa-check',
					'unselected-icon' : 'ace-icon fa fa-times',
					loadingHTML : '<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>'
				});
				
			
				$('.tree-container').ace_scroll({size: 250, mouseWheelLock: true});
				$('#cat-tree').on('closed.fu.tree disclosedFolder.fu.tree', function() {
					$('.tree-container').ace_scroll('reset').ace_scroll('start');	
				});
				
				
				
				//select2 location element
				$('.select2').css('min-width', '150px').select2({allowClear:true});
				
				
				//jQuery ui distance slider
				$( "#slider-range" ).css('width','150px').slider({
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip bottom in' style='display:none;left:-6px;top:14px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('span.ui-slider-handle').on('blur', function(){
					$(this.firstChild).hide();
				});
				
			
				//this is for demo only
				$('.thumbnail').on('mouseenter', function() {
					$(this).find('.info-label').addClass('label-primary');
				}).on('mouseleave', function() {
					$(this).find('.info-label').removeClass('label-primary');
				});
				
			
				//toggle display format buttons
				$('#toggle-result-format .btn').tooltip({container: 'body'}).on('click', function(e){
					$(this).siblings().each(function() {
						$(this).removeClass($(this).attr('data-class')).addClass('btn-grey');
					});
					$(this).removeClass('btn-grey').addClass($(this).attr('data-class'));
				});
				
				////////////////////
				//show different search page
				$('#toggle-result-page .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.search-page').parent().addClass('hide');
					$('#search-page-'+which).parent().removeClass('hide');
				});
			});
		</script>
	</body>
</html>
