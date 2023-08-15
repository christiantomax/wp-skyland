<?php 
    get_header();
    require get_theme_file_path( 'config.php' );

    function get_posts_taxonomy($post_type, $post_id) {
        $args = array(
            'post_type'      => $post_type,
            'posts_per_page' => -1,
            'post__not_in'   => array($post_id),
            'post_status'    => 'publish',
        );
        
        $query = new WP_Query($args);
        return $query->posts;
    }
    
    $list_all_post = get_posts_taxonomy("news", "");
?>

<?php 
    $prefix = "news_";
    $section = "latest_news_section_";
    $languages = "";

    $title= rwmb_meta($prefix.$section.'title'.$languages);
?>
<!-- section news list -->
<section class="w-screen full-page" id="project-list">
    <div class="w-full h-full flex justify-center">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-40">
            <div class="flex justify-between w-full">
                <div class="w-full flex">
                    <div class="border fade-in-element w-12 h-10 xl:w-10 xl:h-10 rounded-full border-white flex justify-center items-center me-4 xl:me-12 xl:ms-1 rotate-180 font-medium hover:cursor-pointer">
                        <p class="figtree-light animate-pulse">
                            <svg id="SvgjsSvg1011" width="18" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                <defs id="SvgjsDefs1012"></defs>
                                <g id="SvgjsG1013">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                        </p>
                    </div>
                    <div class="w-full flex flex-col justify-between">
                        <h2 class="font-medium text-3xl xl:text-4xl mb-4 fade-in-element">Latest News</h2>
                        <h1 class="font-medium text-4xl xl:text-7xl xl:mb-8 fade-in-element"><strong><?= $title; ?></strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section related news -->
<section class="w-screen" id="property-galleries">
    <div class="flex justify-center">
        <div class="w-full ms-8 me-8 lg:ms-40 lg:me-20">
                <?php
                    $limit_posts = count($list_all_post);
                    for ($i = 0; $i < $limit_posts; $i++) {
                        $post_id = $list_all_post[$i]->ID;

                        $news__title_1 = get_post_meta($post_id, $prefix . '_title_1' )[0];
                        $news__paragraph_top = get_post_meta($post_id, $prefix . '_paragraph_top' )[0];
                        $news__author = get_post_meta($post_id, $prefix . '_author' )[0];
                        $news__publish_date = get_post_meta($post_id, $prefix . '_publish_date' )[0];
                        $news__publish_date = new DateTime($news__publish_date);
                        $news__publish_date = $news__publish_date->format('M jS Y');
                        $news__paragraph_left = get_post_meta($post_id, $prefix . '_paragraph_left' )[0];
                        $news__paragraph_Right = get_post_meta($post_id, $prefix . '_paragraph_Right' )[0];

                        //get image banner project detail
                        $news__image = get_post_meta($post_id, $prefix . '_image' )[0];
                        $news__image = wp_get_attachment_image_src($news__image, 'full')[0];
                        $link_slug = get_permalink($post_id);
                ?>

                    <?php
                        if ($i % 3 == 0) {
                    ?>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-12 xl:border-b-2 xl:border-white fade-in-element">
                    <?php 
                        }
                    ?>
                    <article class="border-b-2 border-white xl:border-0 <?= $i > 0 ? 'mt-12' : ''; ?> xl:mt-0">
                        <a href="">
                            <img src="<?= $news__image; ?>" alt="Image 1" title="<?= $news__title_1; ?>">
                            <div class="">
                                <div class="flex justify-between mt-10">
                                    <p class="font-medium text-3xl">News</p>
                                </div>
                                <h2 class="mt-2 font-medium text-3xl"><?= $news__title_1; ?></strong></h2>
                                <p class="mt-7 leading-8 overflow-y-hidden line-clamp-3 text-ellipsis figtree-link-light figtree-light">
                                    <?= $news__paragraph_top; ?>
                                </p>
                                <div class="flex items-end figtree-light mb-10">
                                    <div class="flex items-center mt-5">
                                        <p class="figtree-link-light text-sm me-10">
                                            2023
                                        </p>
                                        <a href="<?= $link_slug; ?>">
                                            <div class="flex explore-rotate-left">
                                                <p class="text-md font-normal me-3">
                                                    Explore more
                                                </p>
                                                <div class="flex items-end pb-1 icon animate-pulse">
                                                    <img id="explore-more" class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                    <?php
                        if ($i % 3 == 2 || $i + 1 == $limit_posts) {
                    ?>
                        </div>
                    <?php 
                        }
                    ?>
                <?php
                    }
                ?>
        </div>
    </div>
</section>

<?php get_footer() ?>