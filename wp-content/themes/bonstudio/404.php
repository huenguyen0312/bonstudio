<?php
get_header();
?>
  <main>
    <div class="section error-page">
      <div class="container container--md">
        <div class="page-info">
          <h1 class="page-heading">
            <span class="page-heading--ja">404 error</span>
          </h1>
        </div>
        <p>
          Page not found
        </p>
        <div class="error-page__btn text-center">
          <a class="btn" href="<?php echo home_url('/'); ?>">
            Trang chu
          </a>
        </div>
      </div>
    </div>
  </main>
<?php
get_footer();