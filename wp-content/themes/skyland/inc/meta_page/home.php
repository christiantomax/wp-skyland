<?php 
    // metabox for home page
    add_filter( 'rwmb_meta_boxes', 'home_banner_section' );
    function home_banner_section( $meta_boxes ) {
        $prefix = "home_";
        $section = "banner_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Home Banner Section', 'online-generator' ),
            'id'         => 'home_banner',
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
                    'id'               => $prefix.$section.'title3'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Title 3', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'year'.$languages,
                    'type' 			   => 'number',
                    'name'             => esc_html__( 'Year', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'image_banner',
                    'name'             => esc_html__( 'Image Banner', 'english' ),
                    'type'    		   => 'image_advanced',
                    'force_delete'     => true,
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'home_investment_section' );
    function home_investment_section( $meta_boxes ) {
        $prefix = "home_";
        $section = "investment_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Home Investment Section', 'online-generator' ),
            'id'         => 'home_investment',
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

    add_filter( 'rwmb_meta_boxes', 'home_story_section' );
    function home_story_section( $meta_boxes ) {
        $prefix = "home_";
        $section = "story_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Home Story Section', 'online-generator' ),
            'id'         => 'home_story',
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

    add_filter( 'rwmb_meta_boxes', 'home_meta' );
    function home_meta( $meta_boxes ) {
        $prefix = "home_";
        $section = "meta_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Meta Page for SEO', 'online-generator' ),
            'id'         => 'home_meta',
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