<?php

// Remove Yoast `SEO Manager` role
if ( get_role('wpseo_manager') ) {
    remove_role( 'wpseo_manager' );
}
// Remove Yoast `SEO Editor` role
if ( get_role('wpseo_editor') ) {
    remove_role( 'wpseo_editor' );
}

add_role(
    'page_author',
    __( 'Page Author' ),
    array(
        'delete_pages'                  => true,
        'delete_posts'                  => true,
        'edit_others_pages'             => true,
        'edit_others_posts'             => true,
        'edit_pages'                    => true,
        'edit_posts'                    => true,
        'edit_private_pages'            => true,
        'edit_private_posts'            => true,
        'edit_published_pages'          => true,
        'edit_published_posts'          => true,
        'manage_categories'             => true,
        'manage_links'                  => true,
        'read'                          => true,
        'read_private_pages'            => true,
        'read_private_posts'            => true,
        'unfiltered_html'               => true,
        'upload_files'                  => true,
    )
);