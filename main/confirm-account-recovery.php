<?php
if(isset($_POST["resetPassword"])) {
	if($_POST["message-pl"] == 1) {
		echo "<script> alert('Password must have atleast 6 characters! Try again.'); </script>";
	} elseif($_POST["message-pl"] == 2) {
		echo "<script> alert('Password did not match! Try again.'); </script>";
	} else {
		include('../redundant/_connection.php');
		$usertype = $_POST["usertype"];
		$username = $_POST["username"];
		$oldPassword = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$confirmPassword = hash('sha256', $confirmPassword);
		if($usertype == 11) {
			$query = "UPDATE accounts_teacher ";
			$query .= "SET teacher_password = '$confirmPassword' ";
			$query .= "WHERE teacher_username = '$username' AND teacher_password = '$oldPassword'";
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
			echo "<script> alert('You have successfully recovered your account!'); </script>";
		} elseif($usertype == 111) {
			$query = "UPDATE accounts_student ";
			$query .= "SET student_password = '$confirmPassword' ";
			$query .= "WHERE student_username = '$username' AND student_password = '$oldPassword'";
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
			echo "<script> alert('You have successfully recovered your account!'); </script>";
		}
		header("Location: login.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
        <link rel="icon" type="image/png" href="../assets/images/icons/examlogo.png">
		<title>Recover Account | CMUeCLASS</title>
        
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

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
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<img src="../assets/images/icons/examlogo.png" width='50' height='50' />
									<span class="green">CMU</span>
									<span class="white" id="id-text2">eCLASS</span>
								</h1>
								<h6 class="blue" id="id-company-text">&copy; Institute of Computer Applications
                                    </h6>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
										<div id="forgot-box" class="forgot-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Reset your password...
											</h4>

											<div class="space-6"></div>

											<form method="post" action="confirm-account-recovery.php">
												<fieldset>
													<label class="block clearfix">
														<input type="hidden" name="usertype" id="usertype" value="<?php echo $_GET["usertype"]; ?>">     
														<input type="hidden" name="username" id="username" value="<?php echo $_GET["username"]; ?>">
														<input type="hidden" name="password" id="password" value="<?php echo $_GET["password"]; ?>">
														<span class="block input-icon input-icon-right">
															<input type="Password" name ="newPassword" id="newPasswordOfRecovery" class="form-control" onChange="checkPasswordOfRecovery()" placeholder="New Password" required />
															<i class="ace-icon fa fa-key"></i>
														</span>
														<span>
															<div id="passwordLabelOfRecovery"></div>
															<input type = "hidden" id ="message-plOfRecovery" name="message-pl"/>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="Password" name ="confirmPassword" id="confirmPasswordOfRecovery" class="form-control" onChange="checkPasswordOfRecovery()" placeholder="Confirm Password" required />
															<i class="ace-icon fa fa-key"></i>
														</span>
														<span>	
															<div id="confirmPasswordLabelOfRecovery"></div>
															<input type = "hidden" id ="message-cplOfRecovery" />
														</span>
													</label>

													<div class="clearfix">
														<button type="submit" id="resetPassword" name="resetPassword" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Reset</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="login.php" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->
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
