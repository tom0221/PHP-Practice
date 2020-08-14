<!-- PHP学習コースⅡ -->

<?php
// Menuクラスを定義しましょう
class Menu{
  public $name;

  //コンストラクタ new MENU()メソッドで自動的に呼ばれ表示される
  public function __construct(){
  	echo '1つのメニューが作成されました';
  }

  //メソッド
  public function hello(){
  	// echo '私はMenuクラスのインスタンスです';
  	echo '私の名前は'.$this->name.'です';
  }
}


$curry = new Menu();
$pasta = new Menu();

$curry->name = 'CURRY';
$pasta->name = 'PASTA';
echo $curry->name;

echo '<br>';

echo $pasta->name;

// $curry $pastaに対してhelloメソッドを呼び出してください
$curry->hello();
$pasta->hello();

?>