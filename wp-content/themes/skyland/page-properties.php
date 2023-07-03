<?php 
    get_header();
    require get_theme_file_path( 'config.php' );
?>

<?php 
    $prefix = "property_";
    $section = "foreword_section_";
    $languages = "";

    $title1= rwmb_meta($prefix.$section.'title1'.$languages);
    $title2= rwmb_meta($prefix.$section.'title2'.$languages);
    $paragraph_left= rwmb_meta($prefix.$section.'paragraph_left'.$languages);
    $paragraph_right= rwmb_meta($prefix.$section.'paragraph_right'.$languages);
    $image= rwmb_meta($prefix.$section.'image'.$languages)['full_url'];
?>
<!-- section Foreword -->
<section class="w-screen full-page" id="property">
    <div class="w-full h-full flex justify-center mt-40">
        <div class="bg-fixed w-11/12  flex bg-no-repeat bg-cover h-full">
            <div class="flex justify-between w-full ps-4 lg:ps-0">
                <div class="flex" >
                    <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:me-12">
                        <p class="figtree-light">01</p>
                    </div>
                    <div class="w-12/12 ps-1">
                        <h2 class="font-medium text-3xl lg:text-4xl mb-4"><?= $title1; ?></h2>
                        <h1 class="font-medium text-4xl lg:text-7xl mb-4 lg:mb-16"><strong><?= $title2; ?></strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="w-12/12 lg:ms-72" id="property-description">
        <div class="flex flex-col lg:flex-row foreword-description mb-6 lg:mb-16 figtree-light pl-20 pr-4">
            <p class="pt-1 my-3 lg:my-0 text-ellipsis overflow-hidden lg:w-4/12 lg:h-24">
                <?= $paragraph_left; ?>
            </p>
            <p class="pt-1 my-3 lg:my-0 text-ellipsis overflow-hidden lg:w-4/12 lg:h-24 lg:ms-16">
                <?= $paragraph_right; ?>
            </p>
        </div>
        
        <div class="lg:w-12/12 h-40 lg:h-72 flex foreword-image-container ps-20 lg:ps-0">
            <img class="w-full h-full object-cover bg-center" src="<?= $image; ?>"/>
        </div>
</section>


<!-- section project list header -->
<section class="w-screen full-page" id="project-list">
    <div class="w-full h-full flex justify-center">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-40">
            <div class="flex justify-between w-full ps-4 lg:ps-0">
                <div class="w-full flex">
                    <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:me-12">
                        <p class="figtree-light">02</p>
                    </div>
                    <div class="w-full flex flex-col lg:flex-row justify-between">
                        <p class="font-medium text-4xl lg:text-6xl">The Projects</p>
                        <nav class="w-5/12 flex items-center hidden">
                            <ul class="w-full flex justify-between text-2xl text-slate-300 figtree-light">
                                <li class="font-medium cursor-pointer"><strong>House</strong></li>
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
<section class="w-screen full-page flex flex-col items-center hidden" id="project-list">
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


<!-- section project list item -->
<section class="flex justify-center xl:hidden" id="project-list">
    <div class="w-full h-full ps-4 flex items-end flex-col justify-center figtree-light">
        <div class="w-full flex justify-center mt-8 ps-12">
            <div class="w-full relative">
                <button id="showButton" class="w-full text-white py-2 px-4 rounded flex justify-between">
                    Apartment
                </button>
                <ul id="dropdownOptions" class="w-full hidden absolute z-10 ps-6 top-10 bg-black bg-opacity-50 text-white rounded-lg p-2 backdrop-blur-sm">
                    <li class="option my-4">House</li>
                    <li class="option my-4">Office</li>
                    <li class="option my-4">Apartment</li>
                    <li class="option my-4">Commercial</li>
                </ul>
            </div>
        </div>
        <?php
            for ($i = 0; $i < 3; $i++) {
        ?>
            <div class="w-full flex justify-center mt-8">
                <article class="w-full grid grid-col grid-cols-5 ml-16 border-b-2 border-white">
                    <p class="col-span-1">2020</p>
                    <div class="col-span-4">
                        <div class="w-12/12 flex h-28 pe-6">
                            <img class="w-full h-full object-cover" src="https://picsum.photos/800/533"/>
                        </div>
                        <header class="mt-6 text-lg font-bold h-10/12 truncate pb-2">
                            <strong>Project Name</strong>
                        </header>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. An vero displicuit ea, quae tributa est animi virtutibus tanta praestantia? Dici enim nihil potest verius.
                        </p>
                        <div class="flex mt-6 mt-5 mb-6">
                            <div class="flex explore-rotate-left">
                                <p class="text-md font-normal text-end me-3">
                                    Explore more
                                </p>
                                <div class="flex items-end pb-1 icon animate-pulse">
                                    <img class="h-4 xl:h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        <?php
            }
        ?>
    </div>
</section>

<?php get_footer() ?>