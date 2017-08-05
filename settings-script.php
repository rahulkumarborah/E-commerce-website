<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
$user_id = $_SESSION['id'];
echo $user_id;
$old_pwd = mysqli_escape_string($con, $_POST['old-password']);
$new_pwd = mysqli_escape_string($con, $_POST['new-password']);
$retyped_pwd = mysqli_escape_string($con, $_POST['retyped-password']);

if(strlen($new_pwd)!=  strlen($retyped_pwd)){
    header('location: settings.php?error=New password and retyped password do not match');
}

else if($new_pwd != $retyped_pwd){
    header('location: settings.php?error=New password and retyped password do not match');
}
else{
$old_pwd = md5($old_pwd);
$new_pwd = md5($new_pwd);

$select_query = "SELECT password FROM users WHERE id = '$user_id' and password = '$old_pwd'";
$result = mysqli_query($con, $select_query);

if(mysqli_num_rows($result)== 0){
    header('location: settings.php?error=Wrong old password');
}
else{
    $update_query = "UPDATE users SET password = '$new_pwd' WHERE id = '$user_id' and password = '$old_pwd'";
    mysqli_query($con, $update_query);
    header('location: settings.php?success=Password successfully updated');
}
}