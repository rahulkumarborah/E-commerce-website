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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lifestyle Store | Login</title>
    </head>
    <body>
        <?php
        require 'includes/common.php';
        if(isset($_SESSION['email'])){
            header('location:products.php');
        }
        ?>
        <?php
        include 'includes/header.php';
        ?>
        <br><br><br>
        <div class="content">
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>LOGIN</h1>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"><i>Login to make a purchase</i></p>
                        <form method="post" action="login_submit.php">
                            <div class="form-group">
                                <input type="email"  class="form-control" id="email" name="email"
                                       required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                       placeholder="Email">
                                
                            </div>
                            <div class="form-group">
                                <input type="password"  class="form-control" name="password" id="password" 
                                       required="true"  placeholder="Password" pattern=".{6,}">
                                
                            </div>
                            <div class="text-danger"><?php
                            if(isset($_GET['error']))
                                echo $_GET['error']?></div><br>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="panel-footer">
                        Don't have an account? <a href="signup.php">Register</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
</html>
