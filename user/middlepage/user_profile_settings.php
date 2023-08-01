<?php 
	if (isset($_POST['userprofile'])) {
		extract($_POST);
		$upload = "userpic/";
		$userpi = $_FILES['userpi']['name'];
		$tmp = $_FILES['userpi']['tmp_name'];
		$uploadfile = move_uploaded_file($tmp,$upload.$userpi);
		$sql = "UPDATE `user_registreation_tbl` SET `profile_pic`='$userpi',`firstname` = '$firstname',`lastname`='$lastname',`email`='$emailid',`mobilenum`='$mobilenum',`dob`='$dob',`Gender`='$gender',`address`='$address',`state`='$state',`city`='$city',`area`='$area' WHERE  `user_Id` = '".$_SESSION['uid']."' ";
		$result = mysqli_query($con,$sql);
		if($result){
			$_SESSION['userprofile'] = "Your Profile has been uploaded";
			header('location:index.php?page=user-settings');
		}else{
			echo "Upadate Error";
		}
	}
else if(isset($_POST['change_password']))
{
	extract($_POST);
	$sql = mysqli_query($con,"SELECT * from `user_registreation_tbl` where  `user_Id` = '".$_SESSION['uid']."' ");
	$row = mysqli_fetch_array($sql);
	$nu = mysqli_num_rows($sql);
	if($nu > 0)
	{
		if($row['password'] != $_POST['oldpassword'])
		{
			$_SESSION['password'] = "Password Don't match with old password";
			header('location:index.php?page=change-password');
		}
		else
		{
			if($_POST['newpassword'] != $_POST['repeatpassword'])
			{
				$_SESSION['passwordrept'] = "Password Don't Match With New Password";
				header('location:index.php?page=change-password');
			}
			else
			{
				$sql = mysqli_query($con,"UPDATE `user_registreation_tbl` SET `password`='".$newpassword."' WHERE `user_Id` = '".$_SESSION['uid']."' ");
				if($sql)
				{
					$_SESSION['succmsg'] = "Password Has Been Changed";
					header('location:index.php?page=user-settings');
				}
			}
		}	
	}
}
else
{
	echo "Error";
}
?>