	<?php
	$config = parse_ini_file('../config.ini', true);
	$environment = $config['ENVIRONMENT'];
	$URL_BASE = $config[$environment]['URL_BASE'];
	define('URL_ROOT', "$URL_BASE");
	define('APP_ROOT', dirname(__FILE__,2));
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

		session_start();

		if (isset($_SESSION['user']))
		{
			header('location: http://localhost:3000/FinalProj/articles/admin.php');
		}

		if (isset($_POST['first']))
		{
			if ($controller->validateLogin($_POST['first'], $_POST['password']) == true)
			{
				$_SESSION['user']=$_POST['first'];
				header('location: http://localhost:3000/FinalProj/articles/admin.php');
			}
			else
			{
				echo 'Incorrect login and/or password';
			}
		}

		//include_once(APP_ROOT . '/src/views/headview.php');
		include_once(APP_ROOT . '/src/views/loginview.php');
	}
	$conn = null;
	?>