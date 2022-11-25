<?php
include("hhh.php");
// error_reporting(1);
?>

<html>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "byr");

    if (isset($_POST['submit'])) {
        $bikebrand_id = $_POST['bikebrand_id'];
        $bike_name = $_POST['bike_name'];
        //$car_images=$_POST['car_images'];

        $file_name = $_FILES["bike_photo"]["name"];
        $file_temp = $_FILES["bike_photo"]["tmp_name"];

        $number_plate = $_POST['number_plate'];
        $price_day = $_POST['price_day'];

        $q = mysqli_query($con, "insert into bikemaster values('',$bikebrand_id,'$bike_name','$file_name','$number_plate',$price_day,0)");
        //  echo "insert into bikemaster values('',$bikebrand_id,'$bike_name','$file_name','$number_plate',$price_day,0)";
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
                    <h4 class="card-title">BIKES</h4>

                    <form class="forms-sample" name="bikes" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bike Brand Name</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" name="car_name" id="car_name" placeholder="Brand Name"> -->
                                <select name="bikebrand_id" id="bikebrand_id" class="col-sm-12 btn btn-outline-secondary dropdown-toggle" required>
                                    <?php
                                    $q = mysqli_query($con, "select * from bikebrandmaster");
                                    while ($row = mysqli_fetch_array($q)) {
                                        echo "<option value=$row[0]>$row[1]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Bike Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="bike_name" id="bike_name" placeholder="Enter Bike Name" height=100 width=100 required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Bike Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="bike_photo" id="bike_photo" placeholder="Brand Logo" height=100 width=100 required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Number Plate</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="number_plate" id="number_plate" placeholder="Number Plate" height=100 width=100 required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Price Per Day</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="price_day" id="price_day" placeholder="Price Per Day" height=100 width=100 required>
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
                    <h4 class="card-title">BIKES</h4>

                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <th>Brand Name</th>
                                    <th>Bike Name</th>
                                    <th>Bike Photo</th>
                                    <th>Numbet Plate</th>
                                    <th>Price Per Day </th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                $q = mysqli_query($con, "select bbm.*,bm.* from bikebrandmaster bbm, bikemaster bm where bbm.bikebrand_id=bm.bikebrand_id");
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
                                        <td> <?php echo $row['bike_name']; ?></td>
                                        <td><?php echo "<image src='images/$row[bike_photo]' height=600 width=600>"; ?></td>
                                        <td> <?php echo $row['number_plate']; ?></td>
                                        <td> <?php echo "&#8377 $row[price_day]"; ?></td>

                                        <td>
                                            <div class="hidden-sm hidden-xs btn-group">
                                                <a onclick="edit(<?php echo $row[3]; ?>)">
                                                    <image src=images/edit.png height=30 width=30>
                                                </a>
                                                &nbsp;
                                                <a onclick="del(<?php echo $row[3]; ?>)">
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

        <script>
            function edit(bike_id) {
                if (confirm("Are you sure want to Edit ?")) {
                    window.location.href = 'bikeedit.php?bike_id=' + bike_id + '';
                    //return true;
                }
            }

            function del(bike_id) {
                if (confirm("Are you sure want to Delete ?")) {
                    window.location.href = 'bikedelete.php?bike_id=' + bike_id + '';
                    return true;
                }
            }
        </script>
</body>
</html>
<?php
include("fff.php");
?>