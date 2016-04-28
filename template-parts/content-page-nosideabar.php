<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CasinoBA
 */
?>

<div class="container">

	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<div class="row">
		<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>

			<div class="entry-content">

				<?php the_content(); ?>
				<?php
				wp_link_pages(array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'ariston2'),
					'after' => '</div>',
				));
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
					/* translators: %s: Name of current post */
						esc_html__('Edit %s', 'ariston2'),
						the_title('<span class="screen-reader-text">"', '"</span>', false)
					),
					'<span class="edit-link btn btn-primary">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->
	</div> <!-- End Row -->
</div>