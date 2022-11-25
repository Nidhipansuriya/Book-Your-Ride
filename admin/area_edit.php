<?php
include("hhh.php");
// error_reporting(1);
?>
<?php
include('connection.php');

$area_id = $_GET['area_id'];

$q = mysqli_query($con, "select * from area_master where area_id=$area_id");
$row = mysqli_fetch_array($q);
?>

<div align=center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">AREA UPDATE</h4>
                <form class="forms-sample" method="POST" action="" enctype="multipart/form-data" name="area">

                    
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Driver Name</label>
                        <select class="col-sm-9" name="id" id="id" class="col-sm-12 btn btn-outline-secondary dropdown-toggle">
                            <?php
                            $q = mysqli_query($con, "select * from dregis ");
                            while ($row = mysqli_fetch_array($q)) {
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                            ?>
                        </select>
                    </div>



                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Area Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php
                                                                            $q = mysqli_query($con, "select * from area_master where area_id=$area_id");
                                                                            $row = mysqli_fetch_array($q);
                                                                            echo $row['areaname']; ?>" name="areaname" id="areaname">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Pincode</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php
                                                                            $q = mysqli_query($con, "select * from area_master where area_id=$area_id");
                                                                            $row = mysqli_fetch_array($q);
                                                                            echo $row['pincode']; ?>" name="pincode" id="pincode">
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
    $area_id = $_GET['area_id'];
    $id = $_POST['id'];
    $areaname = $_POST['areaname'];
    $pincode = $_POST['pincode'];
    //$car_images=$_POST['car_images'];

    $q = mysqli_query($con, "update area_master set id=$id, areaname='$areaname',pincode=$pincode where area_id=$area_id");
    echo "update area_master set id=$id, areaname='$areaname',pincode=$pincode where area_id=$area_id";
    // $row=mysqli_fetch_array($q);
    if ($q) {
      
        echo "<script>alert('Your Changes are Upgarded.');</script>";
        echo "<script>window.location.assign('area.php');</script>";
    } else {
        echo "<script>alert('Your Changes are Not Upgraded.');</script>";
    }
}
?>


<?php
include("fff.php");
?>