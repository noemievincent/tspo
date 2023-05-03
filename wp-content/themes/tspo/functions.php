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
	add_theme_support( 'taxonomies' );

	register_nav_menus(
		[
			'menu-principal' => __( 'Navigation principale', 'tspo' ),
			'menu-footer'    => __( 'Navigation de pied de page', 'tspo' ),
			'menu-rgpd'      => __( 'RGPD', 'tspo' ),
		]
	);
}

add_action( 'after_setup_theme', 'tspo_setup' );

acf_add_options_page( [
	'page_title' => 'Options générales',
	'menu_title' => 'Options générales',
	'menu_slug'  => 'general-options',
	'capability' => 'edit_posts',
	'redirect'   => false
] );

// Custom Post Types & Taxonomies
register_taxonomy(
	'roles',
	'members',
	[
		'label'             => 'Branches',
		'labels'            => [
			'name'          => 'Branches',
			'singular_name' => 'Branche',
			'all_items'     => 'Toutes les branches',
			'edit_item'     => 'Éditer la branche',
			'view_item'     => 'Voir la branche',
			'update_item'   => 'Mettre à jour la branche',
			'add_new_item'  => 'Ajouter une branche',
			'new_item_name' => 'Nouvelle branche',
			'search_items'  => 'Rechercher parmi les branches',
		],
		'show_admin_column' => true,
		'hierarchical'      => false,
	]
);

register_taxonomy(
	'clients',
	'worksites',
	[
		'label'             => 'Clients',
		'labels'            => [
			'name'          => 'Clients',
			'singular_name' => 'Client',
			'all_items'     => 'Tous les clients',
			'edit_item'     => 'Éditer le client',
			'view_item'     => 'Voir le client',
			'update_item'   => 'Mettre à jour le client',
			'add_new_item'  => 'Ajouter un client',
			'new_item_name' => 'Nouveau client',
			'search_items'  => 'Rechercher parmi les clients',
		],
		'show_admin_column' => true,
		'hierarchical'      => false,
	]
);

register_post_type( 'worksites', [
	'label'         => 'Chantiers',
	'labels'        => [
		'name'          => 'Chantiers',
		'singular_name' => 'Chantier'
	],
	'description'   => 'Chantiers réalisés',
	'menu_position' => 10,
	'menu_icon'     => 'dashicons-admin-multisite',
	'public'        => true,
	'has_archive'   => false,
	'show_ui'       => true,
	'supports'      => [
		'title',
		'thumbnail',
		'editor'
	],
] );

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

register_post_type( 'members', [
	'label'         => 'Membres de l’équipe',
	'labels'        => [
		'name'          => 'Membres',
		'singular_name' => 'Membre'
	],
	'description'   => 'Notre équipe',
	'menu_position' => 10,
	'menu_icon'     => 'dashicons-groups',
	'public'        => true,
	'has_archive'   => false,
	'show_ui'       => true,
	'supports'      => [
		'title',
		'thumbnail',
	],
] );

register_post_type( 'partners', [
	'label'         => 'Partenaires',
	'labels'        => [
		'name'          => 'Partenaires',
		'singular_name' => 'Partenaire'
	],
	'description'   => 'Nos partenaires',
	'menu_position' => 10,
	'menu_icon'     => 'dashicons-networking',
	'public'        => true,
	'has_archive'   => false,
	'show_ui'       => true,
	'supports'      => [
		'title',
		'thumbnail',
	],
] );

register_post_type( 'certifications', [
	'label'         => 'Certifications',
	'labels'        => [
		'name'          => 'Certifications',
		'singular_name' => 'Certification'
	],
	'description'   => 'Nos certifications',
	'menu_position' => 10,
	'menu_icon'     => 'dashicons-awards',
	'public'        => true,
	'has_archive'   => false,
	'show_ui'       => true,
	'supports'      => [
		'title',
		'thumbnail',
		'editor'
	],
] );

register_post_type( 'jobs', [
	'label'         => 'Offres d’emplois',
	'labels'        => [
		'name'          => 'Offres d’emplois',
		'singular_name' => 'Offre d’emplois'
	],
	'description'   => 'Nos offres d’emplois',
	'menu_position' => 10,
	'menu_icon'     => 'dashicons-id-alt',
	'public'        => true,
	'has_archive'   => false,
	'show_ui'       => true,
	'supports'      => [
		'title',
		'thumbnail',
		'editor'
	],
] );

// Get CPT functions
function tspo_get_services(): WP_Query {
	return new WP_Query( [
		'post_type' => 'services',
		'order'     => 'ASC',
	] );
}

function tspo_get_roles(): array|WP_Error|string {
	return get_terms( [
		'taxonomy'   => 'roles',
		'hide_empty' => true
	] );
}

function tspo_get_members( $term_id ): array {
	return get_posts(
		[
			'posts_per_page' => -1,
			'post_type' => 'members',
			'order'     => 'ASC',
			'tax_query' => [
				[
					'taxonomy' => 'roles',
					'field'    => 'term_id',
					'terms'    => $term_id,
				]
			]
		]
	);
}

function tspo_get_partners(): WP_Query {
	return new WP_Query( [
		'post_type' => 'partners',
		'order'     => 'ASC',
	] );
}

function tspo_get_certifications(): WP_Query {
	return new WP_Query( [
		'post_type' => 'certifications',
		'order'     => 'ASC',
	] );
}

// Add featured image as a custom column
add_filter( 'manage_members_posts_columns', 'add_featured_image_column' );
add_action( 'manage_members_posts_custom_column', 'display_featured_image_column_content', 10, 2 );

add_filter( 'manage_partners_posts_columns', 'add_featured_image_column' );
add_action( 'manage_partners_posts_custom_column', 'display_featured_image_column_content', 10, 2 );

add_filter( 'manage_certifications_posts_columns', 'add_featured_image_column' );
add_action( 'manage_certifications_posts_custom_column', 'display_featured_image_column_content', 10, 2 );
function add_featured_image_column( $columns ) {
	$columns['featured_image'] = 'Featured Image';

	// Remove the featured image column from its original position
	$featured_image_column = $columns['featured_image'];
	unset( $columns['featured_image'] );

	// Move the featured image column to the beginning of the array
	$columns = array_slice( $columns, 0, 1, true ) + array( 'featured_image' => $featured_image_column ) + array_slice( $columns, 1, null, true );

	return $columns;
}

function display_featured_image_column_content( $column, $post_id ) {
	if ( 'featured_image' === $column ) {
		echo get_the_post_thumbnail( $post_id, array( 50, 50 ) );
	}
}