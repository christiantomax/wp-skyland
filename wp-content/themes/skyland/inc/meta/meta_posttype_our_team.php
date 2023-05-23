<?php

class Our_Team_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
		// add_filter( 'rwmb_meta_boxes', array( __CLASS__, 'register_meta_boxes_our_team') );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Our_Team', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Our Team', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Our Team', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Our Team', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Our Team', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Our Team', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Our Team', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Our Team', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Our Team', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Our Team', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Our Team', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Our Team', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Our Team found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Our Team found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'OurTeams', 'qubick-id' ),
				'singular_name'      => esc_html__( 'OurTeam', 'qubick-id' ),
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
			'menu_position'       => 7,
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

		register_post_type( 'our_team', $args );

	}


}

Our_Team_Post_Type::init();