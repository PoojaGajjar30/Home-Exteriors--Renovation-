		<!-- Breadcrumb -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumb-title">
							<h2>Categories</h2>
						</div>
					</div>
					<div class="col-auto float-right ml-auto breadcrumb-menu">
						<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Categories</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadcrumb -->
		
		<div class="content">
			<div class="container">
				<div class="catsec clearfix">
					<div class="row">
						<?php 
							$sql = mysqli_query($con,"select * from `category` where `Isactive` = '1'"); 
							$count = mysqli_num_rows($sql);
							while ($row = mysqli_fetch_array($sql)) {?>
						<div class="col-lg-4 col-md-6">
							<a href="index.php?page=search&id=<?php echo $row['category_Id']; ?>">
								<div class="cate-widget">
									<img src="./admin/categorypic/<?php echo $row['category_image']; ?>" alt="">
									<div class="cate-title">
										<h3><span><i class="fas fa-circle"></i> <?php echo $row['category_name']; ?></span></h3>
									</div>
									<div class="cate-count">
										<i class="fas fa-clone"></i> 21
									</div>
								</div>
							</a>
						</div>
						<?php } ?>
					</div>
					<div class="pagination">
						<ul>
							<li class="active"><a href="javascript:void(0);">1</a></li>
							<li><a href="javascript:void(0);">2</a></li>
							<li><a href="javascript:void(0);">3</a></li>
							<li><a href="javascript:void(0);">4</a></li>
							<li class="arrow"><a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>﻿ 
		</div>﻿ 