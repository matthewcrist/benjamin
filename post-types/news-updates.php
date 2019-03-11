<?php

/**
 * Registers the `news` post type.
 */
// Register Custom Post Type
function news_init() {

	$labels = array(
		'name'                  => _x( 'News', 'Post Type General Name', 'news' ),
		'singular_name'         => _x( 'News', 'Post Type Singular Name', 'news' ),
		'menu_name'             => __( 'News', 'news' ),
		'name_admin_bar'        => __( 'News', 'news' ),
		'archives'              => __( 'News Archive', 'news' ),
		'attributes'            => __( 'News Attribute', 'news' ),
		'parent_item_colon'     => __( 'News', 'news' ),
		'all_items'             => __( 'All', 'news' ),
		'add_new_item'          => __( 'Add News', 'news' ),
		'add_new'               => __( 'Add News', 'news' ),
		'new_item'              => __( 'Add News', 'news' ),
		'edit_item'             => __( 'Edit News', 'news' ),
		'update_item'           => __( 'Update News', 'news' ),
		'view_item'             => __( 'View News', 'news' ),
		'view_items'            => __( 'View News', 'news' ),
		'search_items'          => __( 'Search News', 'news' ),
		'not_found'             => __( 'Not found', 'news' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'news' ),
		'featured_image'        => __( 'Featured Image', 'news' ),
		'set_featured_image'    => __( 'Set featured image', 'news' ),
		'remove_featured_image' => __( 'Remove featured image', 'news' ),
		'use_featured_image'    => __( 'Use as featured image', 'news' ),
		'insert_into_item'      => __( 'Insert into item', 'news' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'news' ),
		'items_list'            => __( 'News list', 'news' ),
		'items_list_navigation' => __( 'News list navigation', 'news' ),
		'filter_items_list'     => __( 'Filter news list', 'news' ),
	);
	$args = array(
		'label'                 => __( 'News', 'news' ),
		'description'           => __( 'Used to generate news and updates.', 'news' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rest_base'             => 'news',
	);

	register_post_type( 'news', $args );

}
add_action( 'init', 'news_init', 0 );

// Forms need to be marked as a form or document
register_taxonomy("news-category", 
	array(
		"news"
	), 
	array(
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_in_rest'               => true,
		'show_tagcloud'              => false,
		"label" 					 => "Categories", 
		"singular_label" 			 => "Category",
	)
);

// This doesn't need featured
function remove_meta_boxes_news() {
	remove_meta_box('wpseo_meta', 'news', 'normal');
}
add_action('add_meta_boxes', 'remove_meta_boxes_news', 100);