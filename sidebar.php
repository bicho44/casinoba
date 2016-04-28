<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casino_de_Buenos_Aires
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="col-md-4" role="complementary" >
	<div class="widget-area affix">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside><!-- #secondary -->
