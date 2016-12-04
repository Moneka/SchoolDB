<?php 
ob_start(); 
ini_set('session.save_path', 'tmp');

session_start(); 
include_once 'header.php'; 
   
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
     <h3>Notice Board</h3>
      </div>
    </div>

<div class="container">
      
    
    
 <h2>   Quote to Note: </h2>
    
   <h4> "Don’t be intimidated by what you don’t know. That can be your greatest strength and ensure that you do things differently from everyone else" - Sara Blakely </h4>
    
    

    
     </div> 
    
   <footer class="container-fluid text-center">

<br>  <a href="logout.php" >
    <span class="glyphicon glyphicon-log-out"></span>
</a>
</footer>
   