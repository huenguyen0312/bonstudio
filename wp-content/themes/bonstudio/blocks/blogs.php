<?php
$argsBlog = array(
	'post_type' => 'blog',
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => 6,
	'offset'         => 1,
);

$news_query = new WP_Query( $argsBlog );
if($news_query->have_posts()): ?>
	<section class="section blog">
		<div class="container">
			<h2 class="section__title"><span>Blogs</span></h2>
			<ul class="blog__list">
				<?php while($news_query->have_posts()): $news_query->the_post(); ?>
					<li class="blog__item">
						<a class="blog__content" href="<?php the_permalink(); ?>">
							<div class="blog__image">
								<img src="<?= get_the_post_thumbnail_url() ?>" alt="" width="330" height="220">
							</div>
							<h3 class="blog__title"><?php the_title(); ?></h3>
							<p class="blog__description"><?= get_the_excerpt() ?></p>
						</a>
					</li>
				<?php endwhile;
				wp_reset_postdata();
				?>
			</ul>
			<a class="btn blog__btn" href="/blog/">
				<span>XEM THÊM</span>
				<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.10657 1.10669L7.21313 7.21326L1.10657 13.3198" stroke="white"/>
				</svg>
			</a>
		</div>
	</section>
<?php endif; ?>

