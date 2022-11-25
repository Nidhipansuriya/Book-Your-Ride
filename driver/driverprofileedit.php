<?php
include("hhh.php");
?>

<style>
    .byr-input {
        font-family: 'Inter', sans-serif;
        color: #ecf0f4;
        font-weight: 400;
        text-align: center;
        width: 30%;
        height: 26px;
        border-top: none;
        border-left: none;
        border-right: none;
        background-color: rgb(0 0 0 / 90%);
        /* border-color: #6c757d; */
        letter-spacing: .035em;
    }

    .image-upload>input {
        display: none;
    }

    .nidhi{
        height: 160px;
    }
</style>

<?php
$id = $_SESSION['id'];
include('connection.php');

$q = mysqli_query($con, "select * from dregis where id=$id");
$row = mysqli_fetch_array($q);
?>


<div align=center>

    <form class="forms-sample" name="profile" method="POST" enctype="multipart/form-data">
    <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
            <div class="pd-20 card-box height-100-p">
                <div class="profile-photo">
                    <div class="image-upload">
                        <label for="file-input">
                            <a class="edit-avatar"><i class="icon-copy dw dw-upload1"></i></a>
                        </label>
                        <input type="file" id="file-input" class="byr-input" name="photo" id="photo" required>
                        <?php
                        $pic = $_SESSION['photo'];
                        echo "<img class='img-xs rounded-circle nidhi' src='images/$pic' style='height: 160px;'>";
                        ?>

                        <!-- <input id="file-input" type="file" /> -->
                    </div>
                </div>
                <div>
                    <ul>


                        <li>
                            <a href="verify_password.php"><button type="button" class="btn " style="color: #fff; margin-top:15px;" data-dismiss="modal">Change Password</button></a>
                        </li>
                        <br>
                        <li>
                            <!-- <h5 class="text-center h5 mb-0"><?php echo $row['name']; ?></h5> -->
                            <input type="text" name="name" id="name" style="width: 55%;" value="<?php echo $row['name']; ?>" class="byr-input" readonly>
                        </li>
                        <br>
                        <li>
                            <!-- <h4 class="text-center text-muted font-14"><?php echo $row['experience']; ?> of experience</h4> -->
                            <label>EXPERIENCE :</label>
                            <input type="text" name="experience" id="experience" style="width: 20%;" value="<?php echo $row['experience']; ?>" class="byr-input" required>
                        </li>


                    </ul>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Update" class="btn btn-primary">
                                    <a href="profile.php"><button type="button" class="btn" style="background-color: #212529; color: #fff; border-color: #212529;" data-dismiss="modal">Close</button></a>
                </div>


            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
            <div class="card-box height-100-p overflow-hidden">
                <div class="profile-tab height-100-p">
                    <div class="tab height-100-p ">
                        <div class="nav nav-tabs customtab" style="height: 7%;">
                            <!-- <li class="nav-item"> -->
                            <h4 style="color: #bfa132; margin:12px; margin-left:45%;">Edit Profile</h4>
                            <!-- </li> -->

                        </div>
                        <div class="tab-content">
                            <!-- Timeline Tab start -->
                            <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                <div class="pd-20">
                                    <div class="profile-info">
                                        <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                                        <ul>
                                            <li>
                                                <span>Email Address:</span>
                                                <!-- <?php echo $row['email']; ?> -->
                                                <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" class="byr-input" readonly>
                                            </li>
                                            <li>
                                                <span>Phone Number:</span>
                                                <!-- <?php echo $row['contact']; ?> -->
                                                <input type="text" name="contact" id="contact" value="<?php echo $row['contact']; ?>" class="byr-input" required>

                                            </li>
                                            <li>
                                                <span>State:</span>
                                                <!-- <?php echo $row['state']; ?> -->
                                                <input type="text" name="state" id="state" value="<?php echo $row['state']; ?>" class="byr-input" required>

                                            </li>
                                            <li>
                                                <span>City:</span>
                                                <!-- <?php echo $row['city']; ?> -->
                                                <input type="text" name="city" id="city" value="<?php echo $row['city']; ?>" class="byr-input" required>

                                            </li>
                                            <li>
                                                <span>Address:</span>
                                                <!-- <?php echo $row['address']; ?> -->
                                                <input type="textarea" name="address" id="address" value="<?php echo $row['address']; ?>" class="byr-input" required>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="profile-info">
                                        <h5 class="mb-20 h5 text-blue">Identity Information</h5>
                                        <ul>
                                            <li>
                                                <span>AddharCard Number:</span>
                                                <!-- <?php echo $row['adharcardno']; ?> -->
                                                <input type="text" name="adharcardno" id="adharcardno" value="<?php echo $row['adharcardno']; ?>" class="byr-input" required>

                                            </li>
                                            <li>
                                                <span>Licence Number</span>
                                                <!-- <?php echo $row['licenceno']; ?> -->
                                                <input type="text" name="licenceno" id="licenceno" value="<?php echo $row['licenceno']; ?>" class="byr-input" required>

                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <!-- <div class="modal-footer"> -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> 
</div>



<?php
//  session_start();
$id = $_SESSION['id'];
include('connection.php');
if (isset($_POST["submit"])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $contact = $_POST['contact'];
    $adharcardno = $_POST['adharcardno'];
    $licenceno = $_POST['licenceno'];
    $experience = $_POST['experience'];

    $photo = $_FILES["photo"]["name"];
    $file_temp4 = $_FILES["photo"]["tmp_name"];


    if ($photo == '') {

        $photo = $row['photo'];
    } else {
        $photo = $_FILES["photo"]["name"];
        $file_temp4 = $_FILES["photo"]["tmp_name"];
    }
    $q = mysqli_query($con, "update dregis set name='$name',email='$email',address='$address',city='$city',state='$state',contact=$contact,adharcardno='$adharcardno',licenceno='$licenceno',experience='$experience' ,photo='$photo' where id=$id");
    // echo "update dregis set name='$name',email='$email',address='$address',city='$city',state='$state',contact='$contact',adharcardno='$adharcardno',licenceno='$licenceno',experience='$experience' ,photo='$photo' where id=$id";
    // $row=mysqli_fetch_array($q);

    if ($q) {
        move_uploaded_file($file_temp4, "images/" . $photo);
        // echo "hiii";
        //header('location:service_master.php');
        echo "<script>window.location.assign('profile.php');</script>";
    } else {


        echo "<script>alert('Your Changes are Not Upgraded.');</script>";
    }
}
?>