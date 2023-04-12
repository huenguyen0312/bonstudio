<?php
/**
 * Template Name: Blogs
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

    <section class="section blog blog-page-section">
      <div class="container">
        <ul class="blog__list">

          <li class="blog__item">
            <a class="blog__content" href="/blog/1.html">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-01.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Chụp hình sơ sinh - Bộ hình quý giá nhất cuộc đời con yêu</h3>
              <p class="blog__description">Giai đoạn sơ sinh là thời điểm rất ý nghĩa và quan trọng với con, mỗi khoảnh khắc của con là kỷ niệm vô giá nên ba mẹ đừng quên lưu giữ nhé!</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="/blog/1.html">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-02.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Mừng sinh nhật bé, mừng niềm vui của ba mẹ</h3>
              <p class="blog__description">Hiểu được tâm tư của ba mẹ muốn lưu giữ những khoảnh khắc đầy ý nghĩa đó, Bon studio đã làm việc chăm chỉ để cho ra rất nhiều những bối cảnh đáng yêu ...</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="/blog/1.html">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-03.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Tết đến nơi rồi! Ối giời ơi các bạn mình ơi!</h3>
              <p class="blog__description">Hiểu được tâm tư của ba mẹ muốn lưu giữ những khoảnh khắc đầy ý nghĩa đó, Bon studio đã làm việc chăm chỉ để cho ra rất nhiều những bối cảnh đáng yêu ...</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="/blog/1.html">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-04.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Tiết lộ bí quyết tạo dáng chụp ảnh gia đình đẹp ai cũng cần biết</h3>
              <p class="blog__description">Chụp ảnh gia đình hiện nay đang rất được các gia đình đều mong muốn sở hữu. Bởi nó giúp lưu giữ những khoảnh khắc hạnh phúc của cả nhà bạn.</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="/blog/1.html">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-05.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Tết đến nơi rồi! Ối giời ơi các bạn mình ơi!</h3>
              <p class="blog__description">Hiểu được tâm tư của ba mẹ muốn lưu giữ những khoảnh khắc đầy ý nghĩa đó, Bon studio đã làm việc chăm chỉ để cho ra rất nhiều những bối cảnh đáng yêu ...</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="/blog/1.html">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-06.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Tết đến nơi rồi! Ối giời ơi các bạn mình ơi!</h3>
              <p class="blog__description">Hiểu được tâm tư của ba mẹ muốn lưu giữ những khoảnh khắc đầy ý nghĩa đó, Bon studio đã làm việc chăm chỉ để cho ra rất nhiều những bối cảnh đáng yêu ...</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="/blog/1.html">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-01.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Chụp hình sơ sinh - Bộ hình quý giá nhất cuộc đời con yêu</h3>
              <p class="blog__description">Giai đoạn sơ sinh là thời điểm rất ý nghĩa và quan trọng với con, mỗi khoảnh khắc của con là kỷ niệm vô giá nên ba mẹ đừng quên lưu giữ nhé!</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="/blog/1.html">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-02.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Mừng sinh nhật bé, mừng niềm vui của ba mẹ</h3>
              <p class="blog__description">Hiểu được tâm tư của ba mẹ muốn lưu giữ những khoảnh khắc đầy ý nghĩa đó, Bon studio đã làm việc chăm chỉ để cho ra rất nhiều những bối cảnh đáng yêu ...</p>
            </a>
          </li>

          <li class="blog__item">
            <a class="blog__content" href="/blog/1.html">
              <div class="blog__image">
                <img src="<?= $images ?>/top/img-blog-03.png" alt="" width="330" height="220">
              </div>
              <h3 class="blog__title">Tết đến nơi rồi! Ối giời ơi các bạn mình ơi!</h3>
              <p class="blog__description">Hiểu được tâm tư của ba mẹ muốn lưu giữ những khoảnh khắc đầy ý nghĩa đó, Bon studio đã làm việc chăm chỉ để cho ra rất nhiều những bối cảnh đáng yêu ...</p>
            </a>
          </li>

        </ul>
        <div class="page-pagination"></div>
      </div>
    </section>
  </main>
<?php
get_footer();
