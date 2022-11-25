<?php
include("hhh.php");
error_reporting(1);
?>

<?php
$brand_id = $_GET['brand_id'];
include('connection.php');

$q = mysqli_query($con, "select * from brandmaster where brand_id=$brand_id");
$row = mysqli_fetch_array($q);
?>

<div align=center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">UPDATE CAR BRAND DETAILS</h4>

                <form class="forms-sample" name="brands" method="POST" enctype="multipart/form-data">


                <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Brand Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="brand_name" id="brand_name" value="<?php echo $row['brand_name'];?>"  class="form-control" required> 
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Old Logo</label>
                        <div class="col-sm-2">
                            <image src='images/<?php echo $row['brand_logo']; ?>' height=100 width=100 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">New Logo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="brand_logo" id="brand_logo" placeholder="Brand Logo" required>
                        </div>
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn btn-warning mr-2">
                    <button class="btn btn-dark">Reset</button>
                </form>
            </div>
        </div>
    </div>

    <?php
                    if(isset($_POST["submit"]))
                    {
   
                        $brand_name=$_POST['brand_name'];
                      
                        $file_name = $_FILES["brand_logo"]["name"];
                        $file_temp = $_FILES["brand_logo"]["tmp_name"];
                      //  $brand_logo=$_POST['brand_logo'];
                        if($file_name=='')
                        {
                            
                            $file_name=$row['brand_logo'];
                        }
                        else
                        {
                            $file_name = $_FILES["brand_logo"]["name"];
                            $file_temp = $_FILES["brand_logo"]["tmp_name"];
                        }
                        $q=mysqli_query($con,"update brandmaster set brand_name='$brand_name',brand_logo='$file_name' where brand_id='$brand_id'");
                        // $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            move_uploaded_file($file_temp, "images/" . $file_name);
                            //header('location:service_master.php');
                            echo "<script>window.location.assign('brands.php');</script>";
                        }
                        else
                        {
                            echo "<script>alert('Your Changes are Not Upgraded.');</script>";
                        }
                    }
                ?>

    <?php
    include("fff.php");
    error_reporting(1);
    ?>