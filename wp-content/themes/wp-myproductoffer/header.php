<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container">
    <h1 class="logo"><a href="<?php echo home_url(); ?>">MyProductOffer</a></h1>
    <?php wp_nav_menu(['theme_location' => 'main_menu']); ?>
  </div>
</header>