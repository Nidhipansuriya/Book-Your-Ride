<?php
include("hd.php");
?>

<style>
    a {
        color: #FEA116;
        text-decoration: none;
    }

    a:hover {
        color: #FEA116;
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

    .hero-header {
        background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(" ../../user/img/owndrive.jpeg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <?php
            include('connection.php');
            $carmodel_id = $_GET['n'];
            $q = mysqli_query($con, "select * from carmodel where carmodel_id=$carmodel_id");
            while ($row = mysqli_fetch_array($q)) {
            ?>
                <h1 class="display-3 text-white text-center mb-3 animated slideInDown"><?php echo $row['carmodel_name']; ?></h1>
            <?php
            }
            ?>
            <nav aria-label="breadcrumb">
                <ol class="bg-nathi justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="../carbrands.php">Brands</a></li>
                    <li class="breadcrumb-item"><a href="../cars/cars.php">Cars</a></li>
                    <li class="breadcrumb-item"><a href="../carmodel/carmodel.php">Models</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"> Details</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="container-xxl py-1">
    <div class="container">
        <div class="row g-5 align-items-center">
            <section class="ftco-section ftco-car-details">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="car-details">
                                <?php
                                include('connection.php');
                                $carmodel_id = $_GET['n'];
                                $q = mysqli_query($con, "select * from carmodel where carmodel_id=$carmodel_id");
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                    <?php
                                    // echo "<div class='img rounded' style='background-image: url(../../admin/images/$row[photo]);'></div>";
                                    echo "<img src='../../admin/images/$row[photo]'  class='img rounded' >";
                                    ?>
                                    <!-- <div style="align-items: center;">
                                                    <p class="d-flex mb-0 d-block"><a href="check_session_outstation.php" class="btn btn-primary py-2 mr-1">Book now</a> </p>
                                                </div> -->
                                <?php
                                }
                                ?>
                                <!-- <div class="text text-center">
                                                <span class="subheading">Features</span>

                                                <h2>Features</h2>
                                            </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        include('connection.php');
                        $carmodel_id = $_GET['n'];
                        $p = $_GET['p'];
                        $q = $_GET['q'];
                        $q1 = mysqli_query($con, "select * from cardetail where carmodel_id=$carmodel_id");
                        while ($row = mysqli_fetch_array($q1)) {
                        ?>
                            <div class="col-md d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                        <div class="d-flex mb-3 align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
                                            <div class="text">
                                                <h3 class="heading mb-0 pl-3">
                                                    Mileage
                                                    <span><?php echo $row['mileage'] ?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                        <div class="d-flex mb-3 align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                                            <div class="text">
                                                <h3 class="heading mb-0 pl-3">
                                                    Transmission
                                                    <span><?php echo $row['transmission'] ?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                        <div class="d-flex mb-3 align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                                            <div class="text">
                                                <h3 class="heading mb-0 pl-3">
                                                    Seats
                                                    <span><?php echo $row['seats'] ?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                        <div class="d-flex mb-3 align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-get-money"><img src="images/price.png" style="margin-top: -15px; height: 50px;"></span></div>
                                            <div class="text">
                                                <h3 class="heading mb-0 pl-3">
                                                    Price Per Day
                                                    <span><?php echo "&#8377 $row[price_day]" ?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                        <div class="d-flex mb-3 align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                                            <div class="text">
                                                <h3 class="heading mb-0 pl-3">
                                                    Fuel
                                                    <span><?php echo $row['fuel_type'] ?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php

                            echo "<p class='d-flex mb-0 d-block'><a href='check_session_rentalcar.php?x=$row[cardetail_id]&y=$row[carmodel_id]&z=$row[price_day]&p=$p&q=$q' class='btn btn-primary py-2 mr-1' style='margin-left: 500px;'>Book now</a>
                                        </p>";
                            ?>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="row">
                        <?php
                        include('connection.php');
                        $carmodel_id = $_GET['n'];
                        $q = mysqli_query($con, "select * from cardetail where carmodel_id=$carmodel_id");
                        while ($row = mysqli_fetch_array($q)) {
                        ?>
                            <div class="col-md-12 pills">
                                <div class="bd-example bd-example-tabs">
                                    <div class="d-flex justify-content-center">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                            <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                                        </li> -->
                                        </ul>
                                    </div>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                            <div class="row">
                                                <div class="col-md-6" style="padding-left: 350px;">
                                                    <ul class="features">
                                                        <?php
                                                        if ($row['child_seat'] == 'yes')

                                                            echo "<li class='check'><span class='ion-ios-checkmark'></span>Child Seat</li>";
                                                        else
                                                            echo "<li class='remove'><span class='ion-ios-close'></span>Child Seat</li>";
                                                        ?>

                                                        <?php
                                                        if ($row['sunroof'] == 'yes')

                                                            echo "<li class='check'><span class='ion-ios-checkmark'></span>Sunroof</li>";
                                                        else
                                                            echo "<li class='remove'><span class='ion-ios-close'></span>Sunroof</li>";
                                                        ?>
                                                        <?php
                                                        if ($row['gps'] == 'yes')

                                                            echo "<li class='check'><span class='ion-ios-checkmark'></span>GPS</li>";
                                                        else
                                                            echo "<li class='remove'><span class='ion-ios-close'></span>GPS</li>";
                                                        ?>


                                                    </ul>
                                                </div>
                                                <div class="col-md-6" style="padding-left: 85px;">
                                                    <ul class="features">
                                                        <?php
                                                        if ($row['music'] == 'yes')

                                                            echo "<li class='check'><span class='ion-ios-checkmark'></span>Music</li>";
                                                        else
                                                            echo "<li class='remove'><span class='ion-ios-close'></span>Music</li>";
                                                        ?>
                                                        <?php
                                                        if ($row['onboard_computer'] == 'yes')

                                                            echo "<li class='check'><span class='ion-ios-checkmark'></span>Onboard computer</li>";
                                                        else
                                                            echo "<li class='remove'><span class='ion-ios-close'></span>Onboard computer</li>";
                                                        ?>
                                                        <?php
                                                        if ($row['remote_central_locking'] == 'yes')

                                                            echo "<li class='check'><span class='ion-ios-checkmark'></span>Remote central locking</li>";
                                                        else
                                                            echo "<li class='remove'><span class='ion-ios-close'></span>Remote central locking</li>";
                                                        ?>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

            </section>

            <!-- <section class="ftco-section ftco-no-pt">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                            <span class="subheading">Choose Car</span>
                            <h2 class="mb-2">Related Cars</h2>
                        </div>
                    </div>


                    <div class="row">
                        <?php
                        include('connection.php');
                        $car_id = $_GET['m'];
                        $q1 = mysqli_query($con, "select * from carmodel where status=0 and car_id=$car_id and carmodel_id!=$carmodel_id");
                        while ($row = mysqli_fetch_array($q)) {
                        ?>
                            <div class="col-md-4">
                                <div class="car-wrap rounded ftco-animate">
                                    <!-- <div class="img rounded d-flex align-items-end" style="background-image: url(images/car-1.jpg);"> -->
                                    <?php
                                    echo "<img src='../../admin/images/$row[photo]' class='img rounded d-flex align-items-end' >";
                                    ?>
                                </div>
                                <div class="text">
                                    <?php
                                    echo "<h2 class='mb-0'><a href='../cardetail/cardetail.php?n=$row[carmodel_id]&m=$car_id'>$row[carmodel_name]</a></h2>";
                                    ?>

                                    <?php
                                    include('connection.php');
                                    // $carmodel_id = $_GET['n'];
                                    $q = mysqli_query($con, "select * from cardetail where carmodel_id=$carmodel_id");
                                    while ($row = mysqli_fetch_array($q)) {
                                    ?>
                                        <div class="d-flex mb-3">
                                            <!-- <span class="cat">Cheverolet</span> -->
                                            <p class="price ml-auto"><?php echo "&#8377 $row[price_day]"; ?> <span>/day</span></p>
                                        </div>

                                        <?php
                                        echo "<p class='d-flex mb-0 d-block'><a href='check_session_rentalcar.php?x=$row[cardetail_id]&y=$row[carmodel_id]&z=$row[price_day]' class='btn btn-primary py-2 mr-1'>Book now</a> <a href='../cardetail/cardetail.php?n=$row[carmodel_id]&m=$car_id' class='btn btn-secondary py-2 ml-1' style='background: #0f172b !important; border: 1px solid #0f172b !important;'>Details</a></p>";
                                        ?>
                                    <?php
                                    }
                                    ?>


                                    <!-- <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1" style="background: #0f172b !important; border: 1px solid #0f172b !important;">Details</a></p> -->


                                </div>
                            </div>
                    </div>
                <?php
                        }
                ?>
                </div>
        </div>
        </section> -->
    </div>
</div>
</div>

<?php
include("fd.php");
?>