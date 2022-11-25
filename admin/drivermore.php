<?php
include("hhh.php");
?>

<style>
    body {
        background: black;
        margin-top: 20px;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: .25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
    }

    .me-2 {
        margin-right: .5rem !important;
    }





    /* for photos */

    body {
        margin-top: 20px;
        background: #eee;
    }

    .single_advisor_profile {
        position: relative;
        margin-bottom: 50px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        z-index: 1;
        border-radius: 15px;
        -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
        box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
    }

    .single_advisor_profile .advisor_thumb {
        position: relative;
        z-index: 1;
        border-radius: 15px 15px 0 0;
        margin: 0 auto;
        padding: 30px 30px 0 30px;
        background-color: #3f43fd;
        overflow: hidden;
    }

    .single_advisor_profile .advisor_thumb::after {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        position: absolute;
        width: 150%;
        height: 80px;
        bottom: -45px;
        left: -25%;
        content: "";
        background-color: #ffffff;
        -webkit-transform: rotate(-15deg);
        transform: rotate(-15deg);
    }

    @media only screen and (max-width: 575px) {
        .single_advisor_profile .advisor_thumb::after {
            height: 160px;
            bottom: -90px;
        }
    }

    .single_advisor_profile .advisor_thumb .social-info {
        position: absolute;
        z-index: 1;
        width: 100%;
        bottom: 0;
        right: 30px;
        text-align: right;
    }

    .single_advisor_profile .advisor_thumb .social-info a {
        font-size: 14px;
        color: #020710;
        padding: 0 5px;
    }

    .single_advisor_profile .advisor_thumb .social-info a:hover,
    .single_advisor_profile .advisor_thumb .social-info a:focus {
        color: #3f43fd;
    }

    .single_advisor_profile .advisor_thumb .social-info a:last-child {
        padding-right: 0;
    }

    .single_advisor_profile .single_advisor_details_info {
        position: relative;
        z-index: 1;
        padding: 30px;
        text-align: right;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        border-radius: 0 0 15px 15px;
        background-color: #ffffff;
    }

    .single_advisor_profile .single_advisor_details_info::after {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        position: absolute;
        z-index: 1;
        width: 50px;
        height: 3px;
        background-color: #3f43fd;
        content: "";
        top: 12px;
        right: 30px;
    }

    .single_advisor_profile .single_advisor_details_info h6 {
        margin-bottom: 0.25rem;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single_advisor_profile .single_advisor_details_info h6 {
            font-size: 14px;
        }
    }

    .single_advisor_profile .single_advisor_details_info p {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        margin-bottom: 0;
        font-size: 14px;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single_advisor_profile .single_advisor_details_info p {
            font-size: 12px;
        }
    }

    .single_advisor_profile:hover .advisor_thumb::after,
    .single_advisor_profile:focus .advisor_thumb::after {
        background-color: #070a57;
    }

    .single_advisor_profile:hover .advisor_thumb .social-info a,
    .single_advisor_profile:focus .advisor_thumb .social-info a {
        color: #ffffff;
    }

    .single_advisor_profile:hover .advisor_thumb .social-info a:hover,
    .single_advisor_profile:hover .advisor_thumb .social-info a:focus,
    .single_advisor_profile:focus .advisor_thumb .social-info a:hover,
    .single_advisor_profile:focus .advisor_thumb .social-info a:focus {
        color: #ffffff;
    }

    .single_advisor_profile:hover .single_advisor_details_info,
    .single_advisor_profile:focus .single_advisor_details_info {
        background-color: #070a57;
    }

    .single_advisor_profile:hover .single_advisor_details_info::after,
    .single_advisor_profile:focus .single_advisor_details_info::after {
        background-color: #ffffff;
    }

    .single_advisor_profile:hover .single_advisor_details_info h6,
    .single_advisor_profile:focus .single_advisor_details_info h6 {
        color: #ffffff;
    }

    .single_advisor_profile:hover .single_advisor_details_info p,
    .single_advisor_profile:focus .single_advisor_details_info p {
        color: #ffffff;


    }

    .modal-content
    {
        width: 604px;

    }
</style>
<?php
include('connection.php');
$id = $_GET['m'];
$q = mysqli_query($con, "select * from dregis where id=$id");
while ($row = mysqli_fetch_array($q)) {
?>

<?php
include('connection.php');

$drivername=$row['name'];

if (isset($_POST['confirm'])) {

    $to = $row['email'];
    $subject = "Confirmation mail";
    $message = "Dear $drivername,

    Thankyou for sparing your time to speak with us and sharing your experience and qualities , we are glad to announce that you have been consider to be a part of Book Your Ride community . You can accept the offer by clicking on http://localhost/bookyourride/driver/ to login by entering your email and password you entered during registration time . Book Your Ride is looking forward to work with you!!!
    
    Regards,
    Team Book Your Ride";
    $from = "bookyourrideanh@gmail.com";
    $headers = "From : $from";

    $q = mysqli_query($con, "update dregis set status=1 where id=$id");
    if (mail($to, $subject, $message, $headers) && ($q)) {
        echo "<script>alert('Driver Confirmed Successfully!');</script>";
        echo "<script>window.location.assign('managedriver.php')</script>";
    } else {
        echo "<script>alert('Your Changes are Not Upgraded.');</script>";
    }
}
?>


<?PHP
include('connection.php');

$drivername=$row['name'];

if (isset($_POST['reject'])) {
    // $email=$_POST['email'];
    $to = $row['email'];
    // $to = "sanidhyakanani222@gmail.com";
    $subject = "Rejection mail";
    $message = "Dear $drivername,

    Thank you for sparing your time to speak with us and sharing your experience and qualitiess , but we are sorry to inform you that we  are not considering you as a driver as we have look up to make more candidates which matches our requirements in a better way!!!
    We will surely contact you in future when your experience will fill our requirement.
    Regards,
    Team Book Your Ride";
    $from = "bookyourrideanh@gmail.com";
    $headers = "From : $from";

    $q = mysqli_query($con, "update dregis set status=0 where id=$id");
    if (mail($to, $subject, $message, $headers) && ($q)) {
        echo "Driver Rejected successfully!";
        echo "<script>window.location.assign('managedriver.php')</script>";
    } else {
        echo "Your mail has not send successfully!";
    }
}
?>

    <form class="forms-sample" name="drivermore" method="POST">
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <?php
                                    if ($row['gender'] == 'male')

                                        echo "<img src='images/maledriver.jpg' alt='Admin' style='margin: top 10px;'; class='rounded-circle p-1 bg-warning' width='110'>";
                                    else
                                        echo "<img src='images/femaledriver.jpg' alt='Admin' class='rounded-circle p-1 bg-warning' width='110'>";
                                    ?>
                                    <div class="mt-3">
                                        <h3><?php echo $row['name']; ?></h3>
                                        <!-- <p class="text-secondary mb-1"><?php echo $row['name']; ?></p> -->
                                        <p class="text-muted font-size-sm"><?php echo $row['contact']; ?></p>
                                        <p class="text-muted font-size-sm"><?php echo $row['email']; ?></p>
                                        <p class="text-muted font-size-sm"><?php echo $row['address']; ?></p>
                                        <!-- <button class="btn btn-primary">Follow</button> -->
                                        <input type="submit" name="confirm" id="confirm" value="Confirm" class="btn btn-warning mr-2">
                                        <input type="submit" name="reject" id="reject" value="reject" class="btn btn-outline-warning mr-2">
                                        <!-- <button class="btn btn-outline-warning mr-2">Reject</button> -->

                                    </div>
                                </div>
                                <hr class="my-4">

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Gender</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" style="color: #000000;" name="name" value="<?php echo $row['gender']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Experience</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" style="color: #000000;" value="<?php echo $row['experience']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">City</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" style="color: #000000;" value="<?php echo $row['city']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">State</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" style="color: #000000;" value="<?php echo $row['state']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address Proof</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" style="color: #000000;" value="<?php echo $row['addressproof']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Licence Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" style="color: #000000;" value="<?php echo $row['licenceno']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Expiration Date</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" style="color: #000000;" value="<?php echo $row['licenceexp']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Aadharcard Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" style="color: #000000;" value="<?php echo $row['adharcardno']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <div align=center>
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Aadharcard Photo</h4>
                                <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                                    <div class="item" style="margin-left: -10px;">
                                        <?php echo " <img src='../driver/images/$row[adharcardimg]' height=250 width=200/>"; ?>
                                        <br>
                                        <br>
                                        <a href="modal" data-toggle="modal" data-target="#modal"><i class="mdi mdi-arrow-expand-all text-warning"></i></a>
                                        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content" style="width: 625px ;" >
                                                    <div class="modal-body pd-5" >
                                                        <div class="img-container" >
                                                            <?php echo " <img src='../driver/images/$row[adharcardimg]' height=450 width=600/>"; ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <input type="submit" value="Update" class="btn btn-primary"> -->
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->

                    <!-- <div class="row"> -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">licence Photo</h4>
                                <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                                    <div class="item" style="margin-left: -10px;">
                                        <?php echo " <img src='../driver/images/$row[licenceimg]' height=250 width=200/>"; ?>
                                        <br>
                                        <br>
                                        <a href="modal" data-toggle="modal" data-target="#modal1"><i class="mdi mdi-arrow-expand-all text-warning"></i></a>
                                        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content" style="width: 605px ;">
                                                    <div class="modal-body pd-5">
                                                        <div class="img-container" style=" margin-left: -15px;">
                                                            <?php echo " <img src='../driver/images/$row[licenceimg]' height=450 width= 600 ;>"; ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <input type="submit" value="Update" class="btn btn-primary"> -->
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->

                    <!-- <div class="row "> -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Address Proof </h4>
                                <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                                    <div class="item" style="margin-left: -10px;">
                                        <?php echo " <img src='../driver/images/$row[addressproofimg]' height=250 width=200/>"; ?>
                                        <br>
                                        <br>
                                        <a href="modal" data-toggle="modal" data-target="#modal2"><i class="mdi mdi-arrow-expand-all text-warning"></i></a>
                                        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content" style="width: 570px ;">
                                                    <div class="modal-body pd-5">
                                                        <div class="img-container">
                                                            <?php echo " <img src='../driver/images/$row[addressproofimg]' height=450 width=400 >"; ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <input type="submit" value="Update" class="btn btn-primary"> -->
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->

                    <!-- <div class="row "> -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Driver Photo</h4>
                                <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                                    <div class="item" style="margin-left: -10px;">
                                        <?php echo " <img src='../driver/images/$row[photo]' height=250 width=200/>"; ?>
                                        <br>
                                        <br>
                                        <a href="modal" data-toggle="modal" data-target="#modal3"><i class="mdi mdi-arrow-expand-all text-warning"></i></a>
                                        <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body pd-5">
                                                        <div class="img-container">
                                                            <?php echo " <img src='../driver/images/$row[photo]' height=450 width=400/>"; ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- <input type="submit" value="Update" class="btn btn-primary"> -->
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
            </div>
        </div>
    </form>





<?php
}
?>










<?php
include("fff.php");
?>