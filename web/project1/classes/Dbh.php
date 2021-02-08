<?php
class Dbh
{


   protected function connect()
   {
      // default Heroku Postgres configuration URL
      $dbUrl = getenv('DATABASE_URL');

      if (empty($dbUrl)) {
         // example localhost configuration URL with postgres username and a database called cs313db
         $dbUrl = getenv('HTTP_DATABASE_URL');
      }

      $dbopts = parse_url($dbUrl);

      //print "<p>$dbUrl</p>\n\n";

      $dbHost = $dbopts["host"];
      $dbPort = $dbopts["port"];
      $dbUser = $dbopts["user"];
      $dbPassword = $dbopts["pass"];
      $dbName = ltrim($dbopts["path"], '/');

      //print "<p>pgsql:host=$dbHost;port=$dbPort;dbname=$dbName</p>\n\n";

      try {
         $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
      } catch (PDOException $ex) {
         print "<p>error: $ex->getMessage() </p>\n\n";
         die();
      }

      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $db;
   }
}
