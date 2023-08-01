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
								<address class="service-location"><i class="fas fa-location-arrow"></i> Hanover, Maryland</address>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<span class="d-inline-block average-rating">(5)</span>
								</div>
								<div class="service-cate">
									<a href=""><?php echo $row['category_id']; ?></a>
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
						<h4 class="card-title">Related Services</h4>
						<div class="service-carousel">
							<div class="popular-slider owl-carousel owl-theme">
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-03.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-03.jpg" alt="">
												</a>
												<span class="service-price">$2</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Electrical</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Electric Panel Repairing Service</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4.5)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx30</span></span>
												<span class="col ser-location"><span>Kalispell, Montana</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-04.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-04.jpg" alt="">
												</a>
												<span class="service-price">$14</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Car Wash</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Steam Car Wash</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(0)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx74</span></span>
												<span class="col ser-location"><span>Electra, Texas</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-05.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-05.jpg" alt="">
												</a>
												<span class="service-price">$100</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Cleaning</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">House Cleaning Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(0)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx91</span></span>
												<span class="col ser-location"><span>Sylvester, Georgia</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-06.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-06.jpg" alt="">
												</a>
												<span class="service-price">$100</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Computer</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Computer & Server AMC Service</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(0)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx92</span></span>
												<span class="col ser-location"><span>Los Angeles, California</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-07.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-07.jpg" alt="">
												</a>
												<span class="service-price">$5</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Interior</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Interior Designing</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx28</span></span>
												<span class="col ser-location"><span>Hanover, Maryland</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-08.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-08.jpg" alt="">
												</a>
												<span class="service-price">$100</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Construction</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Building Construction Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx62</span></span>
												<span class="col ser-location"><span>Burr Ridge, Illinois</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-09.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/customer/user-09.jpg" alt="">
												</a>
												<span class="service-price">$500</span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Painting</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Commercial Painting Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(3)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx75</span></span>	
												<span class="col ser-location"><span>Huntsville, Alabama</span>  <i class="fas fa-map-marker-alt ml-1"></i></span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="service-widget">
									<div class="service-img">
										<a href="service-details.html">
											<img class="img-fluid serv-img" alt="Service Image" src="assets/img/services/service-10.jpg">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="#">
													<img src="assets/img/user.jpg" alt="">
												</a>
												<span class="service-price"><?php echo $row['service_amount']; ?></span>
											</div>
											<div class="cate-list">
												<a class="bg-yellow" href="service-details.html">Plumbing</a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="service-details.html">Plumbing Services</a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(3)</span>
										</div>
										<div class="user-info">
											<div class="row">
												<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> <span>xxxxxxxx13</span></span>
												<span class="col ser-location"><span>Richmond, Virginia</span> <i class="fas fa-map-marker-alt ml-1"></i></span>
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
								<span>&#2352; <?php echo $row['service_amount']; ?></span>
							</div>
							
						</div>
						<div class="card provider-widget clearfix">
							<div class="card-body">
								<h5 class="card-title">Service Provider</h5>
								<div class="about-author">
									<div class="about-provider-img">
										<div class="provider-img-wrap">
											<a href="javascript:void(0);">
												<img class="img-fluid rounded-circle" alt="" src="assets/img/provider/provider-01.jpg">
											</a>
										</div>
									</div>
									<div class="provider-details">
										<a href="javascript:void(0);" class="ser-provider-name"><?php   echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></a>
										<p class="last-seen"><i class="fas fa-circle online"></i> Online</p>
										<p class="text-muted mb-1">Member Since Apr 2020</p>
									</div>
								</div>
								<hr>
								<div class="provider-info">
									<p class="mb-1"><i class="far fa-envelope"></i> <a href="#"><?php echo $_SESSION['email']; ?></a></p>
									<p class="mb-0"><i class="fas fa-phone-alt"></i> <?php echo $_SESSION['mobilenum']; ?></p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>﻿