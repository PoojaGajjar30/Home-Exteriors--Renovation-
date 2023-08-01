<?php
if (isset($_POST['quotation'])) 
{
	extract($_POST);
	echo $sql = "INSERT INTO `quotation`(`service_id`,`user_Id`, `State_Id`, `City_Id`, `Area_Id`, `service_provider_id`,`service_name`, `category`, `location`, `booking_date`, `time_slot`, `work_details`) VALUES ('$serviceid','$userid','$state','$city','$area','$serviceproviderid','$service_name','$category_id','$location','$date','$time','$note')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=home');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=request-quotation');
		$_SESSION['errormsg'] =  "Error";	}
}
?>