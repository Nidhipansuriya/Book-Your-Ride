<!doctype html>
<html lang="en">

<head>
	<title>Book Your Ride User Log IN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/car.jpg);">

	<?php
	session_start();

	include('connection.php');
	$con = mysqli_connect("localhost", "root", "", "byr");
	error_reporting(0);
	if (isset($_POST['submit'])) {
		
		$user_id = $_SESSION['user_id'];
		// $user_name = $_SESSION['user_name'];
		$email = $_POST['email'];
		$otp = rand(999, 9999);
        $_SESSION['otp']=$otp;


		$q = mysqli_query($con, "select * from uregis where email='$email' ");
		$cnt  = mysqli_num_rows($q);


		$to = $_POST['email'];
		// $_SESSION['email'] = $email;
		$subject = "RECOVERY OTP MAIL";
		// $message = "<p>Your verification code is: ' . $otp . '</b></p>'";
		$message = "Heloooo !! 

	We got a request to reset your Book Your Ride password. 
	Recovery otp for your account is $otp 
		
	If you ignore this message, your password will not be changed. If you didn't request a password reset, let us know.

Regards, 
Team Book Your Ride";
		
	
		
		$from = "bookyourrideanh@gmail.com";
		$headers = "From : $from";



		if ($cnt > 0)
		{
		
			if (mail($to, $subject, $message, $headers))
			{
			echo "<script>alert('OTP successfully sended.');</script>";
			echo "<script>window.location.assign('forgot_otp.php?email=$email')</script>";
			// echo "<script>window.location.assign('forgot_otp.php?otpmain=$otp&email=$email')</script>";
			}
			else 
			{
			echo "<script>alert('Your mail has not send!');</script>";
			}
		}
		else
		{
			echo "<script>alert('Email is not Registered Please register yourself.');</script>";
		}
	}

	?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">RECOVER PASSWORD </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<!-- <h3 class="mb-4 text-center">Reset Password</h3> -->
						<h6 class="mb-20" style=" margin-left: 24px; margin-bottom: 20px;">Drop Your Registered E-mail</h6>

						<form method="POST" enctype="multipart/form-data" class="signin-form">
							<div class="form-group">
								<input type="text" name="email" placeholder="Enter Registered Email " id="email" class="form-control"  required>
								<!-- <span id=email_error></span> -->
							</div>
							<div class="text-center d-flex">
								<input type="submit" name="submit" class="form-control btn btn-primary submit px-3" value="Send OTP" >
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>