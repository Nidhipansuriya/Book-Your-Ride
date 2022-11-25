<?php
include("hd.php");
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

    .btn.btn-primary {
        background: #fea116 !important;
        border: 1px solid #fea116 !important;
        color: #fff !important;
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

    ::-webkit-calendar-picker-indicator {
        color: white;
    }
</style>

<script>
    function chk() {
        var a = document.getElementById('rent_start_date').value;
        var b = document.getElementById('return_date').value;
     

        if (b < a)
            alert('Your Return Date should be more than Pick up Date');
    }
    function chk1()
    {
        var a = new Date(document.getElementById('rent_start_date').value);
        //var d = document.getElementById('booking_date').value;
        var d = new Date().getTime();
       
        if(a < d)
            alert('Please select your date more than current date');
    }
</script>


<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg'); margin-top: -10px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                    <!-- <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p> -->
                    <a href="images/Bookyourride.MP4" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center" style="background: #fea116;">
                            <span class="ion-ios-play"></span>
                        </div>
                        <div class="heading-title ml-5">
                            <span>Easy steps for renting a car</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
            include('connection.php');
            $con = mysqli_connect("localhost", "root", "", "byr");

            if (isset($_POST['submit'])) {

                // session_start();

                /*     $now = time($rent_start_date); // or your date as well
                $your_date = strtotime($return_date);
                $datediff = $now - $your_date;*/

                // $total_day =  round($datediff / (60 * 60 * 24));

                $user_id = $_SESSION['user_id'];
                $user_name = $_POST['user_name'];
                $user_contact = $_POST['user_contact'];
                $user_email = $_POST['user_email'];
                $outstat_car_id = $_GET['m'];
                $id = $_POST['id'];
                // $area_id = $_POST['area_id']
                $city_id = $_POST['city_id'];
                $drop_city = $_POST['drop_city'];
                $pickup_location = $_POST['pickup_location'];

                $booking_date = date('y/m/d');

                $rent_start_date = $_GET['p'];
                $date1 = date_create("$_GET[p]");
                // $rent_start_date = $_POST['rent_start_date'];
                // $date1 = date_create("$_POST[rent_start_date]");
                // $rent_start_date = $date1->format(" %a ");

                $pickup_time = $_POST['pickup_time'];

                $return_date = $_GET['q'];
                $date2 = date_create("$_GET[q]");
                // $return_date = $_POST['return_date'];
                // $date2 = date_create("$_POST[return_date]");
                // $return_date = $date2->format(" %a ");

                $price_day = $_GET['n'];

                $date3 = date_diff($date1, $date2);
                $total_day = $date3->format(" %a ");
                $total_amount = $price_day * $total_day;

                $driver_comission=$total_amount*10/100;

                echo "<script>window.location.assign('../login-form-20/outstationpreview.php?user_name=$user_name&user_contact=$user_contact&user_email=$user_email&outstat_car_id=$outstat_car_id&id=$id&city_id=$city_id&drop_city=$drop_city&pickup_location=$pickup_location&booking_date=$booking_date&rent_start_date=$rent_start_date&pickup_time=$pickup_time&return_date=$return_date&price_day=$price_day&total_day=$total_day&driver_comission=$driver_comission&total_amount=$total_amount')</script>";
              
            }

            ?>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
                <div class="row no-gutters">
                    <div class="col-md-7 d-flex align-items-center">
                        <form action="#" class="request-form ftco-animate bg-primary" style=" background: #0f172b !important; width: 100%;" method="POST">
                            <h2 class="section-title ff-secondary text-start  fw-normal animated slideInDown" style="color: #fea116;">Book your ride</h2>
                            <div class="form-group">
                                <label for="" class="label">Full Name</label>
                                <input type="text" class="form-control" name="user_name" id="user_name" value="<?php echo"$_SESSION[user_name]"; ?>" placeholder="Enetr Here!!" required>
                            </div>
                            <div class="d-flex">
                                <div class="form-group mr-2">
                                    <label for="" class="label">Contact Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Here!!" value="<?php echo"$_SESSION[contact]"; ?>" name="user_contact" id="user_contact" required>
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Enter Here!!" value="<?php echo"$_SESSION[email]"; ?>" name="user_email" id="user_email"required>
                                </div>
                            </div>
                            
                            <input type="hidden" id="booking_date" class="form-control" value="<?php echo date('Y/m/d'); ?>" id="booking_date" name="booking_date" required>

                            <div class="d-flex">
                                <div class="form-group mr-2">
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Pick-up city</label>
                                        <!-- <input type="text" class="form-control" id="pickup_city" name="pickup_city" placeholder="eg. Surat"> -->
                                    </div>
                                    <select name="city_id" id="city_id" style="width: 100%; height:35px;">
                                        <?php
                                        $q = mysqli_query($con, "select * from city_master ");
                                        while ($row = mysqli_fetch_array($q)) {
                                            echo "<option value=$row[0]>$row[1]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Destination city</label>
                                    <input type="text" class="form-control" id="drop_city" name="drop_city" placeholder="eg. Mumbai" required>
                                </div>
                            </div>
                        

                            <div class="form-group ml-2">
                                <label for="" class="label">pick-up location</label>
                                <input type="text" class="form-control" id="pickup_location" name="pickup_location" placeholder="Area, Airport, Station, etc" required>
                            </div>
                            <div class="d-flex">
                                <div class="form-group ml-2">
                                    <label for="" class="label">Pick-up time</label>
                                    <input type="time" id="time" class="form-control" id="pickup_time" name="pickup_time" placeholder="Time"required>
                                </div>
                                <div class="form-group">
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Select driver</label>
                                    </div>
                                    <select name="id" id="id" style="width: 100%; margin-left: 10px; height:35px;"required>
                                        <!-- driver_id -->
                                        <?php
                                        $q = mysqli_query($con, "select * from dregis where area='outstation' and available_status=0 ");
                                        while ($row = mysqli_fetch_array($q)) {
                                            echo "<option value=$row[0]>$row[1]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <input type="submit" name="submit" value="Book A Car Now" class="btn btn-secondary py-3 px-4" style="background: #fea116 !important; border: 1px solid #fea116 !important; width:40%; margin-left: 170px;">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="services-wrap rounded-right w-100">
                            <h3 class="heading-section mb-4" style="margin-left: 125px;">Car Details</h3>
                            <div class="row d-flex mb-4">
                                <?php
                                include('connection.php');
                                $outstat_car_id = $_GET['m'];
                                $q = mysqli_query($con, "select * from outstation_car where outstat_car_id=$outstat_car_id");
                                while ($row = mysqli_fetch_array($q)) {
                                ?>

                                    <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <?php
                                            echo "<div class='icon d-flex align-items-center justify-content-center' style='margin-top: 20px;''><span> <img class='me-3' data-wow-delay='0.7s' src='../../admin/images/$row[outstat_car_photo]' style='height:170px; width:190px; margin-left:20px;'></span></div>";
                                            ?>

                                            <!-- <a href="../../admin/images/"></a> -->
                                            <div class="text w-100" style="margin-top: 50px;">
                                                <?php
                                                echo "<h3 class='heading mb-2'>$row[outstat_car_name]</h3>";
                                                echo "<span><p >Number Plate : $row[number_plate]<p></span>";
                                                echo "<span><p >Seats : $row[seats]<p></span>";
                                                echo "<span><p >Price Per Day : $row[price_day]<p></span>";
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <!-- <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                                <div class="services w-100 text-center">
                                                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                                                    <div class="text w-100">
                                                        <h3 class="heading mb-2">Select the Best Deal</h3>
                                                    </div>
                                                </div>
                                            </div> -->
                                <!-- <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                                <div class="services w-100 text-center">
                                                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                                                    <div class="text w-100">
                                                        <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                                                    </div>
                                                </div>
                                            </div> -->
                            </div>
                            <!-- <p><a href="#" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
include("fd.php");
?>