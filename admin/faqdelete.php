<?php
$id=$_GET['id'];
include('connection.php');
$q=mysqli_query($con,"delete from faq where id=$id");
if($q)
    header('location:faq.php');
else
    echo "Oops!! There might be something wrong..";
?>