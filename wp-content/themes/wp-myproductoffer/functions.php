<?php
function mpo_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([ 'main_menu' => 'Main Menu' ]);
}
add_action('after_setup_theme', 'mpo_theme_setup');

function mpo_enqueue_scripts() {
  wp_enqueue_style('mpo-style', get_stylesheet_uri());
  wp_enqueue_style('mpo-custom', get_template_directory_uri().'/assets/css/styles.css');
  wp_enqueue_script('mpo-scripts', get_template_directory_uri().'/assets/js/scripts.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'mpo_enqueue_scripts');

function mpo_register_product_cpt() {
  register_post_type('product', [
    'labels' => [ 'name' => 'Products', 'singular_name' => 'Product' ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => [ 'slug' => 'products' ],
    'supports' => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
    'show_in_rest' => true
  ]);
}
add_action('init', 'mpo_register_product_cpt');
?>