<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Drive registration</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-119386393-1');
    </script>
    <script>
        function chk() {
            var a = document.getElementById("password").value;
            var b = document.getElementById("conpassword").value;
            if (a != b)
                alert('password does not match');
        }

        function chk2() {
            var n = document.myform.name.value;
            // if (n.search(/^[a-zA-Z]+$/) === -1) {
            if (n.search(/^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/) === -1) {
                alert("Only alphabets are allowed in Username!")
                // document.getElementById("name").innerHTML = "* Name is required";
                return false;
            }
        }

        function chk3() {
            var e = document.myform.email.value;
            if (e.search(/^\S+@\S+\.\S+$/) === -1) {
                alert("Email id is invalid!")
                // document.getElementById("email").innerHTML = "* Email Id is required";
                return false;
            }
        }

        function chk4() {
            var c = document.myform.contact.value;
            if (c.length < 10) {
                alert("Mobile number must be 10 digits!");
                // document.getElementById("contact").innerHTML = "* Mobile no must be 10 digits";
                return false;
            }
            if (c.length > 10) {
                alert("Mobile number must be 10 digits!");
                // document.getElementById("contact").innerHTML = "* Mobile no must be 10 digits";
                return false;
            }
        }

        function chk5() {
            var pass = document.myform.password.value;
            if (pass.length < 3) {
                alert("Password length must be greater than 3 characters!");
                // document.getElementById("password").innerHTML = "* Password length must be greater then 3 characters";
                return false;
            }

            if (pass.length > 10) {
                alert("Password length must be smaller then 10 characters!")
                // document.getElementById("password").innerHTML = "* Password length must be smaller then 10 characters";
                return false;
            }
        }

        function chk6() {
            var addressProofImage = document.getElementById("addressproofimg").files.item(0).name;
            if (addressProofImage.search(/(\.jpg|\.jpeg|\.png|\.gif|\.jfif)$/i) === -1) {
                alert("Address proof image should be jpg, jpeg, png, gif or jfif!")
                return false;
            }
        }

        function chk7() {
            var licenceImage = document.getElementById("licenceimg").files.item(0).name;
            if (licenceImage.search(/(\.jpg|\.jpeg|\.png|\.gif|\.jfif)$/i) === -1) {
                alert("Licence image should be jpg, jpeg, png, gif or jfif!")
                return false;
            }
        }

        function chk8() {
            var aadharCardImgName = document.getElementById("adharcardimg").files.item(0).name;
            if (aadharCardImgName.search(/(\.jpg|\.jpeg|\.png|\.gif|\.jfif)$/i) === -1) {
                alert("Aadhar card image should be jpg, jpeg, png, gif or jfif!")
                return false;
            }
        }

        function chk9() {
            var photo = document.getElementById("photo").files.item(0).name;
            if (photo.search(/(\.jpg|\.jpeg|\.png|\.gif|\.jfif)$/i) === -1) {
                alert("Photo image should be jpg, jpeg, png, gif or jfif!")
                return false;
            }
        }

        function chk10() {
            var ac = document.myform.adharcardno.value;
            if (ac.length < 12) {
                alert("Aadhar card number must be 12 digits!")
                // document.getElementById("adharcardno").innerHTML = "* Adhdharcard no must be 10 digits";
                return false;
            }
            if (ac.length > 12) {
                alert("Aadhar card number must be 12 digits! ")
                // document.getElementById("adharcardno").innerHTML = "* Mobile no must be 10 digits";
                return false;
            }
        }

        function chk11() {
            var a = new Date(document.getElementById('licenceexp').value);
            //var d = document.getElementById('booking_date').value;
            var d = new Date().getTime();

            if (a < d)
                alert('Please select your date more than current date!');
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

<body class="login-page">
    <?php

    $con = mysqli_connect("localhost", "root", "", "byr");
    error_reporting(0);
    if (isset($_POST['register'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $contact = $_POST['contact'];
        $adharcardno = $_POST['adharcardno'];

        // $adharcardimg = $_POST['adharcardimg'];
        $adharcardimg = $_FILES["adharcardimg"]["name"];
        $file_temp1 = $_FILES["adharcardimg"]["tmp_name"];

        $licenceno = $_POST['licenceno'];

        // $licenceimg = $_POST['licenceimg'];
        $licenceimg = $_FILES["licenceimg"]["name"];
        $file_temp2 = $_FILES["licenceimg"]["tmp_name"];

        $licenceexp = $_POST['licenceexp'];

        $addressproof = $_POST['addressproof'];

        //$addressproofimg = $_POST['addressproofimg'];
        $addressproofimg = $_FILES["addressproofimg"]["name"];
        $file_temp3 = $_FILES["addressproofimg"]["tmp_name"];

        $experience = $_POST['experience'];

        // $photo = $_POST['photo'];
        $photo = $_FILES["photo"]["name"];
        $file_temp4 = $_FILES["photo"]["tmp_name"];

        $password = $_POST['password'];
        $conpassword = $_POST['conpassword'];
        $area = $_POST['area'];
        $status = $_POST['status'];
        $available_status = $_POST['available_status'];
        // $file_name = $_FILES["photo"]["name"];
        //$file_temp = $_FILES["photo"]["tmp_name"];

        $q2 = mysqli_query($con, "select * from dregis where email='$email' ");
        $cnt  = mysqli_num_rows($q2);

        if ($cnt > 0) {
            echo "<script>alert('Your email id is already registered ');</script>";
        } 
        else 
        { 
            $q = mysqli_query($con, "insert into dregis values('','$name','$email','$gender','$address','$city','$state','$contact','$adharcardno','$adharcardimg','$licenceno','$licenceimg','$licenceexp','$addressproof','$addressproofimg','$experience','$photo','$password','',0,0)");
            // echo "insert into dregis values('','$name','$email','$gender','$address','$city','$state','$contact','$adharcardno','$adharcardimg','$licenceno','$licenceimg','$licenceexp','$addressproof','$addressproofimg','$experience','$photo','$password','',0,0)";

            if ($q) {
                move_uploaded_file($file_temp1, "images/" . $adharcardimg);
                move_uploaded_file($file_temp2, "images/" . $licenceimg);
                move_uploaded_file($file_temp3, "images/" . $addressproofimg);
                move_uploaded_file($file_temp4, "images/" . $photo);
                echo "<script>alert('You are Scuccessully Registered');</script>";
                header("location:index.php");
            } else {
                echo "<script>alert('There might be something wrong..!Please fill up your details or try again later.');</script>";
            }
        }
    }
    ?>
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="index.php">
                    <img src="vendors/images/deskapp-logo.svg" alt="">
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="index.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="vendors/images/register-page-img.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="register-box bg-white box-shadow border-radius-10">
                        <div class="wizard-content">
                            <form class="tab-wizard2 wizard-circle wizard" method="POST" enctype="multipart/form-data" name="myform">
                                <h5>Basic Account Credentials</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Username*</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Username" onchange="chk2()" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Email Address*</label>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail Address" onchange="chk3()" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Contact*</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="contact" id="contact" class="form-control" placeholder="Contact no" onchange="chk4()" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Password*</label>
                                            <div class="col-sm-7" style="margin-right: -30px;">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" style="width: 230px;" onchange="chk5()" required>
                                            </div>
                                            <div class="col-sm-1">
                                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="margin-top: 14px;" onclick="clickEyeButton('password')"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Confirm Password*</label>
                                            <div class="col-sm-7" style="margin-right: -30px;">
                                                <input type="password" name="conpassword" id="conpassword" placeholder="Confirm Password" class="form-control" style="width: 230px;" onchange="chk()" required>
                                            </div>
                                            <div class="col-sm-1">
                                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="margin-top: 14px;" onclick="clickEyeButton('confirmPassword')"></span>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 2 -->
                                <h5>Personal Information</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Address*</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="address" class="form-control" placeholder="Enter Your Address" required>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-4 col-form-label">Gender*</label>
                                            <!-- <div class="col-sm-8">
                                                <div class="custom-control custom-radio custom-control-inline pb-0">
                                                    <input type="radio" name="gender" class="custom-control-input">
                                                    <label class="custom-control-label" for="male">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline pb-0">
                                                    <input type="radio" name="gender" value="female" class="custom-control-input">
                                                    <label class="custom-control-label" for="female">Female</label>
                                                </div>
                                            </div> -->
                                            <div>
                                                &nbsp; &nbsp;
                                                <input type="radio" name="gender" value="male" id="gender" required>Male
                                                &nbsp; &nbsp;
                                                <input type="radio" name="gender" value="female" id="gender" required> Female
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Experience</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="experience" name="experience" class="form-control" placeholder="Write Your Experience" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">City</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="city" name="city" class="form-control" placeholder="Your city" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">State</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="state" id="state" class="form-control" placeholder="Your State" required>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 3 -->
                                <h5>Proof</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Address Proof</label>
                                            <div class="col-sm-8">
                                                <select class="form-control selectpicker" name="addressproof" title="Select Address Proof" color=black required>
                                                    <option value="Electricity Bill">Electricity Bill</option>
                                                    <option value="Gas Bill">Gas Bill</option>
                                                    <option value="Property Tax">Property Tax</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-4 col-form-label">Proof Image</Address></label>
                                            <div class="col-sm-8">
                                                <input type="file" name="addressproofimg" id="addressproofimg" class="form-control" onchange="chk6()" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Licence No</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="licenceno" id="licenceno" class="form-control" placeholder="Licence No" required>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-4 col-form-label">Licence Image</Address></label>
                                            <div class="col-sm-8">
                                                <input type="file" name="licenceimg" id="licenceimg" class="form-control" onchange="chk7()" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Expiration Date</label>
                                            <div class="col-sm-8">
                                                <!-- <div class="row">
                                                    <div class="col-8"> -->
                                                <input type="date" name="licenceexp" id="licenceexp" class="form-control" onchange="chk11()" required>
                                                <!-- </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Step 4 -->
                                <h5>Identity</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Aadharcard No</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="adharcardno" id="adharcardno" class="form-control" placeholder="Aadharcard No" onchange="chk10()" required>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-4 col-form-label">Aadharcard Image</Address></label>
                                            <div class="col-sm-8">
                                                <input type="file" name="adharcardimg" class="form-control" id="adharcardimg" onchange="chk8()" required>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Status</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="status" class="form-control">
                                            </div>
                                        </div> -->
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-4 col-form-label">Photo</Address></label>
                                            <div class="col-sm-8">
                                                <input type="file" name="photo" id="photo" class="form-control" onchange="chk9()" required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="custom-control custom-checkbox mt-4">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1">I have submitted my require details</label>
                                    </div>
                        </div>
                        </section>
                        <button type="submit" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static" name="register">Launch modal</button>

                        <!-- <button type="submit" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static" name="register">Launch modal</button> -->
                        <!-- <input type="submit" id="success-modal-btn" hidden data-toggle="modal" name="register">Submit</input> -->
                        <!-- <button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static" name="register">Launch modal</button> -->
                        <!-- <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-center font-18">
                                        <h3 class="mb-20">Submitted!</h3>
                                        <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
                                        Your registration has been successfull!!
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <a href="index.php" class="btn btn-primary">Done</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- success Popup html Start -->

    <!-- success Popup html End -->
    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="vendors/scripts/steps-setting.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>