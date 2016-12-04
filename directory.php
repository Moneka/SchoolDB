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
	
	
<div id = "directory" class="container-fluid text-center">
  <h2>Directory</h2>
        
    <?php
    
    include_once 'function.php';

    $result = directory($conn);
	
	if(mysqli_num_rows($result) == 0){
		echo "<h2>No One is Added yet!!!</h2>";
	}
	else{
		while($row = mysqli_fetch_object($result)){
			$role[] = $row->role;
			$fname[] = $row->firstName;
			$lname[] = $row->lastName;
			$phone[] = $row->phno;
			$mail[] = $row->email;
		}
		
		for($i=0; $i<count($role); $i++){
			if($role[$i] == 0){
				echo"<div class='container'>
					<h2>Admin</h2>
					<table class='table table-striped table-hover table-bordered table-condensed table-inverse'>
					<thead>
						<tr>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td><h4><b><font color = 'purple'>Name:   </font>".$fname[$i]." ".$lname[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Phone:   </font>".$phone[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Mail:   </font>".$mail[$i]."</h4></td>
							</tr>
						</tbody>
					</table>
						<hr>
				</div>";
			}
			
			elseif($role[$i] == 1){
				echo"<div class='container'>
					<h2>Teacher</h2>
					<table class='table table-striped table-hover table-bordered table-condensed table-inverse'>
					<thead>
						<tr>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td><h4><b><font color = 'purple'>Name:   </font>".$fname[$i]." ".$lname[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Phone:   </font>".$phone[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Mail:   </font>".$mail[$i]."</h4></td>
							</tr>
						</tbody>
					</table>
						<hr>
				</div>";
			}
			
			elseif($role[$i] == 2){
				echo"<div class='container'>
					<h2>Student</h2>
					<table class='table table-striped table-hover table-bordered table-condensed table-inverse'>
					<thead>
						<tr>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td><h4><b><font color = 'purple'>Name:   </font>".$fname[$i]." ".$lname[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Phone:   </font>".$phone[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Mail:   </font>".$mail[$i]."</h4></td>
							</tr>
						</tbody>
					</table>
						<hr>
				</div>";
			}
			
			elseif($role[$i] == 3){
				echo"<div class='container'>
					<h2>Staff</h2>
					<table class='table table-striped table-hover table-bordered table-condensed table-inverse'>
					<thead>
						<tr>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td><h4><b><font color = 'purple'>Name:   </font>".$fname[$i]." ".$lname[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Phone:   </font>".$phone[$i]."</h4></td>
							</tr>
							<tr>
								<td><h4><b><font color = 'purple'>Mail:   </font>".$mail[$i]."</h4></td>
							</tr>
						</tbody>
					</table>
						<hr>
				</div>";
			}
			
		}
	}    
?>

<footer class="container-fluid text-center">
 
<br>  <a href="logout.php" >
    <span class="glyphicon glyphicon-log-out"></span>
</a>
</footer>