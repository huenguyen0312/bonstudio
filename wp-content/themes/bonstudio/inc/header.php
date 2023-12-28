<?php
$images = get_template_directory_uri() . "/assets/images";
$logo = get_field('logo', 'option');
$logo_footer = get_field('footer_logo', 'option');
?>
<header class="header">
  <div class="container header__container">
    <div class="header--left">
      <a href="/" class="logo">
        <img class="logo--main" src="<?= $logo['url'] ?>" alt="" width="168" height="24">
        <img class="logo--scroll" src="<?= $logo_footer['url'] ?>" alt="" width="168" height="24">
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
            <a href="/service/">Báo giá - Dịch vụ</a>
          </li>

          <li class="header-menu__item">
            <a href="/album/">Thư viện ảnh</a>
          </li>

          <li class="header-menu__item">
            <a href="/blog/">Blog</a>
          </li>

          <li class="header-menu__item">
            <a href="/contact/">Liên hệ</a>
          </li>

        </ul>
      </nav>
    </div>
  </div>
</header>