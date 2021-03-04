<?php 
date_default_timezone_set("Asia/Bangkok");

error_reporting(-1);
ini_set('display_errors', 'On');

// If you installed via composer, just use this code to require autoloader on the top of your projects.
// require 'vendor/autoload.php';
require("Medoo.php");
 
// Using Medoo namespace
use Medoo\Medoo;
 
$db = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'hotel',
	'server' => 'localhost',
	'username' => 'root',
    'password' => '',
    "charset" => "utf8",
]);

?>