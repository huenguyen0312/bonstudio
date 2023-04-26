<?php
get_header();
$imagesUrl = get_template_directory_uri() . '/assets/images';
$current_page = $_GET['page'] ?? 1;
$current_page = (int)$current_page;
$perPage = 12;

$posts = new WP_Query(array(
	'post_type' => 'album',
	'posts_per_page' => $perPage,
	'paged' => $current_page,
));
?>
	<main class="main" role="main">
		<section class="sub-keyvisual">
			<div class="sub-keyvisual__container">
				<div class="sub-keyvisual__image">
					<picture>
						<source media='(max-width: 767px)', srcset='<?= $imagesUrl ?>/service/kv.png'>
						<source media='(min-width: 768px)', srcset='<?= $imagesUrl ?>/service/kv.png'>
						<img src="<?= $imagesUrl ?>/service/kv.png" alt="" width="1280" height="700">
					</picture>
				</div>
			</div>
		</section>
		<ul class="breadcrumb container">
			<li>
				<a href="/" class="">Trang chủ</a>
				／
			</li>
			<li>
				<label class="">Albums</label>
			</li>
		</ul>

		<section class="section album-list">
			<div class="container">
      <?php if ($posts->have_posts()) { ?>
				<div class="album__list">
        <?php while ($posts->have_posts()) {
          $posts->the_post(); ?>

	        <?php
	        $images = get_field('other_images');
	        ?>
					<div class="album__item js-show-album-detail-slide">
						<div class="album__image">
							<span class="slide-counter"><?= count($images)?>&nbsp;ảnh</span>
							<div class="image">
								<img src="<?= get_the_post_thumbnail_url() ?>" alt="" width="420" height="300">
							</div>
						</div>
						<h2 class="album__title"><?= get_the_title() ?></h2>
			      <?php if( $images ): ?>
						<div class="slide__list">
	            <?php foreach( $images as $image ): ?>
                <div class="image">
                  <img src="<?= $image['url'] ?>" alt="">
                </div>
	            <?php endforeach; ?>
						</div>
	          <?php endif; ?>
					</div>
          <?php }
          wp_reset_postdata(); ?>
				</div>
        <?php } ?>

      <!-- page-pagination-->
		  <?php
		  $total_page = $posts->max_num_pages;

		  //PC pagination
		  $max_page = 5;
		  $start_page = $current_page - 2;
		  $end_page = $current_page + 2;
		  $first_page = 1;
		  $last_page = $total_page;
		  $prev_page = $current_page - 1;
		  $next_page = $current_page + 1;

		  if ($start_page <= 0) {
			  $start_page = 1;
			  $end_page = $max_page;
		  }
		  if ($end_page > $total_page) {
			  $start_page = $total_page - $max_page + 1;
			  $end_page = $total_page;
		  }
		  if ($start_page <= 0) {
			  $start_page = 1;
		  }

		  $base_url = '/';

		  ?>
		  <?php if($total_page > 1) { ?>
            <div class="">
              <div class="blog__pagination">
                <ul class="pagination">
					<?php if ($current_page > 1) :?>
                      <li class="pagination__item pagination__item--first">
                        <a href="?page=<?php echo $first_page ?>" class="pagination__link" aria-label="First page"><i class="icon icon--arrow-first">
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <mask id="path-1-inside-1_201_14" fill="white">
                                <path d="M9.07104 14.1421L1.99998 7.07102L9.07104 -4.55379e-05L16.1421 7.07102L9.07104 14.1421Z"/>
                              </mask>
                              <path d="M1.99998 7.07102L1.29287 6.36392L0.585763 7.07102L1.29287 7.77813L1.99998 7.07102ZM9.77815 13.435L2.70708 6.36392L1.29287 7.77813L8.36394 14.8492L9.77815 13.435ZM2.70708 7.77813L9.77815 0.707061L8.36394 -0.707152L1.29287 6.36392L2.70708 7.77813Z" fill="#D8662A" mask="url(#path-1-inside-1_201_14)"/>
                              <line x1="0.5" y1="1" x2="0.5" y2="13" stroke="#D8662A"/>
                            </svg>
                          </i></a>
                      </li>
                      <li class="pagination__item pagination__item--prev">
                        <a href="?page=<?php echo $prev_page ?>" class="pagination__link" aria-label="Previous"><i class="icon icon--arrow-left-blue">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <mask id="path-1-inside-1_201_11" fill="white">
                                <path d="M7.07104 14.1421L-2.3365e-05 7.07102L7.07104 -4.55379e-05L14.1421 7.07102L7.07104 14.1421Z"/>
                              </mask>
                              <path d="M-2.3365e-05 7.07102L-0.70713 6.36392L-1.41424 7.07102L-0.70713 7.77813L-2.3365e-05 7.07102ZM7.77815 13.435L0.707083 6.36392L-0.70713 7.77813L6.36394 14.8492L7.77815 13.435ZM0.707083 7.77813L7.77815 0.707061L6.36394 -0.707152L-0.70713 6.36392L0.707083 7.77813Z" fill="#D8662A" mask="url(#path-1-inside-1_201_11)"/>
                            </svg>
                          </i></a>
                      </li>
					<?php endif; ?>
					<?php for ($i = $start_page; $i <= $end_page; $i++):  ?>
						<?php $active = ($i == $current_page ? ' pagination__link--active' : '') ?>
                      <li class="pagination__item"><a href="?page=<?php echo $i ?>" class="pagination__link<?php echo $active?>"><?php echo $i?></a></li>
					<?php endfor; ?>
					<?php if ($current_page < $total_page):?>
                      <li class="pagination__item pagination__item--next">
                        <a href="?page<?php echo $next_page ?>" class="pagination__link" aria-label="Next"><i class="icon icon--arrow-right-blue">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <mask id="path-1-inside-1_201_15" fill="white">
                                <path d="M7.07104 0L14.1421 7.07107L7.07105 14.1421L-2.15769e-05 7.07107L7.07104 0Z"/>
                              </mask>
                              <path d="M14.1421 7.07107L14.8492 7.77817L15.5563 7.07107L14.8492 6.36396L14.1421 7.07107ZM6.36394 0.707107L13.435 7.77817L14.8492 6.36396L7.77815 -0.707107L6.36394 0.707107ZM13.435 6.36396L6.36394 13.435L7.77815 14.8492L14.8492 7.77817L13.435 6.36396Z" fill="#D8662A" mask="url(#path-1-inside-1_201_15)"/>
                            </svg>
                          </i></a>
                      </li>
                      <li class="pagination__item pagination__item--last">
                        <a href="?page=<?php echo $last_page ?>" class="pagination__link" aria-label="Last page"><i class="icon icon--arrow-last">
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <mask id="path-1-inside-1_201_16" fill="white">
                                <path d="M7.07104 0L14.1421 7.07107L7.07105 14.1421L-2.15769e-05 7.07107L7.07104 0Z"/>
                              </mask>
                              <path d="M14.1421 7.07107L14.8492 7.77817L15.5563 7.07107L14.8492 6.36396L14.1421 7.07107ZM6.36394 0.707107L13.435 7.77817L14.8492 6.36396L7.77815 -0.707107L6.36394 0.707107ZM13.435 6.36396L6.36394 13.435L7.77815 14.8492L14.8492 7.77817L13.435 6.36396Z" fill="#D8662A" mask="url(#path-1-inside-1_201_16)"/>
                              <line x1="15.6421" y1="13.1421" x2="15.6421" y2="1.14209" stroke="#D8662A"/>
                            </svg>
                          </i></a>
                      </li>
					<?php endif; ?>
                </ul>
              </div>
            </div>
		  <?php } ?>
			</div>
		</section>
		<div class="modal micromodal micromodal-abbum-detail" id="showAlbumDetailSlider" aria-hidden="true">
			<div class="modal__overlay" tabindex="-1">
				<button class="modal__close" aria-label="Close modal" data-micromodal-close tabindex="0">
					<img src="<?= $imagesUrl ?>/top/icon-close.svg" alt="" width="28" height="28">
				</button>
				<div class="modal__container scrollable" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
					<header class="modal__header">
					</header>
					<div class="modal__content" id="modal-1-content">
						<div class="album-detail__content">
							<div class="album-detail__list"></div>
						</div>
					</div>
				</div>
				<div class="slide__arrow">
					<div class="btn-slide btn-prev"><span>&nbsp;</span></div>
					<div class="btn-slide btn-next"><span>&nbsp;</span></div>
				</div>
			</div>
		</div>
	</main>
<?php
get_footer();