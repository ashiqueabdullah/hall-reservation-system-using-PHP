<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/custom.css">
    <title>Hello, world!</title>
	
	 <style>
      body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
 
  display: inline-block;
  border: none;
  background: white;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
 
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: black;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */

  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
 
  border: 1px solid #888;

}


 

.form-container{
	
    background-color: blue;
	color: white;
    border: .5px solid #eee;
    border-radius: 5px;
   
  }

      
    </style>
	
	
	
	
	
	
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
   
   <!-- Navigation starts 
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" style="height:50px">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homepage.html">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link">SignIn</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Student Signup</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
   -->
   
   
   <div class="bg-image" 
    style="background:white">
  
  
  
  
   
   
   <!--Signup-->
   
   <div class="conatiner size" style="margin-top: 10px;">
  <div class="row">
    <div class="col-md-8 offset-md-2 form-container ">
    <h3 style="text-align:center ;padding-top: 10px;">Enter Document</h3>
  
    <form action="" method="POST" >
 
		<div class="col-md-4" id="r" style="float:left">
			<label for="nm"><b>Name</b></label>
				<input type="text" placeholder="Student Name" name="name" required>
    
			<label for="id"><b>Roll No</b></label>
				<input type="text" placeholder="Roll No" name="id" required>

			<label for="dept"><b>Department</b></label>
     
			<select name="Department" Style="padding: 5px;margin: 5px 0 10px 0;width:100%" required>
				<option value=""></option>
			</select>
				
			<label for="ph"><b>Room No</b></label>
				<input type="text" placeholder="Room Number" name="number" required>
	
			<label for="ph"><b>Phone No</b></label>
				<input type="text" placeholder="Phone  Number" name="number" required>
		</div>
		
		<div class="col-md-4" id="r" style="float:right">
			<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>

			<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw1" required>

			<label for="psw"><b>Comfirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw2" required>

			<label for="adrs"><b>City</b></label>
				<input type="text" placeholder="Enter City" name="city" required>
      
			<label>
				<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>

        <div class="clearfix">
			<button type="button" class="cancelbtn">Cancel</button>
			<button type="submit" name="reg_user" class="signupbtn">Sign Up</button>
		</div>
      
		</div>
	</form>
 </div>
</div>
   
   
   <!--End Signup-->
   
   </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>