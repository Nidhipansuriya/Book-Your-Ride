<?php
include("hhh.php");
?>
<?php
include('connection.php');
?>
<!-- <style>
    .mb-5 {
        margin-bottom: 3rem !important;
        margin-left: -700px;
    }
</style> -->

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Profile</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>
</div>

</div>
<!-- Navbar & Hero End -->


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">


            <!-- Menu Start -->
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s" style="width: 40%;">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">OUTSTATION</small>
                                <!-- <h6 class="mt-n1 mb-0">Breakfast</h6> -->
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">LOCAL</small>
                                <!-- <h6 class="mt-n1 mb-0">Launch</h6> -->
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active" style="width: 100%;">
                        <?php
                        // session_start();
                        include('connection.php');
                        $con = mysqli_connect("localhost", "root", "", "byr");
                        // error_reporting(0);
                        if (isset($_POST['outstation'])) {

                            // $user_id = $_SESSION['user_id'];
                            $pick_up_from = $_POST['pick_up_from'];
                            $drop_at = $_POST['drop_at'];
                            $pick_up_on = $_POST['pick_up_on'];
                            $pick_up_at = $_POST['pick_up_at'];


                            $q = mysqli_query($con, "insert into outstation_form values('','$pick_up_from','$drop_at','$pick_up_on','$pick_up_at')");
                            // echo "insert into outstation_form values('','$pick_up_from','$drop_at','$pick_up_on','$pick_up_at')";
                            if ($q) {
                                // echo "<script>alert('Inserted......');</script>";
                                echo "<script>window.location.assign('../user/cardetail/availablecars.php');</script>";
                            } else {
                                echo "<script>alert('Oops!! There might be something wrong.');</script>";
                            }
                        }
                        ?>
                        
                        <form name="local" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form" style="text-align: left;">
                                        <label>FROM</label>
                                        <input type="text" class="form-control" name="pick_up_from" id="pick_up_from" placeholder="e.g Surat" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form" style="text-align: left;">
                                        <label>To</label>
                                        <input type="text" class="form-control" name="drop_at" id="drop_at" placeholder="e.g Mumbai" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form" style="text-align: left;">
                                        <label>PICK UP ON</label>
                                        <input type="date" class="form-control datetimepicker-input" name="pick_up_on" id="pick_up_on" placeholder="Date & Time" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form" style="text-align: left;">
                                        <label>PICK UP AT</label>
                                        <input type="time" class="form-control datetimepicker-input" name="pick_up_at" id="pick_up_at" placeholder="Date & Time" required/>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-40 py-3" name="outstation" type="submit">Choose Cars</button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0" style="width: 100%;">
                    <?php
                        include('connection.php');
                        $con = mysqli_connect("localhost", "root", "", "byr");
                        if (isset($_POST['local'])) {

                            //$user_id = $_SESSION['user_id'];
                            $pick_from = $_POST['pick_from'];
                            $drop = $_POST['drop'];
                            $pick_on = $_POST['pick_on'];
                            $pick_at = $_POST['pick_at'];

                            $q = mysqli_query($con, "insert into local_form values('','$pick_from','$drop','$pick_on','$pick_at')");
                            // echo "insert into outstation_form values('','$pick_up_from','$drop_at','$pick_up_on','$pick_up_at')";
                            if ($q) {
                                echo "<script>alert('Data entered successfully!!');</script>";
                                
                                echo "<script>window.location.assign('../user/cardetail/available_kaali_peeli.php');</script>";
                            } else {
                                echo "<script>alert('Oops!! There might be something wrong.');</script>";
                            }
                        }
                        ?>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form" style="text-align: left;">
                                        <label>PICK UP FROM</label>
                                        <input type="text" class="form-control" name="pick_from" id="pick_from" placeholder="e.g Surat railway station" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form" style="text-align: left;">
                                        <label>DROP AT</label>
                                        <input type="text" class="form-control" name="drop" id="drop" placeholder="e.g Adajan" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form" style="text-align: left;">
                                        <label>PICK UP</label>
                                        <input type="date" class="form-control datetimepicker-input" name="pick_on" id="pick_on" placeholder="Date & Time" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form" style="text-align: left;">
                                        <label>PICK UP AT</label>
                                        <input type="time" class="form-control datetimepicker-input" name="pick_at" id="pick_at" placeholder="Date & Time" required/>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-40 py-3" name="local" type="submit">Choose Cab</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Menu End -->



<?php
include("fff.php");
?>