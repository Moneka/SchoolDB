<?php 
	ob_start(); 
	ini_set('session.save_path', 'tmp');
	session_start(); 
	include_once 'header.php';
	include_once 'function.php';

	if(isset($_POST['submit']))
    {
              
        $loginid = login($_POST['userid'],$_POST['password'],$conn);
              
            if($loginid == 1)
            {
             header('Location:admin.php');
                  
              }
              
              elseif($loginid == 2)
              {
                  header('Location:teacher.php');
                  
              }
                elseif($loginid == 3)
              {
                  header('Location:student.php');
                  
              }
                elseif($loginid == 4)
              {
                  header('Location:staff.php');
                  
              }
              
               elseif($loginid == 5)
               {
                   
                 echo"<br>
                 <br>
          <div class='alert alert-info alert-dismissable'>
          <a href='#' class= 'close' data-dismiss= 'alert' aria-label= 'close'>X</a>
          <strong><center>Incorrect Match!</strong>Please try again</center>
          </div> ";
                   
                }   
              
              elseif($loginid == 0 )
                  
              {
                 echo"<br>
                 <br>
          <div class='alert alert-info alert-dismissable'>
          <a href='#' class= 'close' data-dismiss= 'alert' aria-label= 'close'>X</a>
          <strong><center>User doesn't Exist</strong></center>
          </div> ";
                  
              }
			  
         
    }	
	
	
	if(isset($_POST['send']))
    {
        //echo "<meta http-equiv='refresh' content='0'>";
        $contactform = contact($_POST['name'],$_POST['email'],$_POST['comments'],$conn);
		
		if($contactform)
		{
			$message = "We have received your request";
			echo "<script type='text/javascript'>alert('$message');</script>";
        }
		
		else
		{	
			$message = "Please submit again!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
			
		}
		
	
	}

?>
	

<html>
       
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage">School NAME and LOGO</a>
        </div>
 
          
    <div  class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">About Us</a></li>
        <li><a href="#admissions">Admissions</a></li>
        <li><a href="#academics">Academics</a></li>
        <li><a href="#studentlife">Student Life</a></li>
        <li><a href="#directory">Directory</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
        </div>
        
        </nav>
        
		
      <!-- Main jumbotron -->
    <div class="jumbotron text-center">
        <h1>Welcome to Our School</h1>
        <p><i><b>"He who opens a school door closes a prison"</b></i></p> 
        
      <form method ="post" class="form-inline" role="form">
              
            <div class="form-group">
              <input type="text" placeholder="UserID" name= "userid" class="form-control" required>
            </div>
              
            <div class="form-group">
              <input type="password" placeholder="Password" name="password" class="form-control" required>
            </div>
              
            <button type="submit" class="btn btn-success" name = 'submit' >Sign in</button>
          </form>
        </div>
		
		
    <!--ABOUT-->
    <div id="about" class ="container-fluid text-center">

            <h1>Who are we ?</h1>
        
          <img class="=img-responsive center-block" src="img/school.jpg" width="1000" height="700" >
                <br>
        
        <br>
        <br>
                <h2> We are what you want us to be! </h2>
            </div>

    
 <!--Admissions-->
    <div id="admissions" class ="container-fluid text-center">
    
    <h1> Wanna Join Us ??</h1>
        <br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="=img-responsive center-block" src="img/Kid.jpg" alt="Kid1" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Our kids immersing themselves in paints ! :)</h3>
          
        </div>
      </div>

      <div class="item">
        <img class="=img-responsive center-block" src="http://beautifulhdwallpaper.com/wp-content/uploads/2014/09/Cute-kid-listen-song-HD-wallpaper.jpg" alt="Kid2" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Music is one of our theraphy !! ;)</h3>
        
        </div>
      </div>
    
      <div class="item">
        <img  class="=img-responsive center-block" src="http://hdwallpapersrocks.com/wp-content/uploads/2013/09/Cute-kids-sunset-wallpaper.jpg" alt="Kid3" width="1200" height="700">
        <div class="carousel-caption">
          <h2> Outdoor's are where we spend the most !! </h2>
         
        </div>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
        <br>
        
        <br>
        <br>
        
        <h2>     Fill out the contact form and we will get back to you! :)           </h2>
        
<!--
        <a href="admissions.php" class="btn btn-info btn-lg">    
                    <span class="glyphicon glyphicon-heart"></span> Know how to!!</a>
-->
    </div>
    
     <!--Academics-->
    
    <div id="academics" class ="container-fluid text-center">

            <h1>What do we Teach ?</h1>
        
        <br>
        <br>
        
        <h2>   Life!     </h2>
<!--
          
                <a href="academics.php" class="btn btn-info btn-lg">    
                    <span class="glyphicon glyphicon-heart"></span> Want to Know More!</a>
            </div>
-->

    <!--Student Life-->
    <div id="studentlife" class ="container-fluid text-center">

            <h1>Why are our students happy ?</h1>
        
<!--
                <a href="studentlife.php" class="btn btn-info btn-lg">    
                <span class="glyphicon glyphicon-heart"></span> Want to Know More!</a>
            
-->
        
        <br>
        <br>
        <h2>  Simple! It would be their second home! :)  </h2>
        
    </div>
    <!--Directory-->

<div id="directory" class ="container-fluid text-center">

            <h1>Wanna know how we look?</h1>
    
                <a href="directory.php" class="btn btn-info btn-lg">    
                    <span class="glyphicon glyphicon-heart"></span> Want to Know More!</a>
            </div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">

    <form class="form-horizontal" role="form" action ="index.php" method ="post">

  <h2 class="text-center">Contact</h2>
  <p class="text-center"><em>We will get back to you!</em></p>

  <div class="row">
    <div class="col-md-4">
      
      <p><span class="glyphicon glyphicon-map-marker"></span>Hyderabad, India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 123456789</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: schoolmail@mail.com</p>
    </div>
      
    <div class="col-md-8 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
         
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" name='send'>Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
</form>   
  </div>

<!-- Add Google Maps -->


<div id="googleMap" style="height:400px;width:100%;"></div>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(17.3850, 78.4867);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

    
   <footer class="container-fluid text-center">
  <a href="#myPage" title= "To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
</a>
<p> Designed by Moneka Bommasani  </p>
</footer>
    
 <script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
		
</body>

</html>
