<?php 
include'db.php';
session_start();

if(isset($_POST['sign_btn']))
{
	$name = $_POST['U-name'];
	$email = $_POST['U-email'];
	$phone = $_POST['U-phone'];
	$gender = $_POST['gender'];	
	$pass = md5($_POST['pass']);
	$repass = md5($_POST['r_pass']);
	$token = bin2hex(random_bytes(15));
			
	if($pass === $repass){
		
		
	$sql = "SELECT * FROM users 
			WHERE email='$email'";
	
	$sql_run = $connection->query($sql);
	if($sql_run ->num_rows > 0){
		$_SESSION['msg1'] = 'Sorry This Email Address Already Used!!!';
		header('location:regPage.php');exit;
	}		
		
	$sql = "INSERT INTO `users` 
	(`full_name`,`email`,`phone`,`gender`,`pass`,`re_pass`,`token`) 
	VALUES 
	('$name','$email','$phone','$gender','$pass','$repass','$token')";
	
	$users = $connection->query($sql);
	
	if($users){
		$_SESSION['msg2'] = 'Student Registered Successfully';			
		header('location:regPage.php');exit;
	}
	}else{
		$_SESSION['msg1'] = 'Sorry Password Did Not Matched. Try again!!';
		header('location:regPage.php');exit;		
	}
}
?>