<?php include_once "header.php" ?>
<!--Signup-->

<div class="conatiner size" style="margin-top: 10px;margin-bottom:20px">
  <div class="row">
    <div class="col-md-8 offset-md-2 form-container ">
      <h3 style="text-align:center ;padding-top: 10px;">Enter Document</h3>

      <?php

        $obj=new phpclass();
        if(isset($_POST['reg_user'])){
          $res=$obj->addProvost($_POST);
        }
      ?>
      
      <form action="" method="post" >
        
        <div class="col-md-4" id="r" style="float:left">
          <label for="nm"><b>Provost Name</b></label>
          <input type="text" placeholder="Provost Name" name="name" required>
          
          <label for="id"><b>Designation</b></label>
          <input type="text" placeholder="Designation" name="designation" required>
          
          <label for="ph"><b>Phone No</b></label>
          <input type="text" placeholder="Phone  Number" name="number" required>
        </div>
        <div class="col-md-4" id="r" style="float:right">
          
          
          
          <label for="dept"><b>Department</b></label>
          
          <select name="department" Style="padding: 5px;margin: 5px 0 10px 0;width:100%" required>
            
            <?php 
                $obj=new phpclass();
                $res=$obj->showDept();
                if(!empty($res)){
                  while($r=$res->fetch_assoc()){
              ?>

              <tr>
                <option value="<?php echo $r['depert_Id'] ?>"><?php echo $r['depert_name'] ?></option>
              </tr>

            <?php 
              }
            }
            ?>
          </select>
          <br>
          
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
          
          
            <div class="clearfix">
              <button type="submit" name="reg_user" class="signupbtn">Add</button>
            </div>
            
          </div>
        </form>
      </div>
    </div>

    
    <!--End Signup-->
    
  </div>

  <?php include_once "footer.php"?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  