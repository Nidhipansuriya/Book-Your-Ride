<?php 
include("connection.php");
    $area_id=$_GET["area_id"];
    // $area_id=8;

    $q=mysqli_query($con,"select * from area_master where area_id='$area_id'");
    $row=mysqli_fetch_array($q);
    $areaname=$row['areaname'];
    

        $result=mysqli_query($con,"select * from dregis where area='$areaname' and available_status=0");
        while($row=mysqli_fetch_row($result))
        {
            //$state=$row[1];
            echo "<option value=$row[0]>$row[1]</option>";
            // echo "$row[1]";
            // echo "$row[0]";
            // echo "areaname";
        }

?>