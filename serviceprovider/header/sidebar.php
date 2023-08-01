					<?php 
					$sql = mysqli_query($con,"SELECT * FROM `service_provider_profile_tbl` WHERE `service_provider_Id` = '".$_SESSION['sid']."'");
					$fetch = mysqli_fetch_array($sql);
					error_reporting(0);
					?>
					<div class="col-xl-3 col-md-4 theiaStickySidebar">
						<div class="mb-4">
							<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
								
								<img class="avatar-lg rounded-circle" src="providerpic/<?php echo $fetch['profile_pic'];?>" alt="">
								<div class="ml-sm-3 ml-md-0 ml-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
									<?php if (isset($_SESSION['sid'])) { ?>
										<h6 class="mb-0"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?></h6>
									<?php  } ?>
										<p class="text-muted mb-0">Member Since<?php echo " ".$fetch['DOI'];?></p>
								</div>
							</div>
						</div>
						<div class="widget settings-menu">
							<ul>
								<li class="nav-item">
									<a href="index.php?page=home" <?php if($_GET['page']=='' || $_GET['page']=='home'){ ?> class='active'<?php } ?>>
										<i class="fas fa-chart-line"></i> <span>Dashboard</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="index.php?page=my-services" <?php if($_GET['page']=='my-services'){ ?> class='active'<?php } ?>>
										<i class="far fa-address-book"></i> <span>My Services</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="index.php?page=provider-bookings" <?php if($_GET['page']=='provider-bookings'){ ?> class='active'<?php } ?>>
										<i class="far fa-calendar-check"></i> <span>Booking List</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="index.php?page=provider-settings" <?php if($_GET['page']=='provider-settings'){ ?> class='active'<?php } ?>>
										<i class="far fa-user"></i> <span>Profile Settings</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="index.php?page=provider-quotation-table" <?php if($_GET['page']=='provider-quotation-table'){ ?> class='active'<?php } ?>>
										<i class="far fa-money-bill-alt"></i> <span>Quotation</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="index.php?page=provider-reviews" <?php if($_GET['page']=='provider-reviews'){ ?> class='active'<?php } ?>>
										<i class="far fa-star"></i> <span>Reviews</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="index.php?page=change-password" <?php if($_GET['page']=='change-password'){ ?> class='active'<?php } ?>>
										<i class="fas fa-user-lock"></i> <span>Change Password</span>
									</a>
								</li>
							</ul>
						</div>
					</div>