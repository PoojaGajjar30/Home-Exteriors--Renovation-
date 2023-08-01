<?php include_once('database/index.php'); ?>
<?php 
	$sql = mysqli_query($con,"SELECT * FROM `user_registreation_tbl` WHERE `user_Id` = '".$_SESSION['uid']."'");
	$fetch1 = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell-html.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2020 11:44:33 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Home Service Detector</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/HSD1.png">
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet"> 
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.theme.default.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>

	<!-- Loader -->
	
	<!-- /Loader -->
	
	<div class="main-wrapper">
	
		<!-- Header -->
		<header class="header">
			<nav class="navbar navbar-expand-lg header-nav">
				<div class="navbar-header">
					<a id="mobile_btn" href="javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
					<a href="index.php?page=home" class="navbar-brand logo">
						<img src="assets/img/HSD.png" class="img-fluid" alt="Logo">
					</a>
					<a href="index.php?page=home" class="navbar-brand logo-small">
						<img src="assets/img/HSD.png" class="img-fluid" alt="Logo">
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="index.php?page=home" class="menu-logo">
							<img src="assets/img/HSD.png" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
						<li <?php if(@$_GET['page'] == "index.php" || @$_GET['page'] == "home" || @$_GET['page'] == "") { ?> class="active" <?php } ?>>
							<a href="index.php?page=home">Dashboard</a>
						</li>
						<li <?php if(@$_GET['page'] == "user-bookings") { ?> class="active" <?php } ?>>
							<a href="index.php?page=user-bookings">Bookings</a>
						</li>
						<li <?php if(@$_GET['page'] == "user-settings") { ?> class="active" <?php } ?>>
							<a href="index.php?page=user-settings">Profile Settings</a>
						</li>
						<li <?php if(@$_GET['page'] == "user-quotation") { ?> class="active" <?php } ?>>
							<a href="index.php?page=user-quotation">Quotation</a>
						</li>
						<li <?php if(@$_GET['page'] == "user-reviews-tbl") { ?> class="active" <?php } ?>>
							<a href="index.php?page=user-reviews-tbl">Reviews</a>
						</li>
					</ul>
				</div>
				<ul class="nav header-navbar-rht">
					<!-- Notifications -->
					<li class="nav-item dropdown logged-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">2</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<?php 
											$id = $_SESSION['uid'];
											$sql = mysqli_query($con,"SELECT * FROM `book_service` WHERE `user_id` = '".$id."' AND `isactive` = '1' ");
											while($row = mysqli_fetch_array($sql)){ ?>
										<a href="index.php?page=notifications">
											<?php 
                                        		$sql1 = "SELECT * FROM `service_provider_profile_tbl` WHERE `service_provider_Id` = '".$row['service_provider_id']."' ";
                                        		$result1 = mysqli_query($con,$sql1);
                                        		$fetch = mysqli_fetch_array($result1);
                                        	?>
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="../serviceprovider/providerpic/<?php echo $fetch['profile_pic']; ?>">
												</span>
												<div class="media-body">
													<p class="noti-details"> <span class="noti-title"><?php echo $fetch['firstname']." ".$fetch['lastname']; ?> has confirmed your service</span></p>
													<p class="noti-time"><span class="notification-time"><?php echo $row['DOI']; ?></span></p>
												</div>
											</div>
										</a>
									<?php } ?>
									</li>
									<li class="notification-message">
										<?php 
											$id = $_SESSION['uid'];
											$sql = mysqli_query($con,"SELECT * FROM `quotation` WHERE `user_Id` = '".$id."' ");
											while($row = mysqli_fetch_array($sql)){ ?>
										<a href="index.php?page=notifications">
											<?php 
                                        		$sql1 = "SELECT * FROM `service_provider_profile_tbl` WHERE `service_provider_Id` = '".$row['service_provider_id']."' ";
                                        		$result1 = mysqli_query($con,$sql1);
                                        		$fetch = mysqli_fetch_array($result1);
                                        	?>
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="../serviceprovider/providerpic/<?php echo $fetch['profile_pic']; ?>">
												</span>
												<div class="media-body">
													<p class="noti-details"> <span class="noti-title"><?php echo $fetch['firstname']." ".$fetch['lastname']; ?> has sent you a quotation</span></p>
													<p class="noti-time"><span class="notification-time"><?php echo $row['DOI']; ?></span></p>
												</div>
											</div>
										</a>
									<?php } ?>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="index.php?page=notifications">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<!-- chat -->
					<!--<li class="nav-item logged-item">
						<a href="index.php?page=chat" class="nav-link">
							<i class="fa fa-comments" aria-hidden="true"></i>
						</a>
					</li>-->
					<!-- /chat -->
					
					<li class="nav-item logged-item">
						<a href="index.php?page=logout" class="nav-link">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
						</a>
					</li>

					<li class="nav-item dropdown has-arrow logged-item">
						<a href="index.php?page=home" data-toggle="dropdown" aria-expanded="false">
							<span class="user-img">
								<img class="rounded-circle" src="userpic/<?php echo $fetch1['profile_pic'];?>" alt="">
							</span>
						</a>
					</li>
				</ul>
			</nav>
		</header>
		<!-- /Header -->