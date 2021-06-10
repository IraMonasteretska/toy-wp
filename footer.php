<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toy
 */
?>
</main>
<footer class="pink-footer">
        <div id="scene_footer" class="footer-parallax">
            <div data-depth="0.2">
                <img src="<?php echo SD_THEME_IMAGE_URI; ?>/footer-perl1.png" alt="perl">
            </div>
        </div>
        <div class="container-fluid">
            <div class="pink-footer__content">
                <p><?php echo date('Y'); ?>. <?php the_field('all_rights_reserved', 'option'); ?></p>
                <div class="scrol-up">up</div>
            </div>
        </div>
    </footer>	
<?php wp_footer(); ?>

</body>
</html>
