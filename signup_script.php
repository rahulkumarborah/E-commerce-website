<?php
require 'includes/common.php';
$name = mysqli_escape_string($con, $_POST['name']);

$email = mysqli_escape_string($con, $_POST['email']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: signup.php?email_error=Enter correct email');
}

$password = mysqli_escape_string($con, $_POST['password']);
if (strlen($password) < 6) {
  header('location: signup.php?password_error=Enter correct password');
}
$password=md5($password);
        
$contact = mysqli_escape_string($con, $_POST['contact']);
if(strlen($contact) < 10){
    header('location: signup.php?contact_error=Enter correct contact details');
}

$city = mysqli_escape_string($con, $_POST['city']);

$address = mysqli_escape_string($con, $_POST['address']);

$select_query = "SELECT email FROM users WHERE email='$email'";
$result = mysqli_query($con, $select_query);

if(mysqli_num_rows($result)> 0){
    header('location: signup.php?email_error=Email ID is already registered');
}
else{
$insert_query = "INSERT INTO users (name,email,password,contact,city,address) "
        . "VALUES('$name','$email','$password','$contact','$city','$address')";
mysqli_query($con, $insert_query);
$_SESSION['id']=  mysqli_insert_id($con);
$_SESSION['email']= $email;
header("location: products.php?user_name=$email");
}