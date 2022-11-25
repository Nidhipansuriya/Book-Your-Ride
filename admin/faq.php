<?php
include("hhh.php");
?>


<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script></head>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">FREQUENTLY ASKED QUESTION </h4>
            <!-- <p class="card-description"> Basic form elements </p> -->
            <form class="forms-sample" name="faq" method="POST">
                <div class="form-group">
                    <label for="exampleInputName1">Question</label>
                    <input type="text" name="question" class="form-control" id="question" placeholder="Question" required>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Answer</label>
                    <textarea class="form-control" name="answer" id="answer" rows="4" placeholder="Answer" required></textarea>
                </div>
                <input type="submit" name="submit" id="submit" class="btn btn-warning mr-2">
                <button class="btn btn-dark">Reset</button>
            </form>
        </div>
    </div>
</div>

<script>
         CKEDITOR.replace( 'answer' );
 </script>

<?php
error_reporting(0);
//$con = mysqli_connect("localhost","root","","byr");
include('connection.php');

if (isset($_POST['submit'])) {

    $question = $_POST['question'];
    $answer = $_POST['answer'];


    $q = mysqli_query($con, "insert into faq values('','$question','$answer')");
    if ($q) {
        echo "<script>alert('Inserted successfully!!');</script>";
    } else {
        echo "<script>alert('Oops!! There might be something wrong.');</script>";
    }
}
?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <!-- <h4 class="card-title">DRIVERS</h4> -->
            <div class="table-responsive">
                <table class="table table-striped" style="align-items: center;">

                    <tbody>


                        <?php


                        $q = mysqli_query($con, "select * from faq");
                        echo "<table class='table'>";
                        echo "<th>Question";
                        echo "<th>Answer";
                        echo "<th colspan=2>Action";
                        while ($row = mysqli_fetch_array($q)) {

                        ?>

                            <tr>


                                <td> <?php echo $row['question']; ?></td>
                                <td> <?php echo $row['answer']; ?></td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <a onclick="edit(<?php echo $row[0]; ?>)">
                                            <image src=images/edit.png height=30 width=30>
                                        </a>
                                        &nbsp;
                                        <a onclick="del(<?php echo $row[0]; ?>)">
                                            <image src=images/delete.png height=30 width=30>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                        <?php } ?>
                </table>
                </tbody>
        
        

        <script>
            function edit(id) {
                if (confirm("Are you sure want to Edit ?")) {
                    window.location.href = 'faqedit.php?id=' + id + '';
                    //return true;
                }
            }

            function del(id) {
                if (confirm("Are you sure want to Delete ?")) {
                    window.location.href = 'faqdelete.php?id=' + id + '';
                    return true;
                }
            }
        </script>
         
        


        <?php
        include("fff.php");
        ?>