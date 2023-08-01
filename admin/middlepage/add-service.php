<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START VALIDATIONENGINE PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">                                    
                                    <h3>Add Category</h3>                                
                                    <form id="validate" role="form" class="form-horizontal" action="index.php?page=addsubcategory" method="POST">
                                    <?php 

                            $sql = "SELECT * from `service_tbl` where service_id= '".$_GET['uid']."' ";
                            $result = mysqli_query($con,$sql);
                            $row = mysqli_fetch_assoc($result);
                            
                            ?>                 
                            <input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>" />         
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Service Name:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="servicename" class="form-control" value="<?php echo $row['subcategory_name']; ?>"/>  
                                            </div>
                                        </div>                  
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Service Amount:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="serviceamount" class="form-control" value="<?php echo $row['subcategory_name']; ?>"/>  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Service Location:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="servicelocation" class="form-control" value="<?php echo $row['subcategory_name']; ?>"/>  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Service Offer:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="serviceoffer" class="form-control" value="<?php echo $row['subcategory_name']; ?>"/>  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Service Description:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="servicedescriptions" class="form-control" value="<?php echo $row['subcategory_name']; ?>"/>  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Service Photo:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="subcategoryname" class="form-control" value="<?php echo $row['subcategory_name']; ?>"/>  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">DOI:</label>
                                            <div class="col-md-9">
                                                <input type="date" name="doi" class="form-control" value="<?php echo $row['DOI']; ?>"/>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Is-Active :</label>
                                            <div class="col-md-3">
                                                <select  class="form-control" name="isactive" value="<?php echo $row['Isactive']; ?>">
                                                    <option value="">Choose option</option>
                                                    <option value="1">Is-Active</option>
                                                    <option value="0">Not-Active</option>
                                                </select>                         
                                            </div> 
                                        </div>                                 
                                        <div class="btn-group pull-right">
                                            <?php if(isset($_REQUEST['uid'])) { ?>
                              <input type="submit" class="btn btn-primary submit-btn" name="updateuser" value="Update Your Data">
                           <?php }else { ?>
                            <input type="submit" class="btn btn-primary submit-btn" name="addservice" value="Insert Your Data">
                                        <?php }?>
                                        </div>                                                                
                                    </form>
                                    
                                </div>
                                <?php if(isset($_SESSION['succmsg'])) { ?>
<div class="alert alert-success" role="alert">
  <?php 
  echo $_SESSION['succmsg']; 
  unset($_SESSION['succmsg']);
  ?>
</div>
<?php }  ?>
                            </div>                
                            <!-- END VALIDATIONENGINE PLUGIN -->

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->