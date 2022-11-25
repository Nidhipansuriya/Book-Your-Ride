<?php
 //$con = mysqli_connect("localhost", "root", "", "byr");
 //error_reporting(0);
 session_start();
 $user_id = $_SESSION['user_id'];
 $bike_id = $_GET['x'];
 $price_day = $_GET['y'];
 $p = $_GET['p'];
 $q = $_GET['q'];

 if(isset($user_id))
 {
    echo "<script>window.location.href = 'rental_bike_booking.php?m=$bike_id&n=$price_day&p=$p&q=$q'</script>";
 }
 else{
    echo "<script>window.location.href = '../login-form-20/login.php'</script>";
}
?>
 