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

		<!--xmlHTTPRequestObject-->
		<script type="text/javascript" src="xml-http-request.js"></script>

		<body class="no-skin">
		<?php $Main -> navbar() ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
            
        <?php  $Main -> slider("Profile","myprofile") ?>
                    
			<?php
            
            
            if ($_SESSION['usertype']==1)
            {
                include("../redundant/_connection.php");
                $sql = "SELECT * FROM accounts_admin WHERE admin_account_no=".$_SESSION["user"];
                $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                if ($record = mysqli_fetch_assoc($qry))
                {
                	$fname = $record["admin_firstname"];
                    $lname = $record["admin_lastname"];
                   	$mname = $record["admin_middleinitial"];
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

            if ($_SESSION['usertype']==11)
            {
                include("../redundant/_connection.php");
                $sql = "SELECT * FROM accounts_teacher WHERE teacher_account_no=".$_SESSION["user"];
                $qry = mysqli_query ($connection, $sql) or die (mysqli_error($connection));
                if ($record = mysqli_fetch_assoc($qry))
                {
                 	$fname = $record["teacher_firstname"];
                    $lname = $record["teacher_lastname"];
                   	$mname = $record["teacher_middleinitial"];
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
                
            if ($_SESSION['usertype']==111)
            {
                include("../redundant/_connection.php");
                $sql = "SELECT * FROM accounts_student WHERE student_account_no=".$_SESSION["user"];
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
                                        
        ?>
			<div class="main-content">
				<div class="main-content-inner">
					<!--bread-->
                    
					<div class="page-content">
                        
					
					

                <table id="questions_table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="detail-col">Question id</th>
                        <th>Question</th>
                        <th>Question Type</th>
                        <th>Points</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sql = "SELECT * from `exam_details` WHERE `exam_no` = ".$_SESSION["exam_no"]." AND `question_type`='multiple'";
                            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                            while($record = mysqli_fetch_assoc($result)) {	
                            
                    ?>
                        <tr>
                            <td class="center">
                               <?php echo $record["question_no"]; ?>
                            </td>
                            
                            
                            <td>
                               <?php echo stripslashes($record["question"]); ?>
                            </td>
                            
                            
                            <td>
                                <?php echo $record["question_type"]; ?>
                            </td>
                            
                            
                            <td>
                                <button class='btn btn btn-sm btn-success pull-right edit_data4' id=' <?php echo $record["question_id"]; ?>'>Edit Question </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>	
              
                
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

	

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

		<!-- plugin scripts for datatables and exporting -->
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

		<!-- inline scripts related to this page -->
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
		</script>
	</body>
</html>
