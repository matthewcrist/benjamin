<?php
$sticky = get_theme_mod('navbar_sticky_setting', 'no') == 'yes' ? 'sticky' : '';
?>

<div class="usa-overlay"></div>
<header class="usa-header usa-header--basic" role="banner">
  <div class="usa-nav-container">
    <div class="usa-navbar">
      <div class="usa-logo" id="basic-logo">
        <em class="usa-logo__text"><a href="/" title="Home" aria-label="Home">Project title</a></em>
      </div>
      <button class="usa-menu-btn">Menu</button>
    </div>
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
</header>