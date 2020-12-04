<?php

$databaseHost 		= '127.0.0.1';
$databaseName 		= 'birauto';
$databaseUsername 	= 'root';
$databasePassword 	= 'root';

try {
	// http://php.net/manual/en/pdo.connections.php
	$connect = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);
	$connect->query("SET NAMES UTF8");
	
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
	// More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
} catch(PDOException $e) {
	echo $e->getMessage();
}
 
?>
