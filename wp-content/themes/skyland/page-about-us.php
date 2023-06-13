<?php 
    get_header();
    
    require get_theme_file_path( 'config.php' );
    
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
<section class="w-screen full-page" id="about-us-beginning">
    <div class="w-full h-full flex justify-center">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24">
            <div class="flex justify-between w-full">
                <div class="flex" >
                    <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                        <p class="figtree-light">01</p>
                    </div>
                    <div class="w-12/12">
                        <h2 class="font-medium text-4xl mb-4"><?= $title1; ?></h2>
                        <h1 class="font-medium text-7xl mb-16"><strong><?= $title2; ?>.</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="w-12/12 ms-72 mb-24" id="property-description">
        <div class="flex foreword-description mb-16 figtree-light">
            <p class="pt-1 text-ellipsis overflow-hidden w-4/12 h-24">
                <?= $paragraph_left; ?>
            </p>
            <p class="pt-1 text-ellipsis overflow-hidden w-4/12 h-24 ms-16">
                <?= $paragraph_right; ?> 
            </p>
        </div>
        
        <div class="w-12/12 flex foreword-image-container mb-24">
            <img class="w-full h-full object-cover" src="<?= $image; ?>"/>
        </div>

        <div class="flex w-11/12">
            <div class="w-2/12 flex items-start pe-20">
                <p class="pt-2 border-b-2 border-white text-transparent">skyland</p>
            </div>
            <div class="flex flex-col justify-between">
                <p class="pt-1 text-ellipsis overflow-hidden text-5xl leading-normal">
                    <?= $quotes; ?>.
                </p>
                
                <div class="flex justify-end pb-4 project-description-<?= $j; ?> about-us-description">
                    <div class="flex explore-rotate-left">
                        <p class="text-2xl font-normal text-end me-3 figtree-light">
                            How?
                        </p>
                        <div class="flex items-end pb-1 icon animate-pulse">
                            <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Section About Us Mission -->
<section class="w-screen full-page flex justify-center" id="about-us-mission">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full pt-24">
        <div class="flex mb-16">
            <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                <p class="figtree-light">02</p>
            </div>
            <p class="font-medium text-6xl">Mission</p>
        </div>
    </div>
</section>

<section class="w-screen full-page mb-20" id="properties-swiper">
    <div>
        <div class="wrapper mb-10">
            <div class="carousel hover:cursor-none">
                <div class="slick-slide opacity-0" id="carousel-first-child">
                    <div class="w-full h-full px-10 py-10 flex items-end text-left">
                        <h5 class="figtree-light">Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.</h5>
                    </div>
                </div>
                <?php
                    for ($i=0; $i < 10; $i++) { 
                        ?>
                            <div class="slick-slide bg-gray-700">
                                <div class="w-full h-full px-10 py-10 flex items-end text-left">
                                    <h5 class="figtree-light">Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.</h5>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="flex justify-end mr-16">
        <div class="flex explore-rotate-left">
            <p class="text-2xl font-normal text-end me-3 figtree-light ">
                Explore more
            </p>
            <div class="flex items-end pb-1 icon animate-pulse">
                <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
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
    <div class="flex h-8-12 mb-52">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                    <p class="figtree-light">03</p>
                </div>
            </div>
        </div>
        <div class="w-5/12">
            <div class="w-full h-30 mb-16">
                <h1 class="font-medium text-6xl"><strong>Background Story</strong></h1>
            </div>
            <div class="w-full h-48 mb-16">
                <img class="w-full h-full object-cover" src="<?= $image_left; ?>"/>
            </div>
            <div class="flex">
                <div class="w-8/12">
                    <span class="border-b-2 border-white text-transparent">skyland</span>
                </div>
                <div class="flex flex-col justify-between figtree-light">
                    <p class="pt-1 h-40 text-ellipsis overflow-hidden">
                        <?= $paragraph_top;?>
                    </p>
                    <p class="h-40 text-ellipsis overflow-hidden">
                        <?= $paragraph_bottom;?>
                    </p>
                    <div class="flex justify-end mt-10 pe-4">
                        <div class="flex explore-rotate-left">
                            <p class="text-2xl font-normal text-end me-3">
                                Partners
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
    $section = "team_section_";
    
    $paragraph_top= rwmb_meta($prefix.$section.'paragraph_top'.$languages);
    $paragraph_bottom= rwmb_meta($prefix.$section.'paragraph_bottom'.$languages);
    $image_left= rwmb_meta($prefix.$section.'image_left'.$languages)['full_url'];
?>
<!-- Section team -->
<section class="w-screen full-page" id="about-us-team">
    <div class="flex h-8-12">
        <div class="w-6/12 flex">
            <div class="w-12/12 h-full home-investment-right-image">
                <img class="w-full h-full object-cover" src="<?= $image_left;?>"/>
            </div>
        </div>
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                    <p class="figtree-light">04</p>
                </div>
            </div>
        </div>
        <div class="w-5/12">
            <div class="w-full h-30 mb-16">
                <h1 class="font-medium text-6xl"><strong>Team</strong></h1>
            </div>
            <div class="flex">
                <div class="flex flex-col justify-between pe-12 figtree-light">
                    <p class="pt-1 h-40 text-ellipsis overflow-hidden">
                        <?= $paragraph_top;?>
                    </p>
                    <p class="mt-10 h-40 text-ellipsis overflow-hidden">
                        <?= $paragraph_bottom;?>
                    </p>
                    <div class="flex justify-end mt-10 pe-4">
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