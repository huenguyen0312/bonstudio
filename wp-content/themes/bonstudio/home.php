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

    <section class="section reason">
      <div class="container">
        <h2 class="section__title"><span>Vì sao nên lựa chọn Bon Studio?</span></h2>
        <div class="reason__list">

          <div class="reason__item">
            <div class="reason__icon">
              <img src="<?= $images ?>/top/icon-reason-01.svg" alt="" width="100" height="100">
            </div>
            <h3 class="reason__title">Giá cả hợp lý</h3>
            <p class="reason__description">Giá cực yêu cho một bộ ảnh gia đình, em bé, nghệ thuật full từ A-Z</p>
          </div>

          <div class="reason__item">
            <div class="reason__icon">
              <img src="<?= $images ?>/top/icon-reason-02.svg" alt="" width="100" height="100">
            </div>
            <h3 class="reason__title">Trang phục đa dạng</h3>
            <p class="reason__description">Studio luôn cập nhập liên tục trang phục đa dạng, bắt kịp gu hot nhất, đầy đủ phụ kiện từ bé sơ sinh cho đến đại gia đình</p>
          </div>

          <div class="reason__item">
            <div class="reason__icon">
              <img src="<?= $images ?>/top/icon-reason-03.svg" alt="" width="100" height="100">
            </div>
            <h3 class="reason__title">Chuyên nghiệp</h3>
            <p class="reason__description">Đội ngũ photographer 9x trẻ trung, nhiệt tình và sáng tạo trong công việc, đảm bảo sẽ không bỏ lỡ bất kỳ khoảnh khắc nào</p>
          </div>

          <div class="reason__item">
            <div class="reason__icon">
              <img src="<?= $images ?>/top/icon-reason-04.svg" alt="" width="100" height="100">
            </div>
            <h3 class="reason__title">Chất lượng</h3>
            <p class="reason__description">Cơ sở trang thiết bị hiện đại,máy móc tân tiến, nhân sự tay nghề cao lâu năm, chuyên nghiệp</p>
          </div>

        </div>
      </div>
    </section>

    <section class="section service">
      <div class="container">
        <h2 class="section__title section__title--white"><span>Các dịch vụ tại Bon Studio</span></h2>
        <div class="slide-wrap">
          <div class="service__list js-service-slider">

            <div class="service__item">
              <div class="service__image">
                <img src="<?= $images ?>/top/img-service-01.png" alt="" width="100" height="100">
              </div>
              <h3 class="service__title">Chụp ảnh trẻ em</h3>
              <a class="btn service__btn" href="/service/index.html">
                <span>CHI TIẾT</span>
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.10657 1.10669L7.21313 7.21326L1.10657 13.3198" stroke="white"/>
                </svg>
              </a>
            </div>

            <div class="service__item">
              <div class="service__image">
                <img src="<?= $images ?>/top/img-service-02.png" alt="" width="100" height="100">
              </div>
              <h3 class="service__title">Chụp ảnh New born</h3>
              <a class="btn service__btn" href="/service/index.html">
                <span>CHI TIẾT</span>
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.10657 1.10669L7.21313 7.21326L1.10657 13.3198" stroke="white"/>
                </svg>
              </a>
            </div>

            <div class="service__item">
              <div class="service__image">
                <img src="<?= $images ?>/top/img-service-03.png" alt="" width="100" height="100">
              </div>
              <h3 class="service__title">Chụp ảnh Gia đình</h3>
              <a class="btn service__btn" href="/service/index.html">
                <span>CHI TIẾT</span>
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.10657 1.10669L7.21313 7.21326L1.10657 13.3198" stroke="white"/>
                </svg>
              </a>
            </div>

            <div class="service__item">
              <div class="service__image">
                <img src="<?= $images ?>/top/img-service-02.png" alt="" width="100" height="100">
              </div>
              <h3 class="service__title">Chụp ảnh mẹ bầu</h3>
              <a class="btn service__btn" href="/service/index.html">
                <span>CHI TIẾT</span>
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.10657 1.10669L7.21313 7.21326L1.10657 13.3198" stroke="white"/>
                </svg>
              </a>
            </div>

            <div class="service__item">
              <div class="service__image">
                <img src="<?= $images ?>/top/img-service-02.png" alt="" width="100" height="100">
              </div>
              <h3 class="service__title">Chụp ảnh chân dung</h3>
              <a class="btn service__btn" href="/service/index.html">
                <span>CHI TIẾT</span>
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.10657 1.10669L7.21313 7.21326L1.10657 13.3198" stroke="white"/>
                </svg>
              </a>
            </div>

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
  </main>
<?php
get_footer();
