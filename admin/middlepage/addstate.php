<?php
if (isset($_POST['addstate']))
{
	echo $reques = $_REQUEST['addstate'];
	extract($_POST);

	echo $sql = "INSERT INTO `state`(`State_name`, `Isactive`) VALUES ('$statename','$isactive')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-state');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=add-state');
		$_SESSION['errormsg'] =  "Error";
	}
}
else if(isset($_REQUEST['uid']) && !empty($_POST['updateuser'])){
	extract($_POST);
echo $sql = "UPDATE `state` SET `State_name` = '$statename',`Isactive`='$isactive' WHERE  `State_Id` = '".$_REQUEST['uid']."' ";
	$result = mysqli_query($con,$sql);	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-state');
		$_SESSION['succmsg'] = "Your Data Has Been Updated";
	}else{
		header('location:index.php?page=add-state');
		$_SESSION['errormsg'] =  "Error";

	}
}
else if($_GET['did']) 
{
	//echo 'SET FOREIGN_KEY_CHECKS=0';
	 echo $sql = "DELETE FROM `state` WHERE `State_Id` = '".$_GET['did']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-state');
		$_SESSION['deletesucssmsg'] = "Data Has Been Deleted";
		
	}else{
		echo "Error";
	}
}
?>