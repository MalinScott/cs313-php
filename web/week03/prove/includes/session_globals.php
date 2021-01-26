<?php // Delcare all items in the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  (int)$_SESSION["countbasketb"] = $_POST['countbasketb'];
  (int)$_SESSION["countsb"] = $_POST['countsb'];
  (int)$_SESSION["countvb"] = $_POST['countvb'];
  (int)$_SESSION["countfb"] = $_POST['countfb'];
  (int)$_SESSION["countbaseb"] = $_POST['countbaseb'];
  (int)$_SESSION["totalItems"] = ((int)$_SESSION["countbasketb"] + (int)$_SESSION["countsb"] + (int)$_SESSION["countvb"] + (int)$_SESSION["countfb"] + (int)$_SESSION["countbaseb"]);



  $_SESSION["basketbprice"] = ((float)$_SESSION["countbasketb"] * 17.99);
  $_SESSION["sbprice"] = ((float)$_SESSION["countsb"] * 18.99);
  $_SESSION["vbprice"] = ((float)$_SESSION["countvb"] * 16.99);
  $_SESSION["fbprice"] = ((float)$_SESSION["countfb"] * 17.99);
  $_SESSION["basebprice"] = ((float)$_SESSION["countbaseb"] * 17.85);

  $_SESSION["totalPrice"] = ($_SESSION["basketbprice"] + $_SESSION["sbprice"] + $_SESSION["vbprice"] + $_SESSION["fbprice"] + $_SESSION["basebprice"]);
}

function checkCookies($an_id){
  if(isset($_COOKIE[$an_id])){
      $_SESSION[$an_id] = 0;
    }
}
/* 

      $_SESSION["countbasketb"] = ($_POST['countbasketb'] != 0 ?$_POST['countbasketb'] : 0);
      $_SESSION["countsb"] = ($_POST['countsb'] != 0 ?+$_POST['countsb'] : 0);
      $_SESSION["countvb"] = ($_POST['countvb'] != 0 ?+$_POST['countvb'] : 0);
      $_SESSION["countfb"] = ($_POST['countfb'] != 0 ?+$_POST['countfb'] : 0);
      $_SESSION["countbaseb"] = ($_POST['countbaseb'] != 0 ?+$_POST['countbaseb'] : 0);
      $_SESSION["totalItems"] = ($_SESSION["countbasketb"] + $_SESSION["countsb"] + $_SESSION["countvb"] + $_SESSION["countfb"] + $_SESSION["countbaseb"]);


            (int)$_SESSION["countbasketb"] = $_POST['countbasketb'];
      (int)$_SESSION["countsb"] = $_POST['countsb'];
      (int)$_SESSION["countvb"] = $_POST['countvb'];
      (int)$_SESSION["countfb"] = $_POST['countfb'];
      (int)$_SESSION["countbaseb"] = $_POST['countbaseb'];
 */

// Create product - basketball 17.99

// Create product - soccerball 18.99

// Create product - volleyball 16.99

// Create product - football 17.99

// Create product - baseballs 17.85
