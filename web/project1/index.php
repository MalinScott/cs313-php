<?php 



function my_autoloader($class_name) {
   if(file_exists('./classes/' . $class_name . '.php')){
      require_once './classes/' . $class_name . '.php';
      
   } elseif (file_exists('./controllers/' . $class_name . '.php')){
      require_once './controllers/' . $class_name . '.php';
   }
}

spl_autoload_register('my_autoloader');
require_once('./controllers/index.php');
require_once('./controllers/clientList.php');
require_once('./controllers/clientSearch.php');
require_once('./routes/Routes.php');

?>