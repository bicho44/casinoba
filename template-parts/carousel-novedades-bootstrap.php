<?php
/**
 * Template para el Carousel de las Última novedades
 */
?>
<h2><?php _e('Últimas Novedades', 'imgd'); ?></h2>
<div class="novedades">

    <div class="row">
        <div class="col-md-12">
            <div class="news carousel slide" id="novedades">
                <div class="carousel-inner">
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
                                <div id="post-<?php the_ID(); ?>" <?php post_class('new col-xs-12 col-sm-6 col-md-6'); ?>>
                                    <?php
                                    get_template_part('template-parts/content-archive', 'imgd_productos_destacados');
                                    $x++; ?>
                                </div>
                            </div>
                            <?php
                            $x++;
                            $active = "";

                        endwhile; ?>

                        <?php
                    } //endif haveposts ?>
                    <?php wp_reset_query(); ?>
                </div> <!-- Carrousel-inner -->
                <a class="left carousel-control" href="#novedades" data-slide="prev"><i class="icon-chevron-left"></i></a>
                <a class="right carousel-control" href="#novedades" data-slide="next"><i class="icon-chevron-right"></i></a>
            </div> <!-- Destacados -->
        </div>
    </div>

</div> <!-- Novedades -->


<!--
<div class="container">
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                        <a href="#"><img src="http://lorempixel.com/400/200/sports" class="img-responsive">1</a>
                    </div>
                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
</div>
-->