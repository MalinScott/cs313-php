<?php
$clients = new Clients();
$clientList = array();
 $clientList =  $clients->getClients();
//echo getcwd();
$pageTitle = 'Client List';
include './views/includes/header.php';
?>
<link rel="stylesheet" type="text/css" href="./public/stylesheets/clients.css">


</head>

<body>
   <?php include "./views/includes/navBar.php"; ?>
   <main>

      <div id="main_page">
         <div id="top_div">
            <h1 id="div_header">Client List</h1>
            <p>List of all clients</p>
         </div>
         <?php if (sizeof($clientList) > 0) { ?>
            <div class="grid">
               <ul class="client_list">
                  <?php foreach ($clientList as $row) { ?>
                     <li class="client_row">
                        <h1><?php echo "Client: " . $row['first_name'] . " " . $row['last_name'] ?></h1>
                        <ul class="clients_details">
                           <li class="clients_details-item"><?php echo "ID: " . $row['id'] ?></li>
                           <li class="clients_details-item"><?php echo "Phone #: " . $row['phone_number'] ?></li>
                        </ul>

                     </li>
                  <?php } ?>
               </ul>

            </div>
         <?php } else { ?>
            <h1>No Clients Found!</h1>
         <?php } ?>
   </main>
</body>

</html>