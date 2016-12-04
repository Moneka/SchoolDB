<?php 
	ob_start();
    ini_set('session.save_path', 'tmp');
	session_start(); 
	include_once 'header.php'; 
	include_once 'function.php';
	if(isset($_POST['submit']))
    {
              
        $addinfo = addstaffinfo($_POST['job'], $_POST['jtype'], $_POST['notes'],$conn);
              
   
		if($addinfo)
		{
			$message = "Info Added!";
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
      <div class="container text-center">
     <h3> Additional details for our new Staff! </h3>
	    
      </div>
        
    </div>
<div>
    

<div class="container">
  <form class="form-horizontal" role="form" action ="registerstaff.php" method ="post" class="navbar-form navbar-right">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="job"> Job Description </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="job" name="job" placeholder="Main Tasks">
      </div>
    </div>
      
    <div class="form-group">
	<label class="control-label col-sm-2"> Job Type </label>
	<div id="input-type" class="controls col-sm-10" >
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="part" value="1" name="jtype" >Part-Time
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="full" value="2" name="jtype" >Full-Time
	</label>
    
</div>
	</div>
      
        <div class="form-group">
      <label class="control-label col-sm-2" for="notes">Notes</label>
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
   

   
