		<div class="content">
			<div class="container">
				<div class="row">
					<?php
						include_once('./header/sidebar.php');
					?>
					<div class="col-xl-9 col-md-8">
						<h4 class="widget-title">Dashboard</h4>
						<div class="row">
							<div class="col-lg-4">
								<a href="index.php?page=provider-bookings" class="dash-widget dash-bg-1">
									<?php 
										$sql1 = "select * from `book_service` where `service_provider_id` = '".$_SESSION['sid']."' AND `Isactive` = 1 ";  
										$result1 = mysqli_query($con,$sql1);
										
										$nu1 = mysqli_num_rows($result1);
									?>
									<span class="dash-widget-icon"><?php print_r($nu1); ?></span>
									<div class="dash-widget-info">
										<span>Bookings</span>
									</div>
								</a>
							</div>
							<div class="col-lg-4">
								<a href="index.php?page=my-services" class="dash-widget dash-bg-2">
									<?php 
										$sql = "select * from `service_tbl` where `service_provider_id` = '".$_SESSION['sid']."' AND `Isactive` = 1 ";  
										$result = mysqli_query($con,$sql);
										$nu = mysqli_num_rows($result);
									?>
									<span class="dash-widget-icon"><?php print_r($nu); ?></span>
									<div class="dash-widget-info">
										<span>Services</span>
									</div>

								</a>
							</div>
							<div class="col-lg-4">
								<a href="index.php?page=provider-quotation-table" class="dash-widget dash-bg-3">
									<?php 
										$sql2 = "select * from `quotation` where `service_provider_id` = '".$_SESSION['sid']."' AND `Isactive` = '0' ";  
										$result2 = mysqli_query($con,$sql2);
										$nu2 = mysqli_num_rows($result2);
									?>
									<span class="dash-widget-icon"><?php print_r($nu2); ?></span>
									<div class="dash-widget-info">
										<span>Quotation Request</span>
									</div>
								</a>
							</div>
						</div>
						<div class="card mb-0">
							<div class="row no-gutters">
								<div class="col-lg-8">
									<div class="card-body">
										<h6 class="title">Plan Details</h6>
										<div class="sp-plan-name">
											<h6 class="title">
												Gold <span class="badge badge-success badge-pill">Active</span>
											</h6>
											<p>Subscription ID: <span class="text-base">100394949</span></p>
										</div>
										<ul class="row">
											<li class="col-6 col-lg-6">
												<p>Started On 15 Jul, 2020</p>
											</li>
											<li class="col-6 col-lg-6">
												<p>Price $1502.00</p>
											</li>
										</ul>
										<h6 class="title">Last Payment</h6>
										<ul class="row">
											<li class="col-sm-6">
												<p>Paid at 15 Jul 2020</p>
											</li>
											<li class="col-sm-6">
												<p><span class="text-success">Paid</span>  <span class="amount">$1502.00</span>
												</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="sp-plan-action card-body">
										<div class="mb-2">
											<a href="provider-subscription.html" class="btn btn-primary"><span>Change Plan</span></a>
										</div>
										<div class="next-billing">
											<p>Next Billing on <span>15 Jul, 2021</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>﻿