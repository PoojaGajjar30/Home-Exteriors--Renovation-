<?php include_once('database/index.php'); ?>
<?php
if (isset($_POST['signup'])) {
	echo $reques = $_REQUEST['signup'];
	extract($_POST);
	$sql1 = mysqli_query($con,"select * from `user_registreation_tbl` where `email` = '".$Email."' ");
	
	
	$count = mysqli_num_rows($sql1);
		
	if($count > 0){
		$_SESSION['alredmail'] = "Your Mail Id Is Already Register";
		header('location:user-register.php');
	}
	else{
	echo $sql = "INSERT INTO `user_registreation_tbl`(`firstname`,`lastname`, `email`, `password`, `mobilenum`,`dob`) VALUES ('$firstname','$lastname','$Email','$Password','$mobilenum','$dob')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:user-register.php');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=user-register');
		$_SESSION['errormsg'] =  "Error";
	}
} 
}
else if(isset($_POST['loginbtn'])){
	extract($_POST);
	echo $sql = "SELECT * FROM `user_registreation_tbl` WHERE `email` = '".$_POST['Email']."' and `password` = '".$_POST['Password']."' ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_num_rows($result);
	if($row > 0){
		$fetchrow = mysqli_fetch_array($result);
		echo $_SESSION['uid'] = $fetchrow['user_Id'];
		echo $_SESSION['firstname'] = $fetchrow['firstname'];
		echo $_SESSION['lastname'] = $fetchrow['lastname'];
		header('location:./user/index.php'); 
	}else{
		header('location:user-register.php'); 
		$_SESSION['errormsg'] =  "Invalid Username And Password";
	}

}else{

}

?>