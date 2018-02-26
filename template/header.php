<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description') ?>">

  <meta property="og:title" content="<?php wp_title(); ?>">
  <meta property="og:description" content="<?php bloginfo('description') ?>">
  <meta property="og:image" content="<?php //TODO Add image here ?>">
  <meta property="og:url" content="<?php echo get_permalink(); ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:site_name" content="Bowery">

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="main-nav-wrapper">
      <div class="site-content-wrapper nav-wrapper">
        <a href="<?php get_bloginfo('url'); ?>" class="logo">
          <!-- <img src="" alt="logo" class="logo-img"> -->
          <h1>The Bowery</h1>
        </a>
        <div class='main-nav-dropdown-wrapper'>
        <button class="hamburger hamburger--spring" id='hamburger' type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <?php
          wp_nav_menu( $args = array(
            'menu_class' => 'main-nav-inner hidden',
            'container' => 'nav',
            'walker' => new ddd_nav_walker,
            'theme_location' => 'primary'
          ));
        ?>
        </div>
      </div>
    </div>
