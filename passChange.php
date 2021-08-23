<?php
	session_start();
    include 'db.php';

	if(isset($_POST['btn_change'])){	
	
		$oldPass = md5($_POST['oldPass']);		
		$newPass = md5($_POST['newPass']);		
		$conPass = md5($_POST['conPass']);		
		
		$id = $_SESSION['user_id'];	
		$sql = "SELECT pass FROM users 
				WHERE  
				Id='$id'";
		$sql_run= $connection->query($sql);
		
		$data = mysqli_fetch_assoc($sql_run);	
		$oldpwd = $data['pass'];
		if($oldPass == $oldpwd){
				if($newPass==$conPass){
			$sql = "UPDATE  users SET 
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