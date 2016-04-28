
<header class="entry-header">
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
</header><!-- .entry-header -->

<div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>


        <div class="entry-content">

            <?php
            //@todo Formatear Tabs
            // Buscar si tiene o no páginas hijas
            // 1 bucle con los títulos
            // otro Bucle con los contenidos
            the_content();

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