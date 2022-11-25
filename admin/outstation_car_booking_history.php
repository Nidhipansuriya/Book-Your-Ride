<?php
include("hhh.php");
?>
<html>

<body>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Outstation Cars History</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="table-plus datatable-nosort">Booking history ID</th>
                                    <th>Booking ID</th>
                                    <th>User ID</th>
                                    <th>Customer Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Car ID</th>
                                    <th>Car Name </th>
                                    <th>Driver ID </th>
                                    <th>Pickup City</th>
                                    <th>Drop City</th>
                                    <th>Pickup Location </th>
                                    <th>Booking Date</th>
                                    <th>Rent start Date</th>
                                    <th>Pickup Time </th>
                                    <th>Return Date</th>
                                    <th>Price Per Day </th>
                                    <th>Total Days </th>
                                    <th>Total Amount </th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                    include('connection.php');
                                    // $id = $_SESSION['id'];
                                    $q = mysqli_query($con, "select * from outstation_booking_histrory");

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
                                            <td> <?php echo $row['user_id']; ?></td>
                                            <td> <?php echo $row['user_name']; ?></td>
                                            <td> <?php echo $row['user_contact']; ?></td>
                                            <td> <?php echo $row['user_email']; ?></td>
                                            <td> <?php echo $row['outstat_car_id']; ?></td>
                                            <td> <?php echo $row['outstat_car_name']; ?></td>
                                            <td> <?php echo $row['id']; ?></td>
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

                                            </td>

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