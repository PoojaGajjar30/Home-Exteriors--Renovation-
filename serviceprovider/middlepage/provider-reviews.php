		<div class="content">
			<div class="container">
				<div class="row">
					<?php
						include_once('./header/sidebar.php');
					?>
					<div class="col-xl-9 col-md-8">
						<h4 class="widget-title">Reviews</h4>
						<div class="card review-card mb-0">
							<div class="card-body">
								
								<!-- Review -->
								<div class="review-list">
									<?php 
										$sql = mysqli_query($con,"SELECT * FROM `review` WHERE `service_provider_id` = '".$_SESSION['sid']."' ");
										while ($row = mysqli_fetch_assoc($sql)) {
									?>
									<?php
										$sql1 = mysqli_query($con,"SELECT * FROM `service_tbl` WHERE `service_id` = '".$row['service_id']."' ");
										$fetch = mysqli_fetch_array($sql1);
									?>
									<div class="review-img">
										<img class="rounded img-fluid" src="./servicepic/<?php echo $fetch['service_photo'] ?>" alt="">
									</div>
									<div class="review-info">
										<h5><a href="#"><?php echo $fetch['service_name']; ?></a></h5>
										<?php 
                                       		$sql1 = mysqli_query($con,"SELECT * FROM `user_registreation_tbl` WHERE `user_Id` = '".$row['user_id']."' ");
                                       		$fetch = mysqli_fetch_array($sql1);
                                   		?>
										<div class="review-user">
											<img class="avatar-xs rounded-circle" src="../user/userpic/<?php echo $fetch['profile_pic']; ?>" alt=""> <?php echo $fetch['firstname']." ".$fetch['lastname'] ?>
										</div>
									</div>
									<div class="review-count">
										<div class="rating">
											<?php if($row['review']=='1'){ ?>
											<i class="fas fa-star filled"></i>
										<?php } ?>
										<?php if($row['review']=='2'){  ?>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
										<?php } ?>
										<?php if($row['review']=='3'){  ?>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
										<?php } ?>
										<?php if($row['review']=='4'){  ?>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
										<?php } ?>
										<?php if($row['review']=='5'){  ?>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
										<?php } ?>
											<span class="d-inline-block average-rating">(<?php  echo $row['review']; ?>)</span>
										</div>
									</div>
								<?php } ?>
								</div>
								<!-- /Review -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>