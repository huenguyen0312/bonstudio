<?php
/**
 * Template Name: Blogs
 */
get_header();
$images = get_template_directory_uri() . '/assets/images';
$current_page = $_GET['page'] ?? 1;
$current_page = (int)$current_page;
$perPage = 6;

$posts = new WP_Query(array(
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
        <div class="page-pagination"></div>
      </div>
    </section>
  </main>
<?php
get_footer();
