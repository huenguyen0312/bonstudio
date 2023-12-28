<?php
/**
 * Template Name: Contact
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

		<section class="section form-section">
			<div class="container">
      <!--  post content - contact form -->
		  <?php if (have_posts()) :
			  the_content();
		  endif; ?>

			</div>
		</section>
	</main>
<?php
get_footer();
