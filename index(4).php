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

	<?php
		$name = 'にんじゃわんこ';
		// 'こんにちは！'という文字列と$nameを連結してechoしてください
		echo "こんにちは！".$name;
	?>

	// 6.if文基本

	<?php
		$x = 99 * 99;
		$y = 77 * 77;

		// ここにif文を書いていきましょう
		if ($x > 9800) {
			echo "変数xは9800より大きいです。";
		}
		if ($y > 6000) {
			echo "変数yは6000より大きいです。";
		}
	?>

	// 7.else文

	<?php
		// $ageという変数に自分の年齢を代入してください
		$age = 28;

		if ($age >= 30) {
			echo "あなたは30歳以上です。";
		} else {
			echo "あなたは30歳未満です。";
		}
	?>

			<?php
		$x = 1071;

		// 以下にif-elseif-else文を書いてください
		if ($x % 3 == 0 && $x % 7 == 0) {
			echo 'xは3の倍数かつ7の倍数です。';
		} elseif ($x % 3 == 0) {
			echo 'xは3の倍数ですが7の倍数ではありません。';
		} elseif ($x % 7 == 0) {
			echo 'xは7の倍数ですが3の倍数ではありません。';
		} else {
			echo 'xは7の倍数でも3の倍数でもありません。';
		}
	?>

</body>
</html>