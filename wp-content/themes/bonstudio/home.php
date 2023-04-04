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

    <section class="section album">
      <div class="container">
        <h2 class="section__title"><span>Album ảnh đẹp</span></h2>
        <ul class="album__list">

          <li class="album__item js-show-album-slider" data-micromodal-trigger="showAlbumSlider" data-index="0">
            <div class="album__image">
              <img src="<?= $images ?>/top/img-album-01.png" alt="" width="330" height="250">
            </div>
          </li>

          <li class="album__item js-show-album-slider" data-micromodal-trigger="showAlbumSlider" data-index="1">
            <div class="album__image">
              <img src="<?= $images ?>/top/img-album-02.png" alt="" width="330" height="250">
            </div>
          </li>

          <li class="album__item js-show-album-slider" data-micromodal-trigger="showAlbumSlider" data-index="2">
            <div class="album__image">
              <img src="<?= $images ?>/top/img-album-03.png" alt="" width="330" height="250">
            </div>
          </li>

          <li class="album__item js-show-album-slider" data-micromodal-trigger="showAlbumSlider" data-index="3">
            <div class="album__image">
              <img src="<?= $images ?>/top/img-album-04.png" alt="" width="330" height="250">
            </div>
          </li>

          <li class="album__item js-show-album-slider" data-micromodal-trigger="showAlbumSlider" data-index="4">
            <div class="album__image">
              <img src="<?= $images ?>/top/img-album-05.png" alt="" width="330" height="250">
            </div>
          </li>

          <li class="album__item js-show-album-slider" data-micromodal-trigger="showAlbumSlider" data-index="5">
            <div class="album__image">
              <img src="<?= $images ?>/top/img-album-06.png" alt="" width="330" height="250">
            </div>
          </li>

        </ul>
        <a class="btn album__btn" href="#">
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

              <li class="album-slider__item">
                <div class="album__image">
                  <img src="<?= $images ?>/top/img-album-01@2x.png" alt="" width="330" height="250">
                </div>
              </li>

              <li class="album-slider__item">
                <div class="album__image">
                  <img src="<?= $images ?>/top/img-album-02@2x.png" alt="" width="330" height="250">
                </div>
              </li>

              <li class="album-slider__item">
                <div class="album__image">
                  <img src="<?= $images ?>/top/img-album-03@2x.png" alt="" width="330" height="250">
                </div>
              </li>

              <li class="album-slider__item">
                <div class="album__image">
                  <img src="<?= $images ?>/top/img-album-04@2x.png" alt="" width="330" height="250">
                </div>
              </li>

              <li class="album-slider__item">
                <div class="album__image">
                  <img src="<?= $images ?>/top/img-album-05@2x.png" alt="" width="330" height="250">
                </div>
              </li>

              <li class="album-slider__item">
                <div class="album__image">
                  <img src="<?= $images ?>/top/img-album-06@2x.png" alt="" width="330" height="250">
                </div>
              </li>

            </ul>
          </div>
        </div>
        <div class="slide__arrow">
          <div class="btn-slide btn-prev"><span>&nbsp;</span></div>
          <div class="btn-slide btn-next"><span>&nbsp;</span></div>
        </div>
      </div>
    </div>

    <section class="section blog">
      <div class="container">
        <h2 class="section__title"><span>Blog</span></h2>
        <ul class="blog__list">

          <li class="blog__item">
            <a class="blog__content" href="#">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-01.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Chụp hình sơ sinh - Bộ hình quý giá nhất cuộc đời con yêu</h3>
              <p class="blog__description">Giai đoạn sơ sinh là thời điểm rất ý nghĩa và quan trọng với con, mỗi khoảnh khắc của con là kỷ niệm vô giá nên ba mẹ đừng quên lưu giữ nhé!</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="#">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-02.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Mừng sinh nhật bé, mừng niềm vui của ba mẹ</h3>
              <p class="blog__description">Hiểu được tâm tư của ba mẹ muốn lưu giữ những khoảnh khắc đầy ý nghĩa đó, Bon studio đã làm việc chăm chỉ để cho ra rất nhiều những bối cảnh đáng yêu ...</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="#">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-03.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Tết đến nơi rồi! Ối giời ơi các bạn mình ơi!</h3>
              <p class="blog__description">Hiểu được tâm tư của ba mẹ muốn lưu giữ những khoảnh khắc đầy ý nghĩa đó, Bon studio đã làm việc chăm chỉ để cho ra rất nhiều những bối cảnh đáng yêu ...</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="#">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-04.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Tiết lộ bí quyết tạo dáng chụp ảnh gia đình đẹp ai cũng cần biết</h3>
              <p class="blog__description">Chụp ảnh gia đình hiện nay đang rất được các gia đình đều mong muốn sở hữu. Bởi nó giúp lưu giữ những khoảnh khắc hạnh phúc của cả nhà bạn.</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="#">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-05.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Tết đến nơi rồi! Ối giời ơi các bạn mình ơi!</h3>
              <p class="blog__description">Hiểu được tâm tư của ba mẹ muốn lưu giữ những khoảnh khắc đầy ý nghĩa đó, Bon studio đã làm việc chăm chỉ để cho ra rất nhiều những bối cảnh đáng yêu ...</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="#">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-06.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Tết đến nơi rồi! Ối giời ơi các bạn mình ơi!</h3>
              <p class="blog__description">Hiểu được tâm tư của ba mẹ muốn lưu giữ những khoảnh khắc đầy ý nghĩa đó, Bon studio đã làm việc chăm chỉ để cho ra rất nhiều những bối cảnh đáng yêu ...</p>
            </a>
          </li>

        </ul>
        <a class="btn blog__btn" href="#">
          <span>XEM THÊM</span>
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.10657 1.10669L7.21313 7.21326L1.10657 13.3198" stroke="white"/>
          </svg>
        </a>
      </div>
    </section>
  </main>
<?php
get_footer();
