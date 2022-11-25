<?php
include("hhh.php");
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    body {
        margin-top: 20px;
        background: #eee;
    }

    .fs35 {
        font-size: 35px !important;
    }

    .mw50 {
        max-width: 50px !important;
    }

    .mn {
        margin: 0 !important;
    }

    .mw140 {
        max-width: 140px !important;
    }

    .mb20 {
        margin-bottom: 20px !important;
    }

    .mr25 {
        margin-right: 25px !important;
    }

    .mw40 {
        max-width: 40px !important;
    }

    .p30 {
        padding: 30px !important;
    }

    .page-heading {
        position: relative;
        padding: 30px 40px;
        margin: -25px -20px 25px;
        border-bottom: 1px solid #d9d9d9;
        background-color: #f2f2f2;
    }

    .page-tabs {
        margin: -25px -20px 30px;
        padding: 15px 25px 0;
        border-bottom: 1px solid #ddd;
        background: #e9e9e9;
    }

    .page-tabs .nav-tabs {
        border-bottom: 0;
    }

    .page-tabs .nav-tabs>li>a {
        color: #AAA;
        padding: 10px 20px;
    }

    .page-tabs .nav-tabs>li:hover>a,
    .page-tabs .nav-tabs>li:focus>a {
        border-color: #ddd;
    }

    .page-tabs .nav-tabs>li.active>a,
    .page-tabs .nav-tabs>li.active>a:hover,
    .page-tabs .nav-tabs>li.active>a:focus {
        color: #666;
        font-weight: 600;
        background-color: #eee;
        border-bottom-color: transparent;
    }

    @media (max-width: 800px) {
        .page-tabs {
            padding: 25px 20px 0;
        }

        .page-tabs .nav-tabs li {
            float: none;
            margin-bottom: 5px;
        }

        .page-tabs .nav-tabs li:last-child,
        .page-tabs .nav-tabs li.active:last-child {
            margin-bottom: 10px;
        }

        .page-tabs .nav-tabs>li>a:hover,
        .page-tabs .nav-tabs>li>a:focus {
            border: 1px solid #DDD;
        }

        .page-tabs .nav-tabs>li.active>a,
        .page-tabs .nav-tabs>li.active>a:hover,
        .page-tabs .nav-tabs>li.active>a:focus {
            border-bottom-color: #ddd;
        }
    }

    .panel {
        position: relative;
        margin-bottom: 27px;
        background-color: #ffffff;
        border-radius: 3px;
    }

    .panel.panel-transparent {
        background: none;
        border: 0;
        margin: 0;
        padding: 0;
    }

    .panel.panel-border {
        border-style: solid;
        border-width: 0;
    }

    .panel.panel-border.top {
        border-top-width: 5px;
    }

    .panel.panel-border.right {
        border-right-width: 5px;
    }

    .panel.panel-border.bottom {
        border-bottom-width: 5px;
    }

    .panel.panel-border.left {
        border-left-width: 5px;
    }

    .panel.panel-border>.panel-heading {
        background-color: #fafafa;
        border-color: #e2e2e2;
        border-top: 1px solid transparent;
    }

    .panel.panel-border>.panel-heading>.panel-title {
        color: #999999;
    }

    .panel.panel-border.panel-default {
        border-color: #DDD;
    }

    .panel.panel-border.panel-default>.panel-heading {
        border-top: 1px solid transparent;
    }

    .panel-menu {
        background-color: #fafafa;
        padding: 12px;
        border: 1px solid #e2e2e2;
    }

    .panel-menu.dark {
        background-color: #f8f8f8;
    }

    .panel-body .panel-menu {
        border-left: 0;
        border-right: 0;
    }

    .panel-heading+.panel-menu,
    .panel-menu+.panel-body,
    .panel-body+.panel-menu,
    .panel-body+.panel-body {
        border-top: 0;
    }

    .panel-body {
        position: relative;
        padding: 15px;
        border: 1px solid #e2e2e2;
    }

    .panel-body+.panel-footer {
        border-top: 0;
    }

    .panel-heading {
        position: relative;
        height: 52px;
        line-height: 49px;
        letter-spacing: 0.2px;
        color: #999999;
        font-size: 15px;
        font-weight: 400;
        padding: 0 8px;
        background: #fafafa;
        border: 1px solid #e2e2e2;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px;
    }

    .panel-heading+.panel-body {
        border-top: 0;
    }

    .panel-heading>.dropdown .dropdown-toggle {
        color: inherit;
    }

    .panel-heading .widget-menu .btn-group {
        margin-top: -3px;
    }

    .panel-heading .widget-menu .form-control {
        margin-top: 6px;
        font-size: 11px;
        height: 27px;
        padding: 2px 10px;
        border-radius: 1px;
    }

    .panel-heading .widget-menu .form-control.input-sm {
        margin-top: 9px;
        height: 22px;
    }

    .panel-heading .widget-menu .progress {
        margin-top: 11px;
        margin-bottom: 0;
    }

    .panel-heading .widget-menu .progress-bar-lg {
        margin-top: 10px;
    }

    .panel-heading .widget-menu .progress-bar-sm {
        margin-top: 15px;
    }

    .panel-heading .widget-menu .progress-bar-xs {
        margin-top: 17px;
    }

    .panel-icon {
        padding-left: 5px;
    }

    .panel-title {
        padding-left: 6px;
        margin-top: 0;
        margin-bottom: 0;
    }

    .panel-title>.fa,
    .panel-title>.glyphicon,
    .panel-title>.glyphicons,
    .panel-title>.imoon {
        top: 2px;
        min-width: 22px;
        color: inherit;
        font-size: 14px;
    }

    .panel-title>a {
        color: inherit;
    }

    .panel-footer {
        padding: 10px 15px;
        background-color: #fafafa;
        border: 1px solid #e2e2e2;
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 2px;
    }

    .panel>.list-group {
        margin-bottom: 0;
    }

    .panel>.list-group .list-group-item {
        border-radius: 0;
    }

    .panel>.list-group:first-child .list-group-item:first-child {
        border-top-right-radius: 2px;
        border-top-left-radius: 2px;
    }

    .panel>.list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 2px;
    }

    .panel-heading+.list-group .list-group-item:first-child {
        border-top-width: 0;
    }

    .panel-body+.list-group .list-group-item:first-child {
        border-top-width: 0;
    }

    .list-group+.panel-footer {
        border-top-width: 0;
    }

    .panel>.table,
    .panel>.table-responsive>.table,
    .panel>.panel-collapse>.table {
        margin-bottom: 0;
    }

    .panel>.table:first-child,
    .panel>.table-responsive:first-child>.table:first-child {
        border-top-right-radius: 2px;
        border-top-left-radius: 2px;
    }

    .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child {
        border-top-left-radius: 2px;
    }

    .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child {
        border-top-right-radius: 2px;
    }

    .panel>.table:last-child,
    .panel>.table-responsive:last-child>.table:last-child {
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 2px;
    }

    .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
        border-bottom-left-radius: 2px;
    }

    .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
        border-bottom-right-radius: 2px;
    }

    .panel>.panel-body+.table,
    .panel>.panel-body+.table-responsive {
        border-top: 1px solid #eeeeee;
    }

    .panel>.table>tbody:first-child>tr:first-child th,
    .panel>.table>tbody:first-child>tr:first-child td {
        border-top: 0;
    }

    .panel>.table-bordered,
    .panel>.table-responsive>.table-bordered {
        border: 0;
    }

    .panel>.table-bordered>thead>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:first-child,
    .panel>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-bordered>thead>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
    .panel>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child {
        border-left: 0;
    }

    .panel>.table-bordered>thead>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:last-child,
    .panel>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-bordered>thead>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
    .panel>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child {
        border-right: 0;
    }

    .panel>.table-bordered>thead>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
    .panel>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-bordered>thead>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>th,
    .panel>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th {
        border-bottom: 0;
    }

    .panel>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-bordered>tfoot>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
        border-bottom: 0;
    }

    .panel>.table-responsive {
        border: 0;
        margin-bottom: 0;
    }

    .panel-group {
        margin-bottom: 19px;
    }

    .panel-group .panel-title {
        padding-left: 0;
    }

    .panel-group .panel-heading,
    .panel-group .panel-heading a {
        position: relative;
        display: block;
        width: 100%;
    }

    .panel-group.accordion-lg .panel+.panel {
        margin-top: 12px;
    }

    .panel-group.accordion-lg .panel-heading {
        font-size: 14px;
        height: 54px;
        line-height: 52px;
    }

    .panel-group .accordion-icon {
        padding-left: 35px;
    }

    .panel-group .accordion-icon:after {
        position: absolute;
        content: "\f068";
        font-family: "FontAwesome";
        font-size: 12px;
        font-style: normal;
        font-weight: normal;
        -webkit-font-smoothing: antialiased;
        color: #555;
        left: 10px;
        top: 0;
    }

    .panel-group .accordion-icon.collapsed:after {
        content: "\f067";
    }

    .panel-group .accordion-icon.icon-right {
        padding-left: 10px;
        padding-right: 30px;
    }

    .panel-group .accordion-icon.icon-right:after {
        left: auto;
        right: 5px;
    }

    .panel-group .panel {
        margin-bottom: 0;
        border-radius: 3px;
    }

    .panel-group .panel+.panel {
        margin-top: 5px;
    }

    .panel-group .panel-heading+.panel-collapse>.panel-body {
        border-top: 0;
    }

    .panel-group .panel-footer {
        border-top: 0;
    }

    .panel-group .panel-footer+.panel-collapse .panel-body {
        border-bottom: 1px solid #eeeeee;
    }


    .media {
        color: #999999;
        font-weight: 600;
        margin-top: 15px;
    }

    .media:first-child {
        margin-top: 0;
    }

    .media-right,
    .media>.pull-right {
        padding-left: 10px;
    }

    .media-left,
    .media>.pull-left {
        padding-right: 10px;
    }

    .media-left,
    .media-right,
    .media-body {
        display: table-cell;
        vertical-align: top;
    }

    .media-middle {
        vertical-align: middle;
    }

    .media-bottom {
        vertical-align: bottom;
    }

    .media-heading {
        color: #555555;
        margin-top: 0;
        margin-bottom: 5px;
    }

    .media-list {
        padding-left: 0;
        list-style: none;
    }

    /*===============================================
  Tabs
================================================= */
    /* Tabs Wrapper */
    .tab-block {
        position: relative;
    }

    /* Tabs Content */
    .tab-block .tab-content {
        overflow: auto;
        position: relative;
        z-index: 10;
        min-height: 125px;
        padding: 16px 12px;
        border: 1px solid #e2e2e2;
        background-color: #FFF;
    }

    /*===============================================
  Tab Navigation
================================================= */
    .tab-block .nav-tabs {
        position: relative;
        border: 0;
    }

    /* nav tab item */
    .tab-block .nav-tabs>li {
        float: left;
        margin-bottom: -1px;
    }

    /* nav tab link */
    .tab-block .nav-tabs>li>a {
        z-index: 9;
        position: relative;
        color: #AAA;
        font-size: 14px;
        font-weight: 400;
        padding: 14px 20px;
        margin-right: -1px;
        border-color: #e2e2e2;
        border-radius: 0;
        background: #fafafa;
    }

    .tab-block .nav-tabs>li:first-child>a {
        margin-left: 0;
    }

    /* nav tab link:hover */
    .tab-block .nav-tabs>li>a:hover {
        background-color: #f4f4f4;
    }

    /* nav tab active link:focus:hover */
    .tab-block .nav-tabs>li.active>a,
    .tab-block .nav-tabs>li.active>a:hover,
    .tab-block .nav-tabs>li.active>a:focus {
        cursor: default;
        position: relative;
        z-index: 12;
        color: #555555;
        background: #FFF;
        border-color: #e2e2e2;
        border-bottom: 1px solid #FFF;
    }

    /*===============================================
  Tab Navigation - Tabs Left
================================================= */
    .tabs-left {
        float: left;
    }

    /* nav tab item */
    .tabs-left>li {
        float: none;
        margin: 0 -1px -1px 0;
    }

    /* nav tab item link */
    .tabs-left>li>a {
        padding: 14px 16px;
        color: #777;
        font-weight: 600;
        border: 1px solid transparent;
        border-color: #DDD;
        background: #fafafa;
    }

    /* nav tab link:hover */
    /* nav tab active link:focus:hover */
    .tab-block .tabs-left>li.active>a,
    .tab-block .tabs-left>li.active>a:hover,
    .tab-block .tabs-left>li.active>a:focus {
        color: #555;
        border-color: #DDD #FFF #DDD #DDD;
        cursor: default;
        position: relative;
        z-index: 12;
        background: #FFF;
    }

    /*===============================================
  Tab Navigation - Tabs Right
================================================= */
    .tabs-right {
        float: right;
    }

    /* nav tab item */
    .tabs-right>li {
        float: none;
        margin: 0 0 -1px -1px;
    }

    /* nav tab item link */
    .tabs-right>li>a {
        padding: 14px 16px;
        color: #777;
        font-weight: 600;
        border: 1px solid transparent;
        border-color: #DDD;
        background: #fafafa;
    }

    /* nav tab link:hover */
    /* nav tab active link:focus:hover */
    .tab-block .tabs-right>li.active>a,
    .tab-block .tabs-right>li.active>a:hover,
    .tab-block .tabs-right>li.active>a:focus {
        color: #555;
        border-color: #DDD #DDD #DDD #FFF;
        cursor: default;
        position: relative;
        z-index: 12;
        background: #FFF;
    }

    /*===============================================
  Tab Navigation - Tabs Right
================================================= */
    .tabs-below {
        position: relative;
    }

    /* nav tab item */
    .tabs-below>li {
        float: left;
        margin-top: -1px;
    }

    /* nav tab item link */
    .tabs-below>li>a {
        position: relative;
        z-index: 9;
        margin-right: -1px;
        padding: 11px 16px;
        color: #777;
        font-weight: 600;
        border: 1px solid #DDD;
        background: #fafafa;
    }

    /* nav tab link:hover */
    /* nav tab active link:focus:hover */
    .tab-block .tabs-below>li.active>a,
    .tab-block .tabs-below>li.active>a:hover,
    .tab-block .tabs-below>li.active>a:focus {
        cursor: default;
        position: relative;
        z-index: 12;
        color: #555555;
        background: #FFF;
        border-color: #DDD;
        border-top: 1px solid #FFF;
    }

    .hero-byr {
        background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(img/Profile.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: -20px;
    }

    .change-pass {
        /* position: relative; */
        height: 52px;
        line-height: 49px;
        letter-spacing: 0.2px;
        color: #999999;
        font-size: 15px;
        font-weight: 400;
        padding: 0 8px;
        background: #fafafa;
        border: 1px solid #e2e2e2;
        /* border-top-right-radius: 3px; */
        /* border-top-left-radius: 3px; */
    }

    .change-tit {
        padding-left: 6px;
        /* margin-top: 0; */
        /* margin-bottom: 0; */
    }
</style>

<div class="container-xxl py-5 bg-dark hero-byr mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Profile</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="userprofile.php">Profile</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item text-white active" aria-current="page"> Edit Profile</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->

<!-- <a href="img/myavatar.JPG"></a> -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">

            <?php
            // session_start();
            include('connection.php');
            // $id = $_POST['id'];
            $user_id = $_SESSION['user_id'];
            $q = mysqli_query($con, "select * from uregis where user_id=$user_id ");
            while ($row = mysqli_fetch_array($q)) {
            ?>
                            <form method="POST" enctype="multipart/form-data" class="signin-form">

                <section id="content" class="container">
                    <!-- Begin .page-heading -->
                    <div class="page-heading">
                        <div class="media clearfix">
                            <div class="media-left pr30">
                                <a href="#">
                                    <?php
                                    if ($row['gender'] == 'male')

                                        echo " <img class='media-object mw150' style='margin-right: 40px;' src='https://bootdey.com/img/Content/avatar/avatar7.png' alt='...'>";
                                    else
                                        // echo "<img src='images/femaledriver.jpg' alt='Admin' class='rounded-circle p-1 bg-warning' width='110'>";
                                        echo " <img class='media-object mw150' style='margin-right: 40px; height: 290px;' src='img/myavatar.JPG' alt='...'>";

                                    ?>

                                    <!-- <img class='media-object mw150' style='margin-right: 40px;' src='https://bootdey.com/img/Content/avatar/avatar7.png' alt='...'> -->
                                </a>
                                <!-- <h6>change Passowrd</h6> -->
                            </div>

                                <div class="media-body">
                                    <h2 class="media-heading" style="margin-top: 25px; margin-right: 385px">Edit Profile
                                        <!-- <small> - Profile</small> -->
                                    </h2>
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <span class="panel-icon">
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span class="panel-title"> Contact Info</span>
                                            <span class="panel-icon">
                                                <!-- <input type="submit" name="submit" id="submit" style="margin-left: 380px; border: none; background-color: #fafafa;"> <i class="fa fa-check fa-regular"></i> -->
                                                <button type="submit" name="submit" id="submit"  style="margin-left: 380px; border: none; background-color: #fafafa;"> <i class="fa fa-check fa-regular"></i></button>
                                            </span>
                                        </div>

                                        <?php
                                        //  session_start();
                                        include('connection.php');
                                        if (isset($_POST["submit"])) {
                                            $user_id = $_SESSION['user_id'];

                                            $user_name = $_POST['user_name'];
                                            $contact = $_POST['contact'];

                                            echo "$user_name";
                                            echo "$contact";

                                            // $q = mysqli_query($con, "update uregis set user_name='$user_name',contact='$contact' where user_id=$user_id");
                                            $q = mysqli_query($con, "update uregis set user_name='$user_name',contact='$contact' where user_id=$user_id");




                                            if ($q) {
                                                // move_uploaded_file($file_temp4, "images/" . $photo);

                                                echo "<script>window.location.assign('userprofile.php');</script>";
                                            } else {


                                                echo "<script>alert('Your Changes are Not Upgraded.');</script>";
                                            }
                                        }
                                        ?>
                                        <div class="panel-body pn">
                                            <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                                                <!-- <thead>
                                            <tr class="hidden">
                                                <th class="mw30">#</th>
                                                <th>First Name</th>
                                                <th>Revenue</th>
                                            </tr>
                                        </thead> -->
                                                <tbody>

                                                    <tr class="hidden">
                                                        <th class="mw30"><i class="fa fa-pencil"></i></th>
                                                        <th>Name</th>
                                                        <th><input type="text" name="user_name" id="user_name" value="<?php echo $row['user_name']; ?>" class="byr-input" style="border: none;" required></th>
                                                        </th>

                                                    </tr>
                                                    <tr class="hidden">
                                                        <th class="mw30"></th>
                                                        <th>Email ID</th>
                                                        <th><?php echo $row['email']; ?></th>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <th class="mw30"><i class="fa fa-pencil"></i></th>
                                                        <th>Contact Number</th>
                                                        <th><input type="text" name="contact" id="contact" value="<?php echo $row['contact']; ?>" class="byr-input" style="border: none;" required></th>
                                                    </tr>

                                                </tbody>

                                            </table>
                                            <div class="panel-heading">
                                                
                                                <a href="login-form-20/verify_password.php">
                                                    
                                                    <span class="panel-icon">
                                                        <i class="fa fa-pencil"></i>
                                                    </span>
                                                    <span class="panel-title"> Change Password</span>
                                    </a>
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        <a href="login-form-20/forgotpassword.php">
                                                            <span class="panel-icon">
                                                                <i class="fa fa-pencil"></i>
                                                            </span>
                                                            <span class="panel-title"> Forgot Password</span>
                                                        </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </div>
                    </div>
                </section>
                </form>

            <?php
            }
            ?>
        </div>
    </div>
</div>






<?php
include("fff.php");
?>