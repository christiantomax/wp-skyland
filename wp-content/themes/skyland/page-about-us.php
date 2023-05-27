<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>


<!-- section Foreword -->
<section class="w-screen full-page" id="about-us-beginning">
    <div class="w-full h-full flex justify-center">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24 text-white">
            <div class="flex justify-between w-full">
                <div class="flex" >
                    <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                        <p class="figtree-light">01</p>
                    </div>
                    <div class="w-12/12">
                        <h2 class="figtree-light font-bold text-white text-4xl mb-4">The Beginning</h2>
                        <h1 class="figtree-light font-bold text-white text-7xl mb-16"><strong>Where the password_get_info leads.</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="w-12/12 ms-72 mb-24" id="property-description">
        <div class="flex foreword-description mb-16">
            <p class="text-white pt-1 text-ellipsis overflow-hidden w-4/12 h-24">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, 
            </p>
            <p class="text-white pt-1 text-ellipsis overflow-hidden w-4/12 h-24 ms-16">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, 
            </p>
        </div>
        
        <div class="w-12/12 flex foreword-image-container mb-24">
            <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
        </div>

        <div class="flex w-11/12">
            <div class="w-2/12 flex items-start pe-20">
                <p class="border-b-2 border-white pt-2">skyland</p>
            </div>
            <div class="flex flex-col justify-between">
                <p class="text-white pt-1 text-ellipsis overflow-hidden text-5xl leading-normal">
                    Creating high-quality, sustainable, and<br/>
                    innovative properties that enhance the<br/>
                    communities.
                </p>
                
                <div class="flex justify-end pb-4 project-description-<?= $j; ?> about-us-description">
                    <div class="flex explore-rotate-left">
                        <p class="text-white text-2xl font-normal text-end me-3">
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
                <p class="figtree-light text-white">02</p>
            </div>
            <p class="figtree-light font-bold text-white text-6xl">Mission</p>
        </div>
    </div>
</section>

<section class="w-screen full-page mb-44" id="properties-swiper">
    <div>
        <!-- Swiper -->
        <div class="swiper home-properties w-full mb-12">
            <div class="swiper-wrapper h-full">
                <div class="swiper-slide bg-white flex justify-center items-center w-36 opacity-0">Slide 1</div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
                <div class="swiper-slide bg-gray-700 text-white text-2xl flex items-end w-3/12 px-10 py-10"><h5>Contribute to the economic growth and vitality of Sydney’s Eastern Suburbs.<h5/></div>
            </div>
        </div>
    </div>

    <div class="flex justify-end mr-16">
        <div class="flex explore-rotate-left">
            <p class="text-white text-2xl font-normal text-end me-3">
                Explore more
            </p>
            <div class="flex items-end pb-1 icon animate-pulse">
                <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
            </div>
        </div>
    </div>
</section>

<!-- section background story -->
<section class="w-screen full-page" id="about-us-background-story">
    <div class="flex h-8-12 mb-52">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                    <p class="figtree-light text-white">03</p>
                </div>
            </div>
        </div>
        <div class="w-5/12">
            <div class="w-full h-30 mb-16">
                <h1 class="figtree-light font-bold text-white text-6xl"><strong>Background Story</strong></h1>
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
                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
            </div>
        </div>
    </div>
</section>


<!-- Section team -->
<section class="w-screen full-page" id="about-us-team">
    <div class="flex h-8-12 mb-36">
        <div class="w-6/12 flex">
            <div class="w-12/12 h-full home-investment-right-image">
                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
            </div>
        </div>
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                    <p class="figtree-light text-white">04</p>
                </div>
            </div>
        </div>
        <div class="w-5/12">
            <div class="w-full h-30 mb-16">
                <h1 class="figtree-light font-bold text-white text-6xl"><strong>Team</strong></h1>
            </div>
            <div class="w-full h-48 mb-16">
                <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
            </div>
            <div class="flex">
                <div class="w-8/12">
                    <span class="border-b-2 border-white">skyland</span>
                </div>
                <div class="flex flex-col justify-between pe-12">
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
    </div>
</section>

<?php get_footer() ?>