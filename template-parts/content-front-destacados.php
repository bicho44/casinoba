<?php
// Acá seleciono las Páginas que voy a mostrar como destacados en la Home
$args = array('post_type' => array('post', 'page', 'portfolio_item', 'imgd_productos', 'imgd_casino_shows'),
    'meta_key' => 'imgd_destacado',
    'meta_value' => '1',
    'post_status' => 'publish',
    'post_per_page' => 6
);
$loop = new WP_Query($args);

if ($loop->have_posts()) {
    $x = 0;
    while ($loop->have_posts()) : $loop->the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-3 col-sm-6 col-xs-6'); ?>>
        <?php
        get_template_part('template-parts/content-archive', 'imgd_productos_destacados');
        $x++;
?>
        </article>
   <?php endwhile; ?>

<?php } ?>
<?php wp_reset_query(); ?>