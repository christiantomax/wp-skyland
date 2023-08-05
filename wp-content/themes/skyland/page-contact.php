<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>
<?php 
    $prefix = "contact_";

    $section = "Maps_section_";

    $title= rwmb_meta($prefix.$section.'title'.$languages);
    $paragraph= rwmb_meta($prefix.$section.'paragraph'.$languages);
    $lat= rwmb_meta($prefix.$section.'lat'.$languages);
    $lon= rwmb_meta($prefix.$section.'lon'.$languages);

    $reach_us= rwmb_meta($prefix.$section.'reach_us'.$languages);

    $section = "section_";
    $languages = "";
?>
<!-- Contact section -->
<section class="w-screen full-page fade-in-element" id="contact-description">
    <div class="flex flex-col lg:flex-row mb-36 pt-40">
        <div class="w-full lg:w-6/12 flex justify-start items-end">
            <div class="w-full h-full">
                <div class="w-full h-64 lg:h-full object-cover grayscale">
                    <iframe 
                        title="Skyland maps"
                        id="iframe-skyland-maps"
                        width="100%"
                        height="100%"
                        src='https://maps.google.com/maps?q=<?= $lat;?>,<?= $lon;?>&hl=es;&output=embed'
                    >
                    </iframe>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-5/12 flex lg:ps-20 mt-10 lg:mt-0">
            <div class="w-2/12 lg:w-1/12 flex justify-end">
                <div class="flex">
                    <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-4 lg:me-12">
                        <p class="figtree-light">01</p>
                    </div>
                </div>
            </div>
            <div class="w-10/12 lg:w-8/12 flex flex-col justify-between">
                <div class="w-full">
                    <h1 class="font-medium text-3xl lg:text-4xl mb-2">Contact</h1>
                    <h2 class="font-medium text-4xl lg:text-7xl mb-10 lg:mb-16"><strong><?= $title; ?></strong></h2>
                </div>
                <div class="flex h-3/4">
                    <div class="flex flex-col justify-between figtree-light ">
                        <div class="pt-1 min-h-content text-ellipsis overflow-hidden">
                            <?= $paragraph; ?>
                        </div>
                        <div class="flex mt-10 lg:mt-24 pe-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/12"></div>
    </div>
</section>


<!-- section reach us -->
<section class="w-screen full-page mt-20" id="reach-us">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $assets_folder_path.'/img/banner-reach-us.png';?>)">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full py-24">
            <div class="flex flex-col xl:flex-row justify-end items-start w-full">
                <div class="flex w-full lg:w-5/12 fade-in-element">
                    <div class="border w-9 h-9 p-1 md:p-0 md:w-10 md:h-10 rounded-full border-white flex justify-center items-center lg:me-12">
                        <p class="figtree-light text-sm">02</p>
                    </div>
                    <div class="w-full xl:w-6/12">
                        <h1 class="font-medium text-3xl lg:text-4xl mb-12 ms-4 md:ms-0"><strong>Reach Us</strong></h1>
                    </div>
                </div>
                <div class="figtree-light w-full lg:w-7/12 lg:pe-28 fade-in-element" id="form">
                    <?= 
                        do_shortcode('[contact-form-7 id="'.$reach_us.'" title="Reach Us Form"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>