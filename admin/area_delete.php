<?php
$area_id=$_GET["area_id"];
include('connection.php');
$q=mysqli_query($con,"delete from area_master where area_id=$area_id");
if($q)
{
    echo "<script>alert('Area has been Removed.');</script>";
    header("location:area.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>