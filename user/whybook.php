<?php
include("hhh.php");
?>
<style>
.hero-byr {
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/whitecar.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<div class="container-xxl py-5 bg-dark hero-byr mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-family: Cormorant Garamond, Georgia, serif;font-weight: 500;">Why Book Your Ride?</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item text-white active" aria-current="page">Why Book Your Ride?</li>
            </ol>
        </nav>
    </div>
</div>


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



<?php
include("fff.php");
?>