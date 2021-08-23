<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>
<?php 
include'db.php';
	$id= $_SESSION['user_id'];
	$sql = "SELECT * FROM `hostel_register` WHERE Id = $id";		
	$resultSet = $connection->query($sql);		
?>

</br>
</br>
</br>
<div class="continar">
	<div class="card bg-light">
		<table class="table">

			<div class="form-group">
				<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Student Details: </h4> </label>
			</div>			
				<div class="col-md-4">
					<?php
					$sql = mysqli_query($connection,"SELECT photo FROM users WHERE Id = $id");
					while($row = mysqli_fetch_assoc($sql)){
						if($row['photo'] == ""){
							echo "<img width='130' height='130' src='assets/img/profile_photo/default.jpg' alt='Default Profile Pic'>";
						} else {
							echo "<img width='130' height='130' src='assets/img/profile_photo/".$row['photo']."' alt='Profile Pic'>";
						}
					}
					?>	
				</div>
			</br>			
		  <thead class="thead-dark">
			<tr>	  
			  <th scope="col">Full Name</th>
			  <th scope="col">Email</th>
			  <th scope="col">Phone Number</th>
			  <th scope="col">Gender</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php foreach($resultSet AS $users){?>
			<tr>
			  <td><?=$users['full_name']?></td>
			  <td><?=$users['email']?></td>
			  <td><?=$users['phone']?></td>
			  <td><?=$users['gender']?></td>
			</tr>
			<?php } ?> 
		  </tbody>
		</table>
		</br>
				<table class="table">
		  <thead class="thead-dark">
			<tr>
			  <th scope="col">Date Of Birth</th>
			  <th scope="col">Guardian Name</th>
			  <th scope="col">Guardian Phone-1</th>
			  <th scope="col">Guardian Phone-2</th>
			  <th scope="col">Full Address</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php foreach($resultSet AS $users){?>
			<tr>
			  <th><?=$users['dob']?></th>
			  <td><?=$users['guardian_name']?></td>
			  <td><?=$users['guardian_phn']?></td>		
			  <td><?=$users['guardian_phn2']?></td>
			  <td><?=$users['address']?></td>
			</tr>
			<?php } ?> 
		  </tbody>
		</table>
		<hr>
		</br>
		<table class="table">
			<div class="form-group">
				<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Educational Details: </h4> </label>
			</div>
			</br>

		  <thead class="thead-dark">
			<tr>
			  <th scope="col">Registration Number</th>
			  <th scope="col">Institution Name</th>
			  <th scope="col">Course Name</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php foreach($resultSet AS $users){?>
			<tr>
			  <th><?=$users['reg_no']?></th>
			  <td><?=$users['institute']?></td>
			  <td><?=$users['course']?></td>
			</tr>
			<?php } ?> 
		  </tbody>
		</table>
		<hr>
				</br>
		<table class="table">
			<div class="form-group">
				<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Room Details: </h4> </label>
			</div>
			</br>

		  <thead class="thead-dark">
			<tr>
			  <th scope="col">Room Number</th>
			  <th scope="col">Seat Quantity</th>
			  <th scope="col">Hostel Fees</th>
			  <th scope="col">Stay From</th>
			  <th scope="col">Duration In Mounth</th>
			  <th scope="col">Transaction Number</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php foreach($resultSet AS $users){?>
			<tr>
			  <th><?=$users['room_no']?></th>
			  <td><?=$users['seater']?></td>
			  <td><?=$users['fees']?></td>
			  <td><?=$users['stay_from']?></td>
			  <td><?=$users['duration']?></td>
			  <td><?=$users['Trxid']?></td>
			</tr>
			<?php } ?> 
		  </tbody>
		</table>
	</div>
</div>
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>