<?php
//   session_start();
    $con = mysqli_connect("localhost", "root","", "byr");
    // error_reporting(0);
    if(isset($_POST['login'])) 
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $q = mysqli_query($con,"select * from uregis where email='$email' and password='$password'");
        $row=mysqli_fetch_array($q);
        $cnt  = mysqli_num_rows($q);

        if ($cnt>0) 
        {
        //   $_SESSION['aname']=$row[1];
        //   $_SESSION['photo']=$row['photo'];
            echo "<script>alert('Welcome to Book Your Ride');</script>";
            header("location:../home.php");
        } else {
            echo "<script>alert('There might be something wrong..Please try again.');</script>";
        }
    }
    ?>




<form method="POST">
    <!-- <input type="text" name="user_name" placeholder="Enter name" required /> -->
    <input type="email" name="email" placeholder="Enter email" required />
    <!-- <input type="text" name="contact" placeholder="Enter contact" required /> -->
    <input type="password" name="password" placeholder="Enter password" required />

 
    <input type="submit" name="register" value="login">
</form>