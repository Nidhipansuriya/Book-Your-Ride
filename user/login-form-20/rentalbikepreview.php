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
    <div class="img js-fullheight" style="background-image: url(images/review.jpg); ">
        <?php
        include('connection.php');
        $con = mysqli_connect("localhost", "root", "", "byr");
        session_start();

        if (isset($_POST['submit'])) {
            // session_start();

            $user_id = $_SESSION['user_id'];
            $user_name = $_POST['user_name'];
            $user_contact = $_POST['user_contact'];
            $user_email = $_POST['user_email'];
            $bike_id = $_GET['bike_id'];
            $liecense_no = $_POST['liecense_no'];

            // // $front_photo = $_FILES["front_photo"]["name"];
            // $front_photo=$_SESSION['front_photo'];
            // $file_temp1 = $_FILES["front_photo"]["tmp_name"];
            
            // // $back_photo = $_FILES["back_photo"]["name"];
            // $back_photo=$_SESSION['back_photo'];
            // $file_temp2 = $_FILES["back_photo"]["tmp_name"];


            $booking_date = $_GET['booking_date'];


            $pick_date = $_POST['pick_date'];
            $date1 = date_create("$_POST[pick_date]");
            // $rent_start_date = $date1->format(" %a ");

            $return_date = $_POST['return_date'];
            $date2 = date_create("$_POST[return_date]");
            // $return_date = $date2->format(" %a ");

            $pick_time = $_POST['pick_time'];

            $price_day = $_GET['price_day'];

            $date3 = date_diff($date1, $date2);
            $total_day = $date3->format(" %a ");

            $total_amount = $price_day * $total_day;


            $q = mysqli_query($con, "insert into rental_bike_booking values('',$user_id,'$user_name','$user_contact','$user_email',$bike_id,'$liecense_no','$booking_date','$pick_date','$return_date','$pick_time',$price_day,$total_day,$total_amount,0)");
            // echo "insert into rental_bike_booking values('',$user_id,'$user_name','$user_contact','$user_email',$bike_id,'$liecense_no','$booking_date','$pick_date','$return_date','$pick_time',$price_day,$total_day,$total_amount,0)";
            // $q = mysqli_query($con, "insert into rental_bike_booking values('',$user_id,'$user_name','$user_contact','$user_email',$bike_id,'$liecense_no','$front_photo','$back_photo','$booking_date','$pick_date','$return_date','$pick_time',$price_day,$total_day,$total_amount,0)");

            // echo "insert into rental_bike_booking values('',$user_id,'$user_name',$user_contact,'$user_email',$bike_id,'$liecense_no','$front_photo','$back_photo','$booking_date','$pick_date','$return_date','$pick_time',$price_day,$total_day,$total_amount,0)";

            $user_name1 = $_SESSION['user_name'];

            $pick_date = $_POST['pick_date'];
            $pick_time = $_POST['pick_time'];
            $total_day = $total_day;
            $total_amount = $total_amount;

            // $to = $_SESSION['email'];
            $to = $_POST['user_email'];
            $subject = "booking mail";
            $message = "Hyy $user_name1

Thank you for joining BOOK YOUR RIDE ,We are delighted to inform you , Your bike is all Santized and cleaned up to drive along with you on date: $pick_date time: $pick_time Days: $total_day.You can pick up your Ride from Book your ride office at 7,square arcade , Adajan ,Surat.Hope you enjoy the ride and our services . Please add your review from our website and let us know how was your experience. The amount you need to pay for the ride is $total_amount.
    
    Regards, 
    Team Book your Ride";
            $from = "bookyourrideanh@gmail.com";
            $headers = "From : $from";



            if ($q) {
                // move_uploaded_file($file_temp1, "images/" . $front_photo);
                // move_uploaded_file($file_temp2, "images/" . $back_photo);

                $q1 = mysqli_query($con, "update rental_bike_booking set return_status=0 where bike_id=$bike_id");
                $q2 = mysqli_query($con, "update bikemaster set status=1 where bike_id=$bike_id");

                // if ( ($q1) && ($q2)) {
                if (mail($to, $subject, $message, $headers) && ($q1) && ($q2)) {

                    // echo "<script>alert('Inserted......');</script>";
                    echo "<script>window.location.assign('../paymentinvoice/bikepayment_invoice.php?bike_id=$bike_id')</script>";
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
                            $bike_id = $_GET['bike_id'];
                            $liecense_no = $_GET['liecense_no'];
                            // $front_photo = $_GET['front_photo'];
                            // $back_photo = $_GET['back_photo'];
                            $booking_date = $_GET['booking_date'];
                            $pick_date = $_GET['pick_date'];
                            $return_date = $_GET['return_date'];
                            $pick_time = $_GET['pick_time'];
                            $price_day = $_GET['price_day'];
                            $total_day = $_GET['total_day'];
                            $total_amount = $_GET['total_amount'];



                            ?>



                            <form action="" class="request-form ftco-animate bg-primary" style=" background: #0f172b !important; width: 100%;" method="POST" enctype="multipart/form-data">
                                <h2 class="section-title ff-secondary text-start  fw-normal animated slideInDown" style="color: #fea116;">Book your ride</h2>
                                <div class="form-group">
                                    <label for="" class="label">Full Name</label>
                                    <input type="text" class="form-control" name="user_name" value="<?php echo "$_SESSION[user_name]"; ?>" id="user_name" placeholder="Enetr Here!!"required>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Contact Number</label>
                                        <input type="text" class="form-control" placeholder="Enter Here!!" style=" width: 250px;" value="<?php echo "$_SESSION[contact]"; ?>" name="user_contact" id="user_contact"required>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Email Address</label>
                                        <input type="email" class="form-control" placeholder="Enter Here!!" style=" width: 250px;" name="user_email" value="<?php echo "$_SESSION[email]"; ?>" id="user_email"required>
                                    </div>
                                </div>

                                <div class="form-group ml-2">
                                    <label for="" class="label">Liecense Number</label>
                                    <input type="text" class="form-control" id="liecense_no" name="liecense_no" value="<?php echo $liecense_no; ?>" placeholder="Enter Here!!"required>
                                </div>

                                <!-- <div class="d-flex">
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Liecense Front Photo</label>
                                        <input type="file" class="form-control" id="front_photo" name="front_photo" value="<?php echo $front_photo; ?>"  placeholder="eg. Mumbai">
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Liecense Rear Photo</label>
                                        <input type="file" class="form-control" id="back_photo" name="back_photo" value="<?php echo $back_photo; ?>"  placeholder="eg. Mumbai">
                                    </div>
                                </div> -->
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Pick-up Date</label>
                                        <input type="date" class="form-control" id="pick_date" name="pick_date" value="<?php echo $pick_date; ?>" style="background-color: #22293c; width: 250px;" placeholder="Date" readonly>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Return Date</label>
                                        <input type="date" class="form-control" id="return_date" name="return_date" value="<?php echo $return_date; ?>" style="background-color: #22293c; width: 250px;" placeholder="Date" onchange="chk()" readonly>
                                    </div>
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Pick-up Time</label>
                                    <input type="time" class="form-control" id="pick_time" name="pick_time" value="<?php echo $pick_time; ?>" placeholder="Enter Here!!"required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Book A Car Now" class="btn btn-secondary py-3 px-4" style="background: #fea116 !important; border: 1px solid #fea116 !important; width:40%; margin-left: 170px;">
                                </div>
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