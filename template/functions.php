<?php
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
/* --- Register Menus --- */

function register_ddd_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu')
        )
    );
}
add_action('init', 'register_ddd_menus');

//My wordpress cleaning
show_admin_bar(false);
//Stop Wordpress from messing with my images
add_filter('jpeg_quality', function($arg){return 100;});
remove_image_size('large');
remove_image_size('medium');
remove_image_size('thumbnail');

class ddd_nav_walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='arrow-up nav-sub-menu-arrow hidden-block'></div><button class='sub-menu-button'></button><ul class='sub-menu hidden-block'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}

function ddd_conditional_serve() {
  // if (is_product()) {
    global $is_IE;
    if ($is_IE) {
      wp_register_script('3dcustomIE', get_stylesheet_directory_uri().'/js/main-ie.js', false, null, true);
      // wp_localize_script('3dcustomIE', 'WPURL', array( 'templateUrl' => wp_upload_dir() ));
      // wp_enqueue_script('3dcustomIEPoly', get_stylesheet_directory_uri().'/js/polyfills.js', false, null, true);
      wp_enqueue_script('3dcustomIE');
    } else {
      wp_register_script('3dcustom', get_stylesheet_directory_uri().'/js/main.js', false, null, true);
      // wp_localize_script('3dcustom', 'WPURL', array( 'templateUrl' => wp_upload_dir() ));
      wp_enqueue_script('3dcustom');
    }
  // }
  wp_enqueue_style('3dcustomMobile', get_stylesheet_directory_uri().'/styles/style.css', false, null, 'all');
  wp_enqueue_style('3dcustomTablet', get_stylesheet_directory_uri().'/styles/only-screen-and-min-width-768px.css', false, null, '(min-width: 768px)');
  wp_enqueue_style('3dcustomDesktop', get_stylesheet_directory_uri().'/styles/only-screen-and-min-width-1024px.css', false, null, '(min-width: 1024px)');
  // wp_dequeue_script('wp-embed');
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_enqueue_scripts', 'ddd_conditional_serve', 40 );

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

require_once 'func/includes.php';

?>
