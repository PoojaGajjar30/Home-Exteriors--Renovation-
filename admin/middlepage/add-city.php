<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START VALIDATIONENGINE PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">                                    
                                    <h3>Add City</h3>                                
                                    <form id="validate" role="form" class="form-horizontal" action="index.php?page=addcity" method="post">
                                    <?php 

                            $sql = "select * from `city` where City_Id = '".$_GET['uid']."' ";
                            $result = mysqli_query($con,$sql);
                            $row = mysqli_fetch_assoc($result);
                            
                            ?>                 
                            <input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>" />                            
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">City Name:</label>
                                            <div class="col-md-9">
                                                <input type="text" name="cityname" class="form-control" value="<?php echo $row['City_name']; ?>"/>
                                                
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
                                        <div class="form-group">                        
                                            <div class="col-md-12">
                                                <label class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="validate[required]" name="terms" value="1"/> Yes, I accept your terms and conditions.
                                                    </label>
                                                </label>
                                            </div>
                                        </div>                                
                                        <div class="btn-group pull-right">
                                            <?php if(isset($_REQUEST['uid'])) { ?>
                              <input type="submit" class="btn btn-primary submit-btn" name="updateuser" value="Update Your Data">
                           <?php }else { ?>
                            <input type="submit" class="btn btn-primary submit-btn" name="addcity" value="Insert Your Data">
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

        
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        login: {
                                required: true,
                                minlength: 2,
                                maxlength: 8
                        },
                        password: {
                                required: true,
                                minlength: 5,
                                maxlength: 10
                        },
                        're-password': {
                                required: true,
                                minlength: 5,
                                maxlength: 10,
                                equalTo: "#password2"
                        },
                        age: {
                                required: true,
                                min: 18,
                                max: 100
                        },
                        email: {
                                required: true,
                                email: true
                        },
                        date: {
                                required: true,
                                date: true
                        },
                        credit: {
                                required: true,
                                creditcard: true
                        },
                        site: {
                                required: true,
                                url: true
                        }
                    }                                        
                });                                    

        </script>
        
    <!-- END SCRIPTS -->          