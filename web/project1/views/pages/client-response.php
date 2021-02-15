<?php 
$clients = new Clients();
$clientList = array();

// Sanatize input before sending to DB
function sanitizeString($string){
   $res = preg_replace("/[^a-zA-Z0-9]/", "", $string);
   return $res;
}

//$q = intval($_GET['q']);
$q = $_REQUEST["q"];

$fname = "";
$lname = "";
$phone = 0;

if ($_GET['client'][0]){
   $fname = sanitizeString($_GET['client'][0]);
   
}
if($_GET['client'][1]){
   $lname = sanitizeString($_GET['client'][0]);
}
if ($_GET['client'][2]){
   $phone = sanitizeString($_GET['client'][0]);
}




//$clientList =  $clients->findClient($fname, $lname, $phone);

echo "alert(ajax)";


?>
