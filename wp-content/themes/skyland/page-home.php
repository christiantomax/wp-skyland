<?php 
    get_header();
    
    require get_theme_file_path( 'config.php' );
    $base_url = home_url();
    
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

    $prefix = "home_";
    $section = "banner_";
    $languages = "";
    $title1= rwmb_meta($prefix.$section.'title1'.$languages);
    $title2= rwmb_meta($prefix.$section.'title2'.$languages);
    $title3= rwmb_meta($prefix.$section.'title3'.$languages);
    $year= rwmb_meta($prefix.$section.'year'.$languages);
    $image= rwmb_meta($prefix.$section.'image'.$languages)['full_url'];
?>
<section class="w-screen h-screen full-page relative" id="home-banner">
    <div class="bg-fixed w-full h-full flex justify-center">
        <div class="w-11/12 h-full flex flex-col justify-end py-10 lg:py-32 ps-4 lg:ps-0 z-10">
            <h1 class="font-medium text-3xl lg:text-6xl"><?= $title1; ?></h1>
            <h2 class="font-medium text-4xl lg:text-8xl mt-4"><?= $title2; ?></h2>
            <p class="figtree-light font-regular text-xl lg:text-md mt-12"><?= $title3; ?> <span class="lg:ms-16">est. <?= $year; ?></span></p>
        </div>
    </div>
    <div class="absolute top-0 w-screen h-screen z-0">
        <!-- Swiper -->
        <div class="swiper swiper-home-banner w-full h-full">
            <div class="swiper-wrapper w-full h-full">
                <div class="swiper-slide swiper-slide-home-banner w-full h-full">
                    <img class=" w-screen h-screen bg-no-repeat bg-cover" src="https://picsum.photos/id/237/200/300" alt="img">
                </div>
                <div class="swiper-slide swiper-slide-home-banner w-full h-full">
                    <img class=" w-screen h-screen bg-no-repeat bg-cover" src="https://picsum.photos/id/238/200/300" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Offered Section Properties -->
<section class="w-screen full-page flex justify-center" id="properties">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full pt-10 lg:pt-36 xl:ps-0 lg:ps-0">
        <div class="flex mb-2 lg:mb-16">
            <div class="border w-8 h-8 lg:w-10 lg:h-10 rounded-full border-white flex justify-center items-center me-3 lg:me-12">
                <p class="figtree-light">01</p>
            </div>
            <p class="font-medium text-4xl lg:text-6xl">Properties</p>
        </div>
    </div>
</section>

<?php
    $list_all_post = get_posts_taxonomy("property_category", "");
    $limit_posts = count($list_all_post);
	$prefix = 'properties_category_';
?>
<section class="w-screen full-page mb-20" id="properties-swiper">
    <div>
        <div class="wrapper mb-10">
            <div class="carousel hover:cursor-none">
                <div class="slick-slide opacity-0" id="carousel-first-child">
                    <div class="w-full h-full px-10 py-10 flex items-end">
                        <h5 class="figtree-light">House</h5>
                    </div>
                </div>
                <?php
                    for ($i = 0; $i < $limit_posts; $i++) {
                        $post_id = $list_all_post[$i]->ID;

                        $title_1 = get_post_meta($post_id, $prefix . 'title_1' )[0];

                        //get image thumbnail property category
                        $image_thumbnail = get_post_meta($post_id, $prefix . 'image_thumbnail' )[0];
                        $image_thumbnail = wp_get_attachment_image_src($image_thumbnail)[0];
                        $link_slug = get_permalink($post_id);
                        ?>
                            <div class="relative slick-slide bg-gray-700 text-2xl">
                                <img class="w-full h-full absolute top-0 bg-cover bg-center" src="<?= $image_thumbnail; ?>"/>
                                <div class="w-full h-full px-10 py-10 flex items-end z-10">
                                    <h5 class="figtree-light drop-shadow-sm"><?= $title_1;?></h5>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="flex lg:justify-end mr-16">
        <a href="<?= $base_url;?>/properties">
            <div class="flex explore-rotate-left">
                <p class="text-xl lg:text-md font-normal text-end me-3 ms-20 lg:ms-0 figtree-light ">
                    Explore more
                </p>
                <div class="flex items-end pb-1 icon animate-pulse">
                    <img class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                </div>
            </div>
        </a>
    </div>
</section>

<?php 
    $prefix = "home_";
    $section = "investment_section_";

    $paragraph_top= rwmb_meta($prefix.$section.'paragraph_top'.$languages);
    $paragraph_bottom= rwmb_meta($prefix.$section.'paragraph_bottom'.$languages);
    $image_right= rwmb_meta($prefix.$section.'image_right'.$languages)['full_url'];
    $image_left= rwmb_meta($prefix.$section.'image_left'.$languages)['full_url'];
?>
<!-- Investment Section -->
<section class="w-screen full-page" id="properties-swiper">
    <div class="flex h-8-12 mb-36 m-4 xl:ms-10">
        <div class="w-1/12">
            <div class="w-full flex mb-14">
                <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center lg:ms-6">
                    <p class="figtree-light">02</p>
                </div>
            </div>
            <div class="w-full lg:hidden mr-2 mt-36">
                <span class="border-b-2 border-white text-transparent">sky</span>
            </div>
        </div>
        <div class="w-11/12 grid grid-cols-1 lg:grid-cols-2 ps-3 lg:ps-0">
            <div>
                <div class="w-full h-30 mb-8 lg:mb-16">
                    <h1 class="figtree-light font-medium text-4xl lg:text-6xl"><strong>Investment</strong></h1>
                </div>
                <div class="w-full h-20 lg:h-48 mb-8 lg:mb-16">
                    <img class="w-full h-full object-cover" src="<?= $image_left; ?>"/>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <div class="w-8/12 hidden lg:block">
                        <span class="border-b-2 border-white text-transparent">skyland</span>
                    </div>
                    <div class="flex flex-col justify-between figtree-light ">
                        <p class="pt-1 text-ellipsis overflow-y-scroll lg:overflow-hidden">
                            <?= $paragraph_top;?>
                        </p>
                        <p class="mt-10 text-ellipsis overflow-y-scroll lg:overflow-hidden">
                            <?= $paragraph_bottom;?>
                        </p>
                        <div class="flex lg:justify-end mt-8 lg:mt-10 mb-8 lg:mb-0 pe-4">
                            <a href="<?= $base_url;?>/investment">
                                <div class="flex explore-rotate-left">
                                    <p class="text-xl lg:text-md font-normal text-end me-3 figtree-light ">
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
            <div class="flex justify-end items-end">
                <div class="w-full lg:w-8/12 home-investment-right-image">
                    <img class="w-full h-full object-cover" src="<?= $image_right; ?>"/>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    $section = "story_section_";

    $paragraph= rwmb_meta($prefix.$section.'paragraph'.$languages);
    $image= rwmb_meta($prefix.$section.'image'.$languages)["full_url"];
?>
<!-- story section -->
<section class="w-screen full-page" id="home-story">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $image;?>)">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24">
            <div class="flex flex-col lg:flex-row lg:justify-between w-full">
                <div class="w-full lg:w-8/12 flex ps-0 lg:ps-0" >
                    <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-0 lg:ms-2 lg:me-10">
                        <p class="figtree-light">03</p>
                    </div>
                    <div class="w-full lg:w-5/12 ps-2 lg:ps-0">
                        <h1 class="figtree-light font-medium text-4xl lg:text-6xl mb-4 lg:mb-12"><strong>Our History</strong></h1>
                        <p class="pt-1 text-ellipsis overflow-hidden figtree-light">
                            <?= $paragraph;?>
                        </p>
                    </div>
                </div>
                <div class="flex lg:justify-end w-full lg:w-4/12 my-4 lg:my-0 ms-14 lg:ms-0 h-fit explore-rotate-left">
                    <a href="<?= $base_url;?>/about-us">
                        <div class="flex items-end explore-rotate-left">
                            <p class="text-xl lg:text-md font-normal text-end me-3 figtree-light ">
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
</section>

<div class="hidden drag-cursor fixed z-40 pointer-events-none lg:hidden">
    <div class="relative h-[5rem] w-[5rem] rounded-full border-white border-2">
        <div class="flex items-center justify-center absolute top-1/4 left-1/4 bottom-1/4 right-1/4">
        DRAG
        </div>
    </div>
</div>

<?php get_footer() ?>