<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>

<?php
include'db.php';
if(isset($_POST['edit_btn'])){
	
	$id= $_POST['edit_id'];	
	$sql= "SELECT * FROM room WHERE Id = $id";
    $results = $connection->query($sql);
	foreach($results AS $room){
	
    $r_number = $room['room_no'];
	$r_seater = $room['seater'];
	$r_fees = $room['fees'];			
	}
}
?>
</br></br>
	<div class="p-5">
	  <div class="text-center">
		<h1 class="h4 text-gray-900 mb-4"> <i class="fas fa-couch"></i> Edit Room Details</h1>

	  </div>
	  <form class="user" action="roomUpdateDelete.php" method="POST">
		
		<input type ="hidden" name="edit_id" value="<?=$room['Id']?>">
	
		<div class="form-group mb-2">
			<label for="email">Room Number</label>
			<input type="text" class="form-control" name="ro-number" value="<?=$r_number?>" aria-describedby="priceHelp"  required>
		</div>
		<div class="form-group mb-2">
			<label for="email">Select Seater</label>
			<select type="number" class="form-control" name="ro-seater"  aria-describedby="emailHelp" required>
				<option value="0">--Select--</option>
				<option value="1" <?php if($r_seater == '1') echo 'selected="selected"'; ?>>Single Seater</option>
				<option value="2" <?php if($r_seater == '2') echo 'selected="selected"'; ?>>Two Seater</option>
				<option value="3" <?php if($r_seater == '3') echo 'selected="selected"'; ?>>Three Seater</option>
				<option value="4" <?php if($r_seater == '4') echo 'selected="selected"'; ?>>Four Seater</option>
			</select>
		</div>	
		<div class="form-group mb-2">
			<label for="email">Room Fees/Per Person</label>
			<input type="text" value="<?=$r_fees?>" class="form-control" name="ro-fees"  aria-describedby="priceHelp"  required>					
		</div>					
		  <input type="submit" name="btn_update" value="Update" class="btn btn-primary btn-user btn-block">
		  <a href="roomForm.php" class="btn btn-primary btn-user btn-block">Cancel</a>
	  </form>
	</div>		
<?php include'templates\Jsscript.php';?>
<?php include'templates\footer.php';?>