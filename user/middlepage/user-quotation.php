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
												<th>Date</th>
												<th>Time Slot</th>
												<th>Amount</th>
												<th>Provider</th>
												<th>Service</th>
											</tr>
										</thead>
										<?php
                                            $sql = "SELECT * FROM `quotation` WHERE `user_Id` = '".$_SESSION['uid']."' ";
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
												<td><?php echo $row['Quotation_Id']; ?></td>
												<td><?php echo $row['booking_date']; ?></td>
												<td><?php echo $row['time_slot']; ?></td>
												<td><?php echo $row['price']; ?></td>
												<td><?php echo $fetch['firstname']." ".$fetch['lastname']; ?></td>
												<td><?php echo $row['category']; ?></td>
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