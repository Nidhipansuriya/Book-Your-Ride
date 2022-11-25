<?php
$brand_id=$_GET["brand_id"];
include('connection.php');
$q=mysqli_query($con,"delete from brandmaster where brand_id='$brand_id'");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:brands.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>