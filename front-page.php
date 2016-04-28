<?php
/**
 * The template Para la FrontPage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package IMG Digital v1
 */

get_header(); ?>

<?php do_action('imgdigital_prefront'); ?>
    <!-- Carousel -->
    <div class="container">
        <?php
        /**
         * Acá va el SlideShow
         */
        get_template_part('template-parts/carrousel');
        ?>
    </div>
    <!-- /.Carousel -->

    <div class="container">
        <div class="row">
            <section id="destacados">
                <?php get_template_part('template-parts/content-front', 'destacados') ?>
            </section>
        </div>
        <!-- end Row -->
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php get_template_part('template-parts/carousel', 'novedades')?>
            </div>
            <div class="col-md-4">
                <?php get_sidebar('front'); ?>
            </div>
        </div>
    </div>

    <!-- Pozos Acumulados -->
    <?php get_template_part('template-parts/carousel', 'acumulados'); ?>
    <!-- End Pozos Acumulados -->

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php echo do_shortcode('[contact-form-7 id="195" title="Suscripcion Newsletter"]') ?>
            </div>
            <div class="col-md-9">
                <h4>Barra social</h4>
                <?php get_template_part('template-parts/barra', 'social'); ?>
            </div>
        </div>
    </div>


<?php do_action('imgdigital_postfront'); ?>

<?php get_footer(); ?>