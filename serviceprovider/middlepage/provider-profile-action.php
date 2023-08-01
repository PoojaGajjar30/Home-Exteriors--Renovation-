<?php 
if (isset($_POST['providerprofile'])) {
		extract($_POST);
		$upload = "providerpic/";
		$providerpi = $_FILES['providerpi']['name'];
		$tmp = $_FILES['providerpi']['tmp_name'];
		$uploadfile = move_uploaded_file($tmp,$upload.$providerpi);
		//if ($uploadfile) {
			echo $sql = "UPDATE `service_provider_profile_tbl` SET `profile_pic`='$providerpi',`firstname` = '$firstname',`lastname`='$lastname',`email`='$emailid',`mobilenum`='$mobilenum',`dob`='$dob',`Gender`='$gender', `profession`='$profession',`about profession`='$aboutprofession', `experience`='$experience',`address`='$address',`area`='$area',`city`='$city',`state`='$state' WHERE  `service_provider_Id` = '".$_SESSION['sid']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		$_SESSION['providerprofile'] = "Your Profile has been uploaded";
		header('location:index.php?page=provider-settings');
	}else{
		echo "Upadate Error";
	}
}
else if(isset($_POST['change_password']))
{
	extract($_POST);
	$sql = mysqli_query($con,"SELECT * from `service_provider_profile_tbl` where  `service_provider_Id` = '".$_SESSION['sid']."' ");
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
				$sql = mysqli_query($con,"UPDATE `service_provider_profile_tbl` SET `password`='".$newpassword."' WHERE `service_provider_Id` = '".$_SESSION['sid']."' ");
				if($sql)
				{
					$_SESSION['succmsg'] = "Password Has Been Changed";
					header('location:index.php?page=provider-settings');
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