<?php 

if(isset($_POST['adduser']))
{

	$reques = $_REQUEST['adduser'];
	extract($_POST);

	echo $sql = " INSERT INTO `user_registreation_tbl`(`firstname`, `lastname`, `address`, `area`,`city`, `state`, `email`, `password`, `mobilenum`, `dob`, `Gender`, `Isactive`) VALUES ('$firstname','$lastname','$address','$area','$city','$state','$emailid','$password','$mobilenum','$dob','$gender','$isactive')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-user');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=add-user');
		$_SESSION['errormsg'] =  "Error";

	}
}
else if(isset($_REQUEST['uid']) && !empty($_POST['updateuser'])){
	extract($_POST);
echo $sql = "UPDATE `user_registreation_tbl` SET `firstname` = '$firstname',`lastname`='$lastname',`address`='$address',`area`='$area',`city`='$city',`state`='$state',`email`='$emailid',`password`='$password',`mobilenum`='$mobilenum',`dob`='$dob',`Gender`='$gender',`Isactive`='$isactive' WHERE  `user_Id` = '".$_REQUEST['uid']."' ";
	$result = mysqli_query($con,$sql);	
	if($result){
		header('location:index.php?page=view-user');
		$_SESSION['succmsg'] = "Your Data Has Been Updated";
	}else{
		header('location:index.php?page=add-user');
		$_SESSION['errormsg'] =  "Error";

	}
}
else if($_GET['did']) 
{
	//echo 'SET FOREIGN_KEY_CHECKS=0';
	 echo $sql = "DELETE FROM `user_registreation_tbl` WHERE `user_Id` = '".$_GET['did']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-user');
		$_SESSION['deletesucssmsg'] = "Data Has Been Deleted";		
	}else{
		echo 'Error';
	}
}
?>