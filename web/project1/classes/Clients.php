<?php
class Clients extends Dbh{
   
   public function getClients()
   {
      $clientList = array();
      $sql = "SELECT * FROM client";
      $stmt = $this->connect()->query($sql);
       while($row = $stmt->fetch()){
          $clientList[] = $row;
         

      } 
      //var_dump($clientList);
      return $clientList;
      
   }
}