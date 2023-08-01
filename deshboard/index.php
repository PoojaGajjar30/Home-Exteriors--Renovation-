<?php include_once('header/header.php'); ?>	
	<!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <?php
				@$page = $_REQUEST['page']; 
				//echo $page;
				if(basename($_SERVER['PHP_SELF']) == "index.php" && $page =="")
				{		 
					$page="home";
				}
				if(!empty($page) && file_exists('middlepage/'.$page.'.php'))
				{
					//if the pg is found then it gets from middlepage folder otherwise 
					// its redirect to 404 Error Page.		
					include('middlepage/'.$page.'.php');
				}
				else
				{
					include('middlepage/404.php');
				}
			?>                                                     
        </div>
    <!-- END PAGE CONTENT WRAPPER -->
<?php include_once('header/footer.php'); ?>