<?php 

$var = implode('', $_POST);
$i = 1;
$plus = $var + $i;
$minus = $var - $i;

echo 'Вы ввели число –&nbsp;' . $var . '.<br>';
echo 'Следующее за числом&nbsp;' . $var . '&nbsp;число –&nbsp;' . $plus . '.<br>';
echo 'Для числа&nbsp;' . $var . '&nbsp;предыдущее число –&nbsp;' . $minus . '.';


?> 