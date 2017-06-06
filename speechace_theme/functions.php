<?php
add_theme_support( 'custom-logo' );

add_filter('widget_text', 'do_shortcode');

function register_my_menu() {
  register_nav_menus(
  	array(
  	  'header-r-menu' => __( 'Header Right Menu' ),
  	  'header-l-menu' => __( 'Header Left Menu' )
  	)
  );	
}
add_action( 'init', 'register_my_menu' );


function enqueue_styles() {
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'bootstrap' );
    wp_register_style( 'bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css');
    wp_enqueue_style( 'bootstrap-theme' );
  	wp_register_style( 'fonts.raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,500,600,800');
  	wp_enqueue_style( 'fonts.raleway' );
    wp_register_style( 'slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style( 'slick' );
    wp_register_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style( 'slick-theme' );
    wp_register_style( 'app.min', get_template_directory_uri() . '/css/app.min.css');
    wp_enqueue_style( 'app.min' );
    wp_register_style( 'additional.min', get_template_directory_uri() . '/css/additional.css');
    wp_enqueue_style( 'additional.min' );

}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_register_script( 'jquery.min', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js' );
    wp_enqueue_script( 'jquery.min' );
    wp_register_script('app.min.js', get_stylesheet_directory_uri() . '/js/app.min.js');
    wp_enqueue_script( 'app.min.js' );
    wp_register_script( 'headroom.min.js', get_template_directory_uri() . '/js/headroom.min.js' );
    wp_enqueue_script( 'headroom.min.js' );
    wp_register_script( 'slick.min.js', get_template_directory_uri() . '/js/slick.min.js' );
    wp_enqueue_script( 'slick.min.js' );
    wp_register_script( 'additional', get_template_directory_uri() . '/js/additional.js' );
    wp_enqueue_script( 'additional' );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

require get_template_directory() . '/inc/customizer.php';

add_theme_support('post-thumbnails');

/*remove_filter('the_content', 'wpautop');*/

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

?>