		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>Find a Professional</h2>
						</div>
					</div>
					<div class="col-auto float-right ml-auto breadcrumb-menu">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.php?page=home">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Find a Professional</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->
		
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div>
							<!--viral code -->
						
						<?php if(isset($_POST['q'])) { ?>
							<div class="row">

								<?php 
								$keyword =  $_POST['q'];

			
$sql = mysqli_query($con,"select * from `category` where `category_name`  LIKE '%" . 
           $keyword . "%' and `Isactive` = '1' ");



									while($row = mysqli_fetch_array($sql)) { ?>
								<div class="col-lg-4 col-md-6">
									
									<div class="service-widget">
										<div class="service-img">
											<a href="index.php?page=search&id=<?php echo $row['category_Id']; ?>">
												<img class="img-fluid serv-img" alt="Service Image" src="./admin/categorypic/<?php echo $row['category_image']; ?>">
											</a>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="index.php?page=service-details"><?php echo $row['category_name']; ?></a>
											</h3>
										</div>
									</div>
								
								</div>
								<?php } ?>
							</div>
							<!--viral code end -->
<?php }else { ?>


							<div class="row">

								<?php $sql = mysqli_query($con,"select * from `service_tbl` where `category_id` = '".$_GET['id']."' "); 
									while($row = mysqli_fetch_array($sql)) { ?>
								<div class="col-lg-4 col-md-6">
									
									<div class="service-widget">
										<div class="service-img">
											<a href="index.php?page=service-details&id=<?php echo $row['service_id']; ?>">
												<img class="img-fluid serv-img" alt="Service Image" src="./serviceprovider/servicepic/<?php echo $row['service_photo']; ?>">
											</a>
											<div class="item-info">
												<div class="service-user">
													<?php $sql2 = mysqli_query($con,"select * from `service_provider_profile_tbl` where `service_provider_Id` = '".$row['service_provider_id']."' ");
														$row2 = mysqli_fetch_array($sql2); ?>
													<a href="#">
														<img src="./serviceprovider/providerpic/<?php echo $row2['profile_pic'] ?>" alt="">
													</a>	
													<span class="service-price">&#2352;<?php echo " ". $row['service_amount']; ?></span>
												</div>
												<div class="cate-list">
													<?php $sql1 = mysqli_query($con,"select * from `category` where `category_Id` = '".$_GET['id']."' ");
														$row1 = mysqli_fetch_array($sql1); ?>
													<a class="bg-yellow" href="index.php?page=service-details"><?php echo $row1['category_name']; ?></a>
												</div>
											</div>
										</div>
										<div class="service-content">
											<h3 class="title">
												<a href="index.php?page=service-details"><?php echo $row['service_name']; ?></a>
											</h3>
											<div class="user-info">
												<div class="row">
													<?php $sql2 = mysqli_query($con,"select * from `service_provider_profile_tbl` where `service_provider_Id` = '".$row['service_provider_id']."' ");
														$row2 = mysqli_fetch_array($sql2); ?>
													<span class="col-auto ser-contact"><i class="fas fa-phone mr-1"></i> 
														<span><?php echo $row2['mobilenum']; ?></span>
													</span>
													<span class="col ser-location">
														<span><?php echo $row['service_location']; ?></span> <i class="fas fa-map-marker-alt ml-1"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
								
								</div>
								<?php } ?>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>﻿