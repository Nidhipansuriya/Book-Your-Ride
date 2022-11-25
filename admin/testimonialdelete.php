<?php
$reviewid=$_GET["reviewid"];
include('connection.php');
$q=mysqli_query($con,"delete from testimonial where reviewid='$reviewid'");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:testimonial.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>