<?php
include("hhh.php");
error_reporting(1);
?>

<?php
$whyid = $_GET['whyid'];
include('connection.php');

$q = mysqli_query($con, "select * from whybook where whyid=$whyid");
$row = mysqli_fetch_array($q);
?>

<div align=center>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">UPDATE WHY BOOK YOUR RIDE</h4>

                <form class="forms-sample" name="whybook" method="POST" enctype="multipart/form-data">


                <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Heading</label>
                            <div class="col-sm-9">
                                <input type="text" name="heading" id="heading" value="<?php echo $row['heading'];?>"  class="form-control" required> 
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                        <input type="text" name="description" id="description" value="<?php echo $row['description'];?>"  class="form-control" required> 
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Old Photo</label>
                        <div class="col-sm-2">
                            <image src='images/<?php echo $row['photo']; ?>' height=100 width=100 required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">New Photo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="photo" id="brand_logo" placeholder="Brand Logo" required>
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
   
                        $heading=$_POST['heading'];
                        $description = $_POST['description'];
                      
                        $file_name = $_FILES["photo"]["name"];
                        $file_temp = $_FILES["photo"]["tmp_name"];
                      //  $brand_logo=$_POST['brand_logo'];
                        if($file_name=='')
                        {
                            
                            $file_name=$row['photo'];
                        }
                        else
                        {
                            $file_name = $_FILES["photo"]["name"];
                            $file_temp = $_FILES["photo"]["tmp_name"];
                        }
                        $q=mysqli_query($con,"update whybook set heading='$heading',description='$description',photo='$file_name' where whyid='$whyid'");
                        // $row=mysqli_fetch_array($q);

                        if($q)
                        {
                            move_uploaded_file($file_temp, "images/" . $file_name);
                            //header('location:service_master.php');
                            echo "<script>window.location.assign('whybook.php');</script>";
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