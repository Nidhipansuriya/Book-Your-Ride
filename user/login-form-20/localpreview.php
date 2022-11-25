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
<script language="javascript" type="text/javascript">
    function getXMLHTTP() {
        var xmlhttp = false;
        xmlhttp = new XMLHttpRequest();
        return xmlhttp;
    }

    function getDriver(area_id) {
        var strURL = "../cardetail/finddriver.php?area_id=" + area_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('id').innerHTML = req.responseText;
                }
            }
            req.open("GET", strURL, true);
            req.send();
        }
    }
</script>
<!-- <a href="../cardetail/finddriver.php"></a> -->
<body>
    <!-- <a href="images/"></a> -->
    <div class="img js-fullheight" style="background-image: url(images/review.jpg); ">
        <?php
        include('connection.php');
        $con = mysqli_connect("localhost", "root", "", "byr");

        if (isset($_POST['submit'])) {

            /*$now = time($rent_start_date); // or your date as well
                $your_date = strtotime($return_date);
                $datediff = $now - $your_date;*/

            // $total_day =  round($datediff / (60 * 60 * 24));

            session_start();
            $user_id = $_SESSION['user_id'];
            $user_name = $_POST['user_name'];
            $user_contact = $_POST['user_contact'];
            $user_email = $_POST['user_email'];
            $kaali_peeli_id = $_GET['kaali_peeli_id'];
            $id = $_POST['id'];
            $area_id = $_POST['area_id'];
            $pickup_location = $_POST['pickup_location'];
            $drop_location = $_POST['drop_location'];
            $booking_date = $_GET['booking_date'];
            $pickup_date = $_POST['pickup_date'];
            $pickup_time = $_POST['pickup_time'];
            $price_km = $_GET['price_km'];
            $total_km = $_GET['total_km'];
            $total_price = $_GET['total_price'];

          
            $q = mysqli_query($con, "insert into kaali_peeli_booking values('',$user_id,'$user_name',$user_contact,'$user_email',$kaali_peeli_id ,$id,$area_id,'$pickup_location','$drop_location','$booking_date','$pickup_date','$pickup_time',$price_km,$total_km,$total_price,0)");
            // echo "insert into kaali_peeli_booking values('',$user_id,'$user_name',$user_contact,'$user_email',$kaali_peeli_id ,$id,$area_id,'$pickup_location','$drop_location','$booking_date','$pickup_date','$pickup_time',$price_km,$total_km,$total_price,0)";

             // $user_name = $_POST['user_name'];
             $user_name1 = $_SESSION['user_name'];
             $pick_date = $_POST['pickup_date'];
             $pick_time = $_POST['pickup_time'];
             $total_days = $total_day;
             $total_amount = $total_amount;
 
            //  $to = $_SESSION['email'];
             $to = $_POST['user_email'];
             $subject = "Booking Mail";
             $message = "Hyy $user_name1,
 
 Thank you for joining BOOK YOUR RIDE ,We are delighted to inform you , Your Kaali Peeli is all Santized and cleaned up to drive along with you on date: $pick_date time: $pick_time Our driver will pick you up from the $pickup_location at $pickup_time. Hope you enjoy the ride and our services . Please add your review from our website and let us know how was your experience. The amount you need to pay for the ride is $total_amount.
     
     Regards, 
     Team Book your Ride";
 
             $from = "bookyourrideanh@gmail.com";
             $headers = "From : $from";

            if ($q) {

                $q1 = mysqli_query($con, "update dregis set available_status=1 where id=$id ");
                $q2 = mysqli_query($con, "update kaali_peeli set status=1 where kaali_peeli_id = $kaali_peeli_id ");
                $q3 = mysqli_query($con, "update kaali_peeli_booking set return_status=0 where 	kaali_peeli_id = $kaali_peeli_id ");
                if (mail($to, $subject, $message, $headers) && ($q1) && ($q2) && ($q3)) {

                    echo "<script>window.location.assign('../paymentinvoice/localpayment_invoice.php?kaali_peeli_id=$kaali_peeli_id')</script>";
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
                            session_start();
                            // include('connection.php');
                            $user_id = $_SESSION['user_id'];
                            $user_name = $_GET['user_name'];
                            $user_contact = $_GET['user_contact'];
                            $user_email = $_GET['user_email'];
                            $kaali_peeli_id = $_GET['kaali_peeli_id'];
                            $id = $_GET['id'];
                            $area_id = $_GET['area_id'];
                            $pickup_location = $_GET['pickup_location'];
                            $drop_location = $_GET['drop_location'];
                            $booking_date = $_GET['booking_date'];
                            $pickup_date = $_GET['pickup_date'];
                            $pickup_time = $_GET['pickup_time'];
                            $price_km = $_GET['price_km'];
                            $total_km = $_GET['total_km'];
                            $total_km = $_GET['total_price'];
                            ?>


                            <form action="#" class="request-form ftco-animate bg-primary" style=" background: rgb(15 23 43) !important; width: 100%;" method="POST">
                                <h2 class="section-title ff-secondary text-start  fw-normal animated slideInDown" style="color: #fea116;">Book your ride</h2>
                                <div class="form-group">
                                    <label for="" class="label">Full Name</label>
                                    <input type="text" class="form-control" style=" width: 250px;" name="user_name" id="user_name" value="<?php echo "$_SESSION[user_name]"; ?>" placeholder="Enetr Here!!" required>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Contact Number</label>
                                        <input type="text" class="form-control" style=" width: 250px;" placeholder="Enter Here!!" value="<?php echo "$_SESSION[contact]"; ?>" name="user_contact" id="user_contact" required>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Email Address</label>
                                        <input type="email" class="form-control" style=" width: 250px;" name="user_email" placeholder="Enter Here!!" value="<?php echo "$_SESSION[email]"; ?>" name="user_email" id="user_email" required>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <div class="form-group ml-2">
                                            <label for="" class="label">Pick-up Area</label>
                                            <!-- <input type="text" class="form-control" id="pickup_city" name="pickup_city" placeholder="eg. Surat"> -->
                                            <?php
                                            
                                            $q5 = mysqli_query($con, "select * from area_master where area_id=$area_id ");
                                             while ($row5 = mysqli_fetch_array($q5)) {

                                            echo "<input type='text' class='form-control' style=' background-color: #22293c;' id='area_id1' name='area_id1' placeholder='eg. Surat' value='$row5[areaname] ' readonly>";
                                            echo "<input type='hidden' class='form-control' style=' background-color: #22293c;' id='area_id' name='area_id' placeholder='eg. Surat' value='$row5[area_id] ' readonly>";
                                            }
                                            ?>
                                        </div>
                                     
                                    </div>
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Pick-up Date</label>
                                        <input type="date" class="form-control" id="pickup_date" value="<?php echo $pickup_date ?>" style="background-color: #22293c; width: 250px;" name="pickup_date" placeholder="Date" readonly>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group ml-2">
                                        <label for="" class="label">pick-up location</label>
                                        <input type="text" class="form-control" id="pickup_location" name="pickup_location" style=" width: 250px;" value="<?php echo $pickup_location ?>" placeholder="Area, Airport, Station, etc" required>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Drop location</label>
                                        <input type="text" class="form-control" id="drop_location" name="drop_location" style=" width: 250px;" value="<?php echo $drop_location ?>" placeholder="Area, Airport, Station, etc" required>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Pick-up time</label>
                                        <input type="time" id="time" class="form-control" id="pickup_time" style=" width: 250px;" name="pickup_time" value="<?php echo $pickup_time ?>" placeholder="Time" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group ml-2">
                                            <label for="" class="label">Select driver</label>
                                            <?php
                                            
                                            $q7 = mysqli_query($con, "select * from dregis where id=$id ");
                                             while ($row7 = mysqli_fetch_array($q7)) {

                                            echo "<input type='text' class='form-control' id='id1' name='id1'  style=' background-color: #22293c;'  value='$row7[name]' readonly >";
                                            echo "<input type='hidden' class='form-control' id='id' name='id'  style=' background-color: #22293c;'  value='$row7[id]' readonly >";
                                            }
                                            ?>
                                        </div>
                                        <!-- <select name="id" id="id" style="width: 250px; margin-left: 10px; height:35px; background-color: #0f172b; color: #fff;">
                                            <option value="">Select Driver</option>
                                        </select> -->
                                    </div>
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