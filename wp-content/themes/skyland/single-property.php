<?php 
    get_header();
    require get_theme_file_path( 'config.php' );

    if (have_posts()) {
        function get_posts_taxonomy($terms, $post_type) {
            $args = array(
                'post_type'      => $post_type,
                'posts_per_page' => -1,
                'post_status'    => 'publish',
            );
            
            $query = new WP_Query($args);
            return $query->posts;
        }

        $prefix = 'properties_';

        the_post();
        $post_id = get_the_ID();

        $title_1 = get_post_meta($post_id, $prefix . 'title_1' )[0];
        $title_2 = get_post_meta($post_id, $prefix . 'title_2' )[0];
        $address = get_post_meta($post_id, $prefix . 'address' )[0];
        $year = get_post_meta($post_id, $prefix . 'year' )[0];
        $paragraph_left = get_post_meta($post_id, $prefix . 'paragraph_left' )[0];
        $paragraph_right = get_post_meta($post_id, $prefix . 'paragraph_right' )[0];

        //get all fieldset fieldset_text meta box
        $fieldset_text = get_post_meta($post_id, $prefix . 'fieldset_text' )[0];

        //get image banner project detail
        $image_banner = get_post_meta($post_id, $prefix . 'image_banner' )[0];
        $image_banner = wp_get_attachment_image_src($image_banner, 'full')[0];

        //get all fieldset fieldset_text_image meta box
        $fieldset_text_image = get_post_meta($post_id, $prefix . 'fieldset_text_image' );
        $temp = [];
        foreach($fieldset_text_image as $fieldset_text_image_temp){
            array_push($temp, wp_get_attachment_image_src($fieldset_text_image_temp, 'full')[0]);
        }
        $fieldset_text_image = $temp;
        
        // ==================================================================
        $next_id = null;
        
        $post_type = get_post_type();
        $category_obj = get_the_category($post_id);
        
        $taxonomy = 'properties-category';
        $terms = get_the_terms($post_id, $taxonomy);
        $terms = $terms[0]->name;
        
        //check if the current post have next post and set next id
        $list_all_post = get_posts_taxonomy($terms, $post_type);
        for ($i = 0; $i < count($list_all_post); $i++) {
            if($list_all_post[$i]->ID == $post_id){
                if($i == count($list_all_post)-1){
                    $next_id = $list_all_post[0]->ID;
                }else{
                    $next_id = $list_all_post[$i+1]->ID;
                }
                break;
            }
        }

        //get meta box next data
        $title_1_next = get_post_meta($next_id, $prefix . 'title_1' )[0];
        $title_2_next = get_post_meta($next_id, $prefix . 'title_2' )[0];
        $image_banner_next = get_post_meta($next_id, $prefix . 'image_banner' )[0];
        $image_banner_next = wp_get_attachment_image_src($image_banner_next, 'full')[0];
        $next_slug = get_permalink($next_id);
    } else {
        
    }
?>

<style>
#single_project_headerBG, #single_project_footerBG{ 		
    background-attachment: scroll; 	
} 
</style>
<!-- section banner of detail property -->
<section class="relative w-screen h-screen full-page mb-10 z-10" id="property-banner">
    <div id="single_project_headerBG" class="bg-fixed bg-no-repeat bg-center bg-cover w-full h-full flex justify-center"
         style="background-image: url(<?= $image_banner; ?>)">
        <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full flex flex-col justify-end py-32">
            <h1 class="text-3xl xl:text-6xl fade-in-element z-10"><?= $title_1; ?></h1>
            <h2 class="text-4xl xl:text-8xl mt-4 fade-in-element z-10"><?= $title_2; ?></h2>
            <p class="figtree-light font-thin text-lg xl:text-3xl mt-12 fade-in-element z-10"><?= $address; ?><br
                    class="xl:hidden"/> <span class="xl:ms-60"><?= $year; ?></span></p>
        </div>
    </div>
    <div class="overlay-gradient"></div>
</section>


<!-- section description of detail property -->
<section class="w-12/12 xl:ms-72 flex justify-center z-10" id="property-description">
        <div class="w-11/12 flex flex-col xl:flex-row justify-end foreword-description mb-16 xl:pe-20 figtree-light">
            <p class="pt-1 leading-8 text-ellipsis overflow-hidden w-full xl:w-6/12 fade-in-element">
            <?= $paragraph_left;?>
            </p>
            <p class="pt-1 leading-8 text-ellipsis overflow-hidden w-full xl:w-6/12 xl:ms-8 mt-8 xl:mt-0 fade-in-element">
            <?= $paragraph_right;?>
            </p>
        </div>
</section>

<!-- section galleries detail property -->
<section class="w-screen full-page mb-3 lg:mb-36 z-10" id="property-galleries">
    <div class="flex justify-center">
        <div class="w-full xl:hidden">
            <div class="slider fade-in-element">
                <?php
                    for ($i = 0; $i < count($fieldset_text_image); $i++) {
                        ?>
                            <article>
                                <div class="w-full">
                                    <img class="w-full h-full bg-no-repeat bg-cover bg-center object-cover lg:object-none" src="<?= $fieldset_text_image[$i]; ?>"alt ="Image <?= $i; ?>" onclick="openModal(<?= $i;?>)">
                                </div>
                                <h2 class="paragraph mt-[3rem] text-xl figtree-light"><?= $address;?></h2>
                                <p class="paragraph mt-5 mb-10 xl:mt-0 xl:mb-0 text-md figtree-light"><?= $fieldset_text[$i]["description"]; ?></p>
                            </article>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="w-11/12 hidden xl:block fade-in-element">
            <div class="w-full flex justify-center pb-2 mb-6">
                <?php
                    for ($i = 0; $i < count($fieldset_text_image); $i++) {
                        ?>
                            <div class="expander h-fit">
                                <div class="h-full">
                                    <div class="w-12/12 flex property-galleries__image__container">
                                        <img class="w-full h-full xl:w-full xl:h-auto xl:h-min-[50%] object-cover cursor-pointer" src="<?= $fieldset_text_image[$i]; ?>" onclick="openModal(<?= $i;?>)"/>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <div class="flex justify-between">
                <div class="w-full flex fade-in-element">
                    <h2 class="text-3xl figtree-light"><?= $address;?></h2>
                    <?php
                        for ($i = 0; $i < count($fieldset_text_image); $i++) {
                            ?>
                                
                            <p class="leading-8 pt-1 xl:ml-40 min-h-content-description text-ellipsis overflow-hidden description-gallery description-gallery-<?= $i; ?> figtree-light">
                                <?= $fieldset_text[$i]["description"]; ?>
                            </p>
                            <?php
                        }
                    ?>
                </div>
                <div class="flex justify-between fade-in-element">
                    <div class="w-4/12 flex justify-end fade-in-element">
                        <div class="w-10 h-10 flex justify-center items-center me-16 font-medium">
                            <p class="figtree-light hover:cursor-pointer hover:opacity-75" onclick="changeExpander(-1)">
                                <svg id="SvgjsSvg1011" width="30" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                    <defs id="SvgjsDefs1012"></defs>
                                    <g id="SvgjsG1013">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                            </p>
                        </div>

                        <div class="w-10 h-10 flex justify-center items-center rotate-180 font-medium fade-in-element">
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

<?php
    $video_data = rwmb_meta('properties_video', [], $post_id);
    $video_url = "";
    foreach ($video_data as $key => $value) {
        $video_url = $video_data[$key]['src'];
    }
?>
<section id="video" class="mx-5 lg:mx-20 mb-20 z-10 <?= $video_url == "" ? "hidden" : ""; ?>">
    <video class="w-full h-[40vh] lg:h-[60vh]" src="<?= esc_url($video_url);?>" controls>
        Your browser does not support the video tag.
    </video>
</section>

<!-- story section -->
<section class="w-screen full-page-height z-10" id="next-property">
    <a href="<?= $next_slug; ?>">
        <div id="single_project_footerBG" class="relative bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center" style="background-image: url(<?= $image_banner_next;?>)">
            <div class="bg-fixed w-11/12 flex bg-no-repeat bg-cover h-full pt-24">
                <div class="flex justify-between w-full">
                    <div class="flex z-20">
                        <div class="border w-10 h-10 xl:w-10 xl:h-10 rounded-full border-white flex justify-center items-center me-4 xl:me-12 rotate-180 font-medium hover:cursor-pointer">
                            <p class="figtree-light animate-pulse">
                                <svg id="SvgjsSvg1011" width="18" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                    <defs id="SvgjsDefs1012"></defs>
                                    <g id="SvgjsG1013">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="m 15.970695,3.001955 a 1.0000999,1.0000999 0 0 0 -0.6875,0.30274 l -7.9902299,7.98828 a 1.0000999,1.0000999 0 0 0 0,1.41406 l 7.9902299,7.98828 a 1.0000999,1.0000999 0 1 0 1.41407,-1.41406 l -7.2832099,-7.28125 7.2832099,-7.28125 a 1.0000999,1.0000999 0 0 0 -0.72657,-1.7168 z" color="#fff" font-family="sans-serif" font-weight="1000" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" fill="#fff" class="color000 svgShape"></path></svg></g></svg>
                            </p>
                        </div>
                        <div class="w-12/12">
                            <p class="figtree-light font-medium text-2xl mb-4 xl:mb-12 pt-2 fade-in-element">Up Next</p>
                            <p class="font-medium text-3xl lg:text-6xl mb-3 fade-in-element"><strong><?= $title_1_next; ?></strong></p>
                            <p class="font-medium text-4xl lg:text-8xl mb-12 fade-in-element"><strong><?= $title_2_next; ?></strong></p>
                            <div class="items-end w-full pb-16 xl:hidden fade-in-element">
                                <div class="flex explore-rotate-left">
                                    <p class="text-lg xl:text-2xl font-normal text-end me-3 figtree-light">
                                        Explore more
                                    </p>
                                    <div class="flex items-end pb-1 icon animate-pulse">
                                        <img class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items-end w-2/12 pb-16 hidden xl:flex fade-in-element">
                        <div class="flex explore-rotate-left">
                            <p class="text-lg xl:text-2xl font-normal text-end me-3 figtree-light">
                                Explore more
                            </p>
                            <div class="flex items-end pb-1 icon animate-pulse">
                                <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
    </a>
</section>

<section id="popup-galleries" class="opacity-0 z-[-9999] fixed left-0 top-0 bg-black h-fit min-w-screen min-h-screen pb-12 pt-5">
    <section class="flex justify-end mb-5 px-3 md:px-10">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0,0,256,256" onclick="hiddenModal()" class="cursor-pointer">
            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M7.71875,6.28125l-1.4375,1.4375l17.28125,17.28125l-17.28125,17.28125l1.4375,1.4375l17.28125,-17.28125l17.28125,17.28125l1.4375,-1.4375l-17.28125,-17.28125l17.28125,-17.28125l-1.4375,-1.4375l-17.28125,17.28125z"></path></g></g>
        </svg>
    </section>
    <section class="galleries-jumbotron w-screen px-3 md:px-10 ">
            <?php
                for ($i = 0; $i < count($fieldset_text_image); $i++) {
                    ?>
                        <figure class="">
                            <section class="h-[70vh] flex items-center justify-center">
                                <img class="w-auto h-full xl:w-auto object-cover object-center img-popup" src="<?= $fieldset_text_image[$i]; ?>" alt="image-gallery"/>
                            </section>
                        </figure>
                    <?php
                }
            ?>
    </section>
    <section id="slider-controller" class="flex justify-between items-center mt-3 px-3 md:px-10 ">
        <section id="slider-description" class="w-[50vw]">
            <?php
                for ($i = 0; $i < count($fieldset_text_image); $i++) {
                    ?>
                    <section>
                        <p class="leading-8 px-1 pt-1 xl:ml-40 min-h-content-description text-ellipsis overflow-hidden description-gallery description-gallery-<?= $i; ?> figtree-light">
                            <?= $fieldset_text[$i]["description"]; ?>
                        </p>
                    </section>
                    <?php
                }
            ?>
        </section>
        <section id="slider-controller-arrows" class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" onclick="prevSlick()" class="cursor-pointer">
                <path d="M6.586 12l8.707 8.707-1.414 1.414L4.758 12l9.121-9.121 1.414 1.414L6.586 12z" fill="#FFF"/>
            </svg>                    
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" onclick="nextSlick()" class="rotate-180 ml-20 cursor-pointer">
                <path d="M6.586 12l8.707 8.707-1.414 1.414L4.758 12l9.121-9.121 1.414 1.414L6.586 12z" fill="#FFF"/>
            </svg>                    
        </section>
    </section>

    <section class="galleries-preview w-screen px-3 md:px-10 ">
        <?php
            for ($i = 0; $i < count($fieldset_text_image); $i++) {
                ?>
                    <figure class="h-[5rem] xl:h-[7rem] p-2">
                        <img class="w-full h-full object-cover object-center opacity-30 galleries-skyland galleries-<?= $i;?> cursor-pointer"  onclick="slickGoTo(<?= $i;?>)" src="<?= $fieldset_text_image[$i]; ?>" alt="image-gallery"/>
                    </figure>
                <?php
            }
        ?>
    </section>            
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
<script>
    let currentIdx = 0, countSlick = <?= count($fieldset_text_image);?>

    $('.galleries-preview').slick({
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.galleries-jumbotron',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $('#slider-description').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.galleries-jumbotron',
    });

    $('.galleries-preview').on('afterChange', function(event, slick, currentSlide, nextSlide){
        slickGoTo(currentSlide)
    });

    $('.galleries-jumbotron').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        focusOnSelect: true,
    });

    $('.galleries-jumbotron').on('afterChange', function(event, slick, currentSlide, nextSlide){
        slickGoTo(currentSlide)
    });

    function nextSlick () {
        $('.galleries-jumbotron').slick("slickNext")
        currentIdx++
        changeCenterPreview()
        changeExpander(1)
    }
    function prevSlick () {
        $('.galleries-jumbotron').slick("slickPrev")
        currentIdx--
        changeCenterPreview()
        changeExpander(-1)
    }
    function slickGoTo(idx){
        $('#slider-description').slick("slickGoTo", idx)
        $('.galleries-jumbotron').slick("slickGoTo", idx)
        currentIdx = idx
        changeCenterPreview()
    }
    function changeCenterPreview(){
        if(currentIdx < 0){
            currentIdx = countSlick-1
        }else if (currentIdx >= countSlick){
            currentIdx = 0
        }
        $('.galleries-skyland').removeClass('opacity-100');
        $('.galleries-skyland').addClass('opacity-30');
        $('.galleries-'+currentIdx).addClass('opacity-100');
    }
    function hiddenModal () {
        $('#popup-galleries').removeClass('z-50');
        $('#popup-galleries').removeClass('opacity-100');
    }
    function openModal (idx) {
        $('#popup-galleries').addClass('z-50');
        $('#popup-galleries').addClass('opacity-100');
        slickGoTo(idx)
    }
    changeCenterPreview()
</script>
<?php get_footer() ?>