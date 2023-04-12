<?php
get_header();
?>
  <main class="main">
    <?php
    while (have_posts()) : the_post();
      ?>
      <div class="section">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </div>
    <?php
    endwhile;
    ?>
  </main>
<?php
get_footer();
