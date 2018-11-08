<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=dbroot', 'dbroot', '123321');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}
catch(PDOException $e)
{
	$output = 'Невозможно добавить БД ';
	include 'output.php '; 
	exit();
}
try
{
	$sql = 'CREATE TABLE joke(
		id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		joketext TEXT,
		jpkedata DATA NOT NULL)
		DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
	$pdo->exec($sql);
}
catch(PDOException $e)
{
$output = 'Ошибка при создании таблицы joke: ' . $e->getMessage();
include 'output.php';
exit();
}

$output = 'Таблица joke была успешно создана.';
include 'output.php';