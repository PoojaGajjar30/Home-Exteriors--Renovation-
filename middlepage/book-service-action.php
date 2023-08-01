<?php
if (isset($_POST['book-service'])) 
{
	extract($_POST);
	echo $sql = "INSERT INTO `book_service`( `service_id`, `user_id`, `service_provider_id`, `state`, `city`, `area`, `service_name`, `service_category`, `location`, `booking_date`, `time_slot`, `note`) VALUES ('$serviceid','$userid','$serviceproviderid','$state','$city','$area','$service_name','$category_id','$location','$date','$time','$note')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=home');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=book-service');
		$_SESSION['errormsg'] =  "Error";	}
}
?>