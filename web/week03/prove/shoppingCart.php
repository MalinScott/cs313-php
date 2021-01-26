<?php //Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shopping Cart</title>
   <link rel="shortcut icon" type="image/x-icon" href="./public/images/cart2.png" /> <!-- Title icon -->
   <link rel="stylesheet" type="text/css" href="./public/css/prove03_cart.css">
   <script type="text/javascript" src="./prove03.js"></script>
</head>

<body>
   <!-- Create Session Variables -->
   <?php include("./includes/session_globals.php"); ?>
   <?php ?>
   <!-- Nav Bar -->
   <ul class="nav_ul">
      <li class="nav_li"><a href="./prove03_store.php">Store</a></li>
      <li class="nav_li" style="float: right;"><a id="active" href="#home">My Cart</a></li>
   </ul>
   <br>

   <!-- Basket Balls -->




   <?php if ($_SESSION['totalItems'] > 0) { ?>
      <form action="./checkout.php" method="POST">
         <div id="basketb">
            <?php if ($_SESSION["countbasketb"]) { ?>
               <ul class="cart__item-list">
                  <li class="cart__item">
                  <!-- Check for cookies -->
                  <?php checkCookies('countbasketb');
                  ?>
                     <h1>Basketballs</h1>
                     <h2>Quantity: <?php echo $_SESSION["countbasketb"] ?></h2>
                     <h2>Price: $<?php echo $_SESSION["basketbprice"] ?></h2>
                     <input type="hidden" class="price_totals" name="pricebasketb" id="price_basketb" value="<?php echo $_SESSION['basketbprice']?>">
                     <input class="cart_total" type="hidden" name="countbasketb" id="hiddenbasketb" value="<?php echo $_SESSION["countbasketb"]; ?>" />
                     <input class="btn danger" type="button" value="Delete" onclick="deleteItem('basketb', classIndex++)">

                  </li> 
               </ul>
               <hr>
            <?php } ?>
         </div>
         <!-- Soccer Balls -->
         <div id="sb">

            <?php if ($_SESSION["countsb"]) { ?>
               <ul class="cart__item-list">

                  <li class="cart__item">
                     <h1>Soccerballs</h1>
                     <h2>Quantity: <?php echo $_SESSION["countsb"] ?></h2>
                     <h2>Price: $<?php echo $_SESSION["sbprice"] ?></h2>
                     <input type="hidden" class="price_totals" name="pricesb" id="price_sb" value="<?php echo $_SESSION['sbprice']?>">
                     <input class="cart_total" type="hidden" name="countsb" id="hiddensb" value="<?php echo $_SESSION["countsb"] ?>" />
                     <input class="btn danger" type="button" value="Delete" onclick="deleteItem('sb', classIndex++)">
                  </li>

               </ul>
               <hr>
            <?php } ?>
         </div>
         <!-- VolleyBalls -->
         <div id="vb">
            <?php if ($_SESSION["countvb"]) { ?>
               <ul class="cart__item-list">

                  <li class="cart__item">
                     <h1>Volleyballs</h1>
                     <h2>Quantity: <?php echo $_SESSION["countvb"] ?></h2>
                     <h2>Price: $<?php echo $_SESSION["vbprice"] ?></h2>
                     <input type="hidden" class="price_totals" name="pricevb" id="price_vb" value="<?php echo $_SESSION['vbprice']?>">
                     <input class="cart_total" type="hidden" name="countvb" id="hiddenvb" value="<?php echo $_SESSION["countvb"] ?>" />
                     <input class="btn danger" type="button" value="Delete" onclick="deleteItem('vb', classIndex++)">

                  </li>

               </ul>
               <hr>
            <?php } ?>

         </div>
         <!-- Footballs -->
         <div id="fb">

            <?php if ($_SESSION["countfb"]) { ?>
               <ul class="cart__item-list">

                  <li class="cart__item">
                     <h1>Footballs</h1>
                     <h2>Quantity: <?php echo $_SESSION["countfb"] ?></h2>
                     <h2>Price: $<?php echo $_SESSION["fbprice"] ?></h2>
                     <input type="hidden" class="price_totals" name="pricefb" id="price_fb" value="<?php echo $_SESSION['fbprice']?>">
                     <input class="cart_total" type="hidden" name="countfb" id="hiddenfb" value="<?php echo $_SESSION["countfb"] ?>" />
                     <input class="btn danger" type="button" value="Delete" onclick="deleteItem('fb', classIndex++)">

                  </li>

               </ul>
               <hr>
            <?php } ?>
         </div>
         <!-- Baseballs -->
         <div id="baseb">

            <?php if ($_SESSION["countbaseb"]) { ?>
               <ul class="cart__item-list">

                  <li class="cart__item">
                     <h1>Baseballs</h1>
                     <h2>Quantity: <?php echo $_SESSION["countbaseb"] ?></h2>
                     <h2>Price: $<?php echo $_SESSION["basebprice"] ?></h2>
                     <input type="hidden" class="price_totals" name="pricebaseb" id="price_baseb" value="<?php echo $_SESSION['basebprice']?>">
                     <input class="cart_total" type="hidden" name="countbaseb" id="hiddenbaseb" value="<?php echo $_SESSION["countbaseb"] ?>" />
                     <input class="btn danger" type="button" value="Delete" onclick="deleteItem('baseb', classIndex++)">
                  </li>

               </ul>
               <hr>
            <?php } ?>
         </div>
         <input type="hidden" name="counttotal" id="hiddentotal" value="<?php echo $_SESSION['totalPrice']?>">
         <p class='centered' id="order_total" > <?php echo "Total Price: $" . $_SESSION["totalPrice"] . "<br>"; ?></p>
         <button id="btn_checkout" type="submit">Check Out</button>
      </form>
   <?php } else { ?>
      <h1>No Products in Cart!</h1>
   <?php } ?>









   <!-- List of items -->
   <?php
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
   //print_r();
   ?>
   <!-- <p><script>console.log(orderTotal)</script></p> -->
</body>

</html>