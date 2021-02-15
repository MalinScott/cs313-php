<?php
$client = new Clients();
$aClient = array();

//echo getcwd();
//echo var_dump($_POST);
if ($_POST != null) {
   $fname = $_POST['first_name'];
   $lname = $_POST['last_name'];
   $phone = $_POST['phone'];
   $aClient =  $client->findClient($fname, $lname, $phone);
}


$pageTitle = 'View Client';
include './views/includes/header.php';
?>
<link rel="stylesheet" type="text/css" href="./public/stylesheets/clients.css">

</head>

<body>
   <?php include "./views/includes/navBar.php"; ?>

   <div style="height: 95vh" id="main_page">
      <div id="top_div">
         <h1 id="div_header"><?php echo $pageTitle ?></h1>
         <p>Client Details</p>

      </div>
      <div id="footer"></div>
      <div class="search_form">
         <h2>Client Information:</h2>
         <?php if ($aClient != null) { ?>
            <div class="container">
               <ul id="ul_left">
                  <li>
                     <p>First Name: <?php echo $aClient[0]['first_name'] ?></p>
                  </li>
                  <li>
                     <p>Last Name: <?php echo $aClient[0]['last_name'] ?></p>
                  </li>
                  <li>
                     <p>Phone Number: <?php echo $aClient[0]['phone_number'] ?></p>
                  </li>
               </ul>
               <ul id="ul_right">
                  <!-- <li>School Track: <?php echo $aClient[0]['trackID'] ?></li> -->

               </ul>


            </div>
            <form action="./client-edit" method="POST">
               <input name="fname" type="hidden" value="<?php echo $aClient[0]['first_name'] ?>">
               <input name="lname" type="hidden" value="<?php echo $aClient[0]['last_name'] ?>">
               <input name="num" type="hidden" value="<?php echo $aClient[0]['phone_number'] ?>">
               <input type="submit" name="edit" value="Edit">
               <input type="submit" name="delete" value="Delete">
            </form>
         <?php } else { ?>
            Client Not Found!
         <?php } ?>
      </div>
      <!-- <div id="ajax_response"> -->

   </div>
</body>

</html>