<?php  
$id = $_REQUEST['id'];
$sql = mysqli_query($con,"select * from `service_tbl` where `service_id` = '$id' ");
$row = mysqli_fetch_array($sql);
?>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="service-view">
							<div class="service-header">
								<h1><?php echo $row['service_name']; ?></h1>
								<address class="service-location"><i class="fas fa-location-arrow"></i> <?php echo $row['service_location']; ?></address>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<span class="d-inline-block average-rating">(5)</span>
								</div>
								<?php
									$sql1 = mysqli_query($con,"SELECT * FROM `category` WHERE `category_Id` = '".$row['category_id']."' ");
									$fetch = mysqli_fetch_array($sql1);
								?>
								<div class="service-cate">
									<a href="#"><?php echo $fetch['category_name']; ?></a>
								</div>
							</div>
							<div class="service-images service-carousel">
								<div class="images-carousel owl-carousel owl-theme">
									<div class="item">
										<img src="assets/img/services/service-02.jpg" alt="" class="img-fluid">
									</div>
									<div class="item">
										<img src="assets/img/services/service-02.jpg" alt="" class="img-fluid">
									</div>
									<div class="item">
										<img src="assets/img/services/service-02.jpg" alt="" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="service-details">
								<ul class="nav nav-pills service-tabs" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Services Offered</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-book-tab" data-toggle="pill" href="#pills-book" role="tab" aria-controls="pills-book" aria-selected="false">Reviews</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										<div class="card service-description">
											<div class="card-body">
												<h5 class="card-title">Service Details</h5>
												<p class="mb-0"><?php echo $row['service_descriptions']; ?></p>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title">Services Offered</h5>
												<div class="service-offer">
													<ul class="list-bullet">
														<li>Lorem Ipsum</li>
														<li>Lorem Ipsum</li>
														<li>Lorem Ipsum</li>
														<li>Lorem Ipsum</li>
														<li>Lorem Ipsum</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-book" role="tabpanel" aria-labelledby="pills-book-tab">
										<div class="card review-box">
											<div class="card-body">
												<div class="review-list">
                                                    <div class="review-img">
														<img class="rounded-circle" src="assets/img/customer/user-01.jpg" alt="">
													</div>
                                                    <div class="review-info">
                                                        <h5>Jeffrey Akridge</h5>
                                                        <div class="review-date">August 06, 2020 20:07 pm</div>
                                                        <p class="mb-0">Good Work</p>
                                                    </div>
                                                    <div class="review-count">
                                                        <div class="rating">
                                                            <i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>	
                                                            <span class="d-inline-block average-rating">(5.0)</span>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>

					<div class="col-lg-4 theiaStickySidebar">
						<div class="sidebar-widget widget">
							<div class="service-amount">
								<span>&#2352;<?php echo $row['service_amount']; ?></span>
							</div>
							<div class="service-book">
								<a href="index.php?page=book-service&id=<?php echo $row['service_id']; ?>" class="btn btn-primary"> Book Service </a><br>
								<a href="index.php?page=request-quotation&id=<?php echo $row['service_id']; ?>" class="btn btn-primary"> Request Quotation </a>
							</div>
						</div>
						<?php 
						$id = $row['service_provider_id'];
						$sql = mysqli_query($con,"select * from `service_provider_profile_tbl` where `service_provider_id` = '".$id."' ");
					
						$row = mysqli_fetch_array($sql);
						
						?>
						<div class="card provider-widget clearfix">
							<div class="card-body">
								<h5 class="card-title">Service Provider</h5>
								<div class="about-author">
									<div class="about-provider-img">
										<div class="provider-img-wrap">
											<a href="javascript:void(0);">
												<img class="img-fluid rounded-circle" alt="" src="./serviceprovider/providerpic/<?php echo $row['profile_pic']; ?>">
											</a>
										</div>
									</div>
									<div class="provider-details">
										<a href="javascript:void(0);" class="ser-provider-name"><?php echo $row['firstname']." ".$row['lastname']; ?></a>
										<p class="last-seen"><i class="fas fa-circle online"></i> Online</p>
										<p class="text-muted mb-1">Member Since Apr 2020</p>
									</div>
								</div>
								<hr>
								<div class="provider-info">
									<p class="mb-1"><i class="far fa-envelope"></i> <a href="#"><?php echo $row['email']; ?></a></p>
									<p class="mb-0"><i class="fas fa-phone-alt"></i><?php echo $row['mobilenum']; ?></p>
								</div>
							</div>
						</div>
						<div class="card available-widget">
							<div class="card-body">
								<h5 class="card-title">Service Availability</h5>
								<ul>
									<li><span>Monday</span>9:30 AM - 7:00 PM</li>
									<li><span>Tuesday</span>9:30 AM - 7:00 PM</li>
									<li><span>Wednesday</span>9:30 AM - 7:00 PM</li>
									<li><span>Thursday</span>9:30 AM - 7:00 PM</li>
									<li><span>Friday</span>9:30 AM - 7:00 PM</li>
									<li><span>Saturday</span>9:30 AM - 7:00 PM</li>
									<li><span>Sunday</span>9:30 AM - 7:00 PM</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>﻿