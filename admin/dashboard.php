<?php
include("hhh.php");
// error_reporting(1);
?>

<div class="row">
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Total Users</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "byr");
              $q = mysqli_query($con, "select * from uregis");
              $cnt = mysqli_num_rows($q);

              ?>
              <h2 class="mb-0"><?php echo $cnt ?></h2>
              <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p> -->
            </div>
            <h6 class="text-muted font-weight-normal">USER</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-account-multiple text-primary ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Total Cars </h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "byr");
              $q2 = mysqli_query($con, "select * from carmodel");
              $cnt2 = mysqli_num_rows($q2);

              ?>
              <h2 class="mb-0"><?php echo $cnt2 ?></h2>
              <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
            </div>
            <h6 class="text-muted font-weight-normal">CARS</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-car text-success ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Total Bikes</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "byr");
              $q3 = mysqli_query($con, "select * from bikemaster");
              $cnt3 = mysqli_num_rows($q3);

              ?>
              <h2 class="mb-0"><?php echo $cnt3 ?></h2>
              <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p> -->
            </div>
            <h6 class="text-muted font-weight-normal"> BIKES</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-bike text-info ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Total Driver</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
            <?php
              $con = mysqli_connect("localhost", "root", "", "byr");
              $q4 = mysqli_query($con, "select * from dregis");
              $cnt4 = mysqli_num_rows($q4);

              ?>
              <h2 class="mb-0"><?php echo $cnt4 ?></h2>
              <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p> -->
            </div>
            <h6 class="text-muted font-weight-normal">DRIVERS</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-account text-warning ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Total Outstation Cars</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
            <?php
              $con = mysqli_connect("localhost", "root", "", "byr");
              $q5 = mysqli_query($con, "select * from outstation_car");
              $cnt5 = mysqli_num_rows($q5);

              ?>
              <h2 class="mb-0"><?php echo $cnt ?></h2>
              <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p> -->
            </div>
            <h6 class="text-muted font-weight-normal">OUTSTATION CARS</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-car-side text-danger ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Total Kaali Peelies</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
            <?php
              $con = mysqli_connect("localhost", "root", "", "byr");
              $q6 = mysqli_query($con, "select * from kaali_peeli");
              $cnt6 = mysqli_num_rows($q6);

              ?>
              <h2 class="mb-0"><?php echo $cnt6 ?></h2>
              <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p> -->
            </div>
            <h6 class="text-muted font-weight-normal">KAALI PEELI</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-taxi text-secondary ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>








<?php
include("fff.php");
// error_reporting(1);
?>