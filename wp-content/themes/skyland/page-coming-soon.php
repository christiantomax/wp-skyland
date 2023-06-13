<?php
    require get_theme_file_path( 'config.php' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Skyland Properties Coming Soon">
    <meta name="keywords" content="Skyland, Properties, Apartment, House, Office, Coming Soon">
    <meta name="og:description" content="Skyland Properties Coming Soon">
    <meta name="og:keywords" content="Skyland, Properties, Apartment, House, Office, Coming Soon">
    <meta name=”robots” content="index, follow">
    <meta name="author" content="Maximillian Christianto">
    <title>Coming Soon | Skyland</title>
    <link rel="stylesheet" href="<?= $assets_folder_path."/style/font.css"; ?>">
</head>
<body class="scroll-smooth bg-black text-white overflow-x-hidden relative">
        <section class="w-screen h-screen full-page relative" id="coming-soon">
            <div class="w-screen h-screen flex flex-col justify-between items-center bg-dark py-20 lora-regular" style="color: #BF955B;">
                <h1 class="text-3xl"><strong>Under Construction</strong></h1>
                <div class="flex flex-col items-center justify-center">
                    <div class="w-28 h-[5.5rem]">
                        <img class="w-full h-full object-cover bg-top bg-cover bg-no-repeat rounded-full" src="<?= $assets_folder_path."/img/logo-gold.gif";?>">
                    </div>
                    <h2 class="text-5xl mt-5 text-center"><strong>Skyland</strong></h2>
                </div>
                <div class="flex text-xl">
                    <a class="mx-8" href="https://www.instagram.com/skyland.group/" target="_blank">Instagram</a> 
                    <a class="mx-8" href="mailto:angeline@skylandgroup.com.au">Email</a>
                </div>
            </div>
        </section>

        <footer>
        </footer>
            <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>
