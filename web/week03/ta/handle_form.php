<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Submission</title>
</head>

<body onload="displayComments()">
   Thank you <?php echo $_POST["name"] ?> <br>
   Here is your Information: <br>
   E-Mail: <?php echo $_POST["email"] ?> <br>
   Major: <?php echo $_POST["major"] ?> <br>
   <hr>
   Your Comments: <br>
   <?php echo $_POST["comments"] ?> <br>

   Continents You Have Traveled to: <br>
   <?php
   if (isset($_POST["continents"])) {
      foreach ($_POST["continents"] as $continent) {
         echo "$continent <br>";
      }
   } ?>

</body>

</html>