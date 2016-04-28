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
    <?php
    // Must be inside a loop.
    if (has_post_thumbnail()) { ?>
        <!-- Carousel -->
        <!--	<div class="container">-->
        <?php
        // Acá va el SlideShow
        get_template_part('template-parts/carrousel-page');
        ?>
        <!--	</div>-->
        <!-- /.Carousel -->
    <?php } ?>
    <?php
    get_template_part('template-parts/content', 'page-data');
    ?>

</div>