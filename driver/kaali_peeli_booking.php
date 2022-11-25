<?php
include("hhh.php");
// error_reporting(1);
?>

<style>
    .table-striped tbody tr:nth-of-type(odd) {
        background: #000000;
    }
</style>

<html>

<body>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card" style="background-color: black;">
                <div class="card-body">
                    <h4 class="card-title">My Rides</h4>
                    <div class="table-responsive">
                        <form class="forms-sample" name="kaali_peeli_booking" method="POST">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th></th> -->
                                        <!-- <th></th> -->
                                        <th></th>

                                        <th class="table-plus datatable-nosort">Booking ID</th>
                                        <th>Customer Name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Car Name </th>
                                        <th>Area Name </th>
                                        <th>Pickup Location </th>
                                        <th>Drop Location</th>
                                        <th>Booking Date</th>
                                        <th>Pickup Date</th>
                                        <th>Pickup Time </th>
                                        <th>Total kms </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    include('connection.php');
                                    //session_start();
                                    $id = $_SESSION['id'];
                                 
                                    $q = mysqli_query($con, "select kpb.*, kp.*, am.*, d.* from kaali_peeli_booking kpb,kaali_peeli kp, area_master am, dregis d where kpb.kaali_peeli_id=kp.kaali_peeli_id and kpb.area_id=am.area_id and d.id=kpb.id");

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
                                            <!-- <td><input type="submit" name="confirm" id="confirm" value="Confirm" class="btn btn-warning mr-2"> -->
                                            <!-- <td><button type="submit" name="return" id="return"  ><img src="images/confirm-car.png" /></button> -->
                                            <!-- <td><button type="submit" name="confirm" id="confirm" style="width: 25px;"><img src="images/confirm-car.png" style="width: 20px; height: 20px;" /></button> -->
                                            <td><button type="submit" name="return" id="return" style="width: 25px;"><img src="images/car-return.png" style="width: 20px; height: 20px; " /></button>
                                            <td> <?php echo $row['kaali_peeli_booking_id']; ?></td>
                                            <td> <?php echo $row['user_name']; ?></td>
                                            <td> <?php echo $row['user_contact']; ?></td>
                                            <td> <?php echo $row['user_email']; ?></td>
                                            <td> <?php echo $row['car_name']; ?></td>
                                            <td> <?php echo $row['areaname']; ?></td>
                                            <td> <?php echo $row['pickup_location']; ?></td>
                                            <td> <?php echo $row['drop_location']; ?></td>
                                            <td> <?php echo $row['booking_date']; ?></td>
                                            <td> <?php echo $row['pickup_date']; ?></td>
                                            <td> <?php echo $row['pickup_time']; ?></td>
                                            <td> <?php echo $row['total_km']; ?></td>


                                            </td>

                                        </tr>




                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "byr");
                                        if (isset($_POST['return'])) {
                                            $id = $_SESSION['id'];
                                            $kaali_peeli_booking_id = $row['kaali_peeli_booking_id'];
                                            $user_id = $row['user_id'];
                                            $user_name = $row['user_name'];
                                            $user_contact = $row['user_contact'];
                                            $user_email = $row['user_email'];
                                            $kaali_peeli_id = $row['kaali_peeli_id'];
                                            $car_name = $row['car_name'];
                                            $areaname = $row['areaname'];
                                            $pickup_location = $row['pickup_location'];
                                            $drop_location = $row['drop_location'];
                                            $booking_date = $row['booking_date'];
                                            $pickup_date = $row['pickup_date'];
                                            $pickup_time = $row['pickup_time'];
                                            $price_km = $row['price_km'];
                                            $total_km = $row['total_km'];
                                            $total_price = $row['total_price'];



                                            $q4 = mysqli_query($con, "update dregis set available_status=0 where id=$id ");
                                            $q1 = mysqli_query($con, "update kaali_peeli set status=0 where kaali_peeli_id=$kaali_peeli_id");
                                            $q2 = mysqli_query($con, "update kaali_peeli_booking set return_status=1 where kaali_peeli_booking_id= $kaali_peeli_booking_id");
                                            $q3 = mysqli_query($con, "insert into kaali_peeli_booking_history values('',$kaali_peeli_booking_id,$user_id,'$user_name',$user_contact,'$user_email',$kaali_peeli_id,'$car_name',$id,'$areaname','$pickup_location','$drop_location','$booking_date','$pickup_date','$pickup_time',$price_km,$total_km,$total_price)");
                                            echo "insert into kaali_peeli_booking_history values('',$kaali_peeli_booking_id,$user_id,'$user_name',$user_contact,'$user_email',$kaali_peeli_id,'$car_name',$id,'$areaname','$pickup_location','$drop_location','$booking_date','$pickup_date','$pickup_time',$price_km,$total_km,$total_price)";




                                            //outstation_car=	car_status
                                            //outstation_booking = return_status

                                            if (($q4) && ($q1) && ($q2) && ($q3)) {
                                                echo "<script>alert('kaali peeli has arrived back from the Ride..');</script>";
                                                $q5 = mysqli_query($con, "delete from kaali_peeli_booking where kaali_peeli_booking_id=$kaali_peeli_booking_id");
                                                echo "<script>window.location.assign('kaali_peeli_booking.php');</script>";
                                            } else {
                                                echo "<script>alert('kaali peeli has not returned Yet!!');</script>";
                                            }
                                        }
                                        ?>

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