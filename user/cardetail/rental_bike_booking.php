<?php
$con  = mysqli_connect("localhost", "root", "", "byr");
include("hd.php");
// session_start();
?>

<style>
    a {
        color: #FEA116;
        text-decoration: none;
    }

    a:hover {
        color: #b78e50;
    }

    h4 a:hover {
        color: #FEA116;
    }

    .nav-item :hover {
        color: #FEA116
    }

    .bg-byr {
        background: #0f172b !important;
        /* background: #00000000 !important; */
    }

    .pfff {
        color: #f1f8ff;
    }

    .bg-nathi {
        display: flex;
        flex-wrap: wrap;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        border-radius: 0.25rem;
    }

    .text-byr {
        color: #FEA116 !important;
    }

    .section-title::after {
        background: #FEA116 !important;
    }

    .sticky-top.navbar-dark {
        background: #0f172b !important;
    }

    .btn-primary {
        color: #fff;
        background-color: #fea116;
        border-color: #fea116;
    }

    .btn.btn-primary {
        background: #fea116 !important;
        border: 1px solid #fea116 !important;
        color: #fff !important;
    }

    .navbar-dark {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: transparent !important;
    }

    .sticky-top.navbar-dark {
        position: fixed;
        /* background: var(--dark) !important; */
        background: #0f172b !important;
    }

    ::-webkit-calendar-picker-indicator {
        color: white;
    }
</style>

<script>
    function chk() {
        var a = document.getElementById('rent_start_date').value;
        var b = document.getElementById('return_date').value;
        if (b < a)
            alert('You have selected invalid date!!');
    }
</script>

<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg'); margin-top: -10px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                    <!-- <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p> -->
                    <a href="images/Bookyourride.MP4" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center" style="background: #fea116;">
                            <span class="ion-ios-play"></span>
                        </div>
                        <div class="heading-title ml-5">
                            <span>Easy steps for renting a car</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('connection.php');
$con = mysqli_connect("localhost", "root", "", "byr");

if (isset($_POST['submit'])) {
    // session_start();

    $user_id = $_SESSION['user_id'];
    $user_name = $_POST['user_name'];
    $user_contact = $_POST['user_contact'];
    $user_email = $_POST['user_email'];
    $bike_id = $_GET['m'];
    $liecense_no = $_POST['liecense_no'];

    // $front_photo = $_FILES["front_photo"]["name"];
    // $file_temp1 = $_FILES["front_photo"]["tmp_name"];

    // $back_photo = $_FILES["back_photo"]["name"];
    // $file_temp2 = $_FILES["back_photo"]["tmp_name"];

    $booking_date = date('y/m/d');

    // $pick_date = $_POST['pick_date'];
    $pick_date = $_GET['p'];
    $date1 = date_create("$_POST[pick_date]");
    // $rent_start_date = $date1->format(" %a ");

    $return_date = $_GET['q'];
    // $return_date = $_POST['return_date'];
    $date2 = date_create("$_POST[return_date]");
    // $return_date = $date2->format(" %a ");

    $pick_time = $_POST['pick_time'];

    $price_day = $_GET['n'];

    $date3 = date_diff($date1, $date2);
    $total_day = $date3->format(" %a ");

    $total_amount = $price_day * $total_day;



    echo "<script>window.location.assign('../login-form-20/rentalbikepreview.php?user_name=$user_name&user_contact=$user_contact&user_email=$user_email&bike_id=$bike_id&liecense_no=$liecense_no&booking_date=$booking_date&pick_date=$pick_date&return_date=$return_date&pick_time=$pick_time&price_day=$price_day&total_day=$total_day&total_amount=$total_amount')</script>";
    // echo "<script>window.location.assign('../login-form-20/rentalbikepreview.php?user_name=$user_name&user_contact=$user_contact&user_email=$user_email&bike_id=$bike_id&liecense_no=$liecense_no&front_photo=$front_photo&back_photo=$back_photo&booking_date=$booking_date&pick_date=$pick_date&return_date=$return_date&pick_time=$pick_time&price_day=$price_day&total_day=$total_day&total_amount=$total_amount')</script>";

}

?>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
                <div class="row no-gutters">
                    <div class="col-md-7 d-flex align-items-center">
                        <form action="" class="request-form ftco-animate bg-primary" style=" background: #0f172b !important; width: 100%;" method="POST" enctype="multipart/form-data">
                            <h2 class="section-title ff-secondary text-start  fw-normal animated slideInDown" style="color: #fea116;">Book your ride</h2>
                            <div class="form-group">
                                <label for="" class="label">Full Name</label>
                                <input type="text" class="form-control" name="user_name" value="<?php echo"$_SESSION[user_name]"; ?>" id="user_name" placeholder="Enetr Here!!" required>
                            </div>
                            <div class="d-flex">
                                <div class="form-group mr-2">
                                    <label for="" class="label">Contact Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Here!!" value="<?php echo"$_SESSION[contact]"; ?>" name="user_contact" id="user_contact" required>
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Enter Here!!" name="user_email" value="<?php echo"$_SESSION[email]"; ?>" id="user_email" required>
                                </div>
                            </div>

                            <div class="form-group ml-2">
                                <label for="" class="label">Liecense Number</label>
                                <input type="text" class="form-control" id="liecense_no" name="liecense_no" placeholder="Enter Here!!" required>
                            </div>

                            <!-- <div class="d-flex">
                                <div class="form-group ml-2">
                                    <label for="" class="label">Liecense Front Photo</label>
                                    <input type="file" class="form-control" id="front_photo" name="front_photo" placeholder="eg. Mumbai" required>
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Liecense Rear Photo</label>
                                    <input type="file" class="form-control" id="back_photo" name="back_photo" placeholder="eg. Mumbai" required>
                                </div>
                            </div> -->
                            <!-- <div class="d-flex">
                                <div class="form-group mr-2">
                                    <label for="" class="label">Pick-up Date</label>
                                    <input type="date" class="form-control" id="pick_date" name="pick_date" placeholder="Date">
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Return Date</label>
                                    <input type="date" class="form-control" id="return_date" name="return_date" placeholder="Date" onchange="chk()">
                                </div>
                            </div> -->
                            <div class="form-group ml-2">
                                <label for="" class="label">Pick-up Time</label>
                                <input type="time" class="form-control" id="pick_time" name="pick_time" placeholder="Enter Here!!">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Book A Bike Now" class="btn btn-secondary py-3 px-4" style="background: #fea116 !important; border: 1px solid #fea116 !important; width:40%; margin-left: 170px;" >
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="services-wrap rounded-right w-100">
                            <h3 class="heading-section mb-4" style="margin-left: 125px;">Bike Details</h3>
                            <div class="row d-flex mb-4">


                                <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">

                                        <?php
                                        include('connection.php');
                                        $bike_id = $_GET['m'];
                                        $q = mysqli_query($con, "select * from bikemaster where bike_id=$bike_id");
                                        // $q = mysqli_query($con, "select cmm.*,cd.* from carmodel cmm, cardetail cd where cmm.carmodel_id=cd.carmodel_id");

                                        while ($row = mysqli_fetch_array($q)) {
                                        ?>
                                            <?php
                                            echo "<div class='icon d-flex align-items-center justify-content-center' style='margin-top: 20px;''><span> <img class=' me-3' data-wow-delay='0.7s' src='../../admin/images/$row[bike_photo]' style='height:170px; width:190px; margin-left:20px;'></span></div>";
                                            echo " <div class='text w-100' style='margin-top: 50px;'>";
                                            echo "<h3 class='heading mb-2'>$row[bike_name]</h3>";
                                            echo "<span><p >Number Plate : $row[number_plate]<p></span>";
                                            echo "<span><p >Price Per Day : $row[price_day]<p></span>";

                                            ?>
                                        <?php
                                        }
                                        ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include("fd.php");
?>