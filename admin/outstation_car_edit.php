<?php
include("hhh.php");
// error_reporting(1);
?>

<?php
$outstat_car_id = $_GET['outstat_car_id'];
include('connection.php');

$q = mysqli_query($con, "select * from outstation_car where outstat_car_id=$outstat_car_id");
$row = mysqli_fetch_array($q);
?>

<div align=center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">UPDATE OUTSTATION CARS</h4>

                <form class="forms-sample" name="outstation cars" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Outstation Car Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="outstat_car_name" id="outstat_car_name" value="<?php echo $row['outstat_car_name']; ?>" placeholder="Car Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Number Plate</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="number_plate" id="number_plate" value="<?php echo $row['number_plate']; ?>" placeholder="Car Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Old Photo</label>
                        <div class="col-sm-2">
                            <image src='images/<?php echo $row['outstat_car_photo']; ?>' height=100 width=100 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Photo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="outstat_car_photo" id="outstat_car_photo" placeholder="Brand Logo" height=100 width=100 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Seats</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="seats" id="seats" value="<?php echo $row['seats']; ?>" placeholder="Seats" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Price Per Day</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="price_day" id="price_day" value="<?php echo $row['price_day']; ?>" placeholder="Seats" required> 
                        </div>
                    </div>
                   
                    <input type="submit" name="submit" id="submit" class="btn btn-warning mr-2">
                    <button class="btn btn-dark">Reset</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["submit"])) {

        $outstat_car_name = $_POST['outstat_car_name'];
        $number_plate = $_POST['number_plate'];
       
        //$brand_logo=$_POST['brand_logo'];

        $file_name = $_FILES["outstat_car_photo"]["name"];
        $file_temp = $_FILES["outstat_car_photo"]["tmp_name"];

        //  $brand_logo=$_POST['brand_logo'];
        if ($file_name == '') 
        {

            $file_name = $row['outstat_car_photo'];
        } else {
            $file_name = $_FILES["outstat_car_photo"]["name"];
            $file_temp = $_FILES["outstat_car_photo"]["tmp_name"];
        }

        $seats = $_POST['seats'];
        $price_day = $_POST['price_day'];


        $q = mysqli_query($con, "update outstation_car set outstat_car_name='$outstat_car_name', number_plate='$number_plate' , outstat_car_photo='$file_name', seats=$seats, price_day=$price_day  where outstat_car_id=$outstat_car_id");
        echo "update outstation_car set outstat_car_name='$outstat_car_name', number_plate='$number_plate' , outstat_car_photo='$file_name', seats=$seats, price_day=$price_day  where outstat_car_id=$outstat_car_id";
        // echo "update kaali_peeli set car_name='$car_name', seats=$seats, photo='$file_name' where kaali_peeli_id=$kaali_peeli_id";
        // $row=mysqli_fetch_array($q);

        if ($q) {
            move_uploaded_file($file_temp, "images/" . $file_name);
            //header('location:service_master.php');
            echo "<script>window.location.assign('outstation_car.php');</script>";
        } else {
            echo "<script>alert('Your Changes are Not Upgraded.');</script>";
        }
    }
    ?>

    <?php
    include("fff.php");
    // error_reporting(1);
    ?>