<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>driver login</title>

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



<script>


function clickEyeButton(type) {
            if (type === "password") {
                const ele = document.getElementById("password");

                if (ele.type === "password") ele.type = "text";
                else ele.type = "password"
            } 
        }
</script>
<body>
  <?php
    session_start();
    $con = mysqli_connect("localhost", "root","", "byr");
   // error_reporting(0);
    if(isset($_POST['login'])) 
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $q = mysqli_query($con, "select * from dregis where email='$email' and password='$password' and status=1");
		// echo "select * from dregis where email='$email' and password='$password' and status=1";
        $row=mysqli_fetch_array($q);
        $cnt  = mysqli_num_rows($q);

        if ($cnt>0) 
        {
          $_SESSION['id']=$row[0];
		  $_SESSION['name']=$row[1];
          $_SESSION['photo']=$row['photo'];
          
            // echo "<script>alert('login successfully......');</script>";
            // $_SESSION['name'] = $name;
            header("location:outstation_car_booking.php");
        } 
        else {
            echo "<script>alert('You are not confirmed yet or your password or mail is invalid');</script>";
        }
    }
    ?>
		<form  method="POST" enctype="multipart/form-data">
    <div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="registration.php">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-warning">Login</h2>
						</div>
					
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<!-- <label class="btn active">
										<input type="radio" name="options" id="admin">
										<div class="icon"><img src="vendors/images/briefcase.svg" class="svg" alt=""></div>
										<span>I'm</span>
										Manager
									</label> -->
									<label class="btn">
										<input type="radio" name="options" id="user">
										<div class="icon"><img src="vendors/images/person.png" class="svg" alt=""></div>
										<span>I'm</span>
										Driver
									</label>
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="E-mail ID" name="email" id="email" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="**********" name="password" id="password" required>
								<div class="input-group-append custom">
									<!-- <span class="input-group-text"><i class="dw dw-padlock1"></i></span> -->
									<span toggle="#password-field" style="margin-right: 12px; margin-top: 15px;" class="fa fa-fw fa-eye field-icon toggle-password" onclick="clickEyeButton('password')"></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<!-- <label class="custom-control-label" for="customCheck1">Remember</label> -->
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="forgotpassword.php">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
                                        <input type="submit" name="login" class="btn btn-warning btn-lg btn-block" value="Login">
                                        <!-- <button type="submit" id="btn btn-warning btn-lg btn-block" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static" name="login">login</button> -->
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-warning btn-lg btn-block" href="registration.php">Register To Create Account</a>
									</div>
								</div>
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