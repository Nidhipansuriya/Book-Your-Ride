<?php
include("hhh.php");
?>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>


<style>
    body {
        font-family: tahoma;
        height: 100vh;
        /* background-image: url(https://picsum.photos/g/3000/2000); */
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
    }

    .our-team {
        padding: 30px 0 40px;
        margin-bottom: 30px;
        background-color: #f7f5ec;
        text-align: center;
        overflow: hidden;
        position: relative;
    }

    .our-team .picture {
        display: inline-block;
        height: 130px;
        width: 130px;
        margin-bottom: 50px;
        z-index: 1;
        position: relative;
    }

    .our-team .picture::before {
        content: "";
        width: 100%;
        height: 0;
        border-radius: 50%;
        background-color: #1369ce;
        position: absolute;
        bottom: 135%;
        right: 0;
        left: 0;
        opacity: 0.9;
        transform: scale(3);
        transition: all 0.3s linear 0s;
    }

    .our-team:hover .picture::before {
        height: 100%;
    }

    .our-team .picture::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #1369ce;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .our-team .picture img {
        width: 100%;
        height: auto;
        border-radius: 50%;
        transform: scale(1);
        transition: all 0.9s ease 0s;
    }

    .our-team:hover .picture img {
        box-shadow: 0 0 0 14px #f7f5ec;
        transform: scale(0.7);
    }

    .our-team .title {
        display: block;
        font-size: 15px;
        color: #4e5052;
        text-transform: capitalize;
    }

    .our-team .social {
        width: 100%;
        padding: 0;
        margin: 0;
        background-color: #1369ce;
        position: absolute;
        bottom: -100px;
        left: 0;
        transition: all 0.5s ease 0s;
    }

    .our-team:hover .social {
        bottom: 0;
    }

    .our-team .social li {
        display: inline-block;
    }

    .our-team .social li a {
        display: block;
        padding: 10px;
        font-size: 17px;
        color: white;
        transition: all 0.3s ease 0s;
        text-decoration: none;
    }

    .our-team .social li a:hover {
        color: #1369ce;
        background-color: #f7f5ec;
    }

    .py-5 {
        padding-top: 27rem !important;
    }

    .mb-5 {
        margin-bottom: -4rem !important;
    }

    .our-team .picture::after {
        background-color: #f7f5ec;
    }

    .our-team .picture::before {
        background-color: #fea116;
    }

    .our-team .social {
        background-color: #fea116;
    }

    element.style {
        font-family: Cormorant Garamond, Georgia, serif;
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
        background: var(--dark) !important;
    }

    .hero1-header {
        background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url("img/owndrive.jpeg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>


<a href="img/owndrive.jpeg"></a>


<div class="container-xxl py-5 bg-dark hero1-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">


            <h1 class="display-3 text-white text-center mb-3 animated slideInDown">Choose A Brand</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Cars</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Brands</li>
                </ol>
            </nav>

        </div>
    </div>
</div>







<div class="container">
    <div class="row">
        <?php
        include('connection.php');
        // $brand_id = $_POST['brand_id'];
        $q = mysqli_query($con, "select * from brandmaster ");
        while ($row = mysqli_fetch_array($q)) {
        ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <!-- <div class="owl-carousel owl-theme owl-loaded"> -->
                <div class="our-team ">

                    <div class="picture" style="border: none;">
                        <?php
                        echo "<a href='../user/cars/cars.php?x=$row[0]'><img src='../admin/images/$row[brand_logo]'></a>";
                        ?>
                        <!-- <img class="img-fluid" src="https://picsum.photos/130/130?image=1027"> -->
                    </div>
                    </a>
                    <div class="team-content">
                        <h3 class="name"><?php echo $row['brand_name']; ?></h3>

                        <?php
                        echo " <a href='../user/cars/cars.php?x=$row[0]'><h4class='title'>Show Cars</h4></a>"; ?>
                    </div>
                </div>
            </div>
        <?php
        } ?>

    </div>
</div>




<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn p1" data-wow-delay="0.1s">
    <div class="container py-1 p1">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6 p1">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                <a class="btn btn-link" href="aboutus.php">About Us</a>
                <a class="btn btn-link" href="contactus.php">Contact Us</a>
                <a class="btn btn-link" href="">Reservation</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>bookyourrideanh@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                <h5 class="text-light fw-normal">Monday - Saturday</h5>
                <p>09AM - 09PM</p>
                <h5 class="text-light fw-normal">Sunday</h5>
                <p>10AM - 08PM</p>
            </div>
            <div class="col-lg-3 col-md-6 p1">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Become Driver</h4>
                <p>Did you Just Think to drive ??? Lets join book your ride community to be a part of our beautiful journey.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <!-- <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email"> -->
                    <!-- <a href="#">  -->
                    <button type="button" class="btn btn-primary py-2 " onclick="window.location.href='../driver/registration.php'">Register</button>
                    <!-- </a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container p1">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 p1">
                    &copy; <a class="border-bottom" href="../driver/team.php">Book Your Ride</a>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br> -->
                    <!-- Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                </div>
                <div class="col-md-6 text-center text-md-end p1">
                    <div class="footer-menu">
                        <a href="index.php">Home</a>
                        <!-- <a href="">Cookies</a> -->
                        <a href="contactus.php">Help</a>
                        <a href="faq.php">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        ('.owl-carousel').owlCarousel();
    });
</script>
</body>

</html>