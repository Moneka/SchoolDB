<?php 
	ob_start(); 
    ini_set('session.save_path', 'tmp');
	session_start(); 
	include_once 'header.php'; 
	include_once 'function.php';
	if(isset($_POST['submit']))
    {
              
        $addmember = addmember($_POST['role'], $_POST['fname'], $_POST['mname'], $_POST['lname'], 
		$_POST['dob'],$_POST['gender'], $_POST['street1'], $_POST['street2'], $_POST['city'], $_POST['state'],
		$_POST['zip'],$_POST['contact'],$_POST['email'], $_POST['bgroup'], $_POST['allergy'],$conn);
              
   
		if($addmember)
		{
			if($_POST['role'] == 1)
            {
                header("Location: registerteacher.php");
                
            }
            
             elseif($_POST['role'] == 2)
            {
                header("Location: registerstudent.php");
                
            }
            
             elseif($_POST['role'] == 3)
            {
                header("Location: registerstaff.php");
                
            }   
         
            else{
                
                $message = "error";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
                
            }}
		
		else
		{	
			$message = "Please try again!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
		}
		
	
	}
	
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
     <h3> Fill the following Details: </h3>
	    
      </div>
    </div>
<div>
    

<div class="container">
  <form class="form-horizontal" role="form" action ="registermember.php" method ="post" class="navbar-form navbar-right">
    
	<div class="form-group">
	<label class="control-label col-sm-2"> Role </label>
	<div id="input-type" class="controls col-sm-10" >
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="role1" value="1" name="role" >Teacher
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="role2" value="2" name="role" >Student
	</label>
	<label class="radio-inline">
	<input type="radio" checked ="" id ="role3" value="3" name="role" >Staff
	</label>
	
	</div>
	</div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="fname">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id = "fname" name="fname" placeholder="Enter first name">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="mname">Middle Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id = "mname" name="mname" placeholder="Enter middle name">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="lname">Last Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Date of Birth</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="dob" name="dob">
      </div>
    </div>
      
	<div class="form-group">
	<label class="control-label col-sm-2"> Gender </label>
	<div id="input-type" class="controls radio-group col-sm-10" >
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="male" value="M" name="gender" >Male
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="female" value="F" name="gender" >Female
	</label>
	
	</div>
	</div>
	
      <div class="form-group">
      <label class="control-label col-sm-2" for="street">Street 1</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="street1" name="street1" placeholder="Enter Street">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="street">Street 2</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="street2" name="street2" placeholder="Enter Street">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="city">City</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="state">State</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="state" name="state" placeholder="Enter State">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="zip">ZIP</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="zip" name="zip" placeholder="Enter zip">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="contact">Contact No.</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter contact number">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
    </div>
      
     <div class="form-group">
      <label class="control-label col-sm-2" for="bgroup">Blood Group</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bgroup" name="bgroup" placeholder="Enter blood group">
      </div>
    </div>
      
       <div class="form-group">
      <label class="control-label col-sm-2" for="allergy">Allergy</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="allergy" name="allergy" placeholder="Enter specific allergy if any">
      </div>
    </div>
  
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-md btn-success" id="submit" name = "submit" >Save</button>
        <button type="reset" class="btn btn-md btn-danger" id="reset" name = "reset" >Reset</button>

      </div>
    </div>

  </form>
</div>
</div> 
		
<footer class="container-fluid text-center">
 <a href="admin.php" >
    <span class="glyphicon glyphicon-home"></span>
</a>
<br>  <a href="logout.php" >
    <span class="glyphicon glyphicon-log-out"></span>
</a>
</footer>
   

   
