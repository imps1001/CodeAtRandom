<?php
include 'includes/common.php';
if(isset($_GET['submit'])){
    if(isset($_GET['token'])){
        $token = $_POST['token'];
    
    $newpassword = $_POST['password'];
    $cpassword = $_POST['cpassword']; 

    if($newpassword == $cpassword)
    {
        $updatequery =  "update users set Password='$newpassword' where token='$token' ";
        $iquery = mysqli_query($con, $updatequery);
        if($iquery)
        {
            header('location:index.php');
        }
        else{
            header('location:aboutus.php');
        }
    }
    else{
        echo "Passwords are not matching";
    }
}
else{
    echo "No Token Found";
}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_ioo/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
    <title> Reset your Password</title>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm fixed-top" id="navbarcr">
    <div class="container">
        <a class="navbar-brand col-sm-6" href="index.php"><img src="images/LOGO.png" height="50" width="50"></a>
</div>
</nav>
<section class="text-gray-700 body-font" style="background-color: white;">
  <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-11">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Create New Password</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Reset Your Password By Entering New Password</p>
    </div>
    <div class="card-light">
        <article class="card-body mx-auto" style="max-width: 500px;">

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST">
        <div class="form-group input-group  ">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i></span>
            </div>
            <input class="form-control" placeholder="New Password" type="password" name="password" required>
        </div>
        <div class="form-group input-group ">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i></span>
            </div>
            <input class="form-control" placeholder=" Repeat New Password" type="password" name="cpassword" required>
        </div>
        <div class="form-group input-group ">
        <button type="submit" class="btn btn-primary col-12 offset-md-4 col-sm-4" name="submit" style="margin-top: 10px;" id="modal_login_submit" tabindex="3">Submit</button>
        </div>
        </form>
    </div>
  </div>
        </form>
    </article>
    </div>
  </div>
</section>
</body>