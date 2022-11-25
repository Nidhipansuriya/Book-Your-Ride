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
<script>
        function chk() {
            var a = document.getElementById("newpassword").value;
            var b = document.getElementById("conpassword").value;
            if (a != b)
                alert('password does not match ');
        }

		function clickEyeButton(type) {
            if (type === "password") {
                const ele = document.getElementById("password");

                if (ele.type === "password") ele.type = "text";
                else ele.type = "password"
            } else {
                const ele = document.getElementById("conpassword");

                if (ele.type === "password") ele.type = "text";
                else ele.type = "password";
            }
        }
    </script>
<body class="img js-fullheight" style="background-image: url(images/car.jpg);">

<?php
    session_start();
    // $user_id=$_SESSION['user_id'];
    $email=$_GET['email'];
    include('connection.php');
    if (isset($_POST['submit'])) {

        // $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $conpassword = $_POST['conpassword'];


        $q = mysqli_query($con, "update uregis set password='$newpassword' where email='$email'");
    //    echo "update uregis set password='$newpassword' where email=$email";

        if ($q) {
            echo "<script>alert('Congratulations You have successfully changed your password');</script>";
            
            echo "<script>window.location.assign('../login-form-20/login.php'); </script>";
        } else {
            echo "<script>alert('Your Password does not match please try again');</script>";
        }
    }
    ?>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">RESET PASSWORD</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<!-- <h3 class="mb-4 text-center">Reset Password</h3> -->
                        <h6 class="mb-20" style=" margin-left: 24px;">Enter your new password, confirm and submit</h6>
						<form method="POST" enctype="multipart/form-data" class="signin-form">
							<div class="form-group">
								<input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="New password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="clickEyeButton('password')"></span>

								<!-- <span id=email_error></span> -->
							</div>
							<div class="form-group">
								<input type="password" name="conpassword" id="conpassword" class="form-control" placeholder="Confirm New Password"  onchange="chk()" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="clickEyeButton('confirmPassword')"></span>

								<!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
							</div>
							<div class="form-group">
								<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Submit</button>
							</div>
                            
							<!-- <div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password?</a>
								</div>
							</div>
						</form>
						<p class="w-100 text-center">&mdash; Not A Member? &mdash;</p>
						<div class="social d-flex text-center">
							<a href="registration.php" class="px-2 py-2 mr-md-1 rounded"></span>Register Now </a> -->
							<!-- <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> -->
						</div>
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