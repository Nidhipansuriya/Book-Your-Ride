<?php
include('hhh.php');
error_reporting(1);
?>

<html>
<body>


    <?php

    $con = mysqli_connect("localhost", "root", "", "byr");

    if (isset($_POST['submit'])) {
        $bikebrand_name = $_POST['bikebrand_name'];
        //$brand_logo=$_POST['brand_logo'];

        $file_name = $_FILES["bikebrand_photo"]["name"];
        $file_temp = $_FILES["bikebrand_photo"]["tmp_name"];


        $q = mysqli_query($con, "insert into bikebrandmaster values('','$bikebrand_name','$file_name')");
        // echo "insert into bikebrandmaster values('','$bikebrand_name','$file_name')";
        if ($q) {
            move_uploaded_file($file_temp, "images/" . $file_name);
            echo "<script>alert('Data entered successfully!!');</script>";
        } else {
            echo "<script>alert('Oops!! There might be something wrong.');</script>";
        }
    }

    ?>

    <div align=center>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BIKE BRAND DETAILS</h4>

                    <form class="forms-sample" name="brands" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bike Brand Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="bikebrand_name" id="bikebrand_name" placeholder="BikeBrand Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Bike brand Photo </label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="bikebrand_photo" id="bikebrand_photo" placeholder="Brand Photo" height=100 width=100 required>
                            </div>
                        </div>
                        <input type="submit" name="submit" id="submit" class="btn btn-warning mr-2">
                        <button class="btn btn-dark">Reset</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
  
                          <h4 align=center>BIKE BRANDS</h4>

                    
                 
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <th>Brand Name</th>
                                    <th>Brand Logo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                $q = mysqli_query($con, "select * from bikebrandmaster");
                                $i = 1;
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                    <tr>
                                        <!-- <td class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </td> -->
                                        <td><?php echo $i;
                                            $i++; ?></td>
                                        <td> <?php echo $row['bikebrand_name']; ?></td>
                                        <td><?php echo "<image src='images/$row[2]' height=100 width=100 >"; ?></td>
                                        <td>
                                            <div class="hidden-sm hidden-xs btn-group">
                                                <a onclick="edit(<?php echo $row[0]; ?>)">
                                                    <image src=images/edit.png height=30 width=30>
                                                </a>
                                                &nbsp;
                                                <a onclick="del(<?php echo $row[0]; ?>)">
                                                    <image src=images/delete.png height=30 width=30>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
           
           
            
        

        <script>
            function edit(bikebrand_id) {
                if (confirm("Are you sure want to Edit ?")) {
                    window.location.href = 'bikebrandedit.php?bikebrand_id=' + bikebrand_id + '';
                    //return true;
                }
            }

            function del(bikebrand_id) {
                if (confirm("Are you sure want to Delete ?")) {
                    window.location.href = 'bikebranddelete.php?bikebrand_id=' + bikebrand_id + '';
                    return true;
                }
            }
        </script>










<?php
include('fff.php');
// error_reporting(1);
?>