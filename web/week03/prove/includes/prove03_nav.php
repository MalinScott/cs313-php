
<ul>
  <li><a class="active" href="#home">Store</a></li>
  <li class="cart_image"><input type="image" name="submit" src="./public/images/cart2.png" form="form1"></li>
  <p class='centered' id="item_number"><?php if(isset($_SESSION['totalItems'])){ echo ((int)$_SESSION['totalItems'] > 0 ? (int)$_SESSION['totalItems'] : 0 );  }?></p>
  <!-- <li class="cart_image"><a href="../shoppingCart.php">
  <img  src="./public/images/cart2.png" alt="shopping cart"></a></li> -->
</ul>