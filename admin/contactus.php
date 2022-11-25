<?php
include("hhh.php");
?>

<html>

<body>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Users who tried to contact BYR</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>No</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Message</th>
                                    <!-- <th> Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('connection.php');
                                $q = mysqli_query($con, "select * from usercontact");
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
                                        <td> <?php echo $row['user_name']; ?></td>
                                        <td> <?php echo $row['user_email']; ?></td>
                                        <td> <?php echo $row['message']; ?></td>

                                        <!-- <td>
                                            <div class="hidden-sm hidden-xs btn-group">
                                                &nbsp;
                                                <a onclick="del(<?php echo $row[0]; ?>)">
                                                    <image src=images/delete.png height=30 width=30>
                                                </a>
                                            </div>
                                        </td> -->
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- <script>
        function del(reviewid) {
            if (confirm("Are you sure want to Delete ?")) {
                window.location.href = 'testimonialdelete.php?reviewid=' + reviewid + '';
                return true;
            }
        }
    </script> -->
    <?php
    include("fff.php");
    ?>