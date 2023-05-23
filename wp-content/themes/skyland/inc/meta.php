<?php
require_once get_template_directory().'/inc/meta/meta_posttype_certification.php';
require_once get_template_directory().'/inc/meta/meta_posttype_fact.php';
require_once get_template_directory().'/inc/meta/meta_posttype_news.php';
require_once get_template_directory().'/inc/meta/meta_posttype_our_team.php';
require_once get_template_directory().'/inc/meta/meta_posttype_product.php';

add_filter( 'rwmb_meta_boxes', 'home_meta_boxes_1' );
function home_meta_boxes_1( $meta_boxes ) {
	$prefix = '';
	$meta_boxes[] = [
		'title'      => esc_html__( 'Our Products Section', 'online-generator' ),
		'id'         => 'home_our_products_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'home_our_products_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'home_our_products_title_en',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description', 'english' ),
				'id'               => 'home_our_products_description_id',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description English', 'english' ),
				'id'               => 'home_our_products_description_en',
			],
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 1', 'english' ),
				'id'               => 'home_our_products_image_1',
			],
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 2', 'english' ),
				'id'               => 'home_our_products_image_2',
			],
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 3', 'english' ),
				'id'               => 'home_our_products_image_3',
			],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'home_meta_boxes_2' );
function home_meta_boxes_2( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'What We Do Section', 'online-generator' ),
		'id'         => 'home_what_we_do_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'home_what_we_do_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'home_what_we_do_title_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 1', 'english' ),
				'id'               => 'home_what_we_do_title_supplier',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 1 English', 'english' ),
				'id'               => 'home_what_we_do_title_supplier_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 1', 'english' ),
				'id'               => 'home_what_we_do_number_supplier',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 1 Symbol', 'english' ),
				'id'               => 'home_what_we_do_number_supplier_symbol',
                'desc' 			   => esc_html__( 'Inputan berupa symbol seperti (+, %)', 'online-generator' ),
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 1', 'english' ),
				'id'               => 'home_what_we_do_description_supplier',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 1 English', 'english' ),
				'id'               => 'home_what_we_do_description_supplier_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 2', 'english' ),
				'id'               => 'home_what_we_do_title_partner',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 2 English', 'english' ),
				'id'               => 'home_what_we_do_title_partner_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 2', 'english' ),
				'id'               => 'home_what_we_do_number_partner',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 2 Symbol', 'english' ),
				'id'               => 'home_what_we_do_number_partner_symbol',
                'desc' 			   => esc_html__( 'Inputan berupa symbol seperti (+, %)', 'online-generator' ),
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 2', 'english' ),
				'id'               => 'home_what_we_do_description_partner',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 2 English', 'english' ),
				'id'               => 'home_what_we_do_description_partner_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 3', 'english' ),
				'id'               => 'home_what_we_do_title_processed',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 3 English', 'english' ),
				'id'               => 'home_what_we_do_title_processed_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 3', 'english' ),
				'id'               => 'home_what_we_do_number_processed',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 3 Symbol', 'english' ),
				'id'               => 'home_what_we_do_number_processed_symbol',
                'desc' 			   => esc_html__( 'Inputan berupa symbol seperti (+, %)', 'online-generator' ),
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 3', 'english' ),
				'id'               => 'home_what_we_do_description_processed',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 3 English', 'english' ),
				'id'               => 'home_what_we_do_description_processed_en',
			],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'home_meta_boxes_3' );
function home_meta_boxes_3( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Sustainable Waste Management System Section', 'online-generator' ),
		'id'         => 'home_waste_management_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'wysiwyg',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'home_waste_management_title_id',
			],
			[
				'type' 			   => 'wysiwyg',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'home_waste_management_title_en',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description', 'english' ),
				'id'               => 'home_waste_management_description_id',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description English', 'english' ),
				'id'               => 'home_waste_management_description_en',
			],
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 1', 'english' ),
				'id'               => 'home_waste_management_image1',
			],
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 2', 'english' ),
				'id'               => 'home_waste_management_image2',
			],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'home_meta_boxes_4' );
function home_meta_boxes_4( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Partners & Supported', 'online-generator' ),
		'id'         => 'partner_support_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'image_advanced',
				'name'             => esc_html__( 'Partners', 'english' ),
				'id'               => 'partners_logo',
			]
			,[
				'type' 			   => 'image_advanced',
				'name'             => esc_html__( 'Supported', 'english' ),
				'id'               => 'supported_logo',
			],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'about_meta_boxes_1' );
function about_meta_boxes_1( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'About Header 1', 'online-generator' ),
		'id'         => 'about_header1_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'about_header1_section_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'about_header1_section_title_en',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description', 'english' ),
				'id'               => 'about_header1_section_description_id',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description English', 'english' ),
				'id'               => 'about_header1_section_description_en',
			],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'about_meta_boxes_2' );
function about_meta_boxes_2( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'About Header 2', 'online-generator' ),
		'id'         => 'about_header2_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'about_header2_section_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'about_header2_section_title_en',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description 1', 'english' ),
				'id'               => 'about_header2_section_description_id',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description 1 English', 'english' ),
				'id'               => 'about_header2_section_description_en',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description 2', 'english' ),
				'id'               => 'about_header2_section_description2_id',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description 2 English', 'english' ),
				'id'               => 'about_header2_section_description2_en',
			],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'about_meta_boxes_3' );
function about_meta_boxes_3( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'About Process', 'online-generator' ),
		'id'         => 'about_process_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 1', 'english' ),
				'id'               => 'about_process_image1',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 1', 'english' ),
				'id'               => 'about_process_description1',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 1 English', 'english' ),
				'id'               => 'about_process_description1_en',
			],
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 2', 'english' ),
				'id'               => 'about_process_image2',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 2', 'english' ),
				'id'               => 'about_process_description2',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 2 English', 'english' ),
				'id'               => 'about_process_description2_en',
			],
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 3', 'english' ),
				'id'               => 'about_process_image3',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 3', 'english' ),
				'id'               => 'about_process_description3',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Description 3 English', 'english' ),
				'id'               => 'about_process_description3_en',
			],
		],
	];
return $meta_boxes;
}


add_filter( 'rwmb_meta_boxes', 'about_meta_boxes_4' );
function about_meta_boxes_4( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'About Our Team', 'online-generator' ),
		'id'         => 'about_our_team_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image Default Team', 'english' ),
				'id'               => 'about_our_team_section_image',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'about_our_team_section_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'about_our_team_section_title_en',
			]
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'about_meta_boxes_5' );
function about_meta_boxes_5( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'About Certification', 'online-generator' ),
		'id'         => 'about_certification_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'about_certification_section_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'about_certification_section_title_en',
			]
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'campaign_meta_boxes_1' );
function campaign_meta_boxes_1( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Campaign', 'online-generator' ),
		'id'         => 'campaign_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image Banner', 'english' ),
				'id'               => 'campaign_image_banner',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 1', 'english' ),
				'id'               => 'campaign_title1_section_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 1 English', 'english' ),
				'id'               => 'campaign_title1_section_title_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 2', 'english' ),
				'id'               => 'campaign_title2_section_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 2 English', 'english' ),
				'id'               => 'campaign_title2_section_title_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 3', 'english' ),
				'id'               => 'campaign_title3_section_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 3 English', 'english' ),
				'id'               => 'campaign_title3_section_title_en',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description', 'english' ),
				'id'               => 'campaign_section_description_id',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description English', 'english' ),
				'id'               => 'campaign_section_description_en',
			]
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'campaign_meta_boxes_2' );
function campaign_meta_boxes_2( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Campaign Year Section', 'online-generator' ),
		'id'         => 'campaign_every_year_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'campaign_every_year_title',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'campaign_every_year_title_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 1 Title', 'english' ),
				'id'               => 'campaign_number1_title',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 1 Title English', 'english' ),
				'id'               => 'campaign_number1_title_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 1', 'english' ),
				'id'               => 'campaign_number1',
                'desc' 			   => esc_html__( 'Inputan berupa angka', 'online-generator' ),
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 1 Symbol', 'english' ),
				'id'               => 'campaign_number1_desc_symbol',
                'desc' 			   => esc_html__( 'Inputan berupa symbol seperti (+, %)', 'online-generator' ),
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 1 Description', 'english' ),
				'id'               => 'campaign_number1_text',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 1 Description English', 'english' ),
				'id'               => 'campaign_number1_text_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 2 Title', 'english' ),
				'id'               => 'campaign_number2_title',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 2 Title English', 'english' ),
				'id'               => 'campaign_number2_title_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 2', 'english' ),
				'id'               => 'campaign_number2',
                'desc' 			   => esc_html__( 'Inputan berupa angka', 'online-generator' ),
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 2 Sysmbol', 'english' ),
				'id'               => 'campaign_number2_desc_symbol',
                'desc' 			   => esc_html__( 'Inputan berupa symbol seperti (+, %)', 'online-generator' ),
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 2 Description', 'english' ),
				'id'               => 'campaign_number2_text',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 2 Description English', 'english' ),
				'id'               => 'campaign_number2_text_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 3 Title', 'english' ),
				'id'               => 'campaign_number3_title',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 3 Title English', 'english' ),
				'id'               => 'campaign_number3_title_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 3', 'english' ),
				'id'               => 'campaign_number3',
                'desc' 			   => esc_html__( 'Inputan berupa angka', 'online-generator' ),
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 3 Symbol', 'english' ),
				'id'               => 'campaign_number3_desc_symbol',
                'desc' 			   => esc_html__( 'Inputan berupa symbol seperti (+, %)', 'online-generator' ),
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 3 Description', 'english' ),
				'id'               => 'campaign_number3_text',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Number 3 Description English', 'english' ),
				'id'               => 'campaign_number3_text_en',
			],
		],
	];
return $meta_boxes;
}


add_filter( 'rwmb_meta_boxes', 'campaign_meta_boxes_3' );
function campaign_meta_boxes_3( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Campaign Section 3', 'online-generator' ),
		'id'         => 'campaign_section3',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 1', 'english' ),
				'id'               => 'campaign_section3_image1',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description 1', 'english' ),
				'id'               => 'campaign_section3_description1',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description 1 English', 'english' ),
				'id'               => 'campaign_section3_description1_en',
			],
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 2', 'english' ),
				'id'               => 'campaign_section3_image2',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description 2', 'english' ),
				'id'               => 'campaign_section3_description2',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description 2 English', 'english' ),
				'id'               => 'campaign_section3_description2_en',
			],
			[
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image 3', 'english' ),
				'id'               => 'campaign_section3_image3',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description 3', 'english' ),
				'id'               => 'campaign_section3_description3',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description 3 English', 'english' ),
				'id'               => 'campaign_section3_description3_en',
			],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'campaign_section4' );
function campaign_section4( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Campaign Fact', 'online-generator' ),
		'id'         => 'campaign_section_fact',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'campaign_section_fact_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'campaign_section_fact_title_en',
			]
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'contact_us_section' );
function contact_us_section( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Contact Us Left Section', 'online-generator' ),
		'id'         => 'contact_us_section',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description', 'english' ),
				'id'               => 'contact_us_section1_section_description_id',
			],
			[
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Description English', 'english' ),
				'id'               => 'contact_us_section1_section_description_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'contact_us_section1_section_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'contact_us_section1_section_title_en',
			],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'contact_us_section2' );
function contact_us_section2( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Contact Us Right Section', 'online-generator' ),
		'id'         => 'contact_us_section2',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title', 'english' ),
				'id'               => 'contact_us_section2_section_title_id',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title English', 'english' ),
				'id'               => 'contact_us_section2_section_title_en',
			],
			[
				'type' 			   => 'wysiwyg',
				'name'             => esc_html__( 'Address', 'english' ),
				'id'               => 'contact_us_section2_section_description_id',
			],
			[
				'type' 			   => 'wysiwyg',
				'name'             => esc_html__( 'Address English', 'english' ),
				'id'               => 'contact_us_section2_section_description_en',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Link Google Maps', 'english' ),
				'id'               => 'contact_us_section2_section_google_maps',
			],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'contact_us_media_social' );
function contact_us_media_social( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Media Social', 'online-generator' ),
		'id'         => 'contact_us_media_social',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Email', 'english' ),
				'id'               => 'contact_us_email',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title Whatsapp', 'english' ),
				'id'               => 'contact_us_whatsapp_title',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Link Whatsapp', 'english' ),
				'id'               => 'contact_us_whatsapp',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title Instagram', 'english' ),
				'id'               => 'contact_us_instagram_title',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Link Instagram', 'english' ),
				'id'               => 'contact_us_instagram',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title Facebook', 'english' ),
				'id'               => 'contact_us_facebook_title',
			],
			[
				'type' 			   => 'text',
				'name'             => esc_html__( 'Link Facebook', 'english' ),
				'id'               => 'contact_us_facebook',
			],
		],
	];
return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'contact_us_image_footer' );
function contact_us_image_footer( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Image Footer Hover', 'online-generator' ),
		'id'         => 'contact_us_image_footer_hover',
		'post_types' => ['page'],
		'autosave'   => true,
		'fields'     => [
            [
                'type' => 'single_image',
                'name' => esc_html__( 'About', 'qubick' ),
                'id'   => $prefix . 'contact_us_image_footer_hover_about',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Product', 'qubick' ),
                'id'   => $prefix . 'contact_us_image_footer_hover_product',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Why BSF?', 'qubick' ),
                'id'   => $prefix . 'contact_us_image_footer_hover_campaign',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Contact Us', 'qubick' ),
                'id'   => $prefix . 'contact_us_image_footer_hover_contact_us',
            ],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'certification' );
function certification( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Certification', 'online-generator' ),
		'id'         => 'certification',
		'post_types' => 'certification',
		'autosave'   => true,
		'fields'     => [
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Certifications Image', 'qubick' ),
                'id'   => $prefix . 'certification_image',
            ],
			[
                'type' => 'textarea',
                'name' => esc_html__( 'Certifications Description', 'qubick' ),
                'id'   => $prefix . 'certification_name',
            ],  
			[
                'type' => 'textarea',
                'name' => esc_html__( 'Certifications Description English', 'qubick' ),
                'id'   => $prefix . 'certification_name_english',
            ],   
			[
                'type' => 'text',
                'name' => esc_html__( 'Certifications Year', 'qubick' ),
                'id'   => $prefix . 'certification_year',
            ]
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'fact' );
function fact( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Fact', 'online-generator' ),
		'id'         => 'fact',
		'post_types' => 'fact',
		'autosave'   => true,
		'fields'     => [
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Facts Image Thumbnail Side', 'qubick' ),
                'id'   => $prefix . 'fact_image',
            ],
			[
                'type' => 'textarea',
                'name' => esc_html__( 'Facts Description', 'qubick' ),
                'id'   => $prefix . 'fact_name',
            ],   
			[
                'type' => 'textarea',
                'name' => esc_html__( 'Facts Description English', 'qubick' ),
                'id'   => $prefix . 'fact_name_english',
            ]
		],
	];
return $meta_boxes;
}



add_filter( 'rwmb_meta_boxes', 'our_team' );
function our_team( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'Our Team', 'online-generator' ),
		'id'         => 'our_team',
		'post_types' => 'our_team',
		'autosave'   => true,
		'fields'     => [
	            [
	                'type' => 'single_image',
	                'name' => esc_html__( 'Personal Image', 'qubick' ),
	                'id'   => $prefix . 'our_team_image',
	            ],
				[
	                'type' => 'text',
	                'name' => esc_html__( 'Name', 'qubick' ),
	                'id'   => $prefix . 'our_team_name',
	            ],
				[
	                'type' => 'text',
	                'name' => esc_html__( 'Position', 'qubick' ),
	                'id'   => $prefix . 'our_team_position',
	            ],
				[
	                'type' => 'number',
	                'name' => esc_html__( 'order', 'qubick' ),
	                'id'   => $prefix . 'our_team_position_order',
	            ],
				[
					'type' => 'text',
					'name' => esc_html__( 'link', 'qubick' ),
					'id'   => $prefix . 'our_team_link',
				]
		],
	];
return $meta_boxes;
}




add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$i = 0;
	foreach ( $meta_boxes as $k => $meta_box ) {
		// echo "<p style='margin-left: 20vw;'>";
		// print_r(
		// 	$meta_box);
		// echo $meta_box['id']."<br />";
		// echo "</p>";
		// echo strtolower(get_the_title($_GET['post']));

		if ( $meta_box['id'] === 'home_our_products_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'home') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'home_what_we_do_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'home') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'home_our_products_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'home') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'home_waste_management_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'home') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'partner_support_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'home') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		// echo ++$i;	

		else if ( $meta_box['id'] === 'about_header1_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'about') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'about_header2_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'about') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'about_process_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'about') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'about_our_team_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'about') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'about_certification_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'about') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}


		
		else if ( $meta_box['id'] === 'campaign_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'why bsf?') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'campaign_every_year_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'why bsf?') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'campaign_section3' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'why bsf?') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'campaign_section_fact' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'why bsf?') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}



		else if ( $meta_box['id'] === 'contact_us_section' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'contact us') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'contact_us_media_social' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'contact us') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'contact_us_image_footer_hover' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'contact us') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
		else if ( $meta_box['id'] === 'contact_us_section2' ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'contact us') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}

	}

    return $meta_boxes;
} );


add_filter( 'rwmb_meta_boxes', 'news' );
function news( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => esc_html__( 'news', 'online-generator' ),
		'id'         => 'news',
		'post_types' => 'news',
		'autosave'   => true,
		'fields'     => [
            [
                'type' => 'single_image',
                'name' => esc_html__( 'News Image Thumbnail Side', 'qubick' ),
                'id'   => $prefix . 'news_image',
            ],
			[
                'type' => 'text',
                'name' => esc_html__( 'News Title', 'qubick' ),
                'id'   => $prefix . 'news_title',
            ],
			[
                'type' => 'text',
                'name' => esc_html__( 'News Title English', 'qubick' ),
                'id'   => $prefix . 'news_title_english',
            ],
			[
                'type' => 'wysiwyg',
                'name' => esc_html__( 'News Description', 'qubick' ),
                'id'   => $prefix . 'news_name',
            ],   
			[
                'type' => 'wysiwyg',
                'name' => esc_html__( 'News Description English', 'qubick' ),
                'id'   => $prefix . 'news_name_english',
            ]
		],
	];
return $meta_boxes;
}
?>