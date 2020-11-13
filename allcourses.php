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
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Our Courses</title>
</head>
<body overflow-x: hidden; overflow-y: auto;>


    <!--Login Modal-->
    <?php include 'includes/login.php';?>
    <!--SignUp Modal-->
    <?php include 'includes/signup.php';?>
    <!--Navbar-->
    <?php include 'includes/header.php';?>
    <!--Jumbotron-->
<header class="jumbotron">
  <div class="container">
    <div class="overlay">
      <div class="row row-header align-text-center">
          <div class=" col-12 offset-md-2 col-sm-6">
              <img src="images/Watermark.png" height="600" width="600" class="img-fluid col-12 offset-md-2 col-md-10offset-lg-5" style="margin-top: 130px;">          
            </div>
            <h2 class="About_Header offset-3 offset-sm-5" style="color:brown; margin-top: 40px;"><strong><u>Our Courses</u></strong></h2>
      </div>
    </div>
    </div>
</header>
<div class="container">
  <div class="row About">
      <ol class="col-12 breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" style="color: blue;">Home</a></li>
          <li class="breadcrumb-item active">Our Courses</li>
      </ol>
  </div>
</div>
<!--Card Deck-->
<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://source.unsplash.com/1201x502/?JAVA,CODING,SOFTWARE,ENGINEER">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Buy YouTube Videos</h2>
        <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
        <button class="flex mx-auto mt-6 text-white bg-purple-500 border-0 py-2 px-5 focus:outline-none hover:bg-purple-600 rounded">Button</button>
      </div>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://source.unsplash.com/1201x502/?coding,programming,COMPUTER">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">The Catalyzer</h2>
        <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
        <button class="flex mx-auto mt-6 text-white bg-purple-500 border-0 py-2 px-5 focus:outline-none hover:bg-purple-600 rounded">Button</button>
      </div>
    </div>
  </div>
</section>
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