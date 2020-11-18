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

</body>
</html>