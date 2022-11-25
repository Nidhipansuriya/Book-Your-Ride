<?php
include("hhh.php");
?>

<style>
.hero-byr {
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/test.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<!-- <a href="img/test.jpg">
</a> -->

<div class="container-xxl py-5 bg-dark hero-byr mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-family: Cormorant Garamond, Georgia, serif;">Testimonial</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Testimonial Start -->
<?php
include('connection.php');
$con = mysqli_connect("localhost", "root", "", "byr");
error_reporting(0);
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $file_name = $_FILES["clientphoto"]["name"];
    $file_temp = $_FILES["clientphoto"]["tmp_name"];


    $q = mysqli_query($con, "insert into testimonial values('','$name','$comment','$file_name')");
    // echo "insert into uregis values('','$user_name','$email','$password')";
    if ($q) {
        move_uploaded_file($file_temp, "img/" . $file_name);
        echo "<script>alert('Your review entered successfully!!');</script>";
    } else {
        echo "<script>alert('Oops!! There might be something wrong.');</script>";
    }
}
?>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5" style="font-family: Cormorant Garamond, Georgia, serif;">Our Clients Says!!!</h1>
        </div>
        <div align=center>
            <div class="col-md-6" style="text-align: center;">

                <h5 style="font-family: Cormorant Garamond, Georgia, serif;"> LEAVE YOUR COMMENT!!</h5>
                <br>
                <form class="forms-sample" name="brands" method="POST" enctype="multipart/form-data">
                    <div class="form-floating col-md-12" style="text-align: center;">
                        <P>Enter Your Name</p>
                        <div class="form-floating">
                            <input type="name" class="form-control" name="name" id="name" placeholder="Your Name" required>

                            <label for="text">Your Name</label>
                        </div>
                    </div>

                    <br>
                    <div class="form-floating col-md-12" style="text-align: center;">
                        <p>Enter Your Comment</p>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="comment" id="comment" placeholder="Your comment" required>
                            <label for="comment">Your Comment</label>
                        </div>
                    </div>
                    <br>
                    <!-- <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Car Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="photo" id="photo" placeholder="photo" height=100 width=100>
                            </div> -->

                    <div style="text-align: center;">
                        <p>Drop Your Image</p>
                        <div class="form-floating col-form-label col-md-6">

                            <input type="file" class="form-control" name="clientphoto" id="clientphoto" required>
                        </div>
                    </div>
            </div>
            <br>
            <div class="col-6" style="text-align: center;">
                <!-- <button class="btn btn-primary w-100 py-2" type="submit">Submit</button> -->
                <button type="submit" name="submit" class="btn btn-primary w-100 py-2">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>

<br>
<br>

<?php
include('connection.php');
$q = mysqli_query($con, "select * from testimonial");
// $i = 1;
while ($row = mysqli_fetch_array($q)) {
?>
    <div style="font-family: Cormorant Garamond, Georgia, serif;">
        <div class="testimonial-item bg-transparent border rounded p-4">
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <!-- <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p> -->
            <p><?php echo $row['comment'] ?></p>


            <div class="d-flex align-items-center" style="font-family: Cormorant Garamond, Georgia, serif;">
                <?php
                echo "<img class='img-fluid flex-shrink-0 rounded-circle' src='../user/img/$row[clientphoto]' style='width: 50px; height: 50px;'>";
                ?>
                <div class="ps-3" style="font-family: Cormorant Garamond, Georgia, serif;">
                    <h5 class="mb-1" style="font-family: Cormorant Garamond, Georgia, serif;"><?php echo $row['name'] ?></h5>
                    <!-- <small>Profession</small> -->
                </div>
            </div>
        </div>

    <?php
}
    ?>

    <!-- Testimonial End -->


    <?php
    include("fff.php");
    ?>