<?php 	
	$sql = "INSERT INTO `review` (`service_id`,`service_provider_id`, `user_id`,`review`) VALUES ('".$newresult[2]."','".$newresult[1]."','".$_SESSION['uid']."','".$newresult[0]."')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=user-reviews-tbl');
	}else{
		echo "Insert Error";
	}
?>