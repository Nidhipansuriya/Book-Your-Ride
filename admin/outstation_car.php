<?php
include("hhh.php");
// error_reporting(1);
?>

<html>

<body>


    <?php

    $con = mysqli_connect("localhost", "root", "", "byr");

    if (isset($_POST['submit'])) {
        $outstat_car_name = $_POST['outstat_car_name'];
        $number_plate = $_POST['number_plate'];
   
       
        //$brand_logo=$_POST['brand_logo'];

        $file_name = $_FILES["outstat_car_photo"]["name"];
        $file_temp = $_FILES["outstat_car_photo"]["tmp_name"];

        $seats = $_POST['seats'];
        $price_day = $_POST['price_day'];


        $q = mysqli_query($con, "insert into outstation_car values('','$outstat_car_name','$number_plate','$file_name',$seats,$price_day,0)");
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
                    <h4 class="card-title">OUTSTATION CARS</h4>

                    <form class="forms-sample" name="outstation cars" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Outstation Car Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="outstat_car_name" id="outstat_car_name" placeholder="Outstation Car Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Number Plate</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="number_plate" id="number_plate" placeholder="Number Plate" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Photo</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="outstat_car_photo" id="outstat_car_photo" placeholder="" height=100 width=100 required>
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Seats</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="seats" id="seats" placeholder="Seats" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Price Per Day</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="price_day" id="price_day" placeholder="Price Per Day" required>
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
                    <h4 class="card-title">Outstation Cars</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <th>Outstation Car Name</th>
                                    <th>Number Plat
                                    <th>Photo</th></th>
                                    <th>Seats</th>
                                    <th>Price Per Day </th> 
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                $q = mysqli_query($con, "select * from outstation_car");
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
                                        <td> <?php echo $row['outstat_car_name']; ?></td>
                                        <td> <?php echo $row['number_plate']; ?></td>
                                        <td><?php echo "<image src='images/$row[outstat_car_photo]' height=100 width=100 >"; ?></td>

                                        <td> <?php echo $row['seats']; ?></td>
                                        <td> <?php echo "&#8377 $row[price_day]"; ?></td>
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
        function edit(outstat_car_id) {
            if (confirm("Are you sure want to Edit ?")) {
                window.location.href = 'outstation_car_edit.php?outstat_car_id=' + outstat_car_id + '';
                //return true;
            }
        }

        function del(outstat_car_id) {
            if (confirm("Are you sure want to Delete ?")) {
                window.location.href = 'outstation_car_delete.php?outstat_car_id=' + outstat_car_id + '';
                return true;
            }
        }
    </script>



    <?php
    include("fff.php");
    ?>