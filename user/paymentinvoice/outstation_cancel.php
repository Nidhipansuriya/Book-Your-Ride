<?php
include('connection.php');
$out_booking_id=$_GET["x"];
$id=$_GET["y"];
$q = mysqli_query($con, "update dregis set available_status=0 where id=$id");
$q1=mysqli_query($con,"delete from outstation_booking where out_booking_id='$out_booking_id'");
if(($q) && ($q1))
{
    echo "<script>alert('Deleted..');</script>";
    header("location:../index.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>
