<?php
/**
 * Template part for displaying page content in productos.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ariston_Directorio
 */

?>

<header class="entry-header">
    <div class="container"><h1>Producto</h1></div>
</header><!-- .entry-header -->

<div class="container">
    <div class="row">
        <?php get_sidebar(); ?>

        <article class="product-content col-md-6">
            <header>
                <?php the_title('<h2>', '</h2>'); ?>
            </header>
            <?php
            // Must be inside a loop.
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?>

            <?php //the_content(); ?>

            <ul class="list-unstyled">
                <li><?php echo the_terms('','imgd_marca_productos', '<strong>Marca: </strong> <br/>');?> </li>
                <li><?php echo the_terms('','imgd_linea_productos', '<strong>Linea: </strong> <br/>');?> </li>
                <li><?php echo the_terms('','imgd_principio_activo', '<strong>Principio Activo: </strong> <br/>');?> </li>
                <li><?php echo the_terms('','imgd_accion_productos', '<strong>Acción Terapéutica: </strong> <br/>');?> </li>
                <li><?php echo the_terms('','imgd_presentacion_productos', '<strong>Presentación Producto: </strong> <br/>');?></li>
            </ul>

            <?php $prospectos = get_post_meta( get_the_ID(), 'imgd_prospectos_productos', false ); ?>

            <?php

            if (!empty($prospectos[0])): ?>
                <h4> Prospectos </h4>
                <ul class="prospectos list-unstyled"">
                    <?php foreach ($prospectos as $prospecto): ?>
                        <?php
                        $pdf = get_post($prospecto);

                        $prosp_title = $pdf->post_title;

                        $src = wp_get_attachment_url( $pdf->ID , false );

                        //piklist::pre($src);
                        ?>

                        <li>
                            <a href="<?php echo $src; ?>" alt="<?php echo $prosp_title; ?>">
                                <?php echo $prosp_title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <footer>
                <!-- Paginación Producto --->
                <?php
                if ( function_exists('wp_bootstrap_pagination') ) {?>
                    <!-- Paginación Bootstrap --->
                 <?php   wp_bootstrap_pagination();
                } else {

                    wp_link_pages(array(
                        'before' => '<ul class="page-links">' . esc_html__('Productos:', 'ariston'),
                        'after' => '</ul>',
                        'link_before' => '<li>',
                        'link_after' => '</li>',
                    ));
                }
                ?>
                <!-- Fin Paginacion Producto --->
            </footer>
        </article><!-- .entry-content -->

        <?php get_sidebar('secundaria'); ?>

    </div><!-- row -->

</div><!-- Container -->