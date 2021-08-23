<?php include'templates\header.php';?>
<?php include'templates\navbar.php';
session_start();
?>
<!-- Contact Section-->
<section class="page-section">
	<div class="container">
		<!-- Contact Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Log In</h2>
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
					<?php if(isset($_SESSION['msg'])) { ?>
					<div class="text-danger">
					<h5><?=$_SESSION['msg']?></h5>							
					<?php unset($_SESSION['msg']);?>
					</div>
					<?php } ?>
				</div>
				<!--==========================COOKIESET Start========================================-->				  
				  <?php
				  if(isset($_COOKIE['login_block'])){
					  echo 'You entered the wrong email or password 3 times. So, you are blocked for 1 minute';
				  }else{ ?>			
				<form action="loginCode.php" method="POST">
										
					<!-- Email address input-->
					<div class="form-floating mb-3">
						<input class="form-control" name="email" type="email" placeholder="name@example.com" required="required,email" />
						<label for="email">Email address</label>
					</div>

					<!-- Pass input-->
					<div class="form-floating mb-3">
						<input class="form-control" name="pass" type="password" placeholder="Pass" required="required" />
						<label for="phone"> Password</label>
					</div>
					<!-- Submit Button-->
					<div class="text-right">
						<button class="btn btn-primary btn-xl" name="login_btn" type="submit">Log In</button>
						<a href="forgotPassForm.php" class="btn btn-secondary btn-xl">Forget password</a>
				    </div>
				</form>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>