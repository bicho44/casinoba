<?php
/**
 * Title: Noticias
 * Class: custom-class-1 custom-class-2
 * Width: 500
 *
 *
 * Widget para mostarr las últimas Noticias con un Slideshow
 * User: bicho44
 * Date: 2/23/16
 * Time: 7:49 PM
 */

//piklist::pre($settings);

$title = "";
$cant = "";
$orden = "";

//global $imgd_email;
if (isset($settings['imgd_news_widget_title'])){
    $title = $settings['imgd_news_widget_title'];
}

if (isset($settings['imgd_news_widget_cantidad']))  $cant = absint( $settings['imgd_news_widget_cantidad'][0]);


//if (isset($settings['imgd_news_widget_orden']))  $image = $settings['lateral_image'];

if (isset($settings['imgd_news_widget_orden'])) $orden = $settings['imgd_shows_widget_orden'];


/*
 * Array
(
    [imgd_shows_widget_title] => Próximos Shows
    [imgd_shows_widget_cantidad] => Array
        (
            [0] => 5
        )

    [imgd_shows_widget_orden] => fecha
)
 */


echo $before_title;

echo $title;

echo $after_title;

echo $before_widget;
// Acá seleciono las Páginas que voy a mostrar en la Home
$args = array(
    'post_type' => array('post'),
    'post_status' => 'publish',
    'post_per_page' => $cant
);
$loop = new WP_Query($args);

if ($loop->have_posts()) {
    $x = 0;
    ?>
    <div class="carousel slide" id="newssidebar">
        <div class="carousel-inner">
            <?php
            while ($loop->have_posts()) : $loop->the_post();
                if ($x===0) $active = "active";
                ?>
                <div class="item <?php echo $active; ?>">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(array(370,150),array('class'=>'img-responsive'));;?>
                    </a>
                </div>
                <?php
                $x++;
                $active = "";
            endwhile;
            ?>
        </div> <!-- #Carousel Inner -->

        <a class="left carousel-control" href="#newssidebar" data-slide="prev"><i class="icon-chevron-left"></i></a>
        <a class="right carousel-control" href="#newssidebar" data-slide="next"><i class="icon-chevron-right"></i></a>
    </div> <!-- #Carousel  -->
<?php } ?>
<?php wp_reset_query();


echo $after_widget;