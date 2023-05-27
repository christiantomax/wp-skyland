<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>

<!-- Investment Section -->
<section class="w-screen full-page" id="investment-description">
    <div class="flex mb-36">
        <div class="w-6/12 flex justify-start items-end">
            <div class="w-full h-full">
                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
            </div>
        </div>
        <div class="w-1/12 flex justify-end">
            <div class="flex">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                    <p class="figtree-light text-white">01</p>
                </div>
            </div>
        </div>
        <div class="w-4/12 flex flex-col justify-between">
            <div class="w-full">
                <h1 class="figtree-light font-bold text-white text-5xl mb-8">Foreword</h1>
                <h2 class="figtree-light font-bold text-white text-7xl mb-16"><strong>The Wise.</strong></h2>
            </div>
            <div class="flex">
                <div class="flex flex-col justify-between">
                    <p class="text-white pt-1 min-h-content text-ellipsis overflow-hidden">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <div class="flex mt-10 pe-4">
                        <div class="flex explore-rotate-down">
                            <p class="text-white text-2xl font-normal me-3">
                                Scroll
                            </p>
                            <div class="flex items-end pb-1 icon animate-pulse rotate-90">
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

<!-- section investment quote -->
<section class="w-screen full-page" id="investment-quote">
    <div class="flex h-8-12 mb-36">
        <div class="w-10/12">
            <div class="flex">
                <div class="w-4/12 flex items-start justify-end pe-20">
                    <p class="border-b-2 border-white pt-2">skyland</p>
                </div>
                <div class="flex flex-col justify-between">
                    <p class="text-white pt-1 min-h-content text-ellipsis overflow-hidden text-5xl leading-normal">
                        With a good perspective on history,<br/>
                        we can have a better understanding of the past and present, and thus<br/>
                        a clear vision of the future.<br/>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section investment opportunity -->
<section class="w-screen full-page m-0" id="properties-swiper">
    <div class="flex h-8-12 mb-36 ps-16">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                    <p class="figtree-light text-white">02</p>
                </div>
            </div>
        </div>
        <div class="w-12/12">
            <div class="w-full h-30 mb-16">
                <h1 class="figtree-light font-bold text-white text-6xl"><strong>Investment</strong></h1>
            </div>
            <div class="flex">
                <div class="flex flex-col justify-between">
                    <?php
                        for ($i = 0; $i < 3; $i++) {
                    ?>
                    <article class="border-b-2 border-white" id="investment-opportunity">
                        <p class="w-6/12 text-white pt-1 min-h-content text-ellipsis overflow-hidden pb-12 mt-12">
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

<!-- story section -->
<section class="w-screen full-page mb-40" id="reach-us">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $assets_folder_path.'/img/banner-reach-us.png';?>)">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24 text-white">
            <div class="flex justify-between items-center w-full">
                <div class="flex w-12/12">
                    <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                        <p class="figtree-light">03</p>
                    </div>
                    <div class="w-4/12">
                        <h1 class="figtree-light font-bold text-white text-6xl mb-12"><strong>Reach Us</strong></h1>
                    </div>
                    <div class="w-7/12">
                        <p class="text-white pt-1 min-h-content text-ellipsis overflow-hidden">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <div class="flex justify-end w-full h-fit explore-rotate-left mt-12">
                            <p class="text-white text-2xl font-normal text-right">
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