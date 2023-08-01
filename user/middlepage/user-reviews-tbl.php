
<script type="text/javascript">
	function doReload(post){
		
        document.location = 'index.php?page=user-reviews&rating='+post;
    }
</script>
		<div class="content">
			<div class="container">
				<div class="row"> 
					<?php 
						include_once('./header/sidebar.php');
					?>
					<div class="col-xl-9 col-md-8">
						<h4 class="mb-4">Review</h4>
						<div class="card transaction-table mb-0">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-center mb-0">
										<thead>
											<tr>
												<th>S.No</th>
												<th>Date</th>
												<th>Provider</th>
												<th>Service</th>
												<th>Review</th>
												
											</tr>
										</thead>
										<?php
                                           $sql = "SELECT * FROM `book_service` WHERE `user_id` = '".$_SESSION['uid']."' ";
                                            $result = mysqli_query($con,$sql);
                                            while ($row = mysqli_fetch_assoc($result)) {    
                                        ?>
                                        <?php 
                                        	$sql1 = "SELECT * FROM `service_provider_profile_tbl` WHERE `service_provider_Id` = '".$row['service_provider_id']."' ";
                                        	$result1 = mysqli_query($con,$sql1);
                                        	$fetch = mysqli_fetch_array($result1);
                                        ?>
										<tbody>
											<tr>
			<td><?php echo $row['booking_id']; ?></td>
			<td><?php echo $row['booking_date']; ?></td>
			<td><?php echo $fetch['firstname']." ".$fetch['lastname']; ?></td>
			<td><?php echo $row['service_name']; ?></td>
												<td>
						<?php $review = mysqli_query($con,"select * from `review` where `user_id` = '".$_SESSION['uid']."' "); $row1 = mysqli_fetch_array($review); if($row1['review'] <= 0) {  ?>							
						<select name="point" id="post" onChange="doReload(this.value);">
											<option value="">--Select Point--</option>
											<option value="1|<?php echo $fetch['service_provider_Id']; ?>|<?php echo $row['service_id']; ?>">1</option>
											<option value="2|<?php echo $fetch['service_provider_Id']; ?>|<?php echo $row['service_id']; ?>">2</option>
											<option value="3|<?php echo $fetch['service_provider_Id']; ?>|<?php echo $row['service_id']; ?>">3</option>
											<option value="4|<?php echo $fetch['service_provider_Id']; ?>|<?php echo $row['service_id']; ?>">4</option>
											<option value="5|<?php echo $fetch['service_provider_Id']; ?>|<?php echo $row['service_id']; ?>">5</option>

						</select>
					<?php }else { ?>
						<?php echo $row1['review']; ?>
					<?php } ?>

					</td>
										</tr>
										</tbody>
										<?php } ?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 