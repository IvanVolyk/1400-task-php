<?php 

$var = implode('', $_GET);
$var_name = implode('', $_POST);
$i = 1;
$plus = $var_name + $i;
$minus = $var_name - $i;

if ( $var == true ) {
	echo $var;
} else {
	echo 'Вы ввели число –&nbsp;' . $var_name . '.<br>';
	echo 'Следующее за числом&nbsp;' . $var_name . '&nbsp;число –&nbsp;' . $plus . '.<br>';
	echo 'Для числа&nbsp;' . $var_name . '&nbsp;предыдущее число –&nbsp;' . $minus . '.';
}

?> 