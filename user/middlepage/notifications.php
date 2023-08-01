		<div class="content">
			<div class="container">
				<div class="row ">
					<div class="col-lg-6">
						<div>
							<h4 class="widget-title text-primary">Notifications</h4>
							<div class="notcenter">
								<div class="notificationlist">
									<div class="inner-content-blk position-relative">
										<?php 
										$id = $_SESSION['uid'];
										$sql = mysqli_query($con,"SELECT * FROM `book_service` WHERE `user_id` = '".$id."' AND `isactive` = '1' "); 
										while($row = mysqli_fetch_array($sql)){ ?>
											<div class="d-flex text-dark">
												<?php 
												$sql1 = "SELECT * FROM `service_provider_profile_tbl` WHERE `service_provider_Id` = '".$row['service_provider_id']."' ";
												$result1 = mysqli_query($con,$sql1);
												$fetch = mysqli_fetch_array($result1);
												?>

												<ul class="list-unstyled">
													<li class="media">
														<img class="mr-3" width="100px" src="../serviceprovider/providerpic/<?php echo $fetch['profile_pic']; ?>">
														<div class="media-body">
															<h5 class="mt-0 mb-1"><strong>
																<?php echo $fetch['firstname']." ".$fetch['lastname']; ?> has confirmed your service</strong></h5>
																<span><?php echo $row['booking_date']; ?></span>
															</div>
														</li><br/>

												</ul>

											</div>
											<?php } ?>
											
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<h4 class="widget-title text-primary">Quotation</h4>
							<div class="">
												<?php 
												$idq = $_SESSION['uid'];
												$sqlq = mysqli_query($con,"SELECT * FROM `quotation` WHERE `user_Id` = '".$id."' "); 
												while($rowq = mysqli_fetch_array($sqlq)){ ?>
													<div class="d-flex text-dark">
														<?php 
														$sql2 = "SELECT * FROM `service_provider_profile_tbl` WHERE `service_provider_Id` = '".$rowq['service_provider_id']."' ";
														$result2 = mysqli_query($con,$sql2);
														$fetch2 = mysqli_fetch_array($result2);
														?>
														<img class="mr-3" src="../serviceprovider/providerpic/<?php echo $fetch2['profile_pic']; ?>" alt="" width="100px" >
														<div class="noti-contents">
															<h5><strong><?php echo $fetch2['firstname']." ".$fetch2['lastname']; ?> has sent you a Quotation</strong></h5>
															<span><?php echo $rowq['booking_date']; ?></span>
														</div>
													</div>
												</div>
											<?php } ?>
						</div>
					</div>
				</div>﻿