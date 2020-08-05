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

?>

