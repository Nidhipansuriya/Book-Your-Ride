<?php
include('connection.php');
$car_booking_id=$_GET["x"];
$q=mysqli_query($con,"delete from rental_car_booking where car_booking_id='$car_booking_id'");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:../index.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>
