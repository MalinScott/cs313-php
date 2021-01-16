<!DOCTYPE html>
<html>

<head>
   <?php include("../web/includes/header.php");
   ?>
   <link rel="stylesheet" type="text/css" href="./public/stylesheets/hobbies.css">

</head>

<body>
   <?php include("../web/includes/nav.php");
   ?>
   <br>
   <div class="top">
      <h1 class="center_txt">Scott's CSE:341 Projects Home Page</h1>
      <hr class="hr_top">
   </div>
   <br>

   <div class="middle">
      <h2 class="center_txt">About Me</h2>
      <hr class="hr_mid">
      <!-- Hobbies I Enjoy -->
      <h3 class="section_title">Hobbies I Enjoy</h3>
      <div class="grid">
         <article class="card hobby-item">
            <header class="card__header">
               <h1 class="hobby__title">
                  Fishing
               </h1>
            </header>
            <div class="card__image">
               <img src="./public/images/fishing.jpg" alt="fishing">
            </div>
            <div class="card__content">
               <p class="hobby__description">
                  Nothing like catching a large salmon!
               </p>
            </div>
         </article>
         <article class="card hobby-item">
            <header class="card__header">
               <h1 class="hobby__title">
                  Camping
               </h1>
            </header>
            <div class="card__image">
               <img src="./public/images/camping.jpg" alt="camping">
            </div>
            <div class="card__content">
               <p class="hobby__description">
                  Being in nature brings peace to the soul
               </p>
            </div>
         </article>
         <article class="card hobby-item">
            <header class="card__header">
               <h1 class="hobby__title">
                  Games
               </h1>
            </header>
            <div class="card__image">
               <img src="./public/images/games.jpg" alt="gamming">
            </div>
            <div class="card__content">
               <p class="hobby__description">
                  Whether its a board, card, or video game I love playing them all!
               </p>
            </div>
         </article>
      </div>

      <!-- Sports I Like -->
      <h3 class="section_title">Sports I Like</h3>
      <div id="div_sports" class="grid">
         <article class="card hobby-item">
            <header class="card__header">
               <h1 class="hobby__title">
                  Basketball
               </h1>
            </header>
            <div class="card__image">
               <img src="./public/images/bb.jpg" alt="basketball">
            </div>
            <div class="card__content">
               <p class="hobby__description">
                  "Chilling out, maxing, relaxing all cool
                  And all shooting some b-ball outside of the school"
               </p>
            </div>
         </article>
         <article class="card hobby-item">
            <header class="card__header">
               <h1 class="hobby__title">
                  Soccer
               </h1>
            </header>
            <div class="card__image">
               <img src="./public/images/soccer.jpg" alt="soccer">
            </div>
            <div class="card__content">
               <p class="hobby__description">
                  Not good at it, but it's fun to play!
               </p>
            </div>
         </article>
      </div>
   </div>


</body>

</html>