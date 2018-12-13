<div class="books index">
	<h2><?php echo __('Sách mới'); ?></h2>
	<h4> <?= $this->Html->link('Xem thêm', '/sach-moi') ?> </h4>
	<?php //pr($books); ?>
	<?php foreach ($books as $book): ?>
		<?php echo $book['Book']['title']; ?> <br>
		<?= $this->Html->image($book['Book']['image'], array('width'=>'140px', 'height' => '200px'))  ?> <br>
		Giá bán:<?= $this->Number->currency($book['Book']['sale_price'], ' VND', array('places' => 0, 'wholePosition' => 'after'))  ?> <br>
		<?php foreach ($book['Writer'] as $writer) 
			echo $writer['name'].' ';
		?>
		<br>
		<br>
		<hr>
		<br>
	<?php endforeach ?>
</div>