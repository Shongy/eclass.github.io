<!DOCTYPE html>
<html lang="en">    
<?php
    session_start();
    include_once("../redundant/Main.php");
    $Main = new Main; 

    $Main -> head1() ?>
    
    <body class="no-skin" id="maingyud">
       
    <?php  $Main -> navbar() ?>
    
     <div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php $Main -> slider("about",""); ?>

			<div class="main-content">
				<div class="main-content-inner">
					

					<div class="page-content">
						
						<div class="page-header">
							<h1>
								About
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									about page
								</small>
							</h1>
						</div><!-- /.page-header -->
                        
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="ace-icon fa fa-info-circle"></i>
												About ni sya diri sa system og sa nag buhat
											</span>
											
										</h1>

										<hr />
										<h3 class="lighter smaller">Mabutangan rani diri puhon, hulat lang</h3>
                                        <a href="#" onclick="clickhere()">clcik</a>

										

										<hr />
										<div class="space"></div>

										
									</div>
								
						
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php $Main -> foot1(); ?>
		</div><!-- /.main-container -->
        
     <script>  
 
       
          function clickhere()
        {
             
                  $.ajax({  
                    url:"dashboard.php",
                     success:function(data){  
                      
                        location.href = "dashboard.php" 
                     }  
                });
        
            }  
        
        

        </script>
</body>
</html>