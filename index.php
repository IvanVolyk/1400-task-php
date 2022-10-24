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

		<div class="block">
			<h3>1.6. Число π примерно равно 3,1415926. Вывести на экран это число с тремя цифрами в дробной части. Текст '3.142' не использовать.</h3>

			<?php

			$a = 3.1415926;
			$converted = number_format($a, 3);

			?>
			<p><?php echo $converted; ?></p>
		</div>

		<div class="block">
			<h3>1.7. Число e (основание натурального логарифма) приблизительно равно 2,71828. Вывести на экран это число с точностью до десятых. Текст '2.7' не использовать.</h3>

			<?php

			$e = 2.71828;
			$converted = number_format($e, 1);

			?>
			<p><?php echo $converted; ?></p>
		</div>

		<div class="block">
			<h3>1.8. Составить программу вывода на экран числа, вводимого с клавиатуры. Выводимому числу должно предшествовать сообщение «Вы ввели число».</h3>

			<form action="welcome.php" method="get">
				<input type="text" name="Введите число">
				<input type="submit">
			</form>
		</div>

		<div class="block">
			<h3>1.9. Составить программу вывода на экран числа, вводимого с клавиатуры. После выводимого числа должно следовать сообщение «– вот какое число Вы ввели».</h3>

			<form action="welcome1.php" method="get">
				<input type="text" name="Введите ваше число">
				<input type="submit">
			</form>		
		</div>

		<div class="block">
			<h3>1.10. Составить программу, которая запрашивает имя человека и повторяет его на экране.</h3>

			<form action="welcome2.php" method="get">
				<input type="text" name="Введите ваше имя" placeholder="Введите ваше имя">
				<input type="submit">
			</form>		
		</div>

		<div class="block">
			<h3>1.11. Составить программу, которая запрашивает название футбольной команды и  повторяет его на экране со словами «– это чемпион!».</h3>

			<form action="welcome3.php" method="get">
				<input type="text" name="Название футбольной команды" placeholder="Введите название футбольной команды" size="35">
				<input type="submit">
			</form>		
		</div>

		<div class="block">
			<h3>1.12. Напишите программу, в которую вводится имя человека и выводится на экран приветствие в виде слова «Привет», после которого должна стоять запятая, введенное имя и восклицательный знак. После запятой должен стоять пробел, а  перед восклицательным знаком пробела быть не должно.</h3>

			<form action="welcome3.php" method="post">
				<input type="text" name="Имя человека" placeholder="Введите ваше имя" size="25">
				<input type="submit">
			</form>		
		</div>

		<div class="block">
			<h3>1.13. Напишите программу, в  которую вводится целое число, после чего на экран выводится следующее и  предыдущее целое число. Например, при вводе числа 15 на экран должно быть выведено: <br> Вы ввели число – 15.<br> Следующее за числом 15 число – 16. <br> Для числа 15 предыдущее число – 14.</h3>

			<form action="welcome2.php" method="post">
				<input type="text" name="Число" placeholder="Число">
				<input type="submit">
			</form>		
		</div>

		<div class="block">
			<h3>1.14. Составить программу вывода на экран в одну строку трех любых чисел, вводимых с клавиатуры, с двумя пробелами между ними.</h3>

			<form action="welcome4.php" method="post">
				<input type="text" name="Первое Число" placeholder="Введите Первое Число!">
				<input type="text" name="Второе Число" placeholder="Введите Второе Число!">
				<input type="text" name="Третье Число" placeholder="Введите Третье Число!">
				<input type="submit">
			</form>		
		</div>

		<div class="block">
			<h3>1.15. Составить программу вывода на экран в одну строку четырех любых чисел, вводимых с  клавиатуры, с  одним пробелом между ними.</h3>

			<form action="welcome4.php" method="get">
				<input type="text" name="Ваше Первое Число" placeholder="Введите Первое Число!">
				<input type="text" name="Ваше Второе Число" placeholder="Введите Второе Число!">
				<input type="text" name="Ваше Третье Число" placeholder="Введите Третье Число!">
				<input type="text" name="Ваше Четвертое Число" placeholder="Введите Четвертое Число!">
				<input type="submit">
			</form>		
		</div>

		<div class="block">
			<h3>1.16. Составить программу вывода на экран следующей таблицы с информацией:

12 8 a
b   1 c

Примечание
a, b, c  – переменные величины целого типа, значения которых вводятся с  клавиатуры и  должны быть выведены вместо имен величин.</h3>

<form action="welcome5.php" method="post">
	<table border="1" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td>12</td>
			<td>8</td>
			<td><input type="text" name="Значение a" placeholder="a"></td>
		</tr>
		<tr>
			<td><input type="text" name="Значение b" placeholder="b"></td>
			<td>1</td>
			<td><input type="text" name="Значение c" placeholder="c"></td>
		</tr>
	</table>
	<input type="submit" value="Обновить таблицу">
</form>		
</div>

	</div>
</body>
</html>




