<?php
session_start();
if (!isset($_SESSION['user']))
{
    header('location: login.php');
};

$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,2));

//Pull database credentials from config.ini
include_once(APP_ROOT . '/src/services/database.controller.php');
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
    $controller->indexPage('Admin');
    $data = $controller->fetchAll();
    include_once(APP_ROOT . '/src/views/adminview.php');
}
$conn = null;
?>