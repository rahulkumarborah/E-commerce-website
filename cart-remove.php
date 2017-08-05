<?php
require 'includes/common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['id'];

$delete_query = "DELETE FROM users_items WHERE item_id = '$item_id' and user_id = '$user_id'";
mysqli_query($con, $delete_query);
header('location: cart.php');

