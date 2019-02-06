<?php

function benjamin_get_navbar_brand()
{
    $output = '';
    $output .= '<div class="usa-logo" id="logo">';
        $output .= '<em class="usa-logo-text usa-logo-image">';
            $output .= '<a href="' . esc_url(home_url()) . '" >';
                $output .= '<img src="' . get_template_directory_uri() . '/assets/frontend/img/logo.svg" alt="' . get_bloginfo('name', 'display') . '" class="usa-header-logo" />';
            $output .= '</a>';
        $output .= '</em>';
    $output .= '</div>';

    return $output;
}


function benjamin_navbar_brand()
{
    echo benjamin_get_navbar_brand(); // WPCS: xss ok.
}


function benjamin_get_custom_logo($logo_id = null)
{

    $logo_id = get_theme_mod('custom_logo', null);
    if (!$logo_id) {
        return false;
    }
    
    $thumb_url_array = wp_get_attachment_image_src($logo_id, 'full', true);

    if (strpos(reset($thumb_url_array), 'wp-includes/images/media/default.png')) {
        return false;
    }

    return $thumb_url_array[0];
}
