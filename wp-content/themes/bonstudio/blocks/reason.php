
<?php
$reasons = get_field('reason', 'option');
?>
<section class="section reason">
	<div class="container">
		<h2 class="section__title"><span>Vì sao nên lựa chọn Bon Studio?</span></h2>
		<div class="reason__list">
			<?php foreach( $reasons as $reason ): ?>
				<div class="reason__item">
					<div class="reason__icon">
						<img src="<?= $reason['icon']['url'] ?>" alt="" width="100" height="100">
					</div>
					<h3 class="reason__title"><?= $reason['title'] ?></h3>
					<p class="reason__description"><?= $reason['description'] ?></p>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>
