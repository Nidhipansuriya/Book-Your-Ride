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
function clickEyeButton(type) {
	if (type === "password") {
                const ele = document.getElementById("password");

                if (ele.type === "password") ele.type = "text";
                else ele.type = "password"
            }
        }
    </script>

<body class="img js-fullheight" style="background-image: url(images/car.jpg);">

<?php
    session_start();

    include('connection.php');
    if (isset($_POST['submit'])) {

      // echo "$_SESSION[aid]";

        $password = $_POST["password"];
        $user_id = $_SESSION['user_id'];
        //echo $email;
        $q = mysqli_query($con, "select * from uregis where user_id=$user_id");
        // echo "select * from registration where aid=$aid";

        $row = mysqli_fetch_array($q);
        $password = $row['password'];  //old
        $password1 = $_POST["password"];   //new
        if ($password == $password1) {
            
            echo "<script>window.location.assign('reset_password.php'); </script>";
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
                <h6 class="mb-20" style=" margin-left: 24px;">Enter your current password and submit</h6>

						<form method="POST" enctype="multipart/form-data" class="signin-form">
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control" placeholder="Current Password" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="clickEyeButton('password')"></span>

								<!-- <span id=email_error></span> -->
							</div>
                            <div class="text-center d-flex">
                                    <input type="submit" name="submit" class="form-control btn btn-primary submit px-3"value=submit>
                                </div>
							<!-- <div class="form-group">
								<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" name="login" class="form-control btn btn-primary submit px-3">log In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password?</a>
								</div>
							</div> -->
						</form>
						<!-- <p class="w-100 text-center">&mdash; Not A Member? &mdash;</p>
						<div class="social d-flex text-center">
							<a href="registration.php" class="px-2 py-2 mr-md-1 rounded"></span>Register Now </a> -->
							<!-- <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> -->
						<!-- </div> -->
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