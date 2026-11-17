<?php
/*
ЗАДАНИЕ 1
- Создайте константу и присвойте ей значение.
*/
define('SITE_NAME', 'Мой первый сайт на PHP');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<p>
		<?php
		/*
		ЗАДАНИЕ 2
		- Проверьте, существует ли константа, которую Вы хотите использовать.
		- Выведите значение созданной константы.
		*/
		if (defined('SITE_NAME')) {
			echo 'Значение константы: ' . SITE_NAME;
		} else {
			echo 'Константа не определена';
		}
		?>
	</p>
	<p>
		<?php
		/*
		ЗАДАНИЕ 3
		- Используя предопределённые в ядре константы выведите текущую версию PHP.
		- Используя магические константы выведите директорию скрипта.
		*/
		echo 'Текущая версия PHP: ' . PHP_VERSION;
		?>
	</p>
	<p>
		<?php
		echo 'Директория скрипта: ' . __DIR__;
		?>
	</p>
</body>
</html>
