// create variables that will hold the order amount for each item. 
var classIndex = 0;



function populateValues() {
   window.onload();

}

/* addOne: This function keeps track of the items that are added to cart and the total items in cart. */
function addOne(product_id) {

   document.getElementById('hidden' + product_id).value++;
   alert("Item Added to Cart");

   const pItems = document.getElementsByClassName('cart_total');
   var itemsInCart = +pItems[0].value + +pItems[1].value + +pItems[2].value + +pItems[3].value + +pItems[4].value;
   //alert(itemsInCart);
   document.getElementById('item_number').innerHTML = itemsInCart;
}


/************************************************************
 *  DELETE ITEM:
 *    This function will hide the section of the product and 
 *    set the number of items for that product to 0;
 *    Then it will update the order total.
 */
function deleteItem(product_id, aNum) {
   document.getElementById("hidden" + product_id).value = 0;
   document.getElementById(product_id).style.display = "none";
   const pTotals = document.getElementsByClassName('price_totals');
   var orderTotal = 0;

   for (i = 0; i <= pTotals.length; i++) {
      if (pTotals[i])
         orderTotal += +pTotals[i].value;
   }

   orderTotal -= +pTotals[aNum].value;
   /* Subtract the amount from the order total and update html */
   pTotals[aNum].value = 0;
   document.getElementById('order_total').innerHTML = orderTotal.toFixed(2);
   document.getElementById('hiddentotal').value = orderTotal.toFixed(2);

   if (!orderTotal) {
      document.getElementById("btn_checkout").style.display = "none";
   }
   document.cookie = product_id;
   //update session variables
}
