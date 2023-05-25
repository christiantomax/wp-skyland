<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>

<!-- section banner of detail property -->
<section class="w-screen h-screen full-page mb-10" id="property-banner">
    <div class="bg-fixed bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $assets_folder_path.'/img/banner-property-detail.png';?>)">
        <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full flex flex-col justify-end py-32">
            <h1 class="figtree-light text-white text-6xl">The Private</h1>
            <h2 class="figtree-light text-white text-8xl mt-4">One Corner in The East</h2>
            <p class="figtree-light font-thin text-white text-3xl mt-12">3 Eastboure Road <span class="ms-60">2020</span></p>
        </div>
    </div>
</section>

<!-- section description of detail property -->
<section class="w-12/12 ms-72 flex justify-center" id="property-description">
        <div class="w-11/12 flex justify-end foreword-description mb-16 pe-20">
            <p class="text-white pt-1 text-ellipsis overflow-hidden w-6/12 h-24">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, 
            </p>
            <p class="text-white pt-1 text-ellipsis overflow-hidden w-6/12 h-24 ms-16">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, 
            </p>
        </div>
</section>

<!-- section galleries detail property -->
<section class="w-screen full-page text-white mb-36" id="property-galleries">
    <div class="flex justify-center">
        <div class="w-11/12">
            <div class="w-full flex justify-center pb-2 mb-6">
                <?php
                    for ($i = 0; $i < 5; $i++) {
                        ?>
                            <div class="expander h-fit">
                                <div class="h-full">
                                    <div class="w-12/12 flex h-80">
                                        <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <div class="flex">
                <div class="w-5/12">
                    <h2 class="text-3xl">3 Eastboure Road</h2>
                </div>
                <div class="flex justify-between">
                    <?php
                        for ($i = 0; $i < 5; $i++) {
                            ?>
                                
                            <p class="w-8/12 pt-1 min-h-content-description text-ellipsis overflow-hidden description-gallery description-gallery-<?= $i; ?>">
                                <?= $i+1; ?>. Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                <br/>
                                <br/>
                                <br/>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                            <?php
                        }
                    ?>
                    <div class="w-4/12 flex justify-end">
                        <div class="w-10 h-10 flex justify-center items-center me-16 font-bold">
                            <p class="figtree-light hover:cursor-pointer hover:opacity-75" onclick="changeExpander(-1)">
                                <svg id="SvgjsSvg1011" width="30" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                    <defs id="SvgjsDefs1012"></defs>
                                    <g id="SvgjsG1013">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                            </p>
                        </div>

                        <div class="w-10 h-10 flex justify-center items-center rotate-180 font-bold">
                            <p class="figtree-light hover:cursor-pointer hover:opacity-75" onclick="changeExpander(1)">
                                <svg id="SvgjsSvg1011" width="30" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                    <defs id="SvgjsDefs1012"></defs>
                                    <g id="SvgjsG1013">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- story section -->
<section class="w-screen full-page mb-40" id="home-story">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $assets_folder_path.'/img/banner-home-story.png';?>)">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24 text-white">
            <div class="flex justify-between w-full">
                <div class="flex" >
                    <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12 rotate-180 font-bold hover:cursor-pointer">
                        <p class="figtree-light animate-pulse">
                            <svg id="SvgjsSvg1011" width="18" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                <defs id="SvgjsDefs1012"></defs>
                                <g id="SvgjsG1013">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                        </p>
                    </div>
                    <div class="w-12/12">
                        <p class="figtree-light font-bold text-white text-2xl mb-12 pt-2">Up Next</p>
                        <p class="figtree-light font-bold text-white text-6xl mb-12"><strong>Villa Bellevue Hill</strong></p>
                    </div>
                </div>
                <div class="flex items-end w-2/12 pb-16">
                    <div class="flex explore-rotate-left">
                        <p class="text-white text-2xl font-normal text-end me-3">
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
</section>

<?php get_footer() ?>