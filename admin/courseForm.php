<?php include'security.php';?>
<?php include'templates\header.php';?>
<?php include'templates\navbar.php';?>
<?php 
include'db.php';
	$count = 1;
	$sql = "SELECT * FROM `course`";				
	$resultSet = $connection->query($sql);				
?>	

<!-- Content Wrapper -->
<!-- Modal -->
</br></br></br></br>
	<?php if(isset($_SESSION['msg2'])) {?>
	<h5 class="text-success"><?=$_SESSION['msg2']?></h5>
	<?php unset($_SESSION['msg2']);?>
	<?php }?>
	<!-- Failed msg -->
	<?php if(isset($_SESSION['msg1'])) {?>
	<h5 class="bg-danger"><?=$_SESSION['msg1']?></h5>
	<?php unset($_SESSION['msg1']);?>
	<?php }?>
    <div class="modal-content">
      <div class="card-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fab fa-accusoft"></i> Add Course</h5>
      </div>
	  <form class="user" action="addCourse.php" method="POST">
      <div class="modal-body">
			<div class="card-body">			
				<div class="form-group mb-2">
					<label for="email">Course Code</label>
					<input type="text" class="form-control" name="C_code"  aria-describedby="priceHelp"  required>
				</div>
					
				<div class="form-group mb-2">
					<label for="email">Course Name (Short)</label>
					<input type="text" class="form-control" name="S_name"  aria-describedby="priceHelp"  required>					
				</div>		
					
				<div class="form-group mb-2">
					<label for="email">Course Name (Full)</label>
					<input type="text" class="form-control" name="F_name"  aria-describedby="priceHelp"  required>					
				</div>
				
				<div class="mx-auto">
				<button type="submit" name="btn_add" class="btn btn-primary text-right">Add Course</button>
				</div>			
			</div>
		</div>
	  </form>
    </div>
</br>
</br>	
<!-- End of Modal -->

<div class="col">
	<div class="card">
		<div class="card-header bg-primary text-white"> <h3> <i class="fab fa-accusoft"></i> Manage Courses</h3>		
		</div>				
		<div class="card-body">	
			<table class="table">
			<thead>
			  <tr>
				<th>Serial</th>
				<th>ID</th>
				<th>Course Code</th>
				<th>Course Name (Short)</th>
				<th>Course Name (Full)</th>
				<th>Date Of Post</th>
			  </tr>
			</thead>
			<tbody>
			<?php foreach($resultSet AS $row){?>
			  <tr>
				<td><?=$count?></td>
				<td><?=$row['Id']?></td>
				<td><?=$row['code']?></td>
				<td><?=$row['single_name']?></td>
				<td><?=$row['full_name']?></td>
				<td><?=$row['posting_date']?></td>
				
				<td>
				<form action="courseEditForm.php" method="POST">
				<input type="hidden" name="edit_id" value="<?=$row['Id']?>">
				<button type="submit" name="edit_btn" class="btn btn-success"><i class="far fa-edit"></i></button>
                </form>					
				</td>
			
				<td>
				<form action="courseUpdateDelete.php" method="POST">
				<input type="hidden" name="delete_id" value="<?=$row['Id']?>">				
				<button type="submit" name="delete_btn" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
				</form>
				</td>				
			  </tr>
			<?php $count = $count+ 1; } ?> 
			</tbody>
		  </table>
		</div>
	</div>
</div>

<?php include'templates\JSscript.php';?>
<?php include'templates\footer.php';?>



