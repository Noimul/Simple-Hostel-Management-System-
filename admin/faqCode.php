<?php
include'db.php';
session_start();

if(isset($_POST['btn_submit']))
{	
	$a_id = $_POST['ans_id'];
	$name = $_POST['q_name'];	
	$q_answer = $_POST['a_ans'];
	
	$query = "UPDATE faq SET answer = '$q_answer' WHERE Id = '$a_id' ";
			
	//echo $query;exit;
			
	$query_run = $connection->query($query);
	
	if($query_run){
		
		$_SESSION['msg2'] = "You Answered $name's Question Successfully ";			
		header('location:formFaq.php');exit;
	}
}

?>

<?php
if(isset($_POST['btn_delete']))
	{
		$d_id = $_POST['dlt_id'];
		$d_name = $_POST['dlt_name'];
		
		$sql= "DELETE FROM faq WHERE Id= '$d_id' ";
		
        $delete = $connection->query($sql);
		
		if($delete)
		{
			$_SESSION['msg2'] = " $d_name's Question Deleted Successfully";			
			header('location:formFaq.php');exit;
						
		}		
	}	
?>
