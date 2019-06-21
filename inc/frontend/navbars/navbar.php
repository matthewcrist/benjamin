<?php
$sticky = get_theme_mod('navbar_sticky_setting', 'no') == 'yes' ? 'sticky' : '';
?>

<div class="usa-overlay"></div>
<header class="usa-header border-bottom border-primary-lighter" role="banner">
  <div class="usa-nav-container">
    <div class="display-flex flex-align-center">
      <div class="flex-fill padding-x-2 desktop:padding-x-0 padding-y-1 desktop:padding-y-3">
        <?php benjamin_navbar_brand(); ?>
      </div>
      <button class="usa-menu-btn">Menu</button>
      <nav role="navigation" class="usa-nav">
        <button class="usa-nav__close"><img src="/assets/img/close.svg" alt="close"></button>
        <?php
          $args =  array(
            'theme_location' => 'primary',
            'container' => '',
            'menu_class' => 'usa-nav__primary usa-accordion',
            'walker' => new BenjaminNavbarWalker(),
            'fallback_cb' => 'benjamin_set_default_menu'
          );

          wp_nav_menu($args);
        ?>
        <?php if (get_theme_mod('navbar_search_setting', 'none') == 'navbar') : ?>
          <?php get_search_form(); ?>
        <?php endif;?>
      </nav>
    </div>
  </div>
</header>