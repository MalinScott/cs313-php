<?php 



function my_autoloader($class_name) {
   if(file_exists(__DIR__ . './classes/' . $class_name . '.php')){
      require_once __DIR__ . './classes/'. $class_name . '.php';
      
   } 
   if (file_exists(__DIR__ . './controllers/' . $class_name . '.php')){
      require_once __DIR__ . './controllers/' . $class_name . '.php';
   }
}

spl_autoload_register('my_autoloader');
//require_once('./controllers/index.php');
//require_once('./controllers/ClassList.php');
//require_once('./controllers/ClassSearch.php');
require_once('./routes/Routes.php');

?>