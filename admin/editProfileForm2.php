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
			<div class="col-md-12">
				<?php if(isset($_SESSION['msg2'])) {?>
				<h5 class="text-success"><?=$_SESSION['msg2']?></h5>
				<?php unset($_SESSION['msg2']);?>
				<?php }?>					
			</div>
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
				<p>In this section, you are able to change your information and profile photo.</p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
	<form action="editProfile.php" method="POST">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" value="<?=$name?>" name="A-name" placeholder="Enter full name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" value="<?=$email?>" name="A-email" placeholder="Enter email ID">
				</div>
			</div>
		</div>
		
		</br>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="submit" name="btn_update" class="btn btn-primary">Update</button>
					<a href="profilePage.php" class="btn btn-secondary">Cancel</a>
				</div>
			</div>
		</div>
	</form>
		<div class="row gutters">
			  <form action="changePhoto.php" method="POST" enctype="multipart/form-data">
				  <div class="form-group row">
					<label for="photoUpload" class="col-4 col-form-label">Change Profile Photo</label> 
					<input type="file" id="photoUpload" name="photoUpload">
				  </div>
				  </br>
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="text-right">
								<button type="submit" name="btn_add" class="btn btn-primary">Change Photo</button>
							</div>
						</div>
					</div>
			  </form>
		</div>
	</div>
</div>
</div>
</div>
</div>
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>