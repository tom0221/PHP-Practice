<?php
	echo 'こんにちは';
	echo 'PHPを学ぼう';
	echo 3+5;

	//変数パターン
	$fruit = 'りんご';
	echo $fruit;

	//変数の値を更新
	$fruit = 'ぶどう';
	echo $fruit;

	//文字列の連結
	echo $fruit.'が好きです';

	//文字列の連結パート２
	$name = 'にんじゃ';
	$name .='わんこ';
	echo $name;

	//変数展開
	$name = 'にんじゃわんこ';
	echo "こんにちは、{$name}さん";

	//if文
	$x = 20;
	if ($x > 10){
		echo '$xは10より大きい';
	}

	$y = 20;
	if ($y == 30){
		echo '$yは30です';
	}else{
		echo '$yは30ではありません';
	}

	//if分を使った条件分岐
	$coin = 0;

	if ($coin == 0){
		echo '表';
	}elseif ($coin == 1){
		echo '裏';
	}else{
		echo 'エラー';
	}

	//switch文を使った条件分岐 おみくじパターン
	$num = 5;
	$remainder = $num % 3;

	switch($remainder){
		case 0:
			echo '大吉です';
			break;
		case 1:
			echo '中吉です';
			break;
		case 2:
			echo '小吉です';
			break;
		default:
			echo '凶です';
	}

	//配列
	$names = array('John', 'Kate', 'Bob');
	echo $names[0];

	//値の追加
	$names[] = 'Mary';
	echo $names[3];

	//値1に上書き
	$names[1] = 'Tom';
	echo $n//配列パターン2
	$colors = array('赤', '青', '黄');
	echo $colors[0];
	$colors[] = '白';
	echo $colors[3];
	$colors[] = 'グリーン';
	echo $colors[4];

	//連想配列
	$user = array(
			'name' => 'わんこ',
			'age' => 14,
			'gender' => 'male'
			);
	echo $user['name'];
	echo $user['gender'];

	//連想配列時、値の追加
	$user['level'] = 'beginner';
	echo $user['level'];

	//連想配列2
	$scores = array(
			'数学' => 70,
			'英語' => 90,
			'国語' => 80
			);
	echo $scores['国語'];

	//値の足し算 5を足す
	$scores['国語'] +=5;
	echo $scores['国語'];

	//繰り返し処理 for文 10まで繰り返す
	for ($i = 1; $i <= 10; $i++){
		echo $i;
		//改行もいれる
		echo '<br>';
	}

	//繰り返し while文
	$i = 50;
	while ($i <= 70){
		echo $i;
		$i++;
		echo '<br>';
	}

	//繰り返し for文　break処理 30になると処理ストップ
	for ($i = 20; $i <= 40; $i++){
		if ($i > 30){
			break;
		}
		echo $i;
		echo '<br>';
	}

	//continue文 2の倍数以外処理する
	for ($i = 1; $i <= 10; $i++){
		if ($i % 2 == 0){
			continue;
		}
		echo $i;
	}

	//foreach文
	$towns = array('Tokyo', 'New York', 'Hong Kong');
	foreach ($towns as $town){
		echo $town.'';
		echo '<br>';
	}

	//foreach書き方(2)
	$colors = array(
		'Apple' => 'Red',
		'Banana' => 'Yellow',
		'Grape' => 'Purple'
	);

	foreach($colors as $key => $value){
		echo $key.':'.$value.'';
	}

	//関数 文字数の出力
	echo strlen ('Progate');

	//文字数の出力 変数版
	$language = 'PHP';
	echo strlen($language);

	//count関数
	$towns = array('東京', '大阪', '京都');
	echo count($towns);
	echo '<br>';

	//ランダム関数
	echo rand(1,4);
	echo '<br>';
	echo rand(5,20);

	//関数の定義と呼び出し
	function hello(){
		echo 'Hello,world!';
	}
	hello();

	//関数定義と足し算 3と5を代入。
	function printSum($num1, $num2){
		echo $num1 + $num2;
	}
	printSum(3,5);

	//関数printRectangleArea定義と、引数設定
	echo '<br>';
	function printRectangleArea($height,$width){
		echo $height*$width;
	}

	printRectangleArea(5,10);
	echo '<br>';
?>

