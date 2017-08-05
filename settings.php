<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
     
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="style.css" type="text/css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lifestyle Store | Settings</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <br><br><br>
        <div class="container content">
            <div class="col-md-4 col-md-offset-4">
                <form method="post" action="settings-script.php">
                    <div class="text-success"><b><?php
                            if(isset($_GET['success']))
                                echo $_GET['success']?></b></div>
                    <br>
                    <div class="form-group">
                        <input type="password" class="form-control" name="old-password" id="old-pwd" 
                               placeholder="Old Password" required="true" pattern=".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="new-password" id="new-pwd" 
                               placeholder="New Password" required="true" pattern=".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="retyped-password" id="retyped-pwd" 
                               placeholder="Retype New Password" required="true" pattern=".{6,}">
                    </div>
                    <div class="text-danger"><?php
                            if(isset($_GET['error']))
                                echo $_GET['error']?></div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Change</button>
                    </div>
                </form>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>