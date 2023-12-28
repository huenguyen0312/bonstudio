<?php
$argsAlbum = array(
	'post_type' => 'album',
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => 6,
	'offset'         => 1,
);

$album_query = new WP_Query( $argsAlbum );
if($album_query->have_posts()): ?>
	<section class="section album">
		<div class="container">
			<h2 class="section__title"><span>Album ảnh đẹp</span></h2>
			<ul class="album__list">
				<?php while($album_query->have_posts()): $album_query->the_post(); ?>
					<li class="album__item js-show-album-slider" data-micromodal-trigger="showAlbumSlider" data-index="0">
						<div class="album__image">
							<img src="<?= get_the_post_thumbnail_url() ?>" alt="" width="330" height="250">
						</div>
					</li>
				<?php endwhile;
				wp_reset_postdata();
				?>

			</ul>
			<a class="btn album__btn" href="/album/">
				<span>XEM THÊM</span>
				<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.10657 1.10669L7.21313 7.21326L1.10657 13.3198" stroke="white"/>
				</svg>
			</a>
		</div>
	</section>

	<div class="modal micromodal micromodal-slide" id="showAlbumSlider" aria-hidden="true">
		<div class="modal__overlay" tabindex="-1">
			<button class="modal__close" aria-label="Close modal" data-micromodal-close tabindex="0">
				<img src="<?= $images ?>/top/icon-close.svg" alt="" width="28" height="28">
			</button>
			<div class="modal__container scrollable" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
				<header class="modal__header">
				</header>
				<div class="modal__content" id="modal-1-content">
					<ul class="album-slider ">
						<?php while($album_query->have_posts()): $album_query->the_post(); ?>
							<li class="album-slider__item">
								<div class="album__image">
									<img src="<?= get_the_post_thumbnail_url() ?>" alt="">
								</div>
							</li>
						<?php endwhile;
						wp_reset_postdata();
						?>
					</ul>
				</div>
			</div>
			<div class="slide__arrow">
				<div class="btn-slide btn-prev"><span>&nbsp;</span></div>
				<div class="btn-slide btn-next"><span>&nbsp;</span></div>
			</div>
		</div>
	</div>
<?php endif; ?>
