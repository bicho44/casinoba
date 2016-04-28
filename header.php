<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casino_de_Buenos_Aires
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'casinoba' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand"
					   title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img
							src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-gris.png"
							alt="<?php esc_attr(bloginfo('name')); ?>"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php
					wp_nav_menu( array(
							'menu' => 'primary',
							'theme_location' => 'primary',
							'depth' => 2,
							'container' => 'div',
							/*'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                            'container_id' => 'bs-example-navbar-collapse-1',*/
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
						)
					);
					?>


					<!-- Menu Social -->
					<?php get_template_part('template-parts/menu', 'social'); ?>

				</div> <!-- /.navbar-collapse -->

			</div><!-- /.container -->
		</nav>



	</header><!-- #masthead -->

	<div id="content" class="site-content">
