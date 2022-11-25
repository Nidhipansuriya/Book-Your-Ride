<?php
include("hhh.php");
?>
<?php
include('connection.php');
$q = mysqli_query($con, "select * from aboutus");
while ($row = mysqli_fetch_array($q)) {

?>

        <style>
            .hero-header1 {
            background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/aboutus1.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>

    <div class="container-xxl py-5 bg-dark hero-header1 mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
            <h1 class="display-3 text-white text-center mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Cars</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                </ol>
            </nav>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/1.jpg" style="margin-top: 2%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/2.jpg" style="margin-top: 20%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/33.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/4.jpg">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal animated slideInDown"><?php echo $row['title']; ?></h5>
                    <!-- <h1 style="color: #bcbaba;" class="mb-4">DON'T DREAM IT. <i class="fa fa-utensils text-primary me-2"></i>DRIVE IT!!</h1> -->
                    <br>
                    <br>
                    <h1 style="color: #bcbaba;" class="mb-4 ">DON'T DREAM IT. <img data-wow-delay="0.7s" src="img/stering_wheel.png" style="height:40px; width:40px; animation: imgRotate 10s linear infinite;"> DRIVE IT!!</h1>
                    <p class="mb-4"><?php echo $row['description']; ?></p>
                    <br>
                    <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> -->
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Years of</p>
                                    <h6 style="color: #bcbaba;" class="text-uppercase mb-0">Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Experts in</p>
                                    <h6 style="color: #bcbaba;" class="text-uppercase mb-0">DRIVING</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- </div> -->
    <!-- About End -->
<?php } ?>

<?php
include("fff.php");
?>