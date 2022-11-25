<?php
$outstat_car_id=$_GET["outstat_car_id"];
include('connection.php');
$q=mysqli_query($con,"delete from outstation_car where outstat_car_id='$outstat_car_id'");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:outstation_car.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>