<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casino_de_Buenos_Aires
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="front-secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->
