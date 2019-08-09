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
        <form class="usa-search usa-search--small order-last width-card-lg">
          <div role="search">
            <label class="usa-sr-only" for="basic-search-field-small">Search small</label>
            <input class="usa-input" id="basic-search-field-small" type="search" name="search">
            <button class="usa-button" type="submit"><span class="usa-sr-only">Search</span></button>
          </div>
        </form>
        <?php
          $args =  array(
            'theme_location' => 'primary',
            'container' => '',
            'menu_class' => 'order-first usa-nav__primary usa-accordion',
            'walker' => new BenjaminNavbarWalker(),
            'fallback_cb' => 'benjamin_set_default_menu'
          );

          wp_nav_menu($args);
        ?>
        <ul id="translate-navigation" class="usa-nav__primary usa-accordion notranslate" style="margin-top: 0;">
          <li class="usa-nav__primary-item">
            <button class="usa-accordion__button usa-nav__link usa-nav__translate" aria-expanded="false" aria-controls="translations">
              <?php include(get_template_directory() . '/assets/frontend/img/globe-americas.svg'); ?>
              <span id="selectedLanguage">Languages</span>
            </button>
            <ul class="usa-nav__submenu" id="translations" hidden="">
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
      </nav>
    </div>
  </div>
</header>