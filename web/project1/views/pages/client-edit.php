<?php
$client = new Clients();
$aClient = array();

//echo getcwd();
echo var_dump($_POST);
if ($_POST != null) {
   $fname = htmlspecialchars($_POST['fname']);
   $lname = htmlspecialchars($_POST['lname']);
   $phone = htmlspecialchars($_POST['num']);
   $aClient =  $client->findClient($fname, $lname, $phone);
   if (isset($_POST['delete'])) {
      # delete-button was clicked
      //$client->deleteClient($fname, $lname, $phone);
  }

}


$pageTitle = 'Edit Client';
include './views/includes/header.php';
?>
<link rel="stylesheet" type="text/css" href="./public/stylesheets/clients.css">

</head>

<body>
   <?php include "./views/includes/navBar.php"; ?>

   <div style="height: 95vh" id="main_page">
      <div id="top_div">
         <h1 id="div_header"><?php echo $pageTitle ?></h1>
         <p>Client Information</p>

      </div>
      <div id="footer"></div>
      <div class="search_form">
         <h2>Client Information:</h2>
         <?php if ($aClient != null) { ?>
            <form action="./client-update" method="POST">
            <div class="container">
               <ul id="ul_left">
                  <li>
                     <p>First Name: </p>
                     <input type="text" name="fname" placeholder="<?php echo $aClient[0]['first_name'] ?>">
                  </li>
                  <li>
                     <p>Last Name: </p>
                     <input type="text" name="lname" placeholder="<?php echo $aClient[0]['last_name'] ?>">
                  </li>
                  <li>
                     <p>Phone Number: </p>
                     <input type="text" name="phone_num" placeholder="<?php echo $aClient[0]['phone_number'] ?>">
                  </li>
               </ul>
               <ul id="ul_right">
                  

               </ul>


            </div>
            
            <input name="old_fname" type="hidden" value="<?php echo $aClient[0]['first_name'] ?>">
               <input name="old_lname" type="hidden" value="<?php echo $aClient[0]['last_name'] ?>">
               <input name="old_num" type="hidden" value="<?php echo $aClient[0]['phone_number'] ?>">
               <input type="submit" name="update" value="Update">
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