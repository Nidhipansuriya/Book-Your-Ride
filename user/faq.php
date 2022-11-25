<?php
include('hhh.php');
// include ("connect.php");
?>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap'); */
    * {
        margin: 0;
        padding: 0;
    }

    /* body{
    font-family: 'Lato', sans-serif;
} */

    /* .container{
    width: 60%;
    margin: 0 auto;
    margin-top: 100px;
} */

    .container h2 {
        position: relative;
        width: 23rem;
        color: black;
        margin: 20px 0;
    }

    /* .container h2::after{
    position: absolute;
    content: '';
    width: 67px;
    height: 2px;
    right: 5px;
    background-color: hotpink;
    bottom: 0;
} */

    .accordion {
        width: 50%;
        padding: 0 5px;
        border: 2px solid #6c757d;
        cursor: pointer;
        display: flex;
        margin: 10px 0;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-radius: 17px;

    }

    .accordion i {
        color: #6c757d;
        transition: all .5s ease-in;
    }

    .accordion .fa-minus {
        display: none;
    }

    .active,
    .accordion:hover {
        /* background-color: #6db5ff; */
        color: white;
        transition: all .5s ease-in;
        /* border: 2px solid #dddddd; */

    }

    .active .fa-minus {
        display: block;
    }

    .active .fa-plus {
        display: none;
    }

    .accordion h5 {
        font-size: 20px;
        margin: 0;
        color: #d9dce0;;
        padding-left: 5px;

    }

    .active i,
    .active h5,
    .accordion:hover i,
    .accordion:hover h5 {
        color: white;
    }

    .panal {
        padding: 0 15px;
        border-left: 1px solid #6c757d;
        margin-left: 25px;
        font-size: 14px;
        text-align: justify;
        overflow: hidden;
        transition: all .5s ease-in;
        max-height: 0;
        width: 40%;

    }

    .hero-byr {
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/faq.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
<div class="container" align="center">

    <div class="container-xxl py-5 bg-dark hero-byr mb-5" style="margin-left: -100px; width: 130%;">
        <div class="container my-5 py-5"> 
            <div class="row align-items-center g-5">


                <!-- <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4"> -->
                <h1 class="display-3 text-white text-center mb-3 animated slideInDown">Frequently Asked Question</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                        <li class="breadcrumb-item text-white active" aria-current="page">FAQ</li>
                    </ol>
                </nav>

                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5 align-items-center">
                            <div class="w-100">
                             
                                <?php
                                include('connection.php');
                                $q = mysqli_query($con, "select * from faq");
                                while ($row = mysqli_fetch_array($q)) {
                                ?>
                                    <div class="accordion">
                                        <h5><?php echo "$row[1]"; ?></h5>
                                        <i class="fas fa-minus"></i>
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="panal" style="color: #d9dce0;">
                                        <p> <?php echo "$row[2]"; ?></p>
                                    </div>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var acordion = document.getElementsByClassName('accordion');

    var i;
    var len = acordion.length;
    for (i = 0; i < len; i++) {
        acordion[i].addEventListener('click', function() {
            this.classList.toggle('active');
            var panal = this.nextElementSibling;
            if (panal.style.maxHeight) {
                panal.style.maxHeight = null;
            } else {
                panal.style.maxHeight = panal.scrollHeight + 'px';
            }
        })
    }
</script>

<?php
include('fff.php');
// include ("connect.php");
?>