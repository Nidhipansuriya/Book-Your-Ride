<?php
 //$con = mysqli_connect("localhost", "root", "", "byr");
 //error_reporting(0);
 session_start();
 $user_id = $_SESSION['user_id'];
 $kaali_peeli_id = $_GET['a'];
 $price_km = $_GET['b'];
 $p=$_GET['p'];
 if(isset($user_id))
 {
    echo "<script>window.location.href = 'booking_local.php?v=$kaali_peeli_id&w=$price_km&p=$p'</script>";
 }
 else{
    echo "<script>window.location.href = '../login-form-20/login.php'</script>";
 }
 ?>
 