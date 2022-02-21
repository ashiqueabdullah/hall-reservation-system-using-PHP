<?php include_once "../function.php"  ?>
<?php include_once "../session.php"  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/admincustom.css">
    <title>Hello, world!</title>
  </head>
  <body>

   <div id="header" style="padding-top:20px;background:blue;color:white">
		<div class="container">
			<div class="row" >
				<div class="col-md-12">
					<div id="img" style="float:left;display:inline">
						<img src="../image/Shahjalal_University_of_Science_and_Technology_logo.png" alt="SUST" style="width:100px;height:100px;" >
					</div>
					<div id="txt" style="text-align:center">
						<h3>Bangabandhu Sheikh Mujibur Rahman Hall</h3>
					<br>
						<h4>Shahjalal University of Science and Technology</h4>
					
					</div>
				</div>
			</div>
		</div>
		
   </div>
   
   <!-- Navigation starts -->
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" style="height:50px">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adminhome.php">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Administration
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			<li><a class="dropdown-item" href="addprovost.php">Add Provost</a></li>
            <li><a class="dropdown-item" href="../provost.php">Provost List</a></li>
			<li><a class="dropdown-item" href="addstaff.php">Add Staff</a></li>
			<li><a class="dropdown-item" href="staff.php">Staff</a></li>
			<li><a class="dropdown-item" href="addroomdept.php">add room & Department</a></li>
          </ul>
        </li>
		
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Student
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			<li class="nav-item">
				<a class="dropdown-item" href="../signup.php">Student Signup</a>
			</li>
            <li><a class="dropdown-item" href="adminstudentprob.html">Student Problem</a></li>
          </ul>
        </li>
		
		
		
		<li class="nav-item">
          <a class="nav-link" href="#">LogOut</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
   <!--Ending Of Navbar-->