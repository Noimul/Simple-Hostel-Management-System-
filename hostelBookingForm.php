<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>
<?php 
include'db.php';
	$id= $_SESSION['user_id'];
	$sql = "SELECT * FROM `users` WHERE Id = $id";	
	
	$resultSet = $connection->query($sql);
	
    foreach($resultSet AS $users){
    $name = $users['full_name'];
	$email = $users['email'];
	$phone = $users['phone'];
	$gender = $users['gender'];
	}	
?>
	

</br></br></br>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row">
		<p class="text-center">
	    <!-- hostel booked msg -->	
			<?php
				$sql = "SELECT * FROM `hostel_register` WHERE Id = $id";
				$result = $connection->query($sql);	

				if ($result->num_rows > 0){
					
					echo "<h3 style='color: red' align='left'>Hostel Already Booked By You</h3>";
				}				
			?>		
			<!-- success msg -->
			<?php if(isset($_SESSION['msg2'])) {?>
			<h5 class="text-success"><?=$_SESSION['msg2']?></h5>
			<?php unset($_SESSION['msg2']);?>
			<?php }?>			
		</p>
		</div>
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<?php
						$sql = mysqli_query($connection,"SELECT photo FROM users WHERE Id = $id");
						while($row = mysqli_fetch_assoc($sql)){
							//echo $row['full_name'];
							if($row['photo'] == ""){
								echo "<img width='200' height='200' src='assets/img/profile_photo/default.jpg' alt='Default Profile Pic'>";
							} else {
								echo "<img width='200' height='200' src='assets/img/profile_photo/".$row['photo']."' alt='Profile Pic'>";
							}
							echo "<br>";
						}
					?>	
				</div>
				<h5 class="user-name"><?=$name?></h5>
				<h6 class="user-email"><?=$email?></h6>
			</div>
			<div class="about">
				<h5>About</h5>
				<p>In this section, you can book a room after giving your suggested information.</p>
			</div>
		</div>
	</div>
	<hr>
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">				
			</div>
		</div>
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img class="masthead-avatar mb-5" src="assets/img/BKash-Icon-Logo.wine.svg" alt="..." />	
				</div>
				<h6 class="user-name">Bikash personal</h6>
				<h5 class="user-email color:green;">01800001111</h5>
			</div>
			<div class="about">
				<h5>Advance Payment</h5>
				<p>Before Booked a room, you have to payment at least <b>1000 taka</b> in advance. By using Bikash payment method you will get a transaction Id of payment. After geting the trxId, you should enter the number at booking form.</p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
	<form action="hostelBooking.php" method="POST">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" value="<?=$name?>" name="name" placeholder="Enter full name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" value="<?=$email?>" name="email" placeholder="Enter email ID">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="phone">Personal Phone</label>
					<input type="text" class="form-control" value="<?=$phone?>" name="phone" placeholder="Enter phone number">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="website">Gender</label>
					<div class="col-8">
					  <select type="text" name="gender" class="form-control">
						<option value="0">--Select--</option>
						<option value="male" <?php if($gender == 'male') echo 'selected="selected"'; ?>>Male</option>
						<option value="female" <?php if($gender == 'female') echo 'selected="selected"'; ?>>Female</option>
						<option value="others" <?php if($gender == 'others') echo 'selected="selected"'; ?>>Other</option>
					  </select>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="phone">Date of Birth</label>
					<input type="date" class="form-control" name="dob" placeholder="Enter dob">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Address</label>
					<input type="text" class="form-control" name="U_address" placeholder="Enter Address">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Gardian Name</label>
					<input type="text" class="form-control" name="g_name" placeholder="Enter Father/Mother's Name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="phone">Gardian Phone-1</label>
					<input type="text" class="form-control"  name="g_phone" placeholder="Enter Gardian Phone Number">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Gardian Phone-2</label>
					<input type="text" class="form-control"  name="g_phone2" placeholder="Enter Gardian Phone Number">
				</div>
			</div>
		</div>
		
		</br>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
				<h6 class="mb-2 text-primary">Educational Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="fullName">Registration Number</label>
					<input type="text" class="form-control" name="U_reg" placeholder="Enter Educational Reg">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Current Institution Name</label>
					<input type="text" class="form-control" name="U_instut" placeholder="Enter Institution Name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">Course Name</label>
					<div class="col-8">
					<select class="form-control" name="U_course" required>
					<option disabled selected>Select Course</option>
					<?php
						$sql = "SELECT full_name From course";  
						
						$sql_run = $connection->query($sql);

						while($data = mysqli_fetch_array($sql_run))
						{
							echo "<option value='". $data['full_name'] ."'>" .$data['full_name'] ."</option>"; 							
						}	
					?>  
				  </select>
				  </div>
				</div>
			</div>
		</div>
		
		</br>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Room Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="fullName">Room number</label>
					<div class="col-8">
					<select class="form-control select_room" name="r_number" required>
					<option disabled selected>Select Room Number</option>
					<?php
						$sql = "SELECT * From room";  
						
						$sql_run = $connection->query($sql);

						while($data = mysqli_fetch_array($sql_run))
						{
							echo "<option value='". $data['room_no'] ."'>" .$data['room_no'] ."</option>";  
						}	
					?>  
				  </select>
				  </div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="text-black">Seat Quantity</label>
					<input name="U_seater" class="form-control Seater" placeholder="" type="text" required>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="text-black">Fees Per Student</label>
					<input name="U_fees"  class="form-control Fees" placeholder="" type="text">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="phone">Check In Date</label>
					<input type="Date" name="stay_date" class="form-control" placeholder="" required>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">Duration of Stay</label>
					<div class="col-8">
					 <select type="number" class="form-control" name="m_duration"  aria-describedby="emailHelp" required>
					<option value="0">Select Mounth</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					</select>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Transaction Number</label>
					<input type="text" class="form-control" name="U_trxid" placeholder="Enter TrxId of Payment"required>
				</div>
			</div>
		</div>
		
		</br>
			<?php
				$sql = "SELECT * FROM `hostel_register` WHERE Id = $id";
				$result = $connection->query($sql);	
				$displayBtn = true;
				if($result->num_rows > 0){
					$displayBtn = false;
				}
				if ($displayBtn){ ?>
					
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right">
							<button type="submit" name="btn_reg" class="btn btn-primary">Booking</button>
							<a href="profilePage.php" class="btn btn-secondary">Cancel</a>
						</div>
					</div>
				</div>
			<?php		
				}				
			?>

	</form>
	</div>
	
</div>
</div>
</div>
</div>
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>