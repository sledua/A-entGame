<?php
if(!isset($_REQUEST['firstname']))
{
	include 'index.html';
}
else
{
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	if($firstname == 'Kevin' and $lastname == 'Yank')
	{
		$output = 'Добро пожаловать на наш серввер ';
	}
	else
	{
		$output = 'Добро пожаловать ' .
		htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
		htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
	}
	include 'welcome.html';
}