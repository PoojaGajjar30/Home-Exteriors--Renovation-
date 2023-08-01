<?php include_once('../database/index.php'); ?>
<?php 
if(isset($_POST['loginbtn'])){
	extract($_POST);
	$sql = "SELECT * FROM `admin_profile_tbl` WHERE `Email` = '".$_POST['Email']."' and `password` = '".$_POST['Password']."' ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_num_rows($result);
	if($row > 0){
		$fetchrow = mysqli_fetch_array($result);
		echo $_SESSION['uid'] = $fetchrow['admin_Id'];
		echo $_SESSION['firstname'] = $fetchrow['firstname'];
		echo $_SESSION['lastname'] = $fetchrow['lastname'];
		header('location:index.php'); 
	}else{
		header('location:Login.php'); 
		$_SESSION['errormsg'] =  "Invalid Username And Password";
	}

}else{

}

?>