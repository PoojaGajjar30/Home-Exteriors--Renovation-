<?php
	ob_start();
	session_start();
	error_reporting(0);
	define("URL", "http://localhost:8000/Website/admin/");
	$con = mysqli_connect("localhost","root","","website");
	if (!$con) {
		echo "Your Server is not connected";
	}
define('servicepic',"http://localhost/HSD/serviceprovider/providerpic/");
?>