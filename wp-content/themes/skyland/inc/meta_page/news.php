<?php 
    // metabox for news page
    add_filter( 'rwmb_meta_boxes', 'news_latest_section' );
    function news_latest_section( $meta_boxes ) {
        $prefix = "news_latest_";
        $section = "";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'News Latest News Section', 'online-generator' ),
            'id'         => 'news_latest',
            'post_types' => ['page'],
            'autosave'   => true,
            'fields'     => [
                [
                    'id'               => $prefix.$section.'title'.$languages,
                    'type' 			   => 'text',
                    'name'             => esc_html__( 'Title', 'english' ),
                ],
            ],
        ];
    return $meta_boxes;
    }

    add_filter( 'rwmb_meta_boxes', 'news_latest_meta' );
    function news_latest_meta( $meta_boxes ) {
        $prefix = "news_latest_";
        $section = "meta_";
        $languages = "";
        $meta_boxes[] = [
            'title'      => esc_html__( 'Meta Page for SEO', 'online-generator' ),
            'id'         => 'news_latest_meta',
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