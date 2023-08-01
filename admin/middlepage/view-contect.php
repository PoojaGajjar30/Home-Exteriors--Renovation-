<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
              
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START STRIPED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">View Contact</h3>
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
                                                    <th>Name</th>
                                                    <th>Email-Id</th>
                                                    <th>Mobile No.</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $sql = "SELECT * FROM `contact`";
                                                $result = mysqli_query($con,$sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $Contact_Id = $row['Contact_Id'];
                                                    $name = $row['Contact_name'];
                                                    $emailid = $row['email'];
                                                    $mobilenum = $row['mobilenum'];
                                                    $message = $row['message'];
                                                
                                            ?>
                                            <tr>
                                                    <td><?php echo $Contact_Id ?></td>
                                                    <td><?php echo $name?></td>
                                                    <td><?php echo $emailid?></td>
                                                    <td><?php echo $mobilenum?></td>
                                                    <td><?php echo $message?></td>
                                                    <td><a href="index.php?page=add-contect&uid=<?php echo $Contact_Id ; ?>">Update</a> | <a href="index.php?page=addcontect&did=<?php echo $Contact_Id; ?>">Delete</a></td>
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