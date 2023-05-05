<?php
$note = get_field('note');
?>

<?php if($note && $note != '') : ?>
	<div class="notes">
		<p class="note__title">Lưu ý</p>
		<p class="note__description">
			<?= nl2br($note) ?>
		</p>
	</div>
<?php endif;?>
