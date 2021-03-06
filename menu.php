<!-- クラス定義用ファイル -->
<?php
class Menu {
	public $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function hello() {
		echo '私は'.$this->name.'です';
	}
}
?>

<!-- endforeach文で繰り返し処理 -->
<?php
$words = array('apple', 'banana', 'orange');
?>
<?php foreach ($words as $word): ?>
	<p><?php echo $word ?></p>
<?php endforeach ?>


<!-- endifを用いたif文 -->
<?php
$age = 24;
?>
<?php if ($age >= 20): ?>
	<p><?php echo 'あなたは成人です' ?></p>
<?php endif ?>


<!-- endforを用いたfor文 -->
<?php for ($i = 0; $i < 10; $i++): ?>
	<p><?php echo $i ?></p>
<?php endfor ?>