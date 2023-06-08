<?php 
    
    // metabox for about us page
    add_filter( 'rwmb_meta_boxes', 'about_beginning_section' );
    function about_beginning_section( $meta_boxes ) {
        $prefix = "about_";
        $section = "beginning_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'About Beginning Section', 'online-generator' ),
            'id'         => 'about_beginning',
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
                    'id'               => $prefix.$section.'paragraph_left'.$languages,
                    'type' 			   => 'textarea',
                    'name'             => esc_html__( 'Paragraph Left', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'paragraph_right'.$languages,
                    'type' 			   => 'textarea',
                    'name'             => esc_html__( 'Paragraph Right', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'image'.$languages,
                    'name'             => esc_html__( 'Image Bottom', 'english' ),
                    'type'    		   => 'single_image',
                    'force_delete'     => false,
                    'max_file_uploads' => 1,
                ],
                [
                    'id'               => $prefix.$section.'quotes'.$languages,
                    'type' 			   => 'textarea',
                    'name'             => esc_html__( 'Quotes', 'english' ),
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'about_background_story_section' );
    function about_background_story_section( $meta_boxes ) {
        $prefix = "about_";
        $section = "background_story_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'About Background Story Section', 'online-generator' ),
            'id'         => 'about_background_story_',
            'post_types' => ['page'],
            'autosave'   => true,
            'fields'     => [
                [
                    'id'               => $prefix.$section.'image_left'.$languages,
                    'name'             => esc_html__( 'Image Left', 'english' ),
                    'type'    		   => 'single_image',
                    'force_delete'     => false,
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
                    'force_delete'     => false,
                    'max_file_uploads' => 1,
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'about_team_section' );
    function about_team_section( $meta_boxes ) {
        $prefix = "about_";
        $section = "team_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'About Team Section', 'online-generator' ),
            'id'         => 'about_team',
            'post_types' => ['page'],
            'autosave'   => true,
            'fields'     => [
                [
                    'id'               => $prefix.$section.'image_left'.$languages,
                    'name'             => esc_html__( 'Image Left', 'english' ),
                    'type'    		   => 'single_image',
                    'force_delete'     => false,
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
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'about_meta' );
    function about_meta( $meta_boxes ) {
        $prefix = "about_";
        $section = "meta_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Meta Page for SEO', 'online-generator' ),
            'id'         => 'about_meta',
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