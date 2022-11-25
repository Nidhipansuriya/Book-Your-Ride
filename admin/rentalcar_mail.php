<?php

$con = mysqli_connect("localhost", "root", "", "byr");
$car_booking_id = $_GET['car_booking_id'];
$carmodel_id = $_GET['carmodel_id'];
$cardetail_id = $_GET['cardetail_id'];

// $q = mysqli_query($con, "select cm.*,cd.*,rcb.* from carmodel cm, cardetail cd, rental_car_booking rcb  where cm.carmodel_id=$carmodel_id and cd.cardetail_id=$cardetail_id and rcb.car_booking_id=$car_booking_id");
$q = mysqli_query($con, "select cm.*,cd.*,rcb.* from carmodel cm, cardetail cd, rental_car_booking rcb  where cm.carmodel_id=rcb.carmodel_id and cd.cardetail_id=rcb.cardetail_id");

while ($row = mysqli_fetch_array($q)) {

    // if (isset($_POST['return'])) {

    // $car_booking_id = $row['car_booking_id'];
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $user_contact = $row['user_contact'];
    $user_email = $row['user_email'];
    $carmodel_id = $row['carmodel_id'];
    $cardetail_id = $row['cardetail_id'];
    $liecense_no = $row['liecense_no'];
    // $front_photo = $row['front_photo'];
    // $back_photo = $row['back_photo'];
    $booking_date = $row['booking_date'];
    $pick_date = $row['pick_date'];
    $return_date = $row['return_date'];
    $pick_time = $row['pick_time'];
    $price_day = $row['price_day'];
    $total_days = $row['total_days'];
    $total_amount = $row['total_amount'];
    $q4 = mysqli_query($con, "update rental_car_booking set return_status=1 where carmodel_id=$carmodel_id");
    $q1 = mysqli_query($con, "update cardetail set 	status=0 where cardetail_id=$cardetail_id");
    $q2 = mysqli_query($con, "update carmodel set status=0 where carmodel_id=$carmodel_id ");

    $q3 = mysqli_query($con, "insert into rentalcar_history values('',$car_booking_id,$user_id,'$user_name',$user_contact,'$user_email',$carmodel_id,$cardetail_id,'$liecense_no','$booking_date','$pick_date','$return_date','$pick_time',$price_day,$total_days,$total_amount)");
    // echo "insert into rentalcar_history values('',$car_booking_id,$user_id,'$user_name',$user_contact,'$user_email',$carmodel_id,$cardetail_id,'$liecense_no','$booking_date','$pick_date','$return_date','$pick_time',$price_day,$total_days,$total_amount)";
    //outstation_car=	car_status
    //outstation_booking = return_status

    if (($q4) && ($q1) && ($q2) && ($q3)) {
        echo "<script>alert('Car has arrived back from the Ride..');</script>";
        $q5 = mysqli_query($con, "delete from rental_car_booking where car_booking_id=$car_booking_id");
        echo "<script>window.location.assign('rentalcar_booking.php');</script>";
    } else {
        echo "<script>alert('Not Return.....plz try again....');</script>";
    }
}
