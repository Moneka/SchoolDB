<?php 
	ob_start(); 
    ini_set('session.save_path', 'tmp');

	session_start(); 
	include_once 'header.php'; 
	include_once 'headerlogin.php';
?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      </div>
    </div>
	
	
<div id = "course" class="container-fluid text-center">
  <h2>Course List</h2>
        
    <?php
    
    include_once 'function.php';

    $result = getCourse($_SESSION['gid'],$conn);
	
	if(mysqli_num_rows($result) == 0){
		echo "<h2>No Courses!!!</h2>";
	}
	else{
		while($row = mysqli_fetch_object($result)){
			$code[] = $row->courseCode;
			$type[] = $row->courseType;
			$name[] = $row->courseName;
			$dept[] = $row->courseDept;
			$room[] = $row->courseRoom;
			$teacher[] = $row->teacherId;
		}
		
		for($i=0; $i<count($code); $i++){
			echo"<div class='container'>
					<table class='table table-striped table-hover table-bordered table-condensed table-inverse'>
					<thead>
						<tr>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td><h4><b><font color = 'purple'>Code:   </font>".$code[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Type:   </font>".$type[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Name:   </font>".$name[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Department:   </font>".$dept[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Room:   </font>".$room[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Teacher:   </font>".$teacher[$i]."</h4></td>
							</tr>
						</tbody>
					</table>
						<a href='session_set_course.php?code=$code[$i]<button type='edit' class='btn btn-md btn-success' id='edit' name = 'edit'>Edit Course</button></a>
						<a href='session_set_course1.php?code=$code[$i]'<button type='delete' class='btn btn-md btn-success' id='delete' name = 'delete'>Delete Course</button></a>
						<hr>
				</div>";
		}
	}    
?>

<footer class="container-fluid text-center">

<br>  <a href="logout.php" >
    <span class="glyphicon glyphicon-log-out"></span>
</a>
</footer>