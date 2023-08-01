<?php 

if(isset($_POST['addserviceprovider'])){
	
	$reques = $_REQUEST['addserviceprovider'];
	extract($_POST);
	$sql = "INSERT INTO `service_provider_profile_tbl`(`firstname`, `lastname`, `address`,`area`, `city`, `state`, `email`, `password`, `mobilenum`, `dob`, `Gender`, `profession`, `about profession`, `experience`, `Isactive`) VALUES ('$firstname','$lastname','$address','$area','$city','$state','$emailid','$password','$mobilenum','$dob','$gender','$profession','$aboutprofession','$experience','$isactive')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-service-provider');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=add-service-provider');
		$_SESSION['errormsg'] =  "Error";

	}

}
else if(isset($_REQUEST['uid']) && !empty($_POST['updateuser'])){
	extract($_POST);
echo $sql = "UPDATE `service_provider_profile_tbl` SET `firstname` = '$firstname',`lastname`='$lastname',`address`='$address',`area`='$area',`city`='$city',`state`='$state',`email`='$emailid',`password`='$password',`mobilenum`='$mobilenum',`dob`='$dob',`Gender`='$gender', `profession`='$profession',`about profession`='$aboutprofession', `experience`='$experience',`Isactive`='$isactive' WHERE  `service_provider_Id` = '".$_REQUEST['uid']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-service-provider');
		$_SESSION['succmsg'] = "Your Data Has Been Updated";
	}else{
		header('location:index.php?page=add-service-provider');
		$_SESSION['errormsg'] =  "Error";

	}
}
else if($_GET['did']) 
{
	//echo 'SET FOREIGN_KEY_CHECKS=0';
	 echo $sql = "DELETE FROM `service_provider_profile_tbl` WHERE `service_provider_Id` = '".$_GET['did']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-service-provider');
		$_SESSION['deletesucssmsg'] = "Data Has Been Deleted";
		
	}else{
		echo "Error";
	}
}

?>
