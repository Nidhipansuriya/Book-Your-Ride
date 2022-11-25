<?php
include("hhh.php");
// error_reporting(1);
?>
<?php
include('connection.php');

$city_id = $_GET['city_id'];

$q = mysqli_query($con, "select * from city_master where city_id=$city_id");
$row = mysqli_fetch_array($q);
?>





<div align=center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">CITY UPDATE</h4>
                <form class="forms-sample" method="POST" action="" enctype="multipart/form-data" name="city">

                    
                  


                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">City Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php
                                                                            $q = mysqli_query($con, "select * from city_master where city_id=$city_id");
                                                                            $row = mysqli_fetch_array($q);
                                                                            echo $row['city_name']; ?>" name="city_name" id="city_name" required>
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
    $city_id = $_GET['city_id'];
    // $id = $_POST['id'];
    $city_name = $_POST['city_name'];

    //$car_images=$_POST['car_images'];

    // $q = mysqli_query($con, "update city_master set id=$id, city_name='$city_name' where city_id=$city_id");
    $q = mysqli_query($con, "update city_master set  city_name='$city_name' where city_id=$city_id");
    // $row=mysqli_fetch_array($q);

    if ($q) {
      
        echo "<script>alert('Updated......');</script>";
        echo "<script>window.location.assign('city.php');</script>";
    } else {
        echo "<script>alert('Your Changes are Not Upgraded.');</script>";
    }
}
?>


<?php
include("fff.php");
?>