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
  $con = mysqli_connect("localhost", "root", "", "byr");
  // error_reporting(0);
  if (isset($_POST['login'])) {

    $aname = $_POST['aname'];
    $password = $_POST['password'];

    $q = mysqli_query($con, "select * from registration where aname='$aname' and password='$password'");
    $row = mysqli_fetch_array($q);
    $cnt  = mysqli_num_rows($q);

    if ($cnt > 0) {
      $_SESSION['aid'] = $row['aid'];
      $_SESSION['aname'] = $row['aname'];
      $_SESSION['photo'] = $row['photo'];
      // echo "<script>alert('login successfully');</script>";
      header("location:dashboard.php");
    } else {
      echo "<script>alert('Oops!! There might be something wrong.');</script>";
    }
  }
  ?>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto" style="background-color: rgba(0,0,0,0.7);">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <form method="POST" action="" name="">
                <div class="form-group">
                  <label>Admin name*</label>
                  <input type="text" name="aname" id="aname" class="form-control p_input" placeholder="Enter your username" required>
                </div>
                <div class="form-group ">
                  <label>Password *</label>
                  <div class="row" style="margin-left: 0px;">
                    <input type="password" name="password" id="password" class="form-control p_input col-sm-11" placeholder="Password" required>
                    <div class="col-sm-1" style="margin-top: 7px;">
                      <span toggle="#password-field" class="bi bi-eye field-icon toggle-password" onclick="clickEyeButton('password')"></span>
                      <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="clickEyeButton('password')"></span> -->
                    </div>
                  </div>
                </div>


                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <!-- <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">Remember me</label> -->
                  </div>
                  <a href="forgotpassword.php" style="color: white;">Forgot password ?</a>
                </div>
                <!-- <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary btn-block enter-btn"><a href="adminlogin.php">Login</a></button>
                  </div> -->
                <div class="text-center d-flex">
                  <input type="submit" name="login" class="btn btn-warning btn-block enter-btn" value=Login>
                </div>
                <!-- <div class="d-flex"> -->
                <!-- <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button> -->
                <!-- <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button> -->
                <!-- </div> -->
                <!-- <p class="sign-up">Don't have an Account ?<a href="adminregistration.php" style="color: #bfa132;"> Register </a></p> -->
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