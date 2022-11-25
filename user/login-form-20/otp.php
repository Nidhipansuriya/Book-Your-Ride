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


<?php
 $con = mysqli_connect("localhost", "root", "", "byr");
 //error_reporting(0);
 session_start();
 if(isset($_POST['verify_email']))
 {
 $otp = $_POST["otp"];
 $email=$_SESSION['email'];
 //echo $email;
 $q=mysqli_query($con,"select * from uregis where email='$email'");

 $row=mysqli_fetch_array($q);
 $otp=$row['otp'];
 $otp1 = $_POST["otp"];
 if($otp==$otp1)
 {
      $q=mysqli_query($con,"update uregis set status=1 where email='$email' and otp ='$otp' ");
      
        if ($q)
        {
            // echo "Verification code is valid";
            header("location:login.php");
        }
        else
        {
            echo "Verification code is not valid";
        }
    }
}
?>

<body class="img js-fullheight" style="background-image: url(images/car.jpg);">

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                    &nbsp;
					<h2 class="heading-section">CHECK YOUR EMAIL FOR VERIFICATION CODE</h2>
				</div>
			</div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <!-- <h3 class="mb-4 text-center">CHECK  YOUR  EMAIL  FOR  VERIFICATION  CODE</h3> -->
                        <form method="POST" enctype="multipart/form-data" class="signin-form">
                            <div class="form-group">
                                <input type="text" name="otp" id="otp" class="form-control" placeholder="Verification Code" required/>
                                <!-- <span id=email_error></span> -->
                            </div>
                          
                            <div class="form-group">
                                <button type="submit" name="verify_email" class="form-control btn btn-primary submit px-3">Submit</button>
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