<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Book Your Ride</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/rr.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">




    <!-- own -->
    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

</head>
<style>
    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link.active {
        color: #fea116 !important;
    }
</style>
<?php
session_start();
?>

<body>
    <div class="container-xxl position-relative p-0" style="font-family: Cormorant Garamond, Georgia, serif;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0" style="font-family: Cormorant Garamond, Georgia, serif;">
            <a href="../index.php" class="navbar-brand p-0">
                <!-- <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1> -->
                <h2 class=" m-0" style="color: #FEA116;">BOOK YOUR
                    <img class="me-3" data-wow-delay="0.7s" src="../../user/img/main logo.png" style="height:65px; width:105px;">
                </h2>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="../index.php" class="nav-item nav-link ">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Rides</a>
                        <div class="dropdown-menu m-2" style=" width: 200px;">
                            <!-- <a href="../user/booking-form/pre_outstation_booking.php" class="dropdown-item">Driver With Driver</a> -->
                            <a href="availablecars.php" class="dropdown-item">Driver With Driver</a>
                            <a href="available_kaali_peeli.php" class="dropdown-item">Kaali Peeli</a>
                            <a href="carbrands.php" class="dropdown-item">Driver Your Own</a>
                            <a href="bikebrands.php" class="dropdown-item">Bikes</a>
                        </div>
                    </div>
                    <a href="../testimonial.php" class="nav-item nav-link">Testimonial</a>
                    <a href="../aboutus.php" class="nav-item nav-link">About</a>
                    <!-- <a href="menu.html" class="nav-item nav-link">Menu</a> -->

                    <a href="../contactus.php" class="nav-item nav-link">Contact</a>

                </div>
                <!-- <a href="" class="btn btn-primary py-2 px-4">Book A Table</a> -->
                <div>
                    <?php
                    if (isset($_SESSION['user_name']) && isset($_SESSION['contact'])) {
                    ?>
                        <a href="../userprofile.php" class="nav-item nav-link">
                            <h3 class="bi bi-person-circle" style="color:white; margin-bottom: 4px;  margin-left: 30px; "></h3>
                            <div class="nav-item dropdown">

                                <span style="color: white; font-size:77%"><a href="#" class="nav-link dropdown-toggle" style="color: white; font-size:77%; margin-top: -25%;" data-bs-toggle="dropdown"> <?php echo $_SESSION['user_name']; ?> </a></span>
                                <div class="dropdown-menu m-0" style="width: 230px;">



                                    <a class="dropdown-item"><?php
                                                                echo $_SESSION['contact'];
                                                                ?> </a>

                                    <hr>
                                    <a href="../userprofile.php" class="dropdown-item">Profile</a>
                                    <a href="../login-form-20/verify_password.php" class="dropdown-item">Reset Password</a>
                                    <a href="../login-form-20/logout.php" class="dropdown-item">Logout</a>


                                </div>
                            </div>
                        </a>
                    <?php
                    } else {
                    ?>
                        <a href="../login-form-20/login.php" class="nav-item nav-link">
                            <h3 class="bi bi-person-circle" style="color:white; margin-left: 18%; margin-bottom: -12px;"></h3>
                            <div class="nav-item dropdown">
                                <!-- <div class="nav-item dropdown"> -->
                                <span style="color: white; font-size:77%"><a href="#" class="nav-link dropdown-toggle" style="color: white; font-size:77%; margin-top: -25%;" data-bs-toggle="dropdown">Sign In</a></span>
                                <div class="dropdown-menu m-0" style="width: 230px;">


                                    <!-- <a class="dropdown-item"> Hello! Riders -->

                                    <h6 class="dropdown-item" style="font-weight: 1000;"> Welcome </h6>
                                    <p class="dropdown-item" style="font-size: 85%; margin-top:-10px;"> To Book your memorable Rides </p>
                                    <hr>
                                    
                                    <!-- <a href="userprofile.php" class="dropdown-item" style="font-size: 95%; margin-top:-10px;">Profile</a> -->
                                    <a href="../login-form-20/login.php" class="nav-item nav-link btn btn-outline-warning dropdown-item" style="width:150px; font-size: 75%; margin-top:-10px; border: 2px; margin-left:10px; margin-bottom:-10px;  color:#FEA116;">Sign In/Sign Up</a>


                                </div>
                            </div>

                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <a href="../homebook.php" class="btn btn-primary py-2 px-4">Book A Ride</a>

        </nav>
    </div>

    <!-- Navbar & Hero End -->