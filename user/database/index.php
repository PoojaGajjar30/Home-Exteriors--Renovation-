<?php 
ob_start();
session_start();
define("URL", "http://localhost:8000/template/");
$con = mysqli_connect("localhost","root","","website");
if(!$con){
	echo "Your Server is Not connected";
}
?>