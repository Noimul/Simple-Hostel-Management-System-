<?php
	session_start();
    include 'db.php';

	if(isset($_POST['btn_change'])){	
	
		$oldPass = $_POST['oldPass'];		
		$newPass = $_POST['newPass'];		
		$conPass = $_POST['conPass'];		
		
		$id = $_SESSION['ad_id'];	
		$sql = "SELECT pass FROM admin 
				WHERE  
				Id='$id'";
		$sql_run= $connection->query($sql);
		
		$data = mysqli_fetch_assoc($sql_run);	
		$oldpwd = $data['pass'];
		if($oldPass == $oldpwd){
				if($newPass==$conPass){
			$sql = "UPDATE  admin SET 
					pass='$newPass'				
					WHERE  
					Id='$id'";
			$q = $connection->query($sql);	
				if($q){
					$_SESSION['msg2'] = 'Password Changed Successfully';
					header('location:passChangeForm.php');exit;
				}
		}else{
			$_SESSION['msg1'] = 'New Password And Confirm Password Did Not Matched!!';
			header('location:passChangeForm.php');exit;
		}
		 }else{
			$_SESSION['msg1'] = ' Your Current Password Did Not Matched!!';
			header('location:passChangeForm.php');exit;
			
		 }	
	}
?>	