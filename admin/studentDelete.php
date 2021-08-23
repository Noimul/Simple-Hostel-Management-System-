
<?php

session_start();
include 'db.php';

if(isset($_POST['delete_btn']))
	{
		$id = $_POST['delete_id'];
		$name = $_POST['delete_user'];
		$sql= " DELETE hostel_register, users FROM hostel_register INNER JOIN users 
				WHERE hostel_register.Id=users.Id AND hostel_register.Id ='$id'";
				
        $results = $connection->query($sql);
		
		if($results)
		{
			$_SESSION['msg2'] = "'$name' Delete Successfully";			
			header('location:manageStudentForm.php');exit;
		}
		
	}	
?>