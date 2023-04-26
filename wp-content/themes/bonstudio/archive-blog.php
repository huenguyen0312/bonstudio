<?php
get_header();
$images = get_template_directory_uri() . '/assets/images';
$current_page = $_GET['page'] ?? 1;
$current_page = (int)$current_page;
$perPage = 9;

$posts = new WP_Query(array(
	'post_type' => 'blog',
	'posts_per_page' => $perPage,
	'paged' => $current_page,
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
		<ul class="breadcrumb container">
			<li>
				<a href="/" class="">Trang chủ</a>
				／
			</li>
			<li>
				<label class="">Blogs</label>
			</li>
		</ul>

		<section class="section blog blog-page-section">
			<div class="container">
				<?php if ($posts->have_posts()) { ?>
					<ul class="blog__list">
						<?php while ($posts->have_posts()) {
							$posts->the_post(); ?>
							<li class="blog__item">
								<a class="blog__content" href="<?= get_permalink() ?>">
									<div class="blog__image">
										<img src="<?= get_the_post_thumbnail_url() ?>" alt="" width="330" height="220">
									</div>
									<h3 class="blog__title"><?= get_the_title() ?></h3>
									<p class="blog__description"><?= get_the_excerpt() ?></p>
								</a>
							</li>
						<?php }
						wp_reset_postdata(); ?>
					</ul>
				<?php } ?>
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
	</main>
<?php
get_footer();
