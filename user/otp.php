<?php
 $con = mysqli_connect("localhost", "root", "", "byr");
 //error_reporting(0);
 session_start();
 if(isset($_POST['verify_email']))
 {
 $otp = $_POST["otp"];
 $email=$_SESSION['email'];
 //echo $email;
 $q=mysqli_query($con,"select * from uregis where email='$email'");

 $row=mysqli_fetch_array($q);
 $otp=$row['otp'];  //old
 $otp1 = $_POST["otp"];   //new
 if($otp==$otp1)
 {
      $q="update uregis set status=1 where email='$email' and otp ='$otp' ";
      
        if ($q)
        {
            echo "Verification code ";
            header("location:login.php");
        }
        else
        {
            echo "not";
        }
 
        echo "<p>You can login now.</p>";
        // exit();
    }
}
?>


<form method="POST">
    
    <input type="text" name="otp" placeholder="Enter verification code" required />
 
    <input type="submit" name="verify_email" value="Verify Email">
</form>