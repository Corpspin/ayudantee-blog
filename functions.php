<?php

function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
$content = '<p>' . get_the_post_thumbnail($post->ID) .
'</p>' . get_the_content();
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

// Register Custom Navigation Walker
require_once('wp_bootstrap_pagination.php');
function customize_wp_bootstrap_pagination($args) {

    $args['previous_string'] = '<span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>';
    $args['next_string'] = '<span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>';

    return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');


add_theme_support( 'post-thumbnails' );
add_image_size( 'large-thumbnail', 1024, 350, array( 'left', 'center' ) );

add_filter('get_avatar','add_gravatar_class');
function add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar img-circle", $class);
    return $class;
}


add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// SIDEBARS
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar Home', 'sidebar-home' ),
        'id' => 'sidebar-home',
        'description' => __( 'Sidebar para el home.', 'sidebar-home' ),
        'before_widget' => '<div class="sidebar-home">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2><img src="/img/sidebar-home-icon.png">',
		'after_title'   => '</h2>',
    ) );
}

add_theme_support( 'post-thumbnails' );

add_theme_support( 'automatic-feed-links' );

// custom excerpt length
function custom_excerpt_length($length) {
	return 15;
}
add_filter('excerpt_length', 'custom_excerpt_length');

?>