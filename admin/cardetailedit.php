<?php
include("hhh.php");
// error_reporting(1);
?>


<?php
$cardetail_id = $_GET["cardetail_id"];

include('connection.php');

$q = mysqli_query($con, "select * from cardetail where cardetail_id=$cardetail_id");
$row = mysqli_fetch_array($q);
?>




<div align=center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">CAR DETAILS EDIT</h4>

                <form class="forms-sample" name="cardetails" method="POST" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Number Plate</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="number_plate" id="number_plate" value="<?php echo $row['number_plate']; ?>" height=100 width=100 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Seats</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="seats" id="seats" value="<?php echo $row['seats']; ?>" height=100 width=100 required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Child Seat</label>
                        <!-- <div>
                                &nbsp; &nbsp;
                                <input type="radio" name="child_seat" value="yes" id="child_seat" required> Yes
                                &nbsp; &nbsp;
                                <input type="radio" name="child_seat" value="no" id="child_seat" required> No
                            </div> -->
                        <div>
                            &nbsp; &nbsp;
                            <input type="radio" name="child_seat" value="yes" id="child_seat" <?php if ($row['child_seat'] == "yes") {
                                                                                                    echo "checked";
                                                                                                } ?> required> Yes

                            &nbsp; &nbsp;
                            <input type="radio" name="child_seat" value="no" id="child_seat" <?php if ($row['child_seat'] == "no") {
                                                                                                    echo "checked";
                                                                                                } ?> required> No
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Fuel Type</label>
                        <div class="col-sm-9">
                            <!-- <select class="col-sm-12 btn btn-outline-secondary dropdown-toggle" name="fuel_type" id="fuel_type" title="Select Fuel Type" required>
                                    <option value="petrol">Petrol</option>
                                    <option value="diesel">Diesel</option>
                                    <option value="CNG">CNG</option>
                                </select> -->
                            <select class="col-sm-12 btn btn-outline-secondary dropdown-toggle" name="fuel_type" id="fuel_type" title="Select Fuel Type" required>
                                <option value="petrol" <?php if ($row['fuel_type'] == "petrol") {
                                                            echo "selected";
                                                        } ?>>Petrol</option>
                                <option value="diesel" <?php if ($row['fuel_type'] == "diesel") {
                                                            echo "selected";
                                                        } ?>>Diesel</option>
                                <option value="CNG" <?php if ($row['fuel_type'] == "CNG") {
                                                        echo "selected";
                                                    } ?>>CNG</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Price Per Km</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="price_day" id="price_day
                            " value="<?php echo $row['price_day']; ?>" required>

                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Sun Roof</label>
                        <div>
                            &nbsp; &nbsp;
                            <input type="radio" name="sunroof" value="yes" id="sunroof" <?php if ($row['sunroof'] == "yes") {
                                                                                            echo "checked";
                                                                                        } ?> required> Yes

                            &nbsp; &nbsp;
                            <input type="radio" name="sunroof" value="no" id="sunroof" <?php if ($row['sunroof'] == "no") {
                                                                                            echo "checked";
                                                                                        } ?> required> No
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Mileage</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mileage" id="mileage" value="<?php echo $row['mileage']; ?>" height=100 width=100 required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Transmission</label>
                        <div class="col-sm-9">

                            <select class="col-sm-12 btn btn-outline-secondary dropdown-toggle" name="transmission" id="transmission" title="Select Transmission Type" required>
                                <option value="auto" <?php if ($row['transmission'] == "auto") {
                                                            echo "selected";
                                                        } ?>>Auto</option>
                                <option value="manual" <?php if ($row['transmission'] == "manual") {
                                                            echo "selected";
                                                        } ?>>Manual</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">GPS</label>
                        <div>

                            <div>
                                &nbsp; &nbsp;
                                <input type="radio" name="gps" value="yes" id="gps" <?php if ($row['gps'] == "yes") {
                                                                                        echo "checked";
                                                                                    } ?> required> Yes

                                &nbsp; &nbsp;
                                <input type="radio" name="gps" value="no" id="gps" <?php if ($row['gps'] == "no") {
                                                                                        echo "checked";
                                                                                    } ?> required> No
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Music</label>
                        <div>
                            <div>
                                &nbsp; &nbsp;
                                <input type="radio" name="music" value="yes" id="music" <?php if ($row['music'] == "yes") {
                                                                                            echo "checked";
                                                                                        } ?> required> Yes

                                &nbsp; &nbsp;
                                <input type="radio" name="music" value="no" id="music" <?php if ($row['music'] == "no") {
                                                                                            echo "checked";
                                                                                        } ?> required> No
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Onboard computer</label>
                        <div>
                            <div>
                                &nbsp; &nbsp;
                                <input type="radio" name="onboard_computer" value="yes" id="onboard_computer" <?php if ($row['onboard_computer'] == "yes") {
                                                                                                                    echo "checked";
                                                                                                                } ?> required> Yes

                                &nbsp; &nbsp;
                                <input type="radio" name="onboard_computer" value="no" id="onboard_computer" <?php if ($row['onboard_computer'] == "no") {
                                                                                                                    echo "checked";
                                                                                                                } ?> required> No
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Remote central locking</label>
                        <div>
                            <div>
                                &nbsp; &nbsp;
                                <input type="radio" name="remote_central_locking" value="yes" id="remote_central_locking" <?php if ($row['remote_central_locking'] == "yes") {
                                                                                                                                echo "checked";
                                                                                                                            } ?> required> Yes

                                &nbsp; &nbsp;
                                <input type="radio" name="remote_central_locking" value="no" id="remote_central_locking" <?php if ($row['remote_central_locking'] == "no") {
                                                                                                                                echo "checked";
                                                                                                                            } ?> required> No
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

<?php
if (isset($_POST['submit'])) {
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


    // $q = mysqli_query($con, "update carmaster set brand_id=$brand_id, car_name='$car_name',car_images='$file_name' where car_id=$car_id");
    $q = mysqli_query($con, "update cardetail set number_plate='$number_plate',seats=$seats,child_seat='$child_seat',fuel_type='$fuel_type',price_day=$price_day,sunroof='$sunroof',mileage=$mileage,transmission='$transmission',gps='$gps',music='$music',onboard_computer='$onboard_computer',remote_central_locking='$remote_central_locking'  where cardetail_id='$cardetail_id'");
    echo "update cardetail set number_plate='$number_plate' seats=$seats,child_seat='$child_seat',fuel_type='$fuel_type',price_day=$price_day,sunroof='$sunroof',mileage=$mileage,transmission='$transmission',gps='$gps',music='$music',onboard_computer='$onboard_computer',remote_central_locking='$remote_central_locking'";

    if ($q) {

        echo "<script>alert('Your Changes are Upgarded.');</script>";
        echo "<script>window.location.assign('cardetail.php');</script>";
    } else {
        echo "<script>alert('Your Changes are Not Upgraded.');</script>";
    }
}
?>


<?php
include("fff.php");
?>