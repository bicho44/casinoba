<?php if ( has_nav_menu( 'social' ) ) : // Check if there's a menu assigned to the 'social' location. ?>

    <?php wp_nav_menu(
        array(
            'theme_location'  => 'social',
            'container'       => 'nav',
            'container_id'    => 'barra-social',
            'container_class' => '',
            'menu_id'         => 'barra-social-items',
            'menu_class'      => 'nav nav-tabs nav-justified barra-items ',
            'item_class'      => 'barra-item',
            'depth'           => 1,
            'link_before'    => '<span>',
            'link_after'     => '</span>',
        )
    ); ?>

<?php endif; // End check for menu. ?>