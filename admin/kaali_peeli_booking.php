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
                    <h4 class="card-title">Rented cab</h4>
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
                                    <th>Area</th>
                                    <th>Pickup Location </th>
                                    <th>Drop Location</th>
                                    <th>Booking Date</th>
                                    <th>Pickup Date</th>
                                    <th>Pickup Time </th>
                                    <th>Price Per Km</th>
                                    <th>Total Km </th>
                                    <th>Total Price </th>
                                    <th>Return Status </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                // $id=$_SESSION['id'];
                                // $q = mysqli_query($con, "select cmm.*,cd.*,bm.*,cm.* from brandmaster bm, carmaster cm, carmodel cmm, cardetail cd  where bm.brand_id=cm.brand_id and cm.car_id=cmm.car_id and cmm.carmodel_id=cd.carmodel_id");
                                $q = mysqli_query($con, "select kp.*,kpb.*,am.*,dm.* from kaali_peeli kp, kaali_peeli_booking kpb, area_master am, dregis dm  where kp.kaali_peeli_id=kpb.kaali_peeli_id and am.area_id=kpb.area_id and dm.id=kpb.id ");
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
                                        <td> <?php echo $row['kaali_peeli_booking_id']; ?></td>
                                        <td> <?php echo $row['user_name']; ?></td>
                                        <td> <?php echo $row['user_contact']; ?></td>
                                        <td> <?php echo $row['user_email']; ?></td>
                                        <td> <?php echo $row['name']; ?></td>
                                        <td> <?php echo $row['car_name']; ?></td>
                                        <td> <?php echo $row['areaname']; ?></td>
                                        <td> <?php echo $row['pickup_location']; ?></td>
                                        <td> <?php echo $row['drop_location']; ?></td>
                                        <td> <?php echo $row['booking_date']; ?></td>
                                        <td> <?php echo $row['pickup_date']; ?></td>
                                        <td> <?php echo $row['pickup_time']; ?></td>
                                        <td> <?php echo "&#8377 $row[price_km]"; ?></td>
                                        <td> <?php echo $row['total_km']; ?></td>
                                        <td> <?php echo "&#8377 $row[total_price]"; ?></td>
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