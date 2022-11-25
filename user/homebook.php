<?php
include("hhh.php");
?>

<style>
            .hero-header1 {
            background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/whitecar.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>

    <div class="container-xxl py-5 bg-dark hero-header1 mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
            <h1 class="display-3 text-white text-center mb-3 animated slideInDown">Our Rides</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Cars</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Our Rides</li>
                </ol>
            </nav>
            </div>
        </div>
    </div>

<div class="container-xxl py-5">
    <!-- <h4 align=center class="text-white animated slideInLeft mb-4 pb-2" style="color: black;">Buckle your seat belts it's going to be a Bumpy Ride</h4> -->
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <a href="../user/cardetail/availablecars.php">
                            <img src="img/rental.png" style="height:100px; width:100px; margin-left: 55px; animation-play-state: paused;">

                            <h5 style="color:black;">DRIVE WITH DRIVER</h5>
                            <p style="color: #666565;">You can travel with all the experience of route and can have the most flexible ride ever.</p>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <!-- <i class="fa fa-3x fa-headset text-primary mb-4"></i> -->
                        <a href="../user/cardetail/available_kaali_peeli.php">
                            <img src="img/kaali_peeli.png" style="height:100px; width:135px;  margin-left: 28px; animation-play-state: paused;">
                            <h5 style="color:black;">KAALI PEELI</h5>
                            <p style="color: #666565;">As taxis are becoming day by day so popular for the young generations, as many people facing difficulties in traveling.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <a href="carbrands.php">
                            <img src="img/ddriveown.png" style="height:111px; width:115px;margin-top: -9PX;margin-left: 42px;animation-play-state: paused;">

                            <h5 style="color:black;">DRIVE YOUR OWN</h5>
                            <p style="color: #666565;">It has become a fashion to travel the destination by road .We give you adventure of testing the best luxurious car to travel with.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <!-- <i class="fa fa-3x fa-user-tie text-primary mb-4"></i> -->
                        <a href="bikebrands.php">
                            <img src="img/activa.png" style="height:80px; width:100px;margin-bottom: 18px; margin-left: 55px; animation-play-state: paused;">
                            <h5 style="color:black;">BIKES</h5>
                            <p style="color: #666565;">Some people are just crazy about motorcycles , especially teenagers . They just love to ride bicycles.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("fff.php");
?>