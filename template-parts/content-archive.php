<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Casino_ba
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php casinoba_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <?php
        // Must be inside a loop.
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        }
        ?>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ariston2' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

        <nav>
		<?php
			wp_link_pages( array(
				'before' => '<ul class="pager">' . esc_html__( 'Pages:', 'ariston2' ),
				'after'  => '</ul>',
			) );
		?>
        </nav>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php casinoba_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
