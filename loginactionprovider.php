<?php include_once('database/index.php'); ?>
<?php
if (isset($_POST['signup'])) {
	echo $reques = $_REQUEST['signup'];
	extract($_POST);

	$sql1 = mysqli_query($con,"select * from `service_provider_profile_tbl` where `email` = '".$Email."' ");
	
	
	$count = mysqli_num_rows($sql1);
		
	if($count > 0){
		$_SESSION['alredmail'] = "Your Mail Id Is Already Register";
		header('location:provider-register.php');
	}
	else{

	$sql = "INSERT INTO `service_provider_profile_tbl`(`firstname`,`lastname`, `email`, `password`, `mobilenum`,`dob`) VALUES ('$firstname','$lastname','$Email','$Password','$mobilenum','$dob')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:provider-register.php');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=provider-register');
		$_SESSION['errormsg'] =  "Error";
	}
	}
} 
else if(isset($_POST['loginbtn'])){
	extract($_POST);
	echo $sql = "SELECT * FROM `service_provider_profile_tbl` WHERE `email` = '".$_POST['Email']."' and `password` = '".$_POST['Password']."' ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_num_rows($result);
	if($row > 0){
		$fetchrow = mysqli_fetch_array($result);
		echo $_SESSION['sid'] = $fetchrow['service_provider_Id'];
		echo $_SESSION['firstname'] = $fetchrow['firstname'];
		echo $_SESSION['lastname'] = $fetchrow['lastname'];
		echo $_SESSION['email'] = $fetchrow['email'];
		echo $_SESSION['mobilenum'] = $fetchrow['mobilenum'];
		header('location:./serviceprovider/index.php'); 
	}else{
		header('location:provider-register.php'); 
		$_SESSION['errormsg'] =  "Invalid Username And Password";
	}
}
?>