<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Вывод скрипта</title>
</head>
<body>
	<?php echo $output ?>
</body>
</html>
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
		?>