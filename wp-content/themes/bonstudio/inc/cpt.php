<?php
function create_post_type()
{
  register_post_type(
    'service',
    array(
      'labels' => array(
        'name' => __('Services'),
        'singular_name' => __('service')
      ),
      'public' => true,
      'publicly_queryable' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'service', 'with_front' => true),
      'show_in_rest' => false,
      'show_ui' => true,
      'show_in_menu' => true,
      'supports' => array(
	      'title', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields',
      )
    )
  );
  register_post_type(
    'album',
    array(
      'labels' => array(
        'name' => __('Albums'),
        'singular_name' => __('album')
      ),
      'public' => true,
      'publicly_queryable' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'album', 'with_front' => false),
      'show_in_rest' => false,
      'show_ui' => true,
      'show_in_menu' => true,
      'supports' => array(
	      'title', 'excerpt', 'thumbnail', 'revisions', 'custom-fields',
      )
    )
  );
  register_post_type(
    'blog',
    array(
      'labels' => array(
        'name' => __('Blogs'),
        'singular_name' => __('blog')
      ),
      'public' => true,
      'publicly_queryable' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'blog', 'with_front' => false),
      'show_in_rest' => false,
      'show_ui' => true,
      'show_in_menu' => true,
      'taxonomies'  => array('category', 'post_tag'),
      'supports' => array(
        'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields',
      )
    )
  );
}

add_action('init', 'create_post_type');