<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400italic,700italic,300,700,300italic,400' rel='stylesheet' type='text/css' />
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

  <!--******************-->
  <!--Off canvas wrapper-->
  <!--******************-->
<div id="uthsc-off-canvas-wrapper" class="uthsc-off-canvas-wrapper">

<!--	--><?php //if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
<!--		--><?php //get_template_part( 'template-parts/mobile-off-canvas' ); ?>
<!--	--><?php //endif; ?>
  <style>
    /*off canvas nav heading bg color fix*/
    .uthsc-off-canvas-menu > ul >li >a {
      background: #404040;
    }

    /*off canvas menu icon path fix*/
    .toggle-slide-right {
      background-image: url('/wp-content/themes/emerald-wp/assets/images/nav-toggler-right-uthsc-menu.png');
    }

    .pagination a {
      font-weight: normal;
    }

    .blogpost-entry .entry-content figure.post-thumbnail {
      margin-right:1em;
    }

    .blogpost-entry header h2 {
      font-size: 1.5rem;
    }

    .blogpost-entry header h2 a{
      font-weight: normal;
    }

    .uthsc_advanced_categories ul{
      list-style:none;
      margin-left: 0;
    }
    .uthsc_advanced_categories ul li a {
      font-weight: normal;
    }
    .uthsc_advanced_categories h5 {
      font-size: 1rem;
    }
    p.byline.author {
      display: inline;
    }

    .post header {
      margin-bottom: .8em;
    }

    .post {
      margin-bottom: 2em;
    }

    .blogpost-entry
    {
      position: relative;
      background:#fff;
    }

    .search-label {
      display:none;
    }

    .search .search-label {
      display:inline-block;
    }

    .widget_twitter_timeline {
      height:407px;
      margin-bottom: 1em;
    }

    .main-content .sharedaddy ul li a.sd-button {
      text-decoration: none !important;
      text-shadow: none !important;
      background-image: none !important;
      padding: 1px 8px 0 5px !important;
    }

  </style>

	<?php do_action( 'foundationpress_layout_start' ); ?>

  <?php get_template_part('template-parts/uthsc-site-nav'); ?>
  <?php get_template_part('template-parts/uthsc-banner'); ?>
  <?php get_template_part('template-parts/uthsc-breadcrumbs'); ?>

	<header id="masthead" class="site-header" role="banner">
<!--		<div class="title-bar" data-responsive-toggle="site-navigation">-->
<!--			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>-->
<!--			<div class="title-bar-title">-->
<!--				<a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a>-->
<!--			</div>-->
<!--		</div>-->

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
      <div class="row">
        <div class="top-bar-left">
            <?php foundationpress_top_bar(); ?>

        </div>
      </div>

		</nav>
	</header>
	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
