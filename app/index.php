<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Сегоднешная дата</title>
</head>
<body>
	<p>сегоднешная дата согласно серверв 
		
		<?php
			$myArray = array('one', 2 , '3');
			echo date ('l, F jS Y.');
			$myArray[1] = ' he meen ';
			echo $myArray[0];
			echo $myArray[1];
			echo $myArray[2];

		?>
	</p>
	
</body>
</html>