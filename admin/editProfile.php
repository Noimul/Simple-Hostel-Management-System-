<?php
session_start();
include 'db.php';

if(isset($_POST['btn_update']))
	{   
        $id= $_SESSION['ad_id'];
		$name = $_POST['A-name'];
		$email = $_POST['A-email'];	

		
		$sql = "UPDATE admin SET 		
				admin_name = '$name',
				email = '$email'
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