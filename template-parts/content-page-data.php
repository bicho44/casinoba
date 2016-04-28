
<header class="entry-header">
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
</header><!-- .entry-header -->

<div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>


        <div class="entry-content">

            <?php
            $casino_settings = get_option('casino_settings');
            $magic_tabs = $casino_settings['imgd_magic_tabs'][0];


            if ($magic_tabs=="si") {
                $child = imgd_child_pages(get_the_ID(), get_the_title(), apply_filters('the_content',get_the_content()));
                if ($child){
                    echo $child;
                } else {
                    the_content();
                }
            } else {
                the_content();
            }


            ?>
            
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'imgd'),
                'after' => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php
            edit_post_link(
                sprintf(
                /* translators: %s: Name of current post */
                    esc_html__('Edit %s', 'imgd'),
                    the_title('<span class="screen-reader-text">"', '"</span>', false)
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    </article><!-- #post-## -->

    <?php get_sidebar(); ?>
</div> <!-- End Row -->