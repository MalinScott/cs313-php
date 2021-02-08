<?php

$pageTitle = 'Keep Track';
include './views/includes/header.php';
?>


</head>

<body>
   <?php include "./views/includes/navBar.php"; ?>

   <div style="height: 95vh" id="main_page">
      <div id="top_div">
         <h1 id="div_header">Keep Track</h1>
         <p>Keep track of your client records</p>
      </div>

      <div id="flex_divs">
         <a class="a_button" href="client-list"><div class="div_button" >View All Clients</div></a>
         <a class="a_button" href="client-search"><div class="div_button" >Search for a Client</div></a>
         <a class="a_button" href="add-clients"><div class="div_button">Add Client</div></a>

      </div>
   </div>

   <div id="footer"></div>

</body>

</html>