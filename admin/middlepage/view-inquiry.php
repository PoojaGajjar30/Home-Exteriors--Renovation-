<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
              
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START STRIPED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">View Inquiry</h3>
                                </div>
                                <div class="panel-body">
<?php if(isset($_SESSION['deletesucssmsg'])) {  ?>
 <div class="alert alert-danger" role="alert">
  <?php 
  echo $_SESSION['deletesucssmsg']; 
  unset($_SESSION['deletesucssmsg']);
  ?>
</div>
    <?php } ?>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Address</th>
                                                    <th>Email-Id</th>
                                                    <th>Mobile No.</th>
                                                    <th>City</th>
                                                    <th>Inquiry Details</th>
                                                    <th>Is-Active</th> 
                                                    <th>Action</th>        
                                                </tr>
                                            </thead>
                                            <?php
                                                $sql = "SELECT * FROM `inquiry`";
                                                $result = mysqli_query($con,$sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $Inquiry_Id = $row['Inquiry_Id'];
                                                    $Address = $row['Address'];
                                                    $email = $row['email'];
                                                    $mobilenum = $row['mobilenum'];
                                                    $City_name = $row['City_name'];
                                                    $Inquiry_detail = $row['Inquiry_detail'];
                                                    $Isactive = $row['Isactive'];
                                            ?>
                                            <tr>
                                                    <td><?php echo $Inquiry_Id ?></td>
                                                    <td><?php echo $Address?></td>
                                                    <td><?php echo $email?></td>
                                                    <td><?php echo $mobilenum?></td>
                                                    <td><?php echo $City_name?></td>
                                                    <td><?php echo $Inquiry_detail?></td>
                                                    <td><?php if($Isactive==1) 
                                                    { 
                                                        echo "Active"; 
                                                    } 
                                                    else {
                                                        echo "Inactive"; 
                                                    } ?>                            
                        </td>
                                                    <td><a href="">Update</a> | <a href="index.php?page=addarea&did=<?php echo $Area_Id; ?>">Delete</a></td>
                                            </tr>
                                        <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END STRIPED TABLE SAMPLE -->

                            <!-- END BORDERED TABLE SAMPLE -->

                        </div>
                    </div>
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    