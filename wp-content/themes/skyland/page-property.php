<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>

<!-- section Foreword -->
<section class="w-screen full-page" id="property">
    <div class="w-full h-full flex justify-center">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24 text-white">
            <div class="flex justify-between w-full">
                <div class="flex" >
                    <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                        <p class="figtree-light">01</p>
                    </div>
                    <div class="w-12/12">
                        <h2 class="figtree-light font-bold text-white text-4xl mb-4">Foreword</h2>
                        <h1 class="figtree-light font-bold text-white text-7xl mb-16"><strong>Where all things happens.</strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="w-12/12 ms-72" id="property-description">
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
        
        <div class="w-12/12 flex foreword-image-container">
            <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
        </div>
</section>


<!-- section project list header -->
<section class="w-screen full-page" id="project-list">
    <div class="w-full h-full flex justify-center">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-40 text-white">
            <div class="flex justify-between w-full">
                <div class="w-full flex">
                    <div class="border w-10 h-10 rounded-full border-white flex justify-center items-center me-12">
                        <p class="figtree-light">02</p>
                    </div>
                    <div class="w-full flex justify-between mb-20">
                        <p class="figtree-light font-bold text-white text-6xl">The Projects</p>
                        <nav class="w-5/12 flex items-center">
                            <ul class="w-full flex justify-between text-2xl text-slate-300">
                                <li class="font-bold text-white cursor-pointer"><strong>House</strong></li>
                                <li class="hover:text-white cursor-pointer">Office</li>
                                <li class="hover:text-white cursor-pointer">Apartment</li>
                                <li class="hover:text-white cursor-pointer">Commercial</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- section project list item -->
<section class="w-screen full-page flex flex-col items-center text-white pb-20" id="project-list">
        <div class="w-10/12 h-full flex flex-col justify-center pb-2 ms-15 mt-16">
    <?php
        for ($i = 0; $i < 3; $i++) {
    ?>
        <div class="w-full flex border-b-4 border-white me-16 pb-8 mb-8">
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
                                    <p class="text-white text-2xl font-normal text-end me-3">
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
    <?php 
        }
    ?>
    </div>
</section>

<?php get_footer() ?>