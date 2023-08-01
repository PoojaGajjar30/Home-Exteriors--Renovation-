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
	<div class="main-wrapper">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="login-header">
						<h3>Join as a Provider</h3>
					</div>
					
					<!-- Register Form -->
					<form action="loginactionprovider.php" method="POST">
						<div class="form-group form-focus">
							<label class="focus-label">First Name</label>
							<input type="text" class="form-control" name="firstname" placeholder="Manan">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Last Name</label>
							<input type="text" class="form-control" name="lastname" placeholder="Gandhi">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Email</label>
							<input type="text" class="form-control" name="Email" placeholder="xyz@exapmle.com">
						</div>
						<?php if(isset($_SESSION['alredmail'])) { ?>
						<span style="color: red"><?php echo $_SESSION['alredmail']; unset($_SESSION['alredmail']); ?></span>
					<?php } ?>
						<div class="form-group form-focus">
							<label class="focus-label">Create Password</label>
							<input type="password" class="form-control" name="Password" placeholder="********">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Mobile Number</label>
							<input type="text" class="form-control" name="mobilenum" placeholder="986 452 1236">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Date Of Birth</label>
							<input type="date" class="form-control" name="dob">
						</div>
						<div class="text-right">
							<a class="forgot-link" href="javascript:void(0);" data-toggle="modal" data-target="#login_provider">Already have an account?</a>
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="signup">Signup</button>
					</form>
					<!-- /Register Form -->
				</div>
			</div>
		</div>

	<div class="modal account-modal fade" id="login_provider">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header p-0 border-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-header">
						<h3>Login as a Provider</h3>
					</div>
					<form action="loginactionprovider.php" method="POST">
						<div class="form-group form-focus">
							<label class="focus-label">Email</label>
							<input type="text" name="Email" class="form-control" placeholder="HSD@gmail.com">
						</div>
						<div class="form-group form-focus">
							<label class="focus-label">Password</label>
							<input type="password" name="Password" class="form-control" placeholder="********">
						</div>
						<div class="text-right">	
						</div>
						<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="loginbtn">Login</button>
						<div class="text-center dont-have">Don’t have an account? <a href="provider-register.php">Register</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Owl JS -->
	<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
</body>
</html>