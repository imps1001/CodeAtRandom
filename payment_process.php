<?php
require 'includes/common.php';
if( isset($_POST['course_id'])){
    $course_id=$_POST['course_id'];
    $payment_status= "pending";
    $added_on= date('Y-m-d h:i:s');
    if($_SESSION['email']){
        $first_name = $_SESSION['first_name'];
        $last_name = $_SESSION['last_name'];
        $email = $_SESSION['email'];
        mysqli_query($con, "Insert into payment(first_name, last_name,email, course_id, payment_status, added_on) 
        values ('$first_name', '$last_name', '$email', '$course_id', ' $payment_status','$added_on')");
    $_SESSION['OID']= mysqli_insert_id($con);
    }
}

if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id = $_POST['payment_id'];
    $added_on = date('Y-m-d h:i:s');
    $id= $_SESSION['OID'];
    $user_id = $_SESSION['id'];
    mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id',added_on='$added_on' where id='$id ' ");
    mysqli_query($con, "Insert into user_courses(user_id, course_id)values ('$user_id', '$course_id')");
}
?>