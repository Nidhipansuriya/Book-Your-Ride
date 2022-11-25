<?php

$con = mysqli_connect("localhost", "root", "", "byr");
$bike_booking_id = $_GET['bike_booking_id'];
$bike_id = $_GET['bike_id'];


// $cardetail_id=$_GET['cardetail_id'];
// $q = mysqli_query($con, "select cm.*,cd.*,rcb.* from carmodel cm, cardetail cd, rental_car_booking rcb  where cm.carmodel_id=$carmodel_id and cd.cardetail_id=$cardetail_id and rcb.car_booking_id=$car_booking_id");

$q = mysqli_query($con, "select bm.*,rbb.* from bikemaster bm, rental_bike_booking rbb where bm.bike_id=rbb.bike_id ");
while ($row = mysqli_fetch_array($q))
{
    // if (isset($_POST['return'])) {
    // $car_booking_id = $row['car_booking_id'];
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $user_contact = $row['user_contact'];
    $user_email = $row['user_email'];
    $bike_id = $row['bike_id'];
    // $cardetail_id = $row['cardetail_id'];
    $licenceno = $row['licenceno'];
    // $front_photo = $row['front_photo'];
    // $back_photo = $row['back_photo'];
    $booking_date = $row['booking_date'];
    $pick_date = $row['pick_date'];
    $return_date = $row['return_date'];
    $pick_time = $row['pick_time'];
    $price_day = $row['price_day'];
    $total_day = $row['total_day'];
    $total_amount = $row['total_amount'];
    $q1 = mysqli_query($con, "update rental_bike_booking set return_status=1 where bike_id=$bike_id");
    $q2 = mysqli_query($con, "update bikemaster set status=0 where bike_id=$bike_id");

    $q3 = mysqli_query($con, "insert into rentalbike_history values('',$bike_booking_id,$user_id,'$user_name',$user_contact,'$user_email',$bike_id,'$licenceno','$booking_date','$pick_date','$return_date','$pick_time',$price_day,$total_day,$total_amount)");
    // echo "insert into rentalcar_history values('',$car_booking_id,$user_id,'$user_name',$user_contact,'$user_email',$carmodel_id,$cardetail_id,'$liecense_no','$booking_date','$pick_date','$return_date','$pick_time',$price_day,$total_days,$total_amount)";
    //outstation_car=	car_status
    //outstation_booking = return_status

    if (($q1) && ($q2) && ($q3)) {
        echo "<script>alert('Bike has arrived back from the Ride..');</script>";
        $q4 = mysqli_query($con, "delete from rental_bike_booking where bike_booking_id=$bike_booking_id");
        echo "<script>window.location.assign('rentalbike_booking.php');</script>";
    } else {
        echo "<script>alert('Not Return.....plz try again....');</script>";
    }
}
