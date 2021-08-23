<?php
include'db.php';
session_start();

if(isset($_POST['btn_add']))
{
	$code = $_POST['C_code'];
	$sortName = $_POST['S_name'];
	$FullName = $_POST['F_name'];
		
	$sql = "INSERT INTO `course` 
			(`code`,`single_name`,`full_name`) 
			VALUES 
			('$code','$sortName','$FullName')";
	
	$sql_run = $connection->query($sql);
	
	if($sql_run){
		$_SESSION['msg2'] = 'Course Added Successfully';			
		header('location:courseForm.php');exit;
	}
}

?>