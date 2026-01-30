<?php
function growmodo_setup() {
  register_nav_menus([
    'primary' => 'Primary Menu',
  ]);
}
add_action('after_setup_theme', 'growmodo_setup');

function growmodo_assets() {
  wp_enqueue_style(
    'growmodo-style',
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'growmodo_assets');
