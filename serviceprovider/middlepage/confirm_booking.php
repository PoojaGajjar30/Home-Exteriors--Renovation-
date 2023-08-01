<?php
if (isset($_REQUEST['cid']))
{
	$sql = "UPDATE `book_service` SET `isactive` = '1' WHERE `booking_id` = '".$_REQUEST['cid']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=provider-bookings');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=provider-bookings');
		$_SESSION['errormsg'] =  "Error";	}
}
?>