<?php
include("hhh.php");
// error_reporting(1);
?>

<?php
$kaali_peeli_id = $_GET['kaali_peeli_id'];
include('connection.php');

$q = mysqli_query($con, "select * from kaali_peeli where kaali_peeli_id=$kaali_peeli_id");
$row = mysqli_fetch_array($q);
?>

<div align=center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">UPDATE KAALI PEELI</h4>

                <form class="forms-sample" name="kaali_peeli" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Car Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="car_name" id="car_name" value="<?php echo $row['car_name']; ?>" placeholder="Car Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Number Plate</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="number_plate" id="number_plate" value="<?php echo $row['number_plate']; ?>" placeholder="Car Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Seats</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="seats" id="seats" value="<?php echo $row['seats']; ?>" placeholder="Seats" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Price Per KM</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="price_km" id="price_km" value="<?php echo $row['price_km']; ?>" placeholder="Seats" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Old Photo</label>
                        <div class="col-sm-2">
                            <image src='images/<?php echo $row['photo']; ?>' height=100 width=100 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Photo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="photo" id="photo" placeholder="Brand Logo" height=100 width=100 required>
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

        $car_name = $_POST['car_name'];
        $number_plate = $_POST['number_plate'];
        $seats = $_POST['seats'];
        $price_km = $_POST['price_km'];
        //$brand_logo=$_POST['brand_logo'];

        $file_name = $_FILES["photo"]["name"];
        $file_temp = $_FILES["photo"]["tmp_name"];

        //  $brand_logo=$_POST['brand_logo'];
        if ($file_name == '') 
        {

            $file_name = $row['photo'];
        } else {
            $file_name = $_FILES["photo"]["name"];
            $file_temp = $_FILES["photo"]["tmp_name"];
        }
        $q = mysqli_query($con, "update kaali_peeli set car_name='$car_name', number_plate='$number_plate' , seats=$seats, price_km=$price_km, photo='$file_name' where kaali_peeli_id=$kaali_peeli_id");
        // echo "update kaali_peeli set car_name='$car_name', seats=$seats, photo='$file_name' where kaali_peeli_id=$kaali_peeli_id";
        // $row=mysqli_fetch_array($q);

        if ($q) {
            move_uploaded_file($file_temp, "images/" . $file_name);
            //header('location:service_master.php');
            echo "<script>window.location.assign('kaali_peeli.php');</script>";
        } else {
            echo "<script>alert('Your Changes are Not Upgraded.');</script>";
        }
    }
    ?>

    <?php
    include("fff.php");
    // error_reporting(1);
    ?>