<?php

$pageTitle = 'Add Client';
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
         <p>Add a Client to the Database</p>

      </div>
      <div id="footer"></div>
      <div class="search_form">
         <h2>Enter Client Information:</h2>
         <form action="./client-update" method="POST">
            <label for="fname">First Name</label>
            <input id="fname" type="text" name="fname" placeholder="First Name">
            <label for="lname">Last Name</label>
            <input id="lname" type="text" name="lname" placeholder="Last Name">
            <div class="">
               <ul>
                  <label for="phone_num">Phone Number</label>
                  <li> <input id="phone_num" type="tel" name="phone_num" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="555198264"></li><br>
                  <label for="notes">Enter Client Notes</label><br>
                  <li><textarea name="notes" id="client_notes" cols="30" rows="10"></textarea></li>
               </ul>
               <ul class="dropdown">

                  <li>

                     Lash Type:
                     <select name="lashid" id="lash">
                        <option value="1">Classic</option>
                        <option value="2">Hybrid</option>
                        <option value="3">Volume</option>
                     </select>
                  </li>
                  <li>
                     School Track:
                     <select name="schoolTrack" id="track">
                        <option value="1">Fall/Winter</option>
                        <option value="2">Fall/Spring</option>
                        <option value="3">Winter/Spring</option>
                     </select>
                  </li>
                  <li>
                     Pricing Plan:
                     <select name="pricing" id="pricePlan">
                        <option value="1">Old</option>
                        <option value="2">Current</option>
                        <option value="3">New</option>

                     </select>
                  </li>

               </ul>

            </div>

            <button type="submit" name="add">Add Client</button>
         </form>
      </div>
      <!-- <div id="ajax_response"> -->

   </div>

</body>

</html>