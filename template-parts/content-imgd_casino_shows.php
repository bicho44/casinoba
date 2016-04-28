<?php
/**
 * Template part for displaying page content in productos.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ariston_Directorio
 */

?>


<article class="show-content">
    <header>
        <a href="<?php the_permalink();?>"> <?php the_title('<h2>', '</h2>'); ?></a>
    </header>
    <?php
    // Must be inside a loop.
    if (has_post_thumbnail()) {?>
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('show-archive'); ?>
        </a>
    <?php } ?>

    <?php imgd_content('30'); ?>

    <footer>

       <?php $fecha = get_post_meta(get_the_ID() , 'imgd_casino_show_fecha', true); ?>
       <?php
       if (!empty($fecha)) {
           ?>
        El <?php echo $fecha; ?>
        a las <?php echo get_post_meta(get_the_ID() , 'imgd_casino_show_hora', true); ?>

       <?php } ?>

        <?php $salones = get_post_meta(get_the_ID() , 'imgd_casino_show_salon');
        //echo var_dump($salones);
        $salon = get_term( $salones[0],'imgd_casino_salon'); ?>

        <?php
        if(!empty($salon)) {
            echo '<h4>'.$salon->name.'</h4>';
        }

        ?>
    </footer>
</article><!-- .entry-content -->
