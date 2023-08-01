<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START STRIPED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">View Feedback</h3>
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
                                                    <th>Feedback Message</th>
                                                    <th>Is-Active</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $sql = "SELECT * FROM `feed_back`";
                                                $result = mysqli_query($con,$sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $Feed_back_Id = $row['Feed_back_Id'];
                                                    $Feedback_msg = $row['Feedback_msg'];
                                                    $Isactive = $row['Isactive'];
                                                
                                            ?>
                                            <tr>
                                                    <td><?php echo $Feed_back_Id ?></td>
                                                    <td><?php echo $Feedback_msg?></td>
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