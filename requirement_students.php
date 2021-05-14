<?php
require 'includes/common.php';
$Message = false;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $subjects = $_POST['subjects'];
    $message = $_POST['message'];

    $require_query = "Insert into requirments(name, email, class, subjects, message) 
    values ('$name', '$email', '$class', '$subjects', '$message')";
    $require_submit = mysqli_query($con, $contact_query)
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
    <title> Requirements | Code At Random</title>


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

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        @media only screen and (max-width: 600px) {
            [class*="col-"] {
                width: 100%;

            }

            h1 {
                font-size: 2rem;
                color: black;

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
        </div>
    </nav>
    <div class="header-container">
        <div class="breadcrumb_container mt-5" style="height: 0px;">
            <nav aria-label="breadcrumb" style="padding-top: 20px; padding-right: 15px;">
                <ol class="breadcrumb" style="background-color: #c1e7f0">
                    <li class="breadcrumb-item"><a href="./index.php" style="color: blue;"><strong>Home</strong></a></li>
                    <li class="breadcrumb-item"><a href="./index.php#courses" style="color: blue;"><strong>Courses</strong></a></li>
                    <li class="breadcrumb-item active " style="color: black;" aria-current="page"><strong>9th CBSE</strong></li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="content" style="justify-content:center;">
                <div class="col-12 col-md-6 offset-md-4">
                    <h1 style="font-weight:700;">Fill your requirements</h1>
                    <p style="margin:auto; justify-content:center; font-size:large;">Tell us about your requirement, we will work on that.</p>
                </div>
                <div class="container">
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            We are working on more courses. Till then tell us your requirements
                        </div>
                    </div>
                    <form action="" method="POST" role="form" id="contact-form">
                        <label for="name"> Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name..">

                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Your email on which we will contact you" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                        <label for="class">Choose your class:</label>

                        <select name="class" id="class">
                            <option value="9th CBSE">9th CBSE</option>
                            <option value="10th CBSE">10th CBSE</option>
                        </select>

                        <label for="subjects">Choose the subjects</label>

                        <select name="subjects" id="subjects" multiple>
                            <option value="English "> English</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Science">Science</option>
                            <option value="Computers">Computer Science</option>
                            <option value="Social Studies">Social Studies</option>
                            <option value="Physical Education">Physical Eduaction</option>
                            <option value="Hindi">Hindi</option>
                        </select>
                        <label for="message"> Specific Topics You Face Problem</label>
                        <textarea id="message" name="message" placeholder="Write your specific topics." style="height:200px"></textarea>

                        <button type="submit" class="btn btn-success col-12 offset-md-4 col-sm-4" style="margin-top: 10px;" id="modal_login_submit" tabindex="3">Submit</button>

                    </form>
                    <div class="d-flex justify-content-center mt-5">
                        <h5>Or mail us at <span style="color:blue;">support@codeatrandom.com</span> </h5>
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

</body>

</html>