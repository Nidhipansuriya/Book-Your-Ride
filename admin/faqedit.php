<?php
include('hhh.php');
error_reporting(1);
?>

<?php
$id = $_GET['id'];
include('connection.php');
// $q=mysqli_query($con,"select * from faq where id='x'");
$q = mysqli_query($con, "select * from faq where id=$id");
 $row = mysqli_fetch_array($q);
?>

<!-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script></head> -->
<form class="form-horizontal" role="form" method=post>
	<div align=center>
		<h2 align=center><b> FREQUENTLY ASKED QUESTION </b></h2>
		
		<br>	

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > Question </label>
			<div class="col-sm-9">
				<input type="text" name="question"  class="col-xs-10 col-sm-5" value="<?php echo $row['question'];?>" required/>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > Answer </label>
			<div class="col-sm-9">
				<input type="text" name="answer"  class="col-xs-10 col-sm-5"  value="<?php echo $row['answer'];?>" required/>
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
         CKEDITOR.replace( 'answer' );
 </script> -->
<?php 
 if(isset($_POST['submit']))
 {
    $question=$_POST['question'];
    $answer=$_POST['answer'];
	
	$q=mysqli_query($con,"update faq set question='$question',answer='$answer' where id='$id'");
	// $row=mysqli_fetch_array($q);

	if($q){
		echo "<script>alert('Updated......');</script>";
        // header("location:faq.php");
		echo "<script>window.location.assign('faq.php'); </script>";
	}
	else{
        echo"Your Changes are Not Upgraded.";
    }
 }
?>

<?php
include('fff.php');
?>