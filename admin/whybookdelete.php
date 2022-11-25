<?php
$whyid=$_GET["whyid"];
include('connection.php');
$q=mysqli_query($con,"delete from whybook where whyid='$whyid'");
if($q)
{
    echo "<script>alert('Deleted..');</script>";
    header("location:whybook.php");
}
else
{
    echo "<script>arlert('Oops!! There might be something wrong..');</script>";
}
?>



