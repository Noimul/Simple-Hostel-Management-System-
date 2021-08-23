<?php
session_start();
include'db.php';
	$id= $_SESSION['user_id'];
	
    if(isset($_POST['btn_add'])){
        move_uploaded_file($_FILES['photoUpload']['tmp_name'],"assets/img/profile_photo/".$_FILES['photoUpload']['name']);
        $sql = "UPDATE users SET 
		photo = '".$_FILES['photoUpload']['name']."' 
		WHERE 
		Id = '$id'";
		
		$sql_run= $connection->query($sql);
		
		if ($sql_run){
			$_SESSION['msg2'] = 'Profile Photo Upload Successfully';			
		    header('location:editProfileForm2.php');exit;
		}
    }	
?>	
	