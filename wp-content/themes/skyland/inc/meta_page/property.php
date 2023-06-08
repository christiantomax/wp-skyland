<?php 
    // metabox for property page
    add_filter( 'rwmb_meta_boxes', 'property_foreword_section' );
    function property_foreword_section( $meta_boxes ) {
        $prefix = "property_";
        $section = "foreword_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Property Foreword Section', 'online-generator' ),
            'id'         => 'property_foreword',
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
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'property_meta' );
    function property_meta( $meta_boxes ) {
        $prefix = "property_";
        $section = "meta_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Meta Page for SEO', 'online-generator' ),
            'id'         => 'property_meta',
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