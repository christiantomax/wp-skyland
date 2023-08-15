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
    
    $prefix = "about_";
    $section = "beginning_section_";
    $languages = "";

    $title1 = rwmb_meta($prefix.$section.'title1'.$languages);
    $title2 = rwmb_meta($prefix.$section.'title2'.$languages);
    $paragraph_left = rwmb_meta($prefix.$section.'paragraph_left'.$languages);
    $paragraph_right = rwmb_meta($prefix.$section.'paragraph_right'.$languages);
    $quotes = rwmb_meta($prefix.$section.'quotes'.$languages);
    $image = rwmb_meta($prefix.$section.'image'.$languages)['full_url'];
?>

<!-- section Foreword -->
<section class="w-screen full-page" id="about-us-the-beginning">
    <div class="w-full h-full flex justify-center mt-40">
        <div class="bg-fixed w-11/12  flex bg-no-repeat bg-cover h-full">
            <div class="flex justify-between w-full ps-0 lg:ps-0">
                <div class="flex" >
                    <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:me-12">
                        <p class="figtree-light">01</p>
                    </div>
                    <div class="w-12/12 ps-1">
                        <h2 class="font-medium text-3xl lg:text-4xl mb-4 lg:ms-1"><?= $title1; ?></h2>
                        <h1 class="font-medium text-4xl lg:text-7xl mb-4 lg:mb-10 lg:ms-1"><strong><?= $title2; ?></strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="w-12/12 lg:ms-72" id="about-us-description">
        <div class="flex flex-col lg:flex-row foreword-description mb-6 lg:mb-10 figtree-light pl-14 lg:pl-0 pr-4">
            <p class="pt-1 leading-8 my-3 lg:my-0 text-ellipsis overflow-hidden lg:w-4/12 pe-8 lg:pe-0 fade-in-element">
                <?= $paragraph_left; ?>
            </p>
            <p class="pt-1 leading-8 my-3 lg:my-0 text-ellipsis overflow-hidden lg:w-4/12 lg:ms-16 pe-8 lg:pe-0 fade-in-element">
                <?= $paragraph_right; ?>
            </p>
        </div>
        
        <div class="lg:w-12/12 lg:h-72 flex foreword-image-container ps-14 lg:ps-0 fade-in-element">
            <img class="w-full h-full object-cover bg-center" src="<?= $image; ?>"/>
        </div>
</section>

<!-- section investment quote -->
<section class="w-screen full-page" id="about-us-quote">
    <div class="flex h-8-12 ps-4 pe-8 lg:px-8">
        <div class="w-full lg:w-10/12 mt-0 mt-10 lg:mt-20">
            <div class="flex">
                <div class="w-1/12 lg:w-4/12 flex items-start lg:justify-end pe-0 lg:pe-20 lg:opacity-0 lg:hidden">
                    <p class="pt-2 border-b-2 border-white text-transparent">sky</p>
                </div>
                <div class="flex flex-col justify-between lg:ms-56">
                    <div class="flex items-start lg:ms-8">
                        <p class="pt-6 lg:mr-12 border-b-2 border-white text-transparent hidden lg:block">skyland</p>
                        <p id="quotes" class="mt-5 lg:pt-1 ps-2 lg:ps-5 text-2xl lg:text-5xl leading-normal text-left pe-8 lg:pe-0">
                            <?= $quotes; ?>
                        </p>
                    </div>
                    <div class="flex lg:justify-end mt-6 pb-4 ps-2 lg:ps-6 project-description">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section About Us Mission -->
<section class="w-screen full-page flex justify-center hidden" id="about-us-mission">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full pt-4 lg:pt-24 ps-0 lg:ps-0">
        <div class="flex mb-4 lg:mb-16 fade-in-element">
            <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:ms-1 lg:me-12">
                <p class="figtree-light">02</p>
            </div>
            <p class="font-medium text-3xl lg:text-6xl lg:ms-1">Mission</p>
        </div>
    </div>
</section>

<?php 
	$prefix1 = 'mission';
    $languages = "";

    $list_all_post = get_post_without_taxonomy("mission", "");
    $limit_posts = count($list_all_post);
?>
<section class="w-screen full-page mb-20 hidden" id="properties-swiper">
    <div>
        <div class="wrapper mb-10">
            <div class="carousel hover:cursor-none">
                <div class="slick-slide opacity-0" id="carousel-first-child">
                    <div class="w-full h-full px-10 py-10 flex items-end text-left">
                        <h5 class="figtree-light z-10">Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.</h5>
                    </div>
                </div>
                <?php
                    for ($i = 0; $i < $limit_posts; $i++) {
                        $post_id = $list_all_post[$i]->ID;

                        $description = get_post_meta($post_id, $prefix1 . '_description' )[0];

                        //get image thumbnail property category
                        $image_thumbnail = get_post_meta($post_id, $prefix1 . '_image' )[0];
                        $image_thumbnail = wp_get_attachment_image_src($image_thumbnail, 'full')[0];
                        $link_slug = get_permalink($post_id);
                        ?>
                            <div class="relative slick-slide bg-gray-700 fade-in-element">
                                <img class="w-full h-full absolute top-0 bg-cover bg-center" src="<?= $image_thumbnail; ?>"/>
                                <div class="w-full h-full px-3 py-3 flex items-end z-10">
                                    <h5 class="figtree-light text-left lowercase">
                                        <?= $description;?>
                                    </h5>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php
    $section = "background_story_section_";

    $paragraph_top= rwmb_meta($prefix.$section.'paragraph_top'.$languages);
    $paragraph_bottom= rwmb_meta($prefix.$section.'paragraph_bottom'.$languages);
    $image_left= rwmb_meta($prefix.$section.'image_left'.$languages)['full_url'];
    $image_right= rwmb_meta($prefix.$section.'image_right'.$languages)['full_url'];
?>
<!-- section background story -->
<section class="w-screen full-page" id="about-us-background-story">
    <div class="flex h-8-12 mb-0 xl:mb-36 ms-4 xl:ms-10">
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
            <div class="lg:w-11/12">
                <div class="w-full h-30 mb-8 lg:mb-16">
                    <h1 class="figtree-light font-medium text-4xl lg:text-6xl fade-in-element"><strong>Our Story</strong></h1>
                </div>
                <div class="w-full h-20 lg:h-48 mb-8 lg:mb-16 lg:pe-0">
                    <img class="w-full h-full object-cover fade-in-element" src="<?= $image_left; ?>"/>
                </div>
                <div class="flex flex-col lg:flex-row">
                    <div class="w-8/12 hidden lg:block">
                        <span class="border-b-2 border-white text-transparent lg:me-8">skyland</span>
                    </div>
                    <div class="flex flex-col justify-between figtree-light ">
                        <p class="pt-2 leading-8 text-ellipsis overflow-y-scroll lg:overflow-hidden pe-8 lg:pe-0 fade-in-element">
                            <?= $paragraph_top;?>
                        </p>
                        <p class="mt-10 leading-8 text-ellipsis overflow-y-scroll lg:overflow-hidden pe-8 lg:pe-0 fade-in-element">
                            <?= $paragraph_bottom;?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-end">
                <div class="w-full lg:w-11/12 home-investment-right-image fade-in-element">
                    <img class="w-full h-full object-cover" src="<?= $image_right; ?>"/>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section Team -->
<section class="w-screen full-page flex justify-center xl:hidden" id="about-us-team-header">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full pt-24 ps-0 lg:ps-0">
        <div class="flex mb-4 lg:mb-16">
            <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:me-12">
                <p class="figtree-light">03</p>
            </div>
            <p class="font-medium text-3xl lg:text-6xl">Team</p>
        </div>
    </div>
</section>

<?php
    $section = "team_section_";
    
    $paragraph_top= rwmb_meta($prefix.$section.'paragraph_top'.$languages);
    $paragraph_bottom= rwmb_meta($prefix.$section.'paragraph_bottom'.$languages);
    $image_left1= rwmb_meta($prefix.$section.'image_left1'.$languages)['full_url'];
    $image_left2= rwmb_meta($prefix.$section.'image_left2'.$languages)['full_url'];
?>
<!-- Section team -->
<section class="w-screen full-page" id="about-us-team">
    <div class="flex flex-col lg:flex-row h-8-12 pe-2 lg:px-0">
        <div class="w-11/12 lg:w-6/12 flex justify-center h-56 lg:h-auto fade-in-element">
            <div class="w-6/12 h-full home-investment-right-image">
                    <img class="w-full h-full object-cover object-fit bg-full bg-center" src="<?= $image_left1;?>"/>
            </div>
            <div class="w-6/12 h-full home-investment-right-image">
                    <img class="w-full h-full object-cover object-fit bg-full bg-center" src="<?= $image_left2;?>"/>
            </div>
        </div>
        <div class="w-1/12 flex justify-end hidden lg:block">
            <div class="flex mb-14">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center xl:ms-12 fade-in-element">
                    <p class="figtree-light">03</p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-5/12">
            <div class="w-full h-30 mb-16 hidden lg:block">
                <h1 class="font-medium text-6xl fade-in-element"><strong>Team</strong></h1>
            </div>
            <div class="flex mt-10 lg:mt-0">
                <div class="flex flex-col justify-between ps-16 lg:ps-0 lg:pe-12 figtree-light">
                    <p class="pt-1 leading-8 text-ellipsis overflow-hidden pe-8 lg:pe-0 fade-in-element">
                        <?= $paragraph_top;?>
                    </p>
                    <p class="mt-10 leading-8 text-ellipsis overflow-hidden pe-8 lg:pe-0 fade-in-element">
                        <?= $paragraph_bottom;?>
                    </p>
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