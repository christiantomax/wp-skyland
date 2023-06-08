<?php

class Partner_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Partner', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Partner', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Partner', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Partner', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Partner', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Partner', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Partner', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Partner', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Partner', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Partner', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Partner', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Partner', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Partner found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Partner found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Partner', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Partner', 'qubick-id' ),
			],
			'public'              => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'show_in_rest'        => true,
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite_no_front'    => false,
			'show_in_menu'        => true,
			'menu_position'       => 30,
			'menu_icon'           => 'dashicons-networking',
			'supports' => [
				'title',
				'thumbnail',
			],
			'rewrite' => true,
		];

		register_post_type( 'partner', $args );

	}
}

Partner_Post_Type::init();

// metabox for custom post properties
add_filter( 'rwmb_meta_boxes', 'partner' );
function partner( $meta_boxes ) {
	$prefix = 'partner';
	$meta_boxes[] = [
		'title'      => esc_html__( 'Partner Section', 'online-generator' ),
		'id'         => 'partner',
		'post_types' => 'partner',
		'autosave'   => true,
		'fields'     => [
			[
				'id'               => $prefix.'_image',
				'name'             => esc_html__( 'Logo', 'english' ),
				'type'    		   => 'image_upload',
				'force_delete'     => false,
				'max_file_uploads' => 1,
			],
			[
				'id'               => $prefix.'_name',
				'type' 			   => 'text',
				'name'             => esc_html__( 'Partner Name', 'english' ),
			],
			[
				'id'               => $prefix.'_link',
				'type' 			   => 'text',
				'name'             => esc_html__( 'Partner Link', 'english' ),
			],
		],
	];
return $meta_boxes;
}