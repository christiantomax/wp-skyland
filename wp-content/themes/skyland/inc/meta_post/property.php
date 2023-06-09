<?php

class Property_Post_Type {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Properties', 'qubick-id-property' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Properties', 'qubick-id-property' ),
				'name_admin_bar'     => esc_html__( 'Properties', 'qubick-id-property' ),
				'add_new'            => esc_html__( 'Add Properties', 'qubick-id-property' ),
				'add_new_item'       => esc_html__( 'Add New Properties', 'qubick-id-property' ),
				'new_item'           => esc_html__( 'New Properties', 'qubick-id-property' ),
				'edit_item'          => esc_html__( 'Edit Properties', 'qubick-id-property' ),
				'view_item'          => esc_html__( 'View Properties', 'qubick-id-property' ),
				'update_item'        => esc_html__( 'View Properties', 'qubick-id-property' ),
				'all_items'          => esc_html__( 'All Properties', 'qubick-id-property' ),
				'search_items'       => esc_html__( 'Search Properties', 'qubick-id-property' ),
				'parent_item_colon'  => esc_html__( 'Parent Properties', 'qubick-id-property' ),
				'not_found'          => esc_html__( 'No Properties found', 'qubick-id-property' ),
				'not_found_in_trash' => esc_html__( 'No Certifications found in Trash', 'qubick-id-property' ),
				'name'               => esc_html__( 'Properties', 'qubick-id-property' ),
				'singular_name'      => esc_html__( 'Properties', 'qubick-id-property' ),
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
			'menu_icon'           => 'dashicons-admin-home',
			'supports' => [
				'title',
				'thumbnail',
			],
			'taxonomies' => [
				'properties-category',
			],
			'rewrite' => true,
		];
		register_post_type( 'property', $args );
	}
}

Property_Post_Type::init();


// metabox for custom post properties
add_filter( 'rwmb_meta_boxes', 'properties_section' );
function properties_section( $meta_boxes ) {
	$prefix = 'properties_';
	$meta_boxes[] = [
		'title'      => esc_html__( 'Properties Section', 'online-generator' ),
		'id'         => 'properties',
		'post_types' => 'property',
		'autosave'   => true,
		'fields'     => [
			[
				'id'               => $prefix.'title_1',
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 1', 'english' ),
			],
			[
				'id'               => $prefix.'title_2',
				'type' 			   => 'text',
				'name'             => esc_html__( 'Title 2', 'english' ),
			],
			[
				'id'               => $prefix.'address',
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Address', 'english' ),
			],
			[
				'id'               => $prefix.'year',
				'type' 			   => 'number',
				'name'             => esc_html__( 'Year', 'english' ),
			],
			[
				'id'               => $prefix.'paragraph_left',
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Paragraph Left', 'english' ),
			],
			[
				'id'               => $prefix.'paragraph_right',
				'type' 			   => 'textarea',
				'name'             => esc_html__( 'Paragraph Right', 'english' ),
			],
			[
				'id'               => $prefix.'image_banner',
				'name'             => esc_html__( 'Image Banner', 'english' ),
				'type'    		   => 'image_upload',
				'force_delete'     => false,
				'max_file_uploads' => 1,
			],
			[
				'type' => 'divider',
			],
			[
				'id'               => $prefix.'fieldset_text_image',
				'name'             => esc_html__( 'Image Set', 'english' ),
				'type'    		   => 'image_advanced',
				'force_delete'     => false,
			],
            [
                'type'    => 'fieldset_text',
                'name'    => esc_html__( 'Set Title and Description', 'online-generator' ),
                'id'      => $prefix . 'fieldset_text',
                'options' => [
                    'title'  => 'Title',
                    'description'  => 'Description',
                ],
                'clone'   => true,
            ],
		],
	];
return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'properties_meta_section' );
function properties_meta_section( $meta_boxes ) {
	$prefix = 'properties_meta_';
	$section = "";
	$languages = "";
	$meta_boxes[] = [
		'title'      => esc_html__( 'Properties Section', 'online-generator' ),
		'id'         => 'properties_meta',
		'post_types' => 'property',
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

if(isset($_GET['taxonomy'])){
	if (strtolower(get_the_title($_GET['taxonomy'])) != 'properties-category') {
		add_action( 'category_edit_form_fields', 'add_category_image_field' );
			function add_category_image_field( $term ) {
				$prefix = 'properties';
				$image_url = get_term_meta( $term->term_id, $prefix.'category_property_image', true );
				?>
				<tr class="form-field">
					<th scope="row" valign="top">
						<label for="<?php echo $prefix; ?>_category_property_image"><?php esc_html_e( 'Category Property Image', 'english' ); ?></label>
					</th>
					<td>
						<input type="hidden" id="<?php echo $prefix; ?>_category_property_image" name="<?php echo $prefix; ?>_category_property_image" value="<?php echo esc_attr( $image_url ); ?>" class="custom-image-field" />
						<div class="image-preview-wrapper">
							<?php if ( ! empty( $image_url ) ) : ?>
								<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php esc_attr_e( 'Category Property Image Preview', 'english' ); ?>" class="image-preview" style="max-width: 300px;" />
							<?php else : ?>
								<img src="" alt="<?php esc_attr_e( 'No Image', 'english' ); ?>" class="image-preview" style="max-width: 300px;" />
							<?php endif; ?>
						</div>
						<button type="button" class="button button-secondary upload-image-button"><?php esc_html_e( 'Upload Image', 'english' ); ?></button>
						<button type="button" class="button button-secondary remove-image-button"><?php esc_html_e( 'Remove Image', 'english' ); ?></button>
						<p class="description"><?php esc_html_e( 'Upload or select an image for this category.', 'english' ); ?></p>
					</td>
				</tr>
				<?php
			}

			add_action( 'edited_category', 'save_category_image_field' );
			function save_category_image_field( $term_id ) {
				$prefix = 'properties';
				$image_url = isset( $_POST[$prefix.'category_property_image'] ) ? esc_url_raw( $_POST[$prefix.'category_property_image'] ) : '';
				update_term_meta( $term_id, $prefix.'category_property_image', $image_url );
			}

			add_action( 'admin_enqueue_scripts', 'category_image_field_scripts' );
			function category_image_field_scripts( $hook ) {
				if ( 'edit-tags.php' === $hook && isset( $_GET['taxonomy'] ) && 'category' === $_GET['taxonomy'] && isset( $_GET['post_type'] ) && 'properties' === $_GET['post_type'] ) {
					wp_enqueue_media();
					wp_enqueue_script( 'category-image-field-script', get_stylesheet_directory_uri() . '/js/category-image-field.js', array( 'wp-api-fetch' ), '1.0', true );
				}
			}

			// Add Image column to Categories list table
			add_filter( 'manage_edit-category_columns', 'add_category_image_column' );
			function add_category_image_column( $columns ) {
				$columns['category_image'] = esc_html__( 'Image', 'english' );
				return $columns;
			}

			// Display Image column content in Categories list table
			add_action( 'manage_category_custom_column', 'display_category_image_column', 10, 3 );
			function display_category_image_column( $content, $column_name, $term_id ) {
				if ( 'category_image' === $column_name ) {
					$prefix = 'properties';
					$image_url = get_term_meta( $term_id, $prefix.'category_property_image', true );
					$content = '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr__( 'Category Image', 'english' ) . '" style="max-width: 50px;" />';
				}
				return $content;
			}
	}
}

