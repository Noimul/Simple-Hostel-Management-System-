<?php include'templates\header.php';?>
<?php include'templates\navbar.php';
session_start();
?>

<!-- Contact Section-->
<section class="page-section">
	<div class="container">
		<!-- Contact Section Heading-->
		
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Contact Section Form-->
		<div class="row justify-content-center">
			<div class="col-lg-8 col-xl-7">
				<!-- successful msg -->				
				<?php if(isset($_SESSION['msg2'])) {?>
				<h5 class="text-success">
				<?=$_SESSION['msg2']?></h5>
				<?php unset($_SESSION['msg2']);?>				
				<?php }?>			
				<form action="formFaq.php" method="POST">
					<!-- Name input-->
					<?php if(isset ($_SESSION['userLogin']) && $_SESSION['userLogin']) {?>
					<?php
						include'db.php';
						$id = $_SESSION['user_id'];
						$sql= "SELECT * FROM users WHERE Id = $id";
						$results = $connection->query($sql);	
						foreach($results AS $std){	
						$s_name = $std['full_name'];
						$s_email = $std['email'];			
						}
					?>
					<div class="form-floating mb-3">
						<input class="form-control" value="<?=$s_name?>" name="name" type="text" placeholder="Enter your name..." required="required" />
						<label for="name">Full name</label>
					</div>
					<?php }else{ ?>
					<div class="form-floating mb-3">
						<input class="form-control" name="name" type="text" placeholder="Enter your name..." required="required" />
						<label for="name">Full name</label>
					</div>
					<?php } ?>
					
					<!-- Email address input-->
					<?php if(isset ($_SESSION['userLogin']) && $_SESSION['userLogin']) {?>
					<div class="form-floating mb-3">
						<input class="form-control" value="<?=$s_email?>" name="email" type="email" placeholder="name@example.com" required="required" />
						<label for="email">Email address</label>
					</div>
					<?php }else{ ?>
					<div class="form-floating mb-3">
						<input class="form-control" name="email" type="email" placeholder="name@example.com" required="required" />
						<label for="email">Email address</label>
					</div>
					<?php } ?>

					<!-- Message input-->
					<div class="form-floating mb-3">
						<textarea class="form-control" name="msg" type="text" placeholder="Enter your message here..." style="height: 10rem" required="required"></textarea>
						<label for="message">Message</label>
					</div>
					<!-- Submit Button-->
					<div class="text-right">
						<button class="btn btn-primary btn-xl" type="submit">Send</button>				    
						<a href="formFaq.php" class="btn btn-secondary btn-xl">FAQ</a>
				    </div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>