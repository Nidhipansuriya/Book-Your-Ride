<?php
$cardetail_id=$_GET["cardetail_id"];
include('connection.php');
$q=mysqli_query($con,"delete from cardetail where cardetail_id=$cardetail_id");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:cardetail.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>