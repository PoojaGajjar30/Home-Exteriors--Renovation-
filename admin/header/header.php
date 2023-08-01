<?php include_once("../database/index.php"); ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/atlant/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2019 05:49:42 GMT -->
<head>        
        <!-- META SECTION -->
        <link rel="shortcut icon" type="image/x-icon" href="../admin/img/HSD1.png">
        <title>Home Service Detector</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                      
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.php">ATLANT</a> 
                    </li>
                    <li class="xn-openable active">
                        <a href="index.php"><span class="xn-text">Dashboard</span></a>                      
                    </li> 
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user-circle-o"></span> <span class="xn-text">Manage Profile </span></a>
                        <ul>
                            <li><a href="index.php?page=add-profile"><span class="fa fa-list-alt"></span>Add Profile </a></li>
                            <li><a href="index.php?page=view-profile"><span class="fa fa-align-justify"></span>View Profile </a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-handshake-o"></span> <span class="xn-text">Manage Service provider </span></a>
                        <ul>
                            <li><a href="index.php?page=add-service-provider"><span class="fa fa-list-alt"></span>Add Service provider </a></li>
                            <li><a href="index.php?page=view-service-provider"><span class="fa fa-align-justify"></span>View Service provider </a></li>
                        </ul>
                    </li>                  
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Manage User </span></a>
                        <ul>
                            <li><a href="index.php?page=add-user"><span class="fa fa-list-alt"></span>Add User</a></li>
                            <li><a href="index.php?page=view-user"><span class="fa fa-align-justify"></span>View User</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-address-book"></span> <span class="xn-text">Manage State </span></a>
                        <ul>
                            <li><a href="index.php?page=add-state"><span class="fa fa-list-alt"></span>Add State</a></li>
                            <li><a href="index.php?page=view-state"><span class="fa fa-align-justify"></span>View State</a></li>  
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-address-book-o"></span> <span class="xn-text">Manage City </span></a>
                        <ul>
                            <li><a href="index.php?page=add-city"><span class="fa fa-list-alt"></span>Add City</a></li>
                            <li><a href="index.php?page=view-city"><span class="fa fa-align-justify"></span>View City</a></li> 
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-address-card"></span> <span class="xn-text">Manage Area </span></a>
                        <ul>
                            <li><a href="index.php?page=add-area"><span class="fa fa-list-alt"></span>Add Area</a></li>
                            <li><a href="index.php?page=view-area"><span class="fa fa-align-justify"></span>View Area</a></li>  
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-table"></span> <span class="xn-text">Manage Category</span></a>
                        <ul>
                        <li><a href="index.php?page=add-category"><span class="fa fa-list-alt"></span>Add Category</a></li>                            
                            <li><a href="index.php?page=view-category"><span class="fa fa-align-justify"></span>View Category</a></li>   
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-tasks"></span> <span class="xn-text">Manage Service</span></a>
                        <ul>
                        <li><a href="index.php?page=add-service"><span class="fa fa-list-alt"></span>Add Category</a></li>                            
                            <li><a href="index.php?page=view-service"><span class="fa fa-align-justify"></span>View Category</a></li>   
                        </ul>
                    </li>
                    <!--<li class="xn-openable">
                        <a href="#"><span class="fa fa-phone"></span> <span class="xn-text">Manage Contact</span></a>
                        <ul>
                            <li><a href="index.php?page=add-contect"><span class="fa fa-list-alt"></span>Add Contact</a></li>                     
                            <li><a href="index.php?page=view-contect"><span class="fa fa-align-justify"></span>View Contact</a></li>
                        </ul>
                    </li>-->                   
                    <!--<li class="xn-openable">
                        <a href="#"><span class="fa fa-question-circle"></span> <span class="xn-text">Manage Security Question</span></a>
                        <ul>
                            <li><a href="index.php?page=add-security-question"><span class="fa fa-list-alt"></span>Add Security Question</a></li>
                            <li><a href="index.php?page=view-security-question"><span class="fa fa-align-justify"></span>View Security Question</a></li>
                        </ul>
                    </li>-->
                <!--<li class="xn-openable">
                        <a href="#"><span class="fa fa-usd"></span> <span class="xn-text">Manage Quotation</span></a>
                        <ul>                           
                            <li><a href="index.php?page=view-quotation"><span class="fa fa-align-justify"></span>View Quotation</a></li>              
                        </ul>
                    </li>-->
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-comments-o"></span> <span class="xn-text">Manage Feedback</span></a>
                        <ul>                            
                            <li><a href="index.php?page=view-feedback"><span class="fa fa-align-justify"></span>View Feedback</a></li>                
                        </ul>
                    </li>
                    <!--<li class="xn-openable">
                        <a href="#"><span class="fa fa-info-circle"></span> <span class="xn-text">Manage Inquiry</span></a>
                        <ul>                            
                            <li><a href="index.php?page=view-inquiry"><span class="fa fa-align-justify"></span>View Inquiry</a></li>
                        </ul>
                    </li>-->
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->