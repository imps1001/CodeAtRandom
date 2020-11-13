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
    <title> Forgot your Password</title>
</head>
<body>
<?php
if($_SESSION['msg']!="false"){
  echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> '. $_SESSION['msg'].'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div> ';
  }
?>
<nav class="navbar navbar-dark navbar-expand-sm fixed-top" id="navbarcr">
    <div class="container">
        <a class="navbar-brand col-sm-6" href="index.php"><img src="images/LOGO.png" height="50" width="50"></a>
</div>
</nav>
<section class="text-gray-700 body-font" style="background-color: white;">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Forgot Your Password?</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Reset Your Password By Entering Your Registerd Email Address</p>
    </div>
    <form action="recover_email.php" method="POST" role="form" >
    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0">
      <input class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0 w-full" placeholder="Email" type="email" name="email">
      <div class="form-group">
      <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg " type="submit" name="submit">Submit</button>
      </div>
    </div>
</form>
</div>
</section>
</body>
</html>