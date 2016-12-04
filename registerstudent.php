<?php 
	ob_start(); 
    ini_set('session.save_path', 'tmp');
	session_start(); 
	include_once 'header.php'; 
	include_once 'function.php';
	if(isset($_POST['submit']))
    {
              
        $addinfo = addstudentinfo($_POST['mom'], $_POST['dad'], $_POST['class'], $_POST['notes'],$conn);
              
   
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
	
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container text-center">
     <h3> Additional details for our new student! </h3>
	    
      </div>
        
    </div>
<div>
    

<div class="container">
  <form class="form-horizontal" role="form" action ="registerstudent.php" method ="post" class="navbar-form navbar-right">
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="mom">Mother </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id = "mom" name="mom" placeholder="Mother's name">
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="dad">Father</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dad" name="dad" placeholder="Father's name">
      </div>
    </div>
      
    <div class="form-group">
	<label class="control-label col-sm-2"> Class </label>
	<div id="input-type" class="controls col-sm-10" >
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="class1" value="1" name="class" >1
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="class2" value="2" name="class" >2
	</label>
    <label class="radio-inline">
	<input type="radio"  checked ="" id ="class3" value="3" name="class" >3
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="class4" value="4" name="class" >4
	</label>
<label class="radio-inline">
	<input type="radio"  checked ="" id ="class5" value="5" name="class" >5
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="class6" value="6" name="class" >6
	</label>
<label class="radio-inline">
	<input type="radio"  checked ="" id ="class7" value="7" name="class" >7
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="class8" value="8" name="class" >8
	</label>
    <label class="radio-inline">
	<input type="radio"  checked ="" id ="class9" value="9" name="class" >9
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="class10" value="10" name="class" >10
	</label>
    <label class="radio-inline">
	<input type="radio"  checked ="" id ="class12" value="11" name="class" >11
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="class13" value="12" name="class" >12
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
   

   
