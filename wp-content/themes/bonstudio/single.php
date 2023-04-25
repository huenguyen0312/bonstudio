<?php
get_header();
$images = get_template_directory_uri() . '/assets/images';
?>
	<main class="main">
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
        <a href="/blog/" class="">Blogs</a>
        ／
      </li>
      <li>
        <label class=""><?php the_title(); ?></label>
      </li>
    </ul>
    <?php
    while (have_posts()) : the_post();
      ?>
    <article class="article">
      <div class="container">
        <div class="article__wrap">
          <p class="article__info">
            <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
	            echo '<span class="category">' . esc_html( $categories[0]->name ) . '</span>';
            }
            ?>
            <time class="date" datetime="<?php the_time('Y-m-d'); ?>">BonStudio, <?php the_time('d.n.Y'); ?></time>
          </p>
          <h2 class="article__name"><?php the_title(); ?></h2>
          <div class="article__image">
            <img src="" alt="">
          </div>
          <div class="article__content">
	          <?php the_content(); ?>
          </div>
          <div class="article__button">
            <a href="/blogs/" class="btn">Quay lại</a>
          </div>

        </div>
      </div>
    </article>
    <?php
    endwhile;
    ?>
	</main>
<?php
get_footer();