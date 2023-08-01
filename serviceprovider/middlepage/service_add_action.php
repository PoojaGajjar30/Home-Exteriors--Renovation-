<?php 
	if (isset($_POST['addservice'])) {
		extract($_POST);
		$upload = "servicepic/";
		$servicepi = $_FILES['servicepi']['name'];
		$tmp = $_FILES['servicepi']['tmp_name'];
		$uploadfile = move_uploaded_file($tmp,$upload.$servicepi);
		if ($uploadfile) {
			echo $sql = "INSERT INTO `service_tbl`(`service_provider_id`, `service_name`, `service_amount`, `service_location`, `category_id`,`service_offer`, `service_descriptions`,`service_photo`) VALUES ('$username','$service_title','$service_amount','$service_location','$category_id','$offer','$description','$servicepi')";
	$result = mysqli_query($con,$sql);
	if($result){
		$_SESSION['addservice'] = "Your Service has been uploaded";
		header('location:index.php?page=add-service');
	}else{
		echo "Insert Error";
	}
}else{
	echo "Error";
}
}
?>