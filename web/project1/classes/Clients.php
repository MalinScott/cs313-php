<?php
class Clients extends Dbh
{

   public function getClients()
   {
      $clientList = array();
      $sql = "SELECT * FROM client";
      $stmt = $this->connect()->query($sql);
      while ($row = $stmt->fetch()) {
         $clientList[] = $row;
      }
      //var_dump($clientList);
      return $clientList;
   }

   public function findClient($fname, $lname, $num)
   {

      // search DB based on user input
      if ($fname) {
         if ($lname) {
            $stmt = $this->connect()->prepare('SELECT * FROM client WHERE first_name=:fname AND last_name=:lname');
            $stmt->bindValue(':fname', $fname, PDO::PARAM_STR);
            $stmt->bindValue(':lname', $lname, PDO::PARAM_STR);
            //var_dump($stmt);
            //var_dump($fname,$lname, $num);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($row);
            if ($row) {
               return $row;
            } else {
               return 0;
            }
         } else {
            $stmt = $this->connect()->prepare('SELECT * FROM client WHERE first_name=:fname');
            $stmt->bindValue(':fname', $fname, PDO::PARAM_STR);
            //var_dump($stmt);
            //var_dump($fname,$lname, $num);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($row);
            if ($row) {
               return $row;
            }
         }
      }
   }

   public function addClient($fname, $lname, $phone, $notes, $lashType, $track, $pricing)
   {
      $newClient = new Clients();

      $aClient = $newClient->findClient($fname, $lname, $phone);

      if ($aClient == null) {
         if ($fname) {
            if ($lname) {
               $stmt = $this->connect()->prepare('INSERT INTO client(first_name, last_name, phone_number, notes, "lashID", "trackID", "pricing_planID")  Values( :firstName, :lastName, :phoneNum, :notes, :lash_id, :track_id, :pricing);');
               $stmt->bindValue(':firstName', $fname, PDO::PARAM_STR);
               $stmt->bindValue(':lastName', $lname, PDO::PARAM_STR);
               $stmt->bindValue(':phoneNum', $phone, PDO::PARAM_STR);
               $stmt->bindValue(':notes', $notes, PDO::PARAM_STR);
               $stmt->bindValue(':lash_id', $lashType, PDO::PARAM_INT);
               $stmt->bindValue(':track_id', $track, PDO::PARAM_INT);
               $stmt->bindValue(':pricing', $pricing, PDO::PARAM_INT);
               //var_dump($stmt);
               //var_dump($fname,$lname, $num);
               $stmt->execute();

               $redirect = "client-list";
               header("Location: $redirect");
               die();
            } else {
               return 0;
            }
         }
      }
   }


   public function deleteClient(array $anArray)
   {
      $newClient = new Clients();
      $temparray = $anArray;
      $aClient = $newClient->findClient($anArray[0], $anArray[1], $anArray[2]);

      if ($aClient != null) {
      } else {
         return 0;
      }
   }

   public function editClient($newfName, $newlName, $newNum, $fname, $lname, $num)
   {
      $newClient = new Clients();

      $aClient = $newClient->findClient($fname, $lname, $num);

      if ($aClient != null) {
         // search DB based on user input
         if ($fname) {
            if ($lname) {
               $stmt = $this->connect()->prepare('UPDATE client SET first_name=:newfName, last_name=:newlName  WHERE first_name=:fname AND last_name=:lname');
               $stmt->bindValue(':newfName', $newfName, PDO::PARAM_STR);
               $stmt->bindValue(':newlName', $newlName, PDO::PARAM_STR);
               $stmt->bindValue(':fname', $fname, PDO::PARAM_STR);
               $stmt->bindValue(':lname', $lname, PDO::PARAM_STR);
               //var_dump($stmt);
               //var_dump($fname,$lname, $num);
               $stmt->execute();

               $redirect = "client-list";
               header("Location: $redirect");
               die();
            }
         } else {
            return 0;
         }
      }
   }
}
