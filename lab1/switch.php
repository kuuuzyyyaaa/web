<?php
$day = date('N');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Дни недели — switch</title>
</head>
<body>
	<h1>Дни недели (switch)</h1>
	<p>
		<?php
		// Блок 1: Только число (1-7)
		switch ($day) {
			case 1:
				echo 1;
				break;
			case 2:
				echo 2;
				break;
			case 3:
				echo 3;
				break;
			case 4:
				echo 4;
				break;
			case 5:
				echo 5;
				break;
			case 6:
				echo 6;
				break;
			case 7:
				echo 7;
				break;
			default:
				echo 'Неизвестный день';
		}
		?>
	</p>
	<p>
		<?php
		// Блок 2: С маленькой буквы
		switch ($day) {
			case 1:
				echo 'понедельник';
				break;
			case 2:
				echo 'вторник';
				break;
			case 3:
				echo 'среда';
				break;
			case 4:
				echo 'четверг';
				break;
			case 5:
				echo 'пятница';
				break;
			case 6:
				echo 'суббота';
				break;
			case 7:
				echo 'воскресенье';
				break;
			default:
				echo 'неизвестный день';
		}
		?>
	</p>
	<p>
		<?php
		// Блок 3: С большой буквы
		switch ($day) {
			case 1:
				echo 'Понедельник';
				break;
			case 2:
				echo 'Вторник';
				break;
			case 3:
				echo 'Среда';
				break;
			case 4:
				echo 'Четверг';
				break;
			case 5:
				echo 'Пятница';
				break;
			case 6:
				echo 'Суббота';
				break;
			case 7:
				echo 'Воскресенье';
				break;
			default:
				echo 'Неизвестный день';
		}
		?>
	</p>
</body>
</html>
