<?php //Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Store</title>
   <link rel="shortcut icon" type="image/x-icon" href="./public/images/cart2.png" /> <!-- Title icon -->
   <link rel="stylesheet" type="text/css" href="./public/css/prove03_store.css">
   <script type="text/javascript" src="prove03.js"></script>
</head>

<body>
   <?php include("./includes/session_globals.php");
    include("./includes/prove03_nav.php");
   checkCookies('countbasketb');
    
   ?>
   <h3 class="section_title">Available Products</h3>
   <!-- List all Items-->
   <form id="form1" action="./shoppingCart.php" method="POST">

   <div id="div_sports" class="grid">
      <!-- Basketball -->
      <article class="card product-item">
         <header class="card__header">
            <h1 class=product__title">
               Basketball
            </h1>
         </header>
         <div class="card__image">
            <img src="https://images-na.ssl-images-amazon.com/images/I/91PlxEj64%2BL._AC_SL1500_.jpg" alt="basketball">
         </div>
         <div class="card__content">
            <p class=product__description">
            Durable outdoor rubber cover, shipped deflated. Recommeneded PSI of 8. Offical size 7, 29.5"
            </p>
            <br>
            <p> Price $17.99</p>
            <br>
            <input class="cart_total" type="hidden" name="countbasketb" id="hiddenBasketBall" value="<?php if(isset($_SESSION['countbasketb'])){ echo ($_SESSION['countbasketb'] > 0 ?$_SESSION['countbasketb'] : 0 );  }?>"/>
            <input type="button" onclick="addOne('BasketBall')" value="Add to Cart">
         </div>
      </article>
      <!-- Soccerball -->
      <article class="card product-item">
         <header class="card__header">
            <h1 class=product__title">
               Soccerball
            </h1>
         </header>
         <div class="card__image">
            <img src="https://images-na.ssl-images-amazon.com/images/I/61jU4o9laBL._AC_SL1200_.jpg" alt="soccerball">
         </div>
         <div class="card__content">
            <p class=product__description">
            Synthetic leather cover for increased durability, shipped deflated. Recommeneded PSI 8-10. size 4
            </p>
            <br>
            <p> Price $18.99</p>
            <br>
            <input class="cart_total" type="hidden" name="countsb" id="hiddenSoccerBall" value="<?php if(isset($_SESSION['countsb'])){ echo ($_SESSION['countsb'] > 0 ?$_SESSION['countsb'] : 0 );  }?>" />
            <input type="button" onclick="addOne('SoccerBall')" value="Add to Cart">
         </div>
      </article>
      <!-- Volleyball -->
      <article class="card product-item">
         <header class="card__header">
            <h1 class=product__title">
               Volleyball
            </h1>
         </header>
         <div class="card__image">
            <img src="https://images-na.ssl-images-amazon.com/images/I/71ogYJo9UmL._AC_SL1500_.jpg" alt="volleyball">
         </div>
         <div class="card__content">
            <p class=product__description">
            The surface of this beach volleyball is made of delicate PU, which is soft, comfortable, and wear-resistant. Recommeneded PSI of 4-5. size 5
            </p>
            <br>
            <p> Price $16.99</p>
            <br>
            <input class="cart_total" type="hidden" name="countvb" id="hiddenVolleyBall" value="<?php if(isset($_SESSION['countvb'])){ echo ($_SESSION['countvb'] > 0 ?$_SESSION['countvb'] : 0 );  }?>" />
            <input type="button" onclick="addOne('VolleyBall')" value="Add to Cart">
         </div>
      </article>
      <!-- Football -->
      <article class="card product-item">
         <header class="card__header">
            <h1 class=product__title">
               Football
            </h1>
         </header>
         <div class="card__image">
            <img src="https://images-na.ssl-images-amazon.com/images/I/81Q7Gt6RInL._AC_SL1500_.jpg" alt="football">
         </div>
         <div class="card__content">
            <p class=product__description">
            Composite Leather, NFI branded. shipped deflated. Recommeneded PSI of 13. Offical
            </p>
            <br>
            <p> Price $17.99</p>
            <br>
            <input class="cart_total" type="hidden" name="countfb" id="hiddenFootBall" value="<?php if(isset($_SESSION['countfb'])){ echo ($_SESSION['countfb'] > 0 ?$_SESSION['countfb'] : 0 );  }?>" />
            <input type="button" onclick="addOne('FootBall')" value="Add to Cart">
         </div>
      </article>
      <!-- Baseballs -->
      <article class="card product-item">
         <header class="card__header">
            <h1 class=product__title">
               Baseballs
            </h1>
         </header>
         <div class="card__image">
            <img src="https://images-na.ssl-images-amazon.com/images/I/71Rt7dMxzJL._AC_SL1391_.jpg" alt="baseball">
         </div>
         <div class="card__content">
            <p class=product__description">
            Designed for Recreational Use, bag of 12 official league baseballs.
            </p>
            <br>
            <p> Price $17.85</p>
            <br>
            <input class="cart_total" type="hidden" name="countbaseb" id="hiddenBaseBall" value="<?php if(isset($_SESSION['countbaseb'])){ echo ($_SESSION['countbaseb'] > 0 ?$_SESSION['countbaseb'] : 0 );  }?>" />
            <input type="button" onclick="addOne('BaseBall')" value="Add to Cart">
         </div>
      </article>
      <!-- Hidden submit button in order to have the button on the nav link bar. -->
      <input type="submit" id="submit-form" class="hidden" />
   </div>
   </form>
</body>

</html>