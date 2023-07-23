<?php

class Property_Category_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Properties Category', 'qubick-id-property' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Properties Category', 'qubick-id-property' ),
				'name_admin_bar'     => esc_html__( 'Properties Category', 'qubick-id-property' ),
				'add_new'            => esc_html__( 'Add Properties Category', 'qubick-id-property' ),
				'add_new_item'       => esc_html__( 'Add New Properties Category', 'qubick-id-property' ),
				'new_item'           => esc_html__( 'New Properties Category', 'qubick-id-property' ),
				'edit_item'          => esc_html__( 'Edit Properties Category', 'qubick-id-property' ),
				'view_item'          => esc_html__( 'View Properties Category', 'qubick-id-property' ),
				'update_item'        => esc_html__( 'View Properties Category', 'qubick-id-property' ),
				'all_items'          => esc_html__( 'All Properties Category', 'qubick-id-property' ),
				'search_items'       => esc_html__( 'Search Properties Category', 'qubick-id-property' ),
				'parent_item_colon'  => esc_html__( 'Parent Properties Category', 'qubick-id-property' ),
				'not_found'          => esc_html__( 'No Properties Category found', 'qubick-id-property' ),
				'not_found_in_trash' => esc_html__( 'No Certifications found in Trash', 'qubick-id-property' ),
				'name'               => esc_html__( 'Properties Category', 'qubick-id-property' ),
				'singular_name'      => esc_html__( 'Properties Category', 'qubick-id-property' ),
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
			'menu_icon'           => 'dashicons-category',
			'supports' => [
				'title',
				'thumbnail',
			],
			'rewrite' => true,
		];
		register_post_type( 'property_category', $args );
	}
}

Property_Category_Post_Type::init();


// metabox for custom post properties
add_filter( 'rwmb_meta_boxes', 'properties_category_section' );
function properties_category_section( $meta_boxes ) {
	$prefix = 'properties_category_';
	$meta_boxes[] = [
		'title'      => esc_html__( 'Properties Category Section', 'online-generator' ),
		'id'         => 'properties_category',
		'post_types' => 'property_category',
		'autosave'   => true,
		'fields'     => [
			[
				'id'               => $prefix.'title_1',
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
			],
			[
				'id'               => $prefix.'image_thumbnail',
				'name'             => esc_html__( 'Image Thumbnail', 'english' ),
				'type'    		   => 'image_upload',
				'force_delete'     => true,
				'max_file_uploads' => 1,
			],
		],
	];
return $meta_boxes;
}