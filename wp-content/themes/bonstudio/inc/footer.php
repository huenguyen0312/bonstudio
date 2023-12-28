<?php
$images = get_template_directory_uri() . "/assets/images";
$logo_footer = get_field('footer_logo', 'option');
$copyright = get_field('copyright', 'option');
$slogan = get_field('slogan', 'option');
$address = get_field('address', 'option');
$facebook = get_field('facebook', 'option');
$phone_number = get_field('phone_number', 'option');
$working_time = get_field('working_time', 'option');
?>
<footer class="footer">
  <div class="container footer__container">
    <div class="footer__logo">
      <img src="<?= $logo_footer['url'] ?>" alt="" width="240" height="35">
    </div>
    <div class="studio__info">
      <div class="col">
        <div class="col__title"><span><?= $slogan ?></span></div>
        <div class="info__content">
          <div class="info__item address">
            <span><?= $address ?></span>
          </div>
          <div class="info__item phone-number">
            <span><?= $phone_number ?></span>
          </div>
          <div class="info__item facebook">
            <a href="#"><?= $facebook ?></a>
          </div>
          <div class="info__item website">
            <span>http://bonstudio.com</span>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="col__title"><span>THỜI GIAN LÀM VIỆC</span></div>
        <ul class="time">
          <li><?= $working_time ?></li>
          <li>Tư vấn online 24/24: <?= $phone_number ?></li>
        </ul>
        <div class="col__title"><span>HÌNH THỨC THANH TOÁN</span></div>
        <div class="payment__list">
          <img src="<?= $images ?>/top/visa.png" alt="">
          <img src="<?= $images ?>/top/napas.png" alt="">
          <img src="<?= $images ?>/top/momo.png" alt="">
          <img src="<?= $images ?>/top/vnpay.png" alt="">
        </div>
      </div>
      <div class="col">
        <div class="map">
          <img src="<?= $images ?>/top/img-map.png" alt="" width="300" height="190">
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <p><?= $copyright ?></p>
    </div>
  </div>
</footer>