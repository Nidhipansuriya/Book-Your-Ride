<?php
include("hhh.php");
?>

            <style>
                .hero-header {
                    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/map.jpeg);
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
            </style>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="container-xxl bg-dark hero-header">
                            <div class="container text-center ">


                                <!-- Contact Start -->
                                <?php
                                include('connection.php');
                                $con = mysqli_connect("localhost", "root", "", "byr");
                                error_reporting(0);
                                if (isset($_POST['submit'])) {

                                    $user_name = $_POST['user_name'];
                                    $user_email = $_POST['user_email'];
                                    $message = $_POST['message'];


                                    $q = mysqli_query($con, "insert into usercontact values('','$user_name','$user_email','$message')");
                                    // echo "insert into uregis values('','$user_name','$email','$password')";
                                    if ($q) {
                                        echo "<script>alert('Data entered successfully!!');</script>";
                                    } else {
                                        echo "<script>alert('Oops!! There might be something wrong.');</script>";
                                    }
                                }
                                ?>

                                <div class="container-xxl py-5">
                                    <div class="container">
                                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Reach Us</h5>
                                            <br>
                                            <br>

                                            <!-- <h1 class="mb-5">Contact For Any Query</h1> -->
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="row gy-4">
                                                    <!-- <div class="col-md-4">
                                                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">Booking</h5>
                                                        <p><i class="fa fa-envelope-open text-primary me-2"></i>bookyourrideanh@gmail.com</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">General</h5>
                                                        <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">Technical</h5>
                                                        <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                                                <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                <!-- <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/place/Surat,+Gujarat,+India/@21.1591857,72.7520843,12z/data=!3m1!4b1!4m5!3m4!1s0x3be04e59411d1563:0xfe4558290938b042!8m2!3d21.1702401!4d72.8310607?hl=en" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="wow fadeInUp" data-wow-delay="0.2s">
                                                    <form class="forms-sample" name="contactus" method="POST" enctype="multipart/form-data">
                                                        <div class="row g-3">
                                                            <!-- <form class="forms-sample" name="contactus" method="POST" enctype="multipart/form-data"> -->
                                                            <div class="col-md-6">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Your Name" required>
                                                                    <label for="name">Your Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating">
                                                                    <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Your Email" required>
                                                                    <label for="email">Your Email</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 150px" required></textarea>
                                                                    <label for="message">Message</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Send Message</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <!-- <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5> -->
                        <h1 class="mb-5">Contact For Any Query</h1>
                    </div>
                    <div class="row g-4" style="margin-left: 200px;">
                        <div class="col-12">
                            <div class="row gy-4">
                                <div class="col-md-4">
                                    <h5 class="section-title ff-secondary fw-normal text-start text-primary">Booking</h5>
                                    <p><i class="fa fa-envelope-open text-primary me-2"></i>bookyourrideanh@gmail.com</p>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="section-title ff-secondary fw-normal text-start text-primary">General</h5>
                                    <p><i class="fa fa-envelope-open text-primary me-2"></i>bookyourride@gmail.com</p>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="section-title ff-secondary fw-normal text-start text-primary">Technical</h5>
                                    <p><i class="fa fa-envelope-open text-primary me-2"></i>bookyouridetech@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact End -->
        <?php
        include("fff.php");
        ?>