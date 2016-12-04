<?php 
	ob_start();
    ini_set('session.save_path', 'tmp');
	session_start(); 
	include_once 'header.php'; 
	include_once 'function.php';
	if(isset($_POST['submit']))
    {
		
		
		
		
        $check = addCourse($_POST['coursetype'], $_POST['cname'], $_POST['dept'], $_POST['room'], $_POST['teacher'], $_SESSION['gid'],$conn);
		
		if($check){
			$message = "Course added!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		else{
			$message = "Error!!";
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
  <form class="form-horizontal" role="form" action ="addnewcourse.php" method ="post" class="navbar-form navbar-right">
    
	
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="cname">Course Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter Course name">
      </div>
    </div>
      
     <div class="form-group">
	<label class="control-label col-sm-2"> Course Type </label>
	<div id="input-type" class="controls col-sm-10" >
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="coursetype1" value="1" name="coursetype" >Mandatory
    </label>
	<label class="radio-inline">
	<input type="radio"  checked ="" id ="coursetype2" value="2" name="coursetype" >Elective
	</label>
	
	</div>
	</div>
        
	
      <div class="form-group">
      <label class="control-label col-sm-2" for="room">Location</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="room" name="room" placeholder="Enter Location">
      </div>
    </div>
      
    
    <?php
		
		$dept = getDept($conn);
		
		while($row = mysqli_fetch_object($dept)){
			$deptName[] = $row->deptName;
		}
		
		echo"<div class='form-group'>
				<label class='control-label col-sm-2'> Department </label>
			<div id='input-type' class='controls radio-group col-sm-10' >";
		
		for ($i=0; $i<count($deptName); $i++){
			echo"<label class='radio-inline'>
					<input type='radio' checked ='' name='dept' value= '$deptName[$i]'>$deptName[$i]</label>";	
		}
		
		echo"</div></div>";
		
		$teacher = getTeacher($conn);
	
		while($row = mysqli_fetch_object($teacher)){
			$id[] = $row->personId;
			$firstName[] = $row->firstName;
			$middleName[] = $row->middleName;
			$lastName[] = $row->lastName;
		}
		
		echo"<div class='form-group'>
				<label class='control-label col-sm-2'> Teacher </label>
			<div id='input-type' class='controls radio-group col-sm-10' >";
		
		for ($i=0; $i<count($firstName); $i++){
			echo"<label class='radio-inline'>
					<input type='radio' checked ='' name='teacher' value= '$id[$i]'>$firstName[$i] $middleName[$i] $lastName[$i]</label>";
		}
		echo"</div></div>";
?>
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