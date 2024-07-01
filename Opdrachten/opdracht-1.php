<?php

function koffie_zetten() {
	register_nav_menus(
		[
			'header' => __( 'Header Menu', 'm8prog-custom' ),
			'footer'  => __( 'Footer Menu', 'm8prog-custom' ),
		]
	);
}

add_action( 'init', 'koffie_zetten' );


function pas_de_frontend_aan() {
	wp_enqueue_script(
		'm8prog',
		get_template_directory_uri() . '/dist/js/main.js',
		[ 'jquery' ],
		'1.0.0',
		[
			'strategy'  => 'defer',
			'in_footer' => true,
		]
	);

	wp_register_style(
		'm8prog_styles',
		get_template_directory_uri() . '/dist/css/main.min.css',
		[],
		'1.0.0'
	);
	wp_enqueue_style( 'm8prog_styles' );
}

add_action( 'wp_enqueue_scripts', 'pas_de_frontend_aan' );
