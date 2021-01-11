<?php
register_nav_menus( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
) );

register_sidebar( array(
    'id' => 'blog-sidebar',
    'name' => 'Blog',
    'before_widget'  => '<div class="site__sidebar__widget %2$s">',
    'after_widget'  => '</div>',
    'before_title' => '<p class="site__sidebar__widget__title">',
    'after_title' => '</p>',
) );

  // for posts
	add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
	add_filter('use_block_editor_for_post_type', '__return_false', 10);