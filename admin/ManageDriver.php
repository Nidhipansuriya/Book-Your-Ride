<?php
include("hhh.php");
?>


<div class="col-lg-10 grid-margin stretch-card">
    <div class="card" >
        <div class="card-body">
            <h4 class="card-title">DRIVERS</h4>
            <div class="table-responsive" >
                <table class="table table-striped" style="align-items: center;" >
                    <thead>
                        <tr>
                            <th> User </th>
                            <th> Name </th>
                            <th> Status </th>
                            <th> Details </th>
                            <!-- <th> Confirmation </th> -->
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include('connection.php');
                        $q = mysqli_query($con, "select * from dregis");
                        while ($row = mysqli_fetch_array($q)) {
                        ?>
                            <tr>
                                <td class="py-1">
                                    <!-- <img src="../driver/images/<?php echo $row['photo']; ?>" alt="image" /> -->
                                    <?php echo " <img src='../driver/images/$row[16]' height=30 width=30/>"; ?>


                                </td>
                                <td> <?php echo $row['name']; ?> </td>

                                <td> <?php if($row['status']==1)
                                echo "Confirmed";
                                else
                                echo "Rejected"; ?> </td>

                                <td>

                                    <div class="hidden-sm hidden-xs btn-group">
                                       <?php 
                                       echo " <a href=drivermore.php?m=$row[0] class='btn btn-warning btn-fw'>More</a>";?>
                                    </div>

                                </td>
                                <!-- <td>

                                    <div class="hidden-sm hidden-xs btn-group">
                                    <button type="button" class="btn btn-light btn-fw">Confirm</button>
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



<?php
include("fff.php");
?>