<?php
    // metabox for contact page
    add_filter( 'rwmb_meta_boxes', 'contact_Maps_section' );
    function contact_Maps_section( $meta_boxes ) {
        $prefix = "contact_";
        $section = "Maps_section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Contact Section With Maps', 'online-generator' ),
            'id'         => 'contact_foreword',
            'post_types' => ['page'],
            'autosave'   => true,
            'fields'     => [
                [
                    'id'               => $prefix.$section.'title'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Title', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'paragraph'.$languages,
                    'type'             => 'wysiwyg',
                    'name'             => esc_html__( 'Address', 'english' ),
                    'raw'              => false,
                    'options'          => [
                        'textarea_rows' => 4,
                        'teeny'         => true,
                    ],
                ],
                [
                    'id'               => $prefix.$section.'lat'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Map Latitude', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'lon'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Map Longitude', 'english' ),
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'contact_section' );
    function contact_section( $meta_boxes ) {
        $prefix = "contact_";
        $section = "section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Contact Section', 'online-generator' ),
            'id'         => 'contact_section',
            'post_types' => ['page'],
            'autosave'   => true,
            'fields'     => [
                [
                    'id'               => $prefix.$section.'instagram'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Link Instagram', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'email'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Email Address', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'facebook'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Link Facebook', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'reach_us'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Reach Us Form', 'english' ),
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'contact_meta' );
    function contact_meta( $meta_boxes ) {
        $prefix = "contact_";
        $section = "meta_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Meta Page for SEO', 'online-generator' ),
            'id'         => 'contact_meta',
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