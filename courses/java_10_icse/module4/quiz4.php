<?php
require '../../../includes/common.php';
if (isset($_SESSION['email'])) { ?>
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" href="../../../css/course.css">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/customize/components/">
        <link rel="apple-touch-icon" sizes="180x180" href="../../../favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../../favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../../favicon_io/favicon-16x16.png">
        <link rel="manifest" href="../../favicon_io/site.webmanifest">
        <link href="../../../node_modules/font-awesome/css/all.css" rel="stylesheet">
        <link href="../../../node_modules/font-awesome/css/fontawesome.css" rel="stylesheet">
        <link href="../../../node_modules/font-awesome/css/brands.css" rel="stylesheet">
        <link href="../../../node_modules/font-awesome/css/solid.css" rel="stylesheet">
        <title> Quiz 4 - Code At Random</title>
    </head>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbarcr">
            <div class="container-fluid">
                <button class="navbar-toggler hvr-bounce-to-bottom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="../../../dashboard.php">
                    <img src="../../../images/LOGO.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
                    Code At Random
                </a>
                <div class="collapse navbar-collapse" id="navbarToggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item d-xs-block d-sm-block d-md-block d-lg-none">
                            <a class="nav-link" href="#" style="color: white;"><?php echo "Hello " . $_SESSION['first_name']; ?> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../../dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white;">Your profile</a>
                        </li>
                        <li class="nav-item d-xs-block d-sm-block d-md-block d-lg-none">
                            <a class="nav-link" href="../../../logout.php" style="color: white;">Log Out</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <div class="nav-item dropdown d-none d-sm-none d-md-none d-lg-block">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;"><i class="fas fa-user fa-lg"></i>
                                <?php echo "Hello " . $_SESSION['first_name']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../../../logout.php">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="bd-subnavbar py-2" aria-label="Secondary navigation">
            <div class="container-xxl d-flex align-items-md-center">

                <h2 class="align-items-center offset-lg-3 heading justify-content-between" style="font-family: Times New Roman;"><strong>Java Course For Class 10th ICSE</strong></h2>

                <button class="btn bd-sidebar-toggle d-md-none py-0 px-1 ms-3 order-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle docs navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-expand" fill="currentColor" viewBox="0 0 16 16">
                        <title>Expand</title>
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-collapse" fill="currentColor" viewBox="0 0 16 16">
                        <title>Collapse</title>
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707l-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z" />
                    </svg>

                </button>
            </div>
        </nav>
        <?php
    if (isset($_POST['submit'])) {
        $ques1 = $_POST['question1'];
        $ques2 = $_POST['question2'];
        $ques3 = $_POST['question3'];
        $ques4 = $_POST['question4'];
        $ques5 = $_POST['question5'];
        $c = 0;
        if (strcmp($ques1, "hot") == 0) {
            $c++;
        }
        if (strcmp($ques2, "greater") == 0) {
            $c++;
        }
        if (strcmp($ques3, "two") == 0) {
            $c++;
        }
        if (strcmp($ques4, "one") == 0) {
            $c++;
        }
        if (strcmp($ques5, "F") == 0) {
            $c++;
        }
        $grade = $c*10;
    $user_id = $_SESSION['id'];
    $course_id = 2;
    $quiz_no = 7;
    $query = "Insert into students_quiz(user_id, course_id, quiz_no, grade) 
    values ('$user_id', '$course_id', '$quiz_no', '$grade')";;
    $query_run = mysqli_query($con, $query)
    or die(mysqli_error($con));
}
    ?>


<!-- Side Bar-->
<div class="container-xxl my-md-3 bd-layout">
            <aside class="bd-sidebar">
                <nav class="collapse bd-links" id="sidebar" aria-label="Docs navigation">
                    <ul class="list-unstyled mb-0 py-3 pt-md-1">
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="false">
                                Getting started
                            </button>

                            <div class="collapse" id="getting-started-collapse">
                            <ul class="list-unstyled fw-normal pb-2 small">
                                    <li><a href="../../java_10_icse/getting started/overview.php" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="../../java_10_icse/getting started/introduction_course.php" class="d-inline-flex align-items-center rounded">Introduction To The Course</a></li>
                                    <li><a href="../../java_10_icse/getting started/using_resources.php" class="d-inline-flex align-items-center rounded">How to use the resources of the course</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="false">
                                Prerequisites
                            </button>

                            <div class="collapse" id="customize-collapse">
                                <ul class="list-unstyled fw-normal pb-2 small">
                                <li><a href="../../java_10_icse/pre_requisites/introduction_computers.php" class="d-inline-flex align-items-center rounded pb-1 active">Video: Introduction To Computers</a></li>
                                    <li><a href="../../java_10_icse/pre_requisites/types_language.php" class="d-inline-flex align-items-center rounded pb-1">Video: Types Of Language</a></li>
                                    <li><a href="../../java_10_icse/pre_requisites/reading_introduction_to_java.php" class="d-inline-flex align-items-center rounded pb-1">Reading: Java: Introduction</a></li>
                                    <li><a href="../../java_10_icse/pre_requisites/notes_prerequisites.php" class="d-inline-flex align-items-center rounded pb-1">Notes</a></li>
                                    <li><a href="../../java_10_icse/pre_requisites/quiz1.php" class="d-inline-flex align-items-center rounded pb-1">Quiz Time</a>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#module1-collapse" aria-expanded="false">
                                Module 1
                            </button>

                            <div class="collapse" id="module1-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../../java_10_icse/module1/features_java.php" class="d-inline-flex align-items-center rounded">Video: Features Of Java</a></li>
                                    <li><a href="../../java_10_icse/module1/notes_features.php" class="d-inline-flex align-items-center rounded "> Notes: Features Of Java</a></li>
                                    <li><a href="../../java_10_icse/module1/oops_pop.php" class="d-inline-flex align-items-center rounded">Video: OOPs Vs POP</a></li>
                                    <li><a href="../../java_10_icse/module1/notes_oops_pop.php" class="d-inline-flex align-items-center rounded">Notes: OOPs Vs POP</a></li>
                                    <li><a href="../../java_10_icse/module1/oops_concepts.php" class="d-inline-flex align-items-center rounded">Video: OOPs Concepts</a></li>
                                    <li><a href="../../java_10_icse/module1/notes_oops_concepts.php" class="d-inline-flex align-items-center rounded">Notes: OOPs Concepts</a></li>
                                    <li><a href="../../java_10_icse/module1/elementary_concepts_java.php" class="d-inline-flex align-items-center rounded ">Video: Elementary Concepts OF Java</a></li>
                                    <li><a href="../../java_10_icse/module1/notes_elementary_java.php" class="d-inline-flex align-items-center rounded">Notes: Elementary Concepts OF Java</a></li>
                                    <li><a href="../../java_10_icse/module1/assignment1.php" class="d-inline-flex align-items-center rounded">Assignment 1</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false">
                                Module 2
                            </button>

                            <div class="collapse" id="content-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../../java_10_icse/module2/java_tokens.php" class="d-inline-flex align-items-center rounded">Video: Java Tokens</a></li>
                                    <li><a href="../../java_10_icse/module2/literals_java.php" class="d-inline-flex align-items-center rounded">Video: Literals In JAVA</a></li>
                                    <li><a href="../../java_10_icse/module2/unary_operators.php" class="d-inline-flex align-items-center rounded">Video: Unary Operators</a></li>
                                    <li><a href="../../java_10_icse/module2/quiz2.php" class="d-inline-flex align-items-center rounded">Quiz 2</a></li>
                                    <li><a href="../../java_10_icse/module2/binary_operators.php" class="d-inline-flex align-items-center rounded">Video: Binary Operators</a></li>
                                    <li><a href="../../java_10_icse/module2/ternary_operators.php" class="d-inline-flex align-items-center rounded">Video: Ternary Operators</a></li>
                                    <li><a href="../../java_10_icse/module2/data_types.php" class="d-inline-flex align-items-center rounded">Video: Data Types in JAVA</a></li>
                                    <li><a href="../../java_10_icse/module2/type_casting.php" class="d-inline-flex align-items-center rounded">Video: Type Casting </a></li>
                                    <li><a href="../../java_10_icse/module2/notes_module2.php" class="d-inline-flex align-items-center rounded">Theory Notes of module 2</a></li>
                                    <li><a href="../../java_10_icse/module2/assignment2.php" class="d-inline-flex align-items-center rounded">Assignment 2</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#module3-collapse" aria-expanded="false">
                                Module 3
                            </button>

                            <div class="collapse" id="module3-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../../java_10_icse/module3/bluej_install.php" class="d-inline-flex align-items-center rounded">BlueJ Installation</a></li>
                                    <li><a href="../../java_10_icse/module3/static_programming.php" class="d-inline-flex align-items-center rounded">Video: Static Programming </a></li>
                                    <li><a href="../../java_10_icse/module3/inputs.php" class="d-inline-flex align-items-center rounded">Taking Inputs </a></li>
                                    <li><a href="../../java_10_icse/module3/dynamic_programming.php" class="d-inline-flex align-items-center rounded"> Video: Dynamic Programming</a></li>
                                    <li><a href="../../java_10_icse/module3/java_math_functions.php" class="d-inline-flex align-items-center rounded">JAVA Mathematical Functions</a></li>
                                    <li><a href="../../java_10_icse/module3/quiz3.php" class="d-inline-flex align-items-center rounded active">Quiz 3</a></li>
                                    <li><a href="../../java_10_icse/module3/notes.php" class="d-inline-flex align-items-center rounded">Notes- Module 3</a></li>
                                    <li><a href="../../java_10_icse/module3/expressions.php" class="d-inline-flex align-items-center rounded">Board Questions: Expressions in JAVA</a></li>
                                    <li><a href="../../java_10_icse/module3/board_practice.php" class="d-inline-flex align-items-center rounded">Board Questions:Programming</a></li>
                                    <li><a href="../../java_10_icse/module3/assignment3.php" class="d-inline-flex align-items-center rounded">Assignment 3</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#module4-collapse" aria-expanded="true" aria-current="true">
                                Module 4
                            </button>

                            <div class="collapse show" id="module4-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../../java_10_icse/module4/selective_constructs.php" class="d-inline-flex align-items-center rounded"> Selective Constructs Intro</a></li>
                                    <li><a href="../../java_10_icse/module4/multiple_if_else.php" class="d-inline-flex align-items-center rounded">Multiple If- Else</a></li>
                                    <li><a href="../../java_10_icse/module4/quiz4.php" class="d-inline-flex align-items-center rounded active">Quiz 4</a></li>
                                    <li><a href="../../java_10_icse/module4/nested_if_else.php" class="d-inline-flex align-items-center rounded">Nested_If_Else</a></li>
                                    <li><a href="../../java_10_icse/module4/switchcase.php" class="d-inline-flex align-items-center rounded">Switch Case</a></li>
                                    <li><a href="../../java_10_icse/module4/notes.php" class="d-inline-flex align-items-center rounded">Notes- Module 4</a></li>
                                    <li><a href="../../java_10_icse/module4/board_practice.php" class="d-inline-flex align-items-center rounded">Board Questions Practice</a></li>
                                    <li><a href="../../java_10_icse/module4/assignment4.php" class="d-inline-flex align-items-center rounded">Assignment 4</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#module5-collapse" aria-expanded="false">
                                Module 5
                            </button>

                            <div class="collapse" id="module5-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../../java_10_icse/module5/intro_loops.php" class="d-inline-flex align-items-center rounded">Iterative Constructs- intro</a></li>
                                    <li><a href="../../java_10_icse/module5/forprogramming.php" class="d-inline-flex align-items-center rounded">For Loop Based Programming</a></li>
                                    <li><a href="../../java_10_icse/module5/series_programming.php" class="d-inline-flex align-items-center rounded">Series Programming</a></li>
                                    <li><a href="../../java_10_icse/module5/whileprogramming.php" class="d-inline-flex align-items-center rounded">While Loop Programming</a></li>
                                    <li><a href="../../java_10_icse/module5/do_while.php" class="d-inline-flex align-items-center rounded">Do While Programming</a></li>
                                    <li><a href="../../java_10_icse/module5/notes.php" class="d-inline-flex align-items-center rounded">Notes: Module 5</a></li>
                                    <li><a href="../../java_10_icse/module5/quiz5.php" class="d-inline-flex align-items-center rounded">Quiz 5</a></li>
                                    <li><a href="../../java_10_icse/module5/boardquestions.php" class="d-inline-flex align-items-center rounded">Board Questions Practice</a></li>
                                    <li><a href="../../java_10_icse/module5/assignmnet5.php" class="d-inline-flex align-items-center rounded">Assignment 5</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#module6-collapse" aria-expanded="false">
                                Module 6
                            </button>

                            <div class="collapse" id="module6-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../../java_10_icse/module6/nested_loops.php" class="d-inline-flex align-items-center rounded">Nested Loops</a></li>
                                    <li><a href="../../java_10_icse/module6/range_programs.php" class="d-inline-flex align-items-center rounded">Range Progarmming</a></li>
                                    <li><a href="../../java_10_icse/module6/factorial_series.php" class="d-inline-flex align-items-center rounded">Factorial Series programming</a></li>
                                    <li><a href="../../java_10_icse/module6/patterns.php" class="d-inline-flex align-items-center rounded">Patterns Programming</a></li>
                                    <li><a href="../../java_10_icse/module6/triangular_patterns.php" class="d-inline-flex align-items-center rounded">Triangular Patterns</a></li>
                                    <li><a href="../../java_10_icse/module6/equi_tri.php" class="d-inline-flex align-items-center rounded">Equlilateral triangular patterns</a></li>
                                    <li><a href="../../java_10_icse/module6/quiz6.php" class="d-inline-flex align-items-center rounded">Quiz 6</a></li>
                                    <li><a href="../../java_10_icse/module6/impques.php" class="d-inline-flex align-items-center rounded">Board Questions Practice</a></li>
                                    <li><a href="../../java_10_icse/module6/assignment6.php" class="d-inline-flex align-items-center rounded">Assignmnet 6</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#module7-collapse" aria-expanded="false">
                                Module 7
                            </button>

                            <div class="collapse" id="module7-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../../java_10_icse/module7/functions.php" class="d-inline-flex align-items-center rounded">Introduction to Functions</a></li>
                                    <li><a href="../../java_10_icse/module7/programs_functions.php" class="d-inline-flex align-items-center rounded">Programming On Functions</a></li>
                                    <li><a href="../../java_10_icse/module7/parameters.php" class="d-inline-flex align-items-center rounded">Parameters in JAVA</a></li>
                                    <li><a href="../../java_10_icse/module7/overloading.php" class="d-inline-flex align-items-center rounded">Function Overloading in JAVA</a></li>
                                    <li><a href="../../java_10_icse/module7/constructors.php" class="d-inline-flex align-items-center rounded">Constructors in Java</a></li>
                                    <li><a href="../../java_10_icse/module7/quiz7.php" class="d-inline-flex align-items-center rounded">Quiz 7</a></li>
                                    <li><a href="../../java_10_icse/module7/questions.php" class="d-inline-flex align-items-center rounded">Board Questions Practice</a></li>
                                    <li><a href="../../java_10_icse/module7/notes.php" class="d-inline-flex align-items-center rounded">Notes- Module 7 </a></li>
                                    <li><a href="../../java_10_icse/module7/assignment7.php" class="d-inline-flex align-items-center rounded">Assignment 7</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#module8-collapse" aria-expanded="false">
                                Module 8
                            </button>

                            <div class="collapse" id="module8-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../../java_10_icse/module8/arrays.php" class="d-inline-flex align-items-center rounded">Arrays- Introduction</a></li>
                                    <li><a href="../../java_10_icse/module8/programming_array.php" class="d-inline-flex align-items-center rounded">Arrays- Programming</a></li>
                                    <li><a href="../../java_10_icse/module8/searching.php" class="d-inline-flex align-items-center rounded">Searching in an array</a></li>
                                    <li><a href="../../java_10_icse/module8/sorting.php" class="d-inline-flex align-items-center rounded">Sorting in Array</a></li>
                                    <li><a href="../../java_10_icse/module8/merging.php" class="d-inline-flex align-items-center rounded">Merging in an Array</a></li>
                                    <li><a href="../../java_10_icse/module8/insert_delete.php" class="d-inline-flex align-items-center rounded">Insertion and Deletion</a></li>
                                    <li><a href="../../java_10_icse/module8/quiz8.php" class="d-inline-flex align-items-center rounded">Quiz 8</a></li>
                                    <li><a href="../../java_10_icse/module8/board_ques.php" class="d-inline-flex align-items-center rounded">Board Questions Practice</a></li>
                                    <li><a href="../../java_10_icse/module8/assignment8.php" class="d-inline-flex align-items-center rounded">Assignmnet 8</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#module9-collapse" aria-expanded="false">
                                Module 9
                            </button>

                            <div class="collapse" id="module9-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../../java_10_icse/module9/strings.php" class="d-inline-flex align-items-center rounded">String Handling and its programs</a></li>
                                    <li><a href="../../java_10_icse/module9/function_string.php" class="d-inline-flex align-items-center rounded">Functions of Strings</a></li>
                                    <li><a href="../../java_10_icse/module9/quiz9.php" class="d-inline-flex align-items-center rounded">Quiz 9</a></li>
                                    <li><a href="../../java_10_icse/module9/programs_str.php" class="d-inline-flex align-items-center rounded">Programming on functions of string</a></li>
                                    <li><a href="../../java_10_icse/module9/outputs.php" class="d-inline-flex align-items-center rounded">Outputs on string </a></li>
                                    <li><a href="../../java_10_icse/module9/board_ques.php" class="d-inline-flex align-items-center rounded">Board Questions Practice</a></li>
                                    <li><a href="../../java_10_icse/module9/assignment9.php" class="d-inline-flex align-items-center rounded">Assignment 9</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#module10-collapse" aria-expanded="false">
                                Module 10
                            </button>

                            <div class="collapse" id="module10-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../../java_10_icse/module10/wrapper_classes.php" class="d-inline-flex align-items-center rounded">Wrapper Classes</a></li>
                                    <li><a href="../../java_10_icse/module10/precedence.php" class="d-inline-flex align-items-center rounded">Precedence and Associativity</a></li>
                                    <li><a href="../../java_10_icse/module10/streams.php" class="d-inline-flex align-items-center rounded">Streams and Packages</a></li>
                                    <li><a href="../../java_10_icse/module10/quiz10.php" class="d-inline-flex align-items-center rounded">Quiz 10</a></li>
                                    <li><a href="../../java_10_icse/module10/assignment10.php" class="d-inline-flex align-items-center rounded">Assignment 10</a></li>

                                </ul>
                            </div>
                        </li>
         
                        <li class="my-2 mx-6 me-2 border-top"></li>
                        <li>
                            <a href="../notes_whole.php" class="d-inline-flex align-items-start rounded">
                                Notes of all modules
                            </a>
                        </li>
                    </ul>
                </nav>


            </aside>
            <main class="bd-main order-1">
                <div class="bd-intro ps-lg-4">
                    <div class="d-md-flex flex-md-rowalign-items-center justify-content-between">
                        <h1 class=" bd-title mb-4">Quiz 4 - Module 4</h1>
                    </div>
                    <?php 
                        $user_id = $_SESSION['id'];
                        $query = "SELECT * FROM students_quiz WHERE user_id='$user_id' AND quiz_no='7' ";
                        $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
                        $result= mysqli_num_rows($query_result);
                        if($result!=0){
                            $result_row= mysqli_fetch_assoc($query_result);
                            $grade= $result_row['grade'];
                            echo '<div class="container w-100 p-3">
                            <h2> Your quiz is submitted. Your score is '. $grade .' out of 50</h2><br>
                            </div>';
                            echo '<div class="container w-100 p-3">
                                    <div class="row">
                                    <h5>The correct answers of the Quiz 4 were:-</h5>
                                    <p> 
                                    <ol> 
                                     <li>What will happen when you compile and run the following code? <br>
                                    public class Test { <br>
                                        &nbsp;  public static void main(String[] args){	<br>
                                            &nbsp; int temperature = 33;<br>
                                            &nbsp; if(temperature < 0)<br>
                                            &nbsp;  &nbsp; System.out.println("Freezing");<br>
                                            &nbsp;else if(temperature < 30)<br>
                                            &nbsp;  &nbsp;System.out.println("Pleasant");<br>
                                        &nbsp;else if(temperature < 50)<br>
                                    &nbsp;&nbsp; System.out.println("Hot");<br>
                                    else<br>
                                    &nbsp;&nbsp; System.out.println("Boiling");<br>
                                        }<br>
                                    }<br>
                                    <strong> The output of the following code is Hot </strong> </li>
                                    
                                    <li>What will happen when you compile and run the following code?<br>
                                public class Test { <br>
                                    &nbsp;  public static void main(String[] args){	<br>
                                        &nbsp; int i = 51;<br>
                                        &nbsp; if(i>50)<br>
                                        &nbsp;  &nbsp; System.out.println("Greater than 50");<br>
                                        &nbsp;else<br>
                                &nbsp;&nbsp; System.out.println("Less than 50");<br>
                                        &nbsp;System.out.println("Done");<br>
                                    }<br>
                                }<br>
                                <strong>The output is Greater than 50</strong></li>
                                <li>Which of the following statement is true?<br>
                                The correct statement is <strong>Else statement must have corresponding if statement</strong></li>
                                <li>  Assume x = 4 and y = 5, Which of the following is true? - <strong>x < 5 && y <= 5 </strong></li>
                                <li> What is the output of the following code?<br>
                                System.out.println(ch); - <strong>The output of the following code will be F.</strong>
                                </li>
                                    </ol>
                                    </p>
                                    </div> 
                                    </div>';
                        }

                        else 
                        {
                    ?>
                    <div class="form">
                        <form action="" method="POST" role="form" id="quiz-3">
                            <input type="hidden" name="csrf_test_name" value="8a80a0a1bdbeedc8fd23ca4ac8731544" />
                            <input type="hidden" value="" name="utm_source">
                            <input type="hidden" value="" name="utm_medium">
                            <input type="hidden" value="" name="utm_campaign">
                            <input type="hidden" name="csrf_test_name" value="ca472541f01935331cf951b3a6984a5d" />
                            <ol class="list-numbered">
                                <li>What will happen when you compile and run the following code? <br>
                                public class Test { <br>
                                    &nbsp;  public static void main(String[] args){	<br>
                                        &nbsp; int temperature = 33;<br>
                                        &nbsp; if(temperature < 0)<br>
                                        &nbsp;  &nbsp; System.out.println("Freezing");<br>
                                        &nbsp;else if(temperature < 30)<br>
                                        &nbsp;  &nbsp;System.out.println("Pleasant");<br>
                                    &nbsp;else if(temperature < 50)<br>
                                &nbsp;&nbsp; System.out.println("Hot");<br>
                                else<br>
                                &nbsp;&nbsp; System.out.println("Boiling");<br>
                                    }<br>
                                }</li>
                                <input type="radio" id="error" name="question1" value="error">
                                <label for="error">Compilation Error</label><br>
                                <input type="radio" id="hotboiling" name="question1" value="hotboiling">
                                <label for="hotboiling">Hot Boiling</label><br>
                                <input type="radio" id="hot" name="question1" value="hot">
                                <label for="hot">Hot</label><br>
                                <input type="radio" id="pleasant" name="question1" value="pleasant">
                                <label for="pleasant">Pleasant</label><br>

                                <li>What will happen when you compile and run the following code?<br>
                                public class Test { <br>
                                    &nbsp;  public static void main(String[] args){	<br>
                                        &nbsp; int i = 51;<br>
                                        &nbsp; if(i>50)<br>
                                        &nbsp;  &nbsp; System.out.println("Greater than 50");<br>
                                        &nbsp;else<br>
                                &nbsp;&nbsp; System.out.println("Less than 50");<br>
                                        &nbsp;System.out.println("Done");<br>
                                    }<br>
                                }</li>
                                <input type="radio" id="greater" name="question2" value="greater">
                                <label for="greater">Greater than 50</label><br>
                                <input type="radio" id="less" name="question2" value="less">
                                <label for="less">Less than 50</label><br>
                                <input type="radio" id="done" name="question2" value="done">
                                <label for="done">Done</label><br>
                                <input type="radio" id="error" name="question2" value="error">
                                <label for="error">Compilation Error</label><br>

                                <li>Which of the following statement is true?<br></li>
                                <input type="radio" id="one" name="question3" value="one">
                                <label for="one">There must be at least one else statement after if statement </label><br>
                                <input type="radio" id="two" name="question3" value="two">
                                <label for="two">Else statement must have corresponding if statement </label><br>
                                <input type="radio" id="three " name="question3" value="three">
                                <label for="three">Curly brackets are mandatory for if, else if and else statements </label><br>
                                <input type="radio" id="none " name="question3" value="none">
                                <label for="none">None of the above. </label><br>

                                <li>Assume x = 4 and y = 5, Which of the following is true?</li>
                                <input type="radio" id="one" name="question4" value="one">
                                <label for="one">x < 5 && y <= 5 </label><br>
                                <input type="radio" id="two " name="question4" value="two">
                                <label for="two">x < 5 || y < 5 </label><br>
                                <input type="radio" id="three " name="question4" value="three">
                                <label for="three"> x > 5 && y > 5</label><br>
                                <input type="radio" id="four " name="question4" value="four">
                                <label for="four">x > 5 || y > 5</label><br>

                                <li> What is the output of the following code?<br>
                                char ch = 'F';<br>
                                if (ch >= 'A' && ch <= 'Z')<br>
                                System.out.println(ch);</li>
                                <input type="radio" id="F" name="question5" value="F">
                                <label for="F">F </label><br>
                                <input type="radio" id="f " name="question5" value="f">
                                <label for="f">f </label><br>
                                <input type="radio" id="Ff " name="question5" value="Ff">
                                <label for="Ff">F f </label><br>
                                <input type="radio" id="none " name="question5" value="none">
                                <label for="none">Nothing</label><br>
                            </ol>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success col-12 offset-md-4 col-sm-4" style="margin-top: 10px;" name="submit" id="quiz2_submit" tabindex="3">Submit</button>
                            </div>
                        </form>
                    </div>
                    <?php }?>
                </div>

                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#quiz-3">Quiz 4</a></li>

                    </nav>
                </div>

                <script src="../../../node_modules/jquery/dist/jquery.slim.min.js"></script>
                <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
                <script src="../../../node_modules/popper.js/dist/umd/popper.min.js"></script>
                <script src="../../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
                <script defer src="../../../node_modules/font-awesome/js/all.js"></script>
                <script defer src="../../../node_modules/font-awesome/js/fontawesome.js"></script>
                <script defer src="../../../node_modules/font-awesome/js/brands.js"></script>
                <script defer src="../../../node_modules/font-awesome/js/solid.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    </body>

    </html>

<?php } else {
    header("Location: ../../../java_tenth_icse.php");
}
?>