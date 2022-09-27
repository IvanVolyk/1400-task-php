<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Решение задач по книге “1 400 задач по программированию” Д. Златопольский</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
	<div class="container">
		<h1>Решение задач по книге “1 400 задач по программированию” Д. Златопольский</h1>
		<h2>Глава 1. Вывод информации на экран</h2>

		<div class="block">
			<h3>1.1. Вывести одной строкой чисел 9, 23 и 14 с одним пробелом между ними. Текст '9 23 14' использовать запрещено.</h3>
			<?php

			$a = 9;
			$b = 23;
			$c = 14;

			?>
			<p><?php echo $a . ' ' . $b . ' ' . $c;?></p>
		</div>

		<div class="block">
			<h3>1.2. Вывести на одной строке числа 234, 12 и 63 с двумя пробелами между ними. Текст '234 12 63' не использовать.</h3>
			<?php

			$a = 234;
			$b = 12;
			$c = 63;

			?>
			<p><?php echo $a . '&nbsp;&nbsp;' . $b . '&nbsp;&nbsp;' . $c; ?></p>
		</div>

		<div class="block">
			<h3>1.3. Вывести на экран числа 1 и 2 одно под другим.</h3>
			<?php

			$a = 1;
			$b = 2;

			?>
			<p><?php echo $a . '<br>' . $b; ?></p>
		</div>

		<div class="block">
			<h3>1.4. Вывести на экран числа 1, 2 и 3 одно под другим.</h3>
			<?php

			$a = 1;
			$b = 2;
			$c = 3;

			?>
			<p><?php echo $a . '<br>' . $b . '<br>' . $c; ?></p>
		</div>

		<div class="block">
			<h3>1.5. Получить на экране следующее:</h3>
			<br>
			<h3>11</h3>
			<br>
			<h3>12</h3>
			<br>

			<?php

			$a = 11;
			$b = 12;

			?>
			<p><?php echo '<br>' . $a . '<br>' . '<br>' . $b . '<br>' ?></p>
		</div>

	</div>

	




</body>
</html>




