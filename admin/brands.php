<?php
include("hhh.php");
error_reporting(1);
?>

<html>

<body>


    <?php

    $con = mysqli_connect("localhost", "root", "", "byr");

    if (isset($_POST['submit'])) {
        $brand_name = $_POST['brand_name'];
        //$brand_logo=$_POST['brand_logo'];

        $file_name = $_FILES["brand_logo"]["name"];
        $file_temp = $_FILES["brand_logo"]["tmp_name"];


        $q = mysqli_query($con, "insert into brandmaster values('','$brand_name','$file_name')");

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
                    <h4 class="card-title">CAR BRAND DETAILS</h4>

                    <form class="forms-sample" name="brands" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Brand Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Brand Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Logo Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="brand_logo" id="brand_logo" placeholder="Brand Logo" height=100 width=100 required>
                            </div>
                        </div>
                        <input type="submit" name="submit" id="submit" class="btn btn-warning mr-2">
                        <button class="btn btn-dark">Reset</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BRANDS</h4>
                    <div class="table-responsive">
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
                                $q = mysqli_query($con, "select * from brandmaster");
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
                                        <td> <?php echo $row['brand_name']; ?></td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        function edit(brand_id) {
            if (confirm("Are you sure want to Edit ?")) {
                window.location.href = 'brandsedit.php?brand_id=' + brand_id + '';
                //return true;
            }
        }

        function del(brand_id) {
            if (confirm("Are you sure want to Delete ?")) {
                window.location.href = 'brandsdelete.php?brand_id=' + brand_id + '';
                return true;
            }
        }
    </script>
    <?php
    include("fff.php");
    ?>