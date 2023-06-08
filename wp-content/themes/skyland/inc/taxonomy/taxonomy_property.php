<?php 
    function register_custom_taxonomy() {
        $args = array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Property Categories',
                'singular_name' => 'Property Category',
            ),
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'properties' ),
        );
    
        register_taxonomy( 'properties-category', 'properties', $args );
    }
    add_action( 'init', 'register_custom_taxonomy' );

?>