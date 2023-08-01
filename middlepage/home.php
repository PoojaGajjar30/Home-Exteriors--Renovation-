<!-- Hero Section -->
		<section class="hero-section">
			<div class="layer">
				<div class="home-banner"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="section-search">
								<h3>World's Largest <span>Marketplace</span></h3>
								<p>Search From 150 Awesome Verified Ads!</p>
								<div class="search-box">
									<form action="index.php?page=search" method="post"> 
										<div class="search-input line">

											<i class="fas fa-tv bficon"></i>
											<div class="form-group mb-0">
												<input type="text" name="q" class="form-control" placeholder="What are you looking for?">
											</div>
										</div>
										<div class="search-btn">
											<button class="btn search_service" type="submit">Search</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Hero Section -->
		
		<!-- Category Section -->
		<section class="category-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-6">
								<div class="heading">
									<h2>Featured Categories</h2>
									<span>What do you need to find?</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="viewall">
									<h4><a href="index.php?page=categories">View All <i class="fas fa-angle-right"></i></a></h4>
									<span>Featured Categories</span>
								</div>
							</div>
						</div>
						<div class="catsec">
							<div class="row">
								<?php $sql = mysqli_query($con,"select * from `category` where `Isactive` = '1' LIMIT 6 "); 
								$count = mysqli_num_rows($sql);
								while ($row = mysqli_fetch_array($sql)) {?>
								<div class="col-lg-4 col-md-6">
									<a href="index.php?page=search&id=<?php echo $row['category_Id']; ?>">
										<div class="cate-widget">
											<img src="./admin/categorypic/<?php echo $row['category_image']; ?>" alt="">
											<div class="cate-title">
												<h3><span><i class="fas fa-circle"></i> <?php echo $row['category_name']; ?></span></h3>
											</div>
											
										</div>
									</a>
								</div>
								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Category Section -->
		
		<!-- Popular Servides -->
		<section class="popular-services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-6">
								<div class="heading">
									<h2>Most Popular Services</h2>
									<span>Explore the greates our services. You won’t be disappointed</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="viewall">
									<h4><a href="index.php?page=categories">View All <i class="fas fa-angle-right"></i></a></h4>
									<span>Most Popular</span>
								</div>
							</div>
						</div>
						<div class="row">
						<?php 
							$sql = "select * from `service_tbl` where `Isactive`= 1 LIMIT 3"; 
							$result = mysqli_query($con,$sql);
							$nu = mysqli_num_rows($result);
							if($nu > 0){
								while($row = mysqli_fetch_array($result))
								{
						?>
							<div class="col-lg-4 col-md-6">
								
								<div class="service-widget">
									<div class="service-img">
										<a href="index.php?page=service-details&id=<?php echo $row['service_id']; ?>">
											<img class="img-fluid serv-img" alt="Service Image" src="serviceprovider/servicepic/<?php echo $row['service_photo']; ?>" alt = "service photo">
										</a>
										<?php 
											$id = $row['service_provider_id'];
											$sql = mysqli_query($con,"select * from `service_provider_profile_tbl` where `service_provider_id` = '".$id."' ");
											$fetch = mysqli_fetch_array($sql);
										?>	
										<div class="item-info">
											<div class="service-user">
												<a href="javascript:void(0);">
													<img src="serviceprovider/providerpic/<?php echo $fetch['profile_pic'];?>	" alt="hello">
												</a>
												<span class="service-price">&#2352; <?php echo $row['service_amount']; ?></span>
											</div>
											<?php
												$sql1 = mysqli_query($con,"select * from `category` where `category_Id` = '".$row['category_id']."' ");
												$fetch1 = mysqli_fetch_array($sql1);
											?>
											<div class="cate-list">
												<a class="bg-yellow" href="index.php?page=service-details"><?php echo $fetch1['category_name']; ?></a>
											</div>
										</div>
									</div>
									<div class="service-content">
										<h3 class="title text-truncate">
											<a href="index.php?page=service-details"><?php echo $row['service_name']; ?></a>
										</h3>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<span class="d-inline-block average-rating">(4.3)</span>
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
				</div>
			</div>
		</section>
		<!-- /Popular Servides -->