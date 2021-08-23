<?php
include'db.php';
session_start();

if(isset($_POST['btn_add']))
{
	$r_number = $_POST['R_number'];
	$r_seater = $_POST['R_seater'];
	$r_fees = $_POST['R_fees'];
		
	$sql = "INSERT INTO `room` 
			(`room_no`,`seater`,`fees`) 
			VALUES 
			('$r_number',$r_seater,'$r_fees')";
	
	$sql_run = $connection->query($sql);
	
	if($sql_run){
		$_SESSION['msg2'] = 'Room added successfully';			
		header('location:roomForm.php');exit;
	}
}

?>