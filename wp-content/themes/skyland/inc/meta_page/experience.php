<?php 
    // metabox for experience page
    add_filter( 'rwmb_meta_boxes', 'experience_banner_section' );
    function experience_banner_section( $meta_boxes ) {
        $prefix = "experience_";
        $section = "banner_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Experience Banner Section', 'online-generator' ),
            'id'         => 'experience_banner',
            'post_types' => ['page'],
            'autosave'   => true,
            'fields'     => [
                [
                    'id'               => $prefix.$section.'title1'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Title 1', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'title2'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Title 2', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'image'.$languages,
                    'name'             => esc_html__( 'Image Banner', 'english' ),
                    'type'    		   => 'single_image',
                    'force_delete'     => true,
                    'max_file_uploads' => 1,
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'experience_customer_first_section' );
    function experience_customer_first_section( $meta_boxes ) {
        $prefix = "experience_";
        $section = "customer_first_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Experience Customer First Section', 'online-generator' ),
            'id'         => 'experience_customer_first',
            'post_types' => ['page'],
            'autosave'   => true,
            'fields'     => [
                [
                    'id'               => $prefix.$section.'image_left'.$languages,
                    'name'             => esc_html__( 'Image Left', 'english' ),
                    'type'    		   => 'single_image',
                    'force_delete'     => true,
                    'max_file_uploads' => 1,
                ],
                [
                    'id'               => $prefix.$section.'paragraph_top'.$languages,
                    'type' 			   => 'textarea',
                    'name'             => esc_html__( 'Paragraph Top', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'paragraph_bottom'.$languages,
                    'type' 			   => 'textarea',
                    'name'             => esc_html__( 'Paragraph Bottom', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'image_right'.$languages,
                    'name'             => esc_html__( 'Image Right', 'english' ),
                    'type'    		   => 'single_image',
                    'force_delete'     => true,
                    'max_file_uploads' => 1,
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'experience_customize_section' );
    function experience_customize_section( $meta_boxes ) {
        $prefix = "experience_";
        $section = "customize_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Experience Customize Section', 'online-generator' ),
            'id'         => 'experience_customize',
            'post_types' => ['page'],
            'autosave'   => true,
            'fields'     => [
                [
                    'id'               => $prefix.$section.'paragraph_left'.$languages,
                    'type' 			   => 'textarea',
                    'name'             => esc_html__( 'Paragraph Left', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'paragraph_right'.$languages,
                    'type' 			   => 'textarea',
                    'name'             => esc_html__( 'Paragraph Right', 'english' ),
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'experience_partnership_section' );
    function experience_partnership_section( $meta_boxes ) {
        $prefix = "experience_";
        $section = "partnership_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Experience Partnership Section', 'online-generator' ),
            'id'         => 'experience_partnership',
            'post_types' => ['page'],
            'autosave'   => true,
            'fields'     => [
                [
                    'id'               => $prefix.$section.'paragraph'.$languages,
                    'type' 			   => 'textarea',
                    'name'             => esc_html__( 'Paragraph', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'image'.$languages,
                    'name'             => esc_html__( 'Image', 'english' ),
                    'type'    		   => 'single_image',
                    'force_delete'     => true,
                    'max_file_uploads' => 1,
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'experience_meta' );
    function experience_meta( $meta_boxes ) {
        $prefix = "experience_";
        $section = "meta_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Meta Page for SEO', 'online-generator' ),
            'id'         => 'experience_meta',
            'post_types' => ['page'],
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
?>