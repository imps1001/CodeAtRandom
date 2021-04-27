<?php
$login = false;
$showError = false;
require 'includes/common.php';
$email = $_POST['email'];
$password = $_POST['password'];
$query= "SELECT DISTINCT Email, Password FROM demo WHERE Email= '$email' AND Password= '$password' ";
$query_result= mysqli_query($con, $query);
$result= mysqli_num_rows($query_result);
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
    $_SESSION['id']= mysqli_insert_id($con);
    $sql= "SELECT First_Name, Last_Name, Class, Board, Phone, State From demo Where Email= '$email' ";
    $stmt=$con->prepare( $sql );

    if( $stmt && isset( $_SESSION['email'] ) ){

        $stmt->bind_param('s', $_SESSION['email'] );
        $result=$stmt->execute();

        if( $result ){
            $stmt->store_result();
            $stmt->bind_result( $first_name, $last_name, $class, $board, $phone, $state );
            $stmt->fetch();
            $stmt->free_result();
            $stmt->close();
        }
    }
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['class'] = $class;
    $_SESSION['board'] = $board;
    $_SESSION['phone'] = $phone;
    $_SESSION['state'] = $state;
    header('location:index.php');
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
        <div class="col-9">
            <p> Your Email ID and Password combination does not match our records, please try again.</p>
            <a role="button" href="index.php" class="btn btn-success col-12 offset-md-2 col-sm-5" style="margin-top: 10px;" tabindex="3">Retry, Go to Homepage</a>
        </div>
    </div>
   </div>
    </body>
</html>
