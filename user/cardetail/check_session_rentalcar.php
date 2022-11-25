<?php
 //$con = mysqli_connect("localhost", "root", "", "byr");
 //error_reporting(0);
 session_start();
 $user_id = $_SESSION['user_id'];
 $cardetail_id = $_GET['x'];
 $carmodel_id = $_GET['y'];
 $price_day = $_GET['z'];
 $p = $_GET['p'];
 $q = $_GET['q'];
// echo "$user_id  . nidhhi";
// echo "$cardetail_id . nidhhi";
// echo "$carmodel_id  . nidhhi";
// echo "$price_day  . nidhhi ";



 if(isset($user_id))
 {
    echo "<script>window.location.href = 'rental_car_booking.php?m=$cardetail_id&n=$carmodel_id&o=$price_day&p=$p&q=$q'</script>";
 }
 else{
    echo "<script>window.location.href = '../login-form-20/login.php'</script>";
}
?>
 