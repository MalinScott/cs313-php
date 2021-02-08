<?php // Delcare all items in the session





class Product {
   public $name;
   public $description;
   public $price;
   public $image;

   function __construct($aName, $aDescription, $aPrice, $anImage) {
      $this->name = $aName; 
      $this->description = $aDescription;
      $this->price = $aPrice;
      $this->image = $anImage; 

    }
    function set_description($aDescription){
      $this->description = $aDescription;
    }
}




// Create product - basketball
$basketball = new Product("BasketBall","",17.99,"");
$basketball->description = "Durable outdoor rubber cover, shipped deflated. Recommeneded PSI of 8. Offical size 7, 29.5\"";
$basketball->image = "https://images-na.ssl-images-amazon.com/images/I/91PlxEj64%2BL._AC_SL1500_.jpg";

// Create product - soccerball
$soccer = new Product("Soccerball","",18.99,"");
$soccer->description = "Synthetic leather cover for increased durability, shipped deflated. Recommeneded PSI 8-10. size 4";
$soccer->image = "https://images-na.ssl-images-amazon.com/images/I/61jU4o9laBL._AC_SL1200_.jpg";

// Create product - volleyball
$volleyball = new Product("Volleyball","",16.99,"");
$volleyball->description = "The surface of this beach volleyball is made of delicate PU, which is soft, comfortable, and wear-resistant. Recommeneded PSI of 4-5. size 5";
$volleyball->image = "https://images-na.ssl-images-amazon.com/images/I/71ogYJo9UmL._AC_SL1500_.jpg";

// Create product - football
$football = new Product("Football","",17.99,"");
$football->description = "Composite Leather, NFI branded. shipped deflated. Recommeneded PSI of 13. Offical";
$football->image = "https://images-na.ssl-images-amazon.com/images/I/91MvyMn3UpL._AC_SL1500_.jpg";

// Create product - baseballs
$baseball = new Product("Baseballs","",17.85,"");
$baseball->description = "Designed for Recreational Use, bag of 12 official league baseballs.";
$baseball->image = "https://images-na.ssl-images-amazon.com/images/I/71Rt7dMxzJL._AC_SL1391_.jpg";


?>
