<?php
$city_id=$_GET["city_id"];
include('connection.php');
$q=mysqli_query($con,"delete from city_master where city_id=$city_id");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:city.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>