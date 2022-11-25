<?php
$bikebrand_id=$_GET["bikebrand_id"];
include('connection.php');
$q=mysqli_query($con,"delete from bikebrandmaster where bikebrand_id='$bikebrand_id'");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:bikebrand.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>



