<?php
session_start();
include 'db.php';

if(isset($_POST['btn_update']))
	{   
        $id= $_SESSION['user_id'];
		$name = $_POST['U-name'];
		$email = $_POST['U-email'];
		$phone = $_POST['U-phone'];
		$gender = $_POST['gender'];	

		
		$sql = "UPDATE users SET 		
				full_name = '$name',
				email = '$email',				
				phone = '$phone',
                gender = '$gender'
				WHERE
				Id = '$id'
				";
		$edit_user = $connection->query($sql);
		
		if($edit_user)
		{
			$_SESSION['msg2'] = 'Update Successfully';			
		    header('location:editProfileForm2.php');exit;
		}		
	}
?>	