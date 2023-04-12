<?php
/**
 * Template Name: Albums
 */
get_header();
$images = get_template_directory_uri() . '/assets/images';
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
        <label class="">Page abc xyz</label>
      </li>
    </ul>

    <section class="section album-list">
      <div class="container">
        <div class="album__list">

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--1.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--2.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--3.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--4.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--5.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--6.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--7.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--8.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--9.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--10.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--11.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

          <div class="album__item js-show-album-detail-slide">
            <div class="album__image">
              <span class="slide-counter">4&nbsp;ảnh</span>
              <div class="image">
                <img src="<?= $images ?>/album/img--1.png" alt="" width="420" height="300">
              </div>
            </div>
            <h2 class="album__title">Album ảnh bé trai siêu đáng yêu </h2>
            <div class="slide__list">

              <div class="image">
                <img src="<?= $images ?>/album/img-album-01@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-02@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-03@2x.png" alt="">
              </div>

              <div class="image">
                <img src="<?= $images ?>/album/img-album-04@2x.png" alt="">
              </div>

            </div>
          </div>

        </div>
        <div class="page-pagination">
        </div>
      </div>
    </section>
    <div class="modal micromodal micromodal-abbum-detail" id="showAlbumDetailSlider" aria-hidden="true">
      <div class="modal__overlay" tabindex="-1">
        <button class="modal__close" aria-label="Close modal" data-micromodal-close tabindex="0">
          <img src="<?= $images ?>/top/icon-close.svg" alt="" width="28" height="28">
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