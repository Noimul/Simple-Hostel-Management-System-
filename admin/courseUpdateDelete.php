<?php 
session_start();
include 'db.php';

if(isset($_POST['btn_update']))
	{
		$id= $_POST['edit_id'];		
		$Course_code= $_POST['Co_code'];
		$Course_sn= $_POST['S_name'];		
		$Course_fn= $_POST['F_name'];

		
		$sql = "UPDATE course SET 		
				code = '$Course_code',		
				single_name = '$Course_sn',		
				full_name = '$Course_fn'		
				WHERE
				Id = '$id'
				";
		$edit_user = $connection->query($sql);
		
		if($edit_user)
		{
			$_SESSION['msg2'] = "ID='$id' Update Successfully";			
		    header('location:courseForm.php');exit;
		}		
	}
?>

<?php
if(isset($_POST['delete_btn']))
	{
		$id = $_POST['delete_id'];
		$sql= "DELETE FROM course WHERE Id='$id'";
		
        $results = $connection->query($sql);
		
		if($results)
		{
			$_SESSION['msg2'] = "ID='$id' Delete Successfully";			
			header('location:courseForm.php');exit;
		}
		
	}	
?>