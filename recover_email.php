<?php
$_SESSION['msg']= "false";
require 'includes/common.php';

if(isset($_POST['submit']))
{
    $email = $_POST['email'];

    $emailquery = "Select * from users where email= '$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount)
    {
        $userdata = mysqli_fetch_array($query);
        
        $first_name = $userdata['First_Name'];
        $last_name =  $userdata['Last_Name'];
        $token=  $userdata['token'];
        $Subject = "Reset Your Password";
        echo $token;
        $body = "Hi, $first_name. Click here too reset your password
        https://www.codeatrandom.com/reset_password.php?token=$token ";
        $sender_email = "From: codeatrandom3110@gmail.com";

        if(mail($email, $Subject, $body, $sender_email)) {
            $_SESSION['msg'] = "Check your mail to reset your password";
            header('location:forgotpassword.php');
        }
        else
        {
            echo "Email sending failed";
        }
    }
    else 
    {
        echo "No Email Found";
    }
}
?>