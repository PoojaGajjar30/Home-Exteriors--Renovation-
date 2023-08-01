<?php
include_once('database/index.php');
if (isset($_POST['feedbackaction'])) {
	echo $reques = $_REQUEST['feedbackaction'];
	extract($_POST);
	$sql = "INSERT INTO `feedback`(`name`, `email`, `mobilenum`, `Feedback_msg`) VALUES ('$fname','$email','$mobilenum','$message')";
	$result = mysqli_query($con,$sql);
	if($result){
		echo "success!";
	}else{
		echo "error";
		}
}
?>