<?php

$pageTitle = 'Client Search';
include './views/includes/header.php';

?>
<link rel="stylesheet" type="text/css" href="./public/stylesheets/clients.css">

</head>

<body>
   <?php include "./views/includes/navBar.php"; ?>

   <div style="height: 95vh" id="main_page">
      <div id="top_div">
         <h1 id="div_header">Client Search</h1>
         <p>Search for a specific client</p>

      </div>
      <div id="footer"></div>
      <div class="search_form">
         <h2>Enter Client Information:</h2>
         <form action="">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" placeholder="First Name">
            <label for="first_name">Last Name</label>
            <input type="text" name="last_name" placeholder="Last Name">
            <ul>
               <label for="phone">Phone Number</label>
               <li> <input type="tel" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="555198264"></li>
            </ul>

            <button type="submit">Search</button>
         </form>
      </div>


</body>

</html>