<?php
include("hhh.php");
// error_reporting(1);
?>
<?php
include('connection.php');

$car_id = $_GET['car_id'];

$q = mysqli_query($con, "select * from carmaster where car_id=$car_id");
$row = mysqli_fetch_array($q);
?>





<div align=center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">CARS UPDATE</h4>
                <form class="forms-sample" method="POST" action="" enctype="multipart/form-data" name="cars">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Brand Name</label>
                        <select class="col-sm-9" name="brand_id" id="brand_id" class="col-sm-12 btn btn-outline-secondary dropdown-toggle" required>
                            <?php
                            $q = mysqli_query($con, "select * from brandmaster");
                            while ($row = mysqli_fetch_array($q)) {
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Car Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php 
                            $q = mysqli_query($con, "select * from carmaster where car_id=$car_id");
                            $row = mysqli_fetch_array($q);
                            echo $row['car_name'];?>" name="car_name" id="car_name" required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Old Car Image</label>
                        <div class="col-sm-9">
                            <image src='images/<?php echo $row['car_images'];?>' height=100 width=100 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">New Car Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="car_images" id="car_images" placeholder="Brand Logo" required>
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
    $car_id = $_GET['car_id'];
    $brand_id = $_POST['brand_id'];
    $car_name = $_POST['car_name'];
    //$car_images=$_POST['car_images'];

    $file_name = $_FILES["car_images"]["name"];
    $file_temp = $_FILES["car_images"]["tmp_name"];

    if ($file_name == '') {

        $file_name = $row['car_images'];
    } else {
        $file_name = $_FILES["car_images"]["name"];
        $file_temp = $_FILES["car_images"]["tmp_name"];
    }

    $q = mysqli_query($con, "update carmaster set brand_id=$brand_id, car_name='$car_name',car_images='$file_name' where car_id=$car_id");
    // echo "insert into carmaster values('',$brand_id,'$car_name','$file_name')";
    // $row=mysqli_fetch_array($q);
    if ($q) {
        move_uploaded_file($file_temp, "images/" . $file_name);
        echo "<script>alert('Your Changes are Upgarded.');</script>";
        echo "<script>window.location.assign('cars.php');</script>";
    } else {
        echo "<script>alert('Your Changes are Not Upgraded.');</script>";
    }
}
?>


<?php
include("fff.php");
?>