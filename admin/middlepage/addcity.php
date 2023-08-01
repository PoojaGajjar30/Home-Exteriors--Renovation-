<?php
if (isset($_POST['addcity'])) 
{
	echo $reques = $_REQUEST['addcity'];
	extract($_POST);

	echo $sql = "INSERT INTO `city`(`City_name`, `Isactive`) VALUES ('$cityname','$isactive')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-city');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=add-city');
		$_SESSION['errormsg'] =  "Error";
	}
}
else if(isset($_REQUEST['uid']) && !empty($_POST['updateuser'])){
	extract($_POST);
echo $sql = "UPDATE `city` SET `City_name` = '$cityname',`Isactive`='$isactive' WHERE `City_Id` = '".$_REQUEST['uid']."' ";
	$result = mysqli_query($con,$sql);	
	if($result){
		header('location:index.php?page=view-city');
		$_SESSION['succmsg'] = "Your Data Has Been Updated";
	}else{
		header('location:index.php?page=add-city');
		$_SESSION['errormsg'] =  "Error";

	}
}
else if($_GET['did']) 
{
	//echo 'SET FOREIGN_KEY_CHECKS=0';
	 echo $sql = "DELETE FROM `city` WHERE `City_Id` = '".$_GET['did']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-city');
		$_SESSION['deletesucssmsg'] = "Data Has Been Deleted";
		
	}else{
		echo "Error";
	}
}
?>