<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

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
  if (Setup\display_sidebar()) {
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


/**
 * Add data attr to tour button

 */
function main_menu_atts( $atts, $item, $args )
{
  // The ID of the target menu item
  $menu_ids = 186;
  $menu_ids = array("186", "12");

  // inspect $item
  foreach($menu_ids as $i => $menu_id) {
    if ($item->ID == $menu_id) {
      $atts['data-sumome-listbuilder-id'] = '6ef14af2-fdf1-4e55-82d3-b5abb3bce4f8';
    }
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', __NAMESPACE__ . '\\main_menu_atts', 10, 3);

