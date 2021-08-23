<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>


<section class="page-section">
	<div class="container">
		<!-- Contact Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">User Password Change</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Contact Section Form-->
		<div class="row justify-content-center">
			<div class="col-lg-8 col-xl-7">	
				<div class="text-center">
					<!-- success msg -->
					<?php if(isset($_SESSION['msg2'])) {?>
					<h5 class="text-success"><?=$_SESSION['msg2']?></h5>
					<?php unset($_SESSION['msg2']);?>
					<?php }?>
					<!-- Failed msg -->
					<?php if(isset($_SESSION['msg1'])) {?>
					<h5 class="text-danger"><?=$_SESSION['msg1']?></h5>
					<?php unset($_SESSION['msg1']);?>
					<?php }?>
				</div>
		
				<form action="passChange.php" method="POST">
										
					<!-- old pass input-->
					<div class="form-floating mb-3">
						<input type="password" name="oldPass" class="form-control" required>
						<label for="email">Current Password</label>
					</div>

					<!-- new Pass input-->
					<div class="form-floating mb-3">
						<input type="password" name="newPass" class="form-control" required>
						<label for="phone"> New Password</label>
					</div>
					
					<!-- confirm Pass input-->
					<div class="form-floating mb-3">
						<input type="password" name="conPass" class="form-control" required>
						<label for="phone"> Confirm Password</label>
					</div>
					<!-- Submit Button-->
					<button class="btn btn-primary btn-xl" name="btn_change" type="submit">Change</button>
					<a href="profilePage.php" class="btn btn-secondary btn-xl">Cancel</a>
				</form>
			
			</div>
		</div>
	</div>
</section>


<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>