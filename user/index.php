<?php
include("hhh.php");
?>

<style>
    .service-item:hover {
        color: #e5b670 !important;
    }
</style>
<script>
    $(document).ready(function() {
        $(".nidhi").click(function() {
            $("#first_box").hide();
            $("#second_box").show();

        });

    });
</script>

<style>
    #second_box {
        display: none;
    }

    .hero-header {
        background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/carhome.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .hero-header img {
        animation: imgRotate 50s linear infinite;
    }

    .video {
        position: relative;
        height: 100%;
        min-height: 500px;
        background: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1)), url(img/car2.jpg);
        /* background: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1)), url(../img/video.jpg); */
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }


    .side-photo {
        position: relative;
        height: 100%;
        min-height: 500px;
        background: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1)), url(img/taxi.jpg);
        /* background: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1)), url(../img/video.jpg); */
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .car-photo {
        background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/caricon.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;

    }
</style>

<!-- header lines -->
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <!-- header lines -->


            <!-- first box -->
            <div class="col-lg-6 text-center text-lg-start" style="font-family: Cormorant Garamond, Georgia, serif;" id="first_box">
                <h1 class="display-3 text-white " style="font-family: Cormorant Garamond, Georgia, serif;font-size: calc(1.525rem + 2.3vw);font-weight: 500; line-height: 1.2;">Enjoy Our<br>Memorable Ride</h1>
                <p class="text-white mb-4 pb-2" style="font-family: Cormorant Garamond, Georgia, serif;font-size: 20px;line-height: 1.5; margin-bottom: 30px;font-style: italic;">All we needed is a wheel in our hands and four on the road.</p>
                <!-- <a href="brands.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book Your Ride</a> -->
                
            </div>



         

            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/main.png" alt="">
            </div>


            <!-- Service Start -->
            <div class="container-xxl py-5">
                <!-- <h4 align=center class="text-white animated slideInLeft mb-4 pb-2">Buckle your seat belts it's going to be a Bumpy Ride</h4> -->
                <div class="container" style="margin-top: 22px;">
                    <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <a href="carbrands.php">
                                        <img src="img/ddriveown.png" style="height:111px; width:115px;margin-top: -9PX;animation-play-state: paused;">

                                        <h5 style="color: #bcbaba;font-family: Cormorant Garamond, Georgia, serif;">DRIVER WITH DRIVER CARS</h5>
                                        <p style="color: #666565;font-family: Cormorant Garamond, Georgia, serif;">Do you dream to drive a luxury car for a trip ?? BYR have a facility to rent luxury car wherever you want in a country</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <!-- <i class="fa fa-3x fa-user-tie text-primary mb-4"></i> -->
                                    <a href="bikebrands.php">
                                        <img src="img/activa.png" style="height:80px; width:100px;margin-bottom: 18px; animation-play-state: paused;">
                                        <h5 style="color: #bcbaba;font-family: Cormorant Garamond, Georgia, serif;">DRIVER WITH DRIVER BIKES</h5>
                                        <p style="color: #666565;font-family: Cormorant Garamond, Georgia, serif;">Show off to your friends with the Book Your Rides Bikes and have them on rent for as long as you want.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <a href="../user/cardetail/availablecars.php">
                                        <img src="img/rental.png" style="height:100px; width:100px; animation-play-state: paused;">

                                        <h5 style="color: #bcbaba;font-family: Cormorant Garamond, Georgia, serif;">DRIVE WITH DRIVER</h5>
                                        <p style="color: #666565;font-family: Cormorant Garamond, Georgia, serif;" >Are you a lazyy Driver !!!! You have arrived to right place.You can rent a car with verified  and  experienced driver.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <!-- <i class="fa fa-3x fa-headset text-primary mb-4"></i> -->
                                    <a href="../user/cardetail/available_kaali_peeli.php">
                                        <img src="img/kaali_peeli.png" style="height:100px; width:135px; animation-play-state: paused;">
                                        <h5 style="color: #bcbaba;font-family: Cormorant Garamond, Georgia, serif;">KAALI PEELI</h5>
                                        <p style="color: #666565;font-family: Cormorant Garamond, Georgia, serif;">Is your work place to far or you are fed up going late to your kitty party ?? Here are our drivers to give you a ride in your cityyy.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



<!-- With book your ride, you can drive anywhere Start -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <!-- <video autoplay muted loop id="myVideo" style="position:static;
    height: 100%;
    width:100%;
    min-height: 500px;
    background: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1));
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;

">
                    <source src="img/main.mp4" type="video/mp4">
                </video> -->

                <!-- <video autoplay muted loop id="myVideo">
                    <source src="img/main_page.mp4" type="video/mp4">
                    </video> -->
                <!-- <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal"> -->

                <span></span>
                </button>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <!-- <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5> -->
                <h3 class="text-black mb-4" style="font-family: Cormorant Garamond, Georgia, serif;font-weight: 500;">WITH BOOK YOUR RIDE, YOU CAN DRIVE ANYWHERE!!</h3>
                <form>
                    <div class="row g-3">
                        <div class="col-md-10">
                            <div class="form-floating" style="color:#9f9797;font-family:Cormorant Garamond, Georgia, serif;">
                                <p>Everyday travel is easy when you use these tips.</p>
                                <p>Drive a luxury car to show off to your friends.</p>
                                <p>You can have fun weekends with your friends by going on fun Ride.</p>
                                <p>Helps you practice social distancing.</p>
                                <p>Emergency visits.</p>
                                <p>Drop off and pick up friends and family from the airport.</p>
                                <p>Your hectic day will be made more enjoyable buying a comfortable car to your home way.</p>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" >
                               
                                <label for="datetime">Drive a luxury car to show off to your friends</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="select1">
                                    <option value="1">People 1</option>
                                    <option value="2">People 2</option>
                                    <option value="3">People 3</option>
                                </select>
                                <label for="select1">No Of People</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                <label for="message">Special Request</label>
                            </div>
                        </div> -->
                        <div class="col-3">
                            <a href="carbrands.php">
                                <button style="font-family: Cormorant Garamond, Georgia, serif;"class="btn btn-primary w-100 py-3" onclick="window.location.href='carbrands.php'" type="button">Rent Car</button>

                            </a>
                        </div>
                        <div class="col-3">
                            <a href="bikebrands.php">
                                <button style="font-family: Cormorant Garamond, Georgia, serif;"class="btn btn-primary w-100 py-3" onclick="window.location.href='bikebrands.php'" type="button">Rent bike</button>

                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- With book your ride, you can drive anywhere End -->



<!-- cars Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <!-- <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5> -->
            <h1 class="mb-5"style="font-family: Cormorant Garamond, Georgia, serif;">Our Popular Rides</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">

                        <!-- <i class="fa fa-coffee fa-2x text-primary"></i> -->
                        <div class="ps-3">
                            <div class="row">
                                <div class="col-6">
                                    <img src="img/caricon.png" style="height:32px; width:75px; animation-play-state: paused;">
                                </div>
                                <div class="col-6   ">
                                    <small class="text-body"style="font-family: Cormorant Garamond, Georgia, serif;">Thumb a</small>
                                    <h6 class="mt-n1 mb-0"style="font-family: Cormorant Garamond, Georgia, serif;">RIDE</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <div class="ps-3">
                            <div class="row">
                                <div class="col-6">

                                    <img src="img/bikeicon.png" style=" height: 63px; margin-bottom: -26px; width: 93px; margin-right: 18px; margin-top: -25px; animation-play-state: paused;">
                                </div>

                                <div class="col-6">

                                    <small class="text-body"style="font-family: Cormorant Garamond, Georgia, serif;">let it</small>
                                    <h6 class="mt-n1 mb-0" style="font-family: Cormorant Garamond, Georgia, serif;">RIDE</h6>
                                </div>

                            </div>
                        </div>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Lovely</small>
                            <h6 class="mt-n1 mb-0">Dinner</h6>
                        </div>
                    </a>
                </li> -->
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                        include('connection.php');
                        // $brand_id = $_POST['brand_id'];
                        $q = mysqli_query($con, "select * from brandmaster ");
                        while ($row = mysqli_fetch_array($q)) {
                        ?>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center" style=" margin-right: 40px;">
                                    <?php
                                    echo "<a href='../user/cars/cars.php?x=$row[0]'><img class='flex-shrink-0 img-fluid rounded' src='../admin/images/$row[brand_logo]'  style='width: 80px;'></a>";
                                    // echo "<a href='../user/cars/cars.php?x=$row[0]'><img src='../admin/images/$row[brand_logo]'></a>";
                                    ?>
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2"style="font-family: Cormorant Garamond, Georgia, serif;">
                                            <span><?php echo $row['brand_name']; ?></span>
                                            <span class="text-primary">
                                                <?php
                                                // echo "<a href='../user/cars/cars.php?x=$row[0]'><button class='btn btn-primary w-100 py-3' type='button' style='height: 10px;'>View Rides</button></a>";
                                                echo "<span class='text-primary'><a href='../user/cars/cars.php?x=$row[0]' style='font-size: 15px;'>View Rides</a></span>";
                                                ?>
                                            </span>
                                        </h5>
                                        <small class="fst-italic"style="font-family: Cormorant Garamond, Georgia, serif;">Enjoy every Ride with book your ride</small>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        <?php
                        } ?>


                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <?php
                        include('connection.php');
                        // $brand_id = $_POST['brand_id'];
                        $q = mysqli_query($con, "select * from bikebrandmaster ");
                        while ($row = mysqli_fetch_array($q)) {
                        ?>


                            <div class="col-lg-6">
                                <div class="d-flex align-items-center" >
                                    <!-- <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;"> -->
                                    <?php
                                    echo "<a href='../user/carmodel/bike.php?a=$row[0]'><img class='flex-shrink-0 img-fluid rounded' src='../admin/images/$row[bikebrand_photo]'  style='width: 80px;'></a>";
                                    // echo "<a href='../user/cars/cars.php?x=$row[0]'><img src='../admin/images/$row[brand_logo]'></a>";
                                    ?>
                                    <div class="w-100 d-flex flex-column text-start ps-4" style="margin-right: 30px;">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span><?php echo $row['bikebrand_name']; ?></span>
                                            <?php
                                            // echo "<a href='../user/cars/bikes.php?x=$row[0]'><button class='btn btn-primary w-100 py-3' type='button' style='height: 10px;'>View Rides</button></a>";
                                            echo "<span class='text-primary'><a href='../user/carmodel/bike.php?a=$row[0]' style='font-size: 15px;'>View Rides</a></span>";
                                            ?>
                                        </h5>
                                        <small class="fst-italic"style="font-family: Cormorant Garamond, Georgia, serif;">Enjoy every Ride with book your ride</small>
                                    </div>
                                </div>
                            </div>

                        <?php
                        } ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- bike End -->




<!-- About Start -->
<?php
include('connection.php');
$q = mysqli_query($con, "select * from aboutus");
while ($row = mysqli_fetch_array($q)) {
?>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <!-- <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5> -->
                <h1 class="mb-5"style="font-family: Cormorant Garamond, Georgia, serif;">About Book Your Ride</h1>
            </div>
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
                    <h1 style="color: #bcbaba;" class="mb-4 ">DON'T DREAM IT. <img data-wow-delay="0.7s" src="img/stering_wheel.png" style="height:40px; width:40px;font-family: Cormorant Garamond, Georgia, serif; animation: imgRotate 10s linear infinite;"> DRIVE IT!!</h1>
                    <p class="mb-4"><?php echo $row['description']; ?></p>
                    <br>
                    <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> -->
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                <div class="ps-4">
                                    <p class="mb-0"style="font-family: Cormorant Garamond, Georgia, serif;">Years of</p>
                                   
                                    
                                    <h6 style="color: #bcbaba";style="font-family: Cormorant Garamond, Georgia, serif;" class="text-uppercase mb-0">Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                <div class="ps-4">
                                    <p class="mb-0"style="font-family: Cormorant Garamond, Georgia, serif;">Experts in</p>
                                    <h6 style="color: #bcbaba";style="font-family: Cormorant Garamond, Georgia, serif;" class="text-uppercase mb-0">DRIVING</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Start -->
<?php } ?>
<!-- </div> -->
<!-- About End -->



<!-- Become Driver  Start -->



<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Become Driver </h5>
            <br>
            <br>
            <br>
            <!-- <h1 class="mb-5">Our Driver</h1> -->
        </div>



        <div class="col-md-6 d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <!-- <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5> -->
                <h3 class="text-black mb-4" style="font-family: Cormorant Garamond, Georgia, serif;font-weight: 500;">DID YOU JUST THINK TO DRIVE???</h3>
                <form>
                    <div class="row g-3">
                        <div class="col-md-10">
                            <div class="form-floating" style=color:#9f9797 style="font-family: Cormorant Garamond, Georgia, serif;">
                                <p>Apply now to become an BYR driver-partner. Start earning in 24 hours!</p>

                                <p>Whether you want to drive part-time or full-time, you have the opportunity to work according to your own schedule. You can schedule work around your family or lifestyle.</p>
                                <p>24/7 monitoring.
                                    <br>
                                    Everything is monitored round the clock. Every unit has a GPS and security camera installed ensuring the safety of the driver and passenger/s
                                </p>
                                <p>Flexibility and lifestyle.
                                    <br>
                                    Everybody’s doing it.
                                    More drivers are discovering the benefits of being a taxi driver and are taking advantage of this opportunity that provides them with great earning potential.
                                </p>

                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" >
                               
                                <label for="datetime">Drive a luxury car to show off to your friends</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="select1">
                                    <option value="1">People 1</option>
                                    <option value="2">People 2</option>
                                    <option value="3">People 3</option>
                                </select>
                                <label for="select1">No Of People</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                <label for="message">Special Request</label>
                            </div>
                        </div> -->
                        <!-- <div class="col-3">
                            <a href="carbrands.php">
                                <button class="btn btn-primary w-100 py-3" onclick="window.location.href='carbrands.php'" type="button">View Rides</button>

                            </a>
                        </div> -->
                        <div class="col-5" style="max-width: 400px;">
                            <!-- <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email"> -->
                            <!-- <a href="#">  -->
                            <button type="button" class="btn btn-primary py-2 "style="font-family: Cormorant Garamond, Georgia, serif;" onclick="window.location.href='../driver/registration.php'">Become Driver</button>
                            <!-- </a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="side-photo">

            </div>
        </div>
    </div>
</div>


<!-- Become Driver End -->



<!-- Our deiver Start-->

<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Driver</h5>
            <h1 class="mb-5"style="font-family: Cormorant Garamond, Georgia, serif;">Our Driver</h1>
        </div>
        <div class="row g-4">
            <?php
            include('connection.php');
            $q = mysqli_query($con, "select * from dregis where id=111");
            // $i = 1;
            while ($row = mysqli_fetch_array($q)) {
            ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <?php
                            echo "<img class='img-fluid' src='../driver/images/$row[photo]' style='height: 200px;'>";
                            ?>

                            <!-- <img class="img-fluid" src="img/team-1.jpg" alt=""> -->
                        </div>
                        <h5 class="mb-0"style="font-family: Cormorant Garamond, Georgia, serif;"><?php echo $row['name'] ?></h5>
                        <small><?php echo $row['email'] ?></small>
                        <div class="d-flex justify-content-center mt-3"style="font-family: Cormorant Garamond, Georgia, serif;">
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            include('connection.php');
            $q = mysqli_query($con, "select * from dregis where id=104");
            // $i = 1;
            while ($row = mysqli_fetch_array($q)) {
            ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <?php
                            echo "<img class='img-fluid' src='../driver/images/$row[photo]' style='height: 200px;'>";
                            ?>

                            <!-- <img class="img-fluid" src="img/team-1.jpg" alt=""> -->
                        </div>
                        <h5 class="mb-0"><?php echo $row['name'] ?></h5>
                        <small><?php echo $row['email'] ?></small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            include('connection.php');
            $q = mysqli_query($con, "select * from dregis where id=105");
            // $i = 1;
            while ($row = mysqli_fetch_array($q)) {
            ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <?php
                            echo "<img class='img-fluid' src='../driver/images/$row[photo]' style='height: 200px;'>";
                            ?>

                            <!-- <img class="img-fluid" src="img/team-1.jpg" alt=""> -->
                        </div>
                        <h5 class="mb-0"><?php echo $row['name'] ?></h5>
                        <small><?php echo $row['email'] ?></small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            include('connection.php');
            $q = mysqli_query($con, "select * from dregis where id=114");
            // $i = 1;
            while ($row = mysqli_fetch_array($q)) {
            ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <?php
                            echo "<img class='img-fluid' src='../driver/images/$row[photo]' style='height: 200px;'>";
                            ?>

                            <!-- <img class="img-fluid" src="img/team-1.jpg" alt=""> -->
                        </div>
                        <h5 class="mb-0"><?php echo $row['name'] ?></h5>
                        <small><?php echo $row['email'] ?></small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                            <a class="btn btn-square btn-white mx-1" href=""></a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="col-3" style="width: 15% !important;margin-left: 43%;">
                <a href="ourdriver.php">
                    <button class="btn btn-primary w-100 py-3" onclick="window.location.href='ourdriver.php'" type="button">View Drivers</button>

                </a>
            </div>

        </div>
    </div>
</div>

<!-- Our deiver End-->

<!-- Why book your ride start -->

<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" style="font-family: Cormorant Garamond, Georgia, serif;">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Why Book Your Ride?</h5>
            <h1 class="mb-5" style="font-family: Cormorant Garamond, Georgia, serif;">Reasons to know!!!</h1>
        </div>

        <div class="owl-carousel testimonial-carousel">
            <?php
            include('connection.php');
            $q = mysqli_query($con, "select * from whybook");
            // $i = 1;
            while ($row = mysqli_fetch_array($q)) {
            ?>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            echo "<img class='img-fluid flex-shrink-0 square' src='../admin/images/$row[photo]' style='width: 100px; height: 100px;'>";
                            ?>
                        </div>
                        <!-- <div class="ps-3"> -->
                        <div class="col-md-8">
                            <h5 class="mb-1" style="font-family: Cormorant Garamond, Georgia, serif;"><?php echo $row['heading'] ?></h5>
                            <!-- <small>Profession</small> -->
                            <p><?php echo $row['description'] ?></p>

                        </div>
                    </div>
                </div>
            <?php
            } ?>
        </div>
    </div>
</div>
<!-- Why book your ride End -->



<!-- Testimonial Start -->
<?php
include('connection.php');
$con = mysqli_connect("localhost", "root", "", "byr");
error_reporting(0);
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $file_name = $_FILES["clientphoto"]["name"];
    $file_temp = $_FILES["clientphoto"]["tmp_name"];


    $q = mysqli_query($con, "insert into testimonial values('','$name','$comment','$file_name')");
    // echo "insert into uregis values('','$user_name','$email','$password')";
    if ($q) {
        move_uploaded_file($file_temp, "img/" . $file_name);
        echo "<script>alert('Your review entered successfully!!');</script>";
    } else {
        echo "<script>alert('Oops!! There might be something wrong.');</script>";
    }
}
?>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5" style="font-family: Cormorant Garamond, Georgia, serif;">Our Clients Says!!!</h1>
        </div>
        <div align=center>
            <div class="col-md-6" style="text-align: center;">

                <h5 style="font-family: Cormorant Garamond, Georgia, serif;"> LEAVE YOUR COMMENT!!</h5>
                <br>
                <form class="forms-sample" name="brands" method="POST" enctype="multipart/form-data">
                    <div class="form-floating col-md-12" style="text-align: center;">
                        <P>Enter Your Name</p>
                        <div class="form-floating">
                            <input type="name" class="form-control" name="name" id="name" placeholder="Your Name" required>

                            <label for="text">Your Name</label>
                        </div>
                    </div>

                    <br>
                    <div class="form-floating col-md-12" style="text-align: center;">
                        <p>Enter Your Comment</p>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="comment" id="comment" placeholder="Your comment" required>
                            <label for="comment">Your Comment</label>
                        </div>
                    </div>
                    <br>
                    <!-- <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Car Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="photo" id="photo" placeholder="photo" height=100 width=100>
                            </div> -->

                    <div style="text-align: center;">
                        <p>Drop Your Image</p>
                        <div class="form-floating col-form-label col-md-6" style="margin-left: 25%;">

                            <input type="file" class="form-control" name="clientphoto" id="clientphoto" required>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col-6" style="text-align: center;">
                <!-- <button class="btn btn-primary w-100 py-2" type="submit">Submit</button> -->
                <button type="submit" name="submit" class="btn btn-primary w-100 py-2">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>



<?php
include('connection.php');
$q = mysqli_query($con, "select * from testimonial");
// $i = 1;
while ($row = mysqli_fetch_array($q)) {
?>
    <div style="font-family: Cormorant Garamond, Georgia, serif;">
        <div class="testimonial-item bg-transparent border rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <!-- <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p> -->
            <p><?php echo $row['comment'] ?></p>


            <div class="d-flex align-items-center" style="font-family: Cormorant Garamond, Georgia, serif;">
                <?php
                echo "<img class='img-fluid flex-shrink-0 rounded-circle' src='../user/img/$row[clientphoto]' style='width: 50px; height: 50px;'>";
                ?>
                <div class="ps-3" style="font-family: Cormorant Garamond, Georgia, serif;">
                    <h5 class="mb-1" style="font-family: Cormorant Garamond, Georgia, serif;"><?php echo $row['name'] ?></h5>
                    <!-- <small>Profession</small> -->
                </div>
            </div>
        </div>

    <?php
}
    ?>




    <!-- Testimonial End -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>

    <?php
    include("fff.php");
    ?>