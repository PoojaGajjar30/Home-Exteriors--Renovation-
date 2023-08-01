<?php if(!isset($_SESSION['uid'])) { 
header('location:./user-register.php');
}
?>
<?php 
	$sql = mysqli_query($con,"select * from `service_tbl` where `service_id` = '".$_GET['id']."' ");
	$result = mysqli_fetch_array($sql);
?>
	 	<div class="content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="section-header text-center">
							<h2>Book Service</h2>
						</div>
						<form action="index.php?page=book-service-action" method="POST">
							<div class="row">
								<input type="hidden" name="userid" value="<?php echo $_SESSION['uid']; ?>">
								<input type="hidden" name="serviceid" value="<?php echo $result['service_id']; ?>">
								<input type="hidden" name="serviceproviderid" value="<?php echo $result['service_provider_id']; ?>">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Service Name <span class="text-danger">*</span></label>
										<input class="form-control" name="service_name" type="text" placeholder="Enter a location" value="<?php echo $result['service_name']; ?>" readonly autocomplete="off">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Service Category<span class="text-danger">*</span></label>
										<input class="form-control hasDatepicker" type="text" placeholder="Enter Category" name="category_id" value="<?php echo $result['category_id']; ?>" readonly>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label>Service Location <span class="text-danger">*</span></label>
										<input class="form-control" type="text" placeholder="Enter a location" name="location" autocomplete="off">
									</div>                            
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label>State <span class="text-danger">*</span></label>
										<select class="form-control" name="state">
											<option value="">Select Your State</option>
											<?php $sql = mysqli_query($con,"select * from `state` ");  
											while ($row = mysqli_fetch_array($sql)){ 
											?>
											<option value="<?php echo $row['State_name']; ?>"><?php echo $row['State_name']; ?></option>	
											<?php } ?>
											</select>
									</div>
								</div>
								<div class="col-lg-4">
								   <div class="form-group">
										<label>City<span class="text-danger">*</span></label>
										<select class="form-control" name="city">
											<option value="">Select Your City</option>
											<?php $sql = mysqli_query($con,"select * from `city` ");  
											while ($row = mysqli_fetch_array($sql)){ 
											?>
											<option value="<?php echo $row['City_name']; ?>"><?php echo $row['City_name']; ?></option>	
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label>Area <span class="text-danger">*</span></label>
										<select class="form-control" name="area">
											<option value="">Select Your Area</option>
											<?php $sql = mysqli_query($con,"select * from `area` ");  
											while ($row = mysqli_fetch_array($sql)){ 
											?>
											<option value="<?php echo $row['Area_name']; ?>"><?php echo $row['Area_name']; ?></option>	
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
								   <div class="form-group">
										<label>Date <span class="text-danger">*</span></label>
										<input class="form-control hasDatepicker" name="date" type="date">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Time slot <span class="text-danger">*</span></label>
										<select class="form-control" name="time">
											<option>10:00 AM</option>
											<option>11:00 AM</option>
											<option>12:00 PM</option>
											<option>01:00 PM</option>
											<option>02:00 PM</option>
											<option>03:00 PM</option>
											<option>04:00 PM</option>
											<option>05:00 PM</option>
											<option>06:00 PM</option>
											<option>07:00 PM</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="text-center">
											<div id="load_div"></div>
										</div>
										<label>Notes</label>
										<textarea class="form-control" rows="5" name="note" placeholder="Send details about work"></textarea>
									</div>
								</div>
							</div>
							<div class="submit-section">
								<button class="btn btn-primary submit-btn" type="submit" name="book-service">Book Service</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>﻿