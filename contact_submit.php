<?php
require 'includes/common.php';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$contact_query = "Insert into contact_users(name, email, message) 
    values ('$name', '$email', '$message')";
$contact_submit = mysqli_query($con, $contact_query)
or die(mysqli_error($con));

$showMessage = "Your feedback has been submitted";
?>