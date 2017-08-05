<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
     
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="style.css" type="text/css">
        
        <meta charset="UTF-8">
        <title>Welcome | Lifestyle Store</title>
    </head>
    <body>
        <?php
        require 'includes/common.php';
        if (isset($_SESSION['email'])) 
            { header('location: products.php'); }
        ?>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner_image" class="text-center">
            <center>
            <div class="container">
                <div id="banner_content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
            </center>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="products.php"><img src="images/1.jfif" alt="Buy Watches"></a>
                        <h2>Watches</h2>
                        <p>Original watches from the best brands.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="products.php"><img src="images/9.jfif" alt="Cameras"></a>
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="products.php"><img src="images/5.jfif" alt="Shirts"></a>
                        <h2>Shirts</h2>
                        <p>Our exquisite collection of shirts</p>
                    </div>
                </div>     
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
