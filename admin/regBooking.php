<?php 
include'db.php';
session_start();

if(isset($_POST['btn_reg']))
{
	$r_number = $_POST['r_number'];
	$r_seater = $_POST['U_seater'];
	$r_fees   = $_POST['U_fees'];
	$trxid    = $_POST['U_trxid'];
	$stay     = $_POST['stay_date'];
	$duration = $_POST['m_duration'];
	$course   = $_POST['U_course'];
	$reg_n    = $_POST['U_reg'];
	$instut   = $_POST['U_instut'];	
	$name     = $_POST['name'];
	$email    = $_POST['email'];
	$phone    = $_POST['phone'];
	$gender   = $_POST['gender'];
	$dob      = $_POST['dob'];
	$address  = $_POST['U_address'];	
	$g_phone  = $_POST['g_phone'];	
	$g_phone2 = $_POST['g_phone2'];		
	$g_name   = $_POST['g_name'];
	$pass     = md5($_POST['pass']);
    $token    = bin2hex(random_bytes(15));	
					
		
	$sql_1 = "INSERT INTO `hostel_register` 
	(`room_no`,`seater`,`fees`,`Trxid`,`stay_from`,`duration`,`course`,`reg_no`,`institute`,`full_name`,`email`,`phone`,`gender`,`dob`,`address`,`guardian_phn`,`guardian_phn2`,`guardian_name`) 
	VALUES 
	('$r_number',$r_seater,'$r_fees','$trxid','$stay',$duration,'$course',$reg_n,'$instut','$name','$email','$phone','$gender','$dob','$address','$g_phone','$g_phone2','$g_name')";
	
	$booking = $connection->query($sql_1);
	
	if($booking==1){
			
		$sql_2 = "INSERT INTO `users` 
		(`full_name`,`email`,`phone`,`gender`,`pass`,`token`) 
		VALUES 
		('$name','$email','$phone','$gender','$pass','$token')";
		
		$reg = $connection->query($sql_2);
		
		if($reg==1){
			
			$_SESSION['msg2'] = 'Student Registered And Booked Successfully';			
			header('location:regBookingForm.php');exit;
		
		}
	}
}	
?>