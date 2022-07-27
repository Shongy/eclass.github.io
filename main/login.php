<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
        <link rel="icon" type="image/png" href="../assets/images/icons/examlogo.png">
		<title>Login | eCLASS</title>
        
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min1.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace.min1.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
	

		<!--xmlHTTPRequestObject-->
		<script type="text/javascript" src="xml-http-request.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout light-login">
		<div class="main-container">
			<div class="main-content">
                <?php
                    $email = "";
                      if (isset($_GET['incorrect']))
                      {
                        if ($_GET['incorrect'] == 1)
                        {
                            echo "<script> alert('Incorrect Username or Email'); </script>";
                        }
                        else
                        {
                            echo "<script> alert('Incorrect Password!'); </script>";
                            $email =  $_GET['email'];
                        }                
                      }
                    if (isset($_GET["error"]))
                    {
                    	if($_GET["error"] == "passworddidnotmatch") {
                    		echo "<script> alert('Password did not match! Try again.'); </script>";
                    	} elseif($_GET["error"] == "lessthancharacters") {
                    		echo "<script> alert('Password must have atleast 6 characters! Try again.'); </script>";
                    	} elseif($_GET["error"] == "emailexists") {
                    		echo "<script> alert('Email Address already exists! Try again.'); </script>";
                    	} elseif($_GET["error"] == "usernameexists") {
                    		echo "<script> alert('Username already exists! Try again.'); </script>";
                    	} elseif($_GET["error"] == "emaildoesntexists") {
                    		echo "<script> alert('Email Address doesn't exists! Try again.'); </script>";
                    	} elseif($_GET["error"] == "alphanumeric") {
                    		echo "<script> alert('Password must have numeric characters.'); </script>";
                    	}
                    } 
                ?>
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<img src="../assets/images/icons/examlogo.png" width='50' height='50' />
									<span class="green">eCLASS</span>
									<span class="white" id="id-text2"></span>
								</h1>
								<h6 class="blue" id="id-company-text">&copy; Electronic Classroom
                                    </h6>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<center>
												<h4 class="header lighter bigger blue" style="font-size:15px;">
													<i class="ace-icon fa fa-key"></i>
                                                	Please Enter Your Information
                                                </h4>
                                            </center>

											<div class="space-6"></div>

											<form method="post" action="confirmlogin.php">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username or Email" name="loginU" required value = "<?php echo $email;?>">
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="loginP" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<!--<label class="inline">-->
															<!--<input type="checkbox" class="ace" />-->
															<!--<span class="lbl"> Remember Me</span>-->
														<!--</label>-->

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary" style="border-radius:3px;">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-105">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link" style="font-size:12px;">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link" style="font-size:12px;">
													I want to register
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body" style="background-color:white;">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Reset Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your username to reset your password
											</p>

											<form method="post" action="request-password-reset.php">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input id="emailAddressOfRecovery" type="text" class="form-control" onChange="checkEmailAddressOfRecovery()" placeholder="Username" name="emailAddressOfRecovery"/>
															<i class="ace-icon fa fa-envelope"></i>
														</span>
														<span>
															<div id="checkEmailAddressOfRecovery"></div>
															<input type="hidden" id="message-checkEmailAddressOfRecovery" name="message-checkEmailAddressOfRecovery" />
														</span>
													</label>

													<div class="clearfix">
														<button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border" style="width:500px;">
									<div class="widget-body">
										<div class="widget-main">
											<center><h4 class="header blue lighter bigger"style="font-size:15px;">
												<i class="ace-icon fa fa-users blue"></i>
												New User Registration
                                                </h4></center>

											<div class="space-6"></div>
											<p class="blue"> Enter your details to begin: </p>

											<form method="post" action="register.php">
												<fieldset>
                                                  <center>
                                                       <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="fname" placeholder="First Name" required/>
															<i class="ace-icon fa fa-user"></i>
														</span>
                                                      </label>
                                                       <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="mname" placeholder="Middle Name" required/>
															<i class="ace-icon fa fa-user"></i>
														</span>
                                                      </label>
													
                                                    
                                                    <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="lname" placeholder="Last Name" required/>
															<i class="ace-icon fa fa-user"></i>
														</span>
                                                      </label>
											
                                                          <label class="block clearfix">
                                                        <span class=" block input-icon input-icon-right">
															<input id="username" name="uname" type="text" class="form-control" placeholder="Username" onChange="checkUsername()" required />
															<i class="ace-icon fa fa-user"></i>
														</span>
                            							<span>
															<div id="checkUsername"></div>
															<input type = "hidden" id ="message-username" name="message-username" />
														</span>
													</label>

													<label class="block clearfix">
															<span class=" block input-icon input-icon-right">
															<input id="emailAddress" type="email" class="form-control" name="email" placeholder="Email" onChange="" required/>
															<i class="ace-icon fa fa-envelope"></i>
														</span>
														<span>
															<div id="checkEmailAddress"></div>
															<input type = "hidden" id ="message-email" name="message-email" />
														</span>
                                                    </label>
                                                    
                                                    <label class="block clearfix">
														<span class=" block input-icon input-icon-right">
															<input id="pass" name="pass" type="password" class="form-control" placeholder="Password" onChange="checkPassword()" required />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                                        
														<span>
															<div id="passwordLabel"></div>
															<input type = "hidden" id ="message-pl" name="message-pl"/>
														</span>
                                                    </label>
                                                    
													 <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input id="pass2" type="password" class="form-control" placeholder="Repeat password" name="pass2" onChange="checkPassword()" required/>
															<i class="ace-icon fa fa-retweet"></i>
														</span>
														<span>
															<div id="confirmPasswordLabel"></div>
															<input type = "hidden" id ="message-cpl" />
														</span>
                                                      </label></center>
                                                        
											        <center><h4 class="header blue lighter bigger"style="font-size:15px;">
													<i class="ace-icon fa fa-user blue"></i>
													What is your Role ?
                                                        </h4>

                                                    <div class="space-6"></div>
                                            
                                                    <?php /*<label class="block clearfix">
                                                      I am a Teacher <input name='form-field-radio' type='radio' class="ace" required/></label>
                                                    <label>
                                                    I am a Student<input name='form-field-radio' class="ace"  type='radio' required /></label>
													
													*/?>
												  	<div class="radio" >
														<label class="clearfix blue">
															<input type="radio" class="ace input-lg"  name="usertype" value="teacher" required><span class="lbl bigger-100"> I AM A TEACHER</span>
															  
														</label>

														<label class="clearfix blue">
															<input type="radio" class="ace input-lg" name="usertype" value="student" required>
															<span class="lbl bigger-100"> I AM A STUDENT</span>
														</label>
													</div></center>
                                                    
													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<button type="submit"  onclick="checkRestrictions()" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110">Register</span>
															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
                                            </form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
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

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 	$(document).on('click', '.toolbar a[data-target]', function(e) {
					e.preventDefault();
					var target = $(this).data('target');
					$('.widget-box.visible').removeClass('visible');//hide others
					$(target).addClass('visible');//show target
				});
			});
		</script>
	</body>
</html>
	