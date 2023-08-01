		<div class="content">
			<div class="container">
				<div class="row">
					<?php 
						include_once('./header/sidebar.php');
					?>
					<div class="col-xl-9 col-md-8">
						<div class="row align-items-center mb-4">
							<div class="col">
								<h4 class="widget-title mb-0">My Bookings</h4>
							</div>
<!--						<div class="col-auto">
								<div class="sort-by">
									<select class="form-control-sm custom-select">
										<option>All</option>
										<option>Pending</option>
										<option>Inprogress</option>
										<option>Complete Request</option>
										<option>Rejected</option>
										<option>Cancelled</option>
										<option>Completed</option>
									</select>
								</div>
							</div>-->
						</div>
						
						<div class="bookings">  
							<?php 
								$sql = "SELECT * from `book_service` WHERE `user_id` = '".$_SESSION['uid']."' ";
								$result = mysqli_query($con,$sql);
								$nu = mysqli_num_rows($result);
								if($nu > 0){
									while($row = mysqli_fetch_array($result))
									{
							?>
							<div class="booking-list">
								<div class="booking-widget">
									<a href="#" class="booking-img">
										<?php 
                                        	$sql2 = "SELECT * FROM `service_tbl` WHERE `service_id` = '".$row['service_id']."' ";
                                        	$result2 = mysqli_query($con,$sql2);
                                        	$fetch1 = mysqli_fetch_array($result2);
                                        ?>
										<img src="../serviceprovider/servicepic/<?php echo $fetch1['service_photo']; ?>" alt="Service Image">
									</a>
									<div class="booking-det-info">
										<h3>
											<a href="#"><?php echo $fetch1['service_name']; ?></a>
										</h3>
										<ul class="booking-details">
											<li>
												<span>Booking Date</span> <?php echo $row['booking_date'] ; ?>
												<?php if($row['isactive'] == 0) { ?>
													<span class="badge badge-pill badge-prof bg-primary">Booking Sent</span>
													<?php }else { ?>
													<span class="badge badge-pill badge-prof bg-success">Booking Confirmed</span>
												<?php } ?>
											</li>
											<li><span>Booking time</span> <?php echo $row['time_slot']; ?></li>
											<li><span>Location</span> <?php echo $row['location']; ?></li>
											<li><span>Area</span> <?php echo $row['area']; ?></li>
											<li><span>City</span> <?php echo $row['city']; ?></li>
											<li><span>State</span> <?php echo $row['state']; ?></li>
											<?php 
                                        		$sql1 = "SELECT * FROM `service_provider_profile_tbl` WHERE `service_provider_Id` = '".$row['service_provider_id']."' ";
                                        		$result1 = mysqli_query($con,$sql1);
                                        		$fetch = mysqli_fetch_array($result1);
                                        	?>
											<li><span>Phone</span><?php echo $fetch['mobilenum']; ?></li>
											<li>
												<span>Provider</span>
												<div class="avatar avatar-xs mr-1">
													<img class="avatar-img rounded-circle" alt="User Image" src="../serviceprovider/providerpic/<?php echo $fetch['profile_pic']; ?>">
												</div>
												<?php echo $fetch['firstname']." ".$fetch['lastname']; ?>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<?php  } }?>
						</div>
<!--					<div class="pagination">
							<ul>
								<li class="active">
									<a href="javascript:void(0);">1</a>
								</li>
								<li>
									<a href="javascript:void(0);">2</a>
								</li>
								<li>
									<a href="javascript:void(0);">3</a>
								</li>
								<li>
									<a href="javascript:void(0);">4</a>
								</li>
								<li class="arrow">
									<a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a>
								</li>
							</ul>
						</div>-->
					</div>
				</div>
			</div>
		</div> 