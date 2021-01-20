<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_ioo/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
    <title> Code@Random</title>
</head>
<body>

<!--Login Modal-->
<?php include 'includes/login.php';?>
<!--SignUp Modal-->
<?php include 'includes/signup.php';?>
<!--First Modal-->
<?php include 'includes/firstmodal.php';?>
<!--Navbar-->
<?php include 'includes/header.php';?>

<!--Jumbotron-->
<header class="jumbotron">
  <div class="container">
    <div class="overlay">
      <div class="row row-header align-text-center">
        <div class="col-12">
              <img src="images/Watermark1.png" height="700" width="500" class="order-sm-first img-fluid col-12 col-md-6 offset-md-1" style="margin-top: 150px;">
              <img src="images/jumbotron1.jpg" class="img-fluid col-12 col-md-4 d-sm-none d-md-inline ml-auto order-sm-last offset-md-1" style="height:200px; margin-top: 100px;">
        </div>
        </div>
        <!--<div class="row" style="margin-top:0px;">
         <div class="startlearningbutton col-12 mt-0" style="margin-bottom: 20px;">
          <a href="allcourses.php" role="button" style="color: black;" class="startbutton btn btn-block nav-link btn-success col-12 col-md-5 offset-lg-5 offset-sm-4">Start Learning</a>
         </div>-->
      </div>
    </div>
</div> 
</header>


<!--Card Deck-->
<div class="w-100"></div>
  <div class="container"> 
   <div class="row row_content align-text-center">
    <div class="card-deck">
      <div class="card text-white bg-success mb-3 ml-3 mr-5" style="max-width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/164x175/?books,leaders" height="175">
        <div class="card-body">
          <h5 class="card-title">Leaders are Readers!!</h5>
          <p class="card-text">Grab a copy of Fiction, Non-Fiction and Personality Development based Novels at the lowest Price.</p>
          <a href="#" class="btn btn-primary ml-5">Try Now</a>
        </div>
      </div>
      <div class="card text-white bg-danger mb-3 ml-3 mr-5" style="max-width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/164x175/?coding,computer" height="175">
        <div class="card-body">
          <h5 class="card-title">Java Course For Beginners<br>[No Experience Rqd]</h5>
    
          <p class="card-text">Learn JAVA at just ₹ 749* 
          <br>
          Limited Seats for next batch.</p>
          <a href="#" class="btn btn-primary ml-5">Explore</a>
        </div>
      </div>
      <div class="card text-white bg-warning mb-3 ml-3 mr-5" style="max-width: 20rem;">
        <img class="card-img-top" src="images/img7.jpg" height="175">
       <div class="card-body">
        <h5 class="card-title">Special Board Lessons Available For Java</h5>
        <p class="card-text">Interact with qualified and experienced teachers in live classes </p>
        <a href="#" class="btn btn-primary ml-5">Start Learning</a>
       </div>
      </div>
    </div>
    </div>
  </div>
  <!--Carousel-->
  <div class="container">
    <div class="row row-content">
      <div class="col">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <div class="hvrbox">
	          <img src="https://source.unsplash.com/1900x360/?coding,java,programming,class" alt="Mountains" class="hvrbox-layer_bottom">
	           <div class="hvrbox-layer_top">
		        <div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor ligula porttitor, lacinia sapien non.</div>
	          </div>
           </div>
            </div>
            <div class="carousel-item">
            <img class="d-block img-fluid" src="https://source.unsplash.com/1700x360/?technology,computer,learning,student,class,school" alt="Second slide">
            </div>
            <div class="carousel-item">
             <img class="d-block img-fluid " src="https://source.unsplash.com/1700x360/?online,e-learning,books,fiction-books,student,teacher" alt="Third slide">
            </div>
            <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1"></li>
            <li data-target="#mycarousel" data-slide-to="2"></li>
            </ol>
             <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
         </div>
       </div>
     </div>
   </div>
</div>
  <!--Footer Section-->
  <div id="footer" class="generic_footer" style="margin-bottom: 5px;">
    <div class="container-fluid">
        <div class="max-width-container">             
            <div class="footer_container">
              <div class="row ">
                 <div class="col-sm-6 offset-md-1">
                   <div class="footer-list footer-column ">
                    <h5> About Us:- </h5>
                      <p class="mb-0">“I never teach my pupils; I only attempt to provide the conditions in 
                        which they can learn”</p>
                      <footer class="blockquote-footer" style="color: white; float: right;">Albert Einstein
                      </footer>
                       <br>
                    <p style=>Education is all about self-awakening. We learn to augment our perspectives, not only 
                    academically, but also to teach ourselves how to live. Importance of school learning and 
                    the fundamental educational values our students draw from their early ages can never be 
                    undermined, as this goes with them for through their life. <br>  <em><a href="aboutus.php" style="color: gray;">  Read More... </a></em></p>
               </div>
              </div>
            <div class="col-sm-4 offset-1 d-none d-lg-block mr-auto">
                <div class="footer-list footer-column" style="float: right; margin-right: 200px;">
                  <h5>Links</h5>
                    <div class="footer-list-item">
                      <a class="link" href="#">Our vision & Mission</a>
                    </div>
                    <div class="footer-list-item">
                       <a class="link" id="Loginlink" href="#">Register/Login</a>
                    </div>
                    <div class="footer-list-item">
                       <a class="link" href="#">Courses</a>
                    </div>
                    <div class="footer-list-item">
                        <a class="link" href="#">Pricing</a>
                    </div>
                    <div class="footer-list-item">
                      <a class="link" href="#">Contact Us</a>
                  </div>
                    <div class="footer-list-item">
                      <a class="link" href="termsandconditions.php">Terms</a>
                    </div>
                    <div class="footer-list-item">
                    <a class="link" href="#">Privacy</a>
                    </div>
                    <div class="footer-list-item">
                    <a class="link" href="#">Feedback</a>
                    </div>
                </div>
          </div>
        </div>
        </div>
        <hr color="grey">
           <div class="footer-bottom">
            <div id="social-media-container" style="margin-left: 0px;" class="d-none d-lg-block ml-auto">
                  <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/codeatrandom"><i class="fa fa-facebook"></i></a>
                  <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/codeatrandom/"><i class="fa fa-instagram"></i></a>
                  <a class="btn btn-social-icon btn-google" href="https://www.youtube.com/channel/UCFykORvcikeYASRLNARaj4g"><i class="fa fa-youtube"></i></a>
                  <div class='' id='copyright' style="margin-right: 0px; color: white;">
                    <strong>&copy; Copyright 2020 CODE AT RANDOM</strong>
                  </div>
            </div>
                  <div class="clear">


                  </div>        
                </div>
            </div>
       </div>
    </div>
  </div>
</footer>
 <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
 <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
 <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
 <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
 <script src="/path/to/js.cookie.js"></script>

 <script>
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbarcr").style.top = "0";
    } else {
      document.getElementById("navbarcr").style.top = "-50px";
    }
    prevScrollpos = currentScrollPos;
  }
  $('#loginButton').click(function () 
  {
  $('#loginModal').modal('show')
  }
  );

  $('#RegisterButton').click(function ()
  {
    $('#register_Modal').modal('show')
  }
  );
  
  $('#register-link').click(function ()
  {
    $('#loginModal').modal('hide')
    $('#register_Modal').modal('show')
  }
  );
  $('#Loginlink').click(function () 
  {
  $('#loginModal').modal('show')
  }
  );
  $(document).ready(function(){
        $("#First_Modal").modal('show');
    });
  $('#register_first-link').click(function ()
  {
    $('#First_Modal').modal('hide')
    $('#register_Modal').modal('show')
  });

  </script>
  <script>
	if (!Cookies.get('popup')) {
		setTimeout(function() {
			$('#First_Modal').modal();
		}, 600);
	}

	$('#First_Modal').on('shown.bs.modal', function () {
		// bootstrap modal callback function
		// set cookie
		Cookies.set('popup', 'valid', { expires: 3, path: "/" }); // need to set the path to fix a FF bug
	})
</script>
        
</body>
</html>
