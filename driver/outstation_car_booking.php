<?php
include("hhh.php");
error_reporting(1);
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
                        <form class="forms-sample" name="car_booking" method="POST">
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
                                        <th>Pickup City</th>
                                        <th>Drop City</th>
                                        <th>Pickup Location </th>
                                        <th>Booking Date</th>
                                        <th>Pickup Date</th>
                                        <th>Pickup Time </th>
                                        <th>Return Date</th>
                                        <th>Total Days </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    include('connection.php');
                                    //session_start();
                                    $id = $_SESSION['id'];
                                    // $q = mysqli_query($con, "select cmm.*,cd.*,bm.*,cm.* from brandmaster bm, carmaster cm, carmodel cmm, cardetail cd  where bm.brand_id=cm.brand_id and cm.car_id=cmm.car_id and cmm.carmodel_id=cd.carmodel_id");
                                    $q = mysqli_query($con, "select oc.*,ob.*,cm.* from outstation_car oc, outstation_booking ob, city_master cm  where oc.outstat_car_id=ob.outstat_car_id and cm.city_id=ob.city_id and id=$id");

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
                                            <td> <?php echo $row['out_booking_id']; ?></td>
                                            <td> <?php echo $row['user_name']; ?></td>
                                            <td> <?php echo $row['user_contact']; ?></td>
                                            <td> <?php echo $row['user_email']; ?></td>
                                            <td> <?php echo $row['outstat_car_name']; ?></td>
                                            <td> <?php echo $row['city_name']; ?></td>
                                            <td> <?php echo $row['drop_city']; ?></td>
                                            <td> <?php echo $row['pickup_location']; ?></td>
                                            <td> <?php echo $row['booking_date']; ?></td>
                                            <td> <?php echo $row['rent_start_date']; ?></td>
                                            <td> <?php echo $row['pickup_time']; ?></td>
                                            <td> <?php echo $row['return_date']; ?></td>
                                            <td> <?php echo $row['total_days']; ?></td>


                                            </td>

                                        </tr>




                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "byr");
                                        if (isset($_POST['return'])) {
                                            $id = $_SESSION['id'];
                                            $out_booking_id = $row['out_booking_id'];
                                            $user_id = $row['user_id'];
                                            $user_name = $row['user_name'];
                                            $user_contact = $row['user_contact'];
                                            $user_email = $row['user_email'];
                                            $outstat_car_id = $row['outstat_car_id'];
                                            $outstat_car_name = $row['outstat_car_name'];
                                            $city_name = $row['city_name'];
                                            $drop_city = $row['drop_city'];
                                            $pickup_location = $row['pickup_location'];
                                            $booking_date = $row['booking_date'];
                                            $rent_start_date = $row['rent_start_date'];
                                            $pickup_time = $row['pickup_time'];
                                            $return_date = $row['return_date'];
                                            $price_day = $row['price_day'];
                                            $total_days = $row['total_days'];
                                            $total_amount = $row['total_amount'];

                                            

                                            $q = mysqli_query($con, "update dregis set available_status=0 where id=$id ");
                                            $q1 = mysqli_query($con, "update outstation_car set car_status=0 where outstat_car_id=$outstat_car_id");
                                            $q2 = mysqli_query($con, "update outstation_booking set return_status=1 where out_booking_id =$out_booking_id  ");
                                            $q3 = mysqli_query($con, "insert into outstation_booking_histrory values('',$out_booking_id,$user_id,'$user_name',$user_contact,'$user_email',$outstat_car_id,'$outstat_car_name',$id,'$city_name','$drop_city','$pickup_location','$booking_date','$rent_start_date','$pickup_time','$return_date',$price_day,$total_days,$total_amount)");




                                            //outstation_car=	car_status
                                            //outstation_booking = return_status

                                            if (($q) && ($q1) && ($q2) && ($q3)) {
                                                echo "<script>alert('Car has arrived back from the Ride..');</script>";
                                                $q = mysqli_query($con, "delete from outstation_booking where out_booking_id=$out_booking_id");
                                                echo "<script>window.location.assign('outstation_car_booking.php');</script>";
                                            } else {
                                                echo "<script>alert('Car has not returned Yet!!');</script>";
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