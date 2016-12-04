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
        <h1>Hello Respected Teacher!</h1>
        <p>Hope you are not having much trouble with the kids!! ;) </p>
        
      </div>
    </div>
	
	
<div id = "profile" class="container-fluid text-center">
  <h2>My Profile</h2>
        
    <?php
    
    	include_once 'function.php';

    $user_details = profile($_SESSION['pid'],$conn);
    
    echo"<form method = 'post'>
    <div class='container'>
   <table class='table table-striped table-hover table-bordered table-condensed table-inverse'>
    <thead>
    <tr>
    </tr>
    </thead>
    <tbody>
    <tr>
<td><h4><b><font color = 'purple'>First Name    :   </font>".$user_details[2]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Middle Name   :   </font>".$user_details[3]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Last Name     :   </font>".$user_details[4]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Date of Birth     :   </font>".$user_details[5]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Gender        :   </font>".$user_details[6]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Street        :   </font>".$user_details[7]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Street2       :   </font>".$user_details[8]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>City      :   </font>".$user_details[9]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>State     :   </font>".$user_details[10]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Zip       :   </font>".$user_details[11]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Phone     :   </font>".$user_details[12]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Email     :    </font>".$user_details[13]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Blood Group       :    </font>".$user_details[14]."</h4></td>
</tr>
<td><h4><b><font color = 'purple'>Any Allergy       :   </font>".$user_details[15]."</h4></td></b>
</tr>
</tbody>
</table>
                                    
<input type = 'submit' value = 'Edit Profile' name = 'edit' class = 'btn btn-lg btn-danger'>
						
					</div>
</form>";

    
    
if(isset($_POST['edit'])){
	
    header("Location: editProfile.php");
	
}
    
    ?>
    
<div id = "tasks" class="container-fluid text-center">
  <h2>TASKS</h2>
  
  <br>
  <div class="row">
      

       <div class="col-sm-4">
      <h4><a href="teachercourses.php"> My Courses </a></h4>
    </div>
       
<div id = "directory" class="container-fluid text-center">
  <h2>Directory</h2>
    
                <a href="directory.php" class="btn btn-info btn-lg">    
                    <span class="glyphicon glyphicon-heart"></span> Our Crew!</a>
    
</div>

<div id = "library" class="container-fluid text-center">
  <h2>Library</h2>
        
    <a href="library.php" class="btn btn-info btn-lg">    
                    <span class="glyphicon glyphicon-heart"></span> Dig more!</a>
    
</div>


<div id = "noticeboard" class="container-fluid text-center">
  <h2>Notice Board</h2>
        	
    <a href="notice.php" class="btn btn-info btn-lg">    
                    <span class="glyphicon glyphicon-heart"></span>  What's Happening?!</a>
    
</div>

       <footer class="container-fluid text-center">
  <a href="profile" title= "To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
</a>

</footer>
    