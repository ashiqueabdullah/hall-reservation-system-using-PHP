
    <?php include_once "header.php"?>
   
   <div  class="container" style="margin-top:20px;">
		<h3 style="text-align:center;background:orange;color:white">Provost</h3>
		<hr class="red bar" style="background:red">

			
			

	<div class="row">
		<?php 
								$obj=new phpclass();
								$res=$obj->showProvost();
								if(!empty($res)){
									while($r=$res->fetch_assoc()){
							?>

							<tr>
			<div class="col-md-3">
				<div class="card" style="color:green">
					<img src="image/provost.jpg" class="card-img-top" style="height:120px;" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?php echo $r['Prov_Name']?></h5>
							<p class="card-text">Provost</p>	
						</div>
				</div>
			</div>
			<?php 
							}
						}
						?>
			
	<br>
		<a href="#"> <button type="button" class="btn btn-info" style="float:right">Back</button>		</a>
 </div>
   
   
   
   
   
   
 <?php include_once "footer.php"?>