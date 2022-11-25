<!-- <!doctype html> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css>
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js>
    <link rel="stylesheet" href="receipt/css/receipt.css">
</head>

<style>
    .btn-byr {
        color: #fff;
        background-color: #fea116;
        border-color: #fea116;
        margin-top: -50px;
        margin-left: 150px;
    }
</style>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    function pay_now() {
        var name = jQuery('#name').val();
        var amt = jQuery('#amt').val();

        jQuery.ajax({
            type: 'post',
            url: 'payment_process.php',
            data: "amt=" + amt + "&name=" + name,
            success: function(result) {
                var options = {
                    "key": "rzp_test_sOiONbesZNfBnB",
                    "amount": amt * 100,
                    "currency": "INR",
                    "name": "BOOK YOUR RIDE",
                    "description": "Test Transaction",
                    "image": "../img/byr.png",
                    "handler": function(response) {
                        jQuery.ajax({
                            type: 'post',
                            url: 'payment_process.php',
                            data: "payment_id=" + response.razorpay_payment_id,
                            success: function(result) {
                                window.location.href = "../login-form-20/confirm.php";
                            }
                        });
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
            }
        });


    }
</script>

<body>

    <?php
    header("Pragma: no-cache");
    header("Cache-Control: no-cache");
    header("Expires: 0");

    ?>


    <div class="container">
        <a href="../index.php" class="navbar-brand p-0">
            <!-- <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1> -->
            <h2 class="text-primary m-0" style="color: #fea116!important;padding-top: 10px;">BOOK YOUR
                <img class="me-3" data-wow-delay="0.7s" src="../img/main logo.png" style="height:65px; width:105px;">
            </h2>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <div class="row m-0">
            <?php
            session_start();
            include('../connection.php');
            $kaali_peeli_id = $_GET['kaali_peeli_id'];
            $user_id = $_SESSION['user_id'];
            $q = mysqli_query($con, "select kp.*,kpb.* from kaali_peeli kp, kaali_peeli_booking kpb where kp.kaali_peeli_id=$kaali_peeli_id and kpb.kaali_peeli_id=$kaali_peeli_id");

            while ($row = mysqli_fetch_array($q)) {

            ?>
                <div class="col-lg-7 pb-5 pe-lg-5">
                    <div class="row">

                        <?php
                        echo "<div class='col-12 p-5' style='margin-left:80px;' > <img src='../../admin/images/$row[photo]'  style=' width: 450px;'> </div>";
                        ?>
                        <div class="row  bg-light" style="padding-top: 15px; padding-left: 20px; width: 80%; margin-left: 130px; margin-left: 130px;">


                            <div class="col-md-6 col-6 ps-30 my-4">
                                <p class="h5 ">Cab Number Plate</p>
                                <p class="text-muted"><?php echo "$row[number_plate]"; ?></p>
                            </div>
                            <div class="col-md-6 col-6 ps-30 my-4">
                                <p class="h5 ">Driver Name</p>
                                <?php
                                $id = $row['id'];
                                $q5 = mysqli_query($con, "select * from dregis where id=$id");
                                while ($row5 = mysqli_fetch_array($q5)) {
                                    echo "<p class='text-muted'>$row5[name]</p>";
                                }
                                ?>
                            </div>
                            <div class="col-md-6 col-6 ps-30 pe-0 my-4">
                                <p class="h5">Pick Up Location</p>
                                <p class="text-muted"><?php echo "$row[pickup_location]"; ?></p>
                            </div>
                            <div class="col-md-6 col-6 ps-30 my-4">
                                <p class="h5 ">Drop Location</p>
                                <p class="text-muted"><?php echo "$row[drop_location]"; ?></p>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="col-lg-5 p-0 ps-lg-4">
                    <div class="row m-0">
                        <div class="col-12 px-4" style="margin-top: 37px;">
                            <div class="d-flex align-items-end mt-4 mb-2">
                                <p class="h4 m-0"><?php echo $row['car_name'] ?></p>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <p class="textmuted"></p>
                                <p class="fs-14 fw-bold"></p>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <p class="textmuted">Price Per Km</p>
                                <p class="fs-14 fw-bold"><span class="fas fa-dollar-sign pe-1"><?php echo "&#8377 $row[price_km]"; ?></span></p>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <p class="textmuted">Total Km</p>
                                <p class="fs-14 fw-bold"><?php echo "$row[total_km]"; ?></p>
                            </div>
                            <!-- <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Promo code</p>
                            <p class="fs-14 fw-bold">-<span class="fas fa-dollar-sign px-1"></span>100</p>
                        </div> -->
                            <div class="d-flex justify-content-between mb-3">
                                <p class="textmuted fw-bold">Total</p>
                                <div class="d-flex align-text-top "> <span class="fas fa-dollar-sign mt-1 pe-1 fs-14 "></span><span class="h4"><?php echo "&#8377 $row[total_price]"; ?></span> </div>
                            </div>
                        </div>
                        <form method="post" action="">
                            <div class="col-12 px-0">
                                <div class="row bg-light m-0">
                                    <div class="col-12 px-4 my-4">
                                        <p class="fw-bold">Payment </p>
                                    </div>
                                    <div class="col-12 px-4">
                                        <div class="d-flex mb-12"> <span class="">
                                                <p class="text-muted">User Name</p>
                                                <!-- <input class="form-control" type="text" value="4485 6888 2359 1498" placeholder="1234 5678 9012 3456"> -->
                                                <input class="form-control" type="textbox" name="name" id="name" value="<?php echo $row['user_name'] ?>" style="width: 365px;" required/><br /><br />

                                            </span>

                                        </div>
                                        <div class="d-flex mb-5" style="margin-top: -25px;"> <span class="me-5">
                                                <p class="text-muted">Amount To Pay</p>
                                                <!-- <input class="form-control" type="text" value="David J.Frias" placeholder="Name"> -->
                                                <input class="form-control" type="textbox" name="amt" id="amt" value="<?php echo $row['total_price'] ?>" style="width: 365px;" readonly /><br /><br />

                                            </span>

                                        </div>
                                    </div>
                                    <!-- <input type="textbox" name="name" id="name" placeholder="Enter your name" /><br /><br /> -->
                                    <!-- <input type="textbox" name="amt" id="amt" placeholder="Enter amt" /><br /><br /> -->
                                    <div class="col-12 ">
                                        <input type="button" name="btn" style="margin-left:80px" id="btn" value="Pay Now" class="btn btn-byr" onclick="pay_now()" />
                                    </div>
                                </div>
                                <div class="row m-0">
                                    <div class="col-12 mb-4 p-0">
                                        <!-- <div class="btn btn-primary">Purchase<span class="fas fa-arrow-right ps-2"></span> </div> -->
                                        <?php
                                        // echo "<a outstation_cancle.php?x=$row[out_booking_id]&y=$row[id]' ><input type='button' name='cancel' id='cancel' value='Cancel Booking' class='btn btn-byr mr-2' style='margin-left: 200px; margin-top: -50px;''></a>";
                                        echo "<p class='d-flex mb-0 d-block'><a href='local_cancel.php?x=$row[kaali_peeli_booking_id]&y=$row[id]' class='btn btn-byr mr-2' style='margin-left: 200px; margin-top: -50px; height: 38px;'>Cancel Booking</a></p>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>