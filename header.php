<?php

/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Table_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?> >
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'table-theme' ); ?></a>
    <?php 
      $description = get_bloginfo( 'description', 'display' );
      if ( $description || is_customize_preview() ) :
    ?>
    <!-- Wat is this... <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p> -->
    <?php endif; ?>

    <nav class="navbar navbar-default navbar-fixed-top main-navigation" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <?php // bloginfo('name'); ?>
            <img src="<?php bloginfo('template_url'); ?>/img/logo-top.jpg" alt="Logo" style="height: 60px; width: 100%">
          </a>
        </div>

        <?php 
          wp_nav_menu( array( 
              'theme_location'    => 'primary',
              'menu_id'           => 'primary-menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse navbar-right',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker()
            )
          );
        ?>
      </div>
    </nav>

    <div id="content" class="site-content">
