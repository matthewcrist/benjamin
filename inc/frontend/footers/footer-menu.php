<div class="usa-footer__primary-section">
    <?php
        $args =  array(
            'theme_location' => 'footer',
            'container' => 'nav',
            'container_class' => 'usa-footer__nav',
            'depth'=> 0,
            'menu_class' => 'add-list-reset grid-row grid-gap',
            'walker' => new BenjaminFooterNavbarWalker(),
            'fallback_cb' => 'benjamin_set_default_menu'
        );
        wp_nav_menu($args);
    ?>
</div>
