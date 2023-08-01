<?php
if (isset($_POST['addcategory'])) {
	echo $reques = $_REQUEST['addcategory'];
	extract($_POST);
	$upload = "categorypic/";
	$categorypi = $_FILES['categorypi']['name'];
	$tmp = $_FILES['categorypi']['tmp_name'];
	$uploadfile = move_uploaded_file($tmp,$upload.$categorypi);
	echo $sql = "INSERT INTO `category`(`category_name`, `category_image`,`Isactive`) VALUES ('$categoryname','$categorypi','$isactive')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-category');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=add-category');
		$_SESSION['errormsg'] =  "Error";
	}
}
else if(isset($_REQUEST['uid']) && !empty($_POST['updateuser'])){
	extract($_POST);
	$upload = "categorypic/";
	$categorypi = $_FILES['categorypi']['name'];
	$tmp = $_FILES['categorypi']['tmp_name'];
	$uploadfile = move_uploaded_file($tmp,$upload.$categorypi);
	echo $sql = "UPDATE `category` SET `category_name` = '$categoryname',`category_image`='$categorypi',`Isactive`='$isactive' WHERE `category_Id` = '".$_REQUEST['uid']."' ";
	$result = mysqli_query($con,$sql);	
	if($result){
		header('location:index.php?page=view-category');
		$_SESSION['succmsg'] = "Your Data Has Been Updated";
	}else{
		header('location:index.php?page=add-category');
		$_SESSION['errormsg'] =  "Error";

	}
}
else if($_GET['did']) 
{
	//echo 'SET FOREIGN_KEY_CHECKS=0';
	 echo $sql = "DELETE FROM `category` WHERE `category_Id` = '".$_GET['did']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-category');
		$_SESSION['deletesucssmsg'] = "Data Has Been Deleted";
		
	}else{
		echo "Error";
	}
}
?>
