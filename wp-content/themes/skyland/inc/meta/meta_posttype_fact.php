<?php

class Fact_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
		// add_filter( 'rwmb_meta_boxes', array( __CLASS__, 'register_meta_boxes_fact') );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Facts', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Facts', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Fact', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Fact', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Fact', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Fact', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Fact', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Fact', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Fact', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Facts', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Facts', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Fact', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Facts found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Facts found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Facts', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Fact', 'qubick-id' ),
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
			'menu_position'       => 6,
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

		register_post_type( 'fact', $args );

	}

}

Fact_Post_Type::init();