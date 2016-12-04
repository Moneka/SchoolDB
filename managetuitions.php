<?php 
	ob_start(); 
    ini_set('session.save_path', 'tmp');
	session_start(); 
	include_once 'header.php'; 
	include_once 'function.php';
	if(isset($_POST['submit']))
    {
              
        $changefee = changefee($_POST['percourse'], $_POST['amountinc'],$conn);
              
		if($changefee)
		{
			$message = "Fees has been updated";
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
        $changeclubfee = changeclubfee($_POST['perclub'],$conn);
		
		if($changeclubfee)
		{
			$message = "Club Fees has been updated";
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
     <h3>Modify the Tuition Fees for Courses or Clubs</h3>
      </div>
    </div>

<div class ="row" >

<div class="container text-center col-sm-6">
<h3>Courses</h3>
      
  <form class="form-horizontal" role="form" action ="managetuitions.php" method ="post" class="navbar-form navbar-right">
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="percourse">First Grade </label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id = "percourse" name="percourse" placeholder="Amount Per Course" required>
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="amountinc">Amount Incremented</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id = "amountinc" name="amountinc" placeholder="Per Grade" required>
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
<h3>Clubs</h3>
  <form class="form-horizontal" role="form" action ="managetuitions.php" method ="post" class="navbar-form navbar-right">

 <div class="form-group">
      <label class="control-label col-sm-2" for="perclub">Per Club</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="perclub" name="perclub" placeholder="Amount per Club" required>
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
   