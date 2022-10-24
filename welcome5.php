<?php 

$var = implode(',', $_POST);

?> 

<form action="welcome5.php" method="post">
	<table border="1" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td>12</td>
			<td>8</td>
			<td><?php echo $var[0]; ?></td>
		</tr>
		<tr>
			<td><?php echo $var[1]; ?></td>
			<td>1</td>
			<td><?php echo $var[2]; ?></td>
		</tr>
	</table>
	<input type="submit" value="Обновить таблицу">
</form>	