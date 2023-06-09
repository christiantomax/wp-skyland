<?php 
    get_header();
    require get_theme_file_path( 'config.php' );

    if (have_posts()) {
        function get_posts_taxonomy($terms, $post_type) {
            $args = array(
                'post_type'      => $post_type,
                'posts_per_page' => -1,
                // 'tax_query'         => array(
                //     array(
                //         'taxonomy' => 'properties-category',
                //         'field' => 'slug',
                //         'terms' => $terms
                //     )
                // ),
                'post_status'    => 'publish',
            );
            
            $query = new WP_Query($args);
            return $query->posts;
        }

        $prefix = 'properties_';

        the_post();
        $post_id = get_the_ID();

        $title_1 = get_post_meta($post_id, $prefix . 'title_1' )[0];
        $title_2 = get_post_meta($post_id, $prefix . 'title_2' )[0];
        $address = get_post_meta($post_id, $prefix . 'address' )[0];
        $year = get_post_meta($post_id, $prefix . 'year' )[0];
        $paragraph_left = get_post_meta($post_id, $prefix . 'paragraph_left' )[0];
        $paragraph_right = get_post_meta($post_id, $prefix . 'paragraph_right' )[0];

        //get all fieldset fieldset_text meta box
        $fieldset_text = get_post_meta($post_id, $prefix . 'fieldset_text' )[0];

        //get image banner project detail
        $image_banner = get_post_meta($post_id, $prefix . 'image_banner' )[0];
        $image_banner = wp_get_attachment_image_src($image_banner)[0];

        //get all fieldset fieldset_text_image meta box
        $fieldset_text_image = get_post_meta($post_id, $prefix . 'fieldset_text_image' );
        $temp = [];
        foreach($fieldset_text_image as $fieldset_text_image_temp){
            array_push($temp, wp_get_attachment_image_src($fieldset_text_image_temp)[0]);
        }
        $fieldset_text_image = $temp;
        
        // ==================================================================
        $next_id = null;
        
        $post_type = get_post_type();
        $category_obj = get_the_category($post_id);
        
        $taxonomy = 'properties-category';
        $terms = get_the_terms($post_id, $taxonomy);
        $terms = $terms[0]->name;
        
        //check if the current post have next post and set next id
        $list_all_post = get_posts_taxonomy($terms, $post_type);
        for ($i = 0; $i < count($list_all_post); $i++) {
            if($list_all_post[$i]->ID == $post_id){
                if($i == count($list_all_post)-1){
                    $next_id = $list_all_post[0]->ID;
                }else{
                    $next_id = $list_all_post[$i+1]->ID;
                }
                break;
            }
        }

        //get meta box next data
        $title_2_next = get_post_meta($post_id, $prefix . 'title_2' )[0];
        $image_banner_next = get_post_meta($next_id, $prefix . 'image_banner' )[0];
        $image_banner_next = wp_get_attachment_image_src($image_banner_next)[0];
        $next_slug = get_permalink($next_id);
    } else {
        
    }
?>

<!-- section banner of detail property -->
<section class="w-screen h-screen full-page mb-10" id="property-banner">
    <div class="bg-fixed bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $image_banner;?>)">
        <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full flex flex-col justify-end py-32">
            <h1 class="figtree-light text-6xl"><?= $title_1;?></h1>
            <h2 class="figtree-light text-8xl mt-4"><?= $title_2;?></h2>
            <p class="figtree-light font-thin text-3xl mt-12"><?= $address;?> <span class="ms-60"><?= $year;?></span></p>
        </div>
    </div>
</section>

<!-- section description of detail property -->
<section class="w-12/12 ms-72 flex justify-center" id="property-description">
        <div class="w-11/12 flex justify-end foreword-description mb-16 pe-20">
            <p class="pt-1 text-ellipsis overflow-hidden w-6/12 h-24">
            <?= $paragraph_left;?>
            </p>
            <p class="pt-1 text-ellipsis overflow-hidden w-6/12 h-24 ms-16">
            <?= $paragraph_right;?>
            </p>
        </div>
</section>

<!-- section galleries detail property -->
<section class="w-screen full-page mb-36" id="property-galleries">
    <div class="flex justify-center">
        <div class="w-11/12">
            <div class="w-full flex justify-center pb-2 mb-6">
                <?php
                    for ($i = 0; $i < count($fieldset_text_image); $i++) {
                        ?>
                            <div class="expander h-fit">
                                <div class="h-full">
                                    <div class="w-12/12 flex property-galleries__image__container">
                                        <img class="w-full h-full object-cover" src="<?= $fieldset_text_image[$i]; ?>"/>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <div class="flex">
                <div class="w-5/12">
                    <h2 class="text-3xl"><?= $address;?></h2>
                </div>
                <div class="flex justify-between">
                    <?php
                        for ($i = 0; $i < count($fieldset_text_image); $i++) {
                            ?>
                                
                            <p class="w-8/12 pt-1 min-h-content-description text-ellipsis overflow-hidden description-gallery description-gallery-<?= $i; ?>">
                                <?= $fieldset_text[$i]["description"]; ?>
                            </p>
                            <?php
                        }
                    ?>
                    <div class="w-4/12 flex justify-end">
                        <div class="w-10 h-10 flex justify-center items-center me-16 font-bold">
                            <p class="figtree-light hover:cursor-pointer hover:opacity-75" onclick="changeExpander(-1)">
                                <svg id="SvgjsSvg1011" width="30" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                    <defs id="SvgjsDefs1012"></defs>
                                    <g id="SvgjsG1013">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                            </p>
                        </div>

                        <div class="w-10 h-10 flex justify-center items-center rotate-180 font-bold">
                            <p class="figtree-light hover:cursor-pointer hover:opacity-75" onclick="changeExpander(1)">
                                <svg id="SvgjsSvg1011" width="30" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                    <defs id="SvgjsDefs1012"></defs>
                                    <g id="SvgjsG1013">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- story section -->
<section class="w-screen full-page-height" id="next-property">
    <a href="<?= $next_slug; ?>">
        <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $image_banner_next;?>)">
            <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24">
                <div class="flex justify-between w-full">
                    <div class="flex" >
                        <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12 rotate-180 font-bold hover:cursor-pointer">
                            <p class="figtree-light animate-pulse">
                                <svg id="SvgjsSvg1011" width="18" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                    <defs id="SvgjsDefs1012"></defs>
                                    <g id="SvgjsG1013">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                            </p>
                        </div>
                        <div class="w-12/12">
                            <p class="figtree-light font-bold text-2xl mb-12 pt-2">Up Next</p>
                            <p class="figtree-light font-bold text-6xl mb-12"><strong><?= $title_2_next; ?></strong></p>
                        </div>
                    </div>
                    <div class="flex items-end w-2/12 pb-16">
                        <div class="flex explore-rotate-left">
                            <p class="text-2xl font-normal text-end me-3">
                                Explore more
                            </p>
                            <div class="flex items-end pb-1 icon animate-pulse">
                                <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</section>

<?php get_footer() ?>