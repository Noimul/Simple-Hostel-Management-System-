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
</br>
<div class="container emp-profile">
<form method="post">
	<div class="row">
	<div class="col-md-4">
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
		<div class="col-md-6">
			<div class="profile-head">
						<h5><?=$name?></h5>
						<h6>Student</h6>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
					About you
					</li>
				</ul>
			</div>
		</div>				
		<div class="col-md-2">
			<a href="editProfileForm2.php" class="btn btn-success" name="btnAddMore">Edit Your Profile</a>
			</br></br>
			<a href="passChangeForm.php" class="btn btn-secondary text-right" name="btnAddMore">Change Password</a>
		</div>				
	</div>	
	<div class="row">
		<div class="col-md-4">
			<div class="profile-work">
			</div>
		</div>
		<div class="col-md-8 text-uppercase">
			<div class="tab-content profile-tab" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="row">
						<div class="col-md-6">
							<label>User Id</label>
						</div>
						<div class="col-md-6">
							<p><?=$id?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Name</label>
						</div>
						<div class="col-md-6">
							<p><?=$name?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 ">
							<label>Email</label>
						</div>
						<div class="col-md-6 text-lowercase">
							<p><?=$email?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Phone</label>
						</div>
						<div class="col-md-6">
							<p><?=$phone?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Gender</label>
						</div>
						<div class="col-md-6">
							<p><?=$gender?></p>
						</div>
					</div>														
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				</div>
			</div>
		</div>
	</div>
</form>
</div>
</br>
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>			