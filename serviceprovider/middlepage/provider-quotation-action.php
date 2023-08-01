<?php
if (isset($_POST['quotation'])) 
{
	extract($_POST);
	$sql = "UPDATE `quotation` SET `price` = '$price' , `Isactive` = '1' WHERE `Quotation_Id` = '$id' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=provider-quotation-table');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=provider-quotation');
		$_SESSION['errormsg'] =  "Error";	}
}
?>