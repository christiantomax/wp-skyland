<?php 
    // metabox for team page
    add_filter( 'rwmb_meta_boxes', 'team_section' );
    function team_section( $meta_boxes ) {
        $prefix = "team_";
        $section = "section_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Team Section', 'online-generator' ),
            'id'         => 'team',
            'post_types' => ['page'],
            'autosave'   => true,
            'fields'     => [
                [
                    'id'               => $prefix.$section.'title_right'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Title Right', 'english' ),
                ],
                [
                    'id'               => $prefix.$section.'paragraph'.$languages,
                    'type' 			   => 'textarea',
                    'name'             => esc_html__( 'Paragraph', 'english' ),
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'team_meta' );
    function team_meta( $meta_boxes ) {
        $prefix = "team_";
        $section = "meta_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Meta Page for SEO', 'online-generator' ),
            'id'         => 'team_meta',
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