




<?php

include("connection.php");
$car_id = $_POST["car_id"];
$result = mysqli_query($con,"SELECT * FROM carmodel where car_id = $car_id");
?>
<option value="">Select City</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["0"];?>"><?php echo $row["0s"];?></option>
<?php
}
?>

