		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>Feedback</h2>
						</div>
					</div>
					<div class="col-auto float-right ml-auto breadcrumb-menu">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.php?page=home">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Feedback</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->
		
		<section class="contact-us">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<form action="./feedbackaction.php" method="post">
							<div class="contact-queries">
								<h4 class="mb-4">Drop Your Valuable Feedback</h4>
								<div class="row">
									<div class="form-group col-xl-12">
										<label class="mr-sm-2">First Name</label>
										<input class="form-control" name="fname" type="text" >
									</div>
									
									<div class="form-group col-xl-6">
										<label class="mr-sm-2">Email</label>
										<input class="form-control" name="email" type="email" >
									</div>
									<div class="form-group col-xl-6">
										<label class="mr-sm-2">Mobile Number</label>
										<input class="form-control" name="mobilenum" type="text" >
									</div>
									<div class="form-group col-xl-12">
										<label class="mr-sm-2">Message</label>
										<textarea class="form-control" name="message" rows="5"></textarea>
									</div>
									<div class="col-xl-12 mt-4">
										<button class="btn btn-primary btn-lg pl-5 pr-5" name="feedbackaction" type="submit">Submit</button>
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>