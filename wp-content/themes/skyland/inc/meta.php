<?php
require_once get_template_directory().'/inc/taxonomy/taxonomy_property.php';

require_once get_template_directory().'/inc/meta_post/news.php';
require_once get_template_directory().'/inc/meta_post/property.php';
require_once get_template_directory().'/inc/meta_post/investment_opportunities.php';
require_once get_template_directory().'/inc/meta_post/partner.php';
require_once get_template_directory().'/inc/meta_post/team.php';
require_once get_template_directory().'/inc/meta_post/mission.php';


require_once get_template_directory().'/inc/meta_page/home.php';
require_once get_template_directory().'/inc/meta_page/about-us.php';
require_once get_template_directory().'/inc/meta_page/experience.php';
require_once get_template_directory().'/inc/meta_page/investment.php';
require_once get_template_directory().'/inc/meta_page/property.php';
require_once get_template_directory().'/inc/meta_page/news.php';
require_once get_template_directory().'/inc/meta_page/contact.php';
require_once get_template_directory().'/inc/meta_page/team.php';

// for spesific page title
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$i = 0;
	foreach ( $meta_boxes as $k => $meta_box ) {
		
		if(isset($_GET['post_type'])){
			if ($_GET['post_type'] == 'page') {
				unset( $meta_boxes[ $k ] );
			}
		}else if ( strpos( $meta_box['id'], 'home' ) !== false ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'home') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}else if ( strpos( $meta_box['id'], 'about' ) !== false ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'about-us') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}else if ( strpos( $meta_box['id'], 'property' ) !== false ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'properties') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}else if ( strpos( $meta_box['id'], 'investment' ) !== false ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'investment') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}else if ( strpos( $meta_box['id'], 'experience' ) !== false ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'experience') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}else if ( strpos( $meta_box['id'], 'news_latest' ) !== false ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'latest-news') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}else if ( strpos( $meta_box['id'], 'contact' ) !== false ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'contact') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}else if ( strpos( $meta_box['id'], 'team' ) !== false ) {
			if(isset($_GET['post'])){
				if (strtolower(get_the_title($_GET['post'])) != 'team') {
					unset( $meta_boxes[ $k ] );
				}
			}	
		}
	}
	// die(json_encode($meta_boxes));
    return $meta_boxes;
} );

?>