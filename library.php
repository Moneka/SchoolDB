<?php 
ob_start(); 
ini_set('session.save_path', 'tmp');
session_start(); 
include_once 'header.php'; 
   
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container text-center">
     <h1>E-Books available!</h1>
      </div>
    </div>

<div class="container">
      
    <h2>    Click the image to download!   </h2>
    <div class = "row">
        
       <div class="col-sm-4">
    
        <h3>   Literature - Grade 6</h3>
    <a href="/img/tb1.jpg" download>
    <img border="0" 
    src="/img/tb1.jpg" alt="tb" width="104" height="142">
    </a>
        </div>
     <div class="col-sm-4">
  <h3>  Chemistry - Grade 8</h3>
    <a href="/img/tb2.jpg" download>
    <img border="0" 
    src="/img/tb2.jpg" alt="tb" width="104" height="142">
    </a>
        </div>
           <div class="col-sm-4">
  <h3>  English - Grade 11 </h3>
    <a href="/img/tb3.jpg" download>
    <img border="0" 
    src="/img/tb3.jpg" alt="tb" width="104" height="142">
    </a>
        </div>
                      <div class="col-sm-4">
  <h3> Science - Grade 9</h3>
    <a href="/img/tb4.jpg" download>
    <img border="0" 
    src="/img/tb4.jpg" alt="tb" width="104" height="142">
    </a>
        </div>
    <p><b>Note:</b> The download attribute is not supported in Edge version 12, IE, Safari or Opera version 12 (and earlier).</p>
     </div> 
    
</div>
    
   <footer class="container-fluid text-center">

<br>  <a href="logout.php" >
    <span class="glyphicon glyphicon-log-out"></span>
</a>
</footer>
   