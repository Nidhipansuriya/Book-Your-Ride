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

    .hero-header1 {
        background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url("../../user/img/owndrive.jpeg");
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
            alert('You have selected invalid date!!');
    }

    function chk1() {
        var a = new Date(document.getElementById('pick_date').value);
        //var d = document.getElementById('booking_date').value;
        var d = new Date().getTime();

        if (a < d)
            alert('date should be greater than todays date');
    }
</script>

<div class="container-xxl py-5 bg-dark hero-header1 mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <?php
            include('connection.php');
            $car_id = $_GET['m'];
            $q = mysqli_query($con, "select * from carmaster where car_id=$car_id");
            while ($row = mysqli_fetch_array($q)) {
            ?>
                <h1 class="display-3 text-white text-center mb-3 animated slideInDown"><?php echo $row['car_name']; ?>'s Models</h1>
            <?php
            }
            ?>
            <nav aria-label="breadcrumb">
                <ol class="bg-nathi justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="../carbrands.php">Brands</a></li>
                    <li class="breadcrumb-item"><a href="../cars/cars.php">Cars</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Models</li>
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
<section id="portfolio" class="section-bg">
    <div class="container" style="padding-left: 60px;">
        <div class="row portfolio-container">


            <?php
            include('connection.php');
            if (isset($_POST['check'])) {
                $car_id = $_GET['m'];
                // $q = mysqli_query($con, "select * from carmodel where car_id=$car_id and status=0");
                $r1 = $_POST['pick_date'];
                $r2 = $_POST['return_date'];

                $q = mysqli_query($con, "SELECT * FROM carmodel where carmodel_id not in (select carmodel_id from rental_car_booking where pick_date BETWEEN '$r1' and '$r2' or return_date BETWEEN '$r1' and '$r2' or (pick_date < '$r1' and return_date > '$r2')) and car_id = $car_id;");

                while ($row = mysqli_fetch_array($q)) {

            ?>
                    <div class="col-lg-6 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap" style="width:450px;">
                            <figure>
                                <?php
                                echo "<img src='../../admin/images/$row[photo]' class='img-fluid' >";
                                ?>

                                <!-- <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a> -->
                                <?php
                                echo "<a href='../../admin/images/$row[interior_photo]' data-lightbox='portfolio' data-title='$row[carmodel_name]' class='link-preview'  title='Interior'><i class='ion ion-eye'></i></a>";
                                ?>

                                <!-- <a href="../cardetail/cardetail.php?n=$row[0]'>" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                                <?php
                                echo "<a href='../cardetail/cardetail.php?n=$row[carmodel_id]&m=$car_id&p=$r1&q=$r2' class='link-details' title='More Details'><i class='ion ion-android-open'></i></a>";
                                ?>
                            </figure>
                            <div class="portfolio-info">
                                <?php
                                echo " <h4><a href='../cardetail/cardetail.php?n=$row[carmodel_id]&m=$car_id&p=$r1&q=$r2'>  $row[carmodel_name] </a></h4>";
                                ?>
                                <!-- <p>App</p> -->
                            </div>
                        </div>
                    </div>
            <?php
                }
            } ?>
        </div>
    </div>
</section><!-- #portfolio -->

<?php
include("fm.php");
?>