<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>
<?php 
include'db.php';
	$count = 1;
	$sql = "SELECT photo FROM `users`";				
	$sql = "SELECT * FROM `hostel_register`";				
	$resultSet = $connection->query($sql);				
?>
</br></br></br></br>
<div class="col">
	<div class="card">
		<div class="card-header bg-primary text-white"> <h3> <i class="fa fa-users"></i> Manage Students</h3>
			<?php if(isset($_SESSION['msg2'])) {?>
			<h5 class="text-success"><?=$_SESSION['msg2']?></h5>
			<?php unset($_SESSION['msg2']);?>
			<?php }?>
			<!-- Failed msg -->
			<?php if(isset($_SESSION['msg1'])) {?>
			<h5 class="bg-danger"><?=$_SESSION['msg1']?></h5>
			<?php unset($_SESSION['msg1']);?>
			<?php }?>	
		</div>				
		<div class="card-body">		
			<table class="table">
			<thead>
			  <tr>
				<th>Serial</th>
				<th>Reg No</th>				
				<th>Student Name</th>
				<th>Course Name</th>
				<th>Phone</th>
				<th>Room</th>
				<th>Seat</th>
				<th>Staying From</th>
				<th>Monitor</th>
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
			<?php foreach($resultSet AS $row){?>
			  <tr>
				<td><?=$count;;?></td>
				<td><?=$row['reg_no']?></td>
				<td><?=$row['full_name']?></td>				
				<td><?=$row['course']?></td>
				<td><?=$row['phone']?></td>
				<td><?=$row['room_no']?></td>
				<td><?=$row['seater']?></td>
				<td><?=$row['stay_from']?></td>
				
			    <td>
				<form action="bookingDetails.php" method="POST">
				<input type="hidden" name="monitor_id" value="<?=$row['Id']?>">
				<button type="submit" name="monitor_btn" class="btn btn-success"><i class="fa fa-desktop"></i></button>
                </form>					
				</td>
			
				<td>
				<form action="studentDelete.php" method="POST">
				<input type="hidden" name="delete_id" value="<?=$row['Id']?>">				
				<input type="hidden" name="delete_user" value="<?=$row['full_name']?>">				
				<button type="submit" name="delete_btn" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
				</form>
				</td>				
			  </tr>
			<?php $count = $count+1; } ?> 
			</tbody>
		  </table>
		</div>
	</div>
</div>

<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>



