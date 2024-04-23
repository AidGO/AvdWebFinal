<?php
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
define('URL_ROOT', "$URL_BASE");
define('APP_ROOT', dirname(__FILE__,1));
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
	echo "Connected Successfully", PHP_EOL;
  $database = new DatabaseService($conn);
} 
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

if (isset($database))
{
  $controller = new DatabaseController($database);
}

  $data = 
  [
    'pageTitle' => 'Aiden Olsen',
    'stylesheet' => 'HomePage.css',
    'articles' => 
    [
    [
      'title' => "Why am I taking this class?",
      'content' => "I am taking this class to learn more about how to create complex websites that function properly."
    ],
    [
      'title' => "What do I want to take away from this class?",
      'content' => "I want to be able to create proper user interfaces that both show strengh in style and functionality."
    ]
    ]
  ];

include_once('src/views/headview.php');
include_once('src/views/mainview.php');
$conn = null;
?>