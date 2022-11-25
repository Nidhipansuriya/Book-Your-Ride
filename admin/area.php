<?php
include("hhh.php");
error_reporting(1);
?>

<html>

<body>


    <?php
    $con = mysqli_connect("localhost", "root", "", "byr");
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $areaname = $_POST['areaname'];
        $pincode=$_POST['pincode'];

        $q = mysqli_query($con, "insert into area_master values('',$id,'$areaname',$pincode)");
        

        if ($q) {
            $id = $_POST['id'];
            $qur = mysqli_query($con, "update dregis set area='$areaname' where id=$id ");
            // echo "insert into dregis (area) values('$areaname') where id=$id";
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
                    <h4 class="card-title">AREAS</h4>

                    <form class="forms-sample" name="area" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Driver Name</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" name="car_name" id="car_name" placeholder="Brand Name"> -->
                                <select name="id" id="id" class="col-sm-12 btn btn-outline-secondary dropdown-toggle" required>
                                    <?php
                                    $q = mysqli_query($con, "select * from dregis where area='' and status=1");
                                    while ($row = mysqli_fetch_array($q)) {
                                        echo "<option value=$row[id]>$row[name]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Area Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="areaname" id="areaname" placeholder="Enter Area Name" height=100 width=100 required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Pincode</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode" height=100 width=100 required>
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
                    <h4 class="card-title">AREA</h4>

                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <th>Driver Name</th>
                                    <th>Area</th>
                                    <th>Pincode</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                $q = mysqli_query($con, "select dr.*,am.* from dregis dr, area_master am where dr.id=am.id");
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
                                        <td> <?php echo $row['name']; ?> </td>
                                        <td> <?php echo $row['areaname']; ?></td>
                                        <td> <?php echo $row['pincode']; ?></td>
                                       
                                        <td>
                                            <div class="hidden-sm hidden-xs btn-group">
                                                <a onclick="edit(<?php echo $row['area_id']; ?>)">
                                                    <image src=images/edit.png height=30 width=30>
                                                </a>
                                                &nbsp;
                                                <a onclick="del(<?php echo $row['area_id']; ?>)">
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
            function edit(area_id) {
                if (confirm("Are you sure want to Edit ?")) {
                    window.location.href = 'area_edit.php?area_id=' + area_id + '';
                    //return true;
                }
            }

            function del(area_id) {
                if (confirm("Are you sure want to Delete ?")) {
                    window.location.href = 'area_delete.php?area_id=' + area_id + '';
                    return true;
                }
            }
        </script>
</body>
</html>
<?php
include("fff.php");
?>