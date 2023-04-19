<?php
function theme_assets()
{
  $root_css = get_template_directory_uri() . '/assets/css/';
  $root_js = get_template_directory_uri() . '/assets/js/';
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Lato&family=Noto+Sans+JP:wght@400;500;700&family=Roboto:wght@400;700&display=swap', [], null);

  wp_enqueue_style('main-css', $root_css . 'style.css');
  if (is_single()) {
    wp_enqueue_style('article-css', $root_css . '_article.css');
  }
  wp_enqueue_script('main-js', $root_js . 'app.js', array(), true, true);
}

add_action('wp_enqueue_scripts', 'theme_assets');

add_theme_support('post-thumbnails', array('post'));