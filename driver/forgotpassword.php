<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Book Your Ride Forget Password</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>

<?php

session_start();

include('connection.php');
$con = mysqli_connect("localhost", "root", "", "byr");
// error_reporting(0);
if (isset($_POST['submit'])) {

	// $user_id = $_SESSION['user_id'];
	$email = $_POST['email'];
	$otp = rand(999, 9999);
	$_SESSION['otp']=$otp;


	$q = mysqli_query($con, "select * from dregis where email='$email' ");
	$cnt  = mysqli_num_rows($q);


	$to = $_POST['email'];
	// $_SESSION['email'] = $email;
	$subject = "RECOVERY OTP MAIL";
	// $message = "<p>Your verification code is: ' . $otp . '</b></p>'";
	$message = "Recovery otp for your account is $otp ";
	$from = "bookyourrideanh@gmail.com";
	$headers = "From : $from";



	if ($cnt > 0) {

		if (mail($to, $subject, $message, $headers)) {
			echo "<script>alert('Check Your E-mail For Valid OTP');</script>";
			echo "<script>window.location.assign('forgot_otp.php?email=$email')</script>";
		} else {
			echo "<script>alert('Your mail has not send!');</script>";
		}
	} else {
		echo "<script>alert('Your email id is not registred ');</script>";
	}
}
?>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="#">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="vendors/images/forgot-password.png" alt="">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">RECOVER PASSWORD</h2>
						</div>
						<h6 class="mb-20">Enter your email address to reset your password</h6>
						<form method="POST" >
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="email" id="email" placeholder="Email" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-5">
									<div class="input-group mb-0">
										
											<!-- use code for form submit -->
											<!-- <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Send OTP"> -->
											<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Send OTP">

										
										<!-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Submit</a> -->
									</div>
								</div>
								<!-- <div class="col-2">
									<div class="font-16 weight-600 text-center" data-color="#707373">OR</div>
								</div>
								<div class="col-5">
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="login.html">Login</a>
									</div>
								</div> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>

</html>