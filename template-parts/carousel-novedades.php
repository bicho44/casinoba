<?php
/**
 * Template para el Carousel de las Última novedades
 */
?>
<h2><?php _e('Últimas Novedades', 'imgd'); ?></h2>
<div class="novedades">

    <div class="row">
        <div class="col-md-12">

            <div class="news owl-carousel" id="novedades">
                    <?php
                    // Acá seleciono las Páginas que voy a mostrar en la Home
                    $args = array('post_type' => array('post'),
                        'post_status' => 'publish',
                        'post_per_page' => 4
                    );
                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        $x = 0;
                        while ($loop->have_posts()) : $loop->the_post();
                            if ($x===0) $active = "active";
                            ?>
                            <div class="item <?php echo $active; ?>">
                                    <?php
                                    get_template_part('template-parts/content-archive', 'imgd_productos_destacados');
                                    $x++; ?>
                            </div>
                            <?php
                            $x++;
                            $active = "";

                        endwhile; ?>

                        <?php
                    } //endif haveposts ?>
                    <?php wp_reset_query(); ?>
            </div> <!-- Destacados -->
        </div>
    </div>

</div> <!-- Novedades -->