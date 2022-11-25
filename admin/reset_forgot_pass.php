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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

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

    function clickEyeButton(type) {
        if (type === "password") {
            const ele = document.getElementById("newpassword");

            if (ele.type === "password") ele.type = "text";
            else ele.type = "password"
        } else {
            const ele = document.getElementById("conpassword");

            if (ele.type === "password") ele.type = "text";
            else ele.type = "password";
        }
    }
</script>

<body>
    <?php
    session_start();
    // $user_id=$_SESSION['user_id'];
    $email = $_GET['email'];
    include('connection.php');
    if (isset($_POST['submit'])) {

        // $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $conpassword = $_POST['conpassword'];


        $q = mysqli_query($con, "update registration set password='$newpassword' where email='$email'");
        // echo "update uregis set password='$newpassword' where email=$email";

        if ($q) {
            echo "<script>alert('Congratulations!! You have successfully changed your password.');</script>";

            echo "<script>window.location.assign('index.php'); </script>";
        } else {
            echo "<script>alert('Passwords does not match');</script>";
        }
    }
    ?>

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto" style="background-color: rgba(0,0,0,0.7);">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Reset Password</h3>
                            <h6 class="mb-20" style="color:#6c757d">Enter your new password, confirm and submit</h6>
                            <form method="POST" action="" name="">
                                <div class="form-group">
                                    <!-- <label>Admin name*</label> -->
                                    <div class="row" style="margin-left: 0px;">
                                        <input type="password" name="newpassword" id="newpassword" class="form-control p_input col-sm-10" placeholder="New Password" required>
                                        <div class="col-sm-2" style="margin-top: 7px;">
                                            <span toggle="#password-field" class="bi bi-eye field-icon toggle-password" onclick="clickEyeButton('newpassword')"></span>
                                            <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="clickEyeButton('password')"></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- <label>Password *</label> -->
                                    <div class="row" style="margin-left: 0px;">
                                        <input type="password" name="conpassword" id="conpassword" class="form-control p_input col-sm-10" placeholder="Confirm New Password" onchange="chk()" required>
                                        <div class="col-sm-2" style="margin-top: 7px;">
                                            <span toggle="#password-field" class="bi bi-eye field-icon toggle-password" onclick="clickEyeButton('conpassword')"></span>
                                            <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="clickEyeButton('password')"></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center d-flex">
                                    <input type="submit" name="submit" class="btn btn-warning btn-block enter-btn" value=submit>
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