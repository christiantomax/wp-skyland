<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>
<?php 
    $prefix = "contact_";
    $section = "Maps_section_";
    $languages = "";

    $title= rwmb_meta($prefix.$section.'title'.$languages);
    $paragraph= rwmb_meta($prefix.$section.'paragraph'.$languages);
    $lat= rwmb_meta($prefix.$section.'lat'.$languages);
    $lon= rwmb_meta($prefix.$section.'lon'.$languages);
?>
<!-- Investment section -->
<section class="w-screen full-page" id="investment-description">
    <div class="flex mb-36 pt-40">
        <div class="w-6/12 flex justify-start items-end">
            <div class="w-full h-full">
                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
            </div>
        </div>
        <div class="w-1/12 flex justify-end">
            <div class="flex">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                    <p class="figtree-light">01</p>
                </div>
            </div>
        </div>
        <div class="w-4/12 flex flex-col justify-between">
            <div class="w-full">
                <h1 class="figtree-light font-bold text-5xl mb-2">Our Base</h1>
                <h2 class="figtree-light font-bold text-7xl mb-16"><strong><?= $title; ?></strong></h2>
            </div>
            <div class="flex h-3/4">
                <div class="flex flex-col justify-between">
                    <div class="pt-1 min-h-content text-ellipsis overflow-hidden">
                        <?= $paragraph; ?>
                    </div>
                    <div class="flex mt-10 pe-4">
                        <div class="flex explore-rotate-left">
                            <p class="text-2xl font-normal text-end me-3">
                                Open in Maps
                            </p>
                            <div class="flex items-end pb-1 icon animate-pulse">
                                <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/12"></div>
    </div>
</section>

<!-- Reach us section -->
<section class="w-screen full-page" id="reach-us">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $assets_folder_path.'/img/banner-reach-us.png';?>)">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24">
            <div class="flex justify-between items-center w-full">
                <div class="flex w-12/12">
                    <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                        <p class="figtree-light">03</p>
                    </div>
                    <div class="w-4/12">
                        <h1 class="figtree-light font-bold text-6xl mb-12"><strong>Reach Us</strong></h1>
                    </div>
                    <div class="w-7/12">
                        <p class="pt-1 min-h-content text-ellipsis overflow-hidden">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <div class="flex justify-end w-full h-fit explore-rotate-left mt-12">
                            <p class="text-2xl font-normal text-right">
                                Explore more
                            </p>
                            <div class="pt-2 ms-3 icon animate-pulse">
                                <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>