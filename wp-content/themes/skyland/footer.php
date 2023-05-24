    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> My Custom Theme. All rights reserved.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    
    <?php require get_theme_file_path( 'config.php' ); ?>
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    
    <script src="<?= $js_folder_path.get_the_title().'.js';?>"></script>
    </body>
</html>
