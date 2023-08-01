<?php 
	$sql = mysqli_query($con,"SELECT * FROM `user_registreation_tbl` WHERE `user_Id` = '".$_SESSION['uid']."'");
		$fetch = mysqli_fetch_array($sql);
?>
		<div class="content">
			<div class="container">
				<div class="row"> 
					<?php 
						include_once('./header/sidebar.php');
					?>
					<div class="col-xl-9 col-md-8">
						<div class="tab-content pt-0">
							<div class="tab-pane show active" id="user_profile_settings">
								<div class="widget">
									<h4 class="widget-title">Profile Settings</h4>
									<form action="index.php?page=user_profile_settings" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-xl-12">
												<h5 class="form-title">Basic Information</h5>
											</div>
											<div class="form-group col-xl-12">
										<div class="media align-items-center mb-3">
											<?php if(isset($_SESSION['userprofile'])){?>
											<div class="alert alert-primary" role="alert"><?php echo $_SESSION['userprofile']; unset($_SESSION['userprofile']); ?>	
											</div>
										<?php } ?>
										
										<img class="user-image" src="userpic/<?php echo $fetch['profile_pic'];?>" alt="">
										
										<input type="file" name="userpi">
											<div class="media-body">
												<?php if (isset($_SESSION['uid'])) { ?>
												<h5 class="mb-0"><?php echo $_SESSION['firstname'].$_SESSION['lastname']; ?></h5><?php  } ?>
												<p>Max file size is 20mb</p>
											</div>
										</div>
									</div>
										</div>
										<div class="row">
								<div class="form-group col-xl-6">
									<label class="mr-sm-2">First Name</label>
									<input class="form-control" type="text" name="firstname" value="<?php echo $fetch['firstname'];?>">
								</div>
								<div class="form-group col-xl-6">
									<label class="mr-sm-2">Last Name</label>
									<input class="form-control" type="text" name="lastname" value="<?php echo $fetch['lastname'];?>">
								</div>
								<div class="form-group col-xl-6">
									<label class="mr-sm-2">Email</label>
									<input class="form-control" type="email" name="emailid" value="<?php echo $fetch['email'];?>">
								</div>
								<div class="form-group col-xl-6">
									<label class="mr-sm-2">Mobile Number</label>
									<input class="form-control no_only" type="text" name="mobilenum" value="<?php echo $fetch['mobilenum'];?>">
								</div>
								<div class="form-group col-xl-6">
									<label class="mr-sm-2">Date of birth</label>
									<input type="date" class="form-control provider_datepicker" name="dob" value="<?php echo $fetch['dob'];?>">
								</div>
								<div class="form-group col-xl-6">
									<label class="mr-sm-2">Gender</label>
										<select  class="form-control" name="gender">
                                            <option value="">Choose option</option>
                                            <option value="1"<?=$fetch['Gender'] == '1' ? ' selected="selected"' : '';?>>Male</option>
                                            <option value="0"<?=$fetch['Gender'] == '0' ? ' selected="selected"' : '';?>>Female</option>
                                        </select>                         
                                </div>
								<div class="col-xl-12">
									<h5 class="form-title">Address</h5>
								</div>
								<div class="form-group col-xl-12">
									<label class="mr-sm-2">Address</label>
									<input type="text" class="form-control" name="address" value="<?php echo $fetch['address'];?>">
								</div>
								<div class="form-group col-xl-6">
									<label class="mr-sm-2">State</label>
									<input type="text" class="form-control" name="state" value="<?php echo $fetch['state'];?>">
								</div>
								<div class="form-group col-xl-6">
									<label class="mr-sm-2">City</label>
									<input type="text" class="form-control" name="city" value="<?php echo $fetch['city'];?>">
								</div>
								<div class="form-group col-xl-6">
									<label class="mr-sm-2">Area</label>
									<input type="text" class="form-control" name="area" value="<?php echo $fetch['area'];?>">
								</div>
								<div class="form-group col-xl-12">
									<button class="btn btn-primary pl-5 pr-5" name="userprofile" type="submit">Update</button>
								</div> 
							</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>