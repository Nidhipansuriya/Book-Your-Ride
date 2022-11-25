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
                    <h4 class="card-title">Ride History</h4>
                    <div class="table-responsive">
                        <form class="forms-sample" name="Ride_history" method="POST">
                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                        <!-- <th></th> -->
                                        <th>No</th>
                                        <th class="table-plus datatable-nosort">Booking history ID</th>
                                        <th>Booking ID</th>
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
                                    // $q = mysqli_query($con, "select oc.*,ob.*,cm.*,bh.* from outstation_car oc, outstation_booking ob, city_master cm, outstation_booking_histrory bh  where oc.outstat_car_id=bh.outstat_car_id and cm.city_id=bh.city_id and ob.out_booking_id=bh.out_booking_id and id=$id");
                                    // $q = mysqli_query($con, "select * from outstation_booking_histrory where id=$id");
                                    $q = mysqli_query($con, "select oh.*, d.* from outstation_booking_histrory oh, dregis d where d.id=oh.id and d.id=$id");

                                    // $q = mysqli_query($con, "select obh.*, ob.* from outstation_booking_histrory obh, outstation_booking ob where ob.out_booking_id = obh.out_booking_id and id=$id");

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

                                            <td><?php echo $i;
                                                $i++; ?></td>
                                            <td> <?php echo $row['out_booking_history_id']; ?></td>
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