<!doctype html>
<html lang="en">

<head>
    <title>Book Your Ride User Log IN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<style>
    .form-control {
        background: transparent;
        border: none;
        height: 50px;
        color: white !important;
        border: 1px solid transparent;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 0px;
        padding-left: 20px;
        padding-right: 20px;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }
</style>

<body>
    <!-- <a href="images/"></a> -->
    <div class="img js-fullheight" style="background-image: url(images/review.jpg); height: 1000%;">
        <?php
        include('connection.php');
        session_start();
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
            $outstat_car_id = $_GET['outstat_car_id'];
            $id = $_POST['id'];
            // $area_id = $_POST['area_id']
            $city_id = $_POST['city_id'];
            $drop_city = $_POST['drop_city'];
            $pickup_location = $_POST['pickup_location'];

            $booking_date = $_GET['booking_date'];

            $rent_start_date = $_POST['rent_start_date'];
            $date1 = date_create("$_POST[rent_start_date]");
            // $rent_start_date = $date1->format(" %a ");

            $pickup_time = $_POST['pickup_time'];

            $return_date = $_POST['return_date'];
            $date2 = date_create("$_POST[return_date]");
            // $return_date = $date2->format(" %a ");

            $price_day = $_GET['price_day'];

            $date3 = date_diff($date1, $date2);
            $total_day = $date3->format(" %a ");
            $total_amount = $price_day * $total_day;

            $driver_comission=$_GET['driver_comission'];


            $q = mysqli_query($con, "insert into outstation_booking values('',$user_id,'$user_name',$user_contact,'$user_email',$outstat_car_id,$id,$city_id,'$drop_city','$pickup_location','$booking_date','$rent_start_date','$pickup_time','$return_date',$price_day,$total_day,$total_amount,$driver_comission,0)");
            // echo "insert into outstation_booking values('',$user_id,'$user_name',$user_contact,'$user_email',$outstat_car_id,$id,$city_id,'$drop_city','$pickup_location','$booking_date','$rent_start_date','$pickup_time','$return_date',$price_day,$total_day,$total_amount,0)";


            // $user_name = $_POST['user_name'];
            $user_name1 = $_SESSION['user_name'];
            $pick_date = $_POST['pick_date'];
            $pick_time = $_POST['pick_time'];
            $total_days = $total_day;
            $total_amount = $total_amount;

            // $to = $_SESSION['email'];
            $to = $_POST['user_email'];
            $subject = "booking mail";
            $message = "Hyy $user_name1

Thank you for joining BOOK YOUR RIDE ,We are delighted to inform you , Your car is all Santized and cleaned up to drive along with you on date: $pick_date time: $pick_time Days: $total_days Our driver will pick you up from the $pickup_location at $pickup_time. Hope you enjoy the ride and our services . Please add your review from our website and let us know how was your experience. The amount you need to pay for the ride is $total_amount.
    
    Regards, 
    Team Book your Ride";

            $from = "bookyourrideanh@gmail.com";
            $headers = "From : $from";

            if ($q) {

                $q1 = mysqli_query($con, "update outstation_car set car_status=1 where outstat_car_id=$outstat_car_id");
                $q2 = mysqli_query($con, "update outstation_booking set return_status=0 where outstat_car_id=$outstat_car_id  ");
                $q3 = mysqli_query($con, "update dregis set available_status=1 where id=$id ");
                if (mail($to, $subject, $message, $headers) && ($q1) && ($q2) && ($q3)) {
                    // echo "<script>alert('Inserted......');</script>";
                    echo "<script>window.location.assign('../paymentinvoice/outstationpayment_invoice.php?outstat_car_id=$outstat_car_id')</script>";
                } else {
                    echo "<script>alert('Your Changes are Not Upgraded.');</script>";
                }
            } else {
                echo "<script>alert('Oops!! There might be something wrong.');</script>";
            }
            
        }

        ?>


        <section class="ftco-section">
            <div class="container" style="background: #0f172b; margin-left: 613px; width: 640px; margin-top: -100px;">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-6">
                        <h2 class="heading-section" style="width: 295px; margin-top: 30px;">CHECK YOUR DETAILS</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0" style="margin-right: -164px; margin-left: -164px;">
                            <?php
                            // include('connection.php');
                            $user_id = $_SESSION['user_id'];
                            $user_name = $_GET['user_name'];
                            $user_contact = $_GET['user_contact'];
                            $user_email = $_GET['user_email'];
                            $outstat_car_id = $_GET['outstat_car_id'];
                            $id = $_GET['id'];
                            $city_id = $_GET['city_id'];
                            $drop_city = $_GET['drop_city'];
                            $pickup_location = $_GET['pickup_location'];
                            $rent_start_date = $_GET['rent_start_date'];
                            $pickup_time = $_GET['pickup_time'];
                            $return_date = $_GET['return_date'];
                            ?>


                            <form action="#" class="request-form ftco-animate bg-primary" style=" background: #0f172b !important; width: 100%;" method="POST">
                                <h2 class="section-title ff-secondary text-start  fw-normal animated slideInDown" style="color: #fea116;">Book your ride</h2>
                                <div class="form-group">
                                    <label for="" class="label">Full Name</label>
                                    <input type="text" class="form-control" name="user_name" value="<?php echo $user_name ?>" ; id="user_name" placeholder="Enetr Here!!" required>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Contact Number</label>
                                        <input type="text" style=" width: 250px;" class="form-control" placeholder="Enter Here!!" value="<?php echo $user_contact ?>" name="user_contact" id="user_contact" required>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Email Address</label>
                                        <input type="email" style=" width: 250px;" class="form-control" placeholder="Enter Here!!" name="user_email" value="<?php echo $user_email ?>" name="user_email" id="user_email" required>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <div class="form-group ml-2">
                                            <label for="" class="label">Pick-up city</label>
                                            <?php

                                            $q6 = mysqli_query($con, "select * from city_master where city_id=$city_id ");
                                            while ($row6 = mysqli_fetch_array($q6)) {

                                                echo "<input type='text' class='form-control' style='background-color: #22293c;'  id='city_id1' name='city_id1' placeholder='eg. Surat' value='$row6[city_name] ' readonly >";
                                                echo "<input type='hidden' class='form-control' style=' background-color: #22293c;'  id='city_id' name='city_id' placeholder='eg. Surat' value='$row6[city_id] ' readonly >";
                                            }
                                            ?>
                                        </div>

                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Destination city</label>
                                        <input type="text" style=" width: 250px;" class="form-control" id="drop_city" value="<?php echo $drop_city ?>" style="background-color: #22293c;" name="drop_city" required>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Pick-up Date</label>
                                        <input type="date" class="form-control" id="rent_start_date" name="rent_start_date" placeholder="Date" style=" background-color: #22293c; width: 250px;" value="<?php echo $rent_start_date ?>" readonly>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Drop-off Date</label>
                                        <input type="date" class="form-control" id="return_date" name="return_date" placeholder="Date" style=" background-color: #22293c; width: 250px;" value="<?php echo $return_date ?>" readonly onchange="chk()">
                                    </div>
                                </div>

                                <div class="form-group ml-2">
                                    <label for="" class="label">pick-up location</label>
                                    <input type="text" style=" width: 250px;" class="form-control" id="pickup_location" value="<?php echo $pickup_location ?>" name="pickup_location" placeholder="Area, Airport, Station, etc"required>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Pick-up time</label>
                                        <input type="time" style=" width: 250px;" id="time" class="form-control" value="<?php echo $pickup_time ?>" id="pickup_time" name="pickup_time" placeholder="Time" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group ml-2">
                                            <label for="" class="label">Select driver</label>
                                            <?php

                                            $q7 = mysqli_query($con, "select * from dregis where id=$id ");
                                            while ($row7 = mysqli_fetch_array($q7)) {

                                                echo "<input type='text' class='form-control' style=' background-color: #22293c;'  id='id1' name='id1'  value='$row7[name]' readonly>";
                                                echo "<input type='hidden' class='form-control' style=' background-color: #22293c;'  id='id' name='id'  value='$row7[id]' readonly>";
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="d-flex" style="margin-left: -118px;">
                                    <div class="form-group ml-2">
                                       <a href="../cardetail/booking_outstation.php"> <input type="button" name="previous" value="Previous" class="btn btn-secondary py-3 px-4" style="background: #fea116 !important; border: 1px solid #fea116 !important; width:63%; margin-left: 170px;"></a>
                                    </div>
                                    <div class="form-group ml-2"> -->
                                    <div class="form-group "> 
                                        <input type="submit" name="submit" value="Book A Car Now" class="btn btn-secondary py-3 px-4" style="background: #fea116 !important; border: 1px solid #fea116 !important; width:40%; margin-left: 85px;">
                                    </div>
                                <!-- </div> -->
                            </form>

                            <!-- <p class="w-100 text-center">&mdash; Not A Member? &mdash;</p> -->
                            <div class="social d-flex text-center">
                                <!-- <a href="registration.php" class="px-2 py-2 mr-md-1 rounded"></span>Register Now </a> -->
                                <!-- <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>