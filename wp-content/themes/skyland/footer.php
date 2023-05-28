<?php 
    require get_theme_file_path( 'config.php' );
?>

    <footer>
        <section class="w-screen full-page" id="footer">
            <div class="h-fit flex justify-center text-1xl mb-14">
                <div class="flex w-11/12 items-between">
                    <div class="w-3/12 me-2">
                        <p class="h-1/4">Skye, Victoria, 3977<br/>Australia</p>
                        <div class="h-2/4 pt-12 grid grid-cols-1 gap-4">
                            <a>Instagram</a>
                            <a>Email</a>
                            <a>Facebook</a>
                        </div>
                        <div class="h-1/4 flex flex-col justify-between text-transparent">Skyland</div>
                    </div>
                    <div class="w-5/12 me-2 ps-36">
                        <div class="flex flex-col">
                            <div class="w-6/12 h-1/4">
                                <img class="footer__logo__container" src="<?= $assets_folder_path.'/img/logo.png';?>"/>
                            </div>
                            <div class="h-2/4 pt-12">
                                <?php
                                    $menu_name = 'Menu Footer';

                                    $menu_exists = wp_get_nav_menu_object($menu_name);

                                    if ($menu_exists) {
                                        wp_nav_menu(array('menu' => $menu_name));
                                    } else {
                                        echo "The menu '" . $menu_name . "' does not exist.";
                                    }
                                ?>
                            </div>
                            <div class="flex items-end h-1/2 pt-12">
                                <p>&copy; Copyright <?php echo date('Y'); ?> Skyland Group. <span class="font-light">All rights reserved.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/12 me-2">
                        <div class="h-full flex flex-col justify-between items-end">
                            <p class="h-2/4">EN</p>
                            <div class="w-full h-2/4 flex justify-end w-4/12 h-fit icon-rotate-up">
                                <p class="font-normal w-11/12 text-right">
                                    Scroll to Top
                                </p>
                                <div class="ms-3 icon animate-pulse">
                                    <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <?php wp_footer(); ?>
    
    <?php require get_theme_file_path( 'config.php' ); ?>
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    
    <script src="<?= $js_folder_path.strtolower(get_the_title()).'.js';?>"></script>
    </body>
</html>
