<?php
include'db.php';
include'security.php';

if(!isset($_SESSION['fail_counter'])){
	$_SESSION['fail_counter'] = 0;
}
if(isset($_POST['login_btn'])){
	
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	
	$sql= "SELECT * FROM users WHERE email= '$email' AND pass ='$pass'";	
	$sql_run= $connection->query($sql);
	
	if ($sql_run->num_rows > 0){
		foreach($sql_run AS $user){
			$_SESSION['user_name'] = $user['full_name'];
			$_SESSION['user_id'] = $user['Id'];
		}		
		$_SESSION['userLogin']= 1;
		header('location:index.php');exit;
	}else{
		$_SESSION['msg'] = 'Invalid user email or password!!!';
		$_SESSION['fail_counter']++;			
		if($_SESSION['fail_counter'] >= 3){
			setcookie('login_block', 'Block login attempt', time() + (10 * 1), "/");
		}		
	        header('location:logInPage.php');exit;
	    }
}		
?>