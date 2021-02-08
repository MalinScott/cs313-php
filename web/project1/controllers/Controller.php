<?php 
class Controller extends Dbh{
   public static function CreateView($viewName){
      require_once("./views/pages/$viewName.php");
   }
}
?>