		<div class="content">
			<div class="container">
				<div class="row"> 
					<?php 
						include_once('./header/sidebar.php');
					?>
					<div class="col-xl-9 col-md-8">
						<h4 class="mb-4">Quotations</h4>
						<div class="card transaction-table mb-0">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-center mb-0">
										<thead>
											<tr>
												<th>S.No</th>
												<th>User Name</th>
												<th>Location</th>
												<th>Area</th>
												<th>City</th>
												<th>State</th>
												<th>Date</th>
												<th>Time Slot</th>
												<th>Work Detalis</th>
												<th>Action</th>
											</tr>
										</thead>
										<?php
                                            $sql = "SELECT * FROM `quotation` WHERE `service_provider_id` = '".$_SESSION['sid']."' ";
                                            $result = mysqli_query($con,$sql);
                                            while ($row = mysqli_fetch_assoc($result)) {    
                                        ?>
                                        <?php 
                                        	$sql1 = "SELECT * FROM `user_registreation_tbl` WHERE `user_Id` = '".$row['user_Id']."' ";
                                        	$result1 = mysqli_query($con,$sql1);
                                        	$fetch = mysqli_fetch_array($result1);
                                        ?>
										<tbody>
											<tr>
												<td><?php echo $row['Quotation_Id']; ?></td>
												<td><?php echo $fetch['firstname']." ".$fetch['lastname']; ?></td>
												<td><?php echo $row['location']; ?></td>
												<td><?php echo $row['Area_Id']; ?></td>
												<td><?php echo $row['City_Id']; ?></td>
												<td><?php echo $row['State_Id']; ?></td>
												<td><?php echo $row['booking_date']; ?></td>
												<td><?php echo $row['time_slot']; ?></td>
												<td><?php echo $row['work_details']; ?></td>
												<td>
													<?php if($row['Isactive'] == 0) { ?>
													<a href="index.php?page=provider-quotation&id=<?php echo $row['Quotation_Id']; ?>">Send</td>
													<?php }else { ?>
													<span class="badge badge-pill badge-prof bg-success"><a href="#"> Done</i></td>
													<?php } ?>	
											</tr>
										</tbody>
										</table>
							<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 