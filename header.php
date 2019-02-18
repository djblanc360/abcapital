<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AB_Capital
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ab-capital' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
			  <a class="navbar-brand" href="<?php echo site_url(); ?>">
			    <img src="<?php echo site_url(); ?>/wp-content/themes/ab-capital/img/ab-logo.png" width="200" height="34" alt="AB Capital Logo">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <?php /* Primary navigation */
					wp_nav_menu( array(
						'menu'  		  => 'top',
						'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'span',
						// 'container_class' => 'collapse navbar-collapse',
						// 'container_id'    => 'bs-example-navbar-collapse-1',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) );
				  ?>
			  </div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<?php if( is_front_page() ) { ?>

		<?php } elseif ( is_singular('investment') ) { ?>

		<?php } else { ?>

			<section id="pageHead" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo site_url(); ?>/wp-content/themes/ab-capital/img/intro-bg-2560.jpg">
				<div class="container pageHeadContent">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="cover"></div>
			</section>

		<?php } ?>