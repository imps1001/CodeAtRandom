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
  <link href="js/course2.js" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="con" type="image/png" sizes="16x16" href="favicon_ioo/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">
  <title>Code@Random | 10th ICSE</title>

  <style>
    @media only screen and (max-width:600px) {
      .course_9 {
        margin-left: 0rem;
        padding-left: 0rem;
        width: 100%;
        justify-content: flex-start;
      }

      .heading {
        font-size: 1.8rem;
      }
    }
  </style>
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
          <li class="breadcrumb-item active " style="color: black;" aria-current="page"><strong>10th ICSE</strong></li>
        </ol>
      </nav>
    </div>
    <!--Video Conatiner with enroll button-->
    <div class="content-section">
      <main>
        <h1 class="heading" style="color: white; ">JAVA COURSE FOR 10th ICSE</h1>
        <div class="row">
          <div class="col-10 offset-1 offset-sm-0 col-md-6 mt-4 course_9">
            <div class="offer-card row">
              <div class="col-12 col-md-6">
                <div class="text-description">Lectures Available :</div>
                <div class="text-orange text-size-m"><strong> Immediately</strong></div>
                <div class="mg-top text-description">
                  Fees
                </div>
                <div class="text-orange text-size-l"><del>&#x20b9; 7,999 </del> &nbsp;&#x20b9;1,799*</div>
                <div class="mg-top text-description" style="font-size: 15px;">
                  * Offer Price valid till <br> September 20th 2021<br>
                  * After Enrolling/payment you will receive a Tax Invoice along with a link for joining the Telegram group on your registered email ID so as to get constant updates.
                </div>
              </div>
              <div class="col-12 col-md-6">
                <?php
                 if (isset($_SESSION['email'])) {
                  $user_id = $_SESSION['id'];
                  $query = "SELECT * FROM user_courses WHERE user_id='$user_id' ";
                  $result = mysqli_query($con, $query) or die(mysqli_error($con));
                  $row = $result->fetch_assoc();
                  if (isset($row['course_id']) && $row['course_id'] == 2) { ?>
                    <a href="./courses/java_10_icse/getting started/overview.php">
                      <div class="btn btn--main btn-l btn--padding-l">
                        GO TO <br>Course
                      </div>
                    </a>
                  <?php } else { ?>
                    <a href="#">
                      <div id="payment_btn" class="btn btn--main btn-l btn--padding-l" onclick="pay_now()">
                        Enroll Now <br>And Pay
                      </div>
                    </a>
                  <?php
                  }
                } else {
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
                <h6 class="mt-4">* For any support related to the course, kindly mail us to support@codeatrandom.com</h6>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 mt-4">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://www.youtube.com/embed/Xu9UR3RNczc?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Java Tokens"></iframe></div>
            <script src="https://player.vimeo.com/api/player.js"></script>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!--Course Content with perks-->
  <div class="bg-white" id="course_content">
    <div class="content-section container">
      <div class="row" style="justify-content: center;">
        <div style="z-index: 3" class="card card--shadow col-12 col-md-6">
          <div class="heading" style="justify-content: center;">
            <h2>Course Content</h2>
          </div>
          <p class="mg-top" style="margin-bottom: 0.8rem; color: black">
            This course is designed for the students of class 10th with ICSE board for preparing Computer Subject, which occupies JAVA language in most of its syllabus. The students have to learn to program for the first time, so this course has made to help them. <br>This course will cover <strong> JAVA from scratch</strong> [including 9th class JAVA] in a topic-wise manner with 200+ programming questions. It contains the explanation of each and every topic, practice questions, assignments, quizzes, and also live sessions to directly interact with your mentor. <br> The course is divided into modules. After each module, there is an assignment for practicing and when you submit, its solution video will be provided to you.</p>
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
          <h2 class="heading" style="justify-content: center; padding-bottom:10px;"> 200+ Programs</h2>
          <ul>
            <li class="ml-3 mb-1">Programs based on – Input through Scanner class and programs done in class 9th.</li>
            <li class="ml-3 mb-1">Programs based on if, if else, if else if ladder, nested if, switch case, menu-driven, bill-slab.</li>
            <li class="ml-3 mb-1">Programs based on for loop such as, printing simple series, summation of simple series,etc</li>
            <li class="ml-3 mb-1">Prime number, perfect number, composite number, Fibonacci series. Lowest Common Multiple (LCM), Highest Common Factor(HCF) etc.</li>
            <li class="ml-3 mb-1">Program based on while loop like Armstrong number, Spy number,Niven number,Palindrome number, etc.</li>
            <li class="ml-3 mb-1">Programs based on Nested Loops</li>
            <li class="ml-3 mb-1">Programs based on overloaded methods</li>
            <li class="ml-3 mb-1">Programs involving data members, member methods invoking the methods with respect to the object created.</li>
            <li class="ml-3 mb-1">Programs based on arrays such as accessing elements, searching and sorting techniques, etc</li>
            <li class="ml-3 mb-1">Programs based on extracting the characters from a given string, Palindrome string, piglatin, alphabetical order of characters, etc </li>
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
                <div class="mb-3">on completion *</div>
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
                    <div class="accordion-heading">Module 1: Full Class IX Syllabus (in detail)</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Introduction to Object Oriented Programming concepts</li>
                      <li>Elementary Concept of Objects andClasses</li>
                      <li>Vlauesand Data Types</li>
                      <li>Operators in Java</li>
                      <li>Input In Java</li>
                      <li>Mathematical Library Methods</li>
                      <li>Conditional constructs in Java</li>
                      <li>Iterative constructs in Java</li>
                      <li>Nested Loops</li>
                      <li>Practice Assignments and other programs </li>


                    </ul>
                  </div>
                </div>

              </div>
              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 2: Class as the Basis of all Computation </div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Objects and Classes</li>
                      <li>Examples on how objects encapsulate state and behaviour</li>
                      <li>Variables define state; member methods;</li>
                      <li>Operations/methods/messages/ methods define behaviour. </li>
                      <li>Classes as abstractions for sets of objects; class as an object factory; </li>
                      <li>Primitive data types, Composite data types. </li>
                      <li>Variable declarations for both types; difference between the two types. </li>
                      <li> Real life examples for explaining the concept of class and object.</li>
                      <li> Programs involving data members, member methods invoking the methods with respect to the object created.</li>
                      <li>Practice Assignments and other programs </li>




                    </ul>
                  </div>
                </div>

              </div>

              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 3: Functions Or Methods</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Need of methods, syntax of methods, Method Calling </li>
                      <li>Function Prototype and its parts</li>
                      <li>Parameters In JAVA and its types- Actual and Formal Parameters</li>
                      <li>Function Overloading and programs based on it</li>
                      <li>Call by value Vs Call By Reference</li>
                      <li>Implementing polymorphism</li>
                      <li>Declaration of methods - static and nonstatic</li>
                      <li>Practice Assignments and other programs </li>

                    </ul>
                  </div>
                </div>
              </div>


              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 4: Constructors</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Definition of Constructor and its characteristics</li>
                      <li>Types and Use of Constructors</li>
                      <li>Construction Overloading</li>
                      <li>Default constructor, parameterized constructor, constructor overloading.,</li>
                      <li>Difference between constructor and method</li>
                      <li>Programs based on different types of constructors mentioned in the syllabus.</li>
                      <li>Programs / outputs based on constructor overloading</li>
                      <li>Practice Assignments and other programs </li>



                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 5: Library Classes</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Introduction to wrapper classes, methods of wrapper class. </li>
                      <li>Autoboxing and Unboxing in wrapper classes.</li>
                      <li>Class as a composite type, distinction between primitive data type and composite data type or class types.</li>
                      <li>Class may be considered as a new data type created by the user, that has its own functionality.</li>
                      <li>Methods such as int parseInt(String s), long parseLong(String s), and so on , and also character methods </li>
                      <li>Practice Assignments and other programs </li>


                    </ul>
                  </div>
                </div>

              </div>

              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 6: Encapsulation</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Access specifiers and its scope and visibility </li>
                      <li>Access specifiers – private, protected and public. </li>
                      <li>Visibility rules for private, protected and public access specifiers.</li>
                      <li>Scope of variables, class variables, instance variables, argument variables, local variables</li>
                      <li>Practice Assignments and other programs </li>

                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 7: Arrays</div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>Definition of an array, types of arrays- single and double dimensional</li>
                      <li>Accessing elements of the array and varios basic programs based on arrays</li>
                      <li>Searching techniques- linear Search and Binary Search</li>
                      <li>Sorting Techniques - Exchange Selection and Bubble Sort</li>
                      <li>Array as a composite type, length statement to find the size of the array </li>
                      <li>Declaration, initialization, accepting data in a double dimensional array</li>
                      <li>Practice Assignments and other programs </li>

                    </ul>
                  </div>
                </div>
              </div>

              <div class="accordions">
                <div class="accordion-question">
                  <div>
                    <div class="accordion-heading">Module 8: String Handling </div>
                  </div>
                  <div class="accordions-content">
                    <ul>
                      <li>String class, methods of String class, implementation of String class methods, String array</li>
                      <li>Understanding all the string methods and implementing them with examples</li>
                      <li>Outputs Based On Strings</li>
                      <li>Programs based on the string methods such as extracting and modifying characters of a string</li>
                      <li>Alphabetical order of the strings in an array through sorting techniques.</li>
                      <li>Practice Assignments and other programs </li>

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
        <h2>Want to see the demo class?</h2>
        <p>Here are sample sessions of this course.</p>
        <div class="row">
          <div class="col-12 col-md-6 mt-4">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://www.youtube.com/embed/Lb_HIiP-3HA?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Assignment 36 Solution"></iframe></div>
          </div>
          <div class="col-12 col-md-6 mt-4">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://www.youtube.com/embed/519IJ5ckNqc?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Assignment 36 Solution"></iframe></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'includes/footer(about).php';
  ?>



  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/path/to/js.cookie.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="https://player.vimeo.com/api/player.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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
      acc[i].addEventListener("click", function() {
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
      } else {
        $('.accordion-heading').parent().parent().removeClass('active-accordion')
        $(e.target).parent().parent().addClass('active-accordion')
      }
    })

    function pay_now() {
      var course_id = 2;

      jQuery.ajax({
        type: 'post',
        url: 'payment_process.php',
        data: "course_id=" + course_id,
        success: function(result) {

          var options = {
            "key": "rzp_live_jU7XeSF5KCVYVE",
            "amount": "179900",
            "currency": "INR",
            "name": "Code At Random (OPC) Pvt Ltd",
            "description": "Java Course For Class 10th ICSE  ",
            "image": "https://codeatrandom.com/images/LOGO_Payment%20Gateway.png",
            "handler": function(response) {
              jQuery.ajax({
                type: 'post',
                url: 'payment_process.php',
                data: "payment_id=" + response.razorpay_payment_id + "&course_id=" + course_id,
                success: function(result) {

                  window.location.href = "java_tenth_icse.php";
                }
              });
            },
            "notes": {
              "address": "5, Khanderao Gate Jhansi (UP)"
            },
            "theme": {
              "color": "#3399ff"
            }
          };
          var rzp1 = new Razorpay(options);
          rzp1.open();
        }
      });


    }
  </script>




</body>
