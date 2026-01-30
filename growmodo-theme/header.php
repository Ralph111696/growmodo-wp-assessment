<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <a class="site-logo" href="<?php echo home_url(); ?>">
      <?php bloginfo('name'); ?>
    </a>

    <nav class="main-nav">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'menu_class'     => 'menu',
          'container'      => false,
        ]);
      ?>
    </nav>
  </div>
</header>
