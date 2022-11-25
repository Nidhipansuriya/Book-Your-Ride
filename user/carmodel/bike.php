<?php
include("hm.php");
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
        background-color: #fea116;
        border-color: #fea116;
        /* margin-left: 85px; */
    } 
    .hero-header {
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url("../../user/img/mainbike1.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<script>
    function chk() {
        var a = document.getElementById('pick_date').value;
        var b = document.getElementById('return_date').value;


        if (b < a)
            alert('Your Return Date should be more than Pick up Date');
    }

    function chk1() {
        var a = new Date(document.getElementById('pick_date').value);
        //var d = document.getElementById('booking_date').value;
        var d = new Date().getTime();

        if (a < d)
            alert('Please select your date more than current date');
    }
</script>


<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <?php
            include('connection.php');
            $bikebrand_id = $_GET['a'];
            $q = mysqli_query($con, "select * from bikebrandmaster where bikebrand_id=$bikebrand_id");
            while ($row = mysqli_fetch_array($q)) {
            ?>
                <h1 class="display-3 text-white text-center mb-3 animated slideInDown"><?php echo $row['bikebrand_name']; ?>'s Bikes</h1>
            <?php
            }
            ?>
            <nav aria-label="breadcrumb">
                <ol class="bg-nathi justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="../../user/bikebrands.php">Brands</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Cars</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">Bikes</li>
                </ol>
                <form action="#" style="background: #0f172b00 !important; width: 100%; margin-bottom: -50px; margin-top: 50px;" method="POST">
                    <div class="d-flex" style="margin-left: 205px;">
                        <div class="form-group mr-2">
                            <label for="" class="label">Pick-up Date</label>
                            <input type="date" class="form-control" id="pick_date" name="pick_date" placeholder="Date" onchange="chk1()" required />
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





<!--==========================
      Portfolio Section
    ============================-->
<section id="portfolio" class="section-bg" style="padding-left:120px;">
    <div class="container" style="padding-left: 50px;">
        <div class="row portfolio-container">

            <?php
            include('connection.php');
            if (isset($_POST['check'])) {

            $bikebrand_id = $_GET['a'];
            $r1 = $_POST['pick_date'];
            $r2 = $_POST['return_date'];
            $q = mysqli_query($con, "SELECT * FROM bikemaster where bike_id not in (select bike_id from rental_bike_booking where pick_date BETWEEN '$r1' and '$r2' or return_date BETWEEN '$r1' and '$r2' or (pick_date < '$r1' and return_date > '$r2')) and bikebrand_id = $bikebrand_id;");

            while ($row = mysqli_fetch_array($q)) {
            ?>
                <div class="col-lg-5 col-md-6 portfolio-item filter-app wow fadeInUp" style="height: 485px;">
                    <div class="portfolio-wrap">
                        <figure style=" height: 265px;">
                            <?php
                            echo "<img src='../../admin/images/$row[bike_photo]' class='img-fluid' style='height: 100%;' >";
                            ?>

                            <?php
                            echo "<a href='../../admin/images/$row[bike_photo]' data-lightbox='portfolio' height: 100%; data-title='$row[bike_name]' class='link-preview'  title='Preview'><i class='ion ion-eye'></i></a>";
                            ?>


                        </figure>
                        <div class="portfolio-info" style="height: 191px;">
                            <?php
                            echo " <h4>  $row[bike_name] </h4>";
                            ?>
                            <?php
                            echo " <h6 style=' margin-top: 33px; margin-bottom: 5px;'>Number Plate:  $row[number_plate] </h6>";
                            ?>
                            <?php
                            echo " <h6>Price Pre Day: &#8377 $row[price_day] </h6>";
                            ?>
                            <!-- <p>App</p> -->
                            <div style="align-items: center;">
                                <?php
                                echo "<p class='d-flex mb-0 d-block'><a href='../cardetail/check_session_rentalbike.php?x=$row[bike_id]&y=$row[price_day]&p=$r1&q=$r2' style='margin-left: 35%; margin-bottom : 10px;' class='btn btn-primary py-2 mr-1'>Book now</a> </p>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } 
        }?>


            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Card 3</a></h4>
                  <p>Card</p>
                </div>
              </div>
            </div> -->

            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Web 1</a></h4>
                  <p>Web</p>
                </div>
              </div>
            </div> -->

        </div>

    </div>
</section><!-- #portfolio -->





<?php
include("fm.php");
?>
