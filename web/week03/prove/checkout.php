<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="./public/css/prove03_checkout.css">
   <link rel="shortcut icon" type="image/x-icon" href="./public/images/cart2.png" /> <!-- Title icon -->
   <title>Check Out</title>
</head>

<body>

   <!-- Nav Bar -->

   <!-- Nav Bar -->
   <ul class="nav_ul">
      <li class="nav_li" style="float: right;"><a  href="./shoppingCart.php">My Cart</a></li>
      <li class="nav_li" style="float: right;"><a id="active" href="#checkout">Checkout</a></li>
   </ul>
   <br>

   <div>
      <h2>Shipping Details</h2>

      <form action="./confirmation.php" method="POST">
         <p>Adrress: </p><br>
         <input type="text" name="user_address">
         <p>City:</p>
         <input type="text" name="user_city">
         <p>State: </p>
         <input type="text" name="user_state">
         <p>Zip: </p><br>
         <input type="text" name="user_zip">
         <br>
         <button id="place_order" type="submit">Place Order</button>
      </form>

   </div>
   <?php $_SESSION['totalPrice'] = +$_POST['counttotal']?>

</body>

</html>