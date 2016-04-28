<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ariston_Directorio_2
 */

?>
<div class="container">
	<?php
	// Must be inside a loop.
	if (has_post_thumbnail()) { ?>
		<div class="image-thumbnail">
			<?php the_post_thumbnail('header-cropped'); ?>
		</div>
	<?php }  ?>
<?php 
    get_template_part('template-parts/content','page-data');
?>
</div>