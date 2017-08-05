<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}

$user_id = $_GET['id'];
$query = "UPDATE users_items SET status='confirmed' WHERE user_id = '$user_id' and status = 'Added to cart'";
mysqli_query($con,$query);
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
     
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="style.css" type="text/css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lifestyle Store | Success</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <br><br><br>
        <div class="container content">
            <div class="jumbotron text-center">
                <h1>Order Placed</h1>
                <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>