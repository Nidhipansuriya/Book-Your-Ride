<?php
$bike_id=$_GET["bike_id"];
include('connection.php');
$q=mysqli_query($con,"delete from bikemaster where bike_id=$bike_id");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:bike.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>