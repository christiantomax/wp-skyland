<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>

<?php 
    $prefix = "news_";
    $section = "latest_news_section_";
    $languages = "";

    $title= rwmb_meta($prefix.$section.'title'.$languages);
?>
<!-- section news list -->
<section class="w-screen full-page" id="project-list">
    <div class="w-full h-full flex justify-center">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-40">
            <div class="flex justify-between w-full">
                <div class="w-full flex">
                    <div class="border w-12 h-10 xl:w-10 xl:h-10 rounded-full border-white flex justify-center items-center me-4 xl:me-12 rotate-180 font-medium hover:cursor-pointer">
                        <p class="figtree-light animate-pulse">
                            <svg id="SvgjsSvg1011" width="18" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                <defs id="SvgjsDefs1012"></defs>
                                <g id="SvgjsG1013">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                        </p>
                    </div>
                    <div class="w-full flex flex-col justify-between">
                        <h2 class="font-medium text-3xl xl:text-4xl mb-4">Latest News</h2>
                        <h1 class="font-medium text-4xl xl:text-7xl mb-8"><strong><?= $title; ?></strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section news list item -->
<section class="w-screen full-page flex-col items-center hidden xl:flex" id="news-list">
        <div class="w-11/12 h-full flex items-end flex-col justify-center pb-2 ms-15 figtree-light">
    <?php
        for ($i = 0; $i < 3; $i++) {
    ?>
        <div class="w-full flex justify-end ms-24 mb-8">
            <div class="flex justify-end border-b-4 border-white pb-8 project-list__container__project">
            <?php
                for ($j = $i * 3; $j < $i * 3 + 3; $j++) {
                    ?>
                    <div class="expander h-90">
                        <article class="h-full">
                            <div class="w-12/12 flex h-80">
                                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
                            </div>
                            <header class="mt-6 text-3xl h-10/12 truncate pb-2">
                                <time class="text-2xl me-8">2020 </time>Project Name Project Name
                            </header>
                            <div class="text-ellipsis overflow-hidden project-description-<?= $j; ?> project-description">
                                <p class="property-project-description pb-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                            </div>
                            <div class="flex mt-6 pb-4 project-description-<?= $j; ?> project-description">
                                <div class="flex explore-rotate-left">
                                    <p class="text-2xl font-normal text-end me-3">
                                        Explore more
                                    </p>
                                    <div class="flex items-end pb-1 icon animate-pulse">
                                        <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                }
            ?>
            </div>
        </div>
    <?php 
        }
    ?>
    </div>
</section>


<!-- section news list item mobile -->
<section class="w-screen full-page flex flex-col items-center" id="news-list">
    <div class="w-11/12 h-full flex items-end flex-col justify-center pb-2 ms-15 figtree-light">
        <div class="w-full flex justify-end ms-24 mb-8">
            <div class="flex justify-end border-b-4 border-white pb-8 project-list__container__project">
                <div class="w-full h-90">
                    <article class="h-full mt-4">
                        <div class="w-12/12 flex h-52">
                            <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
                        </div>
                        <header class="mt-6 text-xl pb-2 flex">
                            <h1 class="text-2xl font-bold">Project Name Project Name</h1>
                            <time class="text-lg ms-4">2020 </time>
                        </header>
                        <div class="text-ellipsis overflow-hidden">
                            <p class="pb-4 text-md mt-4">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                            </p>
                        </div>
                        <div class="flex mt-6 pb-4">
                            <div class="flex explore-rotate-left">
                                <p class="text-md font-normal text-end me-3">
                                    Explore more
                                </p>
                                <div class="flex items-end pb-1 icon animate-pulse">
                                    <img class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>