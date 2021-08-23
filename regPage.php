<?php include'templates\header.php';?>
<?php include'templates\navbar.php';
session_start();
?>
<!-- Contact Section-->
<section class="page-section">
	<div class="container">
		<!-- Contact Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Sign Up</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- Contact Section Form-->
		<div class="row justify-content-center">
			<div class="col-lg-8 col-xl-7">
			
			<p class="text-center">
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
			</p>
			
				<form action="regCode.php" method="POST">
					<!-- Name input-->
					<div class="form-floating mb-3">
						<input class="form-control" name="U-name" type="text" placeholder="Enter your name..." required="required" />
						<label for="name">Full name</label>
					</div>
					<!-- Email address input-->
					<div class="form-floating mb-3">
						<input class="form-control" name="U-email" type="email" placeholder="name@example.com" required="required,email" />
						<label for="email">Email address</label>
					</div>
					<!-- Phone number input-->
					<div class="form-floating mb-3">
						<input class="form-control" name="U-phone" type="text" placeholder="(123) 456-7890" required="required" />
						<label for="phone">Phone number</label>
					</div>
					<!-- Gender input-->
					<div class="form-floating mb-3">
						<select type="text" name="gender" class="selectGen" required="required">
							<option value="">Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="others">Others</option>
						</select>
					</div>
					<!-- Pass input-->
					<div class="form-floating mb-3">
						<input class="form-control" name="pass" type="password" placeholder="Create Pass" required="required" />
						<label for="phone">Create Password</label>
					</div>
					<!-- Re-Pass input-->
					<div class="form-floating mb-3">
						<input class="form-control" name="r_pass" type="password" placeholder="Confirm Pass" required="required" />
						<label for="phone">Confirm Password</label>
					</div>
				
					<!-- Submit Button-->
					<button class="btn btn-primary btn-xl" name="sign_btn" type="submit">Sign Up</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>