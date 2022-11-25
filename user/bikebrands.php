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

    .hero-header {
        background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/mainbike.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>





<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <!-- <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4"> -->
            <h1 class="display-3 text-white text-center mb-3 animated slideInDown">Choose A Brand</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Bikes</a></li> -->
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
        $q = mysqli_query($con, "select * from bikebrandmaster ");
        while ($row = mysqli_fetch_array($q)) {
        ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <!-- <div class="owl-carousel owl-theme owl-loaded"> -->
                <div class="our-team ">

                    <div class="picture" style="border: none;">
                        <?php
                        echo "<a href='../user/carmodel/bike.php?a=$row[0]'><img src='../admin/images/$row[bikebrand_photo]'></a>";
                        ?>
                        <!-- <img class="img-fluid" src="https://picsum.photos/130/130?image=1027"> -->
                    </div>
                    </a>
                    <div class="team-content">
                        <h3 class="name"><?php echo $row['bikebrand_name']; ?></h3>

                        <?php
                        echo " <a href='../user/carmodel/bike.php?a=$row[0]'><h4class='title'>Show Bikes</h4></a>"; ?>
                    </div>
                </div>
            </div>
        <?php
        } ?>

    </div>
</div>



<?php
include("fff.php");
?>