<?php 
    require get_theme_file_path( 'config.php' );
    
    $prefix = "contact_";
    $section = "section_";
    $languages = "";
    
    $page_slug = 'contact'; // Replace with the actual slug of your page
    $page = get_page_by_path($page_slug);
    if ($page) {
        $post_id = $page->ID;
        // Now you can use the $post_id to retrieve the Metabox data
        $instagram = get_post_meta($post_id, $prefix.$section.'instagram'.$languages, true);
        $email = get_post_meta($post_id, $prefix.$section.'email'.$languages, true);
        $facebook = get_post_meta($post_id, $prefix.$section.'instagram'.$languages, true);
    }
?>

    <footer>
        <section class="w-screen full-page" id="footer">
            <div class="h-fit flex justify-center text-base xl:text-1xl mb-14 mt-0 pt-16 px-3 figtree-light relative bg-black z-30">
                <div class="flex flex-col xl:flex-row w-11/12 items-between">
                    <div class="w-full xl:w-3/12 me-2">
                        <div class="xl:hidden flex justify-between">
                            <img class="h-8 mb-8 xl:mb-0 footer__logo__container" src="<?= $assets_folder_path.'/img/logo.png';?>"/>
                            <p></p>
                        </div>
                        <p class="h-1/4">Skye, Victoria, 3977<br/>Australia</p>
                        <div class="h-2/4 pt-12 lg:pt-0 grid grid-cols-1 gap-4 hidden xl:block">
                            <div class="lg:my-7">
                                <a href="<?= $instagram != '' ? $instagram : '#'; ?>" target="_blank">Instagram</a>
                            </div>
                            <div class="lg:my-7">
                                <a href="<?= $email != '' ? $email : '#'; ?>" target="_blank">Email</a>
                            </div>
                            <div class="lg:my-7">
                                <a href="<?= $facebook != '' ? $facebook : '#'; ?>" target="_blank">Facebook</a>
                            </div>
                        </div>
                        <div class="h-2/4 grid grid-cols-3 xl:hidden">
                            <div class="flex flex-col">
                                <a class="my-4" href="<?= $instagram != '' ? $instagram : '#'; ?>" target="_blank">Ig</a>
                                <a class="my-4" href="<?= $email != '' ? $email : '#'; ?>" target="_blank">Mail</a>
                                <a class="my-4" href="<?= $facebook != '' ? $facebook : '#'; ?>" target="_blank">Fb</a>
                            </div>
                            <div class="flex flex-col ml-2">
                                <a href="<?= esc_url( home_url() )."/properties"; ?>" class="my-4">Property</a>
                                <a href="<?= esc_url( home_url() )."/investment"; ?>" class="my-4">Investment</a>
                                <a href="<?= esc_url( home_url() )."/about-us"; ?>" class="my-4">About Us</a>
                            </div>
                            <div class="flex flex-col ml-8">
                                <a href="<?= esc_url( home_url() )."/experience"; ?>" class="my-4">Experience</a>
                                <a href="<?= esc_url( home_url() )."/news"; ?>" class="my-4">News</a>
                                <a href="<?= esc_url( home_url() )."/contact"; ?>" class="my-4">Contact</a>
                            </div>
                        </div>
                        <div class="h-1/4 flex flex-col justify-between text-transparent">Skyland</div>
                    </div>
                    <div class="w-5/12 hidden xl:block me-2 ps-36">
                        <div class="flex flex-col">
                            <div class="w-6/12 h-1/4">
                                <img class="footer__logo__container" src="<?= $assets_folder_path.'/img/logo.png';?>"/>
                            </div>
                            <div class="h-2/4 pt-12 text-md">
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
                            <div class="flex items-end h-1/2 pt-12 lg:mt-10">
                                <p>&copy; Copyright <?php echo date('Y'); ?> Skyland Group. <span class="font-light">All rights reserved.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:w-4/12 me-2">
                        <div class="mt-10 xl:mt-0 h-full flex flex-col xl:justify-between items-center xl:items-end">
                            <p class="h-2/4 hidden xl:block"></p>
                            <a href="#">
                                <div class="w-full h-2/4 flex items-end justify-end w-4/12 h-fit icon-rotate-up">
                                    <p class="font-normal w-11/12 text-right mr-3">
                                        Scroll to Top
                                    </p>
                                    <div class="flex items-end pb-1 icon animate-pulse">
                                        <img class="h-4 w-[1.25rem]" src="<?= $assets_folder_path.'/icon/PANAH.png';?>"/>
                                    </div>
                                </div>
                            </a>
                            <div class="flex items-end h-1/2: mt-8 xl:hidden">
                                <p class="text-sm text-center">&copy; Copyright <?php echo date('Y'); ?> Skyland Group. <span class="font-light">All rights reserved.</span></p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    
    <?php
        echo '<script src="'.$js_folder_path.'global.js'.'"></script>';
        if (get_the_title() != 'investment') {
            echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
        }
        echo '<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>';
        if (is_tax('properties-category')) {
            echo '<script src="'.$js_folder_path.'properties.js'.'"></script>';
            echo '<link rel="stylesheet" href="'.$assets_folder_path."/style/properties.css".'">';
        }
        if(get_the_title() == 'Contact' || get_the_title() == 'Investment'){
            ?>
                <script src="https://www.google.com/recaptcha/api.js?render=6LdZJVYnAAAAAN_pf0ciaWc4fxLGzWWehDm822jB"></script>
                <script>
                    const submitButton = document.getElementById('submit');

                    const parentElement = submitButton.parentNode;

                    parentElement.classList.add('mt-5', 'flex', 'items-center', 'xl:justify-end');

                    const newSibling = document.createElement('div');

                    newSibling.classList.add('pt-2', 'ms-3', 'icon', 'animate-pulse');

                    const imgElement = document.createElement('img');
                    imgElement.classList.add('h-4', 'lg:h-4', 'pb-1');
                    imgElement.src = '<?= $assets_folder_path.'/img/icon-arrow.png';?>';

                    newSibling.appendChild(imgElement);

                    const referenceElement = document.querySelector('.icon');

                    referenceElement.insertAdjacentElement('afterend', newSibling);

                    parentElement.insertBefore(newSibling, submitButton.nextSibling);
                </script>
            <?php
        }
        if(get_the_title() == 'About Us' || get_the_title() == 'Investment'){
            echo '<script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>';
            echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>';
            ?>
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Split the text into individual elements (e.g., characters or words)
                        const textElement = document.getElementById("quotes");
                        const splitText = Splitting({ target: textElement });

                        // Animate the individual elements using CSS or any animation library of your choice
                        // For example, you can use CSS animations or GSAP for further animation effects
                        splitText[0].chars.forEach((char, index) => {
                            gsap.fromTo(char, {
                                autoAlpha: 0,
                                yPercent: 100,
                                ease: 'power2.out',
                            }, {
                                delay: index * 0.1,
                                autoAlpha: 1,
                                duration: 1,
                                yPercent: 0, 
                                scrollTrigger: {
                                    markers: false,
                                    trigger: '#quotes', // Use the myText element as the trigger
                                },
                            });
                        });
                    });

                    const fadeElements = document.querySelectorAll('.fade-in-element');

                    // Animate the opacity of elements from 0 to 1 with ScrollTrigger
                    fadeElements.forEach((element) => {
                        gsap.fromTo(
                        element,
                        {
                            autoAlpha: 0,
                            yPercent: 50, // Optional: Move the elements slightly up before fade-in
                        },
                        {
                            autoAlpha: 1,
                            yPercent: 0, // Optional: Move back to the original position after fade-in
                            duration: 2,
                            ease: 'power2.out',
                            scrollTrigger: {
                                markers: false,
                                trigger: element, // Use the current element as the trigger
                            },
                        }
                        );
                    });
                </script>
            <?php
        }
    ?>
    
    <script src="<?php 
        if (is_singular('property')) {
            echo $js_folder_path.'property-detail.js';
        }else if (is_singular('news')) {
            echo $js_folder_path.'news-detail.js';
        } else {
            echo $js_folder_path.strtolower(get_the_title()).'.js';
        }
    ?>">
    </script>

    </body>
</html>
