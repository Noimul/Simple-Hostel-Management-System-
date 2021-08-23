<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>
<?php 
session_start();
?> 
<!-- Main content Bellow -->
<?php 
    include 'db.php';
	$sql = "SELECT * FROM `faq`";				
	$resultSet = $connection->query($sql);				
?>
</br></br></br>
<!-- FAQ form -->
    <section class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 style="font-family: cursive; color: #1ABC9C;">
			<i class="fas fa-comments fa-2x text-gray-300"></i>
			Frequently Ask Question			
			</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">
             <div class="container">
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
									</div>
									<hr>
									<?php } ?> 
								</div>
							</div>
						</div>
					</div>
				</div>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
		
				<?php if($_POST){?>			
				<form action="faqCode.php" method="POST">
					<input type="hidden" name="u_name" value="<?=$_POST['name']?>">
					<input type="hidden" name="u_email" value="<?=$_POST['email']?>">
					<input type="hidden" name="u_message" value="<?=$_POST['msg']?>">
					 <div class="somequs">
					 <h5 style="color: #355CCD;">Your question is:</h5>
					 <p><?=$_POST['msg']?></p>		 
					</div>				
					<p class="mb-0 font-weight-bold" style="color:red;">Do you want to submit this question?</p>
					<hr>
					<button type="submit" name="btn_yes" class="btn btn-primary btn-block">Yes</button>
					<a class="btn btn-primary btn-block" href="index.php" >No</a>
				</form> 
				<?php } ?>					
              </br>				
              <p class="mb-0 font-weight-bold">Contact Number</p>
              <p class="mb-4">00877766611</p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0">demoemail@gmail.com</p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?> 
