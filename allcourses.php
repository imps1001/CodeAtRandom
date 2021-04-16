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
<link rel="con" type="image/png" sizes="16x16" href="favicon_ioo/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
    <title>Our Courses</title>
</head>
<body overflow-x: hidden; overflow-y: auto;>


    <!--Login Modal-->
    <?php include 'includes/login.php';?>
    <!--SignUp Modal-->
    <?php include 'includes/signup.php';?>
    <!--Navbar-->
    <?php include 'includes/header.php';?>
    <!--Breadcrumb-->
    

    <!--Jumbotron-->
<header class="jumbotron" style="height: 10%">
  <div class="container">
    <div class="overlay">
      <div class="row row-header">
          <div class=" col-12 offset-md-3 col-sm-6">
              <h1 class=" About_heading col-12 offset-md-4 col-sm-6 col-lg-5 " style="color:black"> <strong>All Courses</strong></h1>
          </div>
      </div>
    </div>
    </div>
</header>

<div class="container">
  <div class="row About">
      <ol class="col-12 breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" style="color: blue;">Home</a></li>
          <li class="breadcrumb-item active">All Courses</li>
      </ol>

          <h3 class="About_Header offset-3 offset-sm-5" style="color:brown;"><strong><u>Code At Random</u></strong></h3>
  </div>

<!--Footer Section-->
<?php 
 include 'includes/footer(about).php';
 ?>

<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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
</script>


</body>