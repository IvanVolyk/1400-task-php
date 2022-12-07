<?php 

$var = implode('&nbsp;&nbsp;', $_POST);
$four_numb = implode('&nbsp;', $_GET);

if ( $var == true ) {
	echo $var;
} else {
	echo $four_numb;
}

?> 