<?php
include("hd.php");
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

    .section-title::before {
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

    .ol-nathi {
        background: none;
    }

    .hero-header {
        background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(../img/drivermain.png);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<!-- <a href="../img/drivermain.png"></a> -->
<script>
    function chk() {
        var a = document.getElementById('rent_start_date').value;
        var b = document.getElementById('return_date').value;


        if (b < a)
            alert('Your Return Date should be more than Pick up Date');
    }

    function chk1() {
        var a = new Date(document.getElementById('rent_start_date').value);
        //var d = document.getElementById('booking_date').value;
        var d = new Date().getTime();

        if (a < d)
            alert('Please select your date more than current date');
    }
</script>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <h1 class="display-3 text-white text-center mb-3 animated slideInDown">Drive with Driver</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase ol-nathi">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">City Rides</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Available Cars </li>
                </ol>
                <form action="#" style="background: #0f172b00 !important; width: 100%; margin-bottom: -50px; margin-top: 50px;" method="POST">
                    <div class="d-flex" style="margin-left: 205px;">
                        <div class="form-group mr-2">
                            <label for="" class="label">Pick-up Date</label>
                            <input type="date" class="form-control" id="rent_start_date" name="rent_start_date" placeholder="Date" onchange="chk1()" required />
                        </div>
                        <div class="form-group ml-2">
                            <label for="" class="label">Drop-off Date</label>
                            <input type="date" class="form-control" id="return_date" name="return_date" placeholder="Date" onchange="chk()" required />
                        </div>
                        <div class="form-group ml-2">
                            <button type="submit" name="check" id="check" class="btn btn-primary py-3 position-absolute mt-4 me-2" style="margin-left: 20px;">Check available cars</button>

                        </div>
                    </div>
                </form>
            </nav>
        </div>

    </div>
</div>


<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="color: #fea116 !important;">Choose Cars</h5>
                <h2 class="mb-5" style="font-family: Cormorant Garamond, Georgia, serif;">Enjoy Your TRIP!!!</h2>
            </div>
        </div>
        <div class="row">

            <?php
            include('connection.php');
            if (isset($_POST['check'])) {
                $r1 = $_POST['rent_start_date'];
                $r2 = $_POST['return_date'];
                // $brand_id = $_POST['brand_id'];

                // $q = mysqli_query($con, "SELECT * FROM outstation_car where outstat_car_id not in (select outstat_car_id from outstation_booking where rent_start_date BETWEEN '$r1' and '$r2' and return_date BETWEEN '$r1' and '$r2')");
                $q = mysqli_query($con, "SELECT * FROM outstation_car where outstat_car_id not in (select outstat_car_id from outstation_booking where rent_start_date BETWEEN '$r1' and '$r2' or return_date BETWEEN '$r1' and '$r2' or (rent_start_date < '$r1' and return_date > '$r2' ));");

                while ($row = mysqli_fetch_array($q)) {

            ?>
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <?php
                            echo "<div class='img rounded d-flex align-items-end' style='background-image: url(../../admin/images/$row[outstat_car_photo]);'></div>";
                            ?>

                            <!-- <a href=""></a> -->
                            <div class="text">
                                <h2 class="mb-0"><a href="car-single.html"><?php echo $row['outstat_car_name'] ?></a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat" style="color: #495057;"><?php echo $row['seats'] ?> Seater</span>
                                    <p class="price ml-auto"><?php echo " &#8377 $row[price_day]"; ?> <span>/km</span></p>
                                </div>
                                <?php

                                echo "<p class='d-flex mb-0 d-block'><a href='check_session_outstation.php?x=$row[0]&y=$row[price_day]&p=$r1&q=$r2' class='btn btn-primary py-2 mr-1'>Book now</a>
                                </p>";
                                ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- 
                    </div>
                </div>
            </div> -->

<?php
include("fd.php");
?>