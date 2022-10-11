<?php 

$var = implode('', $_GET);
$var_name = implode('', $_POST);

if ( $var == true ) {
	echo $var . '&nbsp;– это чемпион!';
} else {
	echo 'Привет,&nbsp;' . $var_name . '!';
}

?> 