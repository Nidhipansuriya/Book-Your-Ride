<?php
include("hhh.php");
// error_reporting(1);
?>
<script language="javascript" type="text/javascript">
    function getXMLHTTP() {
        var xmlhttp = false;
        xmlhttp = new XMLHttpRequest();
        return xmlhttp;
    }

    function getCars(brand_id) {
        var strURL = "findcar.php?brand_id=" + brand_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('car_id').innerHTML = req.responseText;
                }
            }
            req.open("GET", strURL, true);
            req.send();
        }
    }

    // function getCarmodels(car_name) {
    //     var strURL = "findcarmodel.php?car_name=" + car_name;
    //     var req = getXMLHTTP();
    //     if (req) {
    //         req.onreadystatechange = function() {
    //             if (req.readyState == 4 && req.status == 200) {
    //                 document.getElementById('carmodel_id').innerHTML = req.responseText;
    //             }
    //         }
    //         req.open("GET", strURL, true);
    //         req.send();
    //     }
    // }
</script>
    
<html>

<body>


    <?php
    include('connection.php');
    $con = mysqli_connect("localhost", "root", "", "byr");

    if (isset($_POST['submit'])) 
    {
        $brand_id=$_POST['brand_id'];
        $car_id = $_POST['car_id'];
        $carmodel_name = $_POST['carmodel_name'];

        //$car_images=$_POST['car_images'];

        $file_name = $_FILES["photo"]["name"];
        $file_temp = $_FILES["photo"]["tmp_name"];

        //$interior_photo=$_POST['interior_photo'];
        
        $file_name1 = $_FILES["interior_photo"]["name"];
        $file_temp1 = $_FILES["interior_photo"]["tmp_name"];

        $q = mysqli_query($con, "insert into carmodel values('',$brand_id,$car_id,'$carmodel_name','$file_name','$file_name1',0)");
        // echo "insert into carmodel values('',$brand_id,$car_id,'$carmodel_name','$file_name','$file_name1',0)";
        // // echo "insert into carmodel values('',$brand_id,$car_id,'$carmodel_name','$file_name',$carmodel_year)";
        // echo "insert into carmaster values('',$car_id,'$carmodel_name','$file_name','$carmodel_year')";
        if ($q) {
            move_uploaded_file($file_temp, "images/" . $file_name);
            move_uploaded_file($file_temp1, "images/" . $file_name1);
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
                    <h4 class="card-title">CAR MODEL</h4>

                    <form class="forms-sample" name="carmodel" method="POST" enctype="multipart/form-data" >

                    <div class="form-group row">
                            <!-- <td width="120">Brand</td> -->
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Car Brands</label>
                            <div class="col-sm-9">
                                <select name="brand_id" id="brand_id" class="col-sm-12 btn btn-outline-secondary dropdown-toggle" onChange="getCars(this.value)"required> 
                                    <option value="">Select brand</option>
                                    <?php
                                    include 'connection.php';
                                    $qry = "select * from brandmaster";
                                    $res = mysqli_query($con, $qry);
                                    while ($rows = mysqli_fetch_array($res)) {
                                        echo "<option value=$rows[0]>$rows[1]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Car Name</label>
                            <div class="col-sm-9">
                                <select name="car_id" id="car_id" class="col-sm-12 btn btn-outline-secondary dropdown-toggle" onChange="getCarmodels(this.value)" required>
                                    <option value="">Select car</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Car Model Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="carmodel_name" id="carmodel_name" placeholder="Enter Car Model Name" height=100 width=100 required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Car Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="photo" id="photo" placeholder="photo" height=100 width=100 required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Interior </label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="interior_photo" id="interior_photo" placeholder="interior_photo" height=100 width=100 required>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Car Model Year</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="carmodel_year" id="car_name" placeholder="Enter Car Model Year" height=100 width=100>
                            </div>
                        </div> -->
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
                    <h4 class="card-title">CAR MODELS</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <th>Car Brand</th>
                                    <th>Car Name</th>
                                    <th>Car Model Name</th>
                                    <th>Car Model Iamges</th>
                                    <th>Car Interior Photo</th>
                                    <!-- <th>Car Model Year</th> -->
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                $q = mysqli_query($con, "select cmm.*,bm.*,cm.* from brandmaster bm, carmaster cm, carmodel cmm where bm.brand_id=cm.brand_id and cm.car_id=cmm.car_id");
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
                                        <td> <?php echo $row['car_name']; ?></td>
                                        <td> <?php echo $row['carmodel_name']; ?></td>
                                        <td><?php echo "<image src='images/$row[photo]' height=600 width=600>"; ?></td>
                                        <td><?php echo "<image src='images/$row[interior_photo]' height=600 width=600>"; ?></td>
                                        
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

        <script>
            function edit(carmodel_id) {
                if (confirm("Are you sure want to Edit ?")) {
                    window.location.href = 'carmodeledit.php?carmodel_id=' + carmodel_id + '';
                    //return true;
                }
            }

            function del(carmodel_id) {
                if (confirm("Are you sure want to Delete ?")) {
                    window.location.href = 'carmodeldelete.php?carmodel_id=' + carmodel_id + '';
                    return true;
                }
            }
        </script>
</body>
</html>

<?php
include("fff.php");
?>