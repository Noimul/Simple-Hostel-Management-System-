<?php
include'db.php';
include'security.php';

if(!isset($_SESSION['fail_counter'])){
	$_SESSION['fail_counter'] = 0;
}
if(isset($_POST['login_btn'])){
	
	$email = $_POST['a-email'];
	$pass = $_POST['a-pass'];
	
	$sql= "SELECT * FROM hostel_management.admin WHERE email= '$email' AND pass ='$pass'";	
	$sql_run= $connection->query($sql);
	
	if ($sql_run->num_rows > 0){
		foreach($sql_run AS $admin){
			$_SESSION['ad_name'] = $admin['admin_name'];
			$_SESSION['ad_id'] = $admin['Id'];
		}		
		$_SESSION['adminLogin']= 1;
		header('location:index.php');exit;
	}else{
		$_SESSION['msg'] = '!!!....Invalid admin email or password....!!!';
		$_SESSION['fail_counter']++;			
		if($_SESSION['fail_counter'] >= 3){
			setcookie('login_block', 'Block login attempt', time() + (10 * 1), "/");
		}		
	        header('location:logInPage.php');exit;
	    }
}		
?>