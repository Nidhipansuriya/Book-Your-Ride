<?php
include("hhh.php");
// error_reporting(1);
?>
<script language="javascript" type="text/javascript">
    function getXMLHTTP() {
        var xmlhttp = false;
        xmlhttp = new XMLHttpRequest();
        return xmlhttp;
    }

    function getCars(brand_id) {
        var strURL = "findcar.php?brand_id=" + brand_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('car_id').innerHTML = req.responseText;
                }
            }
            req.open("GET", strURL, true);
            req.send();
        }
    }

    function getCarmodels(car_id) {
        var strURL = "findcarmodel.php?car_id=" + car_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('carmodel_id').innerHTML = req.responseText;
                }
            }
            req.open("GET", strURL, true);
            req.send();
        }
    }
</script>

<html>

<body>
    <?php
    include('connection.php');
    $con = mysqli_connect("localhost", "root", "", "byr");

    if (isset($_POST['submit'])) {
        // $brand_id = $_POST['brand_id'];
        // $car_id = $_POST['car_id'];
        $carmodel_id = $_POST['carmodel_id'];
        // $car_name = $_POST['car_name'];
        $number_plate = $_POST['number_plate'];
        $seats = $_POST['seats'];
        $child_seat = $_POST['child_seat'];
        $fuel_type = $_POST['fuel_type'];
        $price_day = $_POST['price_day'];
        $sunroof = $_POST['sunroof'];
        $mileage = $_POST['mileage'];
        $transmission = $_POST['transmission'];
        $gps = $_POST['gps'];
        $music = $_POST['music'];
        $onboard_computer = $_POST['onboard_computer'];
        $remote_central_locking = $_POST['remote_central_locking'];
        // $status =  $_POST['status'];

        $q = mysqli_query($con, "insert into cardetail values('',$carmodel_id,'$number_plate',$seats,'$child_seat','$fuel_type',$price_day,'$sunroof',$mileage,'$transmission','$gps','$music','$onboard_computer','$remote_central_locking',0)");
        // echo "insert into cardetail values('',$carmodel_id,'$number_plate',$seats,'$child_seat','$fuel_type',$price_day,'$sunroof',$airbags,$mileage,'$transmission','$luggage','$ac','$gps','$music','$seat_belt','$bluetooth','$onboard_computer','$audio_input','$remote_central_locking','$climate_control',0)";
        if ($q) {

            echo "<script>alert('Data entered successfully!!');</script>";
        } else {
            echo "<script>alert('Oops!! There might be something wrong.');</script>";
        }
    }
    ?>

    <div align=center>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">CAR DETAILS</h4>

                    <form class="forms-sample" name="cardetails" method="POST" enctype="multipart/form-data">

                    <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Car Model Name</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" name="car_name" id="car_name" placeholder="Brand Name"> -->
                                <select name="carmodel_id" id="carmodel_id" class="col-sm-12 btn btn-outline-secondary dropdown-toggle" required>
                                    <?php
                                    $q = mysqli_query($con, "select * from carmodel");
                                    while ($row = mysqli_fetch_array($q)) {
                                        echo "<option value=$row[0]>$row[3]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Car Model </label>
                            <div class="col-sm-9">
                                <select name="carmodel_id" id="carmodel_id" class="col-sm-12 btn btn-outline-secondary dropdown-toggle" onChange="getCarmodels(this.value)">
                                    <option value="">Select Model</option>
                                </select>
                            </div>
                        </div> -->                      
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Number Plate</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="number_plate" id="number_plate" placeholder="Number Plate" height=100 width=100 required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Seats</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="seats" id="seats" placeholder="Total Seat Numbers" height=100 width=100 required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Child Seat</label>
                            <div>
                                &nbsp; &nbsp;
                                <input type="radio" name="child_seat" value="yes" id="child_seat" required> Yes
                                &nbsp; &nbsp;
                                <input type="radio" name="child_seat" value="no" id="child_seat" required> No
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Fuel Type</label>
                            <div class="col-sm-9">
                                <select class="col-sm-12 btn btn-outline-secondary dropdown-toggle" name="fuel_type" id="fuel_type" title="Select Fuel Type" required>
                                    <option value="petrol">Petrol</option>
                                    <option value="diesel">Diesel</option>
                                    <option value="CNG">CNG</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Price Per Day</label>
                            <div class="col-sm-9">
                                
                                <input type="text" class="form-control" name="price_day" id="price_day" placeholder="Price per day" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Sun Roof</label>
                            <div>
                                <div>
                                    &nbsp; &nbsp;
                                    <input type="radio" name="sunroof" value="yes" id="sunroof" required> Yes
                                    &nbsp; &nbsp;
                                    <input type="radio" name="sunroof" value="no" id="sunroof" required> No
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Mileage</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="mileage" id="mileage" placeholder="Mileage" height=100 width=100 required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Transmission</label>
                            <div class="col-sm-9">
                                <select class="col-sm-12 btn btn-outline-secondary dropdown-toggle" name="transmission" id="transmission" title="Select Transmission Type" required>
                                    <option value="auto">Auto</option>
                                    <option value="manual">Manual</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">GPS</label>
                            <div>
                                <div>
                                    &nbsp; &nbsp;
                                    <input type="radio" name="gps" value="yes" id="gps" required> Yes
                                    &nbsp; &nbsp;
                                    <input type="radio" name="gps" value="no" id="gps" required> No
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Music</label>
                            <div>
                                <div>
                                    &nbsp; &nbsp;
                                    <input type="radio" name="music" value="yes" id="music" required> Yes
                                    &nbsp; &nbsp;
                                    <input type="radio" name="music" value="no" id="music" required> No
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Onboard computer</label>
                            <div>
                                <div>
                                    &nbsp; &nbsp;
                                    <input type="radio" name="onboard_computer" value="yes" id="onboard_computer" required> Yes
                                    &nbsp; &nbsp;
                                    <input type="radio" name="onboard_computer" value="no" id="onboard_computer" required> No
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Remote central locking</label>
                            <div>
                                <div>
                                    &nbsp; &nbsp;
                                    <input type="radio" name="remote_central_locking" value="yes" id="remote_central_locking" required> Yes
                                    &nbsp; &nbsp;
                                    <input type="radio" name="remote_central_locking" value="no" id="remote_central_locking" required> No
                                </div>
                            </div>
                        </div>

                        <input type="submit" name="submit" id="submit" class="btn btn-warning mr-2">
                        <button class="btn btn-dark">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">CAR DETAILS</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <!-- <th>Car Brand</th> -->
                                    <!-- <th>Car Name</th> -->
                                    <th>Car Model Name</th>
                                    <th>Number Plate</th>
                                    <th>Total Seats</th>
                                    <th>Child Seat</th>
                                    <th>Fuel Type</th>
                                    <th>Price Per Day</th>
                                    <th>Sun Roof</th>
                                    <th>Mileage</th>
                                    <th>Transmission</th>
                                    <th>GPS</th>
                                    <th>Music</th>
                                    <th>Onboard computer</th>
                                    <th>Remote central locking</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                // $q = mysqli_query($con, "select cmm.*,cd.*,bm.*,cm.* from brandmaster bm, carmaster cm, carmodel cmm, cardetail cd  where bm.brand_id=cm.brand_id and cm.car_id=cmm.car_id and cmm.carmodel_id=cd.carmodel_id");
                                $q = mysqli_query($con, "select cmm.*,cd.* from carmodel cmm, cardetail cd where cmm.carmodel_id=cd.carmodel_id");

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
                                        <!-- <td> <?php echo $row['brand_name']; ?></td> -->
                                        <!-- <td> <?php echo $row['car_name']; ?></td> -->
                                        <td> <?php echo $row['carmodel_name']; ?></td>
                                        <td> <?php echo $row['number_plate']; ?></td>
                                        <td> <?php echo $row['seats']; ?></td>
                                        <td> <?php echo $row['child_seat']; ?></td>
                                        <td> <?php echo $row['fuel_type']; ?></td>
                                        <td> <?php echo "&#8377 $row[price_day]"; ?></td>
                                        <td> <?php echo $row['sunroof']; ?></td>
                                        <td> <?php echo $row['mileage']; ?></td>
                                        <td> <?php echo $row['transmission']; ?></td>
                                        <td> <?php echo $row['gps']; ?></td>
                                        <td> <?php echo $row['music']; ?></td>
                                        <td> <?php echo $row['onboard_computer']; ?></td>
                                        <td> <?php echo $row['remote_central_locking']; ?></td>
                                        <td>
                                            <div class="hidden-sm hidden-xs btn-group">
                                                <a onclick="edit(<?php echo $row['cardetail_id']; ?>)">
                                                    <image src=images/edit.png height=30 width=30>
                                                </a>
                                                &nbsp;
                                                <a onclick="del(<?php echo $row['cardetail_id']; ?>)">
                                                    <image src=images/delete.png height=30 width=30>
                                                </a>
                                            </div>
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

    <script>
        function edit(cardetail_id) {
            if (confirm("Are you sure want to Edit ?")) {
                window.location.href = 'cardetailedit.php?cardetail_id=' + cardetail_id + '';
                //return true;
            }
        }

        function del(cardetail_id) {
            if (confirm("Are you sure want to Delete ?")) {
                window.location.href = 'cardetaildelete.php?cardetail_id=' + cardetail_id + '';
                return true;
            }
        }
    </script>
</body>

</html>

<?php
include("fff.php");
?>