<?php
get_header();
?>
	<main class="main" role="main">
		<?php
		while (have_posts()) : the_post();
			the_content();
		endwhile;
		?>
	</main>
<?php
get_footer();
