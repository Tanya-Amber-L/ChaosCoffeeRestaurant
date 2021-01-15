<?php

function theme_register_assets () {
	//wp_register_style( 'themeStyle', 'localhost/testWordpress/wp-content/themes/testTheme/style.css' );
  wp_enqueue_style( 'main-style', get_template_directory_uri() . "/style.css");
  wp_enqueue_style( 'recipe-style', get_template_directory_uri() . "/style/recipe.css", ['main-style']);
  wp_enqueue_style( 'footer-style', get_template_directory_uri() . "/style/footer.css", ['main-style']);
}

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

register_sidebar( array(
    'id' => 'footer',
    'name' => 'Footer',
) );

add_action( 'wp_enqueue_scripts', 'theme_register_assets' );

// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);
