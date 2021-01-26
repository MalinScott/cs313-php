<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" type="image/x-icon" href="./public/images/cart2.png" /> <!-- Title icon -->
   <link rel="stylesheet" type="text/css" href="./public/css/prove03_checkout.css">
   <title>Order Confirmation</title>
</head>

<body>

   <!-- Nav Bar -->
   <ul class="nav_ul">
      <li class="nav_li""><a  href=" ./prove03_store.php">Store</a></li>
      <li class="nav_li" style="float: right;"><a id="active" href="#order">Order</a></li>
   </ul>
   <br>

   <hr>
   <h1>Order Details:</h1>
   <div id="items_list">
      <!-- Basketballs -->
      <h2>Items:</h2>
      <?php if ($_SESSION["countbasketb"]) { ?>
         Basketballs: <?php echo $_SESSION["countbasketb"] ?>
      <?php } ?>
      <br>
      <!-- Soccerballs -->
      <?php if ($_SESSION["countsb"]) { ?>
         Soccerballs: <?php echo $_SESSION["countsb"] ?>
      <?php } ?>
      <br>
      <!-- Volleyballs -->
      <?php if ($_SESSION["countvb"]) { ?>
         Volleyballs: <?php echo $_SESSION["countvb"] ?>
      <?php } ?>
      <br>
      <!-- Footballs -->
      <?php if ($_SESSION["countfb"]) { ?>
         Footballs: <?php echo $_SESSION["countfb"] ?>
      <?php } ?>
      <br>
      <!-- Baseballs -->
      <?php if ($_SESSION["countbaseb"]) { ?>
         Baseballs: <?php echo $_SESSION["countbaseb"] ?>
      <?php } ?>
      <br>
      <hr>
      <?php
      echo "Total Items: " . $_SESSION["totalItems"] . "<br>";
      echo "Total Price: $" . $_SESSION["totalPrice"] . "<br>";
      ?>
      <hr>

   </div>
   <!-- Shippping Information -->
   <div id="shipping_info">
      <h2>Shipping Information:</h2>
      <!-- Address -->
      Address: <?php echo htmlspecialchars($_POST['user_address']) ?> <br>
      <!-- City -->
      City: <?php echo htmlspecialchars($_POST['user_city']) ?> <br>
      <!-- State -->
      State: <?php echo htmlspecialchars($_POST['user_state']) ?> <br>
      <!-- Zip -->
      Zip: <?php echo htmlspecialchars($_POST['user_zip']) ?> <br>
   </div>
   <hr>

   <?php include("./includes/session_unset.php");
   ?>


   <!-- List of items  DEBUG CODE-->
<!--    <php
   echo "<pre> <br> <hr>";
   echo "total Items: " . $_SESSION["totalItems"] . "<br>";
   echo "total Price: " . $_SESSION["totalPrice"] . "<br>";
   echo $_SESSION["countbasketb"] . "<br>";
   echo $_SESSION["countsb"] . "<br>";
   echo $_SESSION["countvb"] . "<br>";
   echo $_SESSION["countfb"] . "<br>";
   echo $_SESSION["countbaseb"] . "<br>";
   print_r($_POST);
   echo "</pre>";
   echo "<hr>";
   
   > -->
   
</body>

</html>