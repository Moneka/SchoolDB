<?php 
	ob_start(); 
    ini_set('session.save_path', 'tmp');
	session_start(); 
	include_once 'header.php'; 
	include_once 'function.php';
	if(isset($_POST['submit']))
    {
              
        $addinfo = addteacherinfo($_POST['dept'],  $_POST['notes'], $_POST['role'],$conn);
		
		$valid = validateDept($_POST['dept'],$conn);
		
		if($valid == false)
		{	
				$message = "Deptarment doesnot exist!";
				echo "<script type='text/javascript'>alert('$message');</script>";
         
        }
		
        else{
			if($addinfo)
			{
				$message = "Info added!";
				echo "<script type='text/javascript'>alert('$message');</script>";
			
			 
			}
			
			else
			{	
				$message = "Please try again!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
			}
		}
		
	
	}
	
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container text-center">
     <h3> Additional details for our new teacher! </h3>
	    
      </div>
        
    </div>
<div>
    

<div class="container">
  <form class="form-horizontal" role="form" action ="registerteacher.php" method ="post" class="navbar-form navbar-right">
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="dept">Department</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id = "dept" name="dept" placeholder="Enter teacher's department"  required>
      </div>
    </div>
      
    <div class="form-group">
	<label class="control-label col-sm-2"> New Dept Head </label>
	<div id="input-type" class="controls col-sm-10" >
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="yes" value="1" name="role" >Yes
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="no" value="2" name="role" >No
	</label>
</div>
	</div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="lname">Notes</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="notes" name="notes" placeholder="Any extra Notes">
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
   

   
