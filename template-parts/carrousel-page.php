<?php
/*
 * Carrousel Para las páginas de data.
 */

// Acá seleciono las Páginas que voy a mostrar en la Home

$image_ids = get_post_meta($post->ID, '_thumbnail_id');

$carrousel = '';


/**
 * Ver si tengo imagenes en el área de Slide Show
 *
 * Pasar por cada una de ellas y asignarlas al slideshow
 * Buscar las ias imagenes del slideshow
 *
 */
if (count($image_ids)!==null) {
// <!-- start loop SlideShow -->
    $active = 0;
    foreach ($image_ids as $image) {
        $myupload = get_post($image);

        if (0 === (int)$active) {
//<!--                 <h3>Active = --><?php //echo $active; <!--</h3>-->
            $class = "active item";
            $indiclass = 'class="active"';

        } else {
//<!--                 <h3>Active  = --> //echo $active; <!--</h3>-->

            $class = "item";
            $indiclass = "";
        }

        $carrousel .= '<div class="' . $class . '"><!-- item -->';
        $carrousel .= wp_get_attachment_image($image, 'header-cropped');
        $carrousel .= '</div><!-- end item -->';

        $active++;

    }
    if ($carrousel != '') { ?>
        <!-- Carrousel -->
        <!--         <div class="container">-->
        <div id="pageCarousel" class="carousel slide" data-ride="carousel">

            <!-- Carousel items -->
            <div class="carousel-inner" role="listbox">
                <?php echo $carrousel; ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#pageCarousel" role="button" data-slide="prev">
                <i class="icon-chevron-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#pageCarousel" role="button" data-slide="next">
                <i class="icon-chevron-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--         </div>-->
        <!-- end Carrousel -->
    <?php }
}
?>
