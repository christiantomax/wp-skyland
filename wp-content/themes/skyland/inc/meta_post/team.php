<?php

class Team_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Team', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Team', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Team', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Team', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Team', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Team', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Team', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Team', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Team', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Team', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Team', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Team', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Team found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Team found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Team', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Team', 'qubick-id' ),
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
			'menu_icon'           => 'dashicons-groups',
			'supports' => [
				'title',
				'thumbnail',
			],
			'rewrite' => true,
		];

		register_post_type( 't_post', $args );

	}
}

Team_Post_Type::init();

// metabox for custom post properties
add_filter( 'rwmb_meta_boxes', 'team_custom_post' );
function team_custom_post( $meta_boxes ) {
	$prefix = 'team';
	$meta_boxes[] = [
		'title'      => esc_html__( 'Team Section', 'online-generator' ),
		'id'         => 't_post',
		'post_types' => 't_post',
		'autosave'   => true,
		'fields'     => [
			[
				'id'               => $prefix.'_image',
				'name'             => esc_html__( 'Image', 'english' ),
				'type'    		   => 'image_advanced',
				'force_delete'     => true,
				'max_file_uploads' => 1,
			],
			[
				'id'               => $prefix.'_full_name',
				'type' 			   => 'text',
				'name'             => esc_html__( 'Full Name', 'english' ),
			],
			[
				'id'               => $prefix.'_position',
				'type' 			   => 'text',
				'name'             => esc_html__( 'position', 'english' ),
			],
			[
				'id'               => $prefix.'_link',
				'type' 			   => 'text',
				'name'             => esc_html__( 'Link Personal', 'english' ),
			],
		],
	];
return $meta_boxes;
}