<?php include'templates\header.php';?>
<?php
session_start();
?>

<!-- Begin Page Content -->
 <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Password Recovery</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a mail to reset your password!</p>
                    <p class="mb-4">
						<?php if(isset($_SESSION['msg2'])) {?>
						<h6 class="text-success"><?=$_SESSION['msg2']?></h6>
						<?php unset($_SESSION['msg2']);?>
						<?php }?>
			             <!-- Failed msg -->
						<?php if(isset($_SESSION['msg1'])) {?>
						<h6 class="text-danger"><?=$_SESSION['msg1']?></h6>
						<?php unset($_SESSION['msg1']);?>
						<?php }?>						
					</p>
                  </div>				  
				  
                  <form class="user" action="forgotPass.php" method="POST">
				  <div class="text-center">
				   <?php if(isset($_SESSION['msg'])) { ?>
					<div class="text-danger">
					<h5><?=$_SESSION['msg']?></h5>							
					<?php unset($_SESSION['msg']);?>
					</div>
					<?php } ?>
				  </div>	
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                    </div></br>
					<div class="text-right">
                    <button type="submit" name="send_btn" class="btn btn-primary btn-user btn-block">
                      Send Mail
                    </button>
					<a href="logInPage.php" class="btn btn-primary btn-user btn-block">Cancel</a>
					</div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="regPage.php">Create new account</a>
                  </div>				  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




