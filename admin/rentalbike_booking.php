<?php
include("hhh.php");
// error_reporting(1);
?>

<style>
    .table-striped tbody tr:nth-of-type(odd) {
        background: #343a40;
    }
</style>

<html>

<body>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card" style="background-color: black;">
                <div class="card-body">
                    <h4 class="card-title">Rented Bikes</h4>
                    <div class="table-responsive">
                        <form class="forms-sample" name="rental_car_booking" method="POST" enctype="multipart/form-data">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <!-- <th>No</th> -->
                                        <th class="table-plus datatable-nosort">Booking ID</th>
                                        <th>Customer ID</th>
                                        <th>Customer name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Bike Name </th>
                                        <th>Licence No</th>
                                        <!-- <th>Front photo</th> -->
                                        <!-- <th>back photo </th> -->
                                        <th>Booking Date</th>
                                        <th>Pick Date</th>
                                        <th>Return Date</th>
                                        <th>Pick Time </th>
                                        <th>Price Per Day </th>
                                        <th>Total Days </th>
                                        <th>Total amount </th>
                                        <th>Return Status </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    include('connection.php');
                                    // $q = mysqli_query($con, "select cmm.*,cd.*,bm.*,cm.* from brandmaster bm, carmaster cm, carmodel cmm, cardetail cd  where bm.brand_id=cm.brand_id and cm.car_id=cmm.car_id and cmm.carmodel_id=cd.carmodel_id");
                                    // $q = mysqli_query($con, "select cm.*,cd.*,rcb.* from carmodel cm, cardetail cd, rental_car_booking rcb  where cm.carmodel_id=rcb.carmodel_id and cd.cardetail_id=rcb.cardetail_id");
                                    $q = mysqli_query($con, "select bm.*,rbb.* from bikemaster bm, rental_bike_booking rbb where bm.bike_id=rbb.bike_id");

                                    // $q = mysqli_query($con, "select  from outstation_booking");
                                    $i = 1;



                                    while ($row = mysqli_fetch_array($q)) {
                                    ?>
                                        <tr>
                                            <!-- <td class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </td> -->

                                            <!-- <td><button type="submit" name="return" id="return"><img src="images/car-return.png" style="width: 20px; height: 20px;"/></button> -->
                                            <!-- <td><button type="submit" name="return" id="return" style="margin-left: -32px;"><img src="images/confirm-car.png" style="width: 20px; height: 20px; "/></button> -->



                                            <td>
                                                <?php
                                                // echo "<img src='../../admin/images/$row[car_images]'>";
                                                echo "<a href='rentalbike_mail.php?bike_booking_id=$row[bike_booking_id]&bike_id=$row[bike_id]'><img src='images/car-return.png'></a>";
                                                ?>
                                            </td>
                                            
                                            <!-- <a href="images/car-return.png"></a> -->
                                            <td> <?php echo $row['bike_booking_id']; ?></td>
                                            <td> <?php echo $row['user_id']; ?></td>
                                            <td> <?php echo $row['user_name']; ?></td>
                                            <td> <?php echo $row['user_contact']; ?></td>
                                            <td> <?php echo $row['user_email']; ?></td>
                                            <td> <?php echo $row['bike_name']; ?></td>
                                            <td> <?php echo $row['licenceno']; ?></td>
                                            <!-- <td><a href="modal" data-toggle="modal" data-target="#modal"><?php echo "<image src='../user/login-form-20/images/$row[front_photo]' height=600 width=600>"; ?></a></td>
                                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content" style="width: 625px ;">
                                                        <div class="modal-body pd-5">
                                                            <div class="img-container">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <!-- <td><a href="modal1" data-toggle="modal" data-target="#modal1"><?php echo "<image src='../user/login-form-20/images/$row[back_photo]' height=600 width=600>"; ?></a></td>
                                            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content" style="width: 625px ;">
                                                        <div class="modal-body pd-5">
                                                            <div class="img-container" style=" margin-left: -15px;">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <td> <?php echo $row['booking_date']; ?></td>
                                            <td> <?php echo $row['pick_date']; ?></td>
                                            <td> <?php echo $row['return_date']; ?></td>
                                            <td> <?php echo $row['pick_time']; ?></td>
                                            <td> <?php echo "&#8377 $row[price_day]"; ?></td>
                                            <td> <?php echo $row['total_day']; ?></td>
                                            <td> <?php echo "&#8377 $row[total_amount]"; ?></td>
                                            <td> <?php echo $row['return_status']; ?></td>

                                        </tr>
                                    <?php } ?>
                                    
                                  
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("fff.php");
    ?>