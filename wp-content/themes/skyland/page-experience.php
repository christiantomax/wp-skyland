<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
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
        <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full flex flex-col justify-end py-32">
            <h1 class="font-medium text-6xl"><?= $title1; ?></h1>
            <h2 class="font-medium text-8xl mt-4"><?= $title2; ?></h2>
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
    <div class="flex h-8-12 mb-24">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                    <p class="figtree-light">01</p>
                </div>
            </div>
        </div>
        <div class="w-5/12">
            <div class="w-full h-30 mb-16">
                <h1 class="font-medium text-6xl"><strong>Customer First</strong></h1>
            </div>
            <div class="w-full h-48 mb-16">
                <img class="w-full h-full object-cover" src="<?= $image_left; ?>"/>
            </div>
            <div class="flex">
                <div class="w-8/12">
                    <span class="border-b-2 border-white text-transparent">skyland</span>
                </div>
                <div class="flex flex-col justify-between figtree-light ">
                    <p class="pt-1 h-40 text-ellipsis overflow-hidden">
                        <?= $paragraph_top;?>
                    </p>
                    <p class="mt-10 h-40 text-ellipsis overflow-hidden">
                        <?= $paragraph_bottom;?>
                    </p>
                    <div class="flex justify-end mt-10 pe-4">
                        <div class="flex explore-rotate-left">
                            <p class="text-2xl font-normal text-end me-3">
                                Explore Project
                            </p>
                            <div class="flex items-end pb-1 icon animate-pulse">
                                <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-6/12 flex justify-end items-end">
            <div class="w-9/12 home-investment-right-image">
                <img class="w-full h-full object-cover" src="<?= $image_right; ?>"/>
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
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full pt-24">
        <div class="flex mb-16">
            <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                <p class="figtree-light">02</p>
            </div>
            <p class="font-medium text-6xl">Customize</p>
        </div>
    </div>
</section>

<section class="w-screen full-page mb-32" id="properties-swiper">
    <div>
        <!-- Swiper -->
        <div class="swiper home-properties w-full mb-12 figtree-light ">
            <div class="swiper-wrapper h-full">
                <div class="swiper-slide bg-white flex justify-center items-center w-36 opacity-0">Slide 1</div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>House<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Office<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Apartment<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Commercial<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>House<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Office<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Apartment<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Commercial<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>House<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Office<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Apartment<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Commercial<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>House<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Office<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Apartment<h5/></div>
                <div class="swiper-slide bg-gray-700 text-2xl flex items-end w-3/12 px-10 py-10"><h5>Commercial<h5/></div>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="flex w-12/12 figtree-light ">
            <div class="w-2/12"></div>
            <div class="w-7/12 flex foreword-description mb-16">
                <p class="pt-1 w-6/12 h-24 me-8">
                    <?= $paragraph_left; ?>
                </p>
                <p class="pt-1 w-6/12 h-24 ms-8">
                    <?= $paragraph_right; ?>
                </p>
            </div>
            <div class="w-3/12 flex justify-end me-12">
                <div class="flex explore-rotate-left">
                    <p class="text-2xl font-normal text-end me-3">
                        Explore more
                    </p>
                    <div class="flex pb-1 icon animate-pulse mt-1">
                        <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $section = "partnership_section_";

    $paragraph= rwmb_meta($prefix.$section.'paragraph'.$languages);
    $image= rwmb_meta($prefix.$section.'image'.$languages)['full_url'];
?>
<!-- partnership section -->
<section class="w-screen full-page mb-40" id="experience-partnership">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $image;?>)">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24">
            <div class="flex justify-between w-full">
                <div class="flex" >
                    <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                        <p class="figtree-light">04</p>
                    </div>
                    <div class="w-5/12">
                        <h1 class="font-medium text-6xl mb-12"><strong>Partnership</strong></h1>
                        <p class="pt-1 min-h-content text-ellipsis overflow-hidden">
                            <?= $paragraph; ?>
                        </p>
                    </div>
                </div>
                <div class="flex w-4/12 h-fit explore-rotate-left figtree-light ">
                    <p class="text-2xl font-normal w-11/12 text-right">
                        Explore more
                    </p>
                    <div class="pt-2 ms-3 icon animate-pulse">
                        <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>