<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Book Your Ride</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <!-- <link rel="shortcut icon" href="images/regis_bg.jpg" /> -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<script>
    function chk() {
        var a = document.getElementById("newpassword").value;
        var b = document.getElementById("conpassword").value;
        if (a != b)
            alert('password does not match ');
    }
</script>

<body>
    <?php

    session_start();

    include('connection.php');
    $con = mysqli_connect("localhost", "root", "", "byr");
    error_reporting(0);
    if (isset($_POST['submit'])) {

        // $user_id = $_SESSION['user_id'];
        $email = $_POST['email'];
        $otp = rand(999, 9999);
        $_SESSION['otp']=$otp;


        $q = mysqli_query($con, "select * from registration where email='$email' ");
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

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto" style="background-color: rgba(0,0,0,0.7);">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">RECOVER PASSWORD</h3>
                            <h6 class="mb-20" style="color:#6c757d">Drop Your Registered E-mail</h6>
                            <form method="POST" action="" name="">
                                <div class="form-group">
                                    <!-- <label>Admin name*</label> -->
                                    <input type="email" name="email" id="email" class="form-control p_input" placeholder="Enter Registered Email" required>
                                </div>

                                <div class="text-center d-flex">
                                    <input type="submit" name="submit" class="btn btn-warning btn-block enter-btn" value="Send OTP">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>