<?php
if (isset($_POST['addsecurityquestion'])) {
	echo $reques = $_REQUEST['addsecurityquestion'];
	extract($_POST);

	echo $sql = "INSERT INTO `security_question` (`sec_que`) VALUES ('$secque')";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-security-question');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:index.php?page=add-security-question');
		$_SESSION['errormsg'] =  "Error";
	}
}
else if(isset($_REQUEST['uid']) && !empty($_POST['updateuser'])){
	extract($_POST);
echo $sql = "UPDATE `security_question` SET `sec_que` = '$secque' WHERE `Security_Question_id` = '".$_REQUEST['uid']."' ";
	$result = mysqli_query($con,$sql);	
	if($result){
		header('location:index.php?page=view-security-question');
		$_SESSION['succmsg'] = "Your Data Has Been Updated";
	}else{
		header('location:index.php?page=add-security-question');
		$_SESSION['errormsg'] =  "Error";
	}
}
else if($_GET['did']) 
{
	//echo 'SET FOREIGN_KEY_CHECKS=0';
	 echo $sql = "DELETE FROM `security_question` WHERE `Security_Question_id` = '".$_GET['did']."' ";
	$result = mysqli_query($con,$sql);
	if($result){
		header('location:index.php?page=view-security-question');
		$_SESSION['deletesucssmsg'] = "Data Has Been Deleted";
		
	}else{
		echo "Error";
	}
}
?>