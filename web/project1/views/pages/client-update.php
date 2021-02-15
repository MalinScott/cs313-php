<?php
$client = new Clients();
$aClient = array();
if ($_POST != null) {
   $newfName = htmlspecialchars($_POST['fname']);
   $newlName = htmlspecialchars($_POST['lname']);
   $newnum = htmlspecialchars($_POST['phone_num']);
   if(!isset($_POST['add'])){
      $oldfName = htmlspecialchars($_POST['old_fname']);
      $oldlName = htmlspecialchars($_POST['old_lname']);
      $oldNum = htmlspecialchars($_POST['old_num']);

   }
   
   if (isset($_POST['delete'])) {
      # delete-button was clicked
      $aClient =  $client->findClient($oldfName, $oldlName, $oldNum);
      $client->deleteClient($aClient);
   } elseif (isset($_POST['update'])) {
      $aClient =  $client->findClient($oldfName, $oldlName, $oldNum);
      $client->editClient($newfName, $newlName, $newnum, $oldfName, $oldlName, $oldNum);
   }
   elseif(isset($_POST['add'])){
      $notes = htmlspecialchars($_POST['notes']);
      $lashType = htmlspecialchars($_POST['lashid']);
      $track = htmlspecialchars($_POST['schoolTrack']);
      $pricing = htmlspecialchars($_POST['pricing']);
      $client->addClient($newfName, $newlName, $newnum, $notes, $lashType, $track, $pricing);
   }
}
else {
   $redirect = "client-list";
   header("Location: $redirect");
   die();
}
