<?php
$showError = false;
$showAlert = false;
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

//Check whether username exists or not
$Sql = "SELECT * FROM demo WHERE Email= '$Email' OR Phone= '$Phone'";
$result = mysqli_query($con, $Sql);
$num_rows = mysqli_num_rows($result);
if($num_rows>0)
{   
    $showError= "Email_Id Or Mobile_NO already exists";
}
else
{
  if(strcmp($Confirm_Password,$Password)==0) 
  {
    $Password= md5($Password);
    $Confirm_Password= md5($Confirm_Password);  
    $user_registration_query = "Insert into demo(First_Name, Last_Name, Class, Board, Phone, State, Email, Password,Confirm_Password) 
    values ('$First_Name', '$Last_Name', '$Class', '$Board', '$Phone','$State', '$Email', '$Password', '$Confirm_Password')";
    $user_registration_submit = mysqli_query($con, $user_registration_query)
    or die(mysqli_error($con));
    session_start();
    $_SESSION['email']= $Email;
    $_SESSION['first_name']= $First_Name;
    $_SESSION['last_name']=$Last_Name;
    $_SESSION['id']= mysqli_insert_id($con);
    header('location: index.php');
  }
  else{
    $showError= " Both Passwords must be same";
   }
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
    <title> Sign-Up Error</title>
    </head>
    <body>
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
    <div class="container" style="margin: 200px 150px 150px 350px; padding-right: 100px;">
    <div class="row" style="margin-right: 100px;">
        <div class="col-7">
            <p class="ml-5"> Your Registration could not be completed. Please try again</p>
            <a role="button" href="index.php" class="btn btn-success col-12 offset-md-3 col-sm-5" style="margin-top: 10px;" tabindex="3">Retry, Go to Homepage</a>
        </div>
    </div>
   </div>
    </body>
</html>