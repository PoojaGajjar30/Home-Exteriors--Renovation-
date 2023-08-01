<?php include_once('database/index.php'); ?>
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
						<li <?php if($_GET['page'] == "index.php" || $_GET['page'] == "home" || $_GET['page'] == "") { ?> class="active" <?php } ?>>
							<a href="index.php?page=home">Home</a>
						</li>
						<li <?php if($_GET['page'] == "about-us") { ?> class="active" <?php } ?>>
							<a href="index.php?page=about-us">About Us</a>
						</li>
						<li <?php if($_GET['page'] == "categories") { ?> class="active" <?php } ?>>
							<a href="index.php?page=categories">Categories</a>
						</li>
						<li>
							<a href="provider-register.php">Become a Professional</a>
						</li>
						<li>
							<a href="user-register.php">Become a User</a>
						</li>
						<li <?php if($_GET['page'] == "contact-us") { ?> class="active" <?php } ?>>
							<a href="index.php?page=contact-us">Contact Us</a>
						</li>
						<li <?php if($_GET['page'] == "feedback") { ?> class="active" 
						<?php } ?>>
							<a href="index.php?page=feedback">Feedback</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- /Header -->