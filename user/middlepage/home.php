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
								<a href="index.php?page=user-bookings" class="dash-widget dash-bg-1">
									<?php 
										$sql1 = "select * from `book_service` where `user_id` = '".$_SESSION['uid']."' AND `Isactive` = 1 ";  
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
								<a href="index.php?page=user-reviews" class="dash-widget dash-bg-2">
									<?php 
										$sql2 = "select * from `quotation` where `user_Id` = '".$_SESSION['uid']."' AND `Isactive` = 1 ";  
										$result2 = mysqli_query($con,$sql2);
										$nu2 = mysqli_num_rows($result2);
									?>
									<span class="dash-widget-icon"><?php print_r($nu2); ?></span>
									<div class="dash-widget-info">
										<span>Quotation</span>
									</div>
								</a>
							</div>
							<div class="col-lg-4">
								<a href="index.php?page=notifications" class="dash-widget dash-bg-3">
									<span class="dash-widget-icon">1</span>
									<div class="dash-widget-info">
										<span>Notification</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>﻿