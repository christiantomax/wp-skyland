<?php 
    get_header();
    require get_theme_file_path( 'config.php' );

    if (have_posts()) {
        function get_posts_taxonomy($terms, $post_type) {
            $args = array(
                'post_type'      => $post_type,
                'posts_per_page' => -1,
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
        $image_banner = wp_get_attachment_image_src($image_banner, 'full')[0];

        //get all fieldset fieldset_text_image meta box
        $fieldset_text_image = get_post_meta($post_id, $prefix . 'fieldset_text_image' );
        $temp = [];
        foreach($fieldset_text_image as $fieldset_text_image_temp){
            array_push($temp, wp_get_attachment_image_src($fieldset_text_image_temp, 'full')[0]);
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
        $title_1_next = get_post_meta($next_id, $prefix . 'title_1' )[0];
        $title_2_next = get_post_meta($next_id, $prefix . 'title_2' )[0];
        $image_banner_next = get_post_meta($next_id, $prefix . 'image_banner' )[0];
        $image_banner_next = wp_get_attachment_image_src($image_banner_next, 'full')[0];
        $next_slug = get_permalink($next_id);
    } else {
        
    }
?>
<!-- section banner of detail property -->
<section class="relative w-screen h-screen full-page mb-10" id="property-banner">
    <div class="single_project_headerBG bg-fixed bg-no-repeat bg-center bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $image_banner;?>)">
        <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full flex flex-col justify-end py-32">
            <h1 class="text-3xl xl:text-6xl fade-in-element z-10"><?= $title_1;?></h1>
            <h2 class="text-4xl xl:text-8xl mt-4 fade-in-element z-10"><?= $title_2;?></h2>
            <p class="figtree-light font-thin text-lg xl:text-3xl mt-12 fade-in-element z-10"><?= $address;?><br class="xl:hidden" /> <span class="xl:ms-60"><?= $year;?></span></p>
        </div>
    </div>
    <div class="overlay-gradient"></div>
</section>

<!-- section description of detail property -->
<section class="w-12/12 xl:ms-72 flex justify-center" id="property-description">
        <div class="w-11/12 flex flex-col xl:flex-row justify-end foreword-description mb-16 xl:pe-20 figtree-light">
            <p class="pt-1 leading-8 text-ellipsis overflow-hidden w-full xl:w-6/12 fade-in-element">
            <?= $paragraph_left;?>
            </p>
            <p class="pt-1 leading-8 text-ellipsis overflow-hidden w-full xl:w-6/12 xl:ms-8 mt-8 xl:mt-0 fade-in-element">
            <?= $paragraph_right;?>
            </p>
        </div>
</section>

<!-- section galleries detail property -->
<section class="w-screen full-page mb-3 lg:mb-36" id="property-galleries">
    <div class="flex justify-center">
        <div class="w-full xl:hidden">
            <div class="slider fade-in-element">
                <?php
                    for ($i = 0; $i < count($fieldset_text_image); $i++) {
                        ?>
                            <article>
                                <div class="w-full">
                                    <img class="w-full h-full bg-no-repeat bg-cover bg-center object-none" src="<?= $fieldset_text_image[$i]; ?>" alt="Image <?= $i; ?>">
                                </div>
                                <h2 class="paragraph text-xl figtree-light"><?= $address;?></h2>
                                <p class="paragraph leading-8 text-md figtree-light"><?= $fieldset_text[$i]["description"]; ?></p>
                            </article>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="w-11/12 hidden xl:block fade-in-element">
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
            <div class="flex justify-between">
                <div class="w-5/12">
                    <h2 class="text-3xl figtree-light fade-in-element"><?= $address;?></h2>
                </div>
                <div class="flex justify-between fade-in-element">
                    <?php
                        for ($i = 0; $i < count($fieldset_text_image); $i++) {
                            ?>
                                
                            <p class="w-8/12 leading-8 pt-1 min-h-content-description text-ellipsis overflow-hidden description-gallery description-gallery-<?= $i; ?> figtree-light">
                                <?= $fieldset_text[$i]["description"]; ?>
                            </p>
                            <?php
                        }
                    ?>
                    <div class="w-4/12 flex justify-end fade-in-element">
                        <div class="w-10 h-10 flex justify-center items-center me-16 font-medium">
                            <p class="figtree-light hover:cursor-pointer hover:opacity-75" onclick="changeExpander(-1)">
                                <svg id="SvgjsSvg1011" width="30" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                    <defs id="SvgjsDefs1012"></defs>
                                    <g id="SvgjsG1013">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                            </p>
                        </div>

                        <div class="w-10 h-10 flex justify-center items-center rotate-180 font-medium fade-in-element">
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

<?php
    $video_data = rwmb_meta('properties_video', [], $post_id);
    $video_url = "";
    foreach ($video_data as $key => $value) {
        $video_url = $video_data[$key]['src'];
    }
?>
<section id="video" class="mx-5 lg:mx-20 mb-20 <?= $video_url == "" ? "hidden" : ""; ?>">
    <video class="w-full h-[40vh] lg:h-[60vh]" src="<?= esc_url($video_url);?>" controls>
        Your browser does not support the video tag.
    </video>
</section>

<!-- story section -->
<section class="w-screen full-page-height" id="next-property">
    <a href="<?= $next_slug; ?>">
        <div class="relative bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $image_banner_next;?>)">
            <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24">
                <div class="flex justify-between w-full">
                    <div class="flex z-20">
                        <div class="border w-10 h-10 xl:w-10 xl:h-10 rounded-full border-white flex justify-center items-center me-4 xl:me-12 rotate-180 font-medium hover:cursor-pointer">
                            <p class="figtree-light animate-pulse">
                                <svg id="SvgjsSvg1011" width="18" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                    <defs id="SvgjsDefs1012"></defs>
                                    <g id="SvgjsG1013">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                            </p>
                        </div>
                        <div class="w-12/12">
                            <p class="figtree-light font-medium text-2xl mb-4 xl:mb-12 pt-2 fade-in-element">Up Next</p>
                            <p class="font-medium text-3xl lg:text-6xl mb-3 fade-in-element"><strong><?= $title_1_next; ?></strong></p>
                            <p class="font-medium text-4xl lg:text-8xl mb-12 fade-in-element"><strong><?= $title_2_next; ?></strong></p>
                            <div class="items-end w-full pb-16 xl:hidden fade-in-element">
                                <div class="flex explore-rotate-left">
                                    <p class="text-lg xl:text-2xl font-normal text-end me-3 figtree-light">
                                        Explore more
                                    </p>
                                    <div class="flex items-end pb-1 icon animate-pulse">
                                        <img class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items-end w-2/12 pb-16 hidden xl:flex fade-in-element">
                        <div class="flex explore-rotate-left">
                            <p class="text-lg xl:text-2xl font-normal text-end me-3 figtree-light">
                                Explore more
                            </p>
                            <div class="flex items-end pb-1 icon animate-pulse">
                                <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
    </a>
</section>

<?php get_footer() ?>