<?php

class Investment_Opportunities_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Investment Opportunities', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Investment Opportunities', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Investment Opportunities', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Investment Opportunities', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Investment Opportunities', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Investment Opportunities', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Investment Opportunities', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Investment Opportunities', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Investment Opportunities', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Investment Opportunities', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Investment Opportunities', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Investment Opportunities', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Investment Opportunities found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Investment Opportunities found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Investment Opportunities', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Investment Opportunities', 'qubick-id' ),
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
			'menu_icon'           => 'dashicons-lightbulb',
			'supports' => [
				'title',
				'thumbnail',
			],
			'rewrite' => true,
		];

		register_post_type( 'opportunities', $args );

	}
}

Investment_Opportunities_Post_Type::init();


// metabox for custom post properties
add_filter( 'rwmb_meta_boxes', 'investment_opportunities' );
function investment_opportunities( $meta_boxes ) {
	$prefix = 'investment_opportunities';
	$meta_boxes[] = [
		'title'      => esc_html__( 'Investment Opportunities Section', 'online-generator' ),
		'id'         => 'opportunities',
		'post_types' => 'opportunities',
		'autosave'   => true,
		'fields'     => [
			[
				'id'               => $prefix.'_paragraph',
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Paragraph', 'english' ),
			],
			[
				'id'               => $prefix.'_image',
				'name'             => esc_html__( 'Image when hover', 'english' ),
				'type'    		   => 'image_advanced',
				'force_delete'     => false,
				'max_file_uploads' => 1,
			],
		],
	];
return $meta_boxes;
}

