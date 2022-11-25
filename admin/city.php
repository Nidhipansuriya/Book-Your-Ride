<?php
include("hhh.php");
error_reporting(1);
?>

<html>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "byr");
    if (isset($_POST['submit'])) {
        // $id = $_POST['id'];
        $city_name = $_POST['city_name'];
        
        $q = mysqli_query($con, "insert into city_master values('','$city_name')");
        // echo "insert into city_master values('',$id,'$city_name')";
        

        if ($q) {
            // $id = $_POST['id'];
            // $qur = mysqli_query($con, "update dregis set area='$city_name' where id=$id ");
            
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
                    <h4 class="card-title">CITY</h4>

                    <form class="forms-sample" name="city" method="POST" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">City Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="city_name" id="city_name" placeholder="Enter Area Name" height=100 width=100 required>
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
                    <h4 class="card-title">City</h4>

                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <!-- <th>Driver Name</th> -->
                                    <th>City</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('connection.php');
                                $q = mysqli_query($con, "select * from city_master");
                                // $q = mysqli_query($con, "select dr.*,cm.* from dregis dr, city_master cm where dr.id=cm.id");
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
                                        <!-- <td> <?php echo $row['name']; ?> </td> -->
                                        <td> <?php echo $row['city_name']; ?></td>
                                      
                                       
                                        <td>
                                            <div class="hidden-sm hidden-xs btn-group">
                                                <a onclick="edit(<?php echo $row['city_id']; ?>)">
                                                    <image src=images/edit.png height=30 width=30>
                                                </a>
                                                &nbsp;
                                                <a onclick="del(<?php echo $row['city_id']; ?>)">
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
            function edit(city_id) {
                if (confirm("Are you sure want to Edit ?")) {
                    window.location.href = 'city_edit.php?city_id=' + city_id + '';
                    //return true;
                }
            }

            function del(city_id) {
                if (confirm("Are you sure want to Delete ?")) {
                    window.location.href = 'city_delete.php?city_id=' + city_id + '';
                    return true;
                }
            }
        </script>
</body>
</html>
<?php
include("fff.php");
?>