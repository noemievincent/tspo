<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
define( 'IS_VITE_DEVELOPMENT', true );


include "inc/inc.vite.php";

function tspo_setup() {
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-principal' => __( 'Navigation principale', 'tspo' ),
			'menu-footer'    => __( 'Navigation de pied de page', 'tspo' ),
			'menu-rgpd'      => __( 'RGPD', 'tspo' ),
		)
	);
}

add_action( 'after_setup_theme', 'tspo_setup' );

register_post_type( 'services', [
	'label'         => 'Registres de travail',
	'labels'        => [
		'name'          => 'Registres de travail',
		'singular_name' => 'Registre de travail'
	],
	'description'   => 'Nos registres de travail',
	'menu_position' => 10,
	'menu_icon'     => 'dashicons-block-default',
	'public'        => true,
	'has_archive'   => false,
	'show_ui'       => true,
	'supports'      => [
		'title',
		'thumbnail',
		'excerpt',
		'editor'
	],
] );


function tspo_get_services(): WP_Query {
	return new WP_Query( [
		'post_type' => 'services',
		'order'     => 'ASC',
	] );
}


