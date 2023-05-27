<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>

<!-- Investment Section -->
<section class="w-screen full-page" id="properties-swiper">
    <div class="flex h-8-12 mb-36">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                    <p class="figtree-light text-white">02</p>
                </div>
            </div>
        </div>
        <div class="w-5/12">
            <div class="w-full h-30 mb-16">
                <div>
                    <p class="figtree-light font-bold text-white text-3xl">News</p>
                    <h1 class="figtree-light font-bold text-white text-6xl"><strong>Articles</strong></h1>
                </div>
            </div>
            <div class="w-full h-48 mb-16">
                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
            </div>
            <div class="flex">
                <div class="w-8/12">
                    <span class="border-b-2 border-white">skyland</span>
                </div>
                <div class="flex flex-col justify-between">
                    <p class="text-white pt-1 min-h-content text-ellipsis overflow-hidden">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        <br/>
                        <br/>
                        <br/>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <div class="flex justify-end mt-10 pe-4">
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
        <div class="w-6/12 flex justify-end items-end">
            <div class="w-8/12 home-investment-right-image">
                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
            </div>
        </div>
    </div>
</section>

<!-- Offered Section Properties -->
<section class="w-screen full-page flex justify-center" id="properties">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full pt-36">
        <div class="flex mb-16">
            <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                <p class="figtree-light text-white">02</p>
            </div>
            <div>
                <p class="figtree-light font-bold text-white text-3xl">Related</p>
                <h1 class="figtree-light font-bold text-white text-6xl"><strong>Articles</strong></h1>
            </div>
        </div>
    </div>
</section>

<section class="w-screen full-page mb-20" id="properties-swiper">
    <div>
        <!-- Swiper -->
        <div class="swiper home-properties w-full mb-12">
            <div class="swiper-wrapper h-full">
                <div class="swiper-slide bg-white flex justify-center items-center w-36 opacity-0">Slide 1</div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>House<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Office<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Apartment<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Commercial<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>House<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Office<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Apartment<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Commercial<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>House<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Office<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Apartment<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Commercial<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>House<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Office<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Apartment<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Commercial<h5/></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>