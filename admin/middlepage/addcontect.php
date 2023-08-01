<?php
if (isset($_POST['addcontect'])) 
{
	echo $reques = $_REQUEST['addcontect'];
	extract($_POST);

	echo $sql = "INSERT INTO `contact`(`Contact_name`, `email`, `mobilenum`, `message`) VALUES ('$name','$emailid','$mobilenum','$message')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-contect');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=add-contect');
		$_SESSION['errormsg'] =  "Error";
	}
}
else if(isset($_REQUEST['uid']) && !empty($_POST['updateuser'])){
	extract($_POST);
echo $sql = "UPDATE `contact` SET `Contact_name` = '$name',`email`='$emailid',`mobilenum`='$mobilenum',`message`='$message' WHERE  `Contact_Id` = '".$_REQUEST['uid']."' ";
	$result = mysqli_query($con,$sql);	
	if($result){
		header('location:index.php?page=view-contect');
		$_SESSION['succmsg'] = "Your Data Has Been Updated";
	}else{
		header('location:index.php?page=add-contect');
		$_SESSION['errormsg'] =  "Error";

	}
}
else if($_GET['did']) 
{
	//echo 'SET FOREIGN_KEY_CHECKS=0';
	 echo $sql = "DELETE FROM `contact` WHERE `Contact_Id` = '".$_GET['did']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-contect');
		$_SESSION['deletesucssmsg'] = "Data Has Been Deleted";		
	}else{
		echo "Error";
	}
}
?>