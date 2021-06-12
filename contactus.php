<?php
require 'includes/common.php';
$Message = false;
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $contact_query = "Insert into contact_users(name, email, message) 
    values ('$name', '$email', '$message')";
  $contact_submit = mysqli_query($con, $contact_query)
    or die(mysqli_error($con));

  $Message = "Success! Your message has been sent";
}
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_ioo/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">
  <link href="./node_modules/font-awesome/css/all.css" rel="stylesheet">
  <link href="./node_modules/font-awesome/css/fontawesome.css" rel="stylesheet">
  <link href="./node_modules/font-awesome/css/brands.css" rel="stylesheet">
  <link href="./node_modules/font-awesome/css/solid.css" rel="stylesheet">
  <title> Conatct Us | Code At Random</title>


  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .form_container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    @media only screen and (max-width: 600px) {
      [class*="col-"] {
        width: 100%;

      }

      h1 {
        font-size: 2.5rem;
      }

    }
  </style>

</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
  </svg>
  <nav class="navbar navbar-dark navbar-expand-sm fixed-top" id="navbarcr">
    <div class="container">
      <a class="navbar-brand col-sm-6" href="index.php"><img src="images/LOGO.png" height="50" width="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" style="float: right;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-5" id="Navbar">
        <ul class="navbar-nav ml-auto">
          <?php
          if (isset($_SESSION['email'])) {
          ?>
            <li class="nav-item "><a class="nav-link " style="color: white;" href="#"><span style="color: white" class="fa fa-user fa-lg"> <?php echo "Hello " . $_SESSION['first_name']; ?></span></a>
              <!--<div class="dropdown-menu" style="background-color: #CCCD6A;">-->
            <li class="nav-item"><a class="nav-link" href="index.php#courses" style="color: white;"><span class="fas fa-book-reader fa-lg"> Your Courses</span></a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php" style="color: white;"><span class="fas fa-sign-out-alt fa-lg">Sign Out</span></a></li>

      </div>
      </li>
    </div>
  <?php
          } else { ?>
    <li class="nav-item" id="loginButton"><a class="nav-link" href="#" style="color: white;"><span class="fas fa-sign-in-alt fa-lg "> Login</span></a></li>
    <li class="nav-item" id="RegisterButton"><a class="nav-link" href="#" style="color: white;"><span class="fas fa-user fa-lg "> Register </span></a></li>
  <?php
          } ?>
  </ul>
  </div>
  </div>
  </nav>

  <div class="container form_container">
    <div class="content" style="justify-content:center;">
      <div class="col-12 col-md-6 offset-md-4">
        <h1 style="font-weight:700;">Contact Us</h1>
        <p style="margin:auto; justify-content:center; font-size:large;">Tell us your views/query in this form.</p>
      </div>
      <div class="container">
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24">
            <use xlink:href="#check-circle-fill" />
          </svg>
          <div>
            <?php if ($Message) {
              echo $Message;
            } else { ?>
              Drop in your queries. We will get back to you soon.
            <?php } ?>
          </div>
        </div>
        <form action="" method="POST" role="form" id="contact-form">
          <label for="name"> Name</label>
          <input type="text" id="name" name="name" placeholder="Your name..">

          <label for="email">Email</label>
          <input type="text" id="email" name="email" placeholder="Your email on which we will contact you" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Write about your feedback, query or any doubt." style="height:200px"></textarea>

          <button type="submit" class="btn btn-success col-12 offset-md-4 col-sm-4" style="margin-top: 10px;" id="modal_login_submit" tabindex="3" name="submit">Submit</button>

        </form>
      </div>
    </div>
  </div>
  <!--Footer Section-->
  <div id="footer" class="generic_footer" style="margin-bottom: 10px;">
    <div class="container">
      <div class="max-width-container">
        <div class="footer_container">
          <div class="row">
            <div class="col-12 col-md-8 offset-md-4" style="justify-content: center; margin-bottom:5px;">
              <h6>Or mail us at support@codeatrandom.com </h6><br>
              <p class="mt-1">Registered Address- 5 Khanderao Gate, Jhansi (UP) 284002</p><br>
              <p class="mt-1"> Our Contact Numbers:- 7985457381 , 6392838448</p>
            </div>
          </div>
          <hr color="grey">
          <div class="footer-bottom">
            <div class="row">
              <h5 class="col-sm-3">Connect With Us:-</h5>
              <div class="col-12 col-sm-9 col-md-4 ml-auto order-sm-last" id='copyright' style="margin-right:0px; color: white; float:right;">
                <h6><strong>CODE AT RANDOM (OPC) Private Limited</strong></h6>
                <h6>Copyright &copy; 2020-21 All Rights Reserved</h6>

              </div>
            </div>

            <div id="social-media-container order-sm-first" style="margin-left: 0px;">
              <a class="btn btn-social-icon btn-twitter" href="#" target="_blank"><i class="fab fa-telegram"></i></a>
              <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/codeatrandom" target="_blank"><i class="fab fa-facebook-square"></i></a>
              <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/codeatrandom/" target="_blank"><i class="fab fa-instagram-square"></i></a>
              <a class="btn btn-social-icon btn-google" href="https://www.youtube.com/channel/UCFykORvcikeYASRLNARaj4g" target="_blank"><i class="fab fa-youtube-square"></i></a>
              <a style="color: white;" class="btn btn-social-icon btn-adn" href="mailto:support@codeatrandom.com" target="_blank"><i class="fas fa-envelope-square"></i></a>
            </div>
            <div class="clear">
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/path/to/js.cookie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
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
      $('#loginButton').click(function() {
        $('#loginModal').modal('show')
      });

      $('#RegisterButton').click(function() {
        $('#register_Modal').modal('show')
      });

      $('#register-link').click(function() {
        $('#loginModal').modal('hide')
        $('#register_Modal').modal('show')
      });
      $('#Loginlink').click(function() {
        $('#loginModal').modal('show')
      });
    </script>
</body>

</html>