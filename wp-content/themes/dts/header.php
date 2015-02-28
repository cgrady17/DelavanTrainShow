<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Devalan Train Show
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="http://static.centurion.bluefiber.us/global/js/jquery/jquery.latest.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script src="/wp-content/themes/dts/js/dts-custom.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'dts' ); ?></a>

	<div id="header-container">
      <header id="masthead" class="site-header" role="banner">
          <div class="site-branding">
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/dts/images/logo1.jpg" alt="Delavan Train Show" /></a></h1>
              <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
          </div><!-- .site-branding -->
  
          <nav id="site-navigation" class="main-navigation" role="navigation">
              <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'dts' ); ?></button>
              <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
          </nav><!-- #site-navigation -->
      </header><!-- #masthead -->
    </div>
	<div id="content-wrapper">
	  <?php if (is_front_page()) { ?>
          <div id="front-video-block">
              <div class="home-header">
                  <div class="video-overlay"></div>
                  <video id="bgVideo" width="100%" height="auto" loop poster="/wp-content/themes/dts/images/video-first-frame.jpg" autoplay muted>
                      <source src="/wp-content/uploads/2015/02/The-Delavan-Train-Show.mp4" type="video/mp4"></source>
                      <span class="sfImageWrapper" data-sfref="[images|OpenAccessDataProvider]9555a2ae-822d-4802-9db4-76ee82104faa">
                          <img width="100%" height="auto" displaymode="Original" src="/wp-content/themes/dts/images/video-fallback.jpg">
                      </span>
                  </video>
                  <div class="home-header-hgroup">
                      <h1>Welcome!</h1>
                      <h2>Incredible fun for the entire family, right here in Delavan, WI</h2>
                  </div>
                  <span id="video-audio-text">Click here to toggle audio</span>
              </div>
          </div>
      <?php } ?>
  
      <div id="content" class="site-content">
