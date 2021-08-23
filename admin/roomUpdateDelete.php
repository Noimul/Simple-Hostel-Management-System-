<?php 
session_start();
include 'db.php';

if(isset($_POST['btn_update']))
	{
		$id= $_POST['edit_id'];		
		$Room_n= $_POST['ro-number'];
		$Room_s= $_POST['ro-seater'];		
		$Room_f= $_POST['ro-fees'];

		
		$sql = "UPDATE room SET 		
				room_no = '$Room_n',		
				seater = $Room_s,		
				fees = '$Room_f'		
				WHERE
				Id = '$id'
				";
		$edit_user = $connection->query($sql);
		
		if($edit_user)
		{
			$_SESSION['msg2'] = "ID='$id' Update Successfully";			
		    header('location:roomForm.php');exit;
		}		
	}
?>

<?php
if(isset($_POST['delete_btn']))
	{
		$id = $_POST['delete_id'];
		$sql= "DELETE FROM room WHERE Id='$id'";
		
        $results = $connection->query($sql);
		
		if($results)
		{
			$_SESSION['msg2'] = "ID='$id' Delete Successfully";			
			header('location:roomForm.php');exit;
		}
		
	}	
?>