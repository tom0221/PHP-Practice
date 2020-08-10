<?php
 	//値の足し算 5を足す
	$scores['国語'] +=5;
	echo $scores['国語'];


	//配列パターン2
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
?>