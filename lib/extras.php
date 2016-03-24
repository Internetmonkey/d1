<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Config\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function remove_wc_sidebar(){

  remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

}
add_action('wp_loaded', __NAMESPACE__ . '\\remove_wc_sidebar' );

function add_to_cart_text($default, $product) {
  $type = $product->product_type;

  if ( !$type || $type !== 'variable' ) {
    return $default;
  }

  return __('Select Size', 'woocommerce');

}

add_filter('woocommerce_product_add_to_cart_text', __NAMESPACE__ .'\\add_to_cart_text', 20, 2);

add_action( 'after_setup_theme', __NAMESPACE__ . '\\woocommerce_support' );

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function add_options_page() {
  $options_page = array(
    
    /* (string) The title displayed on the options page. Required. */
    'page_title' => 'Options',
    
    /* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
    'menu_title' => '',
    
    /* (string) The slug name to refer to this menu by (should be unique for this menu). 
    Defaults to a url friendly version of menu_slug */
    'menu_slug' => '',
    
    /* (string) The capability required for this menu to be displayed to the user. Defaults to edit_posts.
    Read more about capability here: http://codex.wordpress.org/Roles_and_Capabilities */
    'capability' => 'edit_posts',
    
    /* (int|string) The position in the menu order this menu should appear. 
    WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays!
    Risk of conflict can be reduced by using decimal instead of integer values, e.g. '63.3' instead of 63 (must use quotes).
    Defaults to bottom of utility menu items */
    'position' => false,
    
    /* (string) The slug of another WP admin page. if set, this will become a child page. */
    'parent_slug' => '',
    
    /* (string) The icon url for this menu. Defaults to default WordPress gear */
    'icon_url' => false,
    
    /* (boolean) If set to true, this options page will redirect to the first child page (if a child page exists). 
    If set to false, this parent page will appear alongside any child pages. Defaults to true */
    'redirect' => true,
    
    /* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2'). 
    Defaults to 'options'. Added in v5.2.7 */
    'post_id' => 'options',
    
    /* (boolean)  Whether to load the option (values saved from this options page) when WordPress starts up. 
    Defaults to false. Added in v5.2.8. */
    'autoload' => false,
    
  );

  acf_add_options_page($options_page);

}

if( function_exists('acf_add_options_page') ) {

  add_action( 'after_setup_theme', __NAMESPACE__ . '\\add_options_page' );
  
}

function wc_ajax_variation_threshold( $qty, $product ) {
  return 50;
}

add_filter( 'woocommerce_ajax_variation_threshold', __NAMESPACE__ . '\\wc_ajax_variation_threshold', 10, 2 );


