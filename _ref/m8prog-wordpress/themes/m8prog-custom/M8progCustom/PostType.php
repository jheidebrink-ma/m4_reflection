<?php

$labels = [
	'name'               => __( 'Woods', 'm8prog-custom' ),
	'singular_name'      => __( 'Wood', 'm8prog-custom' ),
	'add_new'            => __( 'New Wood', 'm8prog-custom' ),
	'add_new_item'       => __( 'Add New Wood', 'm8prog-custom' ),
	'edit_item'          => __( 'Edit Wood', 'm8prog-custom' ),
	'new_item'           => __( 'New Wood', 'm8prog-custom' ),
	'view_item'          => __( 'View Wood', 'm8prog-custom' ),
	'search_items'       => __( 'Search Wood', 'm8prog-custom' ),
	'not_found'          => __( 'No Wood Found', 'm8prog-custom' ),
	'not_found_in_trash' => __( 'No Wood found in Trash', 'm8prog-custom' ),
];

$args = [
	'labels'       => $labels,
	'has_archive'  => true,
	'public'       => true,
	'hierarchical' => true,
	'supports'     => [
		'title',
		'editor',
		'excerpt',
		'thumbnail',
		'page-attributes',
	],
	'taxonomies'   => [ 'category' ],
	'rewrite'      => [ 'slug' => 'wood' ],
	'show_in_rest' => true,
];

register_post_type( 'wood', $args );



$labels = [
	'name'              => _x( 'Origins', 'taxonomy general name', 'm8prog-custom' ),
	'singular_name'     => _x( 'Origin', 'taxonomy singular name', 'm8prog-custom' ),
	'search_items'      => __( 'Search Origins', 'm8prog-custom' ),
	'popular_items'     => __( 'Popular Origins', 'm8prog-custom' ),
	'all_items'         => __( 'All Origins', 'm8prog-custom' ),
	'parent_item'       => __( 'Parent Origin', 'm8prog-custom' ),
	'parent_item_colon' => __( 'Parent Origin:', 'm8prog-custom' ),
	'edit_item'         => __( 'Edit Origin', 'm8prog-custom' ),
	'update_item'       => __( 'Update Origin', 'm8prog-custom' ),
	'add_new_item'      => __( 'Add New Origin', 'm8prog-custom' ),
	'new_item_name'     => __( 'New Origin Name', 'm8prog-custom' ),
	'menu_name'         => __( 'Origins', 'm8prog-custom' ),
];

$args = [
	'hierarchical'      => true,
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'show_in_rest'      => true,
	'rewrite'           => [ 'slug' => 'origin' ],
];

register_taxonomy( 'origin', 'wood', $args );