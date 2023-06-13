<?php
    require get_theme_file_path( 'config.php' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <script src="https://cdn.tailwindcss.com"></script>

    <?php
        $site_icon_id = get_option('site_icon');
        $site_icon_url = get_site_icon_url($size = null, $blog_id = null, $scheme = null);

        if (!empty($site_icon_url)) {
            echo '<link rel="icon" href="' . esc_url($site_icon_url) . '" />';
        }
    ?>

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
        if (strtolower(get_the_title()) == "home") {
            echo '<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>';
        }
    ?>
    <!-- swiper -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
</head>
<body class="scroll-smooth bg-black text-white overflow-x-hidden relative">
<header>
    <nav class="fixed top-0 w-full z-10" id="nav-header">
        <div class="flex justify-center items-center pt-10 ">
            <div class="w-11/12 flex justify-between items-center">
                <div class="w-4/12">
                    <img class="nav-header__logo__container" src="<?= $assets_folder_path.'/img/logo.png';?>"/>
                </div>
                <?php
                    $menu_name = 'Menu Header';
    
                    $menu_exists = wp_get_nav_menu_object($menu_name);
    
                    if ($menu_exists) {
                        wp_nav_menu(array('menu' => $menu_name));
                    } else {
                        echo "The menu '" . $menu_name . "' does not exist.";
                    }
                ?>
            </div>
        </div>
    </nav>
</header>