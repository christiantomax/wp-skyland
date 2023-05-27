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
    <link rel="stylesheet" href="<?= $assets_folder_path."/style/".strtolower(get_the_title()).".css"; ?>">
    <!-- swiper -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
</head>
<body class="scroll-smooth bg-black">
<header>
    <div class="container">
        <!-- <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
            ));
            ?>
        </nav> -->
    </div>
</header>