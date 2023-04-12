<?php
$images = get_template_directory_uri() . "/assets/images";
?>
<header class="header">
  <div class="container header__container">
    <div class="header--left">
      <a href="/" class="logo">
        <img class="logo--main" src="<?= $images ?>/top/logo.svg" alt="" width="168" height="24">
        <img class="logo--scroll" src="<?= $images ?>/top/logo-footer.svg" alt="" width="168" height="24">
      </a>
    </div>
    <div class="header--right">
      <nav>
        <ul class="header-menu">

          <li class="header-menu__item">
            <a href="/">Trang chủ</a>
          </li>

          <li class="header-menu__item">
            <a href="/about/">Giới thiệu</a>
          </li>

          <li class="header-menu__item">
            <a href="/services/">Báo giá - Dịch vụ</a>
          </li>

          <li class="header-menu__item">
            <a href="/albums/">Thư viện ảnh</a>
          </li>

          <li class="header-menu__item">
            <a href="/blogs/">Blog</a>
          </li>

        </ul>
      </nav>
    </div>
  </div>
</header>