<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Registration</title>
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
    <link rel="shortcut icon" href="images/regis.jpg" />
    <script>
        function chk() {
            var a = document.getElementById("password").value;
            var b = document.getElementById("conpassword").value;
            if (a != b)
                alert('password does not match');

        }
    </script>

    <style>
        div #transbox {
            margin: 30px;
            background-color: #ffffff;
            border: 1px solid black;
            opacity: 0.6;
        }
    </style>

</head>

<body>


    <?php
    //error_reporting(0);
    $con = mysqli_connect("localhost", "root", "", "byr");

    if (isset($_POST['register'])) {

        $aname = $_POST['aname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conpassword = $_POST['conpassword'];
        $file_name = $_FILES["photo"]["name"];
        $file_temp = $_FILES["photo"]["tmp_name"];

        $q = mysqli_query($con, "insert into registration values('','$aname','$phone','$email','$password','$file_name')");
        if ($q) {
            move_uploaded_file($file_temp, "images/" . $file_name);
            echo "<script>alert('Welcome You are part of Book Your Ride!!');</script>";
        } else {
            echo "<script>alert('Oops!! There might be something wrong.');</script>";
        }
    }
    ?>


    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="regis content-wrapper full-page-wrapper d-flex align-items-center auth login-bg" style="color: rgba(0,0,0,0.3);">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5" id=" transbox">
                            <h2 class="card-title text-center mb-4">Book Your Ride</h2>
                            <h3 class="card-title text-center mb-3">Register</h3>
                            <form method=post enctype="multipart/form-data">
                                <div>
                                    <div class="form-group">
                                        <label style="color: gr;">Admin Name</label>
                                        <input type="text" name="aname" class="form-control p_input" placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="number" name="phone" class="form-control p_input" placeholder="Enter your contact number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control p_input" placeholder="Enter your e-mail" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control p_input" id="password" placeholder="Password"required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="conpassword" id="conpassword" class="form-control p_input" placeholder="Confirm Password" onchange="chk()" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Photo</label>
                                        <input type="file" name="photo" class="" placeholder="Attach your photo" required>
                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"> Remember me </label>
                                        </div>
                                        <a href="#" class="forgot-pass" style="color: #ffff;">Forgot password</a>
                                    </div>
                                    <div class="text-center d-flex">
                                        <input type="submit" name="register" class="btn btn-warning btn-block enter-btn" value=Register><a href="index.php">
                                    </div>
                                    <!-- <div>
                                <span class="bigger-110"></span>
                                <input type="submit" name="registration" class="btn btn-primary btn-block enter-btn">
                                </div> -->
                                    <!-- <div class="text-center " >
                                    <button class="btn btn-facebook col mr-2"> 
                                        <i class="mdi mdi-facebook"></i> Facebook </button>  -->
                                    <!-- <button class="btn btn-google col"> -->
                                    <!-- <i class="mdi mdi-google-plus"></i> Google plus </button>-->
                                    <!-- </div> -->


                                    <div class="social-login center ">
                                        <!-- <div class="column"> -->
                                        <img src="images/facebook.png" width="20%" height="20%">
                                        </a>
                                        <!-- </div> -->

                                        <!-- <div class="column"> -->
                                        <a href="https://twitter.com" target="_blank">
                                            <img src="images/twitter.png" width="25%" height="25%">
                                        </a>
                                        <!-- </div> -->
                                        <!-- <div class="column"> -->
                                        <a href="https://googleplus.com" target="_blank">
                                            <img src="images/google+.png" width="20%" height="20%">
                                        </a>
                                        <!-- </div> -->
                                        <!-- <div class="column"> -->
                                        <a href="https://instagram.com" target="_blank">
                                            <img src="images/instagram.png" width="20%" height="20%">
                                        </a>
                                        <!-- </div> -->
                                    </div>

                                    <p class="sign-up text-center" style="color: #ffff;">Already have an Account?<a href="index.php" style="color: #bfa132;"> Login </a></p>
                                    <p class="terms" style="color: #ffff;">By creating an account you are accepting our<a href="#" style="color: #bfa132;"> Terms & Conditions</a></p>
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>