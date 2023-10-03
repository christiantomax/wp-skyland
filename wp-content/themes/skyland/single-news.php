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
        $news__paragraph_right = get_post_meta($post_id, $prefix . '_paragraph_Right' )[0];
        $news__alternative_url = get_post_meta($post_id, $prefix . '_alternative_url' )[0];

        //get image banner project detail
        $news__image = get_post_meta($post_id, $prefix . '_image' )[0];
        $news__image = wp_get_attachment_image_src($news__image, 'full')[0];

        $list_all_post = get_posts_taxonomy($post_type, $post_id);
    } else {
        
    }
?>

<!-- news Section -->
<section class="w-screen full-page" id="properties-swiper">
    <div class="flex h-8-12 mb-32 lg:mb-12 mt-40 ml-12 xl:ml-0">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-4 xl:ms-10 xl:me-3 fade-in-element">
                    <p class="figtree-light">01</p>
                </div>
            </div>
        </div>
        <div class="w-full xl:w-4/12 xl:ms-10">
            <div class="w-full h-30 mb-8 xl:mb-16">
                <div>
                    <p class="font-medium text-3xl fade-in-element">News</p>
                    <h1 class="font-medium text-3xl lg:text-4xl mt-2 xl:mt-4 mr-8"><strong><?= $news__title_1; ?></strong></h1>
                </div>
            </div>
            <div class="flex text-md xl:text-lg">
                <div class="flex flex-col justify-between figtree-light">
                    <div class="w-full h-40 lg:hidden">
                        <img class="w-full h-full object-cover fade-in-element" src="<?= $news__image; ?>"/>
                    </div>
                    <p class="pt-1 leading-8 mt-8 xl:mt-12 text-ellipsis overflow-hidden fade-in-element lg:hidden mr-8">
                        <?= $news__paragraph_left; ?>
                    </p>
                    <p class="pt-1 leading-8 mt-8 xl:mt-12 text-ellipsis overflow-hidden fade-in-element lg:hidden mr-8">
                        <?= $news__paragraph_right; ?>
                    </p>
                    <a class="mt-5 lg:hidden <?= $news__alternative_url == "" ? "hidden" : ""; ?>" href="<?= $news__alternative_url; ?>" target="_blank">
                        <div class="flex explore-rotate-left">
                            <p class="text-md font-normal me-3">
                                Show more
                            </p>
                            <div class="flex items-end pb-1 icon animate-pulse">
                                <img id="explore-more" class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                            </div>
                        </div>
                    </a>
                    <p class="pt-1 leading-8 mt-8 xl:mt-12 text-ellipsis overflow-hidden fade-in-element hidden lg:block">
                        <?= $news__paragraph_top; ?>
                    </p>
                    <p class="pt-1 text-sm mt-12 text-ellipsis overflow-hidden fade-in-element  mr-8">
                        Written by: <?= $news__author; ?>
                    </p>
                    <p class="pt-1 mb-10 text-sm text-ellipsis overflow-hidden fade-in-element mr-8">
                        Published: <?= $news__publish_date; ?>
                    </p>
                    
                    <div class="w-full flex border-b-2 border-white xl:hidden fade-in-element">
                        <div class="w-full h-full">
                            <p class="mt-6 mb-3 text-md">Share</p>
                            <div class="flex mb-2">
                                <img class="w-8 mr-2 mb-6" src="<?= $assets_folder_path."/icon/".'telegram.png'; ?>"/>
                                <img class="w-8 mx-2 mb-6" src="<?= $assets_folder_path."/icon/".'instagram.png'; ?>"/>
                                <img class="w-8 mx-2 mb-6" src="<?= $assets_folder_path."/icon/".'facebook.png'; ?>"/>
                                <img class="w-8 ml-2 mb-6" src="<?= $assets_folder_path."/icon/".'link.png'; ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-8/12 flex justify-end items-end ps-20 hidden xl:block bg-center bg-cover bg-no-repeat ms-32" style="background-image: url(<?= $news__image; ?>)">
        </div>
    </div>
</section>

<!-- news content Section -->
<section class="w-screen full-page hidden xl:block" id="properties-swiper">
    <div class="flex h-8-12 mb-10 mt-20 figtree-light">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
            </div>
        </div>
        <div class="w-5/12">
            <div class="flex">
                <div class="flex flex-col justify-between">
                    <p class="pt-1 leading-8 text-ellipsis overflow-hidden fade-in-element">
                        <?= $news__paragraph_left; ?>
                    </p>
                    <a class="mt-5 hidden lg:block <?= $news__alternative_url == "" ? "hidden" : ""; ?>" href="<?= $news__alternative_url; ?>" target="_blank">
                        <div class="flex explore-rotate-left">
                            <p class="text-md font-normal me-3">
                                Show more
                            </p>
                            <div class="flex items-end pb-1 icon animate-pulse">
                                <img id="explore-more" class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-5/12 ps-20">
            <div class="flex">
                <div class="flex flex-col justify-between">
                    <p class="pt-1 leading-8 text-ellipsis overflow-hidden fade-in-element">
                        <?= $news__paragraph_right; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-2/12 flex justify-end items-end ps-20">
            <div class="w-full h-full flex flex-col items-center fade-in-element">
                <p class="mb-6">Share</p>
                <button onclick="shareToInstagram()">
                    <img class="w-10 mb-6" src="<?= $assets_folder_path."/icon/".'telegram.png'; ?>"/>
                </button>
                <button onclick="shareToInstagram()">
                    <img class="w-10 mb-6" src="<?= $assets_folder_path."/icon/".'instagram.png'; ?>"/>
                </button>
                <button onclick="shareToFacebook()">
                    <img class="w-10 mb-6" src="<?= $assets_folder_path."/icon/".'facebook.png'; ?>"/>
                </button>
                <button onclick="copyToClipboard()">
                    <img class="w-10 mb-6" src="<?= $assets_folder_path."/icon/".'link.png'; ?>"/>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Offered Section news -->
<section class="w-screen full-page flex justify-center" id="properties">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full">
        <div class="flex mb-3">
            <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center ms-1 me-4 xl:me-12 fade-in-element">
                <p class="figtree-light">02</p>
            </div>
            <div>
                <p class="font-medium text-3xl hidden xl:block fade-in-element">Related</p>
                <p class="font-medium text-3xl lg:text-4xl hidden xl:block fade-in-element">Articles</p>
                <h1 class="font-medium text-3xl xl:hidden fade-in-element"><strong>Related Articles</strong></h1>
            </div>
        </div>
    </div>
</section>

<section class="w-screen full-page mb-0 hidden xl:block" id="properties-swiper">
    <div>
        <!-- Swiper -->
        <div class="swiper home-properties w-full">
            <div class="swiper-wrapper h-full">
                <div class="swiper-slide bg-black text-black flex justify-center items-center w-5 lg:w-28 opacity-0 fade-in-element">Slide 1</div>
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
                        $news__image = wp_get_attachment_image_src($news__image, 'full')[0];
                        $link_slug = get_permalink($post_id);
                ?>
                    <div class="swiper-slide w-3/12 pl-5 pr-4 py-10 fade-in-element">
                        <a href="<?= $link_slug; ?>">
                            <div class="w-full h-80">
                                <img class="w-full h-full object-cover" src="<?= $news__image; ?>"/>
                            </div>
                            <p class="mt-8 font-medium text-3xl">News</p>
                            <h2 class="mt-2 font-medium text-3xl"><?= $news__title_1; ?></strong></h2>
                            <p class="mt-7 leading-8 line-clamp-3 text-ellipsis figtree-link-light figtree-light">
                                <?= $news__paragraph_top; ?>
                            </p>
                            <div class="mt-12 flex items-end figtree-light">
                                <p class="figtree-link-light">
                                    2023
                                </p>
                                <div class="flex ms-16">
                                        <div class="flex explore-rotate-left">
                                            <p class="text-xl font-normal text-end me-3">
                                                Explore more
                                            </p>
                                            <div class="flex items-end pb-1 icon animate-pulse">
                                                <img class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- section related news -->
<section class="w-screen" id="property-galleries">
    <div class="flex justify-center">
        <div class="w-full xl:hidden">
            <div class="slider">
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
                        $news__alternative_url = get_post_meta($post_id, $prefix . '_alternative_url' )[0];

                        //get image banner project detail
                        $news__image = get_post_meta($post_id, $prefix . '_image' )[0];
                        $news__image = wp_get_attachment_image_src($news__image, 'full')[0];
                        $link_slug = get_permalink($post_id);
                ?>
                    <a href="<?= $link_slug; ?>">
                        <article class="fade-in-element">
                            <img src="<?= $news__image; ?>" alt="Image 1">
                            <div class="paragraph">
                                <div class="flex justify-between">
                                    <p class="font-medium text-3xl">News</p>
                                    <p class="figtree-link-light text-lg ms-4">
                                        2023
                                    </p>
                                </div>
                                <h2 class="mt-2 font-medium text-3xl"><?= $news__title_1; ?></strong></h2>
                                <p class="mt-7 leading-8 mb-4 overflow-y-scroll line-clamp-3 text-ellipsis figtree-link-light figtree-light">
                                    <?= $news__paragraph_top; ?>
                                </p>
                                <div class="flex items-end figtree-light">
                                    <div class="flex">
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
                        </article>
                    </a>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>


<div id="toast-simple" class="hidden z-30 fixed bottom-2 right-2 flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
    <svg class="w-5 h-5 text-blue-600 dark:text-blue-500 rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
        <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 17 8 2L9 1 1 19l8-2Zm0 0V9"/>
    </svg>
    <div class="figtree-light pl-4 text-sm font-normal text-white">Url copied</div>
</div>


<script>
    var url = window.location.href;
    function shareToInstagram() {
        var caption = "Check out this amazing News!";

        var instagramUrl = "https://www.instagram.com/create/story/photo/?url=" + encodeURIComponent(url) + "&caption=" + encodeURIComponent(caption);

        window.open(instagramUrl, "_blank");
    }

    function shareToFacebook() {
        var caption = "Check out this amazing News!";

        var facebookUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url) + "&quote=" + encodeURIComponent(caption);

        window.open(facebookUrl, "_blank");
    }

    var toast = document.getElementById("toast-simple");

    function copyToClipboard() {
        var text = url;

        navigator.clipboard.writeText(text)
            .then(function() {
                toast.classList.add("fixed");
                toast.classList.remove("hidden");
                setTimeout(() => {
                    toast.classList.add("hidden");
                    toast.classList.remove("fixed");
                }, 2000);
            })
            .catch(function(error) {
            console.error("Error copying text: ", error);
            // Handle any errors that occurred during copying
            });
    }

</script>
<?php get_footer() ?>