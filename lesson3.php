<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My first project</title>
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
	<?php
		function mb_strrev($str){
			$r = '';
			for ($i = mb_strlen($str); $i>=0; $i--) {
				$r .= mb_substr($str, $i, 1);
			}
			return $r;
		}

		$text = isset($_POST['text']) ? (string) $_POST['text'] : NULL;
		if($text) {
			echo mb_strrev($text);
	?>
		<br><button onclick="window.history.back()">назад</button>
	<?php } else { ?>
	<form action="/lesson3.php" method="post">
		<input type="text" name="text" value="Привет NIX Education">
		<input type="submit" value="отправить">
	</form>
	<?php } ?>
</main>
<footer></footer>
</body>
</html>
