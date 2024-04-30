<?php
$config = parse_ini_file('../../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,3));
include_once(APP_ROOT . '/src/services/database.controller.php');

//Pull database credentials from config.ini
$user = $config[$environment]['USERNAME'];
$pass = $config[$environment]['PASSWORD'];
$host = $config[$environment]['HOST'];
$name = $config[$environment]['NAME'];

try
{
	$conn = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $database = new DatabaseService($conn);
} 
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

if (isset($database))
{
  $controller = new DatabaseController($database);
  $controller->indexPage('Banking Website');
  $controller->insertImage('../../media/AWPbank.jpg');
  include_once(APP_ROOT . '/src/views/footerview.php');
}
$conn = null;
?> 