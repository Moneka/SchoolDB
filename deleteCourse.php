<?php 
	ob_start(); 
    ini_set('session.save_path', 'tmp');

	session_start(); 
	include_once 'header.php'; 
	include_once 'headerlogin.php';
	include_once 'function.php';
	
	$check = deleteCourse($_SESSION['cid'],$conn);
	
	if($check){
			echo "If";
			$message = "Course Deleted!!";
			echo "<script type='text/javascript'>alert('$message');</script>"
			header ("Location: viwecourse.php");
		}
		
		else{
			echo "Else";
			$message = "Error!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
?>

<footer class="container-fluid text-center">
 
<br>  <a href="logout.php" >
    <span class="glyphicon glyphicon-log-out"></span>
</a>
</footer>