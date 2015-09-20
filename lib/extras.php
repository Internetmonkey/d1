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
add_action('woocommerce_before_main_content', __NAMESPACE__ . '\\remove_wc_sidebar' );

function add_to_cart_text($default, $product) {
  $type = $product->product_type;

  if ( !$type || $type !== 'variable' ) {
    return $default;
  }

  return __('Select Size', 'woocommerce');

}

add_filter('woocommerce_product_add_to_cart_text', __NAMESPACE__ .'\\add_to_cart_text', 20, 2);
