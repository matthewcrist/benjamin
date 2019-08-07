<?php
$sticky = get_theme_mod('navbar_sticky_setting', 'no') == 'yes' ? 'sticky' : '';
?>

<div class="usa-overlay"></div>
<header class="usa-header border-bottom border-primary-lighter" role="banner">
  <div class="usa-nav-container">
    <div class="display-flex flex-align-center">
      <div class="padding-x-2 desktop:padding-x-0 padding-y-2 flex-fill">
        <?php benjamin_navbar_brand(); ?>
      </div>
      <button class="usa-menu-btn">Menu</button>
      <nav role="navigation" class="usa-nav display-flex flex-align-center">
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
        <div></div>
        <ul id="translate-navigation" class="usa-nav__primary usa-accordion">
          <li class="usa-nav__primary-item">
            <button class="usa-accordion__button usa-nav__link usa-nav__translate" aria-expanded="false" aria-controls="translations">
              <?php include(get_template_directory() . '/assets/frontend/img/globe-americas.svg'); ?>
              <span id="selectedLanguage">Translations</span>
            </button>
            <ul class="usa-nav__submenu notranslate" id="translations" hidden="">
              <li class="usa-nav__submenu-item">
                <a href="#"data-google-lang="en">
                  <span>English</span>
                </a>
              </li>
              <li class="usa-nav__submenu-item">
                <a href="#" class="" data-google-lang="es">
                  <span>Español</span>
                </a>
              </li>
              <li class="usa-nav__submenu-item">
                <a href="#" class="" data-google-lang="vi">
                  <span>Tiếng Việt</span>
                </a>
              </li>
              <li class="usa-nav__submenu-item">
                <a href="#" class="" data-google-lang="pt">
                  <span>Portugese</span>
                </a>
              </li>
              <li class="usa-nav__submenu-item">
                <a href="#" class="" data-google-lang="ht">
                  <span>Kreyòl Ayisyen</span>
                </a>
              </li>
              <li class="usa-translate__power">
                <?php include(get_template_directory() . '/assets/frontend/img/translate.svg'); ?>
              </li>
            </ul>
          </li>
        </ul>
        <?php if (get_theme_mod('navbar_search_setting', 'none') == 'navbar') : ?>
          <?php get_search_form(); ?>
        <?php endif;?>
      </nav>
    </div>
  </div>
</header>