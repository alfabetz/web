<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My first project</title>

	<style>
	table, table td{
		border: 1px solid grey;
	}
	table td {
		padding: 10px;
	}
	</style>
</head>
<body>
<header><a href="/">Home</a></header>
<nav>
	<ul>
		<li><a href="lesson1.php">урок 1</a></li>
		<li><a href="lesson2.php">урок 2</a></li>
		<li><a href="lesson3.php">урок 3</a></li>
	</ul>
</nav>
<main>
	<table>
		<tr>
		<?php for ($x = 1; $x <= 10; $x++) { ?>
		<td>
			<?php for ($z = 1; $z <= 10; $z++) { ?>
			<?php echo colorize($x) ?> x <?php echo colorize($z) ?> = <?php echo colorize($x*$z) ?><br>
			<?php } ?>
		</td>
		<?php
				if($x % 5 == 0) echo '</tr>';
				if($x % 5 == 0 && $x != 10) echo '<tr>';
			}
		?>
		</tr>
	</table>
	<?php
		function colorize($number) {
			$colors = array('gold', 'red', 'green', 'yellow', 'blue', 'grey', 'purple', 'orange', 'brown', 'GreenYellow');
			$str = (string)$number;
			$len = strlen($str);
			$result = '';

			for($i = 0; $i < $len; $i++) {
				$result .= '<span style="color:'. $colors[$str[$i]] .'">'. $str[$i] .'</span>';
			}
			
			return $result;
		}
	?>
</main>
<footer></footer>
</body>
</html>
