<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Casino_de_Buenos_Aires
 */

?>
<header class="entry-header">
	<div class="container"><?php the_title('<h1 class="entry-title">', '</h1>'); ?></div>
</header><!-- .entry-header -->

<div class="container">
	<div class="row">

		<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>

			<div class="entry-content">
				<?php
				// Must be inside a loop.
				if (has_post_thumbnail()) {
					the_post_thumbnail();
				}
				?>
                <div class="show_data">
				<?php imgd_casino_show_data (get_the_ID()); ?>
            </div>
				<?php the_content(); ?>

			</div><!-- .entry-content -->

			<footer class="entry-footer">
                <?php
                wp_link_pages( array(
                    'before' => '<ul class="page-links">' . esc_html__( 'Pages:', 'imgd' ),
                    'after'  => '</ul>',
                    'link_before'      => '<li>',
                    'link_after'       => '</li>',
                ) );
                ?>
			</footer><!-- .entry-footer -->

		</article><!-- #post-## -->

		<?php get_sidebar('shows'); ?>

	</div>
</div>
