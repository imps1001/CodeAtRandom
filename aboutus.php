<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="./node_modules/font-awesome/css/all.css" rel="stylesheet">
  <link href="./node_modules/font-awesome/css/fontawesome.css" rel="stylesheet">
  <link href="./node_modules/font-awesome/css/brands.css" rel="stylesheet">
  <link href="./node_modules/font-awesome/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_ioo/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">
  <title> About-Code At Random</title>
</head>

<style>
  @media only screen and (max-width: 600px) {
    .blockquote-footer{
      margin-top: 10px;
      justify-content: center;
    }
  }

  .About_Header{
    font-size: 1.8rem;
    margin-left: 3px;
    justify-content: center;
  }
  .row-content{
    margin-top: 1px;
    padding-top: 0rem;
  }
  .ravi_card{
    margin-top: 20px;
  }

  @media only screen and (max-width: 768px){
    .row-content{
    margin-top: 1px;
    padding-top: 0rem;
  }
  .ravi_card{
    margin-top: 20px;
    margin-left: 0rem;
  }
  }

  </style>


<body style="overflow-x: hidden; overflow-y: auto;">
  <?php include 'includes/header.php' ?>

  <header class="jumbotron" style="height: 50%">
    <div class="container">
      <div class="overlay">
        <div class="row row-header">
          <div class=" col-12 offset-md-3 col-sm-6" style="margin-top: 50px;">
            <h1 class=" About_heading col-12 offset-md-3 col-sm-6 col-lg-6 " style="color:black"> <strong>About Us</strong></h1>
            <blockquote class="blockquote">
              <p class="mb-0">“I never teach my pupils; I only attempt to provide the conditions in
                which they can learn”</p>
              <footer class="blockquote-footer mt-2" style="color: crimson; ">Albert Einstein
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container ">
    <div class="row About">
      <ol class="col-12 breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" style="color: blue;">Home</a></li>
        <li class="breadcrumb-item active">About Us</li>
      </ol>

      <h2 class="About_Header col-12 offset-md-4" style="color:brown; margin-top: 10px; display:flex; flex-direction:row;"><strong>Code At Random </strong></h2>
    </div>
    <!--Login Modal-->
    <?php include 'includes/login.php' ?>

    <!--SignUp Modal-->
    <?php include 'includes/signup.php' ?>

    <!--Content_About-->
    <div class="container">
      <div class="row row-content">
        <div class="col-12">
          <p class="mt-0" style="font-size: larger; font-weight:200;">Education is all about self-awakening. We learn to augment our perspectives,
            not only academically, but also to teach ourselves how to live. Importance of school learning
            and the fundamental educational values our students draw from their early ages can never be
            undermined, as this goes with them for through their life. Challenging literacy rate in India
            and the alarming rate of school drop outs is a notable sample in how our education system needs
            secondary support to keep feeding the students, so that they can work on the uncertainties and
            excel in their own areas</p>
          <p class="mt-0" style="font-size: larger; font-weight:200;">We at Code At Random appreciate the fact that students these days undergo numerous
            external challenges and influences, including that of lack of liberal learning approach. With
            a purpose to contribute to our society, in a form of flexi learning arena, we introduce a one
            stop destination for all your educational needs. We dream to provide you with the pre-eminent
            quality of education on a low-cost online interactive platform, through pre-recorded learning
            lessons, quizzes and game sessions, in a bid to explain every morsel of a module. Our
            online-learning platform allows every candidate to learn at his / her own pace & interest.
            At present we would like to facilitate students of Class 6th upto University level.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ">
        <h2 class="About_Header col-12 offset-md-4" style="color:brown; margin-top: 10px; display:flex; flex-direction:row;"><strong>Our Founders </strong></h2>
      </div>
      <div class="bg-white">
        <div class="content-section container" id="course_content">
          <div class="row" style="justify-content: center;">
            <div style="z-index: 3" class="card card--shadow col-12 col-md-5">
              <p class="mt-3">
              <p class="mg-top" style="color: black">
                There is never any point in the life of a person when he can sit back and say, <br>
                <em>“There is nothing more to learn, I can relax with the comforting thought that the Universe around me is
                  an open book. I know it all.”</em>
              </p>
              <p>We cannot firmly tell a child's future, but we can work on it; perhaps, I willingly take this
                initiative not only to enhance your ward's knowledge in a particular subject, but also practically
                as a whole through Code at Random.</p>

              <p>Currently pursuing B. Tech in a College affiliated with the Abdul Kalam Technical University
                (Delhi NCR), I realize that education is not restricted to lessons taught in a classroom through
                text books. Children must be encouraged to ask as many questions as they can. After struggling between what to do and what not to, I got myself a path to walk on and,
                therefore, I want my juniors not to struggle with it!</p>
              <p><em> it is in wanting to know that will result in actually getting to know.</em>
              <p> Thanking you whole heartedly for the co-operation!</p>
              <blockquote class="blockquote">
              <p class="mt-3" style="font-size: smaller;"><strong>-Founder & CTO</strong></p>
                <strong> Pragati Sahu</strong></p>
              </blockquote>

              </p>
            </div>
            <div style="z-index: 2;" class="card card--shadow card--behind col-12  offset-md-1 col-md-5 ravi_card">
              <p class="mt-3">
              <p class="mb-2">It is my dream to provide apt guidance and education to as many students at a
                low cost since my graduation days. </p>
                <p class="mb-2">Therefore, I take this as a golden opportunity to provide
                practical knowledge in every aspect through Code at Random.</p>


              <p class="mb-2">I am currently serving in an MNC based at Delhi NCR, dream to make every student of mine
                prosper in his/her career. </p>
                <p>I firmly believe that children should not pay a hefty amount for
                their own right to education.</p>

              <p class="mt-2 mb-2">Perhaps, let us leave our footprints on the sand of time for others to follow and create a
                different world – an educated world – which is at its best with practical knowledge.</p>

              <p class="mb-2"><em> We do not have at our birth & which we need when we grow is given by education.</em>
              </p>

              <p>I – along with you – aspire to develop you with the ability to make the right judgment to be
                <em>'learned'</em> and <em>'educated'</em>, earnestly.
              </p>

              <p>Thanking you in anticipation for your co-operation!</p>

              <blockquote class="blockquote">
                <p class="mt-3" style="font-size: smaller;"><strong>-Founder & CEO</strong></p>
                <p><strong> Ravi Chokra</strong></p>
              </blockquote>

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="box-sizing: border-box;">
    <div class="row">
      <h3 class="Mission_Header col-12 offset-md-5" id="mission_vision" style="color:brown; margin-bottom: 20px; font-size: 96; margin-top: 10px;"><strong><u> Our Vision & Mission </u></strong></h3>
    </div>
    <div class="row row-content" style="border-bottom: 0px;">
      <div class="col-sm-4">
        <img class="img-fluid mb-0" src="images/Vision-Mission.jpg" height="40%" width="100%">
      </div>
      <div class="col-12 col-sm-8 ">
        <p style="font-size: larger; font-weight: 300; height:max-content;">Our main aim is to provide quality education, at the lowest possible price,
          with apt guidance & mentorship, by creating a platform for students as a source of information
          with every field of study, based on their convenience and interest.
        </p>
      </div>
    </div>
  </div>
  <!--Footer Section-->
  <?php
  include 'includes/footer(about).php';
  ?>



  <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/path/to/js.cookie.js"></script>
  <script defer src="./node_modules/font-awesome/js/all.js"></script>
  <script defer src="./node_modules/font-awesome/js/fontawesome.js"></script>
  <script defer src="./node_modules/font-awesome/js/brands.js"></script>
  <script defer src="./node_modules/font-awesome/js/solid.js"></script>

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