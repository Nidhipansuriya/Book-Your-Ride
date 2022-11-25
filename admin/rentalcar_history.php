<?php
include("hhh.php");
?>
<html>

<body>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Cars History</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <tr>

                                    <th class="table-plus datatable-nosort">History ID</th>
                                    <th>Booking ID</th>
                                    <th>Customer ID</th>
                                    <th>Customer Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Car Model ID </th>
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

                                </tr>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                // $id = $_SESSION['id'];
                                $q = mysqli_query($con, "select * from rentalcar_history");

                                // $i = 1;
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                    <tr>

                                        <td> <?php echo $row['rentalcar_history_id']; ?></td>
                                        <td> <?php echo $row['car_booking_id']; ?></td>
                                        <td> <?php echo $row['user_id']; ?></td>
                                        <td> <?php echo $row['user_name']; ?></td>
                                        <td> <?php echo $row['user_contact']; ?></td>
                                        <td> <?php echo $row['user_email']; ?></td>
                                        <td> <?php echo $row['carmodel_id']; ?></td>
                                        <td> <?php echo $row['liecense_no']; ?></td>
                                        <td> <?php echo $row['booking_date']; ?></td>
                                        <td> <?php echo $row['pick_date']; ?></td>
                                        <td> <?php echo $row['return_date']; ?></td>
                                        <td> <?php echo $row['pick_time']; ?></td>
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