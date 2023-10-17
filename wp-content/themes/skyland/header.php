<?php
    require get_theme_file_path( 'config.php' );
    $meta_seo = [];
    $meta_seo['About-Us'] = 'about_';
    $meta_seo['Contact'] = 'contact_';
    $meta_seo['Experience'] = 'experience_';
    $meta_seo['Invesment'] = 'investment_';
    $meta_seo['Latest-News'] = 'news_latest_';
    $meta_seo['Properties'] = 'property_';
    $meta_seo['Invesment'] = 'investment_';
    $meta_seo['Team'] = 'investment_';

    $keyword = 'meta_keyword';
    $description = 'meta_description';
    
    if (array_key_exists(get_the_title(), $meta_seo)) {
        $keyword = $meta_seo[get_the_title()].$keyword;
        $description = $meta_seo[get_the_title()].$description;
    } else {
        $keyword = 'home_'.$keyword;
        $description = 'home_'.$description;
    }
    $keyword= rwmb_meta($keyword);
    $description= rwmb_meta($description);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="overflow-x-hidden">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <meta name="description" content="<?= $description; ?>">
    <meta name="keywords" content="<?= $keyword; ?>">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?= $description; ?>">
    <meta property="og:image" content="<?= esc_url($site_icon_url); ?>">
    <meta property="og:url" content="<?= get_permalink();?>">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri()?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri()?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri()?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri()?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= get_template_directory_uri()?>/assets/favicon/safari-pinned-tab.svg" color="#bf955b">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">

    <script src="https://cdn.tailwindcss.com"></script>

    <?php
        $site_icon_id = get_option('site_icon');
        $site_icon_url = get_site_icon_url($size = null, $blog_id = null, $scheme = null);

        if (!empty($site_icon_url)) {
            echo '<link rel="icon" href="' . esc_url($site_icon_url) . '" />';
        }
    ?>

    <link rel="stylesheet" href="<?= $assets_folder_path."/style/font.css"; ?>">
    <link rel="stylesheet" href="<?= $assets_folder_path."/style/style.css"; ?>">
    <link rel="stylesheet" href="<?php 
        if (is_singular('property')) {
            echo $assets_folder_path."/style/".'property-detail.css';
        } else if (is_singular('news')) {
            echo $assets_folder_path."/style/".'news-detail.css';
        } else {
            echo $assets_folder_path."/style/".strtolower(get_the_title()).".css";
        }
        ?>">
    <?php 
        if (is_tax('properties-category')) {
            echo '<link rel="stylesheet" href="'.$assets_folder_path."/style/properties.css".'">';
        }
        echo '<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>';
    ?>
    <!-- swiper -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <?php 
        if(get_the_title() != 'Contact' && get_the_title() != 'Investment'){
            // echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />';
        }
        
    ?>
</head>
<body class="bg-black text-white overflow-x-hidden relative lora-regular">
    <div class="rounded-xl" id="moving-object"></div>
    <section class="w-screen h-screen flex flex-col justify-between items-center bg-dark lora-regular" id="loader-screen">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <div class="flex flex-col items-center">
                <div class="w-28 h-[5.5rem]">
                    <img class="w-full h-full object-cover bg-top bg-cover bg-no-repeat rounded-full" src="<?= $assets_folder_path."/img/logo-gold.gif";?>">
                </div>
                <h2 class="text-5xl mt-5 text-center"><strong>Skyland</strong></h2>
            </div>
        </div>
    </section>

<?php 
    require get_theme_file_path( 'navbar.php' );
?>