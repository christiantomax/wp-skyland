<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>

<?php 
    $prefix = "investment_";
    $section = "foreword_section_";
    $languages = "";

    $title1= rwmb_meta($prefix.$section.'title1'.$languages);
    $title2= rwmb_meta($prefix.$section.'title2'.$languages);
    $paragraph= rwmb_meta($prefix.$section.'paragraph'.$languages);
    $quotes= rwmb_meta($prefix.$section.'quotes'.$languages);
    $image= rwmb_meta($prefix.$section.'image'.$languages)['full_url'];
?>
<!-- Investment Section -->
<section class="w-screen full-page" id="investment-description">
    <div class="flex flex-col lg:flex-row mb-10 lg:mb-36 mt-40">
        <div class="w-full lg:w-6/12 flex justify-start items-end">
            <div class="w-full h-full">
                <img class="w-full h-full object-cover" src="<?= $image; ?>"/>
            </div>
        </div>
        <div class="flex w-full lg:w-6/12 mt-8 lg:mt-0 ps-2 xl:ps-4 pe-4 lg:px-0">
            <div class="w-2/12 flex justify-end">
                <div class="flex">
                    <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-4 lg:me-12">
                        <p class="figtree-light">01</p>
                    </div>
                </div>
            </div>
            <div class="w-10/12 flex flex-col justify-between">
                <div class="w-full">
                    <h1 class="font-medium text-3xl lg:text-4xl mb-2"><?= $title1; ?></h1>
                    <h2 class="font-medium text-4xl lg:text-7xl mb-10 lg:mb-16"><strong><?= $title2; ?></strong></h2>
                    <p class="pt-1 min-h-content text-ellipsis overflow-hidden figtree-light">
                        <?= $paragraph; ?>
                    </p>
                </div>
                <div class="flex">
                    <div class="flex flex-col lg:justify-between">
                        <div class="flex mt-8 lg:mt-10 pe-4">
                            <div class="flex explore-rotate-down">
                                <p class="text-md lg:text-2xl font-normal me-3 figtree-light">
                                    Scroll
                                </p>
                                <div class="flex items-end pb-1 icon animate-pulse rotate-90">
                                    <img class="h-3 lg:h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section investment quote -->
<section class="w-screen full-page" id="investment-quote">
    <div class="flex h-8-12 mb-36 px-8">
        <div class="w-full lg:w-10/12">
            <div class="flex">
                <div class="w-4/12 flex items-start lg:justify-end pe-4 lg:pe-20">
                    <p class="pt-2 border-b-2 border-white text-transparent">sky</p>
                </div>
                <div class="flex flex-col justify-between">
                    <p class="pt-5 lg:pt-1 min-h-content text-ellipsis overflow-hidden text-2xl lg:text-5xl leading-normal">
                        <?= $quotes; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section investment opportunity -->
<section class="w-screen full-page m-0" id="properties-swiper">
    <div class="flex h-8-12 mb-36 ps-6 lg:ps-16">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:me-12">
                    <p class="figtree-light">02</p>
                </div>
            </div>
        </div>
        <div class="w-12/12">
            <div class="w-full h-30 mb-0 lg:mb-16">
                <h1 class="-bold text-4xl lg:text-6xl"><strong>Investment</strong></h1>
            </div>
            <div class="flex">
                <div class="flex flex-col justify-between figtree-light">
                    <?php
                        for ($i = 0; $i < 3; $i++) {
                    ?>
                    <article class="border-b-2 border-white" id="investment-opportunity">
                        <p class="w-full lg:w-6/12 pt-1 min-h-content text-ellipsis overflow-hidden pb-12 <?= $i == 0 ? 'mt-4' : 'mt-12';?> figtree-light pe-8 lg:pe-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </article>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section reach us -->
<section class="w-screen full-page mb-40" id="reach-us">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $assets_folder_path.'/img/banner-reach-us.png';?>)">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full py-24">
            <div class="flex flex-col xl:flex-row justify-end items-start w-full">
                <div class="flex w-full">
                    <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-4 xl:me-12">
                        <p class="figtree-light">03</p>
                    </div>
                    <div class="w-full xl:w-6/12">
                        <h1 class="font-medium text-4xl xl:text-6xl mb-12"><strong>Reach Us</strong></h1>
                    </div>
                </div>
                <div class="figtree-light w-full" id="form">
                    <?= 
                        do_shortcode('[contact-form-7 id="174" title="Reach Us Form"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>