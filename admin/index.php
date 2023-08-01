<?php include_once('header/header.php'); ?>

<?php if(!isset($_SESSION['uid'])) {
    header('location:login.php');
} ?>
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right last">
                    <a href="index.php?page=logout"><span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
            
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                	<?php
								@$page = $_REQUEST['page']; 
								//echo $page;
								 if(basename($_SERVER['PHP_SELF']) == "index.php" && $page =="") {		 
								        $page="home";
								}
								if(!empty($page) && file_exists('middlepage/'.$page.'.php')){
									//if the pg is found then it gets from middlepage folder otherwise 
									// its redirect to 404 Error Page.
												
									include('middlepage/'.$page.'.php');
								}
								else{
									include('middlepage/404.php');
								}
							?>                                                     
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
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
                            <a href="index.php?page=logout" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

       
       <?php include_once('header/footer.php'); ?>
 