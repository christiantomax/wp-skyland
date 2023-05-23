<?php

class Product_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
		add_filter( 'rwmb_meta_boxes', array( __CLASS__, 'register_meta_boxes') );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Products', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Products', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Product', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Product', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Product', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Product', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Product', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Product', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Product', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Products', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Products', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Product', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Products found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Products found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Products', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Product', 'qubick-id' ),
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
			'menu_position'       => 8,
			'menu_icon'           => 'dashicons-list-view',
			'supports' => [
				'title',
				'thumbnail',
			],
			'taxonomies' => [
				'category',
			],
			'rewrite' => true,
		];

		register_post_type( 'product', $args );

	}


	public static function register_meta_boxes() {
		$prefix = 'product_';
		$meta_boxes[] = array(
			'id'		=> 'detail',
			'title'		=> 'Detail',
			'post_types'=> 'product',
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields' => [
				[
	                'type' => 'text',
	                'name' => esc_html__( 'Product Name English', 'qubick' ),
	                'id'   => $prefix . 'product_name',
	            ],  
	            [
	                'type' => 'text',
	                'name' => esc_html__( 'Product Name Indo', 'qubick' ),
	                'id'   => $prefix . 'product_name_indo',
	            ],          
	            [
	                'type' => 'single_image',
	                'name' => esc_html__( 'Product Image Thumbnail Side', 'qubick' ),
	                'id'   => $prefix . 'product_image_side',
	            ],
	            [
	                'type' => 'single_image',
	                'name' => esc_html__( 'Product Image Thumbnail Up', 'qubick' ),
	                'id'   => $prefix . 'product_image_up',
	            ],
	            [
	                'type' => 'wysiwyg',
	                'name' => esc_html__( 'Details English', 'qubick' ),
	                'id'   => $prefix . 'details',
	            ],
	            [
	                'type' => 'wysiwyg',
	                'name' => esc_html__( 'Details Indonesia', 'qubick' ),
	                'id'   => $prefix . 'details_indo',
	            ],
	            [
	                'type' => 'text',
	                'name' => esc_html__( 'Link to Order English', 'qubick' ),
	                'id'   => $prefix . 'link_order',
                	'desc' => esc_html__( 'wajib menggunakan mailto: untuk email', 'online-generator' ),
	            ],
	            [
	                'type' => 'text',
	                'name' => esc_html__( 'Link to Order Indo', 'qubick' ),
	                'id'   => $prefix . 'link_order_indo',
                	'desc' => esc_html__( 'wajib menggunakan http:// atau https:// untuk link website', 'online-generator' ),
	            ],
			],
		);

		return $meta_boxes;
	}
}

Product_Post_Type::init();