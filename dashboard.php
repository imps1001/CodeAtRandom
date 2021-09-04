<?php
require_once('includes/common.php');
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
    <title> User Dashboard | Code At Random </title>

    <style>
    @media only screen and (max-width: 600px) {
        .courses-main-outer-1{
            margin-top: 20px;
      padding-top: 120px;
      justify-content: center;
        }
    }
    @media only screen and (max-width: 768px) {
        .courses-main-outer-1{
            margin-top: 20px;
      padding-top: 120px;
      justify-content: center;
        }
    }
    .d-flex{
  flex-direction: row column row-reverse column-reverse;
}
    </style>
</head>

<body style="overflow-x: hidden; overflow-y: auto;">
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
                        <a href="#courses" role="button" style="color: black;"><span class="startbutton btn btn-lg nav-link col-12 col-md-5 offset-lg-5 offset-md-4 offset-sm-2 d-none d-lg-block">Explore Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
                                                <button class="btn btn-warning btn-lg offset-md-4 offset-lg-5"><a href="requirement_students.php" style="color: black; text-decoration:none;">Learn More</a></button>
                                            </div>
                                            <div class="t-3" style=" display: none; color: white;" class="course-detail__typography">
                                                <p>We appreciate for showing your interest in our courses. Please drop your requirements by clicking on the button below. </p>
                                                <button class="btn btn-warning btn-lg offest-md-4 offset-lg-5"><a href="requirement_students.php" style="color: black; text-decoration:none;">Learn More</a></button>
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
                                                            <div class="course-card__price-actual" style="font-size: large;"><strong>&#x20b9;4,999/-</strong></div>
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
                                                            <div class="course-card__price-actual" style="font-size: large;"><strong>&#x20b9;7,999/-</strong></div>
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
    <!--My Courses Section-->
    <div class="bg-white" id="mycourses">
    <div class="container mt-0">
      <h2 class="text-dark text-center font-weight-bold mb-0">My Courses</h2>
      <br><br><br>
      <?php 
       if (isset($_SESSION['email'])) {
        $user_id = $_SESSION['id'];
        $query = "SELECT * FROM user_courses WHERE user_id='$user_id' ";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        if(mysqli_num_rows($result)==0){?>
          <h3 class="d-flex justify-content-center text-center " style="color: black;">You have not enrolled in any course.</h3>
          <a href="#courses" role="button" style="color: black;"><span class="startbutton btn nav-link col-12 col-md-5 offset-lg-5 offset-md-4 offset-sm-2 d-none d-lg-block">Enroll Now</span></a>
       <?php }
       else{
       while($row = $result->fetch_assoc()){
       $course_id = $row['course_id'];
       $query1 = "SELECT * FROM courses WHERE id='$course_id' ";
       $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
       $result_row = $result1->fetch_assoc(); ?>
       <div class="row">
       <div class="d-flex align-items-start">
        <div class="flex-shrink-0 mb-5">
       <?php
       echo '<img src = "data:image/png;base64,' . base64_encode($result_row['course_image']) . '" width = "100px" height = "100px"/>'; 
       ?>
      </div>
      <div class="flex-grow-1 ms-3">
      <?php echo '<h3>' . $result_row['course_name'] . '</h3>'; ?>
      <?php  
      if($course_id==2){?>
        <a href="./courses/java_10_icse/getting started/overview.php"><button class="btn btn-primary btn-lg">Go To Course</button></a>
      <?php } else{?>
          <a href="./courses/java_9_icse/getting started/overview.php"><button class="btn btn-primary btn-lg">Go To Course</button></a>
      <?php }
      ?>
      </div>
       </div>
       </div>
       <?php }
       }
    }?>
    </div>
  </div>

  <?php include 'includes/footer(about).php'; ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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