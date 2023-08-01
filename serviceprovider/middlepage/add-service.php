		<div class="content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="section-header text-center">
							<h2>Add Service</h2>
						</div>
						<form action="index.php?page=service_add_action" method="post" enctype="multipart/form-data">
							<input type="hidden" name="username" value="<?php echo $_SESSION['sid']; ?>">
							<div class="service-fields mb-3">
								<h3 class="heading-2">Service Information</h3>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Service Title <span class="text-danger">*</span></label> 
											<input class="form-control" name="service_title" type="text">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Service Amount <span class="text-danger">*</span></label>
											<input class="form-control" name="service_amount" type="text">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Service Location <span class="text-danger">*</span></label>
											<input class="form-control" name="service_location" type="text">
										</div>
									</div>
								</div>
							</div>
							<div class="service-fields mb-3">
								<h3 class="heading-2">Service Category</h3>
								<div class="row">
									
									<div class="col-lg-6">
										<div class="form-group">
											<label>Category <span class="text-danger">*</span></label>
											<select name="category_id" class="form-control">
						<option value="">Select Your Category</option>
						<?php $sql = mysqli_query($con,"select * from `category` ");  
							while ($row = mysqli_fetch_array($sql)){ 

								?>
								<option value="<?php echo $row['category_Id']; ?>"><?php echo $row['category_name']; ?></option>
												
											<?php } ?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="service-fields mb-3">
								<h3 class="heading-2">Service Offer</h3>
								<div class="membership-info">
									<div class="row form-row membership-cont">
										<div class="col-lg-6">
											<div class="form-group">
												<label>Service Offered <span class="text-danger">*</span></label>
												<input class="form-control" name="offer" type="text">
											</div>
										</div>
									</div>
								</div>
								<div class="add-more form-group">
									<a href="javascript:void(0);" class="add-membership"><i class="fas fa-plus-circle"></i> Add More</a>
								</div>
							</div>
							<div class="service-fields mb-3">
								<h3 class="heading-2">Details Information</h3>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Descriptions <span class="text-danger">*</span></label>
											<textarea class="form-control service-desc" name="description"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="service-fields mb-3">
								<h3 class="heading-2">Service Gallery </h3>
								<div class="row">
									<div class="col-lg-12">
										<div class="service-upload">
											<i class="fas fa-cloud-upload-alt"></i> <span>Upload Service Images *</span>
											<input type="file" name="servicepi">
										</div>
									</div>
								</div>
							</div>
							<div class="submit-section">
								<button class="btn btn-primary submit-btn" name="addservice" type="submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>﻿