		<div class="content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="section-header text-center">
							<h2>Change Password</h2>
						</div>
						<form action="index.php?page=user_profile_settings" method="post" enctype="multipart/form-data">
							<?php 
								$sql = mysqli_query($con,"SELECT * FROM `user_registreation_tbl` WHERE `user_Id` = '".$_SESSION['uid']."'");
								$fetch = mysqli_fetch_array($sql);
							?>
							<div class="service-fields mb-3">
								<h3 class="heading-2">Password Information</h3>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Old Password <span class="text-danger">*</span></label> 
											<input class="form-control" name="oldpassword" type="password">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>New Password <span class="text-danger">*</span></label>
											<input class="form-control" name="newpassword" type="password">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Re-Enter New Passord <span class="text-danger">*</span></label>
											<input class="form-control" name="repeatpassword" type="password">
											<?php 
												if (isset($_SESSION['passwordrept'])) {?>
													<?php echo $_SESSION['passwordrept']; unset($_SESSION['passwordrept']); ?>
												*<?php } ?>
										</div>
									</div>
								</div>
							</div> 	
							<div class="submit-section">
								<button class="btn btn-primary submit-btn" name="change_password" type="submit">Change Password</button>
							</div>
						</form>
						<?php if (isset($_SESSION['password'])) { ?>
							<div class="alert alert-primary" role="alert">
								<?php echo $_SESSION['password']; unset($_SESSION['password']) ?>
							</div>
						<?php } ?>
						<?php if(isset($_SESSION['passwordchange'])) { ?>
							<div class="alert alert-danger" role="alert">
								<?php echo $_SESSION['passwordchange']; unset($_SESSION['passwordchange']); ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>﻿