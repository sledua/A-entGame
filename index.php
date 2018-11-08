<?php

try{
	$sql = 'CREATE TABLE joke(
		id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		joketext TEXT,
		jpkedata DATA NOT NULL
	) DEFAULT CHARACTER SET utf8 ENGINE=dbroot';
	$pdo->exec($sql);
}
catch(PDOException $e){
$output = 'Ошибка при создании таблицы joke: ' . $e->getMessage();
include 'output.php';
exit();
}

$output = 'Таблица joke была успешно создана.';
include 'output.php';
