<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>
<?php 
include'db.php';
if(isset($_POST['monitor_btn'])){
	
	$mid= $_POST['monitor_id'];
	
	$sql = "SELECT * FROM `hostel_register` WHERE Id = $mid";	
	
	$resultSet = $connection->query($sql);
	
    foreach($resultSet AS $users){
    $regNo = $users['reg_no'];
    $inst = $users['institute'];
	$c_name = $users['course'];
	$name = $users['full_name'];
	$email = $users['email'];
	$phone = $users['phone'];
	$gender = $users['gender'];
	$dob = $users['dob'];
	$g_name = $users ['guardian_name'];
	$g_phone = $users ['guardian_phn'];
	$g_phone2 = $users ['guardian_phn2'];
	$address = $users ['address'];
	$r_number = $users ['room_no'];
	$r_seat = $users ['seater'];
	$r_fees = $users ['fees'];
	$r_stay = $users ['stay_from'];
	$r_duration = $users ['duration'];
	$trxid = $users ['Trxid'];
	}
}	
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
						$sql = mysqli_query($connection,"SELECT photo FROM users WHERE Id = $mid");
						while($row = mysqli_fetch_assoc($sql)){
							if($row['photo'] == ""){
								echo "<img width='130' height='130' src='../assets/img/profile_photo/default.jpg' alt='Default Profile Pic'>";
							} else {
								echo "<img width='130' height='130' src='../assets/img/profile_photo/".$row['photo']."' alt='Profile Pic'>";
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
			<tr>
			  <td><?=$name?></td>
			  <td><?=$email?></td>
			  <td><?=$phone?></td>
			  <td><?=$gender?></td>
			</tr>
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
			<tr>
			  <th><?=$dob?></th>
			  <td><?=$g_name?></td>
			  <td><?=$g_phone?></td>		
			  <td><?=$g_phone2?></td>
			  <td><?=$address?></td>
			</tr>
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
			<tr>
			  <th><?=$regNo?></th>
			  <td><?=$inst?></td>
			  <td><?=$c_name?></td>
			</tr> 
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
			<tr>
			  <th><?=$r_number?></th>
			  <td><?=$r_seat?></td>
			  <td><?=$r_fees?></td>
			  <td><?=$r_stay?></td>
			  <td><?=$r_duration?></td>
			  <td><?=$trxid?></td>
			</tr> 
		  </tbody>
		</table>
	</div>
</div>
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>