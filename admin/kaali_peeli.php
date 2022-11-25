<?php
include("hhh.php");
// error_reporting(1);
?>

<html>

<body>


    <?php

    $con = mysqli_connect("localhost", "root", "", "byr");

    if (isset($_POST['submit'])) {
        $car_name = $_POST['car_name'];
        $number_plate = $_POST['number_plate'];
        $seats = $_POST['seats'];
        $price_km = $_POST['price_km'];
       
        //$brand_logo=$_POST['brand_logo'];

        $file_name = $_FILES["photo"]["name"];
        $file_temp = $_FILES["photo"]["tmp_name"];


        $q = mysqli_query($con, "insert into kaali_peeli values('','$car_name','$number_plate',$seats,$price_km,'$file_name',0)");
        // echo "insert into kaali_peeli values('','$car_name',$seats,'$file_name',0)";
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
                    <h4 class="card-title">KAALI PEELI</h4>

                    <form class="forms-sample" name="kaali_peeli" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Car Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="car_name" id="car_name" placeholder="Car Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Number Plate</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="number_plate" id="number_plate" placeholder="Number Plate" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Seats</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="seats" id="seats" placeholder="Seats" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Price Per Km</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="price_km" id="price_km" placeholder="Price Per Km" required>
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

    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">KAALI PEELI</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <th>Car Name</th>
                                    <th>Number Plate</th>
                                    <th>Seats</th>
                                    <th>Price Per Km </th> 
                                    <th>Photo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                $q = mysqli_query($con, "select * from kaali_peeli");
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
                                        <td> <?php echo $row['car_name']; ?></td>
                                        <td> <?php echo $row['number_plate']; ?></td>
                                        <td> <?php echo $row['seats']; ?></td>
                                        <td> <?php echo"&#8377 $row[price_km]"; ?></td>
                                        <td><?php echo "<image src='images/$row[photo]' height=100 width=100 >"; ?></td>
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
        function edit(kaali_peeli_id) {
            if (confirm("Are you sure want to Edit ?")) {
                window.location.href = 'kaali_peeli_edit.php?kaali_peeli_id=' + kaali_peeli_id + '';
                //return true;
            }
        }

        function del(kaali_peeli_id) {
            if (confirm("Are you sure want to Delete ?")) {
                window.location.href = 'kaali_peeli_delete.php?kaali_peeli_id=' + kaali_peeli_id + '';
                return true;
            }
        }
    </script>



    <?php
    include("fff.php");
    ?>