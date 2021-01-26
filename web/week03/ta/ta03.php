<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Team Assignment 03</title>
</head>
<body>
   <h2>Simple Form Handling</h2>
   <br>
   <h3>Personal Information</h3>
   <!-- Creat Form and accept user information -->
   <form action="handle_form.php" method="POST">
   <input id="user_name" type="text" name="name" placeholder="Name">
   <input id="user_email" type="text" name="email" placeholder="example@email.com">
   <br>
   <h3>Select Your Major</h3>
   <input id="major_cs" type="radio" name="major" value="Computer Science">
   <label for="major_cs">Computer Science</label><br>
   <input id="major_wdd" type="radio" name="major" value="Web Design and Development">
   <label for="major_wdd">Web Design and Development</label><br>
   <input id="major_cit" type="radio" name="major" value="Computer Information Technology">
   <label for="major_cit">Computer Information Technology</label><br>
   <input id="major_se" type="radio" name="major" value="Software Engineering">
   <label for="major_se">Software Engineering</label><br>
   <textarea id="user_comments" name="comments"  cols="50" rows="5"></textarea><br>
   <h3>Please Select Continents you have been to</h3>
   <input type="checkbox" name="continents[]" id="cont_NA" value="North America">North America <br>
   <input type="checkbox" name="continents[]" id="cont_SA" value="South America">South America <br>
   <input type="checkbox" name="continents[]" id="cont_EU" value="Europe">Europe <br>
   <input type="checkbox" name="continents[]" id="cont_AS" value="Asia">Asia <br>
   <input type="checkbox" name="continents[]" id="cont_AU" value="Australia">Australia <br>
   <input type="checkbox" name="continents[]" id="cont_AF" value="Africa">Africa <br>
   <input type="checkbox" name="continents[]" id="cont_AN" value="Antartica">Antartica <br>
   <input type="submit" value="Submit">

   </form>
</body>
</html>