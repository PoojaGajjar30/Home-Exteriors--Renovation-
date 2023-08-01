		<div class="content">
			<div class="container">
				<div class="row">
					<?php include_once('header/sidebar.php');?>
					<div class="col-xl-9 col-md-8">
						<h4 class="widget-title">My Services</h4>
						<ul class="nav nav-tabs menu-tabs">
							<li class="nav-item">
								<a class="nav-link" href="index.php?page=my-services">Active Services</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="index.php?page=my-services-inactive">Inactive Services</a>
							</li>
						</ul>
						<div class="row">
								<?php //print_r($_SESSION); ?>
								<?php 
								$sql = "select * from `service_tbl` where `service_provider_id` = '".$_SESSION['sid']."' AND `Isactive` = '0' "; 
								$result = mysqli_query($con,$sql);
								$nu = mysqli_num_rows($result);
								if($nu > 0){
								while($row = mysqli_fetch_array($result))
								{

								?>
							<div class="col-lg-4 col-md-6 inactive-service">
								
								<div class="service-widget">
									<div class="service-img">
										<a href="#">
											<img class="img-fluid serv-img" alt="Service Image" src="servicepic/<?php echo $row['service_photo']; ?>">
										</a>
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="providerpic/<?php echo $fetch['profile_pic'];?>" alt="">
												</a>
												<span class="service-price">&#2352; <?php echo $row['service_amount']; ?></span>
											</div>
											<?php 
												$sql1 = "SELECT * FROM `category` WHERE `category_Id` = '".$row['category_id']."' ";
												$result1 = mysqli_query($con,$sql1);
												$row1 = mysqli_fetch_array($result1);
											?>
											<div class="cate-list">
												<a class="bg-yellow" href="#"><?php echo $row1['category_name']; ?></a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title">
											<a href="#"><?php echo $row['service_name']; ?></a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(3)</span>
										</div>
										
									</div>
								</div>

							</div>


							<?php } ?>
							<?php }else { ?>
								<h1>Service is not Found</h1>
							<?php } ?>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header"> 
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
						</button>
					</div> 
					<div class="modal-footer">	<a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
						<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="deleteNotConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="acc_title">Delete Service</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Service is Booked and Inprogress..</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">OK</button>
					</div>
				</div>
			</div>
		</div>﻿