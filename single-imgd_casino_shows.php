<?php
/**
 * The template for displaying all Shows posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Casino_de_Buenos_Aires
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content-single', 'imgd_casino_shows');
                ?>
                <div class="container">
                    <?php the_post_navigation(); ?>
                </div>
                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                /*if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;*/

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->

    </div><!-- #primary -->

<?php
get_footer();