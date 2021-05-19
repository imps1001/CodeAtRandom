<?php
$showError = false;
$loginStatus=0;
$showMessage= false;
require 'includes/common.php';
$First_Name = $_POST['first_name'];
$Last_Name = $_POST['last_name'];
$Class = $_POST['class'];
$Board = $_POST['board'];
$Phone = $_POST['phone'];
$State = $_POST['state'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Confirm_Password = $_POST['password_confirm'];
$token = bin2hex(random_bytes(15));

//Check whether username exists or not
$Sql = "SELECT * FROM users WHERE Email= '$Email' OR Phone= '$Phone'";
$result = mysqli_query($con, $Sql);
$num_rows = mysqli_num_rows($result);
if($num_rows==0){
  if(strcmp($Confirm_Password,$Password)==0) 
  { 
    $user_registration_query = "Insert into users(First_Name, Last_Name, Class, Board, Phone, State, Email, Password,Confirm_Password,token) 
    values ('$First_Name', '$Last_Name', '$Class', '$Board', '$Phone','$State', '$Email', '$Password', '$Confirm_Password', '$token')";
    $user_registration_submit = mysqli_query($con, $user_registration_query)
    or die(mysqli_error($con));
    $query = "SELECT * FROM users WHERE Email='$Email' AND Password = '$Password'";
    $result= mysqli_query($con,$query) or die(mysqli_error($con));
    $result_row= mysqli_fetch_assoc($result);
    $_SESSION['email']= $Email;
    $_SESSION['first_name']= $First_Name;
    $_SESSION['last_name']=$Last_Name;
    $_SESSION['class']=$Class;
    $_SESSION['board']=$Board;
    $_SESSION['token']=$token;
    $_SESSION['id']= $result_row['ID'];
    $loginStatus=1;
    $showMessage= "You are successfully registered";
    header('location:index.php');
  }
  else{
    $showError= "Both Passwords must be same";
   }
}
else{
  $showError= "Email Or Phone Number Already exits.";
}
?>
<!DOCTYPE html>
<html>
    <head>
         <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_ioo/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
    <title> Sign-Up Error</title>
    </head>
    <body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top" id="navbarcr">
    <div class="container">
    <a class="navbar-brand col-sm-6" href="index.php"><img src="images/LOGO.png" height="50" width="50"></a>
    </div>
    </nav>
        <?php
    if($showError){?>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> <?php echo $showError; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
        <?php }?>
    <section class="text-gray-700 body-font" style="background-color: white;">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Oops!! Your Registration could not be completed.</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base"> Please try again and check that you typed correct passwords.</p>
    </div>
    <div class="flex lg:w-1/6 w-full sm: w-1/7 flex-row flex-col mx-auto px-9 sm:px-0">
    <div class="form-group">
      <button class="  bg-green-500 hover:bg-green-400 text-white font-bold py-3 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" onclick="window.location.href = 'index.php' ">Go To Homepage</button>
    </div>
    </section>
    </body>
</html>