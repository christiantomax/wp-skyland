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
        );
        
        $query = new WP_Query($args);
        return $query->posts;
    }
?>

<?php 
    $prefix = "team_";
    $section = "section_";
    $languages = "";

    $title_right= rwmb_meta($prefix.$section.'title_right'.$languages);
    $paragraph= rwmb_meta($prefix.$section.'paragraph'.$languages);
?>
<!-- story section -->
<section class="w-screen mb-20 mt-20" id="team">
    <div class="bg-fixed bg-right bg-no-repeat bg-cover w-full h-full flex justify-center">
        <div class="bg-fixed w-11/12 lg:ps-4 flex bg-no-repeat bg-cover h-full pt-24">
            <div class="flex flex-col lg:flex-row justify-between items-end w-full lg:ps-0">
                <div class="flex flex-col lg:flex-row items-end">
                    <div class="w-full lg:w-3/12 mb-10 lg:mb-0">
                        <h1 class="font-medium text-7xl mb-0"><strong><?= $title_right; ?></strong></h1>
                    </div>
                    <div class="w-full lg:w-7/12">
                        <p class="pt-1 text-ellipsis overflow-hidden figtree-light ">
                            <?= $paragraph; ?>
                        </p>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 flex h-fit lg:justify-end explore-rotate-down me-4 ps-4 lg:ps-0 mt-5 lg:mt-0">
                    <p class="text-lg lg:text-md font-normal text-right figtree-light ">
                        Scroll
                    </p>
                    <div class="pt-2 ms-3 icon animate-pulse rotate-90">
                        <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    $list_all_post = get_post_without_taxonomy("t_post", "");
    $prefix = 'team';
?>
<!-- Section team -->
<section class="w-screen full-page mb-12 lg:mb-0 lg:ps-4" id="team-person">
    <div class="grid grid-cols-2 h-8-12 lg:mb-12 figtree-light ps-4 pe-4 lg:pe-16 lg:ps-16">
        <?php
            $limit_posts = count($list_all_post);
            for ($i = 0; $i < $limit_posts; $i++) {
                $post_id = $list_all_post[$i]->ID;

                $full_name = get_post_meta($post_id, $prefix . '_full_name' )[0];
                $position = get_post_meta($post_id, $prefix . '_position' )[0];
                $link = count(get_post_meta($post_id, $prefix . '_link' )) != null ? get_post_meta($post_id, $prefix . '_link' )[0] : '#';

                //get image banner project detail
                $image = get_post_meta($post_id, $prefix . '_image' )[0];
                $image = wp_get_attachment_image_src($image, 'full')[0];
        ?>
            <div class="w-full team-person__container__image lg:mb-16 <?= $i%2 == 0 ? 'me-4' : 'ms-4'?>">
                <a href="<?= $link; ?>" target="_blank">
                    <img class="w-full h-full object-cover" src="<?= $image; ?>"/>
                </a>
                <div class="flex flex-col lg:flex-row text-lg mt-2 lg:mt-12">
                        <a href="<?= $link; ?>" target="_blank">
                            <span><?= $full_name; ?></span>
                        </a>
                        <span class="lg:ms-32">
                            <a href="<?= $link; ?>" target="_blank">
                                <?= $position; ?>
                            </a>
                        </span>
                    </div>
            </div>
        <?php 
            }
        ?>
    </div>
</section>

<!-- section partners header -->
<section class="w-screen full-page flex justify-center lg:ps-4" id="team-partners">
    <div class="bg-fixed w-11/12 bg-no-repeat bg-cover h-full pt-24">
        <div class="flex mb-16">
            <div class="border w-8 h-8 lg:w-10 lg:h-10 p-2 lg:p-0 rounded-full border-white flex justify-center items-center me-4 xl:me-12">
                <p class="figtree-light">02</p>
            </div>
            <h1 class="font-medium text-4xl lg:text-7xl"><strong>Partners</strong></h1>
        </div>
    </div>
</section>

<?php 
    $list_all_post = get_post_without_taxonomy("partner", "");
	$prefix = 'partner';
?>
<!-- section partner list desktop -->
<section class="w-screen full-page flex justify-center hidden lg:flex" id="team-partners-list">
    <div class="w-full lg:w-11/12 lg:pe-4 lg:ps-4">
        
    <?php
        $item_width = 'w-full';
        $limit_posts = count($list_all_post);
        for ($i = 0; $i < $limit_posts; $i++) {
            $post_id = $list_all_post[$i]->ID;
            
            $name = get_post_meta($post_id, $prefix . '_name' )[0];
            $link = count(get_post_meta($post_id, $prefix . '_link' )) != null ? get_post_meta($post_id, $prefix . '_link' )[0] : '#';
            
            //get image banner project detail
            $image = get_post_meta($post_id, $prefix . '_image' )[0];
            $image = wp_get_attachment_image_src($image, 'full')[0];
            ?>

        <?php
            if($i % 5 == 0){
                ?>
                    <div class="w-full flex flex-row justify-center">
                <?php
            }
        ?>
            <div class="w-1/3 lg:w-1/5 max-h-52 team-partners-list__image mb-16 p-2">
                <a href="<?= $link; ?>" target="_blank">
                    <img class="w-full h-full object-cover bg-center" src="<?= $image; ?>"/>
                </a>
            </div>
            
        <?php
            if($i % 5 == 4 || $i + 1 == $limit_posts){
                ?>
                </div>
                <?php
            }
        ?>
        <?php 
            }
        ?>
    </div>
</section>

<!-- section partner list Mobile -->
<section class="w-screen full-page flex justify-center lg:hidden" id="team-partners-list">
    <div class="w-full lg:w-11/12 ml-3 mr-6">
        
    <?php
        $item_width = 'w-full';
        $limit_posts = count($list_all_post);
        for ($i = 0; $i < $limit_posts; $i++) {
            $post_id = $list_all_post[$i]->ID;
            
            $name = get_post_meta($post_id, $prefix . '_name' )[0];
            $link = count(get_post_meta($post_id, $prefix . '_link' )) != null ? get_post_meta($post_id, $prefix . '_link' )[0] : '#';
            
            //get image banner project detail
            $image = get_post_meta($post_id, $prefix . '_image' )[0];
            $image = wp_get_attachment_image_src($image, 'full')[0];
            ?>

        <?php
            if($i % 3 == 0){
                ?>
                    <div class="w-full flex flex-row justify-center">
                <?php
            }
        ?>
            <div class="w-1/3 lg:w-1/5 max-h-52 team-partners-list__image mb-16 p-2">
                <a href="<?= $link; ?>" target="_blank">
                    <img class="w-full h-full object-cover bg-center" src="<?= $image; ?>"/>
                </a>
            </div>
            
        <?php
            if($i % 3 == 2 || $i + 1 == $limit_posts){
                ?>
                </div>
                <?php
            }
        ?>
        <?php 
            }
        ?>
    </div>
</section>
<?php get_footer() ?>