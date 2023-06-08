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
            <div class="flex justify-between items-end w-full">
                <div class="flex items-end">
                    <div class="w-5/12">
                        <h1 class="figtree-light font-bold text-7xl mb-0"><strong><?= $title_right; ?></strong></h1>
                    </div>
                    <div class="w-5/12">
                        <p class="pt-1 text-ellipsis overflow-hidden">
                            <?= $paragraph; ?>
                        </p>
                    </div>
                </div>
                <div class="flex w-4/12 h-fit justify-end explore-rotate-down me-4">
                    <p class="text-2xl font-normal text-right">
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
    <div class="flex justify-center h-8-12 mb-12">
        <div class="w-11/12 flex ps-2">
            <?php
                for ($i = 0; $i < 2; $i++) {
            ?>
                <div class="w-6/12 team-person__container__image mb-16 <?= $i%2 == 0 ? 'me-2' : 'ms-2'?>">
                    <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
                    <div class="flex text-2xl mt-12">
                        <p>Name</p>
                        <p class="ms-32">Position</p>
                    </div>
                </div>
            <?php 
                }
            ?>
        </div>
    </div>
</section>

<!-- section partners header -->
<section class="w-screen full-page flex justify-center" id="team-partners">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full pt-24">
        <div class="flex mb-16">
            <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                <p class="figtree-light">02</p>
            </div>
            <h1 class="figtree-light font-bold text-6xl"><strong>Partners</strong></h1>
        </div>
    </div>
</section>

<!-- section partner list -->
<section class="w-screen full-page" id="team-partners-list">
    <div class="flex justify-center">
        <div class="flex w-10/12">
        <?php
                for ($i = 0; $i < 5; $i++) {
            ?>
                <div class="w-6/12 team-partners-list__image mb-16 me-">
                    <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
                </div>
            <?php 
                }
            ?>
        </div>
    </div>
</section>
<?php get_footer() ?>