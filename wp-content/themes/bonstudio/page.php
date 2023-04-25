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
    <?php
    while (have_posts()) : the_post();
      ?>
      <ul class="breadcrumb container">
        <li>
          <a href="/" class="">Trang chủ</a>
          ／
        </li>
        <li>
          <label class="">Giới thiệu</label>
        </li>
      </ul>
      <section class="section about">
        <div class="container">
          <div class="about__content">
		      <?php the_content(); ?>
          </div>
        </div>
      </section>
    <?php
    endwhile;
    ?>
  </main>
<?php
get_footer();
