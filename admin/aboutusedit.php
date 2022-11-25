<?php
include('hhh.php');
error_reporting(1);
?>
<?php
$id = $_GET['id'];
include('connection.php');
$q = mysqli_query($con, "select * from aboutus where id=$id");
$row = mysqli_fetch_array($q);
?>


<!-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script></head> -->

<form class="form-horizontal" role="form" method=post>
	<div align=center>
		<h2 align=center><b> ABOUT US </b></h2>
		
		<br>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title </label>
			<div class="col-sm-9">
				<input type="text" name="title" class="col-xs-10 col-sm-5" value="<?php echo $row['title']; ?>" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>
			<div class="col-sm-9">
				<input type="text" name="description" id="description" class="col-xs-10 col-sm-5" value="<?php echo $row['description']; ?>" />
			</div>
		</div>
		<br>
		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<input type="submit" name="submit" id="submit" class="btn btn-warning mr-2">
				&nbsp;
				<button class="btn btn-dark">Reset</button>
			</div>
		</div>
	</div>
</form>

<!-- <script>
         CKEDITOR.replace( 'description' );
 </script> -->
<?php
if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$description = $_POST['description'];

	$q = mysqli_query($con, "update aboutus set title='$title',description='$description' where id='$id'");
	// $row=mysqli_fetch_array($q);

	if ($q) {
		echo "<script>alert('Your Changes are Upgarded.');</script>";
		// header("location:aboutus.php");
		echo "<script>window.location.assign('aboutus.php'); </script>";
	} else {
		echo "Your Changes are Not Upgraded.";
	}
}
?>
<?php
include('fff.php');
?>