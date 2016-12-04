<?php 
	ob_start(); 
    ini_set('session.save_path', 'tmp');
	session_start(); 
	include_once 'header.php'; 
	include_once 'function.php';
	if(isset($_POST['submit']))
    {
              
        $changesalary = changesalary($_POST['deptsalary'], $_POST['teachersalary'],$conn);
              
		if($changesalary)
		{
			$message = "Salary has been updated";
			echo "<script type='text/javascript'>alert('$message');</script>";
        }
		
		else
		{	
			$message = "Please try again!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
		}
		
	
	}
	
	
	if(isset($_POST['save']))
    {
        $changestaffsalary = changestaffsalary($_POST['partstaff'], $_POST['fullstaff'],$conn);
		
		if($changestaffsalary)
		{
			$message = "Staff Salary has been updated";
			echo "<script type='text/javascript'>alert('$message');</script>";
        }
		
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
     <h3>Modify the Salaries for Employees</h3>
      </div>
    </div>

<div class ="row">

<div class="container text-center col-sm-6">
<h3>Teachers</h3>
      
  <form class="form-horizontal" role="form" action ="managesalaries.php" method ="post" class="navbar-form navbar-right">
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="deptsalary">Department Head</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id = "deptsalary" name="deptsalary" placeholder="Salary for Department Head" required>
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="teachersalary">Teacher</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id = "teachersalary" name="teachersalary" placeholder="Salary for Teacher" required>
      </div>
    </div>
       
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-success" id="submit" name = "submit" >Save</button>
      </div>
    </div>

  </form>
</div>
 

<div class="container text-center col-sm-6">
<h3>Staff</h3>
  <form class="form-horizontal" role="form" action ="managesalaries.php" method ="post" class="navbar-form navbar-right">

 <div class="form-group">
      <label class="control-label col-sm-2" for="partstaff"> Part Time Staff </label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="partstaff" name="partstaff" placeholder="Part Time Employee Salary" required>
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="fullstaff"> Full Time Staff </label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="fullstaff" name="fullstaff" placeholder="Full Time Employee Salary" required>
      </div>
    </div>
      
 
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-success" id="submit" name = "save" >Save</button>
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
   