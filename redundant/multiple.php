<!DOCTYPE html>
<html lang="en">
    
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
<script>
       
        </script>
		
	</head>

	<body class="no-skin" >
		

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
          
			<div class="main-content">
				<div class="main-content-inner">
					

					
				</div>
			</div><!-- /.main-content -->
           
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
		
		<!-- page specific plugin scripts -->
		<script src="../assets/js/jquery-ui.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
        
		<script src="../assets/js/bootstrap-multiselect.min.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="../assets/js/jquery-typeahead.js"></script>
        
        <script src="../assets/js/ace-elements.min.js"></script>
        

   
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
				$('#simple-colorpicker-1').ace_colorpicker({pull_right:true}).on('change', function(){
					var color_class = $(this).find('option:selected').data('class');
					var new_class = 'widget-box';
					if(color_class != 'default')  new_class += ' widget-color-'+color_class;
					$(this).closest('.widget-box').attr('class', new_class);
				});
			
			
				// scrollables
				$('.scrollable').each(function () {
					var $this = $(this);
					$(this).ace_scroll({
						size: $this.attr('data-size') || 100,
						//styleClass: 'scroll-left scroll-margin scroll-thin scroll-dark scroll-light no-track scroll-visible'
					});
				});
				$('.scrollable-horizontal').each(function () {
					var $this = $(this);
					$(this).ace_scroll(
					  {
						horizontal: true,
						styleClass: 'scroll-top',//show the scrollbars on top(default is bottom)
						size: $this.attr('data-size') || 500,
						mouseWheelLock: true
					  }
					).css({'padding-top': 12});
				});
				
				$(window).on('resize.scroll_reset', function() {
					$('.scrollable-horizontal').ace_scroll('reset');
				});
			
				
				$('#id-checkbox-vertical').prop('checked', false).on('click', function() {
					$('#widget-toolbox-1').toggleClass('toolbox-vertical')
					.find('.btn-group').toggleClass('btn-group-vertical')
					.filter(':first').toggleClass('hidden')
					.parent().toggleClass('btn-toolbar')
				});
			
				/**
				//or use slimScroll plugin
				$('.slim-scrollable').each(function () {
					var $this = $(this);
					$this.slimScroll({
						height: $this.data('height') || 100,
						railVisible:true
					});
				});
				*/
				
			
				/**$('.widget-box').on('setting.ace.widget' , function(e) {
					e.preventDefault();
				});*/
			
				/**
				$('.widget-box').on('show.ace.widget', function(e) {
					//e.preventDefault();
					//this = the widget-box
				});
				$('.widget-box').on('reload.ace.widget', function(e) {
					//this = the widget-box
				});
				*/
			
				//$('#my-widget-box').widget_box('hide');
			
				
			
				// widget boxes
				// widget box drag & drop example
			    $('.widget-container-col').sortable({
			        connectWith: '.widget-container-col',
					items:'> .widget-box',
					handle: ace.vars['touch'] ? '.widget-title' : false,
					cancel: '.fullscreen',
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'widget-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					start: function(event, ui) {
						//when an element is moved, it's parent becomes empty with almost zero height.
						//we set a min-height for it to be large enough so that later we can easily drop elements back onto it
						ui.item.parent().css({'min-height':ui.item.height()})
						//ui.sender.css({'min-height':ui.item.height() , 'background-color' : '#F5F5F5'})
					},
					update: function(event, ui) {
						ui.item.parent({'min-height':''})
						//p.style.removeProperty('background-color');
			
						
						//save widget positions
						var widget_order = {}
						$('.widget-container-col').each(function() {
							var container_id = $(this).attr('id');
							widget_order[container_id] = []
							
							
							$(this).find('> .widget-box').each(function() {
								var widget_id = $(this).attr('id');
								widget_order[container_id].push(widget_id);
								//now we know each container contains which widgets
							});
						});
						
						ace.data.set('demo', 'widget-order', widget_order, null, true);
					}
			    });
				
				
				///////////////////////
			
				//when a widget is shown/hidden/closed, we save its state for later retrieval
				$(document).on('shown.ace.widget hidden.ace.widget closed.ace.widget', '.widget-box', function(event) {
					var widgets = ace.data.get('demo', 'widget-state', true);
					if(widgets == null) widgets = {}
			
					var id = $(this).attr('id');
					widgets[id] = event.type;
					ace.data.set('demo', 'widget-state', widgets, null, true);
				});
			
			
				(function() {
					//restore widget order
					var container_list = ace.data.get('demo', 'widget-order', true);
					if(container_list) {
						for(var container_id in container_list) if(container_list.hasOwnProperty(container_id)) {
			
							var widgets_inside_container = container_list[container_id];
							if(widgets_inside_container.length == 0) continue;
							
							for(var i = 0; i < widgets_inside_container.length; i++) {
								var widget = widgets_inside_container[i];
								$('#'+widget).appendTo('#'+container_id);
							}
			
						}
					}
					
					
					//restore widget state
					var widgets = ace.data.get('demo', 'widget-state', true);
					if(widgets != null) {
						for(var id in widgets) if(widgets.hasOwnProperty(id)) {
							var state = widgets[id];
							var widget = $('#'+id);
							if
							(
								(state == 'shown' && widget.hasClass('collapsed'))
								||
								(state == 'hidden' && !widget.hasClass('collapsed'))
							) 
							{
								widget.widget_box('toggleFast');
							}
							else if(state == 'closed') {
								widget.widget_box('closeFast');
							}
						}
					}
					
					
					$('#main-widget-container').removeClass('invisible');
					
					
					//reset saved positions and states
					$('#reset-widgets').on('click', function() {
						ace.data.remove('demo', 'widget-state');
						ace.data.remove('demo', 'widget-order');
						document.location.reload();
					});
				
				})();
                
                $('.select2').css('width','200px').select2({allowClear:true})
				$('#select2-multiple-style .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('.select2').addClass('tag-input-style');
					 else $('.select2').removeClass('tag-input-style');
				});
				
				//////////////////
				$('.multiselect').multiselect({
				 enableFiltering: true,
				 enableHTML: true,
				 buttonClass: 'btn btn-white btn-primary',
				 templates: {
					button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span> &nbsp;<b class="fa fa-caret-down"></b></button>',
					ul: '<ul class="multiselect-container dropdown-menu"></ul>',
					filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
					filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
					li: '<li><a tabindex="0"><label></label></a></li>',
			        divider: '<li class="multiselect-item divider"></li>',
			        liGroup: '<li class="multiselect-item multiselect-group"><label></label></li>'
				 }
				});
			
				
				///////////////////
					
				//typeahead.js
				//example taken from plugin's page at: https://twitter.github.io/typeahead.js/examples/
				var substringMatcher = function(strs) {
					return function findMatches(q, cb) {
						var matches, substringRegex;
					 
						// an array that will be populated with substring matches
						matches = [];
					 
						// regex used to determine if a string contains the substring `q`
						substrRegex = new RegExp(q, 'i');
					 
						// iterate through the pool of strings and for any string that
						// contains the substring `q`, add it to the `matches` array
						$.each(strs, function(i, str) {
							if (substrRegex.test(str)) {
								// the typeahead jQuery plugin expects suggestions to a
								// JavaScript object, refer to typeahead docs for more info
								matches.push({ value: str });
							}
						});
			
						cb(matches);
					}
				 }
			
				 $('input.typeahead').typeahead({
					hint: true,
					highlight: true,
					minLength: 1
				 }, {
					name: 'states',
					displayKey: 'value',
					source: substringMatcher(ace.vars['US_STATES']),
					limit: 10
				 });
					
					
				///////////////
				
				
				//in ajax mode, remove remaining elements before leaving page
				$(document).one('ajaxloadstart.page', function(e) {
					$('[class*=select2]').remove();
					$('select[name="duallistbox_demo1[]"]').bootstrapDualListbox('destroy');
					$('.rating').raty('destroy');
					$('.multiselect').multiselect('destroy');
				});
			
			});
		</script>

         <script type="text/javascript">
        
        $ (document).ready(function(){
    
    $ ('.submit2').click(function(){
        var x= $(this).val();
        var y="#hidden";
         var a= $(this).val();
        var b ="#hidden2";
        $.post("acceptRequest.php",
               {classCode: $(this).val(), studentAccountNo: $( y.concat(x)).val(), requestNo: $( b.concat(a)).val()}//,
 
               //function(data){
            //$(y.concat(x)).html(data);
      //  }
               
        );
    });
});
        
        $ (document).ready(function(){
    
    $ ('.submit3').click(function(){
        $.post("deleteRequest.php",
               {requestNo: $(this).val()}
               
        );
    });
});
        </script>  
        
               
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
         <div class="modal-content">
            
              <div class="modal-header" style="background-color:skyblue;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title white bigger"><center><strong>NEW EXAMS</strong></center></h4>
                
              </div>
              <div class="modal-body">

            <table class="table table-bordered table-click table-hover" id="mydata3"  style="font-size:11px;">
                <thead>
                <tr>
                        <th>Course Code</th>
                        <th>Exam Name</th>
                        <th>Date Created</th>
                        <th>View</th>
               </tr>
                   
                </thead>
                <tbody>
                   
                   
                                <script type="text/javascript">
                            
                                            function f2(objButton)
                                    {
                                         var pass1 = objButton.id;
                                                           $.ajax({  
                                                        url:"updateNotif.php",  
                                                        method:"POST",  
                                                        data:{pass1:pass1} ,
                                                        success:function(data){}
                                                           });   
                                    }
                                        function f1(objButton){
                                    
                                                       
                                                        window.location.href='../main/mycourse.php?classcode=' + objButton.value +'&post_no='+ objButton.id;
                                                        //alert(objButton.value);
                                                    }

                                </script>
                    
                                  
                </tbody>
      
            </table>
						</div>
       
              <div class="modal-footer">
              </div>
             
            </div>
  </div>
</div>
        
                 <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
         <div class="modal-content">
            
              <div class="modal-header" style="background-color:skyblue;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title white bigger"><center><strong>NEW FILES</strong></center></h4>
                
              </div>
              <div class="modal-body">

            <table class="table table-bordered table-click table-hover" id="mydata6"  style="font-size:11px;">
                <thead>
                <tr>
                        <th>Course Code</th>
                       <th>Post Type</th>
                        <th>Post Title</th>
                        <th>Date Posted</th>
                        <th>View</th>
               </tr>
                   
                </thead>
                <tbody>
                   
                            <script type="text/javascript">
                                                      
                                 function f2(objButton)
                                    {
                                         var pass1 = objButton.id;
                                                           $.ajax({  
                                                        url:"updateNotif.php",  
                                                        method:"POST",  
                                                        data:{pass1:pass1} ,
                                                        success:function(data){}
                                                           });   
                                    }
                                
                                function f1(objButton){ 
                                   window.location.href='../main/mycourse.php?classcode=' + objButton.value +'&post_no='+ objButton.id;
                                                    //alert(objButton.value);
                                                    }
          

                                </script>
                    
                </tbody>
      
            </table>
                  
						</div>
       
              <div class="modal-footer">
              </div>
             
            </div>
  </div>
</div>
        
        
           <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
         <div class="modal-content">
            
              <div class="modal-header" style="background-color:skyblue;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title white bigger"><center><strong>NEW ANNOUNCEMENT</strong></center></h4>
                
              </div>
              <div class="modal-body">

            <table class="table table-bordered table-click table-hover" id="mydata4"  style="font-size:11px;">
                <thead>
                <tr>
                        <th>Course Code</th>
                        <th>Announcement Title</th>
                        <th>Date Posted</th>
                        <th>View</th>
               </tr>
                   
                </thead>
                <tbody>
                   
                            <script type="text/javascript">
                                
                                   function f2(objButton)
                                    {
                                         var pass1 = objButton.id;
                                                           $.ajax({  
                                                        url:"updateNotif.php",  
                                                        method:"POST",  
                                                        data:{pass1:pass1} ,
                                                        success:function(data){}
                                                           });   
                                    }

                                
                                
                                function f1(objButton){ 
                                   window.location.href='../main/mycourse.php?classcode=' + objButton.value +'&post_no='+ objButton.id;
                                                    //alert(objButton.value);
                                                    }
                                 
                                
                                </script>
                    
                </tbody>
      
            </table>
                  
						</div>
       
              <div class="modal-footer">
              </div>
             
            </div>
  </div>
</div>
        
                
           <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
         <div class="modal-content">
            
              <div class="modal-header" style="background-color:skyblue;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title white bigger"><center><strong>NEW NOTIFICATIONS</strong></center></h4>
                
              </div>
              <div class="modal-body">

            <table class="table table-bordered table-click table-hover" id="mydata5"  style="font-size:11px;">
                <thead>
                <tr>
                        <th>Course Code</th>
                        <th>Post Name</th>
                        <th>Post Type</th>
                        <th>Date Posted</th>
                        <th>View</th>
               </tr>
                   
                </thead>
                <tbody>
                   
                                <script type="text/javascript">
                                function f1(objButton){ 
                                   window.location.href='../main/mycourse.php?classcode=' + objButton.value +'&post_no='+ objButton.id;
                                                    //alert(objButton.value);
                                                    }
                                </script>
                </tbody>
      
            </table>
						</div>
       
              <div class="modal-footer">
              </div>
             
            </div>
  </div>
</div>
        

              
       
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
         <div class="modal-content">

             
              <div class="modal-header" style="background-color:skyblue;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title white bigger"><center><strong>NEW REQUEST</strong></center></h4>
                
              </div>
              <div class="modal-body">

            <table class="table table-bordered table-click table-hover" id="mydata2"  style="font-size:11px;">
                <thead>
                    <tr>
                        <th>Class Code</th>
                        <th>Student Name</th>
                        <th>Request Date</th>
                        <th>Status</th>
                        <th>Confirm Request</th>
               </tr>
                   
                </thead>
                <tbody>
                     
                     <?php
                      include("../redundant/_connection.php");
                        $teacher_account_no=$_SESSION["user"];
                        $query="Select * FROM students_request INNER JOIN accounts_student ON students_request.student_account_no = accounts_student.student_account_no where teacher_account_no='$teacher_account_no' and status='Unconfirmed'";

                        $result=mysqli_query($connection,$query) or die (mysqli_error($connection));
                        while($record=mysqli_fetch_assoc($result))
                        {
           
                            echo"<tr>";
                            echo "<td>".$record['class_code']."</td>";
                            echo "<td>".$record['student_firstname']." ".$record['student_middleinitial']." ".$record['student_lastname']."</td>";
                            echo "<td>".$record['request_date']."</td>";                           
                            echo "<td>".$record['status']."</td>"; 
                            
                            echo"<input type='hidden' id='hidden".$record['class_code']."' value=".$record['student_account_no']." >";
                             echo"<input type='hidden' id='hidden2".$record['class_code']."' value=".$record['request_no']." >";
                            
                             echo "<td> ".'<center><button class="btn btn-sm btn-info submit2" onclick="this.disabled=true;" style="border-radius:2px;"id='.$record["class_code"].' value='.$record["class_code"].'><center><i class="glyphicon glyphicon-ok "></i></center></button>
                             <button class="btn btn-sm btn-danger submit3" onclick="this.disabled=true;" style="border-radius:2px;"id="delete'.$record["class_code"].'" value='.$record["request_no"].'><center><i class="glyphicon glyphicon-trash "></i></center></button> </center>'." </td>";

                            echo"</tr>";
             
                        }
                      ?>
                    
                </tbody>
      
            </table>
                  
        <script type="text/javascript" src="../assets/data-table/datatables.min.js"></script>

        <script type="text/javascript" src="../assets/data-table/js/dataTables.bootstrap.js"></script>
                  
        <script type="text/javascript">

   $('#mydata2').DataTable();
   
        </script>
						</div>
       
              <div class="modal-footer">
              </div>

             

             
            </div>
  </div>
</div> 
     
        
<div id="myModalCreate" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content"><form action="createcourse.php" method="post" enctype="multipart/form-data">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title blue bigger"><center><strong>CREATE NEW SUBJECT</strong></center></h4>
                  <span><center>Course Description</center></span>
              </div>
              <div class="modal-body">
                    
                  <div class="row">
                      <div class="col-sm-5">
				        <label for="form-group" class="text-warning"> *optional </label>
                        <div class="form-group">
								<label for="form-field"> ---Select Students to add--- </label>

								<div >
								<select multiple="" name="addstudent[]" class="select2 width-70" data-placeholder="Click to Choose...">
                                    <?php 
                                        include("../redundant/_connection.php");
                                        $sql = "SELECT * FROM accounts_student ORDER BY student_firstname";
                                    
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
                                    <br>
                                    <div class="space"></div>
                                    <div class="form-group">
							<label for="form-field">or Upload Excel file</label>

							     <input type="file" name="upload" accept=".xlsx" />
							
						  </div>

								</div>
							
                            </div>
                      </div>

					 <div class="col-sm-7">

				        <div class="form-group">
							<label for="form-field">Descriptive Title</label>

							<div>
							     <input type="text" class="form-field width-80" required placeholder="ex. Physical Education II" name="course_title" />
							</div>
                            
						</div>
                            
                        <div class="form-group">
							<label for="form-field">Subject Code</label>

							<div>
							     <input type="text" required class="form-field width-80" placeholder="PE II" name="course_code" />
							</div>
                            
						</div>
                         <div class="form-group">
							<label for="form-field">Prefix of the classcode</label>

							     <input type="text" class="form-field width-20" required placeholder="G7" name="prefix" />
							
						</div>
      
                           <div class="form-group">
							<label for="form-field">About this subject *optional</label>

							<div>
								<textarea class="width-80" name="about" placeholder=""></textarea>
				            </div>
				        </div>
						<div class="hide"><input type="radio" value="2" checked /></div>
                      </div>
                          </div>
                  
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-info" value="Create" name="submit"/>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div></form>
            </div>

          </div>
    </div>
        
        
        
      
         <script type="text/javascript">
       // $('.modal-content').resizable({
    //alsoResize: ".modal-dialog",
    //'min-height':'100%',
   // 'min-width':'100%'
//});
$('.modal-dialog').draggable();

$('#myModal').on('show.bs.modal', function () {
    $(this).find('.modal-body').css({
        'max-height':'100%',
    });
});
            </script>  
        
	</body>
</html>
