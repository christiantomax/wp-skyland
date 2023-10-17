<?php

class News_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'News', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'News', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'News', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add News', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New News', 'qubick-id' ),
				'new_item'           => esc_html__( 'New News', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit News', 'qubick-id' ),
				'view_item'          => esc_html__( 'View News', 'qubick-id' ),
				'update_item'        => esc_html__( 'View News', 'qubick-id' ),
				'all_items'          => esc_html__( 'All News', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search News', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent News', 'qubick-id' ),
				'not_found'          => esc_html__( 'No News found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No News found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'News', 'qubick-id' ),
				'singular_name'      => esc_html__( 'News', 'qubick-id' ),
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
			'menu_icon'           => 'dashicons-megaphone',
			'supports' => [
				'title',
				'thumbnail',
			],
			'taxonomies' => [
				'category',
			],
			'rewrite' => true,
		];
		register_post_type( 'news', $args );
	}
}

News_Post_Type::init();


// metabox for custom post properties
add_filter( 'rwmb_meta_boxes', 'news_section' );
function news_section( $meta_boxes ) {
	$prefix = 'news_';
	$meta_boxes[] = [
		'title'      => esc_html__( 'News Section', 'online-generator' ),
		'id'         => 'news',
		'post_types' => 'news',
		'autosave'   => true,
		'fields'     => [
			[
				'id'               => $prefix.'_title_1',
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 1', 'english' ),
			],
			[
				'id'               => $prefix.'_paragraph_top',
				'type' 			   => 'wysiwyg',
				'name'             => esc_html__( 'Paragraph Top', 'english' ),
			],
			[
				'id'               => $prefix.'_author',
				'type' 			   => 'text',
				'name'             => esc_html__( 'Author', 'english' ),
			],
			[
				'id'               => $prefix.'_publish_date',
				'type' 			   => 'date',
				'name'             => esc_html__( 'Publish Date', 'english' ),
			],
			[
				'id'               => $prefix.'_paragraph_left',
				'type' 			   => 'wysiwyg',
				'name'             => esc_html__( 'Paragraph Left', 'english' ),
				'raw'     => false,
				'options' => [
					'textarea_rows' => 4,
					'teeny'         => true,
				],
			],
			[
				'id'               => $prefix.'_paragraph_Right',
				'type' 			   => 'wysiwyg',
				'name'             => esc_html__( 'Paragraph Right', 'english' ),
				'raw'     => false,
				'options' => [
					'textarea_rows' => 4,
					'teeny'         => true,
				],
			],
			[
				'id'               => $prefix.'_image',
				'name'             => esc_html__( 'Image Thumbnail', 'english' ),
				'type'    		   => 'image_advanced',
				'force_delete'     => true,
				'max_file_uploads' => 1,
			],
			[
				'id'               => $prefix.'_alternative_url',
				'type' 			   => 'text',
				'name'             => esc_html__( 'Alternative URL', 'english' ),
			],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'news_meta_section' );
function news_meta_section( $meta_boxes ) {
	$prefix = 'news_meta_';
	$section = "";
	$languages = "";
	$meta_boxes[] = [
		'title'      => esc_html__( 'Meta Page for SEO', 'online-generator' ),
		'id'         => 'news_meta',
		'post_types' => 'news',
		'autosave'   => true,
		'fields'     => [
			[
				'id'               => $prefix.$section.'keyword'.$languages,
				'type' 			   => 'text',
				'name'             => esc_html__( 'Keyword', 'english' ),
				'desc'             => esc_html__( 'use separator comma, optimize with 6-10 word : property, skyland, apartment, house, office, investment', 'online-generator' ),
			],
			[
				'id'               => $prefix.$section.'description'.$languages,
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description', 'english' ),
				'desc'             => esc_html__( 'use separator sentence dot, optimize with 4-7 sentence to describe this page', 'online-generator' ),
			],
		],
	];
return $meta_boxes;
}