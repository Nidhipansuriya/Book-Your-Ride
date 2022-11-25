<?php
$kaali_peeli_id=$_GET["kaali_peeli_id"];
include('connection.php');
$q=mysqli_query($con,"delete from kaali_peeli where kaali_peeli_id='$kaali_peeli_id'");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:kaali_peeli.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>