<?php include_once "header.php"?>
<div  class="container" style="margin-top:20px;">
	
	<h3 style="text-align:center;color:white;background:orange">Staff</h3>
	<hr class="red bar" style="background:red">
	<div class="row">

		<?php 
			$obj= new phpclass();
			$res= $obj->getStaff();
			if(!empty($res)){
				while($r=$res->fetch_assoc()){
		?>

	<div class="col-md-3">
		<div class="card" >
			<img src="../image/other-office-1581914740.jpg" class="card-img-top" style="height:120px;" alt="...">
			<div class="card-body">
				<h5 class="card-title"><?php echo $r['Staff_Name'];?></h5>
				<p class="card-text"><?php echo $r['Designation'];?></p>
			</div>
		</div>
	</div>

<?php }
			}?>
	<br>
	<a href="#"> <button type="button" class="btn btn-info" style="float:right">Back</button>		</a>
</div>
<?php include_once "footer.php"?>