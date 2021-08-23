<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>
<?php 
session_start();
include 'db.php';

if(isset($_POST['submit_btn']))
{
	if(isset($_GET['token']))
	{
		$token = $_GET['token'];	
		$npass = md5($_POST['n_pass']);
		$cpass = md5($_POST['c_pass']);
		$re_token = bin2hex(random_bytes(15));
	
		if($npass === $cpass)
		{
			$sql = "UPDATE users SET 
					pass = '$npass',
					re_pass = '$cpass',
					token = '$re_token'
					WHERE 
					token = '$token'";
			//echo $sql;$exit;
			$result = $connection->query($sql);
			
			if($result)
			{
				$_SESSION['msg2'] = 'Password Changed successfully';			
				header('location:index.php');exit;
				
			}else{
				
				echo "password NOT changed";
			}
		}else{
			
			$_SESSION['msg1'] = 'Sorry password did not matched. Try again!!';
			header("location:resetPassForm.php?token=$token");exit;
			
		}
	}else { 
	
		echo "token not found";
	}
}	
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
                    <h1 class="h4 text-gray-900 mb-2">Create New Password</h1>
                    <p class="mb-4" style="text-align: center;">
						<?php if(isset($_SESSION['msg1'])) { ?>
						<div class="text-danger">
						<h5><?=$_SESSION['msg1']?></h5>							
						<?php unset($_SESSION['msg1']);?>
						</div>
						<?php } ?>				
					</p>
                  </div>				  
				  
                  <form class="user" action="" method="POST">
				  <div class="text-center">
				  </div>	
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input name="n_pass" class="form-control mb-3" placeholder="Create password" type="password" required>
					</div> 
					
					<!-- user re-password// -->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input name="c_pass"class="form-control mb-3" placeholder="Repeat password" type="password" required>
					</div>
                    <button type="submit" name="submit_btn" class="btn btn-primary btn-user btn-block">
                      Set Password
                    </button>
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
<!-- End of Main Content -->
<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>



