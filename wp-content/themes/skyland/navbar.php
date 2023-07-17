<?php 
    $base_url = home_url();
?>
<header>
    <nav id="navbar" class="bg-transparent fixed w-full z-40 py-2 xl:py-5 top-0 left-0">
        <div class="flex flex-wrap items-center justify-between mx-auto xl:ml-12 xl:mr-8 p-0 py-4 xl:py-0 md:p-4 text-3xl xl:text-lg text-white figtree-light">
            <a href="<?= $base_url; ?>" class="flex items-center">
                <img src="<?= $assets_folder_path.'img/logo.png';?>" class="h-8 xl:h-10 mr-3 ms-4 lg:ms-0" alt="Logo" />
            </a>
            <button id="nav-btn-macaron" data-collapse-toggle="navbar-dropdown" type="button" class="me-4 inline-flex items-center p-2 text-sm rounded-lg xl:hidden hover:opacity-75 focus:outline-none" aria-controls="navbar-dropdown" aria-expanded="false">
                <svg width="35px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Menu / Menu_Duo_LG"> <path id="Vector" d="M3 15H21M3 9H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
            </button>
            <div class="hidden w-full h-screen xl:h-fit xl:block xl:w-auto" id="navbar-dropdown">
                <ul id="nav-service-dropdown" class="h-full xl:w-fit flex flex-col justify-between items-center font-medium py-16 xl:p-0 md:p-0 xl:bg-transparent xl:justify-start xl:flex-row xl:mt-0 xl:border-0">
                    <li>
                        <a href="<?= $base_url; ?>/about-us" class="block py-2 mx-6 rounded hover:text-gray-200 nav-service-dropdown__li" aria-current="about">About Us</a>
                    </li>
                    <li>
                        <a href="<?= $base_url; ?>/properties" class="block py-2 mx-6 rounded hover:text-gray-200 nav-service-dropdown__li" aria-current="about">Property</a>
                    </li>
                    <li>
                        <a href="<?= $base_url; ?>/investment" class="block py-2 mx-6 rounded hover:text-gray-200 nav-service-dropdown__li" aria-current="about">Investment</a>
                    </li>
                    <li>
                        <a href="<?= $base_url; ?>/experience" class="block py-2 mx-6 rounded hover:text-gray-200 nav-service-dropdown__li" aria-current="about">Experience</a>
                    </li>
                    <li>
                        <a href="<?= $base_url; ?>/latest-news" class="block py-2 mx-6 rounded hover:text-gray-200 nav-service-dropdown__li" aria-current="about">News</a>
                    </li>
                    <li>
                        <a href="<?= $base_url; ?>/contact" class="block py-2 mx-6 rounded hover:text-gray-200 nav-service-dropdown__li" aria-current="about">Contact</a>
                    </li>
                    <li>
                        <p class="text-sm mb-10 mt-10 xl:hidden">© Copyright 2023 Skyland Group. All Rights Reserved.</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>