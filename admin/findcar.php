<?php 
include("connection.php");
$brand_id=$_GET["brand_id"];


$result=mysqli_query($con,"select * from carmaster where brand_id=$brand_id");
while($row=mysqli_fetch_row($result)) 
{
//$state=$row[1];
echo "<option value=$row[0]>$row[2]</option>";
}
?>

