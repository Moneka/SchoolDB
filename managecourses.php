<?php 
ob_start(); 
ini_set('session.save_path', 'tmp');
session_start(); 
include_once 'header.php'; 
      

?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container text-center">
     <h3> Select a Grade!</h3>
      </div>
    </div>

<div class="container">
    
    

  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Grade 1</strong></p><br>
    <a href="#class1" data-toggle="collapse">
        <img src="img/grade1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
    
    <div id="class1" class="collapse">
 
        <br>
        <br>
    <p class="text-center">
            <a href="session_set_grade.php?gid=1"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=1">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
       

    </div>
      </div>

    <div class="col-sm-4">
      <p class="text-center"><strong>Grade 2</strong></p><br>
      <a href="#class2" data-toggle="collapse">
        <img src="img/grade2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
       
        <div id="class2" class="collapse">
          <br>
          <br>
      
             <p class="text-center">
            <a href="session_set_grade.php?gid=2"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=2">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
        </div>
    
    </div>
    
    
      <div class="col-sm-4">
      <p class="text-center"><strong>Grade 3</strong></p><br>
    <a href="#class3" data-toggle="collapse">
        <img src="img/grade3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
   
    <div id="class3" class="collapse">

          <br>
          <br>
          <p class="text-center">
            <a href="session_set_grade.php?gid=3"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=3">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
       
    </div>
      </div>
     
       
      <div class="col-sm-4">
      <p class="text-center"><strong>Grade 4</strong></p><br>
    <a href="#class4" data-toggle="collapse">
        <img src="img/grade4.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
  
    <div id="class4" class="collapse">
          <br>
          <br>
          <p class="text-center">
            <a href="session_set_grade.php?gid=4"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=4">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
       
    </div>

      </div>
      
         <div class="col-sm-4">
      <p class="text-center"><strong>Grade 5</strong></p><br>
    <a href="#class5" data-toggle="collapse">
        <img src="img/grade5.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
 
    <div id="class5" class="collapse">
          <br>
          <br>
          <p class="text-center">
            <a href="session_set_grade.php?gid=5"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=5">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
       
    </div>
      </div>
    
       <div class="col-sm-4">
      <p class="text-center"><strong>Grade 6</strong></p><br>
    <a href="#class6" data-toggle="collapse">
        <img src="img/grade6.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>

    <div id="class6" class="collapse">
          <br>
          <br>
         <p class="text-center">
            <a href="session_set_grade.php?gid=6"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=6">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
        </div>
    </div>
    
    
     <div class="col-sm-4">
      <p class="text-center"><strong>Grade 7</strong></p><br>
    <a href="#class7" data-toggle="collapse">
        <img src="img/grade7.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
   
    <div id="class7" class="collapse">
          <br>
          <br>
          <p class="text-center">
            <a href="session_set_grade.php?gid=7"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=7">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
        </div>
    </div>
    
     <div class="col-sm-4">
      <p class="text-center"><strong>Grade 8</strong></p><br>
    <a href="#class8" data-toggle="collapse">
        <img src="img/grade8.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
   
    <div id="class8" class="collapse">
          <br>
          <br>
        <p class="text-center">
            <a href="session_set_grade.php?gid=8"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=8">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
       
    </div>
    
      </div>
     <div class="col-sm-4">
      <p class="text-center"><strong>Grade 9</strong></p><br>
    <a href="#class9" data-toggle="collapse">
        <img src="img/grade9.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
    
    <div id="class9" class="collapse">
          <br>
          <br>
          <p class="text-center">
            <a href="session_set_grade.php?gid=9"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=9">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
       
    </div>
      </div>
    
    
     <div class="col-sm-4">
      <p class="text-center"><strong>Grade 10</strong></p><br>
    <a href="#class10" data-toggle="collapse">
        <img src="img/grade10.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
  
    <div id="class10" class="collapse">
          <br>
          <br>
         <p class="text-center">
            <a href="session_set_grade.php?gid=10"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=10">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
       
    </div>
      </div>
    
       <div class="col-sm-4">
      <p class="text-center"><strong>Grade 11</strong></p><br>
    <a href="#class11" data-toggle="collapse">
        <img src="img/grade11.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
    
    <div id="class11" class="collapse">
          <br>
          <br>
         <p class="text-center">
            <a href="session_set_grade.php?gid=11"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=11">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
       </div>
    </div>
      
       <div class="col-sm-4">
      <p class="text-center"><strong>Grade 12</strong></p><br>
    <a href="#class12" data-toggle="collapse">
        <img src="img/grade12.png" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
   
    <div id="class12" class="collapse">
          <br>
          <br>
          <p class="text-center">
            <a href="session_set_grade.php?gid=12"><button type="view" class="btn btn-md btn-success" id="view" name = "view" >View the Courses!</button></a>
                 <a href="session_set_grade1.php?gid=12">  <button type="add" class="btn btn-md btn-danger" id="add" name = "add" >Add new Course!</button></a></p>
       
    </div>
      </div>
    
    
    
    
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
   
   