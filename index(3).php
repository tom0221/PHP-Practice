<!-- 表示用ファイル -->

<?php require_once ('data.php'); ?>

<!-- <p>タグの中で、$curryのnameプロパティを表示してください -->
<p><?php echo $curry->name ?></p>

<!-- <p>タグの中で、$pastaのnameプロパティを表示してください -->
<p><?php echo $pasta->name ?></p>

<div class="menu-items">

	<?php foreach ($menus as $menu): ?>
		<div class="menu-item">
			<img src="<?php echo $menu->image ?>">
			<h3 class="menu-item-name"><?php echo $menu->name ?></h3>
          	<!-- <p>タグの中に、$menuのpriceプロパティを表示 -->
        	<p class="price">¥<?php echo $menu->price ?></p>
		</div>
	<?php endforeach ?>

</div>