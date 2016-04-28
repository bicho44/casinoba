<?php
/**
 * Template part for displaying Ultimas novedades.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package IMGD porcitions
 */

?>

<?php
// Must be inside a loop.
if (has_post_thumbnail()) { ?>
    <a href="<?php the_permalink(); ?> "
        <?php the_post_thumbnail('medium'); ?>
    </a>
<?php } ?>
<header class="destaddos-caption">
    <?php get_the_terms(); ?>
    <?php the_title(sprintf('<h3><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>
    <?php imgd_content(35); ?>
</header><!-- .entry-header -->
