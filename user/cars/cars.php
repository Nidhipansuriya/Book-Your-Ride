<?php
include("hc.php");
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

    .sticky-top.navbar-dark {
        background: #0f172b !important;
    }

    .btn-primary {
        color: #fff;
        background-color: #fea116;
        border-color: #fea116;


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

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: #FEA116
    }

    .hero-header {
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url("../../user/img/owndrive.jpeg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<!-- <a href="../../user/img/owndrive.jpeg"></a> -->
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <?php
            include('connection.php');
            $brand_id = $_GET['x'];
            $q = mysqli_query($con, "select * from brandmaster where brand_id=$brand_id");
            while ($row = mysqli_fetch_array($q)) {
            ?>
                <h1 class="display-3 text-white text-center mb-3 animated slideInDown"><?php echo $row['brand_name']; ?>'s Cars</h1>
            <?php
            }
            ?>
            <nav aria-label="breadcrumb">
                <ol class="bg-nathi justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="../../user/home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="../../user/carbrands.php">Brands</a></li>

                    <li class="breadcrumb-item text-white active" aria-current="page">Cars</li>
                </ol>
            </nav>
        </div>
    </div>
</div>



<div class="container-xxl py-1">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- <div class="service_area"> -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="service_active owl-carousel">
                            <?php
                            include('connection.php');
                            $brand_id = $_GET['x'];
                            $q = mysqli_query($con, "select * from carmaster where brand_id=$brand_id");
                            while ($row = mysqli_fetch_array($q)) {
                            ?>
                                <div class="single_service">
                                    <div class="thumb">
                                        <!-- <img src="img/service/1.png" alt=""> -->
                                        <?php
                                        // echo "<img src='../../admin/images/$row[car_images]'>";
                                        echo "<a href='../carmodel/carmodel.php?m=$row[0]'><img src='../../admin/images/$row[car_images]'></a>";
                                        ?>
                                    </div>
                                    <div class="service_info">
                                        <?php
                                        echo "<a href='../carmodel/carmodel.php?m=$row[0]'><h3 style='text-align: center;'>$row[car_name]</h3></a>";
                                        ?>
                                    </div>
                                </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>

<?php
include("fc.php");
?>