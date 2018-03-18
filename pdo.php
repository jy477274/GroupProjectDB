<?php


$host = 'localhost';

	$db = 'csgamez';

	$user = 'root';

	$pass = 'Ryanwilbur1';

	$charset = 'utf8mb4';

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	$opt = [

	     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

	     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH,

	     PDO::ATTR_EMULATE_PREPARES => false

	];

	//Check out this page for fetch mode info: https://phpdelusions.net/pdo/fetch_modes

	$pdo = new PDO($dsn, $user, $pass, $opt);

?>
