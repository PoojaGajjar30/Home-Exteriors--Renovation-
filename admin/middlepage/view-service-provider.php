<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
              
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START STRIPED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">View Service Provider</h3>
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
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Address</th>
                                                    <th>Area</th>
                                                    <th>City</th>
                                                    <th>State</th>
                                                    <th>Email-Id</th>
                                                    <th>Password</th>
                                                    <th>Mobile No.</th>
                                                    <th>Date of Birth</th>
                                                    <th>Gender</th>
                                                    <th>Profession</th>
                                                    <th>About Profession</th>
                                                    <th>Experience</th>
                                                    <th>Is-Active</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $sql = "SELECT * FROM `service_provider_profile_tbl`";
                                                $result = mysqli_query($con,$sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $service_provider_Id = $row['service_provider_Id'];
                                                    $firstname = $row['firstname'];
                                                    $lastname = $row['lastname'];
                                                    $address = $row['address'];
                                                    $area = $row['area'];
                                                    $city = $row['city'];
                                                    $state = $row['state'];
                                                    $emailid = $row['email'];
                                                    $password = $row['password'];
                                                    $mobilenum = $row['mobilenum'];
                                                    $dob = $row['dob'];
                                                    $gender = $row['Gender'];
                                                    $profession = $row['profession'];
                                                    $aboutprofession = $row['about profession'];
                                                    $experience = $row['experience'];
                                                    $isactive = $row['Isactive'];
                                                
                                            ?>
                                            <tr>
                                                    <td><?php echo $service_provider_Id?></td>
                                                    <td><?php echo $firstname?></td>
                                                    <td><?php echo $lastname?></td>
                                                    <td><?php echo $address?></td>
                                                    <td><?php echo $area?></td>
                                                    <td><?php echo $city?></td>
                                                    <td><?php echo $state?></td>
                                                    <td><?php echo $emailid?></td>
                                                    <td><?php echo $password?></td>
                                                    <td><?php echo $mobilenum?></td>
                                                    <td><?php echo $dob?></td>
                                                    <td><?php if ($gender==0){
                            echo "Female";
                           }
                        else {
                            echo "Male";
                        }
                        ?></td>
                                                    <td><?php echo $profession?></td>
                                                    <td><?php echo $aboutprofession?></td>
                                                    <td><?php echo $experience?></td>
                                                    <td><?php if($isactive==1) 
                                                    { 
                                                        echo "Active"; 
                                                    } 
                                                    else {
                                                        echo "Inactive"; 
                                                    } ?>                            
                        </td>
                                                    <td><a href="index.php?page=add-service-provider&uid=<?php echo $service_provider_Id; ?>">Update</a> | <a href="index.php?page=addserviceprovider&did=<?php echo $service_provider_Id; ?>">Delete</a></td> 
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