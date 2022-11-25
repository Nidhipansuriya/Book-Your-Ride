<?php
include("hhh.php");
// error_reporting(1);
?>


<?php
include('connection.php');
?>

<?php
$bike_id = $_GET['bike_id'];

$q = mysqli_query($con, "select * from bikemaster where bike_id=$bike_id");
$row = mysqli_fetch_array($q);
?>

<?php
if (isset($_POST['submit'])) {
    $bike_id = $_GET['bike_id'];
    $bikebrand_id = $_POST['bikebrand_id'];
    $bike_name = $_POST['bike_name'];
    //$car_images=$_POST['car_images'];

    $file_name = $_FILES["bike_photo"]["name"];
    $file_temp = $_FILES["bike_photo"]["tmp_name"];

    if ($file_name == '') {

        $file_name = $row['bike_photo'];
    } else {
        $file_name = $_FILES["bike_photo"]["name"];
        $file_temp = $_FILES["bike_photo"]["tmp_name"];
    }

    $number_plate = $_POST['number_plate'];
    $price_day = $_POST['price_day'];

    $q = mysqli_query($con, "update bikemaster set bikebrand_id=$bikebrand_id, bike_name='$bike_name',bike_photo='$file_name',number_plate='$number_plate',price_day='$price_day' where bike_id=$bike_id");
    // echo "insert into carmaster values('',$brand_id,'$car_name','$file_name')";
    // $row=mysqli_fetch_array($q);
    if ($q) {
        move_uploaded_file($file_temp, "images/" . $file_name);
        echo "<script>alert('Your Changes are Upgarded.');</script>";
        echo "<script>window.location.assign('bike.php');</script>";
    } else {
        echo "<script>alert('Your Changes are Not Upgraded.');</script>";
    }
}
?>



<div align=center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">BIKES UPDATE</h4>
                <form class="forms-sample" method="POST" action="" enctype="multipart/form-data" name="bikes">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bike Brand Name</label>
                        <select class="col-sm-9" name="bikebrand_id" id="bikebrand_id" class="col-sm-12 btn btn-outline-secondary dropdown-toggle">
                            <?php
                            $q = mysqli_query($con, "select * from bikebrandmaster");
                            while ($row = mysqli_fetch_array($q)) {
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bike Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="bike_name" id="bike_name" value="<?php $q = mysqli_query($con, "select * from bikemaster where bike_id=$bike_id");
                                                                                                            $row = mysqli_fetch_array($q);
                                                                                                            echo $row['bike_name']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Old Bike Image</label>
                        <div class="col-sm-9">
                            <image src='images/<?php echo $row['bike_photo']; ?>' height=100 width=100 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">New Bike Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="bike_photo" id="bike_photo" placeholder="Bike Brand Logo" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Number Plate</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="number_plate" id="number_plate" value="<?php $q = mysqli_query($con, "select * from bikemaster where bike_id=$bike_id");
                                                                                                            $row = mysqli_fetch_array($q);
                                                                                                            echo $row['number_plate']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Price Per Day</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="price_day" id="price_day" value="<?php $q = mysqli_query($con, "select * from bikemaster where bike_id=$bike_id");
                                                                                                            $row = mysqli_fetch_array($q);
                                                                                                            echo $row['price_day']; ?>" required>
                        </div>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-warning mr-2">
                    <!-- <button class="btn btn-dark">Reset</button> -->
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include("fff.php");
?>