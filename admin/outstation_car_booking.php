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
                    <h4 class="card-title">Outstation rented cars</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <th class="table-plus datatable-nosort">Booking ID</th>
                                    <th>Customer Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Driver Name</th>
                                    <th>Car Name </th>
                                    <th>Pickup City</th>
                                    <th>Drop City</th>
                                    <th>Pickup Location </th>
                                    <th>Booking Date</th>
                                    <th>Pickup Date</th>
                                    <th>Pickup Time </th>
                                    <th>Return Date</th>
                                    <th>Price Per Day</th>
                                    <th>Total Days </th>
                                    <th>Total Amount </th>
                                    <th>Return Status </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                // $q = mysqli_query($con, "select cmm.*,cd.*,bm.*,cm.* from brandmaster bm, carmaster cm, carmodel cmm, cardetail cd  where bm.brand_id=cm.brand_id and cm.car_id=cmm.car_id and cmm.carmodel_id=cd.carmodel_id");
                                $q = mysqli_query($con, "select oc.*,ocb.*,cm.*,dm.* from outstation_car oc, outstation_booking ocb, city_master cm, dregis dm  where oc.outstat_car_id=ocb.outstat_car_id and cm.city_id=ocb.city_id and dm.id=ocb.id");
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
                                        <td><?php echo $i;
                                            $i++; ?></td>
                                        <td> <?php echo $row['out_booking_id']; ?></td>
                                        <td> <?php echo $row['user_name']; ?></td>
                                        <td> <?php echo $row['user_contact']; ?></td>
                                        <td> <?php echo $row['user_email']; ?></td>
                                        <td> <?php echo $row['name']; ?></td>
                                        <td> <?php echo $row['outstat_car_name']; ?></td>
                                        <td> <?php echo $row['city_name']; ?></td>
                                        <td> <?php echo $row['drop_city']; ?></td>
                                        <td> <?php echo $row['pickup_location']; ?></td>
                                        <td> <?php echo $row['booking_date']; ?></td>
                                        <td> <?php echo $row['rent_start_date']; ?></td>
                                        <td> <?php echo $row['pickup_time']; ?></td>
                                        <td> <?php echo $row['return_date']; ?></td>
                                        <td> <?php echo "&#8377 $row[price_day]"; ?></td>
                                        <td> <?php echo $row['total_days']; ?></td>
                                        <td> <?php echo "&#8377 $row[total_amount]"; ?></td>
                                        <td> <?php echo $row['return_status']; ?></td>

                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <?php
    include("fff.php");
    ?>