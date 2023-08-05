<?php 
    get_header();
    require get_theme_file_path( 'config.php' );

    
    function get_posts_taxonomy($post_type, $post_id) {
        $args = array(
            'post_type'      => $post_type,
            'posts_per_page' => -1,
            'post__not_in'   => array($post_id),
            'post_status'    => 'publish',
        );
        
        $query = new WP_Query($args);
        return $query->posts;
    }
    
    $list_all_post = get_posts_taxonomy("opportunities", "");
?>

<?php 
    $prefix = "investment_";
    $section = "foreword_section_";
    $languages = "";

    $title1= rwmb_meta($prefix.$section.'title1'.$languages);
    $title2= rwmb_meta($prefix.$section.'title2'.$languages);
    $paragraph= rwmb_meta($prefix.$section.'paragraph'.$languages);
    $quotes= rwmb_meta($prefix.$section.'quotes'.$languages);
    $image= rwmb_meta($prefix.$section.'image'.$languages)['full_url'];
?>
<!-- Investment Section -->
<section class="w-screen full-page" id="investment-description">
    <div class="flex flex-col lg:flex-row mb-10 lg:mb-36 mt-40">
        <div class="w-full lg:w-6/12 flex justify-start items-end">
            <div class="w-full h-full">
                <img class="w-full h-full object-cover" src="<?= $image; ?>"/>
            </div>
        </div>
        <div class="flex w-full lg:w-6/12 mt-8 lg:mt-0 ps-2 xl:ps-4 pe-4 lg:px-0">
            <div class="w-2/12 flex justify-end">
                <div class="flex">
                    <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-4 lg:me-12">
                        <p class="figtree-light">01</p>
                    </div>
                </div>
            </div>
            <div class="w-10/12 flex flex-col justify-between">
                <div class="w-full">
                    <h1 class="font-medium text-3xl lg:text-4xl mb-2"><?= $title1; ?></h1>
                    <h2 class="font-medium text-4xl lg:text-7xl mb-10 lg:mb-16"><strong><?= $title2; ?></strong></h2>
                    <p class="pt-1 leading-8 min-h-content text-ellipsis overflow-hidden figtree-light lg:me-28">
                        <?= $paragraph; ?>
                    </p>
                </div>
                <div class="flex">
                    <div class="flex flex-col lg:justify-between">
                        <div class="flex mt-8 lg:mt-10 pe-4">
                            <a href="#properties-swiper">
                                <div class="flex explore-rotate-down">
                                    <p class="text-lg lg:text-xl font-normal me-3 figtree-light">
                                        Scroll
                                    </p>
                                    <div class="flex items-end pb-1 icon animate-pulse rotate-90">
                                        <img class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section investment quote -->
<section class="w-screen full-page" id="investment-quote">
    <div class="flex h-8-12 px-8">
        <div class="w-full lg:w-10/12">
            <div class="flex">
                <div class="w-4/12 flex items-start lg:justify-end pe-4 lg:pe-24">
                    <p class="pt-2 border-b-2 border-white text-transparent hidden lg:block">skyla</p>
                    <p class="pt-2 border-b-2 border-white text-transparent lg:hidden">sky</p>
                </div>
                <div class="flex flex-col justify-between">
                    <p id="quotes" class="pt-5 lg:pt-1 min-h-content text-2xl lg:text-5xl">
                        <?= $quotes; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    $prefix = "news_";
    $section = "latest_news_section_";
    $languages = "";

    $title= rwmb_meta($prefix.$section.'title'.$languages);
?>
<!-- section investment opportunity -->
<section class="w-screen full-page m-0" id="properties-swiper">
    <div class="flex h-8-12 mb-36 pt-36 ps-6 lg:ps-16">
        <div class="w-1/12 flex justify-end">
            <div class="flex mb-14">
                <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:me-12">
                    <p class="figtree-light">02</p>
                </div>
            </div>
        </div>
        <div class="w-12/12">
            <div class="w-full h-30 mb-0 lg:mb-16">
                <h1 class="-bold text-4xl lg:text-6xl"><strong>Investment</strong></h1>
            </div>
            <div class="flex">
                <div class="flex flex-col justify-between figtree-light">
                    <?php
                        $limit_posts = count($list_all_post);
                        $prefix = 'investment_opportunities';
                        for ($i = 0; $i < $limit_posts; $i++) {
                            $post_id = $list_all_post[$i]->ID;
                            $paragraph = get_post_meta($post_id, $prefix . '_paragraph' )[0];
    
                            //get image banner project detail
                            $image = get_post_meta($post_id, $prefix . '_image' )[0];
                            $image = wp_get_attachment_image_src($image, 'full')[0];
                    ?>
                    <article class="border-b-2 border-white investment-opportunity">
                        <div class="w-full h-56 lg:hidden <?= $i == 0 ? 'mt-5' : 'mt-8'; ?>">
                            <img class="w-full h-full object-cover bg-center" src="<?= $image; ?>"/>
                        </div>
                        <p class="w-full lg:w-6/12 pt-1 min-h-content text-ellipsis overflow-hidden mb-6 lg:mb-12 cursor-pointer leading-8  <?= $i == 0 ? 'mt-4' : 'mt-12';?> figtree-light pe-8 lg:pe-0"
                        id="investment-paragraph-<?= $i; ?>">
                            <?= $paragraph;?>
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

<?php
    $prefix = "contact_";
    $section = "section_";
    $languages = "";

    $page_slug = 'contact'; // Replace with the actual slug of your page
    $page = get_page_by_path($page_slug);
    if ($page) {
        $post_id = $page->ID;
        // Now you can use the $post_id to retrieve the Metabox data
        $reach_us = get_post_meta($post_id, $prefix.$section.'reach_us'.$languages, true);
    }
?>
<!-- section reach us -->
<section class="w-screen full-page mb-40" id="reach-us">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $assets_folder_path.'/img/banner-reach-us.png';?>)">
        <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full py-24">
            <div class="flex flex-col xl:flex-row justify-end items-start w-full">
                <div class="flex w-full">
                    <div class="border w-9 h-9 p-1 md:p-0 md:w-10 md:h-10 rounded-full border-white flex justify-center items-center lg:me-12">
                        <p class="figtree-light text-sm">02</p>
                    </div>
                    <div class="w-full xl:w-6/12">
                        <h1 class="font-medium text-3xl lg:text-4xl mb-12 ms-4 md:ms-0"><strong>Reach Us</strong></h1>
                    </div>
                </div>
                <div class="figtree-light w-full" id="form">
                    <?= 
                        do_shortcode('[contact-form-7 id="'.$reach_us.'" title="Reach Us Form"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // moving object onhover
    <?php
        $prefix = 'investment_opportunities';
        for ($i = 0; $i < $limit_posts; $i++) {
            $post_id = $list_all_post[$i]->ID;

            //get image banner project detail
            $image = get_post_meta($post_id, $prefix . '_image' )[0];
            $image = wp_get_attachment_image_src($image, 'full')[0];
    ?>

        $("#investment-paragraph-<?= $i ?>").mouseover(function() {
            $("#moving-object").css("background" , 'url("<?= $image; ?>") no-repeat 100%')
        })
    <?php
        }
    ?>

    let is_moving_object = false;
    let circle = document.getElementById('moving-object');
    const onMouseMove = (e) =>{
        if(is_moving_object){
            circle.style.left = (e.pageX + 15) + 'px'
            circle.style.top = (e.pageY - 75) + 'px'
        }
    }
    document.addEventListener('mousemove', onMouseMove)

    $(".investment-opportunity > p")
    .mouseover(function() {
        document.getElementById("moving-object").style.visibility = "visible"
        is_moving_object = true
    })
    .mouseout(function() {
        document.getElementById("moving-object").style.visibility = "hidden"
        is_moving_object = false
    })
</script>

<?php get_footer() ?>