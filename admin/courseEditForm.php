<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>

<?php
include'db.php';
if(isset($_POST['edit_btn'])){
	
	$id= $_POST['edit_id'];
	
	$sql= "SELECT * FROM course WHERE Id = $id";
	
    $results = $connection->query($sql);
	
	foreach($results AS $course){
	
    $c_code = $course['code'];
	$c_sName = $course['single_name'];
	$c_fName = $course['full_name'];			
	}
}
?>
</br></br>
	<div class="p-5">
	  <div class="text-center">
		<h1 class="h4 text-gray-900 mb-4"> <i class="fab fa-accusoft"></i> Edit Course Details</h1>
	  </div>
	  <form class="user" action="courseUpdateDelete.php" method="POST">
		
		<input type ="hidden" name="edit_id" value="<?=$course['Id']?>">
	
				<div class="form-group mb-2">
					<label for="email">Course Code</label>
					<input type="text" value="<?=$c_code?>" class="form-control" name="Co_code"  aria-describedby="priceHelp"  required>
				</div>
					
				<div class="form-group mb-2">
					<label for="email">Course Name (Short)</label>
					<input type="text" value="<?=$c_sName?>" class="form-control" name="S_name"  aria-describedby="priceHelp"  required>					
				</div>		
					
				<div class="form-group mb-2">
					<label for="email">Course Name (Full)</label>
					<input type="text" value="<?=$c_fName?>" class="form-control" name="F_name"  aria-describedby="priceHelp"  required>					
				</div>
					
		  <input type="submit" name="btn_update" value="Update" class="btn btn-primary btn-user btn-block">
		  <a href="courseForm.php" class="btn btn-primary btn-user btn-block">Cancel</a>
	  </form>
	</div>
		
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>