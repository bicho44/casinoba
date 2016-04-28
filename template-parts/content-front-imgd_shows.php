<?php
/**
 * Template part for displaying Shows en el Front Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ariston_Directorio_2
 */

// Must be inside a loop.
if (has_post_thumbnail()) { ?>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(array(65,65),array('class'=>'img-circle')); ?>
    </a>
<?php } ?>

<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
<?php
//var_dump(get_post_meta($loop->the_ID, 'imgd_casino_show_date'));
//var_dump(get_post_meta($loop->the_ID, 'imgd_casino_show_date'));

?>
