<?php
$images = get_template_directory_uri() . "/assets/images";
?>
<section class="keyvisual">
	<div class="keyvisual__container">
		<div class="slider js-slider-keyvisual">
			<div class="slider__item">
				<picture>
					<source media='(max-width: 767px)', srcset='<?= $images ?>/top/kv-01.png'>
					<source media='(min-width: 768px)', srcset='<?= $images ?>/top/kv-01.png'>
					<img src="<?= $images ?>/top/kv-01.png" alt="" width="1280" height="700">
				</picture>
			</div>
			<div class="slider__item">
				<picture>
					<source media='(max-width: 767px)', srcset='<?= $images ?>/top/kv-02.png'>
					<source media='(min-width: 768px)', srcset='<?= $images ?>/top/kv-02.png'>
					<img src="<?= $images ?>/top/kv-02.png" alt="" width="1280" height="700">
				</picture>
			</div>
			<div class="slider__item">
				<picture>
					<source media='(max-width: 767px)', srcset='<?= $images ?>/top/kv-03.png'>
					<source media='(min-width: 768px)', srcset='<?= $images ?>/top/kv-03.png'>
					<img src="<?= $images ?>/top/kv-03.png" alt="" width="1280" height="700">
				</picture>
			</div>
		</div>
		<div class="slick-slider-dots"></div>
	</div>
</section>
