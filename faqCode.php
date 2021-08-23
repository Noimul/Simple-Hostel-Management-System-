<?php
include'db.php';
session_start();

if(isset($_POST['btn_yes']))
{
	$s_name = $_POST['u_name'];
	$s_email = $_POST['u_email'];
	$s_msg = $_POST['u_message'];
		
	$sql = "INSERT INTO `faq` 
			(`full_name`,`email`,`question`) 
			VALUES 
			('$s_name','$s_email','$s_msg')";
	
	$queary_run = $connection->query($sql);
	
	if($queary_run){
		$_SESSION['msg2'] = 'Question Added Successfully';			
		header('location:contact.php');exit;
	}
}

?>

