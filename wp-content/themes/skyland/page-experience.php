<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
    $base_url = home_url();
    
    function get_post_without_taxonomy($post_type, $post_id) {
        $args = array(
            'post_type'      => $post_type,
            'posts_per_page' => -1,
            'post__not_in'   => array($post_id),
            'post_status'    => 'publish',
        );
        
        $query = new WP_Query($args);
        return $query->posts;
    }

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

    global $wpdb;

    // Query to retrieve options where autoload is 'no'
    $query = $wpdb->prepare("
        SELECT option_name, option_value
        FROM {$wpdb->prefix}options
        WHERE autoload = 'no'
        AND option_name like '%z_taxonomy_image%'
    ");

    // Execute the query
    $options = $wpdb->get_results($query);

    // Generate the associative array with option_name as key and option_value as value
    $imageListTaxonomy = array();
    foreach ($options as $option) {
        $option_name = $option->option_name;
        $option_value = $option->option_value;
        $imageListTaxonomy[$option_name] = $option_value;
    }
?>

<?php 
    $prefix = "experience_";
    $section = "banner_section_";
    $languages = "";

    $title1= rwmb_meta($prefix.$section.'title1'.$languages);
    $title2= rwmb_meta($prefix.$section.'title2'.$languages);
    $image= rwmb_meta($prefix.$section.'image'.$languages)['full_url'];
?>
<!-- section experience banner -->
<section class="w-screen h-screen full-page mb-12" id="home-banner">
    <div class="bg-fixed bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $image; ?>)">
        <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full flex flex-col justify-end py-16 lg:py-32">
            <h1 class="font-medium text-3xl lg:text-6xl"><?= $title1; ?></h1>
            <h2 class="font-medium text-4xl lg:text-8xl mt-4"><?= $title2; ?></h2>
        </div>
    </div>
</section>

<?php 
    $section = "customer_first_section_";

    $paragraph_top= rwmb_meta($prefix.$section.'paragraph_top'.$languages);
    $paragraph_bottom= rwmb_meta($prefix.$section.'paragraph_bottom'.$languages);
    $image_left= rwmb_meta($prefix.$section.'image_left'.$languages)['full_url'];
    $image_right= rwmb_meta($prefix.$section.'image_right'.$languages)['full_url'];
?>

<!-- section customer first -->
<section class="w-screen full-page" id="experience-customer-first">
    <div class="flex h-8-12 mb-0 lg:mb-10 ms-4">
        <div class="w-1/12">
            <div class="w-full flex mb-14">
                <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center lg:ms-12 lg:me-6">
                    <p class="figtree-light">01</p>
                </div>
            </div>
            <div class="w-full lg:hidden mr-2 mt-36">
                <span class="border-b-2 border-white text-transparent">sky</span>
            </div>
        </div>
        <div class="w-11/12 grid grid-cols-1 lg:grid-cols-2 ps-3 lg:ps-0">
            <div>
                <div class="w-full h-30 mb-8 lg:mb-16">
                    <h1 class="figtree-light font-medium text-4xl lg:text-6xl lg:ml-3"><strong>Customer First</strong></h1>
                </div>
                <div class="w-full h-20 lg:h-48 mb-8 lg:mb-16">
                    <img class="w-full h-full object-cover" src="<?= $image_left; ?>"/>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <div class="w-8/12 hidden lg:block">
                        <span class="border-b-2 border-white text-transparent">skyland</span>
                    </div>
                    <div class="flex flex-col justify-between figtree-light ">
                        <p class="pt-1 leading-8 text-ellipsis overflow-y-scroll lg:overflow-hidden">
                            <?= $paragraph_top;?>
                        </p>
                        <p class="mt-10 leading-8 text-ellipsis overflow-y-scroll lg:overflow-hidden">
                            <?= $paragraph_bottom;?>
                        </p>
                        <div class="flex lg:justify-end mt-8 lg:mt-20 mb-8 lg:mb-0 pe-4">
                            <a href="<?= $base_url;?>/properties">
                                <div class="flex explore-rotate-left">
                                    <p class="text-lg lg:text-md font-normal text-end me-3 figtree-light ">
                                        Explore Project
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
                <div class="w-full lg:w-8/12 home-investment-right-image lg:mt-10">
                    <img class="w-full h-full object-cover" src="<?= $image_right; ?>"/>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $section = "customize_section_";

    $paragraph_left= rwmb_meta($prefix.$section.'paragraph_left'.$languages);
    $paragraph_right= rwmb_meta($prefix.$section.'paragraph_right'.$languages);
?>
<!-- Section Customize -->
<section class="w-screen full-page flex justify-center" id="experience-customize">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full pt-24 ms-4 lg:ms-0">
        <div class="flex mb-16">
            <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:ms-1 lg:me-10">
                <p class="figtree-light">02</p>
            </div>
            <p class="font-medium text-3xl lg:text-6xl">Customize</p>
        </div>
    </div>
</section>

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
                    $list_all_post = get_post_without_taxonomy("property", "");
                    $limit_posts = count($list_all_post);
                    $prefix = 'properties_';

                    for ($i = 0; $i < $limit_posts; $i++) {
                        $post_id = $list_all_post[$i]->ID;

                        $title_1 = get_post_meta($post_id, $prefix . 'title_1' )[0];
                        $title_2 = get_post_meta($post_id, $prefix . 'title_2' )[0];

                        //get image banner project detail
                        $image_banner = get_post_meta($post_id, $prefix . 'image_banner' )[0];
                        $image_banner = wp_get_attachment_image_src($image_banner, 'full')[0];
                        $link_slug = get_permalink($post_id);
                        ?>
                            <a class="relative slick-slide bg-gray-700 text-2xl" href="<?= $link_slug; ?>">
                                <div class="w-full h-full absolute top-0 left-0">
                                    <img class="w-full h-full bg-cover bg-center object-cover" src="<?= $image_banner; ?>"/>
                                </div>
                                <div class="w-full h-full px-10 py-10 flex items-end">
                                    <div class="z-30">
                                        <h5 class="figtree-light text-left"><?= $title_1?></h5>
                                        <p class="figtree-light"><?= $title_2?></p>
                                    </div>
                                </div>
                                <div class="overlay hover:bg-transparent z-20"></div>
                            </a>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="flex lg:justify-end mr-16">
        <a href="<?= $base_url;?>/properties">
            <div class="flex explore-rotate-left">
                <p class="text-lg lg:text-md font-normal text-end me-3 ms-16 lg:ms-20 lg:ms-0 figtree-light ">
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
    $prefix = "experience_";
    $section = "partnership_section_";

    $paragraph= rwmb_meta($prefix.$section.'paragraph'.$languages);
    $image= rwmb_meta($prefix.$section.'image'.$languages)['full_url'];
?>
<!-- partnership section -->
<section class="w-screen full-page mb-0" id="experience-partnership">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $image;?>)">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24 lg:pb-24">
            <div class="flex flex-col lg:flex-row lg:justify-between w-full pb-52 lg:pb-0">
                <div class="flex" >
                    <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:me-12">
                        <p class="figtree-light">03</p>
                    </div>
                    <div class="w-full lg:w-5/12">
                        <h1 class="font-medium text-3xl lg:text-6xl mb-6 lg:mb-12"><strong>Partnership</strong></h1>
                        <p class="figtree-light leading-8 lg:w-7/12 pt-1 min-h-content text-ellipsis overflow-hidden">
                            <?= $paragraph; ?>
                        </p>
                    </div>
                </div>
                <div class="flex lg:justify-end w-full lg:w-4/12 my-4 lg:my-0 ms-14 lg:ms-0 h-fit explore-rotate-left">
                    <a href="<?= $base_url;?>/teams">
                        <div class="flex items-end explore-rotate-left">
                            <p class="text-lg lg:text-md font-normal text-end me-3 figtree-light ">
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
    <div class="relative h-[3.5rem] w-[3.5rem] rounded-full border-white border-2 backdrop-filter backdrop-blur-sm" style="background-color: rgba(255,255,255, 0.2)">
        <div class="figtree-light flex items-center justify-center absolute top-1/4 left-1/4 bottom-1/4 right-1/4 text-md opacity-100 text-white font-bold">
        drag
        </div>
    </div>
</div>

<?php get_footer() ?>