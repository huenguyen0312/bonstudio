<?php
$top_services = get_field('top_service', 'option');
?>
<section class="section service">
	<div class="container">
		<h2 class="section__title section__title--white"><span>Các dịch vụ tại Bon Studio</span></h2>
		<div class="slide-wrap">
			<div class="service__list js-service-slider">
				<?php foreach( $top_services as $top_service ): ?>
					<div class="service__item">
						<div class="service__image">
							<img src="<?= $top_service['image']['url'] ?>" alt="" width="300" height="200">
						</div>
						<h3 class="service__title"><?= $top_service['title'] ?></h3>
						<a class="btn service__btn" href="<?= $top_service['link'] ?>">
							<span>CHI TIẾT</span>
							<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.10657 1.10669L7.21313 7.21326L1.10657 13.3198" stroke="white"/>
							</svg>
						</a>
					</div>
				<?php endforeach;?>
			</div>
			<div class="slide__arrow">
				<div class="btn-slide btn-prev"><span>&nbsp;</span></div>
				<div class="btn-slide btn-next"><span>&nbsp;</span></div>
			</div>
		</div>
	</div>
</section>
