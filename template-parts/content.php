<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Casino_de_Buenos_Aires
 */

?>

<div class="container">

    <header class="entry-header">
        <?php
        if (is_single()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } else {
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        } ?>
        <!--    </div>-->
    </header><!-- .entry-header -->
    
    <div class="row">

        <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>

            <div class="entry-content">
                <?php
                // Must be inside a loop.
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                }
                ?>

                <?php
                the_content(sprintf(
                /* translators: %s: Name of current post. */
                    wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'casinoba'), array('span' => array('class' => array()))),
                    the_title('<span class="screen-reader-text">"', '"</span>', false)
                ));

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'casinoba'),
                    'after' => '</div>',
                ));
                ?>

            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php casinoba_entry_footer(); ?>
            </footer><!-- .entry-footer -->

        </article><!-- #post-## -->

        <?php get_sidebar(); ?>

    </div>
</div>

