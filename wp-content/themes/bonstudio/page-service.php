<?php
/**
 * Template Name: Service
 */

get_header();
$images = get_template_directory_uri() . '/assets/images';

$posts = new WP_Query(array(
	'post_type' => 'service',
));

?>
	<main class="main" role="main">
		<section class="sub-keyvisual">
			<div class="sub-keyvisual__container">
				<div class="sub-keyvisual__image">
					<picture>
						<source media='(max-width: 767px)', srcset='<?= $images ?>/service/kv.png'>
						<source media='(min-width: 768px)', srcset='<?= $images ?>/service/kv.png'>
						<img src="<?= $images ?>/service/kv.png" alt="" width="1280" height="700">
					</picture>
				</div>
			</div>
		</section>

		<section class="section product-section">
			<div class="container">
        <?php if ($posts->have_posts()) { ?>
				<div class="product-group">
          <?php while ($posts->have_posts()) {
            $posts->the_post(); ?>
					<div class="product-group__item">
						<h2 class="product-group__name"><?= get_the_title() ?></h2>
            <?php $services = get_field('service'); ?>
	          <?php if( $services ): ?>
						<ul class="product__list">
		          <?php foreach( $services as $service ): ?>
							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $service['image'] ?>" alt="">
									</div>
									<h3 class="product__name"><?= $service['name'] ?></h3>
									<p class="product__price">
										<span><?= number_format($service['new_price']) ?>&nbsp;đ</span>

			              <?php if($service['old_price'] && $service['old_price'] != '') : ?>
                    <del><?= number_format($service['old_price']) ?>&nbsp;đ</del>
	                  <?php endif; ?>

                  </p>
									<div class="product__detail">
										<p class="product__name"><?= $service['name'] ?></p>

			              <?php if($service['time_append'] && $service['time_append'] != '') : ?>
                    <p class="product__note"><?= $service['time_append'] ?></p>
	                  <?php endif; ?>

			              <?php if($service['receive'] && $service['receive'] != '') : ?>
										<p class="product__title">Chi tiết gói chụp</p>
                    <?php endif; ?>

										<p class="product__description"><?= nl2br($service['description']) ?></p>

                    <?php if($service['receive'] && $service['receive'] != '') : ?>
										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description"><?= nl2br($service['receive']) ?></p>
                    <?php endif; ?>

									</div>
								</div>
							</li>
	          <?php endforeach; ?>
						</ul>
            <?php endif; ?>
					</div>
          <?php }
          wp_reset_postdata(); ?>

				</div>
        <?php } ?>

		  <?php if (have_posts()) :
			  the_content();
		  endif; ?>

			</div>
		</section>
		<div class="modal micromodal micromodal-product" id="showProductDetail" aria-hidden="true">
			<div class="modal__overlay" tabindex="-1">
				<button class="modal__close" aria-label="Close modal" data-micromodal-close tabindex="0">
					<img src="<?= $images ?>/top/icon-close.svg" alt="" width="28" height="28">
				</button>
				<div class="modal__container scrollable" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
					<header class="modal__header">
					</header>
					<div class="modal__content" id="modal-1-content">
						<div class="product-detail__content">
							<div class="product-detail__left">
								<div class="image"></div>
								<p class="product-detail__price"></p>
							</div>
							<div class="product-detail__right">
								<h2 class="product-detail__name"></h2>
								<p class="product-detail__note"></p>
								<div class="product-detail__description"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php
get_footer();
