            <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START VALIDATIONENGINE PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">                                    
                                    <h3>Add Profile</h3>                                
                <form class="form-horizontal" action="<?php echo URL; ?>index.php?page=addprofile" method="post">                            
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">First Name:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="firstname" class="form-control"/>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Last Name:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="lastname" class="form-control"/>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Address:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="address" class="form-control"/>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">City:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="city" class="form-control"/>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">State :</label>
                                            <div class="col-md-9">
                                                <input type="text" name="state" class="form-control"/>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Email Id :</label>
                                            <div class="col-md-9">
                                                <input type="text" name="emailid" class="form-control"/>
                                                
                                            </div>
                                        </div>                    
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Password:</label>
                                            <div class="col-md-9">
                                                <input type="password" name="password" class=" form-control"/>
                                            </div>
                                        </div>                            

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Mobile No.:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="mobilenum" class="form-control"/>
                                                
                                            </div>
                                        </div>                             
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Date of birth:</label>
                                            <div class="col-md-9">
                                                <input type="date" name="dob" class="form-control"/>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Gender:</label>
                                            <div class="col-md-3">
                                                <select  class="form-control" name="gender" >
                                                    <option value="">Choose option</option>
                                                    <option value="1">Male</option>
                                                    <option value="0">Female</option>
                                                </select>                         
                                            </div>                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Is-Active :</label>
                                            <div class="col-md-3">
                                                <select  class="form-control" name="isactive" >
                                                    <option value="">Choose option</option>
                                                    <option value="1">Is-Active</option>
                                                    <option value="0">Not-Active</option>
                                                </select>                         
                                            </div> 
                                        </div>                
                                        <div class="form-group">                        
                                            <div class="col-md-12">
                                                <label class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="" name="terms" value="1"/> Yes, I accept your terms and conditions.
                                                    </label>
                                                </label>
                                            </div>
                                        </div>                                
                                        <div class="btn-group pull-right">
                                            <button class="btn btn-primary" type="submit" name="addprofile">Submit</button>
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

        
      