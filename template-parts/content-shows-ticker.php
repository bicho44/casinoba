<?php
/**
 * Ticker Shows para el Front Page
 * User: bicho44
 * Date: 2/18/16
 * Time: 3:51 PM
 */

?>
<h2> <?php _e('Próximos Shows', 'imgd'); ?> </h2>
<div class="proximosShows">

    <div class="panel panel-default">
        <!--<div class="panel-heading">
            <span class="glyphicon glyphicon-list-alt"></span><b>News</b>
        </div> -->
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    // Acá seleciono las Páginas que voy a mostrar en la Home
                    $args = array('post_type' => array('imgd_casino_shows'),
                        'post_status' => 'publish',
                        'post_per_page' => 4
                    );
                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        $x = 0;
                        ?>

                        <ul id="demo3" class="list-unstyled">
                            <?php
                            while ($loop->have_posts()) : $loop->the_post();
                                ?>
                                <li class="news-item">
                                    <?php
                                    get_template_part('template-parts/content-front', 'imgd_shows');
                                    $x++;
                                    ?>
                                </li>
                                <?php
                            endwhile;
                            ?>
                        </ul>
                    <?php } ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <div class="panel-footer"></div>
    </div>


</div>
