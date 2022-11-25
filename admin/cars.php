<?php
include("hhh.php");
error_reporting(1);
?>

<html>

<body>


    <?php
    $con = mysqli_connect("localhost", "root", "", "byr");
    if (isset($_POST['submit'])) {
        $brand_id = $_POST['brand_id'];
        $car_name = $_POST['car_name'];
        //$car_images=$_POST['car_images'];

        $file_name = $_FILES["car_images"]["name"];
        $file_temp = $_FILES["car_images"]["tmp_name"];

        $q = mysqli_query($con, "insert into carmaster values('',$brand_id,'$car_name','$file_name')");
        // echo "insert into carmaster values('',$brand_id,'$car_name','$file_name')";

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
                    <h4 class="card-title">CARS</h4>

                    <form class="forms-sample" name="cars" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Brand Name</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" name="car_name" id="car_name" placeholder="Brand Name"> -->
                                <select name="brand_id" id="brand_id" class="col-sm-12 btn btn-outline-secondary dropdown-toggle" required>
                                    <?php
                                    $q = mysqli_query($con, "select * from brandmaster");
                                    while ($row = mysqli_fetch_array($q)) {
                                        echo "<option value=$row[0]>$row[1]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Car Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="car_name" id="car_name" placeholder="Enter Car Name" height=100 width=100 required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Car Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="car_images" id="car_images" placeholder="Brand Logo" height=100 width=100 required>
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
                    <h4 class="card-title">CARS</h4>

                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <th>Brand Name</th>
                                    <th>Car Name</th>
                                    <th>Car Logo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                $q = mysqli_query($con, "select bm.*,cm.* from brandmaster bm, carmaster cm where bm.brand_id=cm.brand_id");
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
                                        <td> <?php echo $row['brand_name']; ?> </td>
                                        <td> <?php echo $row['car_name']; ?></td>
                                        <td><?php echo "<image src='images/$row[car_images]' height=600 width=600>"; ?></td>
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
            function edit(car_id) {
                if (confirm("Are you sure want to Edit ?")) {
                    window.location.href = 'carsedit.php?car_id=' + car_id + '';
                    //return true;
                }
            }

            function del(car_id) {
                if (confirm("Are you sure want to Delete ?")) {
                    window.location.href = 'carsdelete.php?car_id=' + car_id + '';
                    return true;
                }
            }
        </script>
</body>
</html>
<?php
include("fff.php");
?>