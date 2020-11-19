// PHP学習コースⅠ

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Progate</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

	<?php
		// 'Hello, world!'をechoしてください
		echo "Hello, world!";
	?>

	<br>

	<?php
		// 7 * 2をechoしてください
		echo 7 * 2;
	?>

	<br>

	<?php
		// 8 % 3をechoしてください
		echo 8 % 3;
	?>

	<!-- この下で5 + 7を出力 -->
	<?php
		echo 5 + 7;
	?>

	<br>

	<!-- この下で'5 + 7'を出力 -->
	<?php
		echo '5 + 7';
	?>

	<!-- この下に変数$fruitを書いていきましょう！ -->
	<?php
		$fruit = "りんご";
		echo $fruit;
	?>

	<br>

	<!-- この下に変数$sumを書いていきましょう！ -->
	<?php
		$sum = 8 + 9;
		echo $sum;
	?>

	<?php

		$x = 5;
		$y = 2;
		$a = 8;
		$b = 4;

	?>

	<!-- この下で$xの計算をしていきましょう -->
	<?php
		$x += 10;
		echo $x;
	?>

	<br>

	<!-- この下で$yの計算をしていきましょう -->
	<?php
		$y *= 5;
		echo $y;
	?>

	<br>

	<!-- この下で$aの計算をしていきましょう -->
	<?php
		$a++;
		echo $a;
	?>

	<br>

	<!-- この下で$bの計算をしていきましょう -->
	<?php
		$b--;
		echo $b;
	?>

</body>
</html>