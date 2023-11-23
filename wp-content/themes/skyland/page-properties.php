<?php 
    get_header();
    require get_theme_file_path( 'config.php' );

    $base_url = home_url();
    
    function get_post_without_taxonomy($post_type, $post_id) {
        $args = array(
            'post_type'      => $post_type,
            'posts_per_page' => -1,
            'post__not_in'   => array($post_id),
            'post_status'    => 'publish',
            'meta_key'       => 'properties_order_number',
            'orderby'        => 'meta_value_num',
            'order'          => 'DESC',
        );
        
        $query = new WP_Query($args);
        return $query->posts;
    }

    function get_post_with_taxonomy($post_type, $post_id, $taxonomy_name, $terms) {
        $args = array(
            'post_type'      => $post_type,
            'posts_per_page' => -1,
            'post__not_in'   => array($post_id),
            'post_status'    => 'publish',
            'tax_query'      => array(
                array(
                    'taxonomy' => $taxonomy_name,
                    'field'    => 'slug',
                    'terms'    => $terms,
                ),
            ),
            'meta_key'       => 'properties_order_number',
            'orderby'        => 'meta_value_num',
            'order'          => 'DESC',
        );
        
        $query = new WP_Query($args);
        return $query->posts;
    }
    $getCategory = 'All';
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
                    <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:me-12 fade-in-element">
                        <p class="figtree-light">01</p>
                    </div>
                    <div class="w-12/12 ps-1">
                        <h2 class="font-medium text-3xl lg:text-4xl mb-4 fade-in-element"><?= $title1; ?></h2>
                        <h1 class="font-medium text-4xl lg:text-7xl mb-4 mt-3 leading-[3rem] lg:mb-10 fade-in-element"><strong><?= $title2; ?></strong></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="w-12/12 lg:ms-72" id="property-description">
        <div class="flex flex-col lg:flex-row foreword-description mb-6 lg:mb-16 figtree-light ml-3 lg:ml-0 pl-16 lg:pl-0 pr-4 fade-in-element">
            <p class="pt-1 my-3 mr-5 leading-8 lg:my-0 text-ellipsis lg:w-4/12">
                <?= $paragraph_left; ?>
            </p>
            <p class="pt-1 my-3 mr-5 leading-8 lg:my-0 text-ellipsis lg:w-4/12 lg:ms-8">
                <?= $paragraph_right; ?>
            </p>
        </div>
        
        <div class="lg:w-12/12 lg:h-72 flex foreword-image-container ml-3 lg:ml-0 ps-16 lg:ps-0 fade-in-element">
            <img class="w-full h-full object-cover bg-center" src="<?= $image; ?>"/>
        </div>
</section>

<?php
    $terms = get_terms(array(
        'taxonomy' => 'properties-category',
        'hide_empty' => false,
    ));
    $limit_terms = count($terms);
	$prefix = 'properties_category_';
?>
<!-- section project list header -->
<section class="w-screen full-page fade-in-element" id="project-list">
    <div class="w-full h-full flex justify-center">
        <div class="bg-fixed w-full lg:w-11/12 flex bg-no-repeat bg-cover h-full pt-24 lg:pt-40 ml-3 lg:ml-0">
            <div class="flex flex-col lg:flex-row justify-between w-full lg:ps-0">
                <div class="w-full flex mb-4 lg:mb-0">
                    <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-2 lg:me-12">
                        <p class="figtree-light">02</p>
                    </div>
                    <div class="w-full flex flex-col lg:flex-row justify-between lg:mb-12">
                        <p class="font-medium text-4xl lg:text-6xl">The Projects</p>
                        <nav class="w-5/12 flex items-center hidden lg:flex lg:hidden">
                            <ul class="w-full flex justify-between item-center text-2xl text-slate-300 figtree-light">
                                <li class="font-medium cursor-pointer">
                                    <a href="<?= $base_url."/properties";?>" class="<?= $getCategory == 'All' ? 'font-bold text-white' : '';?>">
                                        All
                                    </a>
                                </li>
                                <?php
                                    for ($i = 0; $i < $limit_terms; $i++) {
                                        ?>
                                            <li class="font-medium cursor-pointer">
                                                <a href="<?= get_term_link($terms[$i]);?>/#news-list" class="<?= $getCategory == $title_1 ? 'font-bold text-white' : '';?>">
                                                    <?= $terms[$i]->name;?>
                                                </a>
                                            </li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div>
                    <nav class="p-0 xl:hidden fade-in-element">
                        <div class="flex flex-wrap items-center justify-between mx-auto p-0 ml-8">
                            <div class="w-full md:w-auto" id="navbar-dropdown">
                            <ul class="flex flex-col font-medium md:p-0 mt-4 hidden">
                                <li>
                                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" 
                                    class="figtree-light font-bold flex items-center justify-between w-full border-b-[1px] border-white ml-3 pr-8 pb-3 lg:pe-0 text-sm
                                        focus:border-b-[1px]
                                    ">
                                        <?= $getCategory ?> 
                                        <div class="flex items-end explore-rotate-left">
                                            <div class="flex items-end pb-1 icon animate-pulse">
                                                <img class="h-4 rotate-90" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                            </div>
                                        </div>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar" class="w-11/12 ml-8 z-10 hidden font-normal divide-y divide-gray-100 shadow backdrop-filter backdrop-blur-md bg-black bg-opacity-50">
                                        <ul class="figtree-light text-white py-2 pl-8 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                            <li>
                                                <a href="<?= $base_url."/properties";?>" class="block px-4 py-2 hover:bg-gray-100 font-bold">All</a>
                                            </li>
                                            <?php
                                                $currentURL = add_query_arg(array(), $wp->request);
                                                for ($i = 0; $i < $limit_terms; $i++) {
                                                    ?>
                                                        <li>
                                                            <a href="<?= get_term_link($terms[$i]);?>" class="block px-4 py-2 hover:bg-gray-100 opacity-75"><?= $terms[$i]->name;?></a>
                                                        </li>
                                                    <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $list_all_post = $getCategory == 'All' ? 
        get_post_without_taxonomy("property", "") : 
        get_post_with_taxonomy("property", "", "properties-category", $getCategory);
    $limit_posts = count($list_all_post);
	$prefix = 'properties_';
    $idx_print = 0;
?>
<!-- section news list item -->
<section class="w-screen full-page flex-col items-center hidden lg:flex" id="news-list">
        <div class="w-11/12 h-full flex items-end flex-col justify-center pb-2 ms-15 figtree-light">
    <?php
        for ($i = 0; $i < $limit_posts/3; $i++) {
           
            $loopingItem = $i * 3 + 3;
    ?>
        <div class="w-full flex justify-end ms-24 <?= ($i == round($limit_posts/3)-1 ? ' ' : 'mb-8')?>?>">
            <div class="w-full flex justify-between border-b-[1px] border-white pb-8 project-list__container__project">
            <?php
                for ($j = $i * 3; $j < $loopingItem && $j < $limit_posts; $j++, $idx_print++) {
                        $post_id = $list_all_post[$idx_print]->ID;

                        $title_1 = get_post_meta($post_id, $prefix . 'title_1' )[0];
                        $title_2 = get_post_meta($post_id, $prefix . 'title_2' )[0];
                        $year = get_post_meta($post_id, $prefix . 'year' )[0];
                        $paragraph_left = get_post_meta($post_id, $prefix . 'paragraph_left' )[0];

                        //get image banner project detail
                        $image_banner = get_post_meta($post_id, $prefix . 'image_banner' )[0];
                        $image_banner = wp_get_attachment_image_src($image_banner, 'full')[0];
                        $link_slug = get_permalink($post_id);

                        // echo '<script>console.log("i",'.$i.',"==",'.($j % 3 + 1).')</script>';
                    ?>
                    <div class="expander h-90 fade-in-element" items="<?=($i+1)?>_<?=($j % 3 + 1)?>">
                        <a class="w-full" href="<?= $link_slug; ?>">
                            <div class="h-full w-full">
                                <div class="w-12/12 flex h-80 bg-[url(<?= $image_banner;?>)] bg-cover bg-center">
                                </div>
                                <header class="mt-6 text-3xl h-10/12 truncate pb-2">
                                    <time class="text-2xl me-8"><?= $year;?> </time><?= $title_1.' '.$title_2;;?>
                                </header>
                                <div class="text-ellipsis overflow-hidden project-description-<?= $j; ?> project-description property-detail" items="desc_<?=($i+1)?>_<?=($j % 3 + 1)?>">
                                    <p class="property-project-description pb-4 leading-8">
                                        <?= trim(substr($paragraph_left,0,120));?><?=(substr(trim(substr($paragraph_left,0,120)), -1) === '.' ? '' : '...')?>
                                    </p>
                                </div>
                                <div class="flex mt-6 pb-4 project-description-<?= $j; ?> project-description property-detail" items="explore_<?=($i+1)?>_<?=($j % 3 + 1)?>">
                                    <a href="<?= $link_slug;?>">
                                        <div class="flex explore-rotate-left">
                                            <p class="text-md font-normal text-end me-3">
                                                Explore more
                                            </p>
                                            <div class="flex items-end pb-1 icon animate-pulse">
                                                <img class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            ?>

            <?php
                // print last row
                if ($i * 3 + 3 > $limit_posts && $limit_posts % 3 != 0) {
                    $countLastRow = 3 - $limit_posts % 3;
                    for ($k = 0; $k < $countLastRow; $k++) {
                        ?>
                        <div class="h-90 opacity-0 fade-in-element">
                            <article class="h-full">
                                <div class="w-12/12 flex h-80">
                                    <img class="w-full h-full object-cover" src="<?=get_template_directory_uri()?>/assets/img/property-placeholder.png"/>
                                </div>
                                <header class="mt-6 text-3xl h-10/12 truncate pb-2">
                                    <time class="text-2xl me-8"> </time>
                                </header>
                                <div class="text-ellipsis overflow-hidden project-description-<?= $j; ?> project-description">
                                    <p class="property-project-description pb-4">
                                    </p>
                                </div>
                                <div class="flex mt-6 pb-4 project-description-<?= $j; ?> project-description">
                                    
                                </div>
                            </article>
                        </div>
                        <?php
                    }
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
<section class="w-screen full-page flex flex-col items-center lg:hidden" id="news-list">
    <div class="w-full h-full flex items-end flex-col justify-center pb-2 figtree-light">
        <div class="w-full flex justify-end mb-8">
            <div class="flex flex-col justify-end pb-8 project-list__container__project">
                <?php
                    for ($i = 0; $i < $limit_posts; $i++) {
                        $post_id = $list_all_post[$i]->ID;

                        $title_1 = get_post_meta($post_id, $prefix . 'title_1' )[0];
                        $title_2 = get_post_meta($post_id, $prefix . 'title_2' )[0];
                        $year = get_post_meta($post_id, $prefix . 'year' )[0];
                        $paragraph_left = get_post_meta($post_id, $prefix . 'paragraph_left' )[0];

                        //get image banner project detail
                        $image_banner = get_post_meta($post_id, $prefix . 'image_banner' )[0];
                        $image_banner = wp_get_attachment_image_src($image_banner, 'full')[0];
                        $link_slug = get_permalink($post_id);
                        ?>
                        <div class="w-full h-90 pe-4 border-b-[1px] border-white mb-5">
                            <a href="<?= $link_slug;?>">
                                <article class="h-full flex mt-4">
                                    <div>
                                        <time class="text-sm me-8"><?= $year;?> </time>
                                    </div>
                                    <div>
                                        <div class="w-12/12 flex h-32 fade-in-element">
                                            <img class="w-full h-full object-cover" src="<?= $image_banner;?>"/>
                                        </div>
                                        <header class="mt-6 text-xl pb-2 flex fade-in-element">
                                            <h1 class="text-2xl font-bold"><?= $title_1.' '.$title_2;?></h1>
                                        </header>
                                        <div class="text-ellipsis overflow-hidden fade-in-element">
                                            <p class="pb-4 text-md mt-4 mr-5 leading-8">
                                                <?= $paragraph_left;?>
                                            </p>
                                        </div>
                                        <div class="flex mt-3 mb-8 fade-in-element">
                                            <a href="<?= $link_slug;?>">
                                                <div class="flex explore-rotate-left">
                                                    <p class="text-md font-normal text-end me-3">
                                                        Explore more
                                                    </p>
                                                    <div class="flex items-end pb-1 icon animate-pulse">
                                                        <img class="h-4" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>