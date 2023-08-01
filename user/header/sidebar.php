					<?php 
					$sql = mysqli_query($con,"SELECT * FROM `user_registreation_tbl` WHERE `user_Id` = '".$_SESSION['uid']."'");
					$fetch = mysqli_fetch_array($sql);
					error_reporting(0);
					?>
					<div class="col-xl-3 col-md-4">
						<div class="mb-4">
							<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
								<img alt="profile image" src="userpic/<?php echo $fetch['profile_pic'];?>" class="avatar-lg rounded-circle">
								<div class="ml-sm-3 ml-md-0 ml-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
									<?php if (isset($_SESSION['uid'])) { ?>
										<h6 class="mb-0"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?></h6>
									<?php  } ?>
										<p class="text-muted mb-0">Member Since<?php echo " ".$fetch['DOI'];?></p>
								</div>
							</div>
						</div>
						<div class="widget settings-menu">
							<ul role="tablist" class="nav nav-tabs">
								<li class="nav-item current">
									<a href="index.php?page=home" <?php if($_GET['page']=='' || $_GET['page']=='home'){ ?> class='active'<?php } ?>>
										<i class="fas fa-chart-line"></i> <span>Dashboard</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="index.php?page=user-bookings" <?php if($_GET['page']=='user-bookings'){ ?> class='active'<?php } ?>>
										<i class="far fa-calendar-check"></i> <span>My Bookings</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="index.php?page=user-settings" <?php if($_GET['page']=='user-settings'){ ?> class='active'<?php } ?>>
										<i class="far fa-user"></i> <span>Profile Settings</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="index.php?page=user-quotation" <?php if($_GET['page']=='user-quotation'){ ?> class='active'<?php } ?>>
										<i class="far fa-money-bill-alt"></i> <span>Quotation</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="index.php?page=user-reviews-tbl" <?php if($_GET['page']=='user-reviews-tbl'){ ?> class='active'<?php } ?>>
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