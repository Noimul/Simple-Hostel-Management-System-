<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>
<?php 
include'db.php';
	$id= $_SESSION['ad_id'];
	$sql = "SELECT * FROM `admin` WHERE Id = $id";	
	
	$resultSet = $connection->query($sql);
	
    foreach($resultSet AS $users){
    $name = $users['admin_name'];
	$email = $users['email'];
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
				</div>
				<h5 class="user-name">Student Register and Booking Form</h5>
				<h6 class="user-email"><?=$email?></h6>
			</div>
			<div class="about">
				<h5>About This page</h5>
				<p>In this section, Admin can create an account and booking a room for students. </p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
	<form action="regBooking.php" method="POST">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Student Details </h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control"  name="name" placeholder="Enter full name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control"  name="email" placeholder="Enter email ID">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Password (Temporary)</label>
					<input type="password" class="form-control"  name="pass" placeholder="Create temp password">
				</div>
			</div>			
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="phone">Personal Phone</label>
					<input type="text" class="form-control"  name="phone" placeholder="Enter phone number">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<div class="form-group">
					<label for="website">Gender</label>
					<div class="col-8">
					  <select type="text" name="gender" class="form-control" required="required">
							<option value="">Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="others">Others</option>
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
				<div class="form-group mb-3">
					<label for="eMail">Address</label>
					<input type="text" class="form-control" name="U_address" placeholder="Enter Address">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group mb-3">
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
					<input type="text" class="form-control" name="U_trxid" placeholder="Enter TrxId of Payment" required>
				</div>
			</div>
		</div>
		
		</br>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="submit" name="btn_reg" class="btn btn-primary">Booking</button>
					<a href="profilePage.php" class="btn btn-secondary">Cancel</a>
				</div>
			</div>
		</div>
	</form>
	</div>
	
</div>
</div>
</div>
</div>
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>