<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
     
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="style.css" type="text/css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lifestyle Store | Products</title>
    </head>
    <body>
        <?php
        require 'includes/common.php';
        ?>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <br><br>
        <div class="container content">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store !</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/1.jfif" alt="">
                        <h3>MVMT Model#301</h3>
                        <p>Price : Rs 6000</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(1)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/2.jfif" alt="">
                        <h3>MVMT Model#201</h3>
                        <p>Price : Rs 3000</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(2)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/3.jfif" alt="">
                        <h3>MVMT Model#111</h3>
                        <p>Price : Rs 13000</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(3)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/4.jfif" alt="">
                        <h3>MVMT Model#401</h3>
                        <p>Price : Rs 1999</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(4)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/5.jfif" alt="">
                        <h3>H & W</h3>
                        <p>Price : Rs 1000</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(5)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/6.jfif" alt="">
                        <h3>Luis Phil</h3>
                        <p>Price : Rs 1200</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(6)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/7.jfif" alt="">
                        <h3>John Zok</h3>
                        <p>Price : Rs 800</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(7)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
            
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/8.jfif" alt="">
                        <h3>Mufti</h3>
                        <p>Price : Rs 699</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(8)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/9.jfif" alt="">
                        <h3>SONY Alpha &alpha;</h3>
                        <p>Price : Rs 40000</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(9)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/10.jfif" alt="">
                        <h3>Canon EOS</h3>
                        <p>Price : Rs 36000</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(10)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/11.jfif" alt="">
                        <h3>Fujifilm X-T20</h3>
                        <p>Price : Rs 45000</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(11)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/12.jfif" alt="">
                        <h3>SONY Alpha &alpha; II</h3>
                        <p>Price : Rs 50000</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else {if (check_if_added_to_cart(12)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                            else { ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
