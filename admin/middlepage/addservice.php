<?php
if (isset($_POST['addservice'])) {
	echo $reques = $_REQUEST['addservice'];
	extract($_POST);

	echo $sql = "INSERT INTO `service_tbl`(`service_name`, `service_amount`, `service_location`, `service_offer`, `service_descriptions`, `DOI`, `Isactive`) VALUES ('$servicename','$serviceamount','$servicelocation','$serviceoffer','$servicedescriptions','$doi','$isactive')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-service');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=add-service');
		$_SESSION['errormsg'] =  "Error";
	}
}
else if(isset($_REQUEST['uid']) && !empty($_POST['updateuser'])){
	extract($_POST);
echo $sql = "UPDATE `category` SET `subcategory_name` = '$subcategoryname',`DOI`='$doi',`Isactive`='$isactive' WHERE `category_Id` = '".$_REQUEST['uid']."' ";
	$result = mysqli_query($con,$sql);	
	if($result){
		header('location:index.php?page=view-sub-category');
		$_SESSION['succmsg'] = "Your Data Has Been Updated";
	}else{
		header('location:index.php?page=add-sub-category');
		$_SESSION['errormsg'] =  "Error";

	}
}
else if($_GET['did']) 
{
	//echo 'SET FOREIGN_KEY_CHECKS=0';
	 echo $sql = "DELETE FROM `sub_category` WHERE `subcategory_Id` = '".$_GET['did']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-sub-category');
		$_SESSION['deletesucssmsg'] = "Data Has Been Deleted";
		
	}else{
		echo "Error";
	}
}
?>
