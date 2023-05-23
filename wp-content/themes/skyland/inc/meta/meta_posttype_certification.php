<?php

class Certification_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
		// add_filter( 'rwmb_meta_boxes', array( __CLASS__, 'register_meta_boxes_certification') );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Certifications', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Certifications', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Certification', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Certification', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Certification', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Certification', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Certification', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Certification', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Certification', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Certifications', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Certifications', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Certification', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Certifications found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Certifications found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Certifications', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Certification', 'qubick-id' ),
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
			'menu_position'       => 5,
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

		register_post_type( 'certification', $args );

	}
}

Certification_Post_Type::init();