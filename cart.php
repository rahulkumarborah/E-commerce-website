<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
  header('location: login.php'); 
}
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
     
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="style.css" type="text/css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lifestyle Store | Cart</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <?php
        $user_id = $_SESSION['id'];
        ?>
        <br><br><br>
        <div class="container content">
            
            <table class="table table-striped">
                <?php
                $select_query = "SELECT i.pid,i.name,i.price FROM items i INNER JOIN users_items u "
                        . "ON i.pid=u.item_id and u.user_id='$user_id' and status = 'Added to cart'";
                
                $result = mysqli_query($con, $select_query);
                $count = mysqli_num_rows($result);
                
                $i = 1;
                $sum = 0;
                if($count == 0){
                    echo '<div class="text-danger">Add items to the cart first!</div>';
                }
                else{
                    echo '<tr>
                             <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                         </tr>';
                    while($count>0){
                        $row = mysqli_fetch_array($result);
                        echo
                            "<tr>
                                <td>$i</td><td>{$row['name']}</td><td>{$row['price']}</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link'> Remove</a></td>
                            </tr>";
                        $sum = $sum + $row['price'];
                        $i++;
                        $count--;
                    }
                    echo "<tr>
                             <td></td><td>Total</td><td>Rs $sum</td><td><a href=success.php?id=$user_id class=\"btn btn-primary\">Confirm</a></td>
                         </tr>";
                }
                ?>
                
            </table>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>