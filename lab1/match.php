<?php
$day = date('N');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Дни недели — match</title>
</head>
<body>
	<h1>Дни недели (match)</h1>
	<p>
		<?php
		// Блок 1: Только число (1-7)
		echo match ((int)$day) {
			1 => 1,
			2 => 2,
			3 => 3,
			4 => 4,
			5 => 5,
			6 => 6,
			7 => 7,
			default => 'Неизвестный день',
		};
		?>
	</p>
	<p>
		<?php
		// Блок 2: С маленькой буквы
		echo match ((int)$day) {
			1 => 'понедельник',
			2 => 'вторник',
			3 => 'среда',
			4 => 'четверг',
			5 => 'пятница',
			6 => 'суббота',
			7 => 'воскресенье',
			default => 'Неизвестный день',
		};
		?>
	</p>
	<p>
		<?php
		// Блок 3: С большой буквы
		echo match ((int)$day) {
			1 => 'Понедельник',
			2 => 'Вторник',
			3 => 'Среда',
			4 => 'Четверг',
			5 => 'Пятница',
			6 => 'Суббота',
			7 => 'Воскресенье',
			default => 'Неизвестный день',
		};
		?>
	</p>
</body>
</html>
