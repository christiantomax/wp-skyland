<?php

class Mission_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Mission', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Mission', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Mission', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Mission', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Mission', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Mission', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Mission', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Mission', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Mission', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Mission', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Mission', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Mission', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Mission found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Mission found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Mission', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Mission', 'qubick-id' ),
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
			'menu_icon'           => 'dashicons-superhero-alt',
			'supports' => [
				'title',
				'thumbnail',
			],
			'rewrite' => true,
		];

		register_post_type( 'mission', $args );

	}
}

Mission_Post_Type::init();

// metabox for custom post properties
add_filter( 'rwmb_meta_boxes', 'mission' );
function mission( $meta_boxes ) {
	$prefix = 'mission';
	$meta_boxes[] = [
		'title'      => esc_html__( 'Mission Section', 'online-generator' ),
		'id'         => 'mission',
		'post_types' => 'mission',
		'autosave'   => true,
		'fields'     => [
			[
				'id'               => $prefix.'_image',
				'name'             => esc_html__( 'Image', 'english' ),
				'type'    		   => 'image_upload',
				'force_delete'     => false,
				'max_file_uploads' => 1,
			],
			[
				'id'               => $prefix.'_description',
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description', 'english' ),
			],
		],
	];
return $meta_boxes;
}