<?php ob_start();

session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "products");

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "ozrose_db";
 $connection = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $connection -> error);

require_once("functions.php");
require_once("cart.php");

?>