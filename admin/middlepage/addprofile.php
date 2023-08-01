<?php 

if(isset($_POST['addprofile']))
{
echo $reques = $_REQUEST['addprofile'];
	extract($_POST);

	echo $sql = " INSERT INTO `admin_profile_tbl`(`firstname`, `lastname`, `Address`, `City`, `State`, `Email`, `password`, `mobilenum`, `Dob`, `Gender`, `Isactive`) VALUES ('$firstname','$lastname','$address','$city','$state','$emailid','$password','$mobilenum','$dob','$gender','$isactive')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-profile');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=add-profile');
		$_SESSION['errormsg'] =  "Error";

	}
}
else if($_GET['did']) 
{
	//echo 'SET FOREIGN_KEY_CHECKS=0';
	 echo $sql = "DELETE FROM `admin_profile_tbl` WHERE `admin_Id` = '".$_GET['did']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-profile');
		$_SESSION['deletesucssmsg'] = "Data Has Been Deleted";
		
	}else{
		echo "Error";
	}
}
?>