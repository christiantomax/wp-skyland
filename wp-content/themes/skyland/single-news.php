<?php 
    get_header();
    require get_theme_file_path( 'config.php' );

    if (have_posts()) {
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

        $prefix = 'news_';

        the_post();
        $post_id = get_the_ID();
        $post_type = get_post_type();

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
        $news__image = wp_get_attachment_image_src($news__image)[0];

        $list_all_post = get_posts_taxonomy($post_type, $post_id);
    } else {
        
    }
?>

<!-- news Section -->
<section class="w-screen full-page" id="properties-swiper">
    <div class="flex h-8-12 mb-36 mt-40">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                    <p class="figtree-light">02</p>
                </div>
            </div>
        </div>
        <div class="w-4/12">
            <div class="w-full h-30 mb-16">
                <div>
                    <p class="figtree-light font-bold text-3xl">News</p>
                    <h1 class="figtree-light font-bold text-6xl"><strong><?= $news__title_1; ?></strong></h1>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col justify-between">
                    <p class="pt-1 h-96 text-ellipsis overflow-hidden">
                        <?= $news__paragraph_top; ?>
                    </p>
                    <p class="pt-1 text-ellipsis overflow-hidden">
                        Written by: <?= $news__author; ?>
                    </p>
                    <p class="pt-1 text-ellipsis overflow-hidden">
                        Published: <?= $news__publish_date; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-8/12 flex justify-end items-end ps-20">
            <div class="w-full home-investment-right-image">
                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
            </div>
        </div>
    </div>
</section>

<!-- news content Section -->
<section class="w-screen full-page" id="properties-swiper">
    <div class="flex h-8-12 mb-10 mt-40">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
            </div>
        </div>
        <div class="w-5/12">
            <div class="flex">
                <div class="flex flex-col justify-between">
                    <p class="pt-1 h-96 text-ellipsis overflow-hidden">
                        <?= $news__paragraph_top; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-5/12 ps-20">
            <div class="flex">
                <div class="flex flex-col justify-between">
                    <p class="pt-1 h-96 text-ellipsis overflow-hidden">
                        <?= $news__paragraph_top; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-2/12 flex justify-end items-end ps-20">
            <div class="w-full h-full flex flex-col items-center">
                <p class="mb-6">Share</p>
                <img class="w-10 mb-6" src="<?= $assets_folder_path."/icon/".'telegram.png'; ?>"/>
                <img class="w-10 mb-6" src="<?= $assets_folder_path."/icon/".'instagram.png'; ?>"/>
                <img class="w-10 mb-6" src="<?= $assets_folder_path."/icon/".'facebook.png'; ?>"/>
                <img class="w-10 mb-6" src="<?= $assets_folder_path."/icon/".'link.png'; ?>"/>
            </div>
        </div>
    </div>
</section>

<!-- Offered Section news -->
<section class="w-screen full-page flex justify-center" id="properties">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full">
        <div class="flex mb-16">
            <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                <p class="figtree-light">02</p>
            </div>
            <div>
                <p class="figtree-light font-bold text-3xl">Related</p>
                <h1 class="figtree-light font-bold text-6xl"><strong>Articles</strong></h1>
            </div>
        </div>
    </div>
</section>

<section class="w-screen full-page mb-20" id="properties-swiper">
    <div>
        <!-- Swiper -->
        <div class="swiper home-properties w-full mb-12">
            <div class="swiper-wrapper h-full">
                <div class="swiper-slide bg-white flex justify-center items-center w-36 opacity-0">Slide 1</div>
                <?php
                    $limit_posts = count($list_all_post) < 10 ? count($list_all_post) : 10;
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
                        $news__image = wp_get_attachment_image_src($news__image)[0];
                        $link_slug = get_permalink($post_id);
                ?>
                    <div class="swiper-slide w-3/12 px-4 py-10">
                        <div>
                            <div class="w-full h-80">
                                <img class="w-full h-full object-cover" src="<?= $assets_folder_path."/img/".'banner-home-story.png'; ?>"/>
                            </div>
                            <p class="mt-8 figtree-light font-bold text-3xl">News</p>
                            <h2 class="mt-2 figtree-light font-bold text-3xl"><?= $news__title_1; ?></strong></h2>
                            <p class="mt-7 h-20 line-clamp-3 text-ellipsis figtree-link-light">
                                <?= $news__paragraph_top; ?>
                            </p>
                            <div class="mt-12 flex items-end">
                                <p class="figtree-link-light">
                                    2023
                                </p>
                                <div class="flex ms-16">
                                    <a href="<?= $link_slug; ?>">
                                        <div class="flex explore-rotate-left">
                                            <p class="text-xl font-normal text-end me-3">
                                                Explore more
                                            </p>
                                            <div class="flex items-end pb-1 icon animate-pulse">
                                                <img class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>