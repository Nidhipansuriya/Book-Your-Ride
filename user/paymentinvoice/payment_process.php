<?php
session_start();
include('db.php');
if(isset($_POST['amt']) && isset($_POST['name'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into payment(name,amount,payment_status,added_on) values('$name','$amt','$payment_status','$added_on')");
    $_SESSION['OID']=mysqli_insert_id($con);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");

    $to = $_SESSION['email'];
    $subject = "booking mail";
    $message = "Hello Riderss!!!

    Thank you for trusting us . Your payment has successfully arrived to book your ride . Feel free to ride with us with your next ride.
    
    Regardss,
    Team Book Your Ride";
    $from = "bookyourrideanh@gmail.com";
    $headers = "From : $from";


     if (mail($to, $subject, $message, $headers)) {



        // echo "<script>alert('confirmed......');</script>";
        echo "<script>window.location.assign('home.php');</script>";
    } else {
        echo "<script>alert('Sorry there might be something wrong please try again.');</script>";
    }
}

?>