<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Book Your Ride Driver</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>

	<style>
		.fa-sign-out {
			color: black;
		}

		.header-left .menu-icon {
			/* display: -webkit-box; */
			/* display: -ms-flexbox; */
			display: flex;
		}

		.dw-menu:before {
			content: "\eb4d";
		}

		*,
		:after,
		:before {
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}
	</style>

</head>

<body>
	<?php
	session_start();
	?>
	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class='loader-progress' id="progress_div">
				<div class="loader-logo"><img src="vendors/images/deskapp-logo1.png" style="height: 50% ; width: 50%; margin-top: 15px; " alt=""></div>
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> -->

	<div class="header">
		<div class="header-left">
			<!-- <div class="menu-icon dw dw-menu"></div> -->
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" style="background-color: #bfa132;" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label" style="color: black;">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label" style="color: black;">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label" style="color: black;">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<?php
							$pic = $_SESSION['photo'];
							echo "<img class='img-xs rounded-circle' src='images/$pic' style='height: 53px;'>";
							// <img src="images/photo1.jpg" alt="">
							?>

						</span>
						&nbsp;

						<?php
						echo $_SESSION['name'];
						?>

					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.php"><i style="color: rgb(0 0 0 / 90%);" class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="verify_password.php"><i style="color: rgb(0 0 0 / 90%);" class="dw dw-user1"></i> Reset Possword</a>
						<!-- <a class="dropdown-item" href="profile.php"><i style="color: rgb(0 0 0 / 90%);" class="dw dw-settings2"></i> Setting</a> -->
						<!-- <a class="dropdown-item" href="faq.html"><i style="color: rgb(0 0 0 / 90%);" class="dw dw-help text-default"></i> Help</a> -->
						<a class="dropdown-item" href="logout.php"><i style="color: rgb(0 0 0 / 90%);" class="fa fa-sign-out "></i> Log Out</a>
					</div>
				</div>
			</div>
			<!-- <div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
			</div> -->
		</div>
	</div>


	<div class="left-side-bar">
		<!-- <div class="brand-logo">
			<a href="home.php">
				<img src="vendors/images/deskapp-logo-dark.png" alt="" class="dark-logo" style="height: 90% ; width: 60%;">
				<img src="vendors/images/deskapp-logo-white.png" alt="" class="light-logo" style="height: 90% ; width: 60%;">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div> -->
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-user-1"></span><span class="mtext">Profile</span>
						</a>
						<!-- <i style="color: rgb(0 0 0 / 90%);" class="dw dw-user1"></i> -->
						<ul class="submenu">
							<li><a href="profile.php">My Profile</a></li>
							<li><a href="driverprofileedit.php">Edit Profile</a></li>
							<li><a href="verify_password.php">Reset Password</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="outstation_car_booking.php" class="dropdown-toggle  no-arrow">
							<span class="icon-copy fa fa-car" style="margin-left: -45px;"></span><span class="mtext" style="margin-left: 26px;">Outstation Rides</span>
						</a>

					</li>
					<li class="dropdown">
						<a href="outstation_history.php" class="dropdown-toggle  no-arrow">
							<span class="icon-copy fa fa-history" style="margin-left: -45px;"></span><span class="mtext" style="margin-left: 26px;">Outstation History</span>
						</a>

					</li>
					<li>
						<a href="kaali_peeli_booking.php" class="dropdown-toggle no-arrow">
						<span class="icon-copy fa fa-cab" style="margin-left: -45px;"></span><span class="mtext" style="margin-left: 26px;">Kaali Peeli Rides</span>
						</a>

					</li>
					<li>
						<a href="kaali_peeli_history.php" class="dropdown-toggle no-arrow">
						<span class="icon-copy fa fa-history" style="margin-left: -45px;"></span><span class="mtext" style="margin-left: 26px;">Kaali Peeli History</span>
						</a>

					</li>



					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>
	<div class="main-container">