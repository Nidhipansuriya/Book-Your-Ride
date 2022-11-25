<?php
include('connection.php');
$bike_booking_id=$_GET["x"];
$q=mysqli_query($con,"delete from rental_bike_booking where bike_booking_id='$bike_booking_id'");
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
