<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ariston_Directorio_2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?>>
	<?php
	// Must be inside a loop.
	if (has_post_thumbnail()) {?>
        <a href="<?php the_permalink(); ?> ">
        <?php the_post_thumbnail('thumb-archive'); ?>
        </a>
    <?php } ?>
	<header>
		<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
