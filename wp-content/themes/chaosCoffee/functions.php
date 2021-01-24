<?php

function theme_register_assets () {
	//wp_register_style( 'themeStyle', 'localhost/testWordpress/wp-content/themes/testTheme/style.css' );
  wp_enqueue_style( 'main-style', get_template_directory_uri() . "/style.css");
  wp_enqueue_style( 'home-style', get_template_directory_uri() . "/style/home.css", ['main-style']);
  wp_enqueue_style( 'recipe-style', get_template_directory_uri() . "/style/recipe.css", ['main-style']);
  wp_enqueue_style( 'menu-style', get_template_directory_uri() . "/style/menu.css", ['main-style']);
  wp_enqueue_style( 'restau-archive-style', get_template_directory_uri() . "/style/archive-restaurant.css", ['main-style']);
  wp_enqueue_style( 'slider-style', get_template_directory_uri() . "/slider.css", ['main-style']);
  wp_enqueue_script( 'slider-script', get_template_directory_uri() . '/js/slider-script.js' );
  wp_enqueue_style( 'footer-style', get_template_directory_uri() . "/style/footer.css", ['main-style']);
}

register_nav_menus( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
) );

register_sidebar( array(
    'id' => 'footer1',
    'name' => 'Footer 1',
) );

register_sidebar( array(
    'id' => 'footer2',
    'name' => 'Footer 2',
) );

register_sidebar( array(
    'id' => 'footer3',
    'name' => 'Footer 3',
) );

register_sidebar( array(
    'id' => 'footer4',
    'name' => 'Footer 4',
) );

add_action( 'wp_enqueue_scripts', 'theme_register_assets' );

// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);


/* CUSTOM WIDGET FOR THE FOOTER GALLERY */

function my_dynamic_sidebar_params( $params ) {
    $widget_name = $params[0]['widget_name'];
	$widget_id = $params[0]['widget_id'];
	return $params;
}
add_filter('dynamic_sidebar_params', 'my_dynamic_sidebar_params');

// Creating the widget 
class chaos_coffee_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
        'chaosCoffee_gallery', 
        // Widget name will appear in UI
        __('Chaos Coffee Gallery', 'wpb_widget_domain'), 
        // Widget description
        array( 'description' => __( 'A custom gallery intended for the footer of the project', 'wpb_widget_domain' ), ) );
    }
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) { 
            echo $args['before_title'] . $title . $args['after_title'];
        }
        if( have_rows('images', 'widget_' . $widget_id) ) :
            echo "<ul class='footer__gallery__list'>";
            while( have_rows('images', 'widget_' . $widget_id) ): the_row(); 
                ?><li class="footer__gallery__item">
                    <img src="<?= get_sub_field('image', 'widget_' . $widget_id); ?>" alt="" class="footer__gallery__image">
                </li><?php
            endwhile;
            echo "</ul>";
        endif; 
        echo $args['after_widget'];
    }
    // Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
                $title = $instance[ 'title' ];
        } else {
            $title = __( 'New title', 'wpb_widget_domain' );
        }
        // Widget admin form
        ?>
            <p>
                <!-- TITLE -->
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
        <?php
    }
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
    // Class wpb_widget ends here
}
// Register and load the widget
function wpb_load_widget() {
    register_widget( 'chaos_coffee_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );


//remove Gutenberg
function disable_gutenberg_editor() {
    return false;
}
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");

add_action( 'widgets_init', 'wpb_load_widget' );

// Création d'un CPT
function restaurants_register_post_types() {

    // CPT RESTAURANTS
    $labels = array(
        'name' => 'Restaurants',
        'all_items' => 'Tous les restaurants',  // affiché dans le sous menu
        'singular_name' => 'Restaurant',
        'add_new_item' => 'Ajouter un restaurant',
        'edit_item' => 'Modifier le restaurant',
        'menu_name' => 'Restaurants'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,

//        'rewrite' => [
//            'with_front' => true
//        ],
//        "sptp_permalink_structure" => '%postname%',

        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-food',
    );

    register_post_type( 'restaurant', $args );
}
add_action( 'init', 'restaurants_register_post_types' ); // Le hook init lance la fonction


// Renommer posts en recipes
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Recipes';
    $submenu['edit.php'][5][0] = 'Recipes';
    $submenu['edit.php'][10][0] = 'Add recipe';
    $submenu['edit.php'][16][0] = 'Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );

function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Recipes';
    $labels->singular_name = 'Recipe';
    $labels->add_new = 'Add Recipe';
    $labels->add_new_item = 'Add Recipe';
    $labels->edit_item = 'Edit Recipe';
    $labels->new_item = 'Recipe';
    $labels->view_item = 'View Recipe';
    $labels->search_items = 'Search Recipes';
    $labels->not_found = 'No Recipes found';
    $labels->not_found_in_trash = 'No Recipes found in Trash';
}
add_action( 'init', 'change_post_object_label' );