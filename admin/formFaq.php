<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>

<!-- Main content Bellow -->
<?php 
include'db.php';
	$sql = "SELECT * FROM `faq`";				
	$resultSet = $connection->query($sql);				
?>
</br></br></br>
<section class="site-section bg-light" id="contact-section">
  <div class="container">
	<div class="row mb-5">
	  <div class="col-12 text-center">
		<h2 style="font-family: cursive; color: #355CCD;">
		<i class="fas fa-comments fa-2x text-gray-300"></i>
		Frequently Ask Question			
		</h2>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-7 mb-5">
		 <div class="container">
			<p class="text-center">
			<!-- success msg -->
			<?php if(isset($_SESSION['msg2'])) {?>
			<h5 class="text-success"><?=$_SESSION['msg2']?></h5>
			<?php unset($_SESSION['msg2']);?>
			<?php }?>			
			</p>			 
				<div class="row">
					<div class="col-lg-8">
						<div class="tab-content">

							<div class="card">
								<?php foreach($resultSet AS $row){ ?>
								<div class="somequs">
									<h6 style="color:#3390FF; margin:10px;">
									<?=$row['full_name']?>
									</h6>
									<h5><?=$row['question']?></h5>
								</div>
								<div class="someans">
									<h5>Answer:</h5>
									<p Style="color:#F77B00;">
									<?=$row['answer']?>
									</p>											
									<!-- Input answer of qus code -->	
									<form action="faqCode.php" method="POST">
									<input type="hidden" name="ans_id" value="<?=$row['Id']?>">
									<input type="hidden" name="q_name" value="<?=$row['full_name']?>">
									<textarea name="a_ans" style="height: 50px;" class="form-control" placeholder="Write Your Answer" required></textarea>
									<button type="submit" name="btn_submit" style="width:100%;" class="btn btn-success">Submit</button>
									</form>
									<!-- qsn delete code -->
									<form action="faqCode.php" method="POST">
									<input type="hidden" name="dlt_id" value="<?=$row['Id']?>">
									<input type="hidden" name="dlt_name" value="<?=$row['full_name']?>">
									<button type="submit" name="btn_delete" style="width: 100%;" class="btn btn-danger">Delete</button>
									</form>										
									<hr>
								</div>
								<?php } ?> 
							</div>
						</div>
					</div>
				</div>
			</div>
	  </div>
	  <div class="col-md-5">
		
		<div class="p-4 mb-3 bg-white">			
		  <p class="mb-0 font-weight-bold">Contact Number</p>
		  <p class="mb-4">008826255223</p>

		  <p class="mb-0 font-weight-bold">Email Address</p>
		  <p class="mb-0">demo@gmail.com</p>

		</div>
		
	  </div>
	</div>
  </div>
</section>

<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?> 
