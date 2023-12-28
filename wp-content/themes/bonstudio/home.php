<?php
get_header();
$images = get_template_directory_uri() . "/assets/images";
?>
  <main>
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

    <?php
    $reasons = get_field('reason', 'option');
    ?>
    <section class="section reason">
      <div class="container">
        <h2 class="section__title"><span>Vì sao nên lựa chọn Bon Studio?</span></h2>
        <div class="reason__list">
          <?php foreach( $reasons as $reason ): ?>
          <div class="reason__item">
            <div class="reason__icon">
              <img src="<?= $reason['icon']['url'] ?>" alt="" width="100" height="100">
            </div>
            <h3 class="reason__title"><?= $reason['title'] ?></h3>
            <p class="reason__description"><?= $reason['description'] ?></p>
          </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>
<!--    service section-->
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

  <!-- Album section-->
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

<!-- Blog section: get news/blog list-->
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

    <section class="section contact">

    </section>
  </main>
<?php
get_footer();
