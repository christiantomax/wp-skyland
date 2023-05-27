<?php 
    require get_theme_file_path( 'config.php' );
?>

    <footer>
        <section class="w-screen full-page" id="footer">
            <div class="h-60 flex justify-center text-white text-1xl mb-16">
                <div class="flex w-11/12 items-between">
                    <div class="w-4/12 me-2">
                        <p class="h-2/4">Skye, Victoria, 3977<br/>Australia</p>
                        <div class="h-2/4 flex flex-col justify-between">
                            <a>Instagram</a>
                            <a>Email</a>
                            <a>Facebook</a>
                        </div>
                    </div>
                    <div class="w-4/12 me-2">
                        <div>
                            <img class="w-6/12 object-cover" src="<?= $assets_folder_path.'/img/logo.png';?>"/>
                            <p>&copy; Copyright <?php echo date('Y'); ?> Skyland Group. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="w-4/12 flex flex-col justify-between text-right">
                        <p>EN</p>
                        <div class="w-full flex justify-end w-4/12 h-fit explore-rotate-left">
                            <p class="text-white font-normal w-11/12 text-right">
                                Scroll to Top
                            </p>
                            <div class="ms-3 icon animate-pulse">
                                <img class="h-5" src="<?= $assets_folder_path.'/img/icon-arrow.png';?>"/>
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
