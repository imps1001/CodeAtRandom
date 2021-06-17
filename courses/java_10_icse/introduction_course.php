<?php
require '../../includes/common.php';

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
        <link rel="stylesheet" href="../../node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" href="../../css/course.css">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/customize/components/">
        <link rel="apple-touch-icon" sizes="180x180" href="../../favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../favicon_ioo/favicon-16x16.png">
        <link rel="manifest" href="../../favicon_io/site.webmanifest">
        <link href="../../node_modules/font-awesome/css/all.css" rel="stylesheet">
        <link href="../../node_modules/font-awesome/css/fontawesome.css" rel="stylesheet">
        <link href="../../node_modules/font-awesome/css/brands.css" rel="stylesheet">
        <link href="../../node_modules/font-awesome/css/solid.css" rel="stylesheet">
        <title> Java Course Class 10th ICSE - Code At Random</title>
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
                <a class="navbar-brand" href="../../dashboard.php">
                    <img src="../../images/LOGO.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
                    Code At Random
                </a>
                <div class="collapse navbar-collapse" id="navbarToggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item d-xs-block d-sm-block d-md-block d-lg-none">
                            <a class="nav-link" href="#" style="color: white;"><?php echo "Hello " . $_SESSION['first_name']; ?> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white;">Your profile</a>
                        </li>
                        <li class="nav-item d-xs-block d-sm-block d-md-block d-lg-none">
                            <a class="nav-link" href="../../logout.php" style="color: white;">Log Out</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <div class="nav-item dropdown d-none d-sm-none d-md-none d-lg-block">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;"><i class="fas fa-user fa-lg"></i>
                                <?php echo "Hello " . $_SESSION['first_name']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../../logout.php">Log Out</a></li>
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



        <!-- Side Bar-->
        <div class="container-xxl my-md-3 bd-layout">
            <aside class="bd-sidebar">
                <nav class="collapse bd-links" id="sidebar" aria-label="Docs navigation">
                    <ul class="list-unstyled mb-0 py-3 pt-md-1">
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="true" aria-current="true">
                                Getting started
                            </button>

                            <div class="collapse show" id="getting-started-collapse">
                                <ul class="list-unstyled fw-normal pb-2 small">
                                    <li><a href="../java_10_icse/overview.php" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="../java_10_icse/introduction_course.php" class="d-inline-flex align-items-center rounded active">Introduction To The Course</a></li>
                                    <li><a href="../java_10_icse/using_resources.php" class="d-inline-flex align-items-center rounded">How to use the resources of the course</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="false">
                                Prerequisites
                            </button>

                            <div class="collapse " id="customize-collapse">
                                <ul class="list-unstyled fw-normal pb-2 small">
                                    <li><a href="../java_10_icse/introduction_computers.php" class="d-inline-flex align-items-center rounded pb-1 active">Video: Introduction To Computers</a></li>
                                    <li><a href="../java_10_icse/types_language.php" class="d-inline-flex align-items-center rounded pb-1">Video: Types Of Language</a></li>
                                    <li><a href="../java_10_icse/reading_introduction_to_java.php" class="d-inline-flex align-items-center rounded pb-1">Reading: Java: Introduction</a></li>
                                    <li><a href="../java_10_icse/notes_prerequisites.php" class="d-inline-flex align-items-center rounded pb-1">Notes</a></li>
                                    <li><a href="../java_10_icse/quiz1.php" class="d-inline-flex align-items-center rounded pb-1">Quiz Time</a>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="false">
                                Module 1
                            </button>

                            <div class="collapse" id="layout-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../java_10_icse/features_java.php" class="d-inline-flex align-items-center rounded">Video: Features Of Java</a></li>
                                    <li><a href="../java_10_icse/notes_features.php" class="d-inline-flex align-items-center rounded"> Notes: Features Of Java</a></li>
                                    <li><a href="../java_10_icse/oops_pop.php" class="d-inline-flex align-items-center rounded">Video: OOPs Vs POP</a></li>
                                    <li><a href="../java_10_icse/notes_oops_pop.php" class="d-inline-flex align-items-center rounded">Notes: OOPs Vs POP</a></li>
                                    <li><a href="../java_10_icse/oops_concepts.php" class="d-inline-flex align-items-center rounded">Video: OOPs Concepts</a></li>
                                    <li><a href="../java_10_icse/notes_oops_concepts.php" class="d-inline-flex align-items-center rounded">Notes: OOPs Concepts</a></li>
                                    <li><a href="../java_10_icse/elementary_concepts_java.php" class="d-inline-flex align-items-center rounded">Video: Elementary Concepts OF Java</a></li>
                                    <li><a href="../java_10_icse/notes_elementary_java.php" class="d-inline-flex align-items-center rounded">Notes: Elementary Concepts OF Java</a></li>
                                    <li><a href="../java_10_icse/assignment1.php" class="d-inline-flex align-items-center rounded">Assignment 1</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false">
                                Module 2
                            </button>

                            <div class="collapse" id="content-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../java_10_icse/java_tokens.php" class="d-inline-flex align-items-center rounded">Video: Java Tokens</a></li>
                                    <li><a href="../java_10_icse/literals_java.php" class="d-inline-flex align-items-center rounded">Video: Literals In JAVA</a></li>
                                    <li><a href="../java_10_icse/unary_operators.php" class="d-inline-flex align-items-center rounded">Video: Unary Operators</a></li>
                                    <li><a href="../java_10_icse/quiz2.php" class="d-inline-flex align-items-center rounded">Quiz 2</a></li>
                                    <li><a href="../java_10_icse/binary_operators.php" class="d-inline-flex align-items-center rounded">Video: Binary Operators</a></li>
                                    <li><a href="../java_10_icse/ternary_operators.php" class="d-inline-flex align-items-center rounded">Video: Ternary Operators</a></li>
                                    <li><a href="../java_10_icse/data_types.php" class="d-inline-flex align-items-center rounded">Video: Data Types in JAVA</a></li>
                                    <li><a href="../java_10_icse/type_casting.php" class="d-inline-flex align-items-center rounded">Video: Type Casting </a></li>
                                    <li><a href="../java_10_icse/notes_module2.php" class="d-inline-flex align-items-center rounded">Theory Notes of module 2</a></li>
                                    <li><a href="../java_10_icse/assignment2.php" class="d-inline-flex align-items-center rounded">Assignment 2</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#forms-collapse" aria-expanded="false">
                                Module 3
                            </button>

                            <div class="collapse" id="forms-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/forms/overview/" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="/docs/5.0/forms/form-control/" class="d-inline-flex align-items-center rounded">Form control</a></li>
                                    <li><a href="/docs/5.0/forms/select/" class="d-inline-flex align-items-center rounded">Select</a></li>
                                    <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded">Checks &amp; radios</a></li>
                                    <li><a href="/docs/5.0/forms/range/" class="d-inline-flex align-items-center rounded">Range</a></li>
                                    <li><a href="/docs/5.0/forms/input-group/" class="d-inline-flex align-items-center rounded">Input group</a></li>
                                    <li><a href="/docs/5.0/forms/floating-labels/" class="d-inline-flex align-items-center rounded">Floating labels</a></li>
                                    <li><a href="/docs/5.0/forms/layout/" class="d-inline-flex align-items-center rounded">Layout</a></li>
                                    <li><a href="/docs/5.0/forms/validation/" class="d-inline-flex align-items-center rounded">Validation</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false">
                                Module 4
                            </button>

                            <div class="collapse" id="components-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/components/accordion/" class="d-inline-flex align-items-center rounded">Accordion</a></li>
                                    <li><a href="/docs/5.0/components/alerts/" class="d-inline-flex align-items-center rounded">Alerts</a></li>
                                    <li><a href="/docs/5.0/components/badge/" class="d-inline-flex align-items-center rounded">Badge</a></li>
                                    <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded">Breadcrumb</a></li>
                                    <li><a href="/docs/5.0/components/buttons/" class="d-inline-flex align-items-center rounded">Buttons</a></li>
                                    <li><a href="/docs/5.0/components/button-group/" class="d-inline-flex align-items-center rounded">Button group</a></li>
                                    <li><a href="/docs/5.0/components/card/" class="d-inline-flex align-items-center rounded">Card</a></li>
                                    <li><a href="/docs/5.0/components/carousel/" class="d-inline-flex align-items-center rounded">Carousel</a></li>
                                    <li><a href="/docs/5.0/components/close-button/" class="d-inline-flex align-items-center rounded">Close button</a></li>
                                    <li><a href="/docs/5.0/components/collapse/" class="d-inline-flex align-items-center rounded">Collapse</a></li>
                                    <li><a href="/docs/5.0/components/dropdowns/" class="d-inline-flex align-items-center rounded">Dropdowns</a></li>
                                    <li><a href="/docs/5.0/components/list-group/" class="d-inline-flex align-items-center rounded">List group</a></li>
                                    <li><a href="/docs/5.0/components/modal/" class="d-inline-flex align-items-center rounded">Modal</a></li>
                                    <li><a href="/docs/5.0/components/navs-tabs/" class="d-inline-flex align-items-center rounded">Navs &amp; tabs</a></li>
                                    <li><a href="/docs/5.0/components/navbar/" class="d-inline-flex align-items-center rounded">Navbar</a></li>
                                    <li><a href="/docs/5.0/components/offcanvas/" class="d-inline-flex align-items-center rounded">Offcanvas</a></li>
                                    <li><a href="/docs/5.0/components/pagination/" class="d-inline-flex align-items-center rounded">Pagination</a></li>
                                    <li><a href="/docs/5.0/components/popovers/" class="d-inline-flex align-items-center rounded">Popovers</a></li>
                                    <li><a href="/docs/5.0/components/progress/" class="d-inline-flex align-items-center rounded">Progress</a></li>
                                    <li><a href="/docs/5.0/components/scrollspy/" class="d-inline-flex align-items-center rounded">Scrollspy</a></li>
                                    <li><a href="/docs/5.0/components/spinners/" class="d-inline-flex align-items-center rounded">Spinners</a></li>
                                    <li><a href="/docs/5.0/components/toasts/" class="d-inline-flex align-items-center rounded">Toasts</a></li>
                                    <li><a href="/docs/5.0/components/tooltips/" class="d-inline-flex align-items-center rounded">Tooltips</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#helpers-collapse" aria-expanded="false">
                                Module 5
                            </button>

                            <div class="collapse" id="helpers-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/helpers/clearfix/" class="d-inline-flex align-items-center rounded">Clearfix</a></li>
                                    <li><a href="/docs/5.0/helpers/colored-links/" class="d-inline-flex align-items-center rounded">Colored links</a></li>
                                    <li><a href="/docs/5.0/helpers/ratio/" class="d-inline-flex align-items-center rounded">Ratio</a></li>
                                    <li><a href="/docs/5.0/helpers/position/" class="d-inline-flex align-items-center rounded">Position</a></li>
                                    <li><a href="/docs/5.0/helpers/visually-hidden/" class="d-inline-flex align-items-center rounded">Visually hidden</a></li>
                                    <li><a href="/docs/5.0/helpers/stretched-link/" class="d-inline-flex align-items-center rounded">Stretched link</a></li>
                                    <li><a href="/docs/5.0/helpers/text-truncation/" class="d-inline-flex align-items-center rounded">Text truncation</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#utilities-collapse" aria-expanded="false">
                                Module 6
                            </button>

                            <div class="collapse" id="utilities-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/utilities/api/" class="d-inline-flex align-items-center rounded">API</a></li>
                                    <li><a href="/docs/5.0/utilities/background/" class="d-inline-flex align-items-center rounded">Background</a></li>
                                    <li><a href="/docs/5.0/utilities/borders/" class="d-inline-flex align-items-center rounded">Borders</a></li>
                                    <li><a href="/docs/5.0/utilities/colors/" class="d-inline-flex align-items-center rounded">Colors</a></li>
                                    <li><a href="/docs/5.0/utilities/display/" class="d-inline-flex align-items-center rounded">Display</a></li>
                                    <li><a href="/docs/5.0/utilities/flex/" class="d-inline-flex align-items-center rounded">Flex</a></li>
                                    <li><a href="/docs/5.0/utilities/float/" class="d-inline-flex align-items-center rounded">Float</a></li>
                                    <li><a href="/docs/5.0/utilities/interactions/" class="d-inline-flex align-items-center rounded">Interactions</a></li>
                                    <li><a href="/docs/5.0/utilities/overflow/" class="d-inline-flex align-items-center rounded">Overflow</a></li>
                                    <li><a href="/docs/5.0/utilities/position/" class="d-inline-flex align-items-center rounded">Position</a></li>
                                    <li><a href="/docs/5.0/utilities/shadows/" class="d-inline-flex align-items-center rounded">Shadows</a></li>
                                    <li><a href="/docs/5.0/utilities/sizing/" class="d-inline-flex align-items-center rounded">Sizing</a></li>
                                    <li><a href="/docs/5.0/utilities/spacing/" class="d-inline-flex align-items-center rounded">Spacing</a></li>
                                    <li><a href="/docs/5.0/utilities/text/" class="d-inline-flex align-items-center rounded">Text</a></li>
                                    <li><a href="/docs/5.0/utilities/vertical-align/" class="d-inline-flex align-items-center rounded">Vertical align</a></li>
                                    <li><a href="/docs/5.0/utilities/visibility/" class="d-inline-flex align-items-center rounded">Visibility</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#extend-collapse" aria-expanded="false">
                                Module 7
                            </button>

                            <div class="collapse" id="extend-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded">Approach</a></li>
                                    <li><a href="/docs/5.0/extend/icons/" class="d-inline-flex align-items-center rounded">Icons</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#about-collapse" aria-expanded="false">
                                Module 8
                            </button>

                            <div class="collapse" id="about-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/about/overview/" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="/docs/5.0/about/team/" class="d-inline-flex align-items-center rounded">Team</a></li>
                                    <li><a href="/docs/5.0/about/brand/" class="d-inline-flex align-items-center rounded">Brand</a></li>
                                    <li><a href="/docs/5.0/about/license/" class="d-inline-flex align-items-center rounded">License</a></li>
                                    <li><a href="/docs/5.0/about/translations/" class="d-inline-flex align-items-center rounded">Translations</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#about-collapse" aria-expanded="false">
                                Module 9
                            </button>

                            <div class="collapse" id="about-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/about/overview/" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="/docs/5.0/about/team/" class="d-inline-flex align-items-center rounded">Team</a></li>
                                    <li><a href="/docs/5.0/about/brand/" class="d-inline-flex align-items-center rounded">Brand</a></li>
                                    <li><a href="/docs/5.0/about/license/" class="d-inline-flex align-items-center rounded">License</a></li>
                                    <li><a href="/docs/5.0/about/translations/" class="d-inline-flex align-items-center rounded">Translations</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="my-2 mx-6 me-2 border-top"></li>
                        <li>
                            <a href="/docs/5.0/migration/" class="d-inline-flex align-items-start rounded">
                                Assignment Solutions
                            </a>
                        </li>
                    </ul>
                </nav>

            </aside>
            <main class="bd-main order-1">
                <div class="bd-intro ps-lg-4">
                    <div class="d-md-flex flex-md-rowalign-items-center justify-content-between">
                        <h3 class="bd-title" id="content">Introduction To Course</h3>
                    </div>
                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://www.youtube.com/embed/Lb_HIiP-3HA?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Java Tokens"></iframe></div>
                </div>

                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#alert">Video</a></li>
                           
                    </nav>
                </div>

                <script src="../../node_modules/jquery/dist/jquery.slim.min.js"></script>
                <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
                <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
                <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
                <script defer src="../../node_modules/font-awesome/js/all.js"></script>
                <script defer src="../../node_modules/font-awesome/js/fontawesome.js"></script>
                <script defer src="../../node_modules/font-awesome/js/brands.js"></script>
                <script defer src="../../node_modules/font-awesome/js/solid.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    </body>

    </html>
<?php } else {
    header("Location: ../../java_tenth_icse.php");
}
?>