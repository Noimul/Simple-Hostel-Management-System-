<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>
<?php include'security.php';
include'db.php';
?>

</br>
</br>
</br>
<!-- Masthead-->
	<div class="container d-flex align-items-center flex-column">
		<!-- Masthead Heading-->
		<?php if(isset ($_SESSION['adminLogin']) && $_SESSION['adminLogin']) {?>
		<h1 class="text-uppercase mb-0">Welcome Admin - <?=$_SESSION['ad_name']?></h1>
		<?php }else{ ?>
		<h1 class="masthead-heading text-uppercase mb-0">Welcome to our hostel</h1>
		<?php } ?>	
	</div>
</br>
</br>

  <div class="row">

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-primary shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>Total Students:</h4></div>
			  <div class="h5 mb-0 font-weight-bold text-gray-800">
				<?php 
				$sql= "SELECT Id From users ORDER BY Id"; 
				$sql_run= $connection->query($sql);				
				$row = mysqli_num_rows($sql_run);				
				echo '<h3>'.$row.'</h3>'
				?>			  
			  </div>
			</div>
			<div class="col-auto">
			  <i class="fa fa-users fa-2x text-gray-300"></i>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-success shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><h4>Total Rooms:</h4></div>
			  <div class="h5 mb-0 font-weight-bold text-gray-800">
				<?php 
				$sql= "SELECT Id From room ORDER BY Id"; 
				$sql_run= $connection->query($sql);				
				$row = mysqli_num_rows($sql_run);				
				echo '<h3>'.$row.'</h3>'
				?>			  
			  
			  </div>
			</div>
			<div class="col-auto">
			  <i class="fas fa-couch fa-2x text-gray-300 "></i>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-success shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><h4>Total Courses:</h4></div>
			  <div class="h5 mb-0 font-weight-bold text-gray-800">
				<?php 
				$sql= "SELECT Id From course ORDER BY Id"; 
				$sql_run= $connection->query($sql);				
				$row = mysqli_num_rows($sql_run);				
				echo '<h3>'.$row.'</h3>'
				?>			  			  
			  </div>
			</div>
			<div class="col-auto">
			 <i class="fab fa-accusoft fa-2x text-gray-300"></i>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-primary shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>Admin Profile:</h4></div>
			  <div class="panel panel-default">
			  <a href="profilePage.php">Full Detail </a>
			  </div>
			</div>
			<div class="col-auto">
			 <i class="fa fa-user fa-2x text-gray-300"></i>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
	<div class="container">
		<!-- Portfolio Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Portfolio Grid Items-->
		<div class="row justify-content-center">
			<!-- Portfolio Item 1-->
			<div class="col-md-6 col-lg-4 mb-5">
				<div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
					<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
						<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
					</div>
					<img class="img-fluid" src="assets/img/portfolio/room1.png" alt="..." />
				</div>
			</div>
			<!-- Portfolio Item 2-->
			<div class="col-md-6 col-lg-4 mb-5">
				<div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
					<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
						<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
					</div>
					<img class="img-fluid" src="assets/img/portfolio/room2.png" alt="..." />
				</div>
			</div>
			<!-- Portfolio Item 3-->
			<div class="col-md-6 col-lg-4 mb-5">
				<div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
					<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
						<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
					</div>
					<img class="img-fluid" src="assets/img/portfolio/room3.png" alt="..." />
				</div>
			</div>
			<!-- Portfolio Item 4-->
			<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
				<div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
					<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
						<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
					</div>
					<img class="img-fluid" src="assets/img/portfolio/readingRoom.png" alt="..." />
				</div>
			</div>
			<!-- Portfolio Item 5-->
			<div class="col-md-6 col-lg-4 mb-5 mb-md-0">
				<div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
					<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
						<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
					</div>
					<img class="img-fluid" src="assets/img/portfolio/playAre.png" alt="..." />
				</div>
			</div>
			<!-- Portfolio Item 6-->
			<div class="col-md-6 col-lg-4">
				<div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
					<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
						<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
					</div>
					<img class="img-fluid" src="assets/img/portfolio/washroom1.png" alt="..." />
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
			<div class="modal-body text-center pb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title-->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image-->
							<img class="img-fluid rounded mb-5" src="assets/img/portfolio/room1.png" alt="..." />
							<!-- Portfolio Modal - Text-->
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Portfolio Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
			<div class="modal-body text-center pb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title-->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image-->
							<img class="img-fluid rounded mb-5" src="assets/img/portfolio/room2.png" alt="..." />
							<!-- Portfolio Modal - Text-->
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Portfolio Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
			<div class="modal-body text-center pb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title-->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image-->
							<img class="img-fluid rounded mb-5" src="assets/img/portfolio/room3.png" alt="..." />
							<!-- Portfolio Modal - Text-->
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Portfolio Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
			<div class="modal-body text-center pb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title-->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image-->
							<img class="img-fluid rounded mb-5" src="assets/img/portfolio/readingRoom.png" alt="..." />
							<!-- Portfolio Modal - Text-->
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Portfolio Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
			<div class="modal-body text-center pb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title-->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image-->
							<img class="img-fluid rounded mb-5" src="assets/img/portfolio/playAre.png" alt="..." />
							<!-- Portfolio Modal - Text-->
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Portfolio Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
			<div class="modal-body text-center pb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title-->
							<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image-->
							<img class="img-fluid rounded mb-5" src="assets/img/portfolio/washroom1.png" alt="..." />
							<!-- Portfolio Modal - Text-->
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
							<button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
								<i class="fas fa-times fa-fw"></i>
								Close Window
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
	<div class="container">
		<!-- About Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-white">About us</h2>
		<!-- Icon Divider-->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- About Section Content-->
		<div class="row">
			<div class="col-lg-4 ms-auto"><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra erat non dapibus mollis. Sed id tincidunt erat, id condimentum nibh. Suspendisse facilisis finibus tincidunt. Nunc a nulla arcu. Maecenas vehicula sem eget nisl ultrices, vel mattis augue hendrerit. Maecenas velit enim, vulputate at tortor eu, ullamcorper gravida nulla. Etiam ultrices eros felis. Duis sagittis tellus sed accumsan rutrum. Curabitur iaculis odio id turpis aliquam euismod.</p></div>
			<div class="col-lg-4 me-auto"><p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra erat non dapibus mollis. Sed id tincidunt erat, id condimentum nibh. Suspendisse facilisis finibus tincidunt. Nunc a nulla arcu. Maecenas vehicula sem eget nisl ultrices, vel mattis augue hendrerit. Maecenas velit enim, vulputate at tortor eu, ullamcorper gravida nulla. Etiam ultrices eros felis. Duis sagittis tellus sed accumsan rutrum. Curabitur iaculis odio id turpis aliquam euismod.</p></div>
		</div>
	</div>
</section>



<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>
