<?php 
ob_start(); 
ini_set('session.save_path', 'tmp');
session_start(); 
include_once 'header.php'; 
   
?>
<html>
<style>

    .hovereffect {
/*
  width: 100%;
  height: 100%;
*/
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
/*
  background: -webkit-linear-gradient(45deg, #ff89e9 0%, #05abe0 100%);
  background: linear-gradient(45deg, #ff89e9 0%,#05abe0 100%);
*/
}

.hovereffect .overlay {
/*
  width: 100%;
  height: 100%;
*/
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 3em;
  text-align: left;
}

.hovereffect img {
  display: block;
  position: relative;

  height: 200px;
  width: 200px;

/*  width: calc(100% + 60px);*/
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-40px,0,0);
  transform: translate3d(-40px,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  padding: 15% 0 10px 0;
  text-align: left;
}

.hovereffect .overlay:before {
  position: absolute;
  top: 20px;
  right: 20px;
  bottom: 20px;
  left: 20px;
  border: 1px solid #fff;
  content: '';
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-20px,0,0);
  transform: translate3d(-20px,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
}

.hovereffect:hover img {
  opacity: 0.6;
  filter: alpha(opacity=60);
  
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect:hover .overlay:before,
.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}


</style>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
     <h3></h3>
      </div>
    </div>

<div class="container">
      

  <div class="row">
           
 <div class="col-md-4">
    <div class="hovereffect">
        <img class="img-responsive" src="img/kid5.jpg" alt="grade1">
            <div class="overlay">
                <h2>Grade 1</h2>
				<p> 
					<a href="#">Apply!!</a>
				</p> 
            </div>
    </div>
</div>
    
    <div class="col-md-4">
    <div class="hovereffect">
        <img class="img-responsive" src="img/grade2.jpg" alt="grade2" >
            <div class="overlay">
                <h2>Grade 2</h2>
				<p> 
					<a href="#">Apply!!</a>
				</p> 
            </div>
    </div>
</div>
        <div class="col-md-4">
    <div class="hovereffect">
        <img class="img-responsive" src="img/grade3.jpg" alt="grade3" >
            <div class="overlay">
                <h2>Grade 3</h2>
				<p> 
					<a href="#">Apply!!</a>
				</p> 
            </div>
    </div>
</div>
        <div class="col-md-4">
    <div class="hovereffect">
        <img class="img-responsive" src="img/grade4.jpg" alt="grade4" >
            <div class="overlay">
                <h2>Grade 4</h2>
				<p> 
					<a href="#">Apply!!</a>
				</p> 
            </div>
    </div>
</div>
   
    <div class="ccol-md-4">
    <div class="hovereffect">
        <img class="img-responsive" src="img/grade5.jpg" alt="grade5" >
            <div class="overlay">
                <h2>Grade 5</h2>
				<p> 
					<a href="#">Apply!!</a>
				</p> 
            </div>
    </div>
</div>
    
    <div class="col-md-4">
    <div class="hovereffect">
        <img class="img-responsive" src="img/grade6.jpg" alt="grade6" >
            <div class="overlay">
                <h2>Grade 6</h2>
				<p> 
					<a href="#">Apply!!</a>
				</p> 
            </div>
    </div>
</div>
   
    <div class="col-md-4">
    <div class="hovereffect">
        <img class="img-responsive" src="img/grade7.jpg" alt="grade7" >
            <div class="overlay">
                <h2>Grade 7</h2>
				<p> 
					<a href="#">Apply!!</a>
				</p> 
            </div>
    </div>
</div>
    
    <div class="col-md-4">
    <div class="hovereffect">
        <img class="img-responsive" src="img/grade8.jpg" alt="grade8" >
            <div class="overlay">
                <h2>Grade 8</h2>
				<p> 
					<a href="#">Apply!!</a>
				</p> 
            </div>
    </div>
</div>
   
    
    <div class="col-md-4">
    <div class="hovereffect">
        <img class="img-responsive" src="img/grade9.jpg" alt="grade9" >
            <div class="overlay">
                <h2>Grade 9</h2>
				<p> 
					<a href="#">Apply!!</a>
				</p> 
            </div>
    </div>
</div>
    
    <div class="col-md-4">
    <div class="hovereffect">
        <img class="img-responsive" src="img/grade10.jpg" alt="grade10" >
            <div class="overlay">
                <h2>Grade 10</h2>
				<p> 
					<a href="#">Apply!!</a>
				</p> 
            </div>
    </div>
</div>
    
    
    
    
      </div>
    </div>
    
    
    
</html>

 