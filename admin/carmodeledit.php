<?php
include("hhh.php");
// error_reporting(1);
?>


<?php
$carmodel_id = $_GET['carmodel_id'];
include('connection.php');

$q = mysqli_query($con, "select * from carmodel where carmodel_id=$carmodel_id");
$row = mysqli_fetch_array($q);
?>


<div align=center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">CAR MODEL UPDATE</h4>
                <form class="forms-sample" method="POST" action="" enctype="multipart/form-data" name="carmodel">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Car Model Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="carmodel_name" id="carmodel_name" value="<?php echo $row['carmodel_name']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Old Car Model Image</label>
                        <div class="col-sm-9">
                            <image src='images/<?php echo $row['photo']; ?>' height=100 width=100 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">New Car Model Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="photo" id="photo" placeholder="Car Model Logo" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Old Car Interior Image</label>
                        <div class="col-sm-9">
                            <image src='images/<?php echo $row['interior_photo']; ?>' height=100 width=100 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">New Car Interior Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="interior_photo" id="interior_photo" placeholder="Car Model Logo" required>
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
if (isset($_POST["submit"])) {
    // $carmodel_id=$_POST['carmodel_id'];
    // $car_id=$_POST['car_id'];
    $carmodel_name = $_POST['carmodel_name'];

    $file_name = $_FILES["photo"]["name"];
    $file_temp = $_FILES["photo"]["tmp_name"];

    // $carmodel_year = $_POST['carmodel_year'];

    if ($file_name == '') {
        $file_name = $row['photo'];
    } else {
        $file_name = $_FILES["photo"]["name"];
        $file_temp = $_FILES["photo"]["tmp_name"];
    }

    $file_name1 = $_FILES["interior_photo"]["name"];
    $file_temp1 = $_FILES["interior_photo"]["tmp_name"];

    if ($file_name1 == '') {
        $file_name1 = $row['interior_photo'];
    } else {
        $file_name1 = $_FILES["interior_photo"]["name"];
        $file_temp1 = $_FILES["interior_photo"]["tmp_name"];
    }

    // $q=mysqli_query($con,"update carmodel set carmodel_name='$carmodel_name',photo='$file_name',carmodel_year='$carmodel_year' where carmodel_id=$carmodel_id");
    // echo "update carmodel set carmodel_name='$carmodel_name',photo='$file_name',carmodel_year=$carmodel_year where carmodel_id=$carmodel_id";

    $q = mysqli_query($con, "UPDATE `carmodel` SET `carmodel_name`='$carmodel_name',`photo`='$file_name',`interior_photo`='$file_name1'WHERE `carmodel_id`='$carmodel_id'");
    // $q=mysqli_query($con,"UPDATE `carmodel` SET `carmodel_name`='$carmodel_name'WHERE `carmodel_id`='$carmodel_id'");
    // echo"UPDATE `carmodel` SET `carmodel_name`='$carmodel_name'WHERE `carmodel_id`='$carmodel_id'";


    if ($q) {
        move_uploaded_file($file_temp, "images/" . $file_name);
        move_uploaded_file($file_temp1, "images/" . $file_name1);
        //header('location:service_master.php');
        echo "<script>window.location.assign('carmodel.php');</script>";
    } else {
        echo "<script>alert('Your Changes are Not Upgraded.');</script>";
    }
}
?>




<?php
include("fff.php");
error_reporting(1);
?>