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
<script>
    function edit(id) {
        if (confirm) {
            window.location.href = 'driverprofileedit.php?id=' + id + '';
            //return true;
        }
    }
</script>


<?php
// session_start();
include('connection.php');
// $id = $_POST['id'];
$id = $_SESSION['id'];
$q = mysqli_query($con, "select * from dregis where id=$id ");
while ($row = mysqli_fetch_array($q)) {
?>


    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Profile</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
            <div class="pd-20 card-box height-100-p">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="profile-photo">
                    <a onclick="edit(<?php echo $row[0]; ?>)" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                    <?php
                    $pic = $_SESSION['photo'];
                    echo "<img class='img-xs rounded-circle' src='images/$pic' style='height: 160px;'>";
                    // <img src="images/photo1.jpg" alt="">
                    ?>
                    <!-- <img src="vendors/images/photo1.jpg" alt="" class="avatar-photo"> -->
                    <!-- <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true"> -->
                    <!-- <div class="modal-dialog modal-dialog-centered" role="document"> -->
                    <!-- <div class="modal-content"> -->
                    <!-- <div class="modal-body pd-5"> -->

                    <!-- </div> -->

                    <!-- </div> -->
                    <!-- </div> -->
                    <!-- </div> -->
                </div>
                <h5 class="text-center h5 mb-0"><?php echo $row['name']; ?></h5>

                <h4 class="text-center text-muted font-14"><?php echo $row['experience']; ?> of experience</h4>
                <br>
                <!-- <div class="profile-info">
                    <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                    <ul>
                        <li>
                            <span>Email Address:</span>
                            <?php echo $row['email']; ?>
                        </li>
                        <li>
                            <span>Phone Number:</span>
                            <?php echo $row['contact']; ?>
                        </li>
                        <li>
                            <span>State:</span>
                            <?php echo $row['state']; ?>
                        </li>
                        <li>
                            <span>City:</span>
                            <?php echo $row['city']; ?>
                        </li>
                        <li>
                            <span>Address:</span>
                            <?php echo $row['address']; ?>
                        </li>
                    </ul>
                </div>
                <div class="profile-info">
                    <h5 class="mb-20 h5 text-blue">Identity Information</h5>
                    <ul>
                        <li>
                            <span>AddharCard Number:</span>
                            <?php echo $row['adharcardno']; ?>
                        </li>
                        <li>
                            <span>Licence Number</span>
                            <?php echo $row['licenceno']; ?>
                        </li>
                    </ul>
                </div> -->
                <!-- <div class="profile-skills">
                <h5 class="mb-20 h5 text-blue">Key Skills</h5>
                <h6 class="mb-5 font-14">HTML</h6>
                <div class="progress mb-20" style="height: 6px;">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h6 class="mb-5 font-14">Css</h6>
                <div class="progress mb-20" style="height: 6px;">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h6 class="mb-5 font-14">jQuery</h6>
                <div class="progress mb-20" style="height: 6px;">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h6 class="mb-5 font-14">Bootstrap</h6>
                <div class="progress mb-20" style="height: 6px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div> -->
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
            <div class="card-box height-100-p overflow-hidden">
                <div class="profile-tab height-100-p">
                    <div class="tab height-100-p">
                       
                        <div class="tab-content">
                            <!-- Timeline Tab start -->
                            <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                <div class="pd-20">
                                    <!-- <div class="profile-timeline">
                                        <div class="timeline-month">
                                            <h5>August, 2020</h5>
                                        </div>
                                        <div class="profile-timeline-list">
                                            <ul>
                                                <li>
                                                    <div class="date">12 Aug</div>
                                                    <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <div class="task-time">09:30 am</div>
                                                </li>
                                                <li>
                                                    <div class="date">10 Aug</div>
                                                    <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <div class="task-time">09:30 am</div>
                                                </li>
                                                <li>
                                                    <div class="date">10 Aug</div>
                                                    <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <div class="task-time">09:30 am</div>
                                                </li>
                                                <li>
                                                    <div class="date">10 Aug</div>
                                                    <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <div class="task-time">09:30 am</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="timeline-month">
                                            <h5>July, 2020</h5>
                                        </div>
                                        <div class="profile-timeline-list">
                                            <ul>
                                                <li>
                                                    <div class="date">12 July</div>
                                                    <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <div class="task-time">09:30 am</div>
                                                </li>
                                                <li>
                                                    <div class="date">10 July</div>
                                                    <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <div class="task-time">09:30 am</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="timeline-month">
                                            <h5>June, 2020</h5>
                                        </div>
                                        <div class="profile-timeline-list">
                                            <ul>
                                                <li>
                                                    <div class="date">12 June</div>
                                                    <div class="task-name"><i class="ion-android-alarm-clock"></i> Task Added</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <div class="task-time">09:30 am</div>
                                                </li>
                                                <li>
                                                    <div class="date">10 June</div>
                                                    <div class="task-name"><i class="ion-ios-chatboxes"></i> Task Added</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <div class="task-time">09:30 am</div>
                                                </li>
                                                <li>
                                                    <div class="date">10 June</div>
                                                    <div class="task-name"><i class="ion-ios-clock"></i> Event Added</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <div class="task-time">09:30 am</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <br>
                <div class="profile-info">
                    <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                    <ul>
                        <li>
                            <span>Email Address:</span>
                            <?php echo $row['email']; ?>
                        </li>
                        <li>
                            <span>Phone Number:</span>
                            <?php echo $row['contact']; ?>
                        </li>
                        <li>
                            <span>State:</span>
                            <?php echo $row['state']; ?>
                        </li>
                        <li>
                            <span>City:</span>
                            <?php echo $row['city']; ?>
                        </li>
                        <li>
                            <span>Address:</span>
                            <?php echo $row['address']; ?>
                        </li>
                    </ul>
                </div>
                <div class="profile-info">
                    <h5 class="mb-20 h5 text-blue">Identity Information</h5>
                    <ul>
                        <li>
                            <span>AddharCard Number:</span>
                            <?php echo $row['adharcardno']; ?>
                        </li>
                        <li>
                            <span>Licence Number</span>
                            <?php echo $row['licenceno']; ?>
                        </li>
                    </ul>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
include("fff.php");
?>