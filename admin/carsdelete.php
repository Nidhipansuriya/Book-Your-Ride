<?php
$car_id=$_GET["car_id"];
include('connection.php');
$q=mysqli_query($con,"delete from carmaster where car_id=$car_id");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:cars.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>