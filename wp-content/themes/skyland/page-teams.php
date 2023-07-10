<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>

<?php 
    $prefix = "team_";
    $section = "section_";
    $languages = "";

    $title_right= rwmb_meta($prefix.$section.'title_right'.$languages);
    $paragraph= rwmb_meta($prefix.$section.'paragraph'.$languages);
?>
<!-- story section -->
<section class="w-screen mb-20 mt-20" id="team">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24">
            <div class="flex flex-col lg:flex-row justify-between items-end w-full lg:ps-0">
                <div class="flex flex-col lg:flex-row items-end">
                    <div class="w-full lg:w-5/12 mb-10 lg:mb-0">
                        <h1 class="font-medium text-7xl mb-0"><strong><?= $title_right; ?></strong></h1>
                    </div>
                    <div class="w-full lg:w-5/12">
                        <p class="pt-1 text-ellipsis overflow-hidden figtree-light ">
                            <?= $paragraph; ?>
                        </p>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 flex h-fit lg:justify-end explore-rotate-down me-4 ps-4 lg:ps-0 mt-5 lg:mt-0">
                    <p class="text-lg lg:text-2xl font-normal text-right figtree-light ">
                        Scroll
                    </p>
                    <div class="pt-2 ms-3 icon animate-pulse rotate-90">
                        <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section team -->
<section class="w-screen full-page" id="team-person">
    <div class="grid grid-cols-2 h-8-12 mb-12 figtree-light ps-4 pe-4 lg:pe-16 lg:ps-16">
        <?php
            for ($i = 0; $i < 2; $i++) {
        ?>
            <div class="w-full team-person__container__image mb-16 <?= $i%2 == 0 ? 'me-4' : 'ms-4'?>">
                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
                <div class="flex flex-col lg:flex-row text-lg mt-12">
                    <p>Name</p>
                    <p class="lg:ms-32">Position</p>
                </div>
            </div>
        <?php 
            }
        ?>
    </div>
</section>

<!-- section partners header -->
<section class="w-screen full-page flex justify-center" id="team-partners">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full pt-24">
        <div class="flex mb-16">
            <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-4 xl:me-12">
                <p class="figtree-light">02</p>
            </div>
            <h1 class="font-medium text-4xl lg:text-7xl"><strong>Partners</strong></h1>
        </div>
    </div>
</section>

<!-- section partner list -->
<section class="w-screen full-page" id="team-partners-list">
    <div class="grid grid-cols-3 lg:grid-cols-5 gap-4 justify-center lg:me-20 lg:ms-16">
        <?php
            for ($i = 0; $i < 5; $i++) {
        ?>
            <div class="w-full mx-4 team-partners-list__image mb-16">
                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
            </div>
        <?php 
            }
        ?>
    </div>
</section>
<?php get_footer() ?>