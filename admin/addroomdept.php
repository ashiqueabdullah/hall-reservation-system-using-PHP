<?php include_once "header.php"  ?>



<div class="bg-image"
	style="background-image: url('../image/hall.png');
	height: 450px;background-repeat: no-repeat;
	background-size: 100% 100%; width: 100%;">
	
	<div class="container" style="padding-top:20px;">
		<div class="row">
			<div class="col-md-4">

				<?php 
					$obj = new phpclass();

					if (isset($_POST['add_room'])){
						$res=$obj->addRoom($_POST);
					}
				?>

				<h3 style="color:white;text-align:center;background:red">Add Room</h3>
				<form action="" method="post">
					<div class="input-group">
					<input type="text" class="form-control rounded" placeholder="Enter Room" name="room_number" />
					<button type="submit" name="add_room" class="btn btn-outline-primary" style="background:blue;color:white">Add</button>
				</div>
				</form>
				<br>
				<div class="table-wrapper-scroll-y my-custom-scrollbar" style="height:250px;">
					
					<table class="table table-bordered  mb-0" style="color:white;background:red;text-align:center"">
						<thead>
							<tr>
								
								<th scope="col">Room No</th>
								
							</tr>
						</thead>
						<tbody>

							<?php 
								$obj=new phpclass();
								$res=$obj->showRoom();
								if(!empty($res)){
									while($r=$res->fetch_assoc()){
							?>

							<tr>
								<td><?php echo $r['room_number'] ?></td>
							</tr>

						<?php 
							}
						}
						?>
							
						</tbody>
					</table>
					
				</div>
				
			</div>
			
			<!--Office Notice-->
			<div class="col-md-4 offset-md-4" style="float=right;">
				<h3 style="color:white;text-align:center;background:red">Add Department</h3>

				<?php 
					$obj = new phpclass();

					if (isset($_POST['add_dpt'])){
						$res=$obj->addDpt($_POST);
					}
				?>


				<form action="" method="post">
				<div class="input-group">
					<input type="text" class="form-control rounded" placeholder="Enter Department" name="dpt_nam" />
					<button type="submit" name="add_dpt" class="btn btn-outline-primary" style="background:blue;color:white">Add</button>
				</div>
			</form>
				<br>
				<div class="table-wrapper-scroll-y my-custom-scrollbar" style="height:250px;">
					
					<table class="table table-bordered  mb-0" style="color:white;background:red;text-align:center">
						<thead>
							<tr>
								
								<th scope="col">Department</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
								$obj=new phpclass();
								$res=$obj->showDept();
								if(!empty($res)){
									while($r=$res->fetch_assoc()){
							?>

							<tr>
								<td><?php echo $r['depert_name'] ?></td>
							</tr>

						<?php 
							}
						}
						?>
						</tbody>
					</table>
					
				</div>
				
				
				
				
			</div>
		</div>
	</div>
</div>



<?php include_once "footer.php"  ?>















<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>