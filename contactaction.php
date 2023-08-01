<?php
include_once('database/index.php');
if (isset($_POST['contactaction'])) {
	echo $reques = $_REQUEST['contactaction'];
	extract($_POST);
	$sql = "INSERT INTO `contact` (`Contact_name`, `email`, `mobilenum`, `message`) VALUES ('$fname','$email','$mobilenum','$message')";
	$result = mysqli_query($con,$sql);
	if($result){
		echo "success!";
	}else{
		echo "error";
		}
}
?>