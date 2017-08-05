<?php
require 'includes/common.php';
$email = mysqli_escape_string($con,$_POST['email']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: login.php?email_error=Enter correct email');
}

$password = md5(mysqli_escape_string($con,$_POST['password']));
if (strlen($password) < 6) {
  header('location: login.php?password_error=Enter correct password');
}

$query = "SELECT id,email,password FROM users WHERE email = '$email' and password = '$password'";

$result = mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_num_rows($result)==0){
    header('location:login.php?error=Invalid email or password');
}
else{
    $result = mysqli_fetch_array($result);
    $id = $result['id'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['id'] = $id;
    header("location: products.php?user_name=$email");
}
