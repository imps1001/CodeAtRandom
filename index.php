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
  <meta name="java" content="index,courses">
  <meta name="description" content="Code At Random e-learning platform offering courses at a nominal rate for 9th and 10th standard.">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="./node_modules/font-awesome/css/all.css" rel="stylesheet">
  <link href="./node_modules/font-awesome/css/fontawesome.css" rel="stylesheet">
  <link href="./node_modules/font-awesome/css/brands.css" rel="stylesheet">
  <link href="./node_modules/font-awesome/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/media_queries.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_ioo/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io/site.webmanifest">
  <title> Code At Random | Online Learning Platform </title>

  <style>
    .carousel .carousel-indicators {
      bottom: -20px;
    }

    .carousel .carousel-indicators li {
      width: 16px;
      height: 20px;
      margin-left: 5px;
      margin-right: 5px;
      border-radius: 50%;
      background-color: #5a6268;
    }

    .carousel .carousel-control-next,
    .carousel .carousel-control-prev {
      top: auto;
      border: 0;
    }

    .carousel .carousel-control-prev-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%235a6268' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
    }

    .carousel .carousel-control-next-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%235a6268' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
    }

    .top-content .carousel-control-prev {
      left: -110px;
      border-bottom: 0;
      margin-bottom: 200px;
    }

    .top-content .carousel-control-next {
      right: -110px;
      border-bottom: 0;
      margin-bottom: 200px;
    }

    .top-content .carousel-indicators {
      bottom: -80px;
    }

    .top-content .carousel-indicators li {
      width: 16px;
      height: 16px;
      margin-left: 5px;
      margin-right: 5px;
      border-radius: 50%;
    }
  </style>

</head>

<body style="overflow-x: hidden; overflow-y: auto;">

  <!--Login Modal-->
  <?php include 'includes/login.php'; ?>
  <!--SignUp Modal-->
  <?php include 'includes/signup.php'; ?>
  <!--First Modal-->
  <?php include 'includes/firstmodal.php'; ?>
  <!--Navbar-->
  <?php include 'includes/header.php'; ?>

  <!--Jumbotron-->
  <header class="jumbotron" style="height: 450px;">
    <div class="flex-container">
      <div class="overlay">
        <div class="row row-header align-text-center" id="flex">
          <div class="order-sm-first img-fluid col-12 col-md-6 col-12 offset-md-1 flex-item-left">
            <img src="images/Watermark1 (reduced Size).png" width="100%" style="margin-top: 100px;" class="brand-banner">
            <p class="mt-1 paragraph"><strong> - An online educational portal that delivers result-oriented courses at the <br>convenience
                of your time and money.</strong> </p>
          </div>
          <div class="img-fluid col-12 col-md-4 order-sm-last offset-md-1 flex-item-right jumbotron-img">
            <img src="images/jumbotron1.jpg" height="200" width="350" style="margin-top: 100px;">
          </div>
        </div>
        <div class="row" style="margin-top:0px;">
          <div class="startlearningbutton col-md-12 mt-5" style="margin-bottom: 10px;">
            <a href="#courses" role="button" style="color: black;" ><span class="startbutton btn btn-lg nav-link col-12 col-md-5 offset-lg-5 offset-md-4 offset-sm-2">Explore Now</span></a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Video Carousel-->
  <div class="top-content">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-lg-10 offset-lg-1">

          <div id="carousel-example" class="carousel slide">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example" data-slide-to="1"></li>
              <li data-target="#carousel-example" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://youtube.com/embed/ycFo0-tApJ8" allowfullscreen></iframe>
                </div>
              </div>
              <div class="carousel-item">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/546657963?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
              <div class="carousel-item">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://player.vimeo.com/video/549626528?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="[Program to check whether a number is prime]"></iframe>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!--Courses Section-->

  <div class="courses-main-outer" id="courses" style="background-color: #1e687b;">
    <div class="courses-main-outer-1">
      <div class="courses-main" id="courses">
        <div class="course-heading__container">
          <h2 class="text-light text-center font-weight-bold" style="padding-bottom: 10px;">Choose Your Class And Select The Course That Works For You</h2>
        </div>
        <div class="mt-2 container">
          <div class="no-gutters row">
            <div class="col-sm-12 col-md-3">
              <button class="course-category" onclick="showCourses(0);">
                <span class="course-category__label" style="font-size: large;">Class 9<sup>th</sup> ICSE </span>
              </button>
              <button class="course-category" onclick="showCourses(1);">
                <span class="course-category__label" style="font-size: large;">Class 10<sup>th</sup> ICSE</span>
              </button>
              <button class="course-category" onclick="showCourses(2);">
                <span class="course-category__label" style="font-size: large;">Class 9<sup>th</sup> CBSE</span>
              </button>
              <button class="course-category" onclick="showCourses(3);">
                <span class="course-category__label" style="font-size: large;">Class 10<sup>th</sup> CBSE</span>
              </button>
            </div>
            <div class="col-sm-12 col-md-8" style="padding:0 20px">
              <div class="justify-content-center row">
                <div class="course-detail">
                  <div class="col-12">
                    <div class="mb-4">
                      <span class="t-0" class="course-detail__typography d-none d-lg-block" style=" color: white;">For <b>Class 9<sup>th</sup> ICSE students</b> we are providing JAVA Sessions for preparing for <b>computers</b>
                        Our Courses have 100+ hours learning sessions, 30+(minimum) hours live sessions, 300+ practice questions, carefully
                        designed to give a boast to your learning.</span>
                      <span class="t-1" style="display: none; color: white;" class="course-detail__typography">For <b>Class 10<sup>th</sup> ICSE students</b> we are providing JAVA Sessions for preparing for <b>computers</b>
                        Our Courses have 100+ hours learning sessions, 30+(minimum) hours live sessions, 300+ practice questions, carefully
                        designed to give a boast to your learning.</span>
                      <div class="t-2" style=" display: none; color: white;" class="course-detail__typography">
                      <p>We appreciate for showing your interest in our courses. Please drop your requirements by clicking on the button below. </p>
                      <button class="btn btn-warning btn-lg offset-md-4 offset-lg-5"><a href="requirement_students.php" style="color: black; text-decoration:none;" >Learn More</a></button>
                    </div>
                    <div class="t-3" style=" display: none; color: white;" class="course-detail__typography">
                      <p>We appreciate for showing your interest in our courses. Please drop your requirements by clicking on the button below. </p>
                      <button class="btn btn-warning btn-lg offest-md-4 offset-lg-5"><a href="requirement_students.php" style="color: black; text-decoration:none;" >Learn More</a></button>
                    </div>
                    </div>
                  </div>
                  <div class="pb-3 row">
                    <div class="c-1 pl-4 pr-2 pb-3 course-fix col-sm-12 col-lg-10 offset-lg-1">
                      <div class="course-card-outer">
                        <div class="course-card" style="margin-top: 0px;">
                          <div class="course-card__title">JAVA For Class 9<sup>th</sup> ICSE</div>
                          <div style="display: flex; flex-direction: row; justify-content: space-between; margin: 8% 0px 8%;">
                            <div style="text-align: center;">
                              <div style="font: 20px / 24px Mulish; letter-spacing: 0px; color: rgb(255, 255, 255); opacity: 0.8;"><strong> Actual Fees</strong></div>
                              <div class="course-card__price-actual" style="font-size: large;"><strong>&#x20b9;1,999/-</strong></div>
                            </div>
                            <div style="text-align: center;">
                              <div class="course-card__price-discounted"><strong>&#x20b9;&nbsp;1,199/-&nbsp;* </strong></span></div>
                              <div style="font: 20px / 24px Mulish; letter-spacing: 0px; color: rgb(255, 255, 255); opacity: 0.8;"><strong> Offer Price</strong></div>
                            </div>
                            <div style="align-self: flex-end;">
                              <div style="font: 20px / 24px Mulish; letter-spacing: 0px; color: rgb(255, 255, 255); opacity: 0.8;"><strong> Mode Of Teaching</strong></div>
                              <div class="course-card__date"><strong>Online</strong></div>
                            </div>
                          </div>
                          <div style="height: 70%; display: flex; flex-direction: column; justify-content: space-around;">
                            <div style="display: flex; justify-content: space-around;">
                              <div class="text-center">
                                <img src="https://notestwowaits.s3.us-east-1.amazonaws.com/notes/icon_clock_calender.png" class="course-card__features-img">
                                <div class="course-card__features">Certificate on </div>
                                <div class="course-card__features">Completion *</div>
                              </div>
                              <div>
                                <img src="https://notestwowaits.s3.us-east-1.amazonaws.com/notes/icon_support.png" class="course-card__features-img">
                                <div class="course-card__features">Taught In Hindi</div>
                                <div class="course-card__features">[Bilingual]</div>
                              </div>
                              <div>
                                <img src="https://notestwowaits.s3.us-east-1.amazonaws.com/notes/icon_code.png" alt="GithubIcon" class="course-card__features-img">
                                <div class="course-card__features">Live Doubt </div>
                                <div class="course-card__features"> Sessions</div>
                              </div>
                            </div>
                            <div class="mt-4 mb-2" style="display: flex; flex-direction: column; justify-content: space-between;">
                              <div>
                                <div class="course-card__focus">What you get:</div>
                                <div class="course-card__features-focus">
                                  <ol>
                                    <li>Topic-wise Weekly Live Doubt Session / Problem Solving / Assignment Discussion.</li>
                                    <li>Topic-wise Recorded Lectures/Content of more than 100+ hours.</li>
                                    <li>100+ Assignment Sheets / Previous Year Questions.</li>
                                    <li>Certificate of Course Completion *.</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="course-card__buttons">
                            <a href="java_ninth_icse.php">
                              <button class="btn btn--main btn-l btn--padding-l"><i class="fas fa-forward"></i> Learn More</button></a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class=" c-2 pl-4 pr-2 pb-3 course-fix col-sm-12 col-lg-10 offset-lg-1" style="display: none;">
                      <div class="course-card-outer">
                        <div class="course-card" style="margin-top: 0px;">
                          <div class="course-card__title">JAVA For Class 10<sup>th</sup> ICSE</div>
                          <div style="display: flex; flex-direction: row; justify-content: space-between; margin: 8% 0px 8%;">
                            <div style="text-align: center;">
                              <div style="font: 20px / 24px Mulish; letter-spacing: 0px; color: rgb(255, 255, 255); opacity: 0.8;"><strong> Actual Fees</strong></div>
                              <div class="course-card__price-actual" style="font-size: large;"><strong>&#x20b9;2,999/-</strong></div>
                            </div>
                            <div style="text-align: center;">
                              <div class="course-card__price-discounted"><strong>&#x20b9;&nbsp;1,799/-&nbsp;* </strong></span></div>
                              <div style="font: 20px / 24px Mulish; letter-spacing: 0px; color: rgb(255, 255, 255); opacity: 0.8;"><strong> Offer Price</strong></div>
                            </div>
                            <div style="align-self: flex-end;">
                              <div style="font: 20px / 24px Mulish; letter-spacing: 0px; color: rgb(255, 255, 255); opacity: 0.8;"><strong> Mode Of Teaching</strong></div>
                              <div class="course-card__date"><strong>Online</strong></div>
                            </div>
                          </div>
                          <div style="height: 70%; display: flex; flex-direction: column; justify-content: space-around;">
                            <div style="display: flex; justify-content: space-around;">
                              <div class="text-center">
                                <img src="https://notestwowaits.s3.us-east-1.amazonaws.com/notes/icon_clock_calender.png" class="course-card__features-img">
                                <div class="course-card__features">Certificate on </div>
                                <div class="course-card__features">Completion *</div>
                              </div>
                              <div>
                                <img src="https://notestwowaits.s3.us-east-1.amazonaws.com/notes/icon_support.png" class="course-card__features-img">
                                <div class="course-card__features">Taught In Hindi</div>
                                <div class="course-card__features">[Bilingual]</div>
                              </div>
                              <div>
                                <img src="https://notestwowaits.s3.us-east-1.amazonaws.com/notes/icon_code.png" alt="GithubIcon" class="course-card__features-img">
                                <div class="course-card__features">Live Doubt </div>
                                <div class="course-card__features"> Sessions</div>
                              </div>
                            </div>
                            <div class="mt-4 mb-2" style="display: flex; flex-direction: column; justify-content: space-between;">
                              <div>
                                <div class="course-card__focus">What you get:</div>
                                <div class="course-card__features-focus">
                                  <ol>
                                    <li>Topic-wise Weekly Live Doubt Session / Problem Solving / Assignment Discussion.</li>
                                    <li>Topic-wise Recorded Lectures/Content of more than 120+ hours.</li>
                                    <li>100+ Assignment Sheets / Previous Year Questions.</li>
                                    <li>Certificate of Course Completion *.</li>
                                  </ol>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="course-card__buttons">
                            <a href="java_tenth_icse.php">
                              <button class="btn btn--main btn-l btn--padding-l"><i class="fas fa-forward"></i> Learn More</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  

                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!--Carousel
  <div class="container">
    <div class="row row-content">
      <div class="col">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="hvrbox">
              <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
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
  </div>-->


  <!--Why Us Container-->
  <div class="bg-white">
    <div class="container choose-container mt-0">
      <h2 class="text-dark text-center font-weight-bold">Why Choose Us</h2>
      <br><br><br>

      <div class="text-center">
        <div class="why-us-container">
          <img class="mb-4" src="images/computers.png" alt="First slide" height="100px">
          <h3 class="text-dark font-weight-bold">Interactive Live Classes</h3>
          <p class="text-dark text-center ml-3">We provide online live classes <br> for doubt clearance.</p>
        </div>
        <div class="why-us-container">
          <img class="mb-4" src="images/price_tag.png" alt="First slide" height="100px">
          <h3 class="text-dark font-weight-bold">Low Pricing</h3>
          <p class="text-dark text-center ml-3">We charge too low so that every student <br> can afford it </p>
        </div>
        <div class="why-us-container" style="margin-top: 20px;">
          <img class="mb-4" src="images/doubts_support.png" alt="First slide" height="100px">
          <h3 class="text-dark font-weight-bold">Doubts Support</h3>
          <p class="text-dark text-center ml-3">Stuck somewhere, our mentors are <br> to guide you</p>
        </div>
        <div class="why-us-container" style="margin-top: 20px;">
          <img class="mb-4" src="images/result_oriented.png" alt="First slide" height="100px">
          <h3 class="text-dark font-weight-bold">Result Oriented</h3>
          <p class="text-dark text-center ml-3">Courses are designed for students <br>willing to get good grades.
          </p>
        </div>

      </div>
    </div>
  </div>


  <!--Footer Section-->
  <div id="footer" class="generic_footer" style="margin-bottom: 5px;">
    <div class="container">
      <div class="max-width-container">
        <div class="footer_container">
          <div class="row ">
            <div class="col-sm-6 offset-md-1">
              <div class="footer-list footer-column ">
                <h5> About Us:- </h5>
                <p class="mb-0">“I never teach my pupils; I only attempt to provide the conditions in
                  which they can learn”</p>
                <footer class="blockquote-footer mt-1" style="color: white; float: right;">Albert Einstein
                </footer>
                <br>
                <p style=>Education is all about self-awakening. We learn to augment our perspectives, not only
                  academically, but also to teach ourselves how to live. Importance of school learning and
                  the fundamental educational values our students draw from their early ages can never be
                  undermined, as this goes with them for through their life. <br> <em><a href="aboutus.php" style="color: gray;"> Read More... </a></em></p>
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
                  <a class="link" href="#courses">Courses</a>
                </div>
                <div class="footer-list-item">
                  <a class="link" href="contactus.php">Contact Us</a>
                </div>
                <div class="footer-list-item">
                  <a class="link" href="termsandconditions.php">Terms and Conditions</a>
                </div>
                <div class="footer-list-item">
                  <a class="link" href="PrivacyPolicy.php">Privacy Policy</a>
                </div>
                <div class="footer-list-item">
                  <a class="link" href="refundpolicy.php">Refund Policy</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr color="grey">
        <div class="footer-bottom">
          <div id="social-media-container" style="margin-left: 0px;" class="ml-auto">
            <a class="btn btn-social-icon btn-twitter" href="#" target="_blank"><i class="fab fa-telegram"></i></a>
            <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/codeatrandom" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/codeatrandom/" target="_blank"><i class="fab fa-instagram-square"></i></a>
            <a class="btn btn-social-icon btn-google" href="https://www.youtube.com/channel/UCFykORvcikeYASRLNARaj4g" target="_blank"><i class="fab fa-youtube-square"></i></a>
            <a style="color: white;" class="btn btn-social-icon btn-adn" href="mailto:support@codeatrandom.com" target="_blank"><i class="fas fa-envelope-square"></i></a>
            <div class='' id='copyright' style="margin-right: 0px; color: white;">
            <span id="siteseal" class="d-none d-lg-block "><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=AjsKTmPlyBiS3GZpOk5Evgcdp4YQmbSunjnNpJauTZE0tJrEHK03jBy5qC3I"></script></span>
              <h6><strong>CODE AT RANDOM (OPC) Private Limited</strong></h6>
              <h6>Copyright &copy; 2020-21 All Rights Reserved</h6>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script defer src="./node_modules/font-awesome/js/all.js"></script>
  <script defer src="./node_modules/font-awesome/js/fontawesome.js"></script>
  <script defer src="./node_modules/font-awesome/js/brands.js"></script>
  <script defer src="./node_modules/font-awesome/js/solid.js"></script>
  <script src="https://player.vimeo.com/api/player.js"></script>

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
    /*$(document).ready(function(){
          $("#First_Modal").modal('show');
      });
    $('#register_first-link').click(function ()
    {
      $('#First_Modal').modal('hide')
      $('#register_Modal').modal('show')
    });*/
  
  
    if (!Cookies.get('popup')) {
      setTimeout(function() {
        $('#First_Modal').modal();
      }, 600);
    }

    $('#First_Modal').on('shown.bs.modal', function() {
      // bootstrap modal callback function
      // set cookie
      Cookies.set('popup', 'valid', {
        expires: 3,
        path: "/"
      }); // need to set the path to fix a FF bug
    })


    function showCourses(id) {
      if (id == 0) {
        $(".c-1").show();
        $(".c-2").hide();
        $(".c-3").hide();
        $(".c-4").hide();
        $(".t-0").show();
        $(".t-1").hide();
        $(".t-2").hide();
        $(".t-3").hide();
      } else if (id == 1) {
        $(".c-1").hide();
        $(".c-2").show();
        $(".c-3").hide();
        $(".c-4").hide();
        $(".t-0").hide();
        $(".t-1").show();
        $(".t-2").hide();
        $(".t-3").hide();
      } else if (id == 2) {
        $(".c-1").hide();
        $(".c-2").hide();
        $(".c-3").show();
        $(".c-4").hide();
        $(".t-0").hide();
        $(".t-1").hide();
        $(".t-2").show();
        $(".t-3").hide();
      } else if (id == 3) {
        $(".c-1").hide();
        $(".c-2").hide();
        $(".c-3").hide();
        $(".c-4").show();
        $(".t-0").hide();
        $(".t-1").hide();
        $(".t-2").hide();
        $(".t-3").show();
      }
    }
  

    jQuery(document).ready(function() {
      $('#myModal').on('hidden.bs.modal', function(e) {
        $('#myModal iframe').each(function() {
          var videoURL = $(this).attr('src');
          $(this).attr('src', videoURL);
        });
      });

    });
    </script>


</body>

</html>