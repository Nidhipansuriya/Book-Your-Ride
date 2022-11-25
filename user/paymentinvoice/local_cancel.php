<?php
include('connection.php');
$kaali_peeli_booking_id=$_GET["x"];
$id=$_GET["y"];
$q = mysqli_query($con, "update dregis set available_status=0 where id=$id");
$q1=mysqli_query($con,"delete from kaali_peeli_booking where kaali_peeli_booking_id='$kaali_peeli_booking_id'");
if(($q) && ($q1))
{
    echo "<script>alert('Your Ride has been Cancelled!');</script>";
    header("location:../index.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>
