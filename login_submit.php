<?php
$login = false;
$showError = false;
require 'includes/common.php';
$email = $_POST['email'];
$password = $_POST['password'];
$query= "SELECT * FROM users WHERE Email= '$email' AND Password= '$password' ";
$query_result= mysqli_query($con,$query) or die(mysqli_error($con));
$result= mysqli_num_rows($query_result);
$result_row= mysqli_fetch_assoc($query_result);
if ($result==0)
{
   $login = false;
   $showError = "Invalid Credentials";
}
else
{
    $login = true;
    session_start();
    $_SESSION['email']= $email;
    $_SESSION['id']= $result_row['ID'];
    $_SESSION['first_name'] = $result_row['first_name'];
    $_SESSION['last_name'] = $result_row['last_name'];
    $_SESSION['class'] = $result_row['class'];
    $_SESSION['board'] = $result_row['board'];
    $_SESSION['phone'] = $result_row['phone'];
    $_SESSION['state'] = $result_row['state'];
    date_default_timezone_set("Asia/Kolkata");
    $date =  date('Y-m-d g:i:s');
    $query1= " update users set last_activity='$date' where email ='$email' ";
     mysqli_query($con,$query1) or die(mysqli_error($con));
    if(isset($_POST['rememberme']))
    {
        setcookie('emailcookie',$email,time()+6400);
        setcookie('passwordcookie',$password,time()+6400);

        header('location:dashboard.php');    
    }
    header('location:dashboard.php');
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
    <title> Sign-In Error</title>
    </head>
    <body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top" id="navbarcr">
    <div class="container">
    <a class="navbar-brand col-sm-6" href="index.php"><img src="images/LOGO.png" height="50" width="50"></a>
    </div>
    </nav>
        <?php
    if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
        }
    ?>
    <section class="text-gray-700 body-font" style="background-color: white;">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Oops!! You can't Login. Please Retry</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Your Email ID And Password Combination Doesn't Match Our Records</p>
    </div>
    <div class="flex lg:w-1/5 w-full sm:flex-row flex-col mx-auto w-1/3 px-9 sm:px-0">
    <div class="form-group">
      <button class="  bg-green-500 hover:bg-green-400 text-white font-bold py-3 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" onclick="window.location.href = 'index.php' ">Go To Homepage</button>
    </div>
    </section>
    </body>
</html>
