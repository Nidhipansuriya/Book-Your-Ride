<?php
$carmodel_id=$_GET["carmodel_id"];
include('connection.php');
$q=mysqli_query($con,"delete from carmodel where carmodel_id=$carmodel_id");
echo "delete from carmodel where carmodel_id=$carmodel_id";
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:carmodel.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>