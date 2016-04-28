<?php
/*
 * Productos destacados
 */
?>

<?php
// Acá seleciono las Páginas que voy a mostrar en la Home
$args = array('post_type' => array('imgd_productos'),
    'meta_key' => 'imgd_destacado',
    'meta_value' => '1',
    'post_status' => 'publish',
    'post_per_page' => 3
);
$loop = new WP_Query($args);

if ($loop->have_posts()) {
    $x = 0; ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <?php
            /*
            * Include the Post-Format-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Format name) and that will be used instead.
            */
            get_template_part('template-parts/content-archive', 'imgd_productos');
            ?>
    <?php endwhile; ?>
<?php } ?>
