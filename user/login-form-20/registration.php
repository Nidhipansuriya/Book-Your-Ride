<!doctype html>
<html lang="en">

<head>
    <title>Book Your Ride User Log IN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    <script>
        // function chk() {
        //     var a = document.getElementById("password").value;
        //     var b = document.getElementById("conpassword").value;
        //     if (a != b)
        //         alert('password does not match');
        // }



        //     function chk1()
        //   { 
        //       var a=document.getElementById("user_name").value;
        //   var letters = /^[A-Za-z]+$/;
        //   if(a.value.match(!letters))
        //   {
        //   alert('Your name have accepted : you can try another');
        //   return true;
        //   }
        //   else
        //   {
        //   alert('Please input alphabet characters only');
        //   return false;
        //   }
        //   }

        //   function chk2() {
        //         var a = document.getElementById("contact").value;
        //         if (a.lenth!= 10)
        //             alert('Enter Valid Contact');
        //     }

        function vali() {

            // var no=frm.txtno.value;201.3
            var user_name = form1.user_name.value;
            var letters = /^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/;
            // var code=frm.txtcode.value;
            var contact = form1.contact.value;
            // if (no=='' || isNaN(no))
            // alert("enter valid emp no");
            if (user_name == "" || !letters.test(user_name)) {

                alert("Enter Valid User Name");

                return false;
            }
            // if(code=='''' | | code.length! =6 | | isNaN(code))
            // alert("entre valid zipcode digits." );
            if (contact = '' || contact.length != 10 || isNaN(contact)) {
                alert("Contact Number should be in 10 digits!");
                return false;
            }

            var a = document.getElementById("password").value;
            var b = document.getElementById("conpassword").value;
            if (a != b) {
                alert('password does not match');
                return false;
            }
        }

        function clickEyeButton(type) {
            if (type === "password") {
                const ele = document.getElementById("password");

                if (ele.type === "password") ele.type = "text";
                else ele.type = "password"
            } else {
                const ele = document.getElementById("conpassword");

                if (ele.type === "password") ele.type = "text";
                else ele.type = "password";
            }
        }
    </script>

</head>


<body class="img js-fullheight" style="background-image: url(images/car.jpg);">

    <?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "byr");
    error_reporting(0);
    if (isset($_POST['register'])) {

        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $conpassword = $_POST['conpassword'];
        $otp = rand(999, 9999);
        $status = $_POST['status'];

        $to = $_POST['email'];
        $_SESSION['email'] = $email;
        $subject = "Test mail";
        // $message = "<p>Your verification code is: ' . $otp . '</b></p>'";
        $message = "Heloooo Ridersss!!

Below is your one time passcode: Do not share it with anyone .
        
$otp
        
Use the above verification code. If you are having any issues with your account. Please don't hesitate to contact us by replying to this email.
        
Regards ,
Team Book Your Ride'";
        $from = "bookyourrideanh@gmail.com";
        $headers = "From : $from";


        $q2 = mysqli_query($con, "select * from uregis where email='$email' ");
        $cnt  = mysqli_num_rows($q2);

        if ($cnt > 0) 
        {
            echo "<script>alert('Your email id is already registered ');</script>";
        } 
        else 
        {

            $q = mysqli_query($con, "insert into uregis values('','$user_name','$email','$contact','$gender','$password','$otp','0')");
            // echo "insert into uregis values('','$user_name','$email','$contact','$gender','$password','$otp','0')";
            if ($q) {
                (mail($to, $subject, $message, $headers));
                echo "<script>alert('Please check your mail for OTP.');</script>";
                echo "<script>window.location.assign('otp.php')</script>";
            } else {
                echo "<script>alert('Your mail has not send successfully!');</script>";
            }
        }
    }
    ?>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">REGISTRATION FORM</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <!-- <h3 class="mb-4 text-center">Have an account?</h3> -->
                        <form method="POST" onsubmit="return vali()" enctype="multipart/form-data" name="form1" class="signin-form">
                            <div class="form-group">
                                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail ID" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="contact" id="contact" class="form-control" placeholder="Contact No" required>
                            </div>
                            <div class="form-group">
                                <!-- <input type="text" name="gender" id="gender" class="form-control" placeholder="Gender" required> -->
                                <div>
                                    <label class="col-sm-4 col-form-label">Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                    &nbsp; &nbsp;
                                    <input type="radio" name="gender" value="male" id="gender" required style="margin-left: -14px;">Male
                                    &nbsp; &nbsp;
                                    <input type="radio" name="gender" value="female" id="gender" required> Female
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="clickEyeButton('password')"></span>
                            </div>
                            <div class="form-group">
                                <input id="conpassword" type="password" name="conpassword" class="form-control" placeholder="Re-Enter Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="clickEyeButton('confirmPassword')"></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="register" class="form-control btn btn-primary submit px-3">Register</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Already Have An Account? &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="login.php" class="px-2 py-2 mr-md-1 rounded"></span> Log In Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>