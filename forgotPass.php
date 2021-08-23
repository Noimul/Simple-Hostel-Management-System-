<?php 
include'db.php';
session_start();
if(isset($_POST['send_btn']))
{
	$email = $_POST['email'];
	
	$sql = "SELECT * FROM users 
		    WHERE email='$email'";
	
	$sql_run = $connection->query($sql);
	
	$countEmail = mysqli_num_rows($sql_run);
	
	if($countEmail){
		
		$userInfo = mysqli_fetch_array($sql_run);
		
		$name = $userInfo['full_name'];
		$token = $userInfo['token'];
		
		$subject = "Password Reset";
		$body = "Hi, $name. Click on the provided link to reset your password:
		http://localhost/Hostel-M-Sys/resetpassForm.php?token=$token";
		$sender = "From: noimhostelmanagement@gmail.com";

		if (mail($email, $subject, $body, $sender)) {
			$_SESSION['msg2'] = "Check Your Mail '$email'";			
			header('location:forgotPassForm.php');exit;
		} else {
			echo "Email Sending Failed...!!";
		}
		
	} else {
			$_SESSION['msg1'] = "'$email' Email Doesn't Exists";			
			header('location:forgotPassForm.php');exit;				
		}
}	
?>	
	