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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="./node_modules/font-awesome/css/all.css" rel="stylesheet"> 
    <link href="./node_modules/font-awesome/css/fontawesome.css" rel="stylesheet">
    <link href="./node_modules/font-awesome/css/brands.css" rel="stylesheet">
    <link href="./node_modules/font-awesome/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="con" type="image/png" sizes="16x16" href="favicon_ioo/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">
  <title>Code@Random | 9th ICSE</title>
</head>

<body overflow-x: hidden; overflow-y: auto;>


  <!--Login Modal-->
  <?php include 'includes/login.php'; ?>
  <!--SignUp Modal-->
  <?php include 'includes/signup.php'; ?>
  <!--Navbar-->
  <?php include 'includes/header.php'; ?>
  <br>

  <div class="header-container">
  <div class="breadcrumb_container mt-5" style="height: 0px;">
      <nav aria-label="breadcrumb" style="padding-top: 20px; padding-right: 15px;">
        <ol class="breadcrumb" style="background-color: #c1e7f0">
          <li class="breadcrumb-item"><a href="./index.php" style="color: blue;"><strong>Home</strong></a></li>
          <li class="breadcrumb-item"><a href="./index.php#courses" style="color: blue;"><strong>Courses</strong></a></li>
          <li class="breadcrumb-item active " style="color: black;" aria-current="page"><strong>9th ICSE</strong></li>
        </ol>
      </nav>
    </div>
    <!--Video Conatiner with enroll button-->
    <div class="content-section">
      <main>
        <h1 class="heading" style="color: white; ">JAVA COURSE FOR 9th ICSE</h1>
        <div class="row">
          <div class="col-10 offset-1 offset-sm-0 col-md-6 mt-5">
            <div class="offer-card row">
              <div class="col-12 col-md-6">
                <div class="text-description">Next upcoming batch</div>
                <div class="text-orange text-size-m">Join Immediately</div>
                <div class="mg-top text-description">
                  Fees
                </div>
                <div class="text-orange text-size-l"><del>&#x20b9; 4,999 </del> &nbsp;&#x20b9;1,199*</div>
                <div class="mg-top text-description">
                  * This special price is for limited time period.<br>
                  ** Weekly Live Doubt Clearing Sessions on Sunday.
                </div>
              </div>
              <div class="col-12 col-md-6">
                <?php  if (isset($_SESSION['email'])) {?>
                <a href="https://rzp.io/l/CRJVICPAY">
                  <div class="btn btn--main btn-l btn--padding-l">
                    Enroll Now <br>And Pay
                  </div>
                </a>
                <?php } 
                else {
                  ?>
                   <a href="#">
                  <div id="not_login" class="btn btn--main btn-l btn--padding-l">
                    Enroll Now <br>And Pay
                  </div>
                </a>
                <?php } ?>

                <a href="#course_content"><button class="btn btn--outline btn-l btn--padding-l mt-2">
                    Want to know more?
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mt-4">
          <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/546990311?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Java Tokens"></iframe></div>
          <script src="https://player.vimeo.com/api/player.js"></script>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!--Course Content with perks-->
  <div class="bg-white">
    <div class="content-section container" id="course_content">
      <div class="row" style="justify-content: center;">
        <div style="z-index: 3" class="card card--shadow col-12 col-md-6">
          <div class="heading" style="justify-content: center;">
            <h2>Course Content</h2>
          </div>
          <p class="mg-top" style="margin-bottom: 0.8rem; color: black">
            This course is designed for the students of class 9th with ICSE board for preparing Computer Subject, 
            which occupies JAVA language in most of its syllabus. The students have to learn to program for the 
            first time, so this course has made to help them. <br>This course will cover JAVA from scratch in a 
            topic-wise manner with 150+ programming questions. It contains the explanation of each and every topic, 
            practice questions, assignments, quizzes, and also live sessions to directly interact with your mentor. 
            <br> The course is divided into modules. After each module, there is an assignment for practicing and when
             you submit, its solution video will be provided to you.</p>
          <div class="sub-card">
            <h5>Language focus</h5>
            <div style="text-align: center; display: inline-block">
              <img style="margin: 1rem 0; width: 60px; margin-bottom:0px;" src="images/icons/Java.png" alt="BlueJ" class="course-card__focus-img">
              <div class="mb-3">JAVA</div>
            </div>
            <br>
            <h5>Platform Used For Programming</h5>
            <div style="text-align: center; display: inline-block">
              <img style="margin: 1rem 0; width: 60px; margin-bottom:0px;" src="images/icons/bluej.png" alt="JAVA" class="course-card__focus-img">
              <div class="mb-3">BlueJ</div>
            </div>
          </div>
        </div>
        <div style="z-index: 2;" class="card card--shadow card--behind col-12 col-md-4">
          <h2 class="heading" style="justify-content: center; padding-bottom:10px;"> 150+ Programs</h2>
          <ul>
          <li class="ml-3 mb-1">Programs Using Assignment Statements</li>
            <li class="ml-3 mb-1">Programs based on– Input through parameters</li>
            <li class="ml-3 mb-1">Programs based on – Input through Scanner class.</li>
            <li class="ml-3 mb-1">Programs based on Mathematical methods</li>
            <li class="ml-3 mb-1">Programs based on if, if else, if else if ladder, nested if etc.</li>
            <li class="ml-3 mb-1">Programs on switch case.</li>
            <li class="ml-3 mb-1">Programs based on Looping Statement</li>
            <li class="ml-3 mb-1">Programs based on printing simple series, summation of simple series, product of simple series</li>
            <li class="ml-3 mb-1">Prime number, perfect number, composite number, Fibonacci series. Lowest Common Multiple (LCM), Highest Common Factor(HCF) etc.</li>
            <li class="ml-3 mb-1">Program based on while loop like Armstrong number, Spy number,Niven number,Palindrome number, etc.</li>
            <li class="ml-3 mb-1">Programs based on Nested Loops</li>
            <li class="ml-3 mb-1">Menu Driven and Bill Slab Programs etc.</li>
          </ul>
        </div>

        <div style="z-index: 1;" class="card card--shadow card--behind col-12 col-md-2">
          <h2 class="heading" style="justify-content: center; padding-bottom:10px;">Perks</h2>
          <div class="perks">
            <div class="perks-container">
              <img height="45px" src="https://notestwowaits.s3.us-east-1.amazonaws.com/notes/icon_clock_calender.png" class="ml-3 mt-2" style="justify-content: center;" />
              <div>
                <div class="text-orange" style="justify-content: center;">24 hours support</div>
                <div style="justify-content: center;" class="mb-3">Flexible Timimg</div>
              </div>
            </div>
            <div class="perks-container">
              <img height="45px" src="images/icons/notes.png" class="ml-3 mt-2" style="justify-content: center;" />
              <div>
                <div class="text-orange" style="justify-content: center;">Hands-On Notes</div>
                <div style="justify-content: center;" class="mb-3"> In PDF Format</div>
              </div>
            </div>
            <div class="perks-container">
              <img height="55px" src="https://notestwowaits.s3.us-east-1.amazonaws.com/notes/icon_certificate.png" class="ml-3 mt-2" style="justify-content: center;" />
              <div style="justify-content: center;">
                <div class="text-orange text-size-m">Certificate</div>
                <div class="mb-3">on completion</div>
              </div>
            </div>
            <div class="perks-container">
              <img height="55px" src="images/icons/mentor_interaction.png" class="ml-3 mt-2" style="justify-content: center;" />
              <div style="justify-content: center;">
                <div class="text-orange text-size-m">Interaction </div>
                <div class="mb-3">With Instructor</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Accordian-->

  <div class="syllabus-main-outer">
    <div class="syllabus-main">
      <div id="syllabus" class="container">
        <h2 class="syllabus-heading">Syllabus</h2>
        <div class="row">
          <div class="syllabus col-sm-12 col-md-10">
            <div class="syllabus-accordions">
              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 1: Introduction </div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Introduction to JAVA - Types of java programs, Java Source code, Bytecode, Java Virtual Machine(JVM),Features of JAVA.</li>
                      <li>Java Source code, Bytecode, Java Virtual Machine(JVM)</li>
                      <li>Features Of JAVA</li>
                      <li>JAVA Compilation Process</li>
                      <li>Priciples of Object Oriented Programming</li>
                      <li>Elementary Concepts Of Objects and Classes</li>
                      <li>Practice Questions</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 2: Values and Data Types</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                    <li>Character set, ASCII code, Unicode</li>
                      <li>JAVA Tokens</li>
                      <li>Escape sequences, Constants and Variables,</li>
                      <li>Data types, type conversions. </li>
                      <li>Operators And its types</li>
                      <li>Assignment 2</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 3: Library Classes In JAVA</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Scanner Class For Taking Input in JAVA</li>
                      <li>Initialization, Parameter, introduction to packages, Comments, Errors</li>
                      <li>Introduction to package java.lang and methods of Math Class</li>
                      <li>pow(x,y), sqrt(x), abs(a), max(a, b), min(a,b), random( ), etc </li>
                      <li>Java expressions – using all the operators and methods of Math class.</li>
                      <li>Assignment 3</li>
                    </ul>
                  </div>
                </div>

              </div>

              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 4: Programming Constructs In JAVA</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Types Of Constructs </li>
                      <li>Basic Programming Questions Without Taking Input</li>
                      <li>Programming Questions With Scanner Class</li>
                      <li>Practice Questions And Assignment 4</li>
                    </ul>
                  </div>
                </div>

              </div>

              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 5: Conditional Constructs In JAVA</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Application of if, if else, if else if ladder</li>
                      <li>Implementation of Switch Case, default and break statement</li>
                      <li>Programming Questions based on Conditional Constructs</li>
                      <li>Menu-Driven And Bill Slab Programs</li>
                      <li>Practice Assignments</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 6: Iterative Constructs</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Types of looping statements, entry controlled loops [ for, while] , exit controlled loop [do while]</li>
                      <li>Variations in looping statements, and Jump statements.</li>
                      <li>Programming Questions based on For loop, While Loop and Do-while Loop</li>
                      <li>Programs based on printing simple series, summation of simple series, product of simple series</li>
                      <li>Prime number, perfect number, composite number, Fibonacci series. Lowest Common Multiple (LCM), Highest Common Factor(HCF) etc.</li>
                      <li>Program based on while loop like Armstrong number, Spy number,Niven number,Palindrome number, etc.</li>
                      <li>Practice Assignments</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 7: Nested Loops </div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Introduce nested loops through some simple examples</li>
                      <li>Demonstrate break and continue statements with the help of nested loops.</li>
                      <li>Programs based on nested loops [ rectangular,triangular patterns] </li>
                      <li>Program On Generate first n multiples of numbers from 1 to the limit input by the user. [Range Programs]</li>
                      <li>Practice Assignments</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 8: Functions And Parameters</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Need of methods, syntax of methods, method definition, method calling </li>
                      <li>Function Prototype, Access Specifiers</li>
                      <li>Parameters and its types</li>
                      <li>Programming based on Parameters, Input through parameters</li>
                      <li>Practice Assignmnets</li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white">
  <div class="container">
        <div class="video-container" style="padding: 30px 0px 20px 0px; text-align: center; color: #000;">
          <h2>Want to see any demo class?</h2>
          <p>Here are two sample sessions of this course.</p>
          <div class="row">
            <div class="col-12 col-md-6 mt-4">
          <iframe style="margin-top: 30px; max-width: 720px;" src="https://www.youtube.com/embed/I5m6tOBtWoc" frameborder="0" autoplay="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-md-6 mt-4">
          <iframe style="margin-top: 30px; max-width: 720px;" src="https://www.youtube.com/embed/I5m6tOBtWoc" frameborder="0" autoplay="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
  </div>

  <?php include 'includes/footer(about).php';
  ?>



  <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/path/to/js.cookie.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  <script>
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
    $('#not_login').click(function() {
      $('#loginModal').modal('show')
    });

let acc = document.querySelectorAll(".accordion");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

$('.accordion-heading').on('click', (e) => {
    if ($(e.target).parent().parent().hasClass('active-accordion')) {
        $('.accordion-heading').parent().parent().removeClass('active-accordion')
    }
    else {
        $('.accordion-heading').parent().parent().removeClass('active-accordion')
        $(e.target).parent().parent().addClass('active-accordion')
    }
})
  </script>


</body>