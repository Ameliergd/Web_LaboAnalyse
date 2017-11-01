<?php
session_start();
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost'); // remplacer 'mysql' par 'localhost'
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'Laboratoire_Analyse');
define("BASE_URL", "http://localhost:8888/Web_LaboAnalyse/"); // Url du projet



function getDB()
{
$dbhost=DB_SERVER;
$dbuser=DB_USERNAME;
$dbpass=DB_PASSWORD;
$dbname=DB_DATABASE;
try {
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

}

function GenderSymbol($gender)
{
  if($gender == 'M') {
      $output = '<span class="icon" style="color:#46d2f4;"><i class="fa fa-mars" aria-hidden="true"></i></span>';
  }
  else
  {
    $output = '<span class="icon" style="color:#ef5fe8;"><i class="fa fa-venus" aria-hidden="true"></i><span>';
  }
  return $output;
}

?>
