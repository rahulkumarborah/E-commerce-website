<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'includes/common.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
     
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="style.css" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Lifestyle Store | Sign Up</title>
    </head>
    <body>
        <?php
        if(isset($_SESSION['email'])){
            header('location: products.php');
        }
        ?>
        <?php
        include 'includes/header.php';
        ?>
        <br><br>
        <div class="container content">
            <div class="col-sm-4 col-sm-offset-4">
                <h2>SIGN UP</h2>
                <form method="post" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" 
                               required="true" placeholder="Name" 
                               pattern="[a-zA-Z]+">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email"
                               required="true" placeholder="Email" 
                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        <div class="text-danger"><?php
                            if(isset($_GET['email_error']))
                                echo $_GET['email_error']?>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="pwd" 
                               required="true" placeholder="Password" 
                               pattern="{6,}">
                        <div class="text-danger"><?php
                            if(isset($_GET['password_error']))
                                echo $_GET['password_error']?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact" id="contact" 
                               required="true" placeholder="Contact"
                               pattern="[0-9]+{10}">
                        <div class="text-danger"><?php
                            if(isset($_GET['contact_error']))
                                echo $_GET['contact_error']?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" id="city" 
                               required="true" placeholder="City"
                               pattern="[a-zA-Z]+">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" id="address" 
                               required="true" placeholder="Address"
                               pattern="[a-zA-Z0-9]+">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
              
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
