<?php 
try{
	$pdo = new PDO('mysql:host=localhost;dbname=dbroot','dbroot','123321');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"'); 
}
catch(PDOException $e)
{
	$output = 'Невозможно подключится к БД';
	include 'output.php ' . $e->getMessage();
	exit;
}	
$output = 'Соединение с базой данных установлено.';
include 'output.php';