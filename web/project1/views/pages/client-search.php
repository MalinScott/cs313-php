<?php

$pageTitle = 'View Client';
include './views/includes/header.php';

?>
<link rel="stylesheet" type="text/css" href="./public/stylesheets/clients.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="./public/js/client-response.js"></script> -->
</head>

<body>
   <?php include "./views/includes/navBar.php"; ?>

   <div style="height: 95vh" id="main_page">
      <div id="top_div">
         <h1 id="div_header"><?php echo $pageTitle ?></h1>
         <p>Search for a specific client</p>

      </div>
      <div id="footer"></div>
      <div class="search_form">
         <h2>Enter Client Information:</h2>
         <form action="./client-view" method="POST">
            <label for="first_name">First Name</label>
            <input id="first_name" type="text" name="first_name" placeholder="First Name">
            <label for="last_name">Last Name</label>
            <input id="last_name" type="text" name="last_name" placeholder="Last Name">
            <ul>
               <label for="phone">Phone Number</label>
               <li> <input id="phone_num" type="tel" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="555198264"></li>
            </ul>

            <button type="submit">Search</button>
         </form>
      </div>
      <!-- <div id="ajax_response"> -->

   </div>

</body>

</html>