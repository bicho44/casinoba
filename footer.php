<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casino_de_Buenos_Aires
 */

?>

	</div><!-- #content -->

	<?php if (function_exists('wpgmaps_activate')) { ?>
	<div id="mapa" class="container">
		<?php echo do_shortcode('[wpgmza id="1"]'); ?>
	</div> <!-- Mapa -->
	<?php } ?>
	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="logo-pie">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-white-footer.png " alt="<?php bloginfo('name'); ?> ">
		</div>

		<?php
		if ( has_nav_menu( 'secondary' ) ) :
			wp_nav_menu(array(
					'menu' => 'secondary',
					'theme_location' => 'secondary',
					'depth' => 1,
					'container' => 'div',
					'container_class' => 'secondary',
					'container_id' => 'secondary',
					'menu_class' => 'list-inline',
				)
			);

		endif;
		?>

		<div class="site-info">

			<a href="<?php echo esc_url( __( 'https://imgdigital.com.ar/', 'casinoba' ) ); ?>"><?php printf( esc_html__( 'Sitio desarrolado %s', 'casinoba' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Tema: %1$s por %2$s.', 'casinoba' ), 'Casino BA', '<a href="http://imgdigital.com.ar" rel="developer">Federico Reinoso</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
