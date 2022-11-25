<?php
include("hhh.php");
?>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script></head>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">ABOUT US</h4>
            <!-- <p class="card-description"> Basic form elements </p> -->
            <form class="forms-sample" name="aboutus" method="POST">
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="4" placeholder="Description" required></textarea>
                </div>
                <input type="submit" name="submit" id="submit" class="btn btn-warning mr-2">
                <button class="btn btn-dark">Reset</button>
            </form>
        </div>
    </div>
</div>

<script>
         CKEDITOR.replace( 'description' );
 </script>

<?php
error_reporting(0);
//$con = mysqli_connect("localhost","root","","byr");
include('connection.php');

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];


    $q = mysqli_query($con, "insert into aboutus values('','$title','$description')");
    if ($q) {
        echo "<script>alert('Data entered successfully!!');</script>";
    } else {
        echo "<script>alert('Oops!! There might be something wrong.
                            ');</script>";
    }
}
?>



<?php

$q = mysqli_query($con, "select * from aboutus");
echo "<table class='table'>";
echo "<th>Title";
echo "<th>Description";
echo "<th colspan=2>Action";
while ($row = mysqli_fetch_array($q)) {

?>

    <tr>
       
        <td> <?php echo $row['title']; ?></td>
        <td> <?php echo $row['description']; ?></td>
      
        <td>
            <div class="hidden-sm hidden-xs btn-group">
                <a onclick="edit(<?php echo $row['id']; ?>)">
                    <image src=images/edit.png height=30 width=30>
                </a>
                &nbsp;
                <a onclick="del(<?php echo $row['id']; ?>)">
                    <image src=images/delete.png height=30 width=30>
                </a>
            </div>
        </td>

    </tr>

<?php } ?>

</table>

<script>

function edit(id)
{
    if(confirm("Are you sure want to Edit ?"))
    {
        window.location.href='aboutusedit.php?id=' +id+ '';
        //return true;
    }
}

function del(id)
{
    if(confirm("Are you sure want to Delete ?"))
    {
        window.location.href='aboutusdelete.php?id=' +id+ '';
        return true;
    }
}

</script>


<?php
include("fff.php");
?>