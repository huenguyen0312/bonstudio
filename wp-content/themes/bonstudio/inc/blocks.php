<?php
add_action('acf/init', 'alpha_acf_init');
function alpha_acf_init()
{

  if (function_exists('acf_register_block')) {
  }
}

function flexible_content_blocks_render_callback($block)
{

  $slug = str_replace('acf/', '', $block['name']);
  if (file_exists(get_theme_file_path("/blocks/{$slug}.php"))) {
    include(get_theme_file_path("/blocks/{$slug}.php"));
  }
}