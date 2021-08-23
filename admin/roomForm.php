<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>

<?php 
include'db.php';
	$count = 1;
	$sql = "SELECT * FROM `room`";				
	$resultSet = $connection->query($sql);				
?>
<!-- Content Wrapper -->
<!-- Modal -->
</br></br></br></br>
	<?php if(isset($_SESSION['msg2'])) {?>
	<h5 class="text-success"><?=$_SESSION['msg2']?></h5>
	<?php unset($_SESSION['msg2']);?>
	<?php }?>
	<!-- Failed msg -->
	<?php if(isset($_SESSION['msg1'])) {?>
	<h5 class="bg-danger"><?=$_SESSION['msg1']?></h5>
	<?php unset($_SESSION['msg1']);?>
	<?php }?>
    <div class="modal-content">
      <div class="card-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-couch"></i> Add A Room</h5>
      </div>
	  <form class="user" action="addRoom.php" method="POST">
      <div class="modal-body">
			<div class="card-body mb-2">			
				<div class="form-group mb-2">
					<label for="email">Room Number</label>
					<input type="text" class="form-control" name="R_number"  aria-describedby="priceHelp"  required>
				</div>
				<div class="form-group mb-2">
					<label for="email">Select Seater</label>
					<select type="number" class="form-control" name="R_seater"  aria-describedby="emailHelp" required>
						<option value="0">--Select--</option>
						<option value="1">Single Seater</option>
						<option value="2">Two Seater</option>
						<option value="3">Three Seater</option>
						<option value="4">Four Seater</option>
					</select>
				</div>
				<div class="form-group mb-2">
					<label for="email">Room Fees/Per Person</label>
					<input type="text" class="form-control" name="R_fees"  aria-describedby="priceHelp"  required>					
				</div>				
				<div class="mx-auto">
				<button type="submit" name="btn_add" class="btn btn-primary text-right">Create Room</button>
				</div>			
			</div>
		</div>
	  </form>
    </div>
<!-- End of Modal -->
</br>
</br>
<div class="col">
	<div class="card">
		<div class="card-header bg-primary text-white"> <h3> <i class="fas fa-couch"></i> Manage Rooms</h3>
		
		</div>				
		<div class="card-body">		
			<table class="table">
			<thead>
			  <tr>
				<th>Serial</th>
				<th>ID</th>
				<th>Room Number</th>
				<th>Seater Quantity</th>
				<th>Fees(per student)</th>
				<th>Date Of Post</th>
			  </tr>
			</thead>
			<tbody>
			<?php foreach($resultSet AS $row){?>
			  <tr>
				<td><?=$count;;?></td>
				<td><?=$row['Id']?></td>
				<td><?=$row['room_no']?></td>
				<td><?=$row['seater']?></td>
				<td><?=$row['fees']?></td>
				<td><?=$row['posting_date']?></td>
				
				<td>
				<form action="roomEditForm.php" method="POST">
				<input type="hidden" name="edit_id" value="<?=$row['Id']?>">
				<button type="submit" name="edit_btn" class="btn btn-success"><i class="far fa-edit"></i></button>
                </form>					
				</td>
			
				<td>
				<form action="roomUpdateDelete.php" method="POST">
				<input type="hidden" name="delete_id" value="<?=$row['Id']?>">				
				<button type="submit" name="delete_btn" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
				</form>
				</td>				
			  </tr>
			<?php $count = $count+ 1; } ?> 
			</tbody>
		  </table>
		</div>
	</div>
</div>
</br></br>

<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>



