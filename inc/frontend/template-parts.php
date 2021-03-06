<?php


/**
 * gets the 404 settings
 * @return array keyed array with settings
 */
function benjamin_get_404_settings() {

    $content = get_theme_mod('_404_page_content_setting', 'default');
    $pid = get_theme_mod('_404_page_select_setting', null);
    $header_page = get_theme_mod('_404_header_page_content_setting', null);

    $args = array(
        'header_page' => $header_page,
        'content' => $content,
        'pid' => $pid,
    );

    return $args;
}



/**
 * Get the header parts
 *
 * - banner" (only available if the domain is a .gov or .mil)
 * - navbar
 * - hero banner
 *
 * @return markup the echo mark up
 */
function benjamin_the_header() {
    $template = benjamin_get_template();

    $layout_settings = get_theme_mod($template.'_page_layout_setting', '[]');
    $layout_settings = json_decode($layout_settings);

    $json = benjamin_get_default_header_srotables();
    $order = json_decode(get_theme_mod('header_sortables_setting', $json));

    $order = $order ? $order : benjamin_default_header_order();

    foreach($order as $component):
        if($layout_settings && in_array($component->name, $layout_settings))
            continue;
        switch($component->name):
            case 'banner':
                if( get_theme_mod('banner_visibility_setting', 'hide') !== 'hide')
                    require get_template_directory() . '/inc/frontend/section-banner.php';
                break;
            case 'navbar':
                require get_template_directory() . '/inc/frontend/navbars/navbar.php';
                break;
        endswitch;
    endforeach;
}


/**
 * The footer conditional
 */
function benjamin_the_footer() {
    $template = benjamin_get_template();

    $json = benjamin_get_default_footer_sortables();

    $sortables = get_theme_mod('footer_sortables_setting', $json);

    if(!$sortables || benjamin_hide_layout_part('footer', $template) ) {
        return;
    }

    $sortables = json_decode($sortables);
    foreach($sortables as $s):
        $name = $s->name;

        switch($name):
            case 'footer-menu':
                require get_template_directory() . '/inc/frontend/footers/footer-menu.php';
                break;
            case 'widget-area-1':
                require get_template_directory() . '/inc/frontend/footers/footer-widgets-1.php';
                break;
            case 'widget-area-2':
                require get_template_directory() . '/inc/frontend/footers/footer-widgets-2.php';
                break;

        endswitch;

    endforeach;
}
